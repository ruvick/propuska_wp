<?php
function pass_cmp($a,$b){
    if($a->status=="ACTIVE" && $b->status!="ACTIVE"){
        return -63072000;
    }
    if($a->status!="ACTIVE" && $b->status=="ACTIVE"){
        return 63072000;
    }

    return strtotime($b->dateEnd)-strtotime($a->dateEnd);
}

function covert_data($data){
    $out=array();
    for ($i=0; $i < count($data) ; $i++) {
        $row=array();
        $row['zone']=$data[$i]->propusktype;
        $row['passInfo']=$data[$i]->seriya;
        $row['dateStart']=date("d.m.Y",strtotime($data[$i]->datestart));
        $row['dateEnd']=date("d.m.Y",strtotime($data[$i]->dateend));
        $row['status']=$data[$i]->colorstatus;
		$row['allinfo']=$data[$i];
		if (!empty($data[$i]->cancelationdate))
			$row['cancelationdate'] = date("d.m.Y",strtotime($data[$i]->cancelationdate));
		
        array_push($out,(object)$row);
    }
    return $out;
}

function cryptoJsAesDecrypt($passphrase, $jsonString){

    $jsondata = json_decode($jsonString, true);

    try {
        $salt = hex2bin($jsondata["s"]);
        $iv  = hex2bin($jsondata["iv"]);
    } catch(\Exception $e) { return null; }

    $ct = base64_decode($jsondata["ct"]);
    $concatedPassphrase = $passphrase.$salt;
    $md5 = array();
    $md5[0] = md5($concatedPassphrase, true);
    $result = $md5[0];

    for ($i = 1; $i < 3; $i++) {
        $md5[$i] = md5($md5[$i - 1].$concatedPassphrase, true);
        $result .= $md5[$i];
    }

    $key = substr($result, 0, 32);
    $data = openssl_decrypt($ct, 'aes-256-cbc', $key, true, $iv);

    return json_decode($data, true);
}

function getNewData($vehicle_number){
	
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $curl = curl_init();
    $vehicle_number=$name = str_replace(' ', '', $vehicle_number);
    $post="string=".$vehicle_number;
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://proverka-propuska.net/serch_number22.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
            "User-Agent:".$userAgent
        ),
    ));


    $result = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    }
	$result=json_decode(cryptoJsAesDecrypt($userAgent, $result));
	

	
	if (isset($result->isnotfound)){
        return array();
    }
    $result=covert_data($result);
    usort($result, "pass_cmp");
    return $result;

}?>
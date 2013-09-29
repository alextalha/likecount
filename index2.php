<?php
$url = "https://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url=%27http://mashable.com/2011/03/21/google-chrome-icon/%27&format=xml";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$xml = simplexml_load_string($data);
print_r($xml);
?>

?>
<?php

$params = [
    'source' => 'universal',
    'url' => 'https://www.priceline.com/hotels?semprod=brand&refid=plgooglecpcbsl&refclickid=d%3ac%7c10941049094%7c460243569023%7cpriceline%7ce%7cg%7ckwd-10842441%7c9062284&gad_source=1&gclid=cj0kcqiayewrbhddarisagp1mwt8yb2nqslfysgnfq4tumcnvwpbyxa4bm_m6g-xxhg1ieghhdtyleyaasddealw_wcb&slingshot=1852'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>
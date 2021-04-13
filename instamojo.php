<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_9ab8bd4d134a8e1b94790103aad",
                  "X-Auth-Token:test_30cfe0e94148626c943048d8c95"));
$payload = Array(
    'purpose' => 'E-shop',
    'amount' => '798',
    'phone' => '7723949061',
    'buyer_name' => 'Lokesh pawar',
    'redirect_url' => 'http://localhost/TS-02/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'lokesh1pawar@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo '<pre>';
print_r($response);
?>
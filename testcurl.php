<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "test:test");
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($ch, CURLOPT_POST, true);

$response = curl_exec($ch);

if (!$response) {
    echo "CURL ERROR: " . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>

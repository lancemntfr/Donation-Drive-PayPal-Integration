<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function generateAccessToken() {
    $client = "AY6u4H6soXFMgZnUAuF6THuqPVIDeVmJ8X-bOXz-ZIwLAdeiJKyluuEtEmpKdS-I2zTD3aviw4EQHuPz";
    $secret = "ECH6Xw-MpT4hUhFaG1W_4kIcqDPSq2WUxD5r-mHg1HecPJEOjiMfBYIr70GtAetXhbN9UEqS_BmXZAXJ";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v1/oauth2/token");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);
    curl_setopt($ch, CURLOPT_USERPWD, $client . ":" . $secret);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (!$response) {
        die(json_encode(["error" => "Could not connect to PayPal"]));
    }

    $json = json_decode($response, true);
    if (!isset($json["access_token"])) {
        die(json_encode(["error" => "No access token received"]));
    }

    return $json["access_token"];
}

function createOrder() {
    $token = generateAccessToken();

    $data = [
        "intent" => "CAPTURE",
        "purchase_units" => [
            [
                "amount" => [
                    "currency_code" => "USD",
                    "value" => "15.00"
                ]
            ]
        ]
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v2/checkout/orders");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer $token"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if (!$response) {
        die(json_encode(["error" => "Failed to create order"]));
    }

    return json_decode($response, true);
}

function captureOrder($orderId) {
    $token = generateAccessToken();

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v2/checkout/orders/$orderId/capture");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer $token"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if (!$response) {
        die(json_encode(["error" => "Failed to capture order"]));
    }

    return json_decode($response, true);
}

if (isset($_GET["action"])) {
    header("Content-Type: application/json");

    if ($_GET["action"] === "create") {
        echo json_encode(createOrder());
        exit;
    }

    if ($_GET["action"] === "capture" && isset($_GET["orderID"])) {
        echo json_encode(captureOrder($_GET["orderID"]));
        exit;
    }
}

?>

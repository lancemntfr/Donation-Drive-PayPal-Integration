<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PayPal Integration</title>
</head>
<body>

<h2>PayPal Payment Demo</h2>

<div id="paypal-button-container"></div>

<script src="https://www.paypal.com/sdk/js?client-id=AY6u4H6soXFMgZnUAuF6THuqPVIDeVmJ8X-bOXz-ZIwLAdeiJKyluuEtEmpKdS-I2zTD3aviw4EQHuPz&currency=USD"></script>

<script>
paypal.Buttons({

    createOrder: function() {
        return fetch("paypal.php?action=create")
        .then(res => res.json())
        .then(data => data.id);
    },

    onApprove: function(data) {
        return fetch("paypal.php?action=capture&orderID=" + data.orderID)
        .then(res => res.json())
        .then(details => {
            alert("Payment completed by " + details.payer.name.given_name);
            console.log(details);
        });
    }

}).render('#paypal-button-container');
</script>

</body>
</html>

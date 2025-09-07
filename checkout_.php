<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AXIK3bKM7RlH7GEPYcvOeWMksRHWC0WE_5WrKyksE7B1dhqKZXrK-9f7q5BivKE3AS08wiKBl8OaChxd&currency=USD"></script>
</head>
<body> 

<div id="paypal-button-container" class="paypal"></div>

<script>
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill',
            label: 'pay'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 100,
                       
                    }
                }]
            });
        },

        onApprove: function(data, actions) {
            actions.order.capture().then(function(detalles) {
                // Redirecciona a captura.php y pasa los detalles, token y paymentID como parámetros
                //window.location = "captura.php?detalles=" + JSON.stringify(detalles) + "&token=" + data.facilitatorAccessToken + "&paymentID=" + data.paymentID;
                console.log(detalles)
            });
        },

        onCancel: function(data) {
            alert("Pago cancelado");
            console.log(data);
        }
    }).render('#paypal-button-container');
</script>

</body>
</html>
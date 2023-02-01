# ForoPay library for php

### Example
```php
$foropay = new Foropay([
    'privateKey' => ''
]);

$data = [
    "terminalId" => "", 
    "transactionType" => "sale", 
    "locale" => "en", 
    "orderDetails" => [
        "description" => "Demo Payment", 
        "orderReference" => "1675246018766", 
        "cartReference" => null, 
        "amount" => 126.27, 
        "currency" => "EUR", 
        "items" => []
    ], 
    "urls" => [
        "cancel" => "", 
        "success" => "", 
        "failure" => "", 
        "callback" => "" 
    ],
    "customerDetails" => [
        "accountId" => "ID123", 
        "email" => "test@mail.ru", 
        "deliveryAddress" => [
            "firstName" => "Foropay", 
            "lastName" => "Checkout", 
            "addressLine1" => "Address Line 1", 
            "addressLine2" => "Address Line 2", 
            "postalCode" => "P1234", 
            "city" => "Berlin", 
            "phone" => "+187312345", 
            "country" => "Germany" 
        ], 
        "billingAddress" => [
            "firstName" => "Foropay", 
            "lastName" => "SDK", 
            "addressLine1" => "Address Line 1", 
            "addressLine2" => "Address Line 2", 
            "postalCode" => "P1234", 
            "city" => "Berlin", 
            "phone" => "+187312345", 
            "country" => "Germany" 
        ]
    ]
]; 

$response = $foropay->create_payment_session($data);
?>
<pre>
    <?php var_dump($response); ?>
</pre>

```
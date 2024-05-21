<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $orderDetails = array();

    if (isset($_POST['espresso']) && $_POST['espresso'] > 0) {
        $espressoQuantity = $_POST['espresso'];
        $orderDetails['Espresso'] = $espressoQuantity;
    }

    if (isset($_POST['tea']) && $_POST['tea'] > 0) {
        $teaQuantity = $_POST['tea'];
        $orderDetails['Tea'] = $teaQuantity;
    }

    if (isset($_POST['milkshake']) && $_POST['milkshake'] > 0) {
        $milkshakeQuantity = $_POST['milkshake'];
        $orderDetails['Milkshake'] = $milkshakeQuantity;
    }

    if (isset($_POST['sahlep_latte']) && $_POST['sahlep_latte'] > 0) {
        $sahlepLatteQuantity = $_POST['sahlep_latte'];
        $orderDetails['Sahlep Latte'] = $sahlepLatteQuantity;
    }

    if (isset($_POST['hot_chocolate']) && $_POST['hot_chocolate'] > 0) {
        $hotChocolateQuantity = $_POST['hot_chocolate'];
        $orderDetails['Hot Chocolate'] = $hotChocolateQuantity;
    }

    if (isset($_POST['ice_cream']) && $_POST['ice_cream'] > 0) {
        $iceCreamQuantity = $_POST['ice_cream'];
        $orderDetails['Ice Cream'] = $iceCreamQuantity;
    }

    if (isset($_POST['ice_cappuccino']) && $_POST['ice_cappuccino'] > 0) {
        $iceCappuccinoQuantity = $_POST['ice_cappuccino'];
        $orderDetails['Ice Cappuccino'] = $iceCappuccinoQuantity;
    }

    if (isset($_POST['coffee_packet_500g']) && $_POST['coffee_packet_500g'] > 0) {
        $coffeePacket500gQuantity = $_POST['coffee_packet_500g'];
        $orderDetails['Coffee Packet 500g'] = $coffeePacket500gQuantity;
    }

    if (isset($_POST['coffee_packet_1kg']) && $_POST['coffee_packet_1kg'] > 0) {
        $coffeePacket1kgQuantity = $_POST['coffee_packet_1kg'];
        $orderDetails['Coffee Packet 1kg'] = $coffeePacket1kgQuantity;
    }

   
    $orderFile = 'orders.txt';
    $orderContent = date('Y-m-d H:i:s') . "\n" . json_encode($orderDetails) . "\n\n";
    file_put_contents($orderFile, $orderContent, FILE_APPEND);

    header("Location: CAFFEINE.html");
    exit;
} else {
    header("Location: CAFFEINE.html");
    exit;
}
?>

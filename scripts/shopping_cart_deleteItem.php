<?php
session_start();
include("connect_to_database.php");
$orderItemID = $_GET['orderItemID'];
$orderID = $_GET['orderID'];

$query = "DELETE FROM my_OrderItem WHERE order_item_id='$orderItemID'";
$success = mysqli_query($db, $query);

if (!$success) {
    echo ("Error: DELETE order item failure in shoppingCartDeleteItem.");
    exit(0);
}

$query = "SELECT COUNT(*) AS numItemsStillInOrder
FROM my_OrderItem
WHERE order_id='$orderID'";
$return_value = mysqli_query($db, $query);
$row = mysqli_fetch_array($return_value, MYSQLI_ASSOC);

if ($row[numItemsStillInOrder] == 0) {
    $query = "DELETE FROM my_Order WHERE order_id='$orderID'";
    $success = mysqli_query($db, $query);

    if (!$success) {
        echo ("Error: DELETE order failure in shoppingCartDeleteItem.");
        exit(0);
    }
}
header("Location:../pages/shopping_cart.php?productID=view");
?>

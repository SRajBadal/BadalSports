<?php

session_start();
if (isset($_SESSION['customer_id']))
    header("Location: ../pages/estore.php");

$_SESSION['POST_SAVE'] = $_POST;

include("connect_to_database.php");
$query = "SELECT * FROM my_Customers WHERE login_name = '$_POST[loginName]'";
$rowsWithMatchingLoginName = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($rowsWithMatchingLoginName);
if ($numRecords == 0) {
    header("Location: ../pages/form_login.php?retrying=true1");
}
if ($numRecords == 1) {
    $row = mysqli_fetch_array($rowsWithMatchingLoginName, MYSQLI_ASSOC);
    if (md5($_POST['loginPassword']) == $row['login_password']) {
        $_SESSION['customer_id'] = $row['customer_id'];
        $_SESSION['salutation'] = $row['salutation'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['middle_initial'] = $row['middle_initial'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['login_name'] = $row['login_name'];

        $productID = $_SESSION['purchasePending'];
        if ($productID != "") {
            unset($_SESSION['purchasePending']);
            $destination = "../pages/shopping_cart.php?productID=$productID";
            $goto = "Location: ".$destination;
        } else {
            $destination = getenv('HTTP_REFERER');
            $goto = "Location: ".$destination;
        }
        header($goto);
        
    } else {
      header("Location: ../pages/form_login.php?retrying=true2");  
    }
}
mysqli_close($db);
?>
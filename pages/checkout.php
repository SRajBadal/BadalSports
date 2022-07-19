<?php
session_start();
if (!preg_match('/shopping_cart.php/', $_SERVER['HTTP_REFERER'])) {
    header("Location:shopping_cart.php?productID=view");
}
$customerID = $_SESSION['customer_id'];
include("../common/document_head.html");
?>

<body class="body w3-auto w3-light-grey">
    <header class="w3-container">
        <?php
        echo ("<div class='w3-border w3-border-black w3-sand'>");
        include("../common/banner.php");
        include("../common/menus.html");
        include("../scripts/connect_to_database.php");
        echo ("</div>");
        ?>
    </header>
    <main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right
      w3-border-black w3-sand">
            <?php
            include("../scripts/checkout_process.php");
            ?>
        </article>
    </main>

    <footer>
        <?php include("../common/footer.html"); ?>
    </footer>
</body>

</html>

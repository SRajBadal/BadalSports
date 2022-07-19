<?php
session_start();
$loggedInInitially = isset($_SESSION['customer_id']) ? true : false;
if($loggedInInitially) {
    $customerID = $_SESSION['customer_id'];
    include("../scripts/connect_to_database.php");
    include("../scripts/logout_process.php");
    session_unset();
    session_destroy();
}
include("../common/document_head.html");
?>

    <body class="body w3-auto">
        <header class="w3-container">
            <?php
                echo '<div class="w3-border w3-border-black w3-sand">';
                include("../common/banner.php");
                include("../common/menus.html");
                echo '</div>';
            ?>
        </header>        <main class="w3-container">
            <article class="w3-container w3-border-left w3-border-right
                            w3-border-black w3-sand">
                <h4>Logout</h4>
                <?php
                if ($loggedInInitially) echo
                '<p>Thank you for visiting our e-store.<br>
                 you have successfully logged out.</p>
                 <p>If you wish to log back in ,
                    <a href="pages/form_login.php">click here</a>.</p>
                 <p>To browse our product catalog,
                    <a title="Not yet active"
                       href="page/sorry.php">click here</a>.</p>';
                else echo
                '<p>Thank you for visiting our e-store.<br>
                 you have not yet logged in.</p>
                 <p>If you do wish to log in ,
                    <a href="pages/form_login.php">click here</a>.</p>
                 <p>You can browse our product catalog without logging in by
                    <a href="pages/catalog.php">clicking here</a>.</p>';
                ?>
            </article>
        </main>
        <?php
        include("../common/footer.html");
        ?>
    </body>
</html>
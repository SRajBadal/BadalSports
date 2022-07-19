<?php
session_start();
include ('../common/document_head.html');
?>
    <body class="body w3-auto">
        <header class="w3-container">
            <?php
            echo '<div class="w3-border w3-border-black w3-sand">';
            include ('../common/banner.php');
            include ('../common/menus.html');
            echo '</div>';
            ?>
        </header>

        <main class="w3-container">
            <div class="w3-container w3-border-left w3-border-right
                        w3-border-black w3-sand">
                <?php 
                echo "<h1 class='w3-margin w3-center'> Sorry! </h1>";
                echo "<h2 class='w3-margin w3-center'> This page has 
                not been activated, <br>or it has been temporarily 
                deactivated</h2>";
                ?>
            </div>
        </main>
        <?php 
            include ('../common/footer.html')
        ?>
    </body>
</html>


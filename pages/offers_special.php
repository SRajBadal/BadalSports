<?php
session_start();
include ('../common/document_head.html');
?>
    <body class="body w3-auto">
        <header class="w3-container">
            <?php
            echo '<div class="w3-border w3-border-black w3-light-grey">';
            include ('../common/banner.php');
            include ('../common/menus.html');
            echo '</div>';
            ?>
        </header>

        <main class="w3-container">
            <article class="w3-container w3-border-left w3-border-right
                            w3-border-black w3-sand">
                <h3> Special this Month</h3>

                <h4> Special discount for the Grand opening!</h4>
                <p>
                    Since we had our grand opening this month, we have announced
                    a store-side discount of 15% on every item in the store for 
                    the month of January and February 2022. So, do not miss the chance
                    and visit our store or the e-store to make your purchase.
                </p>
            </article>
        </main>

        <?php 
            include ('../common/footer.html')
        ?>
        
    </body>
</html>
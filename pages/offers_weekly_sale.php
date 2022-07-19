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
            <article class="w3-container w3-border-left w3-border-right
                            w3-border-black w3-sand">
                <h3> Weekly Sale</h3>

                <h4> 10% discount every Saturday to all the students </h4>
                <p>
                    Our store offer a 10% discount on every item for in-store purchases 
                    every Saturday for all the students. Student ID required to redeem 
                    the discount at the cash counter.
                </p>
                
            </article>
        </main>

        <?php 
            include ('../common/footer.html')
        ?>
        
    </body>
</html>
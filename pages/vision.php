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
                <h3> About Badal Sports: Our Vision and Mission</h3>
                <p class="content-text">
                    Badal Sports is a new business started with a mission of
                    providing the sports enthusiasts with all their sports needs
                    in one place in affordable price. Being sports enthusiasts 
                    ourselves, we - the team of founders, have had a lot of trouble
                    in the past for finding the right gear and equipment when we need
                    them. On top of that, the sportwear and equipment is known to be
                    expensive throughout the worl. Hence, we envisioned this
                    platform where people can buy sports equipment in a discounted
                    price. 
                </p>
                <p class="content-text">
                    We expect this store to help people achieve their goals and 
                    move towards the road to success. No matter if you are looking
                    to stay fit or you want to be a professional, we have everything
                    you need.
                </p>
            </article>
        </main>

        <?php 
            include ('../common/footer.html')
        ?>
        
    </body>
</html>
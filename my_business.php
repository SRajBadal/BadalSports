<?php
session_start();
include("common/document_head.html");
?>
    <body class="body w3-auto" onload="carousel()">
        <header class="w3-container">
            <?php
            echo '<div class="w3-border w3-border-black w3-sand">';
            include('common/banner.php');
            include('common/menus.html');
            echo'</div>';
            ?>
        </header>

        <main class="w3-container">
            <div class="w3-container w3-border-left w3-border-right 
                        w3-border-black w3-sand"
                style="padding-right:0">
                <article class="w3-half">
                    <h3>You've come to Badal Sports Collection</h3>
                    <p class="content-text">
                        Founded in 2022, Badal Sports Collection was created 
                        to deliver sporting goods to all the sport-passionate 
                        people out there. From sportwear to equipment, 
                        you can now choose the item you are looking for in
                        cheap and affordable price in our store.
                    </p>
                    <p class="content-text">
                        If you would like to explore the vast collection in 
                        sportwear and gear, you've come to the right place... 
                        check out our e-store!
                    </p>
                </article>
                <?php 
                    include("resources/images_and_labels.html");
                ?>
            </div>
        </main>

        <?php
        include('common/footer.html');
        ?>
    </body>
</html>
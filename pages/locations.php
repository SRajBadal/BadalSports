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
                <h3> Our Locations</h3>
                <p class="content-text">
                    Our store is located nearby downtown and very near to both 
                    Saint Mary's University and Dalhousie University. You can
                    visit us at the following location from 11AM to 9PM Monday
                    to Saturday:
                </p>
                <p>
                    Badal Sports Collection Inc.<br>
                    2022 Wellington Street<br>
                    Halifax, NS<br>
                    Canada, B3H1E1<br>
                    Tel: 902.222.111<br>
                </p>
            </article>
        </main>

        <?php 
            include ('../common/footer.html')
        ?>
        
    </body>
</html>
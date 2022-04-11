<?php 
    require_once("php/head.php");
?>
</head>
<body>
    <?php
    require_once("php/header.php");
    ?>
    <main>
        <div class="main">
        <form class="Form" action="backend/ContactController.php">
                <h2>Contact</h2>
                <div class="Form_items">
                    <input id="name" class="form_item" type="text" placeholder="Naam">
                    <input id="email" class="form_item" type="email" placeholder="Email">
                </div>
                <input id="company-name" class="form_item" type="text" placeholder="Title" required>
                <textarea class="form_item" minlength="20" id="message" cols="30" rows="7" placeholder="Uw bericht" required></textarea>
            </form>
        </div>
    </main>
    <?php
    require_once("php/footer.php");
    ?>
</body>
</html>
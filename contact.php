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
        <form class="Form" action="backend/ContactController.php" method="POST">
                <h2>Contact</h2>
                <div class="Form_items">
                    <input name="name"id="name" class="form_item" type="text" placeholder="Naam">
                    <input name="email"id="email" class="form_item" type="email" placeholder="Email">
                </div>
                <input name="title"id="title" class="form_item" type="text" placeholder="Title" required>
                <textarea name="message"class="form_item" minlength="20" id="message" cols="30" rows="7" placeholder="Uw bericht" required></textarea>
                <input type="submit" value="Verzend formulier">
            </form>
        </div>
    </main>
    <?php
    require_once("php/footer.php");
    ?>
</body>
</html>
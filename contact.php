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
            <form action="backend/ContactController.php">
                <input id="name" class="form-input" type="text" placeholder="Your Name*">
                <input id="email" class="form-input" type="email" placeholder="Your Email*">
                <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required>
                <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
            </form>
        </div>
    </main>

</body>
</html>
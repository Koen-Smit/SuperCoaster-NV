    <?php require_once("php/head.php");?>
    <title>Supercoaster-NV / Contact</title>
</head>
<script>
    const docStyle = document.documentElement.style
const aElem = document.querySelector('a')
const boundingClientRect = aElem.getBoundingClientRect()

aElem.onmousemove = function(e) {

    const x = e.clientX - boundingClientRect.left
    const y = e.clientY - boundingClientRect.top
    
    const xc = boundingClientRect.width/2
    const yc = boundingClientRect.height/2
    
    const dx = x - xc
    const dy = y - yc
    
    docStyle.setProperty('--rx', `${ dy/-1 }deg`)
    docStyle.setProperty('--ry', `${ dx/10 }deg`)
    
}

aElem.onmouseleave = function(e) {
    
    docStyle.setProperty('--ty', '0')
    docStyle.setProperty('--rx', '0')
    docStyle.setProperty('--ry', '0')
    
}

aElem.onmousedown = function(e) {
    
    docStyle.setProperty('--tz', '-25px')
    
}

document.body.onmouseup = function(e) {
    
    docStyle.setProperty('--tz', '-12px')
    
}
</script>
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

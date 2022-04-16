    <?php require_once("php/head.php");?>
    <title>Supercoaster-NV</title>
</head>
<body>
    <?php require_once("php/header.php");?>
    <div class="wrapper">
        <main>
            <div class="supercoaster">
                <h1 class="h1Home">Over Constructie</h1>
            </div>
            <div class="constructieinfo">
                <p>Het eerste USP die wij voor deze achtbaan hebben ontwikkeld is een nieuwe metaal messing die nog nooit eerder in deze industrie gebruikt is. Door een menging te maken van 69% staal, 20% nikkel, en 11% koper hebben een nieuwe messing ontwikkeld die wij nu MagnaAlloy noemen.</p>
                <marquee behavior=scroll direction="right" scrollamount="12">
                    <img src="img/plaatje10.jpg" alt="constructieimg">
                    <img src="img/plaatje11.jpg" alt="constructieimg">
                    <img src="img/plaatje12.jpg" alt="constructieimg">
                    <img src="img/plaatje13.jpg" alt="constructieimg">
                </marquee>
                <p>Met deze nieuwe MagnaAlloy maken wij een aantal onderdelen die de meeste stress ondergaan in de achtbaan, waardoor deze nog meer G-krachten kunnen weerstaan, en langer meegaan dan andere stalen. We hebben enorm geprobeerd de kosten zo laag mogelijk te houden, dat de onderdelen gemiddeld slechts 8% duurder uitvallen dan andere soortgelijke onderdelen, zonder kwaliteitsverlies. Onze tests bewijzen ook dat de onderdelen tot 25% langer meegaan, dus dit zou uiteindelijk ook in kosten moeten besparen. Ook zorgt dit ervoor dat een aantal designs voor achtbanen die eerder niet mogelijk waren nu wel mogelijk zijn.</p>
            </div>

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
<div class="wrapper">
    <h1 id="karretje" style="margin-top: 30px;">Over Constructie</h1>
    <div class="class1">
        <div class="class3">
            <p id="info"></p>   
            <p>
                <img src="img/plaatje10.jpg" id="img">
            </p>

            <div class="div4">
                <button class="bttn-minimal bttn-md bttn-primary" value="vorige">vorige</button>
                <button class="bttn-minimal bttn-md bttn-primary" value="next">next</button>
            </div>    
        </div>    
        <div class="class2">
            <p>Het eerste USP die wij voor deze achtbaan hebben ontwikkeld is een nieuwe metaal messing die nog nooit eerder in deze industrie gebruikt is. Door een menging te maken van 69% staal, 20% nikkel, en 11% koper hebben een nieuwe messing ontwikkeld die wij nu MagnaAlloy noemen. Met deze nieuwe MagnaAlloy maken wij een aantal onderdelen die de meeste stress ondergaan in de achtbaan, waardoor deze nog meer G-krachten kunnen weerstaan, en langer meegaan dan andere stalen. We hebben enorm geprobeerd de kosten zo laag mogelijk te houden, dat de onderdelen gemiddeld slechts 8% duurder uitvallen dan andere soortgelijke onderdelen, zonder kwaliteitsverlies. Onze tests bewijzen ook dat de onderdelen tot 25% langer meegaan, dus dit zou uiteindelijk ook in kosten moeten besparen. Ook zorgt dit ervoor dat een aantal designs voor achtbanen die eerder niet mogelijk waren nu wel mogelijk zijn.</p>
        </div>    
    </div>    
</div> 

<?php
    require_once("php/footer.php");
?>     

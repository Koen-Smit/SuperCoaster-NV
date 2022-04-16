  <?php require_once("php/head.php");?>
  <title>Supercoaster-NV</title>
</head>

<body>
  
  <?php
    require_once("php/header.php");
  ?>

<div class="wrapper">
    <h1 id="karretje" style="margin-top: 30px;">Over Karretjes</h1>
    <div class="class1">
        <div class="class3">
            <p id="info"></p>   
            <p>
                <img src="img/plaatje7.jpg" id="img">
            </p>

            <div class="div4">
                <button class="bttn-minimal bttn-md bttn-primary" value="vorige">vorige</button>
                <button class="bttn-minimal bttn-md bttn-primary" value="next">next</button>
            </div>    
        </div>    
        <div class="class2">
            <p>Met onze MagnaCarts die ook speciaal werken op onze nieuw ontwikkelde MagnaAlloy onderdelen, kan elk pretpark het chassis naar wens aanpassen. Wij hebben een frame ontwikkeld die wij zo klein mogelijk hebben gehouden, zodat de rest van de kar helemaal zelf door het team ontworpen en ontwikkeld kan worden. Ook leveren wij de digitale bestanden waar deze ontwerpen op gebaseerd kunnen worden, zodat het team zo snel mogelijk aan de slag kan gaan unieke ontwerpen te creëren. Omdat ook deze karretjes gebruik maken van MagnaAlloy, zijn ze dus ook bestand tegen de extra G-krachten die deze techniek mogelijk maakt. Zo zijn onze producten dus breed inzetbaar, en zorgen wij voor de beste vooruitgang in de achtbaantechniek van het afgelopen decennia.</p>
        </div>    
    </div>    
</div> 

<script>
    window.onload = function(){
        var info = document.getElementById("info");
        var img = document.getElementById("img");
        var path = ["img/plaatje8.jpg","img/plaatje9.jpg","img/plaatje7.jpg"];

        var index = 0;

        var bt = document.getElementsByTagName("button");


        bt[0].onclick = function () {
          index--;
          if(index < 0){
            index = path.length - 1;
          }

          img.src = path[index];
        };

        bt[1].onclick = function () {
          index++;
          if(index > path.length - 1){
            index = 0;
          }
          img.src = path[index];
        };
      };
</script>  
<?php
    require_once("php/footer.php");
?>     

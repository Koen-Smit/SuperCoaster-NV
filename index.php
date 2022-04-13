<?php 
    require_once("php/head.php");
  ?>
  <title>Supercoaster-NV</title>
</head>

<body>
  
  <?php
    require_once("php/header.php");
  ?>

  <div class="wrapper">

  <h1 style="margin-top: 50px; margin-bottom: 50px;">Super Coaster</h1>
  <div class="class1">
    <p style="margin-bottom: 50px; margin-top: 40px;">Onze nieuwe achtbaantechniek heet MagnaDrive. Door middel van een aantal onderdelen die ons ontwikkelteam uitgevonden heeft, 
    kunnen we een achtbaan produceren die tot 5-10% sneller kan gaan dan de snelste achtbaan tot nu toe, enkele graden scherpte kan 
    toevoegen aan bochten, en ook nog langer meegaat dan achtbanen gemaakt van gebruikelijke onderdelen. Het mooiste is nog dat de onderdelen niet veel duurder zullen zijn dan onze concurrentie. Vanwege de scherpere bochten is in veel gevallen ook de achtbaan compacter te maken, wat ook weer ruimte vrijmaakt voor andere attracties.</p>
    <img src="img/plaatje4" id="img_"/>
    <div class="div6">
      <SCRIPT>
      var arr=new Array("img/plaatje4.jpg","img/plaatje6.jpg");
      var arr_i=0;
      function lh()
      {
      eval("img_").src=arr[arr_i];
      arr_i++;
      if(arr_i>1)
      arr_i=0;
      setTimeout("lh()",4000);//每隔一秒变换一次
      }
      lh();
      </SCRIPT>
    </div>  
  </div>  
  

  
  </div>

  <?php
    require_once("php/footer.php");
  ?>

</body>
</html>

<?php
    require_once("php/header.php");
?>
<?php
    require_once("php/head.php");
?>
<div class="wrapper">
    <p id="info"></p>   
    <p>
        <img src="img/plaatje7.jpg" id="img">
    </p> 
    <p>
        <button value="vorige" style="width: auto; height: auto;">vorige</button>
        <button value="next">next</button>
    </p>  
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
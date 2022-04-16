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
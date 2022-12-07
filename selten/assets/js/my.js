var btn = document.getElementsByClassName ("btn");
var testslide = document.getElementById ("testslide")

btn [0].onclick = function (){
    testslide.style.transform = "translateX(0px)";
}
btn [1].onclick = function (){
    testslide.style.transform = "translateX(-800px)";
}

btn [2].onclick = function (){
    testslide.style.transform = "translateX(-1600px)";
}

btn [3].onclick = function (){
    testslide.style.transform = "translateX(-2400px)";
}


  
mybutton = document.getElementById("scroll");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300){
        mybutton.style.display = "block";
    }
    else{
        mybutton.style.display = "none";
    }
}
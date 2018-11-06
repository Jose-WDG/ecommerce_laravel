$(document).ready(function(){

//login

    $(".icon-login").click(function(){
        $("").toggle();
    });

    $("#zoom_09").elevateZoom({
       easing : true
    });

});

function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
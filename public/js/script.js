//toggle menu <===
$(document).ready(function(){
    $(".icons").click(function(){//quando clicar no icone executa
        $(".menu-item-mobil").toggle();
    });
});

//login
$(document).ready(function(){
    $(".icon-login").click(function(){
        $("").toggle();
    });
});

alturaImg = $('.imgTopo').height(); // altura da imagem, vai servir para sabermos a altura que o scroll tem de andar até a navbar ficar fixa
     $(window).on('scroll', function() { // cada vez de que fizer scroll o que está dentro desta função vai acontecer
          if($(window).scrollTop() >= alturaImg) { // se o que percorremos com o scroll for maior ou igual à altura da imagem adicionamos esta classe à navbar
              $('#navbar').addClass('fixed-menu');
          }
          else {
              $('#navbar').removeClass('fixed-menu');
          }
     });

$(document).ready(function(){
    $("#zoom_09").elevateZoom({
        easing : true
    });
});

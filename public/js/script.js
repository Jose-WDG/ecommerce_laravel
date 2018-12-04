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

// methodos de adicionar ou remover produto do carrinho
function carrinhoRemoverProduto(idpedido,idproduto,item)
{
    $('#form-remover-produto input[name="pedido_id"]').val(idpedido);
    $('#form-remover-produto input[name="produto_id"]').val(idproduto);
    $('#form-remover-produto input[name="item"]').val(item);
    $('#form-remover-produto ').submit();

}
function carrinhoAdicionarProduto(idproduto)
{
    $('#form-adicionar-produto input[name="id"]').val(idproduto);
    $('#form-adicionar-produto').submit();
}
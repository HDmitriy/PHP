function item(id){

    $.ajax({
        type: 'POST',
        url: '../controllers/Basket.php',
        data: 'id='+id,
        success: function(data){
            alert("Товар добавлен в корзину!");
            $(".basket-items").html(data);
        }
    });
}
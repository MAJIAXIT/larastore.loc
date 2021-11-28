function buttonAddClick(productId) {
    $.ajax({
        url: "/cart/add/"+productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            getCountItemsByUserId();
        },

        error: function (msg) {
            alert("Ошибка добавления в корзину: "+msg.responseJSON.message);
        }
    });
}
function buttonDeleteClick(id){
    $.ajax({
        url: "/cart/delete/"+id,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            let cartId = "#cart_"+id;
            $(cartId)[0].remove();
            getCountItemsByUserId();
        },

        error: function (msg) {
            alert("Ошибка удаления: "+msg.responseJSON.message);
        }
    });
}

function getCountItemsByUserId() {
    $.ajax({
        url: "/cart/getCountItemsForUser",
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#cartCountItems")[0].innerHTML = data;
        },

        error: function (msg) {
            alert("Ошибка отображения количества элементов в корзине: "+msg.responseJSON.message);
        }
    });
}


function buttonAddClick(productId, userId) {
    $.ajax({
        url: "/cart/add/"+productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            getCountItemsByUserId(userId);
        },

        error: function (msg) {
            alert("Ошибка добавления в корзину: "+msg.responseJSON.message);
        }
    });
}
function buttonDeleteClick(id, userId){
    $.ajax({
        url: "/cart/delete/"+id,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            let cartId = "#cart_"+id;
            $(cartId)[0].remove();

            getCountItemsByUserId(userId);
        },

        error: function (msg) {
            alert("Ошибка удаления: "+msg.responseJSON.message);
        }
    });
}

function getCountItemsByUserId(userId) {
    $.ajax({
        url: "/cart/getCountItems/"+userId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#cartCountItems")[0].innerHTML = data;
        },

        error: function (msg) {
            alert("Ошибка отображения элементов в корзине: "+msg.responseJSON.message);
        }
    });
}


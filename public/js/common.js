$().ready(function() {
    
    $("#btnConfirmOk").click(function(){
        $('#formSubmit').submit();
    });
    
});

common = {
    
    showNotification: function(color, msg) {

        $.notify({
            // icon: "nc-icon nc-app",
            message: msg

        }, {
            type: type[color],
            timer: 1500,
            placement: {
                from: undefined,
                align: 'center'
            }
        });
    },

}
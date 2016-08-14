var app = {
    init: function() {
        this.cargarPersonaId();
    },
    cargarPersonaId: function(){
        $.ajax({
            url: "./json/jsonPersonaId.php",
            type: "GET",
            dataType: "json",
            success: function(resultado){
                $('#perfil').append(
                    '<div id="profileImg" style="background-image: url(img/'+resultado['profileImg']+')">'
                    +'</div>'
                    +'<h1 style="padding-top:20px;">'+resultado['nombre']+' '+resultado['apellido1']
                    +'</h1>'
                );
            },
            complete: function() {
                alert("completado");
            }
        });
    }
}

$(document).ready(
    function () {
        app.init();
    }
);
/**
 * Created by davidquesada on 7/26/16.
 */
var app = {
    init: function() {
        this.cargarPersona();
    },
    cargarPersona: function(){
        $.ajax({
            url: "./json/jsonPersonaId.php",
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != " ") {
                    $('#profile').append(
                        '<div id= "nombre">'
                        +'<h3>'+resultado['nombre'] +' '+resultado['apellido']+'</h3>'
                        +'</div>'
                    );
                }
            },
            complete: function() {
                alert("completado");
            }
        })
    }
}
$(document).ready(
    function () {
        app.init();
    }
);

/*cargarPersonas: function() {
        $.ajax({
            url: "./json/jsonPersonas.php",
            type: "GET",
            dataType: "json",
            success: function(resultado) {
                if(resultado != "") {
                    $('#team').empty();
                    for(var i = 0; i< resultado.length; i++) {
                        $('#team').append('<h1>Prueba</h1>'+
                            '<div class="profile">' +
                                '<div class="profilePic">'+
                                '</div>'+
                                '<div class="profileDesc">'+
                                    '<h1>' + resultado[i].nombre + '</h1>'+
                                    '<a href="index.php"> Ver Portafolio</a>'+
                                '</div>'+
                            '</div>');
                            
                    }

                }else{
                    alert("erro");
                }
            },
            complete: function() {
                alert("completado");
            }
<<<<<<< HEAD
        });
    }
}
$(document).ready(
    function () {
        app.init();
    }
);
=======
        })
    }*/
>>>>>>> origin/master

var app = {
    init: function() {
        this.cargarPersonaId();
        this.cargarTelefono();
    },
    cargarPersonaId: function(){
        var id = getGET();
        var urlJson = "./json/jsonPersonaId.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                $('#perfil').append(
                    '<div id="profileImg" style="background-image: url(img/'+resultado['profileImg']+')">'
                    +'</div>'
                    +'<h1 style="padding-top:20px;">'+resultado['nombre']+' '+resultado['apellido1']
                    +'</h1>'
                );
                $('#datos').append(
                    '<div class="acercaIcon"><i class="icon-markunread"></i><h2>'+resultado['correo']+'</h2></div>'
                    +'<div style="clear:both;"></div>'
                );
            }
        });
    },
    cargarTelefono: function(){
        var id = getGET();
        var urlJson = "./json/jsonTelefonos.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != " ") {
                    for (var i = 0; resultado.length > i; i++) {
                        if (resultado[i].descripcion = "casa") {
                            $('#datos').append(
                                '<div class="acercaIcon" style="padding-top:20px;"><i class="icon-phone"></i><h2>'+resultado[i].telefono+'</h2></div>'
                                +'<div style="clear:both;"></div>'
                            );
                        } 
                        if (resultado[i].descripcion = "celular") {
                            $('#datos').append(
                                '<div class="acercaIcon"><i class="icon-mobile"></i><h2>'+resultado[i].telefono+'</h2></div>'
                                +'<div style="clear:both;"></div>'
                            );
                        }  
                    }
                }
            }
        });
    }
}

$(document).ready(
    function () {
        app.init();
    }
);

function getGET(){
   var loc = document.location.href;
   var getString = loc.split('?')[1];
   var GET = getString.split('&');
   var get = {};

   for(var i = 0, l = GET.length; i < l; i++){
      var tmp = GET[i].split('=');
      get[tmp[0]] = unescape(decodeURI(tmp[1]));
   }
   return get;
}

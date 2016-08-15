var app = {
    init: function() {
        this.cargarPersonaId();
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

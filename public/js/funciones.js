function listarObrasIndex() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: 'funciones/listarObrasIndex.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {
        },
        success: function (json) {
            $("#divObras").html(json.tabla);
        },
        error: function (e) {
            $("#mensajes").html("<span class='mensajeError animateOpen'>Error" + e + "</span>");
            alert(e);
        },
        complete: function (objeto, exito, error) {

        }
    });
}
function listarObras() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: 'funciones/listarObras.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {

        },
        success: function (json) {
            $("#divObras2").html(json.tabla);
        },
        error: function (e) {
            $("#mensajes").html("<span class='mensajeError animateOpen'>Error" + e + "</span>");
            console.log(e);

        },
        complete: function (objeto, exito, error) {

        }
    });
}
function listarPrensa() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: 'funciones/listarNoticias.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {

        },
        success: function (json) {
            $("#divPrensa").html(json.tabla);

        },
        error: function (e) {
            $("#mensajes").html("<span class='mensajeError animateOpen'>Error" + e + "</span>");

        },
        complete: function (objeto, exito, error) {

        }
    });
}
function listarPrensa2() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: '../funciones/listarNoticias2.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {

        },
        success: function (json) {
            $("#divPrensa").html(json.tabla);

        },
        error: function (e) {
            $("#mensajes").html("<span class='mensajeError animateOpen'>Error" + e + "</span>");
            alert("error");
        },
        complete: function (objeto, exito, error) {

        }
    });
}

function buscarId() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: '../funciones/buscarId.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {
            $("#mensajes").html("");
        },
        success: function (json) {
            $("#titulo_obra").html(json.titulo_obra);
            $("#contenido_obra").html(json.contenido_obra);
            $("#bannerObras").html(json.img);
            //console.log('--->' + json.img);
            $(document).ready(function () {
                $('.slider').slider({full_width: true});
            });
        },
        error: function (e) {
            $("#mensajes").html("<span class='mensajeError animateOpen'>Error" + e + "</span>");
        },
        complete: function (objeto, exito, error) {

        }
    });
}
function recuperarId() {
    var direccion = location.href;
    var posicion = direccion.indexOf("=") + 1;
    var final = direccion.length;
    console.log(direccion.substring(posicion, final))
    return direccion.substring(posicion, final);
}

function enviarFormulario() {
    var datosFormulario = $("#formEnviar").serialize();
    $.ajax({
        type: 'POST',
        url: 'enviarCorreo.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {
            $("#avisocorreo").html("<div class='progress'><div class='indeterminate'></div>");
        },
        success: function (json) {
            Materialize.toast('Mensaje Enviado', 3000, 'rounded');
        },
        error: function (e) {
            Materialize.toast('Error :(', 3000, 'rounded');
        },
        complete: function (objeto, exito, error) {
            setTimeout(
                    function () {
                        location.reload();
                    }, 2000);
        }
    });
}

function validarEmailCorreo() {

    var nombre = $("#first_name").val();
    var apellido = $("#last_name").val();
    var email = $("#email").val();
    var mensaje = $("#textarea1").val();
    if (nombre === "") {
        Materialize.toast('Falto tu Nombre ', 3000, 'rounded');
    } else if (apellido === "") {
        Materialize.toast('Falto un Apellido ', 3000, 'rounded');
    } else if (email === "") {
        Materialize.toast('Falto Tu Email', 3000, 'rounded');
    } else if (!validarEmail(email)) {
        Materialize.toast('Email No Valido', 3000, 'rounded');
    } else if (mensaje === "") {
        Materialize.toast('Falto un Mensaje ', 3000, 'rounded');
    } else {
        enviarFormulario();
    }
}

function validarEmail(email) {
    var valor = false;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(email)) {
        valor = true;
    }
    return valor;
}

function pagLocation(option){
    //console.log(option);

    var datosFormulario = 'option='+ option;

    $.ajax({
        type: 'POST',
        url: './funciones/pagLocation.php',
        data: {option:option},
        dataType: 'text',
        beforeSend: function (objeto) {
            // $("#avisocorreo").html("<div class='progress'><div class='indeterminate'></div>");
        },
        success: function (json) {

            if(JSON.parse(json)['tipo']=='normal'){
                lo="./"+JSON.parse(json)['pagina'];
                //console.log(json);
                location.href=lo;
            }
            if(JSON.parse(json)['tipo']=='actual'){
                //tambien entra hover
                //console.log("estamos en "+JSON.parse(json)['tipo'])
                console.log("estamos en "+json);
                lo="./"+JSON.parse(json)['actual'];
                /*add open*/
                var objetivo = JSON.parse(json)['pagina'];
                var result  = objetivo.replace(".html","");
                window.aux_=result;
                
                if($(".open").length>0){
                    $(".open").removeClass("open");
                    $("#"+result).addClass("open");
                    console.log($("#"+window.aux_));
                }else{
                    $("#"+result).addClass("open");
                }
            }            
        },
        error: function (e) {
            // Materialize.toast('Error :(', 3000, 'rounded');
            console.log("error "+e);
        },
        complete: function (objeto, exito, error) {
            
        }
    });
}

function pagActual(){
//    console.log("pagActual");
        pagLocation("actual");
}

function iniciarWow(){
        var wow = new WOW({animateClass: 'animated',offset:100,callback:function(box) {console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")}});wow.init();
}

function iniciarVanilla(){
        //usar jquery
        for(var i=0;i<document.getElementsByClassName("data-tilt").length;i++){
            VanillaTilt.init(document.getElementsByClassName("data-tilt")[i], {
                max: 25,
                speed: 400
            });
        }
}

function iniciarLocation(){
        //hover
            $(".tabs1").hover(function(){
                $(".open").removeClass("open");
                $(this).addClass("open");
                //pagLocation("actual");
            });
            $(".tabs1").click(function(){
                    //console.log("haciendo click en "+$(this).attr("id"))
                    if($(this).attr("id")!="prensa"){
                        pagLocation($(this).attr("id"));
                        $(this).finish();
                    }
            });
            
            pagActual();
}

// new footer

var servicios = {
    getHtml:function(parte,option){
        var params = (option)?{"html":parte,"active":option}:{"html":parte};
        $.ajax({
            type: 'POST',
            url: 'funciones/funciones.php',
            data: params,
            dataType: 'json',
            beforeSend: function (objeto) {
                    $("#footer").html(" <div class='progress'><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>");
            },
            success: function (json) {
                $("#"+parte).html(json.html);
                // $("#footer").html(" <div class='progress container'><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>");
            },
            error: function (e) {
                // Materialize.toast('Error :(', 3000, 'rounded');
            },
            complete: function (objeto, exito, error) {
                // setTimeout(
                //         function () {
                //             location.reload();
                //         }, 2000);
            }
        });
    },


}
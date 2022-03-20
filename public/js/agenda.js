document.addEventListener("DOMContentLoaded", function () {

    let formulario = document.querySelector("#form");

    var calendarEl = document.getElementById("agenda");

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "es",

        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay",
        },

        //events:baseURL+"/cronogramas/mostrar",
        eventSources:{
            url: baseURL+"/cronogramas/mostrar",
            method:"POST",
            extraParams: {
                _token: formulario._token.value,
            }
        },


        dateClick: function (info) {
            formulario.reset();
           // formulario.start.value=info.dataStr;
          //  formulario.end.value=info.dataStr;

            $("#evento").modal("show");
        },
        eventClick: function (info) {
            $("#evento").modal("show");
            var evento = info.event;
            //console.log(evento);

            axios.post(baseURL+"cronogramas/editar/"+info.event.id).
            then(
                (respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;

                    formulario.descripcion.value = respuesta.data.descripcion;

                    formulario.start.value = respuesta.data.start;

                    formulario.end.value = respuesta.data.end;

                    $("#evento").modal("show");
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                });
        },
    });
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function() {

            enviarDatos("cronogramas/agregar");
        });
    document.getElementById("btnModificar").addEventListener("click",function() {

            enviarDatos("cronogramas/actualizar/"+formulario.id.value);
        });
    document.getElementById("btnEliminar").addEventListener("click",function() {

            enviarDatos("cronogramas/borrar/"+formulario.id.value);
        });

    function enviarDatos(url) {
        const datos = new FormData(formulario);
        console.log(datos)

        const nuevaURL = baseURL+url;

        axios.post(nuevaURL, datos).
        then(
            (respuesta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
            }
            ).catch(
                error=>{if(error.response){ console.log(error.response.data);
                }
            });
    }
});

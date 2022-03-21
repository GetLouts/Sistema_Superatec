document.addEventListener("DOMContentLoaded", function () {

    let formulario = document.getElementById("form");
    let calendarEl = document.getElementById("agenda");

    // console.log(formulario)

    let calendar = new FullCalendar.Calendar(calendarEl, {
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


    function enviarDatos(url, formulario) {

        const datos = new FormData(formulario);
        // data = $('#form').serializeArray()
        // console.log(datos)
        // console.log(data)
        
        const nuevaURL = baseURL+url;
        // console.log(nuevaURL)

        axios.post(nuevaURL, data).then(
            (respuesta) => {
                console.log(respuesta)
                $("#evento").modal("hide");
                // console.log(datos)
            }
            ).catch(
                error=>{if(error.response){ console.log(error.response.data);
                }
            });
    }

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function() {
            // $("#evento").modal("hide");
            enviarDatos("/cronogramas/agregar",formulario);
        });
    document.getElementById("btnModificar").addEventListener("click",function() {

            enviarDatos("/cronogramas/actualizar/"+formulario.id.value);
        });
    document.getElementById("btnEliminar").addEventListener("click",function() {

            enviarDatos("/cronogramas/borrar/"+formulario.id.value);
        });

    
});

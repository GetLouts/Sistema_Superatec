document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");


    var calendarEl = document.getElementById('agenda');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      initialView: 'dayGridMonth',
      locale:"es",

      headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },

      events: "http://127.0.0.1:8000/evento/mostrar" ,

      dateClick:function(info){


          $("#evento").modal("show");
      },
      eventClick:function(info){
        var evento= info.event;
        console.log(evento);

        axios.post(baseURL+"/evento/editar/"+info.event.id).
      then(
        (respuesta) =>{
          
          formulario.id.value= respuesta.data.id;
          formulario.title.value=respuesta.data.title;

          formulario.descripcion.value=respuesta.data.descripcion;

          formulario.start.value=respuesta.data.start;

          formulario.end.value=respuesta.data.end;



          $("#evento").modal("show");
        }
        ).catch(
            error=>{
              if(error.response){
                console.log(error.response.data);
              }
            }
        )
      }

    });
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function(){

      enviarDatos("/evento/agregar");

        });
        document.getElementById("btnModificar").addEventListener("click",function(){
          
          enviarDatos("/evento/actualizar/"+formulario.id.value);

        });
        document.getElementById("btnEliminar").addEventListener("click",function(){
          
          enviarDatos("/evento/borrar/"+formulario.id.value);

        });
        
        function enviarDatos(url){
          
          const datos= new FormData(formulario);

          const nuevaURL =  baseURL+url;

          axios.post(nuevaURL, datos).
          then(
            (respuesta) =>{
              calendar.refetchEvents();
              $("#evento").modal("hide");
            }
            ).catch(
                error=>{if(error.response){ console.log(error.response.data);}
                }
              )

        }
        
      }); 
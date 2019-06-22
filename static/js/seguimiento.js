
var subCadena = [];
var idPaciente = '';
var idCita = '';
var eventoTem = '';
var fechaActual = new Date();

//colores de las citas
var citaCanceladaColor = '#FF5722';
var noAsistioCitaColor = '#F44336';
var supendioCitaColor = '#4CAF50';
var reAgendaCitaColor = '#FF9800';

/**
* Funcion para el calendario
*/
$(document).ready(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: fechaActual,
        minTime: '10:00:00',
        maxTime: '22:00:00',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: false,
        eventLimit: true,
        events: CITAS_AGENDADAS,
        eventClick: function(calEvent) {
            subCadena = calEvent.id.split('_');
            idPaciente = subCadena[0];
            idCita = subCadena[1];
            eventoTem = calEvent;
            //console.log("valor event fecha : "+moment(calEvent.start, "MM-DD-YYYY"));
            //console.log("valor fecha : "+moment(fechaActual, "MM-DD-YYYY"));
            /*if(moment(calEvent.start, "MM-DD-YYYY") >= moment(fechaActual, "MM-DD-YYYY")){
                $("#modalAtiendeCita").modal('show');
            }*/
             $("#modalAtiendeCita").modal('show');
        }
    });
});

/**
* Funcion para redireccionar al 
* formulario de nota de evolucion
* se envia el id del paciente y 
* el id de la cita
*/
$(function(){
    $("#btn_aten_cita").click(function(){
        var form = $("<form action='"+BASE_PATH + 'index.php/Seguimiento/viewEvolucion'+"'' method='post'><input type='text' name='idPac' value='"+idPaciente+"'><input type='text' name='idCita' value='"+idPaciente+"'><input type='text' name='idCitaPac' value='"+idCita+"'></form>");
        $(document.body).append(form);
        form.submit();
    });
});

$(function(){
    $("#btn_cancel_cita").click(function(){
        swal({
            title: "¿Esta seguro?",
            text: "Se cancelara la cita!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, Estoy seguro!",
            closeOnConfirm: false
        }, function () {
            updateCita(idCita, '4', null, null, supendioCitaColor);
        });
    });
});


$(function(){
    $("#btn_no_asis_cita").click(function(){
        updateCita(idCita, '5', null, null, noAsistioCitaColor);
    });
});

$(function(){
    $("#btn_sus_cita").click(function(){
        updateCita(idCita, '3', null, null,noAsistioCitaColor);
    });
});

$(function(){
    $("#btn_reAg_cita").click(function(){        
        $("#modalReAgendaCita").modal('show');
    });
});

$(function(){
    $("#btn_re_agenda_cita").click(function(){

        var fechaCita = $("#fechCita").val();
        var horaCita = $("#horaCita").val();

        updateCita(idCita, '2', fechaCita, horaCita,reAgendaCitaColor);
    });
});

/**
* Funcion para mostrar el datePiker y dateTime
*/
$(function(){

    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        minDate : new Date(),
        time: false
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false,
        shortTime: true
    });
});

function updateCita(cita, status, fechaCi, horaCi,colorCita){

    $.ajax({
        url:BASE_PATH + 'index.php/Seguimiento/updateCita',
        type:'POST',
        dataType:'json',
        data:{
            idCitaPac : cita,
            statCita : status,
            fecha : fechaCi,
            hora : horaCi
        },
        success:function(json) {
            if(json.response_code === "200"){
                //ocultamos la modal
                $("#modalAtiendeCita").modal('hide');
                //actualizamos el color
                eventoTem.color = colorCita;
                //actuaizamos el evento
                if(status === '2'){
                    $("#modalReAgendaCita").modal('hide');
                    eventoTem.start = fechaCi+'T'+horaCi;
                }
                $('#calendar').fullCalendar('updateEvent', eventoTem);
                //mostramos mensaje de exito
                swal("Exitos!", "Se actualizo la cita con exito!", "success");
            }
        },
        error : function(xhr, status) {
            swal("Error!", "Ocurrio un error durante la ejecución", "error");
        }
    });
}

/*
[
    {"id":1},
    {"id":2,"children":[
        {"id":3},
        {"id":4},
        {"id":5,"children":[
            {"id":6},
            {"id":7},
            {"id":8}]
        },
        {"id":9},
        {"id":10}]
    },
    {"id":11},
    {"id":12}
]
*/
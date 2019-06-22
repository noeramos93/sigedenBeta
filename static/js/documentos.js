/**
* @author Noe Ramos Lopez
* @version 1.0
* @copyright Todos los derechoz resevados
* Fecha de creacion 16-11-2018
*/

/**
* Funcion para implementar 
* la libreria de edicion de textos
*/
$(function(){
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = BASE_PATH+'static/js/core/tinymce';
});

/**
* Funcion para guardar los terminos y condiciones
* que apareceran en el pdf que se imprima, en caso de exito
* regresa un response code 200
* @param texto todo el texto que se desea guadar
*/
$(function(){
    $("#btn_save_doc").click(function(){
        var texto = tinymce.activeEditor.getContent();

        if(texto === null || texto === ""){
            swal("Error!", "No puede guardar textos vacio", "error");
        }else{

            $.ajax({
                url:BASE_PATH + 'index.php/Documentos/saveOrUpdateDoc',
                type:'POST',
                dataType:'json',
                data:{
                    textDoc : texto
                },
                success:function(json) {
                    if(json.response_code === "200"){
                        swal("Exito!", "Se guardo con exito la informacion!.", "success");
                    }
                },
                error : function(xhr, status) {
                    swal("Error!", "Ocurrio un error durante la ejecución", "error");
                }
            }); 
        }
    });
});
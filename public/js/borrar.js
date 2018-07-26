$("#btn-reset").on("click",function(){
    swal({
        title: "¿Estas seguro?",
        text: "Deseas borrar el contenido del formulario y del almacenamiento local",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
            //e.preventDefault();
            $('form').trigger("reset");
            $('select').trigger('change');
           swal("Borrado", "Ya puedes llenar tu formulario con normalidad", "success");
        } else {
          swal("Cancelado", "Tus datos siguen ahí", "error");
        }
      });

    $("#btn-reset").html('<i aria-hidden="true"></i>');

});

function borrarlsc(){
    Cookies.remove('isLiveC');
    localStorage.clear();
    sessionStorage.removeItem('isLive');
}
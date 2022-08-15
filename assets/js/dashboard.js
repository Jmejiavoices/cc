var Dashtabcar = function () {
  var inicializarAcciones = function () {
    $('#submite').click(function () {
      Papa.parse($('#file_new').prop('files')[0], {
        download: true,
        header: true,
        complete: function (results) {
          console.log(results);
          var i = 0;
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success ',
              cancelButton: 'btn btn-danger mr-2'
            },
            buttonsStyling: false
          })
          $.ajax({
            type: 'POST',
            url: BASE_URL + 'ajax/A_Dashboard/add_datos',
            data: { usuarios: results.data },
            dataType: "json",
            success: function (ans) {
              console.log(ans);
              if (ans.responce == "success") {
                $('#modal_carga').modal('hide');
                $('#records').DataTable().destroy();
                fetch();
                swalWithBootstrapButtons.fire(
                  '¡Carga Exitosa!',
                  'Good Job :)',
                  'success'
                );
              } else {
                swalWithBootstrapButtons.fire(
                  '¡Fallo la Carga!',
                  'Revisa tu archivo:(',
                  'error'
                );
              }
            }
          });
        },
      });
    });
  }



  return {
    init: function () {
      inicializarAcciones();


    }
  };

}();




jQuery(document).ready(function () {
  Dashtabcar.init();
});
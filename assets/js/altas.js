var Carga = function (){

  var inicializarAcciones = function(){
    $('#submit').click(function(){
        Papa.parse($('#file_new').prop('files')[0], {
            download: true,
            header: true,
            complete: function(results) {
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
                    url:  BASE_URL + 'ajax/A_Altas/add_datos',
                    data: {usuarios: results.data}, 
                    dataType: "json",
                    success: function(ans) {
                        console.log(ans);
                        swalWithBootstrapButtons.fire(
                            '¡Registro Actualizado!',
                            'con éxito',
                            'success'

                        );
                        

                    }

              });
            },
            
        });
    });
  }

  return {
    init: function() {
        inicializarAcciones();            
    }
  };

}();

jQuery(document).ready(function () {
	Carga.init();
});
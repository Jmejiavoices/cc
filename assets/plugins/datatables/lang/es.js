$.fn.dataTable.ext.errMode = 'none';
$.extend( $.fn.dataTable.defaults, {
    "language": {
        // metronic spesific
        "metronicGroupActions": "_TOTAL_ registros seleccionados:  ",
        "metronicAjaxRequestGeneralError": "No se pudo completar la solicitud. Porfavor revisa la conección a internet.",

        // data tables spesific
        "lengthMenu": "Mostrar _MENU_ entradas",
        "zeroRecords": "No hay alguna coincidencia",
        "emptyTable": "No hay información disponible",
        "info": "Mostrando _START_ hasta _END_ de _TOTAL_ entradas",
        "infoEmpty": "Mostrando 0 hasta 0 de 0 entradas",
        "infoFiltered": "(filtradas de un total de _MAX_ entradas)",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "aria": {
            "sortAscending": ": activar para filtrar ascendente",
            "sortDescending": ": activar para filtrar descendente"
        }
    }
});
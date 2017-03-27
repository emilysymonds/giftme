var Categoria = function () {

    // private functions & variables
    var TablaMain = function(){  
				
		$('#tabla_categorias').DataTable({
			 "aLengthMenu": [
                    [15,50, 100, 200, -1],
                    [15,50, 100, 200, "All"] // change per page values here
                ],
                // set the initial value
            "sPaginationType": "bootstrap",
            "iDisplayLength": 15,
			"aoColumns": [
				null,
				{ "sType": "formatted-num" },
				null
				]
		}); 		
        jQuery('#tabla_categorias_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
        jQuery('#tabla_categorias_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
        jQuery('#tabla_categorias_wrapper .dataTables_length select').select2({
            showSearchInput : false //hide search box with special css class
        });
	            
	}
	
	var handleDialogs = function() {
   	 eliminarCategoria = function(id){
	 			//id=$('#nrogasto').val();
            bootbox.confirm("¿Está seguro que quiere eliminar esta categoría?", function(result) {
              // alert("Confirm result: "+id);
            if(result){
               	location.href='index.php?action=eliminar&id='+id;
               }
            }); 
       };
	}
    return {

        //main function
        init: function () {
            //initialize here something.   
           TablaMain();
           handleDialogs();
        },

        //some helper function
       
    };

}();
 

var Producto = function () {

    // private functions & variables
    var TablaMainOnline = function(){  
				
		$('#tabla_online').DataTable({
			  "aLengthMenu": [
	                    [15,50, 100, 200, -1],
	                    [15,50, 100, 200, "All"] // change per page values here
	                ],
	                // set the initial value
	            "sPaginationType": "bootstrap",
	            "iDisplayLength": 15,
				"aoColumns": [
					null,
					null,
					{ "sType": "formatted-num" },
					null,
					null
					]
		}); 
			
        jQuery('#tabla_online_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
        jQuery('#tabla_online_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
        jQuery('#tabla_online_wrapper .dataTables_length select').select2({
            showSearchInput : false //hide search box with special css class
        });
    }
    var TablaMainOffline = function(){   
	       
        $('#tabla_offline').DataTable({
			  "aLengthMenu": [
	                    [15,50, 100, 200, -1],
	                    [15,50, 100, 200, "All"] // change per page values here
	                ],
	                // set the initial value
	            "sPaginationType": "bootstrap",
	            "iDisplayLength": 15,
				"aoColumns": [
					null,
					null,
					{ "sType": "formatted-num" },
					null,
					null
					]
		}); 		
        jQuery('#tabla_offline_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
        jQuery('#tabla_offline_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
        jQuery('#tabla_offline_wrapper .dataTables_length select').select2({
            showSearchInput : false //hide search box with special css class
        });

	            
	}
	var handleDialogs = function() {
   	 eliminarProducto = function(id){
	 			//id=$('#nrogasto').val();
            bootbox.confirm("¿Está seguro que quiere eliminar este producto?", function(result) {
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
           TablaMainOnline();  
           TablaMainOffline(); 
           handleDialogs();
        },

        //some helper function
       
    };

}();
 

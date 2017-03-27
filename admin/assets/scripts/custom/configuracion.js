

var Configuracion = function () {
	
	var handleDialogs = function() {
	
	       
		 EliminarDocPago = function(id){
			
   	 			$.ajax({
			    type: "GET",
			    url: "process_cuenta.php",
			    data:"action=eliminar_cheque_anulado&id="+id,
			    dataType:'json',
			    success: function(result)
			        {
			        	//$("#cheques").html(result);
			        	console.log('Elimino '+result);
						location.reload();
			        	//getChequesAnulados();
			        }
					});
	       };
		
	}
	
	
	var HandleListaChequesAnulados = function(){
		var id = $("#docpagos").children(":selected").attr("value");
		getChequesAnulados(id);
		
				    
	    function getChequesAnulados(){
			$.ajax({
			    type: "GET",
			    url: "process_cuenta.php",
			    data:"action=get_cheques_anulados&id="+id,
			    dataType:'json',
			    success: function(result)
			        {
			        	$("#cheques").html(result);
			        }
			});
		};
	   
	}
    return {

        //main function to initiate the module
        init: function () {
            handleDialogs();
            HandleListaChequesAnulados();
        }

    };

}();
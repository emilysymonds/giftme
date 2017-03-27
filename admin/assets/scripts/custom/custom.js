var Custom = function () {

    // private functions & variables
    
    var handleDataTableSorts = function() {
		//<-- SORT PARA ORDENAR POR FECHAS DD-MM-YYY  ---/>
		jQuery.extend( jQuery.fn.dataTableExt.oSort, {
						"date-uk-pre": function ( a ) {
							var ukDatea = a.split('/');
							return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
						},
						"date-uk-asc": function ( a, b ) {
							return ((a < b) ? -1 : ((a > b) ? 1 : 0));
						},
						"date-uk-desc": function ( a, b ) {
							return ((a < b) ? 1 : ((a > b) ? -1 : 0));
						}
					} );
		//</--   ---/>			
		//<-- SORT PARA ORDENAR POR NUMEROS CON .  ---/>
		jQuery.extend( jQuery.fn.dataTableExt.oSort, {
		    "formatted-num-pre": function ( a ) {
		         a = (a === "-" || a === "") ? 0 : replaceAll(a, '.', '');//<-- este metodo esta abajo echo! //a.replace( '.', '' )
		        return parseFloat( a );
		    },
		 
		    "formatted-num-asc": function ( a, b ) {
		        return a - b;
		    },
		 
		    "formatted-num-desc": function ( a, b ) {
		        return b - a;
		    }
		} );
		//</--   ---/>	
	}
	//</--  Ejemplo  ---/>	
    var myFunc = function(text) {
        alert(text);
    }
    //</--   ---/>	
    var handleDialogs = function() {
	    eliminarContacto = function(id){
   	 			//id=$('#nrogasto').val();
                bootbox.confirm("¿Estas seguro que quieres eliminar el contacto?", function(result) {
                // alert("Confirm result: "+id);
                if(result){
                   	location.href='index.php?action=eliminar&id='+id;
                   }
                }); 
	       };
	    modificarContacto = function(id){
		  			  
	    };
	       eliminarCuenta = function(id){
   	 			//id=$('#nrogasto').val();
                bootbox.confirm("¿Estas seguro que quieres eliminar la cuenta?", function(result) {
                  // alert("Confirm result: "+id);
                if(result){
                   	location.href='process_cuenta.php?action=eliminar&id='+id;
                   }
                }); 
	       };
	       eliminarUsuario = function(id){
   	 			//id=$('#nrogasto').val();
                bootbox.confirm("¿Estas seguro que quieres eliminar la cuenta?", function(result) {
                  // alert("Confirm result: "+id);
                if(result){
                   	location.href='process_cuenta.php?action=eliminar_usuario&id='+id;
                   }
                }); 
	       };
	 }
	
	
	
var handleDatePickers = function () {

        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                format: 'yyyy/mm/dd',
				autoclose: true
                
            });
            $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
        }
    }

	  
	
	var handleValidationContacto = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#form_contacto');
            var error1 = $('.alert-danger', form1);
           // var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    nombre: {
                        required: true,
                    },
                    mail: {
                        email: true
                    },
                },
               

                invalidHandler: function (event, validator) { //display error alert on form submit              
                   // success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
            });

    }
    
	
	
	
	
	var RegistarUsuario = function () {
		$("#FormSubmit").click(function(e) {
		  		
		  		var datos = 'username='+ $("#username").val() +'&name='+ $("#name").val()+'&password='+ $("#password").val()+'&password_again='+ $("#password_again").val()+'&token='+ $("#token").val()+'&mail='+ $("#mail").val();
		  		
		  		$.ajax({
			    type: "POST",
			    url: "registrarusuario.php",
			    data: datos,//$("#form_reg").serialize(),
			    dataType: 'json',
			    success: function(result)
			        {
			        	if(result.retorno==1)
						{
			        		$("#msg1").html(result.mensaje);
							$("#error_registro").show();
							
			        	}
			        	if(result.retorno==2)
						{
			        		$("#msg2").html(result.mensaje);
							$("#success_registro").show();
							$( '#form_reg' ).each(function(){
								this.reset();
							});
			        	}
			        }
			});
			e.preventDefault();
		});    
		    
	    
	}
	    
    
	
	
	var TablaMainAgenda = function(){
            
		var oTable = $('#agenda').dataTable({
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
					null,
					null,
					null,
					null
					]
			
            });

            jQuery('#agenda_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
            jQuery('#agenda_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            jQuery('#agenda_wrapper .dataTables_length select').select2({
                showSearchInput : false //hide search box with special css class
            }); // initialize select2 dropdown
	}
	
	var handleModalErrorSuperposicion = function(){
	//arregla el problema de superposicion! osea hace reload del modal
	$('body').on('hidden.bs.modal', '.modal', function () {
    	$(this).removeData('bs.modal');
	});
	
	}  
	
	
	
	
	var pagar_gasto = function(){
		$("#pagar_gasto").click(function() {
		    var checked = $(this).attr('checked');
		    if (checked) {
		    	$('#docpagos :select').removeAttr('disabled');
		    	$('#nrodoc :input').removeAttr('disabled');
		        $(this).attr('checked', true);
		    }
		    else {
		     	$('#docpagos :select').attr('disabled', true);
		     	$('#nrodoc :input').attr('disabled', true);
		        $(this).attr('checked', false);
		    }
		});
	}
	
	var agregar_inputs = function(){
	var counterTel = 1;
	var counterMail = 1;
	var counterDir = 1;
		 $('#add_field_tel').click(function(){
			 	counterTel += 1;
			 	$('#container_tel').append(
			 		//'<input id="field_' + counter + '" name="dynfields[]' + '" type="text" /><br />' );
			 		'<div class="row"><div class="col-md-3"><div class="form-group" ><label class="control-label">Tel&eacute;fono</label><input type="text" id="tel_' + counterTel + '" name="tel[]"'+'" class="form-control" placeholder="Ingrese telefono"  tabindex="3" ></div></div><div class="col-md-2 "><div class="form-group"><label class="control-label">Descripci&oacute;n tel&eacute;fono</label><input type="text" id="teldesc_' + counterTel + '" name="teldesc[]"'+'" class="form-control" placeholder="Casa, oficina, etc"  tabindex="3" ></div></div></div>');

 });
		 $('#add_field_mail').click(function(){
					 	counterMail += 1;
					 	$('#container_mail').append(
					 		'<div class="row"><div class="col-md-3"><div class="form-group"><label class="control-label">Mail</label><input type="text" id="mail_' + counterMail + '" name="mail[]" class="form-control" placeholder="Ingrese mail" tabindex="2" ></div></div><div class="col-md-2"><div class="form-group"><label class="control-label">Descripci&oacute;n mail</label><input type="text" id="maildesc_' + counterMail + '" name="maildesc[]" class="form-control" placeholder="Casa, oficina, etc" tabindex="2" ></div></div></div>');
		
		 });
		 $('#add_field_dir').click(function(){
					 	counterDir += 1;
					 	$('#container_dir').append(
					 		'<div class="row "><div class="col-md-3"><div class="form-group"><label class="control-label">Direcci&oacute;n</label><input type="text" id="dir_' + counterDir + '" name="dir[]" class="form-control" placeholder="Ingrese Direcci&oacute;n" tabindex="4" ></div></div><div class="col-md-2"><div class="form-group"><label class="control-label">Descripci&oacute;n direcci&oacute;n</label><input type="text" id="dirdesc_' + counterDir + '" name="dirdesc[]" class="form-control" placeholder="Casa, oficina, etc" tabindex="4" ></div></div></div>');

 });
	}
	
	var handleBootstrapSelect = function() {
        $('.bs-select').selectpicker({
            iconBase: 'fa',
            tickIcon: 'fa-check'
        });
    }
	
	
	
	
	
	// public functions
	
	
	
	
	var HandleConfiguracion = function (){
		
		$( "#btn_change_pass" ).click(function() {
		  $( "#form_change_pass" ).submit();
		});
		/*$( "#form_change_pass").submit(function( event ) {
		  alert( "Handler for .submit() called." );
		  event.preventDefault();
		});
		
*/
		$("#form_change_pass").submit(function(e){
		e.preventDefault();
		var data = "token="+$("#token").val()+"&password_current="+$("#password_current").val()+"&password_new="+$("#password_new").val()+"&password_new_again="+$("#password_new_again").val();
			$.ajax({
			    type: "POST",
			    url: "changepassword.php",
			    data:data,
			    dataType:'json',
			    success: function(result)
			        {
			        	if(result.retorno==1){
			        		$("#error_change_pass").show();
			        		$("#error_change_pass").append(result.mensaje);
							
			        	}
			        	if(result.retorno==2){
			        		$("#success_change_pass").show();
							$("#success_change_pass").append(result.mensaje);
							
			        	}
			        	
			        //location.href('index.php');	
			        },
			     error:function (xhr, ajaxOptions, thrownError){
				$("#error_change_pass").show();//show submit button
				 //hide loading image
				alert(thrownError);
			}
			});
			
		});

		
	}
	
	var HandleForms = function (){
		$('form.updateuser').on('submit', function() {
			var that = $(this),
				url = that.attr('action'),
				type = that.attr('method'),
				data = {};
			that.find('[name]').each(function (index,value){
				var that = $(this),
					name = that.attr('name'),
					value = that.val();
				data[name] = value;
			});
			
			$.ajax({
				url: url,
				type: type,
				data: data,
				dataType: 'json',
				success: function(response){
					console.log(response);
					$("#success_update").show();
					$("#success_update").append(response);
					
				}
			});
			return false;
		});	
		
		$('form.changepass').on('submit', function() {
			var that = $(this),
				url = that.attr('action'),
				type = that.attr('method'),
				data = {};
			that.find('[name]').each(function (index,value){
				var that = $(this),
					name = that.attr('name'),
					value = that.val();
				data[name] = value;
			});
			
			$.ajax({
				url: url,
				type: type,
				data: data,
				dataType: 'json',
				success: function(result)
			        {
			        	console.log(result);
			        	if(result.retorno==1){
			        		$("#error_change_pass").show();
			        		$("#error_change_pass").append(result.mensaje);
							
			        	}
			        	if(result.retorno==2){
			        		$("#success_change_pass").show();
							$("#success_change_pass").append(result.mensaje);
							
			        	}
			        	
			        	
			        },
			     error:function (xhr, ajaxOptions, thrownError){
				$("#error_change_pass").show();//show submit button
				 //hide loading image
				alert(thrownError);
				}
			});
			return false;
		});	
	}
	
    
		
	
    return {

        //main function
        init: function () {
            //initialize here something.   
            handleDataTableSorts(); 
            handleDialogs();   
            handleDatePickers();     
            
            TablaMainAgenda();
            handleModalErrorSuperposicion();
            handleBootstrapSelect();
            agregar_inputs();
            pagar_gasto();
            //RegistarUsuario();
            HandleConfiguracion();
            HandleForms();
        },

        //some helper function
        doSomeStuff: function () {
            myFunc();
        }

    };

}();
 
//functiones de validacion 
	    function trim(str)
	{
		return str.replace(/^\s+|\s+$/g,'');
	}
	
	/*
	Make sure that textBox only contain number
	*/
	
	function checkNumber(textBox)
	{
		while (textBox.value.length > 0 && isNaN(textBox.value)) {
			textBox.value = textBox.value.substring(0, textBox.value.length - 1);
		}
		
		textBox.value = trim(textBox.value);
	/*	if (textBox.value.length == 0) {
			textBox.value = 0;		
		} else {
			textBox.value = parseInt(textBox.value);
		}*/
	}

	function copy_date(){
		date = $('#fechaing').val();
		$('#fechaven').val(date);
	}
	function suma_iva_subtotal(){
		var iva = parseFloat($('#iva').val());
		if(isNaN(iva))
			 iva = 0;
		var subtotal = parseFloat($('#subtotal').val());
		if(isNaN(subtotal))
			subtotal = 0;
		
		$('#total').val(iva+subtotal);
	}
	function sumarTotal(gasTotal){
		var total =  parseFloat($('#importe').val());
		if(isNaN(total))
			 total = 0;
		var gasto =  parseFloat(gasTotal);
		if(isNaN(gasto))
			gasto = 0;
		
		$('#importe').val(total+gasto);
	}
	function checkEstadoParaPagar(id){
		var e=$('#estados option:selected').val();
		if(e=='2'){
			location.href='../pagos/index.php?action=nuevo_directo&gasto_actual='+id;
		}else{
			location.href='process_gasto.php?action=modificar_estado&id='+id+'&estado='+e;
		}
	}
	
	function btnEditSubruro(id){
			 bootbox.prompt("Editar subrubro", function(result) {                
				  if (result != '') {                                       
					location.href='process_gasto.php?action=editarsubrubro&nombre='+result+'&subrubro='+id;   
					//bootbox.alert(' process_gasto.php?action=editarsubrubro&nombre='+result+'&subrubro='+id );       
				                                 
				  } else {
				  	bootbox.alert("No se actualizo el subrubro"); 
				  }
				});
			return false;
	}
	function btnDeleteSubruro(id){
		bootbox.confirm("¿Estas seguro que quieres eliminar el subrubro?", function(result) {
        if(result){
        	$.get( "process_gasto.php",{action: "sepuedeeliminarsubrubro" , subrubro: id }, function( result ) {
	        	if(result == 0){
	        		location.href='process_gasto.php?action=eliminarsubrubro&subrubro='+id;
				}else if(result == 1){
				 	 bootbox.alert("El subrubro tiene gastos asociados");
				}
			},"json");
		}
	 });
		return false;
	}
	function btnEditRubro(id){
			 bootbox.prompt("Editar rubro", function(result) {                
				  if (result != '') {                                       
					location.href='process_gasto.php?action=editarrubro&nombre='+result+'&rubro='+id;   
					//bootbox.alert(' process_gasto.php?action=editarsubrubro&nombre='+result+'&subrubro='+id );       
				                                 
				  } else {
				  	bootbox.alert("No se actualizo el rubro"); 
				  }
				});
			return false;
	}
	function btnDeleteRubro(id){
		bootbox.confirm("¿Estas seguro que quieres eliminar el rubro?", function(result) {
        if(result){
        	$.get( "process_gasto.php",{action: "sepuedeeliminarrubro" , rubro: id }, function( result ) {
	        	if(result == 0){
	        		location.href='process_gasto.php?action=eliminarrubro&rubro='+id;
				}else if(result == 1){
				 	 bootbox.alert("El rubro tiene subrubros asociados");
				}
			},"json");
		}
	 });
		return false;
	}
	
	function escapeRegExp(string) {
	    return string.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
	}
	function replaceAll(string, find, replace) {
	  return string.replace(new RegExp(escapeRegExp(find), 'g'), replace);
	}
/***
Usage
***/
//Custom.init();
//Custom.doSomeStuff();

$(function(){
  function hideModal(modalwindow){
    $(modalwindow).modal('hide');
  }
   $('body').on('hidden.bs.modal', '.modal', function () {
	  $(this).removeData('bs.modal');
	});
  $('#closewin').on('click', function(e){
    e.preventDefault();
    hideModal('#modalProducto');
  });
});

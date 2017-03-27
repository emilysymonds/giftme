function deleteProductOn(productId)
{
	if (confirm('¿Está seguro de eliminar el producto?')) {
		window.location.href = 'index.php?action=eliminar&id=' + productId;
	}
}

function deleteProductOff(productId)
{
	if (confirm('¿Está seguro de eliminar el producto?')) {
		window.location.href = 'index.php?action=eliminar&id=' + productId;
	}
}

function deleteImage(idImagen, productId){
	if (confirm('¿Está seguro de eliminar esta imagen?')) {
		window.location.href = 'index.php?action=eliminarImagen&idImagen=' + idImagen + '&id='+productId;
	}
}
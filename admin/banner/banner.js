
function eliminarBannerActual(bannerId)
{
	if (confirm('¿Está seguro de eliminar el banner?')) {
		window.location.href = 'index.php?action=eliminar&id=' + bannerId;
	}
}
<?php
class Producto{
	private $_db,
			$_data;
			
	public function __construct($id=null)
	{
		$this->_db = DB::getInstance();
		if($id){
			$this->find($id);
		}
	}
	
	public function update($fields = array(), $id = null)
	{	
		if(!$this->_db->update('producto',$id, $fields)){
			throw new Exception ('There was a problem updating.');
		}
	}
	
	public function create($fields)
	{
		if(!$this->_db->insert('producto',$fields)){
			throw new Exception('Hubo un problema creando el producto.');
		}
		
	}
	
	public function find($producto=null)
	{
		if($producto){
			$data = $this->_db->get('producto',array('id','=', $producto));
			
			if($data->count()){
				$this->_data = $data->first();
				return true;
			}
		}
	}
		
	public function lastID(){
		return DB::getInstance()->lastID();
	}
	
	public function exists()
	{
		return (!empty($this->_data)) ? true : false;
	}
	
	public function data()
	{
		return $this->_data;
	}
	
	public function getCategorias()
	{
		return $this->_db->get('prod_cat',array('producto','=',$this->data()->id))->results();
	}
	public function getImagenes()
	{
		return $this->_db->get('imagen',array('producto','=',$this->data()->id))->results();
	}
	public function getAllProductosOn()
	{
		/*return $this->_db->query('SELECT * FROM producto WHERE estado="on" ORDER BY nombre')->results();*/

		return DB::getInstance()->get('producto',array('estado','=','on'))->results();
	}
	public function getAllProductosOff()
	{
		return DB::getInstance()->get('producto',array('estado','=','off'))->results();
	}
	public function devolverCategoriasProducto(){
		return $this->_db->query('SELECT DISTINCT pc.* FROM prod_cat pc, producto p WHERE pc.producto = '.$this->data()->id.'')->results();
	}
	public function subirAOnline(){
		return $this->_db->query('UPDATE producto SET estado="on" WHERE id='.$this->data()->id.'')->results();
	}
	public function bajarAOffline(){
		return $this->_db->query('UPDATE producto SET estado="off" WHERE id='.$this->data()->id.'')->results();
	}
	public function insertarCategoria($cat){
		$this->_db->query('INSERT INTO prod_cat(producto, categoria) VALUES ('.$this->data()->id.' , '.$cat.')');
	}
	public function eliminarRelacionProdCat(){
		return $this->_db->query('DELETE FROM prod_cat WHERE producto = '.$this->data()->id.'')->results();
	}
	public function insertarImagen($fields){
		if(!$this->_db->insert('imagen', $fields)){
			throw new Exception('Hubo un problema creando la imagen.');
		}
	}
	
	public function eliminarImagen($nombre){
		$this->_db->delete('imagen',array('nombre_archivo','=',$nombre));
	}
	
	public function eliminarImagenes(){
		$arrayImg=$this->getImagenes();
		foreach($arrayImg as $i){
			$img = new Imagen($i->id);
			$img->eliminarFisicamente();
			DB::getInstance()->delete('imagen',array('id','=',$img->data()->id));
		}
	}
	
	
}
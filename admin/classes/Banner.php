<?php
class Banner{
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
		if(!$this->_db->update('banner',$id, $fields)){
			throw new Exception ('There was a problem updating.');
		}
	}
	
	public function create($fields)
	{
		if(!$this->_db->insert('banner',$fields)){
			throw new Exception('Hubo un problema creando la categoria.');
		}
		
	}
	
	public function find($categoria=null)
	{
		if($categoria){
			$data = $this->_db->get('banner',array('id','=', $categoria));
			
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
	public function getImagenes()
	{
		return $this->_db->get('imagen',array('id','=',$this->data()->id_imagen))->results();
	}
	
	public function insertarImagen($id){
		$this->_db->query('UPDATE banner SET id_imagen = '.$id.' WHERE id='.$this->data()->id.'')->results();	
	}
	
	public function eliminarImagen($id){
			$img = new Imagen($id);
			$img->eliminarFisicamente();
			DB::getInstance()->delete('imagen',array('id','=',$img->data()->id));	
	}
	
	public function obtenerTodos(){
		return DB::getInstance()->get('banner', array('1','=','1'))->results();

	}
	
	
	
}
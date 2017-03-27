<?php
class Imagen{
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
		if(!$this->_db->update('imagen',$id, $fields)){
			throw new Exception ('There was a problem updating.');
		}
	}
	
	public function create($fields)
	{
		if(!$this->_db->insert('imagen',$fields)){
			throw new Exception('Hubo un problema creando la categoria.');
		}
		
	}
	
	public function find($imagen=null)
	{
		if($imagen){
			$data = $this->_db->get('imagen',array('id','=', $imagen));
			
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
	
	public function eliminarFisicamente(){
		$img=new Imagen($this->data()->id);
		$nombreImagen=$img->data()->nombre_archivo;
		@unlink(SRV_ROOT . PRODUCT_IMAGE_DIR . $nombreImagen);
		@unlink(SRV_ROOT . BANNER_IMAGE_DIR . $nombreImagen);	
	
	}
	
	
	
	
}
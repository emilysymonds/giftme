<?php
class Categoria{
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
		if(!$this->_db->update('categoria',$id, $fields)){
			throw new Exception ('There was a problem updating.');
		}
	}
	
	public function create($fields)
	{
		if(!$this->_db->insert('categoria',$fields)){
			throw new Exception('Hubo un problema creando la categoria.');
		}
		
	}
	
	public function find($categoria=null)
	{
		if($categoria){
			$data = $this->_db->get('categoria',array('id','=', $categoria));
			
			if($data->count()){
				$this->_data = $data->first();
				return true;
			}
		}
	}
		
	public function lastID(){
		return $this->_db->lastID();
	}
	
	public function exists()
	{
		return (!empty($this->_data)) ? true : false;
	}
	
	public function data()
	{
		return $this->_data;
	}
	
	public function obtenerProductosCategoriaOn(){
	//de la tabla prod_cat devuelve los ids de los productos
		return $this->_db->query('SELECT DISTINCT pc.*,p.id FROM prod_cat pc, producto p WHERE pc.categoria = '.$this->data()->id.' AND p.estado = "on" AND  p.id=pc.producto')->results();
	}
	public function obtenerProductosCategoriaOff(){
	//de la tabla prod_cat devuelve los ids de los productos
		return $this->_db->query('SELECT DISTINCT pc.*,p.id FROM prod_cat pc, producto p WHERE pc.categoria = '.$this->data()->id.' AND p.estado = "off"')->results();
	}
	public function obtenerTodas(){
		return DB::getInstance()->get('categoria', array('1','=','1'))->results();

	}
	public function cantidadProductosCategoriaOn(){
		return $this->_db->query('SELECT DISTINCT COUNT(*) FROM prod_cat pc, producto p WHERE pc.categoria = '.$this->data()->id.' AND p.estado = "on" AND  p.id=pc.producto')->results();
	}
	public function cantidadProductosCategoriaOff(){
		return $this->_db->query('SELECT DISTINCT COUNT(*) FROM prod_cat pc, producto p WHERE pc.categoria = '.$this->data()->id.' AND p.estado = "off" AND  p.id=pc.producto')->results();
	}
	
	
}
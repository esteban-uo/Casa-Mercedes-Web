<?php
class TipoimagesController extends AppController {

	var $name = 'Tipoimages';
	var $uses = array('Tipoimage','Image');

	function index() {
		$this->Tipoimage->recursive = 0;
		$this->set('tipoimages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de Imagen Invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoimage', $this->Tipoimage->read(null, $id));
	}

	/*
		@Autor: Seinh  
		@Name:  add
		@Type: Function
		@Description: Esta Funcion  agrega un registro a la tabla tipoimages de la base de datos, ademas de
		agregar su respectiva carpeta en la base de datos.
	*/
	function add() {
		if (!empty($this->data)) {
		$Folder = new Folder;
		
			$this->Tipoimage->create();
			if ($this->Tipoimage->save($this->data)) {

				
				$this->Session->setFlash(__('El tipo de imagen ha sido guardado', true));
					
				$Folder->create('img/'.Inflector::slug($this->data['Tipoimage']['title'],'_'),true,777);
				$this->redirect(array('action' => 'index'));
			
			} else {
				$this->Session->setFlash(__('El tipo de imagen no pudo ser guardado. Porfavor, Intente de nuevo.', true));
			}
		}
	}
	/*
		@Autor: Seinh  
		@Name:  edit
		@Type: Function
		@Parameters: $id
		@Description: Esta Funcion modifica el registro de la tabla tipoimages en la base de datos cuyo 
		id se envie como parametro asi como el nombre de la carpeta fisica que este representa en el servidor.
	*/
	function edit($id = null) {
		$Folder = new Folder;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipoimage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
				$image = $this->Tipoimage->read(null,$id);
				$old= Inflector::slug($image['Tipoimage']['title'],'_');
				$new = Inflector::slug($this->data['Tipoimage']['title'],'_');
				
				
			if($old != $new){
				rename(getcwd().'\\img\\'.$old,getcwd().'\\img\\'.$new);
			}
			
			if ($this->Tipoimage->save($this->data)) {
			
				
				$this->Session->setFlash(__('El tipo de imagen ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo de imagen no pudo ser guardado. Porfavor, Intente de nuevo.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->Tipoimage->read(null, $id);
		}
	}

		
		
	/*
		@Autor: Seinh  
		@Name:  edit
		@Type: Function
		@Params: $id
		@Description: Esta funcion borra el registro de la tabla tipoimages de la base de datos cuyo id es pasado por
		 parametro borrando los registros de la tabla images relacionadas con este tipo, borrando ademas la carpeta fisica 
		 que representa este registro en el servidor.
	*/
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id invalido para el tipo de Imagen', true));
			$this->redirect(array('action'=>'index'));
		}
		
		
		$image = $this->Tipoimage->read(null,$id);
		$images =  $this->Image->find('list', array('conditions'=>array('Image.tipoimage_id'=>$id)));
		
		foreach($images as $image_id)
		{
			if($this->Image->delete($image_id))
			{
				
			}else
			{
				$this->Session->setFlash(__('El tipo de imagen no pudo borrarse'.$this->data, true));
				$this->redirect(array('action' => 'index'));
			}
		}
		
		if ($this->Tipoimage->delete($id)) {
			
		}else
		{
			$this->Session->setFlash(__('El tipo de imagen no pudo borrarse'.$this->data, true));
			$this->redirect(array('action' => 'index'));
		}
		if($image['Tipoimage']['title'])
		{
			
			$Folder = new Folder;
			$Folder->delete('img/'.Inflector::slug($image['Tipoimage']['title'],'_'));
			$this->Session->setFlash(__('Tipo de Imagen Guardado', true));
			$this->redirect(array('action'=>'index'));
			
		}
			
		
		$this->Session->setFlash(__('El tipo de imagen no pudo borrarse'.$this->data, true));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
class ImagesController extends AppController {

	var $name = 'Images';
	

	function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Imagen Invalida', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('image', $this->Image->read(null, $id));
	}
	
	/*
		@Autor: Seinh  
		@Name:  add
		@Type: Function
		@Description: Esta Funcion  agrega un registro a la tabla images de la base de datos, 
		ademas de subir la imagen respectiva al servidor.
	*/
	function add() {
	
		$tipoimages = $this->Image->Tipoimage->find('list');
		$this->set(compact('tipoimages'));

		if (!empty($this->data)) {
		
			if($this->upload($this->data) == 1)
			{
				$this->Image->create();
						$data2 = array('Image'=>
								array(
								 'url' => $this->data['Image']['url']['name'],
								 'tipoimage_id' => $this->data['Image']['tipoimage_id'],
								 'modified_user_id' => $this->data['Image']['modified_user_id']
								 
								));
				
				 if ($this->Image->save($data2)) {
					$this->Session->setFlash(__('La imagen Guardada Exitosamente', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('La imagen no pudo Guardarse. Porfavor, intente de nuevo.', true));
				}
			}
		} else
		{
			$this->render();
		}
	}

	/*
		@Autor: Seinh  
		@Name:  edit
		@Type: Function
		@Parameter: $id
		@Description: Esta Funcion  modifica el registro de la tabla images de la base de datos cuyo id es enviado como parametro, 
		ademas de eliminar la imagen  antigua del registro modificado y subir una nueva imagen al servidor.
	*/
	function edit($id = null) {
		$tipoimages = $this->Image->Tipoimage->find('list');
		$this->set(compact('tipoimages'));
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Imagen Invalida', true));
			$this->redirect(array('action' => 'index'));
		}
			
			if (!empty($this->data)) {
					$data2 = array('Image'=>
								array(
								'id'=>$this->data['Image']['id'],
								'url' => $this->data['Image']['url']['name'],
								'tipoimage_id' => $this->data['Image']['tipoimage_id'],
								'modified_user_id' => $this->data['Image']['modified_user_id']
								 
								));
				$this->deleteImage($id);
				if($this->upload($this->data)== 1){
					if ($this->Image->save($data2)) {
						$this->Session->setFlash(__('La imagen Guardada Exitosamente', true));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('La imagen no pudo Guardarse. Porfavor, intente de nuevo.', true));
					}
				}
			}
		
		if (empty($this->data)) {
			$this->data = $this->Image->read(null, $id);
		}
	}
	
	/*
		@Autor: Seinh  
		@Name:  delete
		@Type: Function
		@Parameter: $id
		@Description: Esta Funcion  elimina el registro de la tabla images de la base de datos cuyo id es enviado como parametro, 
		ademas de eliminar la imagen  antigua del registro modificado y subir una nueva imagen al servidor.
	*/
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id de imagen invalido', true));
			$this->redirect(array('action'=>'index'));
		}
		
		if($this->deleteImage($id) == 1){
			if ($this->Image->delete($id)) {
				$this->Session->setFlash(__('Imagen Borrada', true));
				$this->redirect(array('action'=>'index'));
			}
		}
		$this->Session->setFlash(__('La imagen no pudo ser Borrada', true));
		$this->redirect(array('action' => 'index'));
	}

	/*
		@Autor: Seinh  
		@Name:  upload
		@Type: Function
		@Parameter: $file
		@Description: Esta Funcion  se encarga de subir al servidor el archivo cuya informacion es enviada a traves del parametro.
	*/
	function  upload($file = null)
	{
		$image = $file['Image']['url']['name'];
		$uploadedFile= $file['Image']['url']['tmp_name'];
		$type= strtolower($file['Image']['url']['type']);
		$type = str_split($type,strrpos($type, '/'));
		$folder = $this->Image->Tipoimage->read(null,$this->data['Image']['tipoimage_id']);
		$folder = Inflector::slug($folder['Tipoimage']['title'],'_');
		
		if(!empty($image) && $type[0] == 'image'&& $file['Image']['url']['size'] <= 1000000)
		{
			$path = getcwd().'\\img\\'.$folder.'\\'.$image;
			if(!file_exists($path))
			{
				
				if(move_uploaded_file($uploadedFile,$path))
				{
					return 1;
				}else
				{
				$this->Session->setFlash(__('La imagen no pudo ser cargada', true));
				return 0;}
			}else
			{
				$this->Session->setFlash(__('Esta imagen ya existe en la carpeta', true));
				return 0;}
		}else{
			$this->Session->setFlash(__('El archivo subido excede el tamaño permitido (1 MB) o no es una Imagen, intente de nuevo', true));
			return 0;}

	}
	
	/*
		@Autor: Seinh  
		@Name:  deleteImage
		@Type: Function
		@Parameter: $id
		@Description: Esta Funcion  se encarga de eliminar la imagen en el guardada en el servidor mediante el id enviado como parametro
	*/
	function  deleteImage($id = null)
	{
			$image = $this->Image->read(null,$id);
			$tipoImage = $tipoimages = $this->Image->Tipoimage->read(null,$image['Image']['tipoimage_id']);
			$image= $image ['Image']['url'];
			$tipoImage = Inflector::slug($tipoImage['Tipoimage']['title'],'_');
			if(unlink(getcwd().'\\img\\'.$tipoImage.'\\'.$image))
			{
				return 1;
			}else
			{
				return 0;
			}
	}
}

<?php
class ImagesController extends AppController {

	var $name = 'Images';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

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
		@Description: Esta Funcion  agrega un registro a la tabla images de la base de datos, demas de subir la imagen respectiva junto con una copia en miniatura al servidor.
	*/
	function add() {
	
		$tipoimages = $this->Image->Tipoimage->find('list');
		$this->set(compact('tipoimages'));

		if (!empty($this->data)) {
		
			
			
				$this->Image->create();
						$data2 = array('Image'=>
								array(
								 'url' => $this->data['Image']['url']['name'],
								 'tipoimage_id' => $this->data['Image']['tipoimage_id'],
								 'modified_user_id' => $this->data['Image']['modified_user_id']
								));
				
			if ($this->Image->save($data2)) 
			{
					$id = $this->Image->find('first', array('conditions'=>array('Image.url'=>$this->data['Image']['url']['name'])));
					$id = $id['Image']['id'];
					$data2 = array('Image'=>
								array(
								'id'=>$id,
								'url' => $this->randomName($this->data['Image']['url']['name'],$id),
								'tipoimage_id' => $this->data['Image']['tipoimage_id'],
								'modified_user_id' => $this->data['Image']['modified_user_id']
								 
								));
					Debug($data2);
								
					$this->Image->save($data2);
					
					$this->data['Image']['url']['name'] = $data2['Image']['url'];
					$this->upload($this->data);
					$this->Session->setFlash(__('La imagen Guardada Exitosamente', true));
					$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La imagen no pudo Guardarse. Porfavor, intente de nuevo.', true));
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
				$image_name = $this->Image->read(null,$id);
				$image_name = $image_name['Image']['url'];
				$this->data['Image']['url']['name']= $image_name;
				$this->deleteImage($id);
				if($this->upload($this->data)== 1){
					
						$this->Session->setFlash(__('La imagen Guardada Exitosamente', true));
						$this->redirect(array('action' => 'index'));
					 
				}else {
						$this->Session->setFlash(__('La imagen no pudo Guardarse. Porfavor, intente de nuevo.', true));
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
		$miniImage = $this->getMiniatureImage($image);
		$uploadedFile= $file['Image']['url']['tmp_name'];
		$type= strtolower($file['Image']['url']['type']);
		$type = str_split($type,strrpos($type, '/'));
		
		if(!empty($image) && $type[0] == 'image')
		{
			
			$folder = $this->Image->Tipoimage->read(null,$this->data['Image']['tipoimage_id']);
			$folder = Inflector::slug($folder['Tipoimage']['title'],'_');
			$path = getcwd().'\\img\\'.$folder.'\\'.$image;
			$path2 = getcwd().'\\img\\'.$folder.'\\'.$miniImage;
			
			
			
			if(!file_exists($path))
			{

				$this->resizeImage($uploadedFile,800,600);
				if(move_uploaded_file($uploadedFile,$path))
				{
					copy($path,$path2);
					$this->resizeImage($path2,80,60);
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
			$this->Session->setFlash(__('El archivo que intenta subir no es una imagen, intente de nuevo', true));
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
			if(unlink(getcwd().'\\img\\'.$tipoImage.'\\'.$image) && unlink(getcwd().'\\img\\'.$tipoImage.'\\'.$this->getMiniatureImage($image)))
			{
				return 1;
			}else
			{
				return 0;
			}
	}
	
	/*
		@Autor: Seinh  
		@Name:  resizeImage
		@Type: Function
		@Parameter: $image,$width, $height
		@Description: Esta Funcion se encarga de Cambiar el Tamaño de las imagenes que se le pasan por parametro.
	*/
	function resizeImage($image = null,$width = null, $height= null )
	{
		App::import('Vendor', 'ThumbLibInc', array('file' => 'phpthumb'.DS.'ThumbLib.inc.php'));
		$thumb = PhpThumbFactory::create($image); 
		$thumb->resize($width, $height)->save($image);
	}
	/*
		@Autor: Seinh  
		@Name:  resizeImage
		@Type: Function
		@Parameter: $image,$width, $height
		@Description: Esta Funcion se encarga de Cambiar el Tamaño de las imagenes que se le pasan por parametro.
	*/
	function randomName($image = null,$id=null)
	{
		 return rand(0,9).''.rand(0,9).''.rand(0,9).$id.'.'.$this->getExtension($image);
	}
	/*
		@Autor: Seinh  
		@Name:  getMiniatureImage
		@Type: Function
		@Parameter: $File
		@Description: Esta Funcion genera la nomenclatura de la copia en miniatura de la imagen original
	*/
	function getMiniatureImage($file = null)
	{
		$image= str_split($file,strrpos($file, '.'));
		return $image[0].'.th'.'.'.$this->getExtension($file);;
		
	}
	/*
		@Autor: Seinh  
		@Name:  getExtension
		@Type: Function
		@Parameter: $file
		@Description: Esta funcion obtiene la extension del archivo que se le pasa por parametro.
	*/
	function getExtension($file = null)
	{
		$file= str_split($file,strrpos($file, '.')+1);
		return $file[1];
	}
	
}

<?php
class ImagesController extends AppController {

	var $name = 'Images';
	

	function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid image', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('image', $this->Image->read(null, $id));
	}

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
					$this->Session->setFlash(__('The image has been saved', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
				}
			}
		} else
		{
			$this->render();
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid image', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Image->save($this->data)) {
				$this->Session->setFlash(__('The image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Image->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for image', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Image->delete($id)) {
			$this->Session->setFlash(__('Image deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function  upload($file = null)
	{
		$image = $file['Image']['url']['name'];
		$uploadedFile= $file['Image']['url']['tmp_name'];
		$type= strtolower($file['Image']['url']['type']);
		$type = str_split($type,strrpos($type, '/'));
		$folder = $this->Image->Tipoimage->read(null,$this->data['Image']['tipoimage_id']);
		$folder = $folder['Tipoimage']['title'];
		
		if(!empty($image) && $type[0] == 'image'&& $file['Image']['url']['size'] <= 1000000)
		{
			$path = getcwd().'\\img\\'.$folder.'\\'.$image;
			if(!file_exists($path))
			{
				
				if(move_uploaded_file($uploadedFile,$path))
				{
					return 1;
				}else
				{return 0;}
			}else
			{return 0;}
		}else{return 0;}

	}
}

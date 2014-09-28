<?php
namespace Controllers;
	class  Categories_Controller extends Master_Controller {
		
		public function __construct(){
			parent::__construct(get_class(),
					'categories','/views/categories/');
			echo 'hello, im the category <br />';
		}
		public function index () {
			$categories = $this->model->find();
			var_dump($categories);
			$template = DX_ROOT_DIR . $this->views . 'index.php' ;
			include_once $this->layout;
		}
	}

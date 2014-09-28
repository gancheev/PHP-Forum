<?php
namespace Controllers;
class Master_Controller {
		protected $layout;
		protected $views;
		
		public function __construct($class_name = '\Controllers\Master_Controller',
				$model = 'master',
				$views = '/views/master/'){
			$this->views = $views;
			$this->class_name = $class_name;
			
			include_once DX_ROOT_DIR ."models/{$model}.php" ;
			$model_class = "\Models\\" . ucfirst($model). "_Model";
			
			$this->model = new $model_class(array('table'=>'users'));
			
			$this->layout = DX_ROOT_DIR . '/views/layout/default.php'; 
		}
		
	}

<!-- templete.php -->
<?php 
	class Templete{
		protected $path;
		protected $varriables= array();

		public function __construct($path){
			$this->$path=$path;
		}

		public function __set($key, $val){
			$this->$varriables[$key]=$value;
		}

		public function __get($key){
			return $this->$varriables[$key];
		}

		public function __tostring(){
			extract($this->varriables);
			ob_start();
			include 'templete/'
			.str_replace('\\', '/', $this->path).'php';
			return ob_get_clean();
		}


	}

 ?>
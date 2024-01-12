<?PHP
	class User {
		private $name;
		private $age;

		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		//handle all the getters with magic methods.
		public function __get($property){
			if(property_exists($this, $property)){
				return $this->$property;
			}
		}
		//handle all the setters with magic methods.
		public function __set($property, $value){
			if(property_exists($this, $property)){
				$this->$property = $value;
			}			
			return $this;
		}
	}


$user1 = new User ('John', 40);
$user1->__set('age',41);
echo $user1->__get('age');

?>
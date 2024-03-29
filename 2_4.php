<?PHP
	class User {
		//attributes (properties)
		public $name;
		public $age;
		//runs when an object is created
		public function __construct($name, $age){
			echo 'class '.__CLASS__.' instantiated<br>';
			$this->name = $name;
			$this->age = $age;
		}

		public function sayHello(){
			return $this->name.' Says Hello';
		}
		//Called when no other references to a certain object
		//Used for cleanup, closing connectors, etc
		public function __destruct(){
			echo 'destructor ran....';
		}
	}

$user1 = new User('Brad', 36);
echo $user1->name.' is '.$user1->age.' years old<br>';
echo $user1->sayHello().'<br>';

$user2 = new User('Sara', 25);
echo $user2->name.' is '.$user2->age.' years old<br>';
echo $user2->sayHello().'<br>';

?>

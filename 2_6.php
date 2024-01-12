<?PHP
ini_set('error_reporting', E_ALL);
class User {
	protected $name;
	protected $age;
	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
}

class Customer extends User{
	private $balance;
	public function __construct($name, $age, $balance){
		parent::__construct($name, $age);
		$this->balance = $balance;
	}
	public function pay($amount) {
		return $this->name . ' paid $' . $amount;
	}
	public function getBalance(){
		return $this->balance;
	}
}

$customer1 = new Customer('Jimmy', 40, 90);

//echo $customer1->pay(100);
echo $customer1->getBalance();

//echo "<pre>";
//print_r($customer1);
//echo "</pre>";

?>
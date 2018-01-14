<html>
<head lang="en">

	<meta name="title" content="testing repo" />
	<meta name="author" content="oyunk">
	<meta name="description" content="created Jan 2018, originally Nov 2016">
	<!--<link href="http://googledrive.com/host/" rel="stylesheet"> -->

</head> 

<body>
	<?php 
	
	echo "hello repo test";
		
	class Pig {
		private $food;
		private $name;
		
		public function __construct($name,$food){
			$this -> name = $name;
			$this -> food = $food;
		}

		public function setFood($myfood){
			$this -> food = $myfood;
		}
		
		public function getFood(){
			return "Eating " . $this -> food ."!";
		}
		
		public function wallow(){
			$this -> food = "mud pie";
			$this -> setFood = $this -> food;
			return $this -> getFood = $this -> food;
		}
		
		public function stroll(){
			return $this -> getFood();
		}
	}
	
	$myPet = new Pig('piggy','bbqpork');
	echo $myPet -> getFood();
	echo $myPet -> setFood('ham');
	echo "<br/>";
	echo $myPet -> wallow();
	echo "<br/>";
	echo $myPet -> stroll();
	echo "<br/>";
	
	?>

</body>
</html>

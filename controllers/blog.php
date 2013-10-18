<!-- Ellis Lab setup demo:
http://ellislab.com/codeigniter/user-guide/general/controllers.html-->

<?php

class Blog extends CI_Controller{

	public function index(){
		echo 'hello world';
	}

	public function comments(){
		echo "look at this!!";
	}

	public function eleanor(){
		echo " <img style='height:300px' src='http://images.wikia.com/harrypotter/images/5/5a/Darkmark01ag4.gif'> ";
	}
}

?>
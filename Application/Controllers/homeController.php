<?php

use MightyCore\CONTROLLER;

class homeController extends CONTROLLER
{
    public function indexAction() {  

		if($this->method == 'GET'){
			\MightyCMS\FileManager::upload('test');
			echo "This is home page for the Application. Mighty's routing is working fine. </br></br>";
			
			echo "Now testing Mighty View Render...";
			echo $this->_view('test', 'template')->render(array('name'=>'Mighty'));
			
			echo "</br></br>Now testing Services...";
			echo $this->_service('test')->testservicefunction();
			echo "</br>";
			echo $this->_service('sub/testsub')->testservicefunction();
			
			//echo "</br></br>Now initiating Model...";
			//print_r($this->_model('test')->querythis());
		}else{
			$this->_response('Invalid Method', 405);
		}
		 
    }
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct(){

    }
	
	public function index()
	{
		echo "Main um contato";
    }
    
    public function workInContainerMessage(){
        
        echo "Container databases in apache working for everyone";
    }

    public function updateContato(){
        
        echo "Update contato for everyone";
    }

    public function delete(){

        echo "Deletando um contato";
    }
}

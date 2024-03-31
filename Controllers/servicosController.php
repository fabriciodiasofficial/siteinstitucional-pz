<?php

class servicosController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$array = array();
		
		$this->loadTemplate('servicos', $dados);
	}

}
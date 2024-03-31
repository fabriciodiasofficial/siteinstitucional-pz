<?php

class HomeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$array = array();

		$portfolio = new Portfolio();
		$dados['portfolio'] = $portfolio->getTrabalhos(8);

		$this->loadTemplate('home', $array);
	}

}
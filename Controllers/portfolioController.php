<?php

class portfolioController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$array = array();

		$portfolio = new Portfolio();
		$dados['portfolio'] = $portfolio->getTrabalhos();

		$this->loadTemplate('portfolio', $dados);
	}

}
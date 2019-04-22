<?php

class Pages extends Controller{

    /** @var Post */
    private $postModel;

    public function __construct() {
	}

	public function index() {
        $data = ['title' => 'Welcome'];
		$this->view('pages/index', $data);
	}

	public function about() {
		$data = ['title' => 'About Title'];
		$this->view('pages/about', $data);
	}
}
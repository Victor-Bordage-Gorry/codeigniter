<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

}
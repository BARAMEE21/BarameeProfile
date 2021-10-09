<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class baremee extends CI_Controller {

    public function index()
    {
        $this->load->view('css');
        $this->load->view('baramee_view');
        $this->load->view('js');
    }
}
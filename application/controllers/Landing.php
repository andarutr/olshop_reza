<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller 
{
    public function index()
    {
        return $this->load->view('landing_page/index');
    }
}
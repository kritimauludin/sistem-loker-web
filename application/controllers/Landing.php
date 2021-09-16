<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Landing Page';

        $this->load->view('templates/landing_header', $data);
        $this->load->view('landing/index.php');
        $this->load->view('templates/landing_footer.php');
    }
}

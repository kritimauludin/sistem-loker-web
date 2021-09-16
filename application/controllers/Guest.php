<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Find Job';
        $this->db->order_by('id', 'desc');
        $data['job'] = $this->db->get('job_provider')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_guest', $data);
        $this->load->view('guest/index', $data);
        $this->load->view('templates/footer');
    }
}

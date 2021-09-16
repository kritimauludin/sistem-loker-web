<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Category';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['category'] = $this->db->get('job_category')->result_array();

        $this->form_validation->set_rules('category', 'Category', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('category/index', $data);
            $this->load->view('templates/footer');
        } else {
            $titleCategory = $this->input->post('category');
            $this->db->insert('job_category', ['category' => $titleCategory]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New category added!</div>');
            redirect('category');
        }
    }

    public function updateCategory()
    {
        $this->form_validation->set_rules('updatecategory', 'updatecategory', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('category/index');
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $updatemenu = $this->input->post('updatecategory');

            $this->db->where('id', $id);
            $this->db->update('job_category', ['category' => $updatemenu]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Category has been edited!</div>');
            redirect('category');
        }
    }
}

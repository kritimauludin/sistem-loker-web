<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Company';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['job'] = $this->db->get_where('job_provider', ['contact' =>
        $this->session->userdata('email')])->result_array();
        $data['category'] = $this->db->get('job_category')->result_array();


        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('company/index', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['img_poster']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/provider';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img_poster')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'title' => $this->input->post('title'),
                'category_id' => $this->input->post('category_id'),
                'img_poster' => $new_image,
                'deskripsi' => $this->input->post('deskripsi'),
                'provider' => $this->input->post('provider'),
                'location' => $this->input->post('location'),
                'salary' => $this->input->post('salary'),
                'contact' => $this->input->post('contact'),
                'date_created' => date('d F Y')
            ];
            $this->db->insert('job_provider', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New vacancies added!</div>');
            redirect('company');
        }
    }
    public function deleteJob($id)
    {
        $data['job_provider'] = $this->db->get('job_provider', ['img_poster'])->row_array();
        $old = $data['job_provider']['img_poster'];
        unlink(FCPATH . 'assets/img/provider/' . $old);
        $this->db->where('id', $id);
        $this->db->delete('job_provider');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Vacancies has been deleted!</div>');
        redirect('company');
    }
}

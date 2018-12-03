<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form extends CI_Controller {
public $id;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model');
        $this->load->helper('url_helper');
    }


    public function index()
    {
        $data['user'] = $this->form_model->get_users();
        $this->load->view('myform', $data);

    }

    public function edit()
    {

        $id = $this->uri->segment(3);
        $data['user_item'] = $this->form_model->get_user_by_id($id);

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('im', 'Имя пользователя', 'required');
        $this->form_validation->set_rules('fam', 'Фамилия', 'required');
        $this->form_validation->set_rules('otch', 'Отчество', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('edit',$data );
        }
        else
        {
           $this->form_model->set_users($id);
           redirect( base_url() . 'admin/form');
        }
    }


    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->form_model->delete_user($id);
        redirect( base_url() . 'admin/form');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('im', 'Имя пользователя', 'required');
        $this->form_validation->set_rules('fam', 'Фамилия', 'required');
        $this->form_validation->set_rules('otch', 'Отчество', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('create');
        }
        else
        {
            $this->form_model->set_users();
            redirect( base_url() . 'admin/form');
        }
    }

}
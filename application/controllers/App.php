<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// load model dan set nama alias nya
		$this->load->model('model_list', 'list');
	}

	public function index()
	{
		$data['list'] 	= $this->list->get_not_completed_list();
		$data['title'] 	= "CI Todo List";
		$this->load->view('template/header', $data);
		$this->load->view('nav/main');
		$this->load->view('main/index', $data);
		$this->load->view('template/footer');
	}

	public function detail($id)
	{
		$data['list'] = $this->list->get_list_per_id($id);
		$data['title'] 	= "List detail";
		$this->load->view('template/header', $data);
		$this->load->view('nav/main');
		$this->load->view('nav/detail-nav', $data);
		$this->load->view('main/detail', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data['require_jquery_ui'] = TRUE;
		$data['title'] 	= "Add new";
		$this->load->view('template/header', $data);
		$this->load->view('nav/main');
		$this->load->view('main/add');
		$this->load->view('template/footer', $data);
	}

	public function add_edit_process()
	{
		if ( empty($this->input->post('id')) )
		{
			$this->form_validation->set_rules('title', 'Title', 'required|trim');
			$this->form_validation->set_rules('desc', 'Description', 'required');
			$this->form_validation->set_rules('due', 'Due Date', 'required|trim');

			if ($this->form_validation->run() == TRUE)
			{
				$data = [
					'title' 		=> $this->input->post('title', TRUE),
					'description' 	=> $this->input->post('desc', TRUE),
					'date_due' 		=> date( 'Y-m-d', strtotime($this->input->post('due', TRUE)) )
				];
				$this->list->add_new($data);
				$this->session->set_flashdata('status', 'Add success!');
				redirect('app');
			}
			else
			{
				$this->add();
			}
		}
		else
		{
			$this->form_validation->set_rules('title', 'Title', 'required|trim');
			$this->form_validation->set_rules('desc', 'Description', 'required');
			$this->form_validation->set_rules('due', 'Due Date', 'required|trim');

			if ($this->form_validation->run() == TRUE)
			{
				$data = [
					'title' 		=> $this->input->post('title', TRUE),
					'description' 	=> $this->input->post('desc', TRUE),
					'date_due' 		=> date( 'Y-m-d', strtotime($this->input->post('due', TRUE)) )
				];
				$this->list->update_list($this->input->post('id'), $data);
				$this->session->set_flashdata('status', 'Edit success!');
				$id = $this->input->post('id');
				redirect("app/detail/$id");
			}
			else
			{
				$this->edit($this->input->post('id'));
			}
		}
	}

	public function mark($id)
	{
		if ($this->list->mark_complete($id))
		{
			$this->session->set_flashdata('status', 'Mark as complete success!');
			redirect("app/detail/{$id}");
		}
	}

	public function edit($id)
	{
		$data['list'] = $this->list->get_list_per_id($id);
		$data['require_jquery_ui'] = TRUE;
		$data['title'] 	= "Edit list";
		$this->load->view('template/header', $data);
		$this->load->view('nav/main');
		$this->load->view('main/edit', $data);
		$this->load->view('template/footer', $data);
	}

	public function completed()
	{
		$data['list'] = $this->list->get_completed_list();
		$data['title'] 	= "Completed List";
		$this->load->view('template/header', $data);
		$this->load->view('nav/main');
		$this->load->view('main/index', $data);
		$this->load->view('template/footer');
	}

	public function all()
	{
		$data['list'] = $this->list->get_all_list();
		$data['title'] 	= "All List";
		$this->load->view('template/header', $data);
		$this->load->view('nav/main');
		$this->load->view('main/index', $data);
		$this->load->view('template/footer');
	}

	public function delete($id)
	{
		if ($this->list->delete_list($id))
		{
			$this->session->set_flashdata('status', 'Delete success!');
			redirect("app/");
		}
	}
}

<?php
  class Blog extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('blog_model');
    }
    function index()
    { 
      $data['title'] = "Crash Course";
      $data['posts'] = $this->blog_model->getPosts();
      $this->load->view('templates/header', $data);
      $this->load->view('blog_view', $data);
      $this->load->view('templates/footer', $data);
    }
    function post($id)
    { 
      $this->load->helper('form');
      $data['title'] = "Crash Course";
      $data['post'] = $this->blog_model->getPost($id);
      $data['comments'] = $this->blog_model->get_comments($id);
      $this->load->view('templates/header', $data);
      $this->load->view('blog_single_view', $data);
      $this->load->view('templates/footer', $data);
    }

    function comment($post_id)
    {
      $this->load->helper('form');
      $this->blog_model->create_comment($post_id);
      $this->post($post_id);
    }

  }
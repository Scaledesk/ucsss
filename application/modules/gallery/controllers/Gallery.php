<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/2/2016
 * Time: 2:39 PM
 */
class Gallery extends MX_Controller
{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->model('Mdl_gallery');
        $this->load->model('admin/Mdl_admin');

    }

   public  function index()
    {
       /* $data['jobs'] = $this->Mdl_admin->getPostJobs();*/
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }

 /* public function album(){
      $data['album']=$this->Mdl_admin->getAblums();
      $this->load->view('header_album');
      $this->load->view('album',$data);
      $this->load->view('footer_album');
  }*/

/*  public function albumPhoto($id){

      $data['photo']=$this->Mdl_admin->getPhoto($id);
      $this->load->view('header_album');
      $this->load->view('album_photo',$data);
      $this->load->view('footer_album');
  }*/
    public function school(){


    $this->load->view('header_album');
    $this->load->view('school');
    $this->load->view('footer_album');
}
    public function event(){
        $this->load->view('header_album');
        $this->load->view('event');
        $this->load->view('footer_album');
    }

    public function aboutUs(){
        $this->load->view('header_album');
        $this->load->view('about_us');
        $this->load->view('footer_album');
    }
    public function news(){
        $this->load->view('header_album');
        $this->load->view('news');
        $this->load->view('footer_album');
    }
    public function contact(){
        $this->load->view('header_album');
        $this->load->view('contact');
        $this->load->view('footer_album');
    }
    // Set array for PAGINATION LIBRARY, and show view data according to page.
    public function album(){
        $config = array();
        $config["base_url"] = base_url() . "gallery/album";
        $total_row = $this->Mdl_gallery->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
        }
        else{
            $page = 0;
        }
       /* $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 3;*/

        $data["results"] = $this->Mdl_gallery->fetch_data($config["per_page"], $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );

// View data according to array.

      /*  $this->load->view("pagination_view", $data);*/
        $this->load->view('header_album');
        $this->load->view('album',$data);
        $this->load->view('footer_album');
    }
   public function albumPhoto($album_id){

      /* $this->Mdl_gallery->setData('album',$album_id);*/
       $this->session->set_userdata('album_id',$album_id);
       redirect(base_url('gallery/albumPhoto1'));
   }

    public function albumPhoto1(){

      /* if($album_id=$this->input->get('album_id'));*/
       /* echo $album_id;

        die;*/


       /* $this->session->set_userdata('album_id',$album_id);*/
        $config = array();
        $config["base_url"] = base_url() . "gallery/albumPhoto1";
        $total_row = $this->Mdl_gallery->record_count_photo();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
        }
        else{
            $page = 0;
        }
       /* echo $total_row; die;*/
        /* $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 3;*/

        $data["results"] = $this->Mdl_gallery->fetch_data_photo($config["per_page"], $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );

      /*  $data['photo']=$this->Mdl_admin->getPhoto($album_id);*/
        $this->load->view('header_album');
        $this->load->view('album_photo',$data);
        $this->load->view('footer_album');
    }
}

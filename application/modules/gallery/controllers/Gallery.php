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

  public function album(){
      $data['album']=$this->Mdl_admin->getAblums();
      $this->load->view('header_album');
      $this->load->view('album',$data);
      $this->load->view('footer_album');
  }

  public function albumPhoto($id){

      $data['photo']=$this->Mdl_admin->getPhoto($id);
      $this->load->view('header_album');
      $this->load->view('album_photo',$data);
      $this->load->view('footer_album');
  }
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
}
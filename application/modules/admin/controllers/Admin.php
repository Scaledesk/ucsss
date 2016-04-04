<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 5:07 PM
 */
class Admin extends MX_Controller
{


    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
        $this->load->model('Mdl_admin');

    }

    /**
     *
     */
    function index(){
        if (islogin()) {
            $data['active'] = 0;
            $this->load->view('header', $data);
            $this->load->view('index');
            $this->load->view('footer');
            }
        elseif(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

                  $data=$this->input->post();
               /*print_r($data);die;*/
            $this->Mdl_admin->setData('checkUser',$data['email_id'],$data['password']);
            $data_admin=$this->Mdl_admin->checkUser();
           /* print_r($data_admin);die;*/
            if($data_admin){

                $data=['name'=>$this->Mdl_admin->getName(),'email'=> $this->Mdl_admin->getEmail()
                  ];
                $this->session->set_userdata('user_data',$data);
                $this->session->set_userdata('login_first',1);
                setInformUser('success','Login successfully');
                redirect(base_url('admin'));
            }
            else{
                setInformUser('error','Your Username and password do not match. Please try again.');
                redirect(base_url('admin'));
            }

        }
        else{
            $data['active'] = 0;
            $this->load->view('login_header',$data);
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin?logout=1'));
    }
   public function album()
   {
       if (islogin()) {
           if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {



               $data = $this->input->post();

               $ci = CI::get_instance();
               /*
                 echo $data['upload']; die();*/

               /*  $this->load->view('profile_quote',$data);*/


               $config ['upload_path'] = 'uploads/';
               $config ['allowed_types'] = 'jpg|jpeg|png';
               $config['max_size'] = 2000;
               $config ['encrypt_name'] = TRUE;

               $this->upload->initialize($config);

               if ($_FILES['filename']['name']) {

                   if (!$this->upload->do_upload('filename')) {

                       $error = array('error' => $ci->upload->display_errors());
                       setInformUser('error', $error['error'] . ' please import  file formate only');
                       redirect(base_url('admin/album'));


                   } else {

                       $path = set_realpath('uploads');
                       $file = $this->upload->data();
                       /* echo $file['file_name'];die;*/

                       $this->Mdl_admin->setData('album', $data['name'], $data['description'], $file['file_name']);
                       if ($this->Mdl_admin->create()) {
                           setInformUser('success', ' Successfully Create Album.');
                           redirect(base_url('admin/album'));
                       } else {
                           setInformUser('error', 'Some Error occurred. Please try again.');
                           redirect(base_url('admin/album'));
                       }

                   }

               } else {
                   /* echo "sdfddfs"; die;*/
                   setInformUser('error', 'Some Error occurred. Please try again.');
                   redirect(base_url('admin/album'));
               }
/*
               $this->Mdl_admin->setData('jobs', $data['title'], $data['description'], $data['location'], $data['jobType'], $data['education'], $data['experience']);
               if ($this->Mdl_admin->jobs()) {
                   setInformUser('success', 'Job Post Successfully.');
                   redirect(base_url('admin'));
               } else {
                   setInformUser('error', 'Some Error occurred. Please try again.');
                   redirect(base_url('admin'));
               }*/



           } else {
               $data['active'] = 3;
             /* $data['album']=$this->Mdl_admin->getAblums();*/
               $this->load->view('header', $data);
               $this->load->view('albumCreate');
               $this->load->view('footer');
           }
       } else{
           setInformUser('error', 'Please login at first . Please try again.');
           redirect(base_url('admin'));
       }
   }


    public function showAlbum(){
        $data['active'] = 2;
        $data['album']=$this->Mdl_admin->getAblums();
        $this->load->view('header', $data);
        $this->load->view('table',$data);
        $this->load->view('footer');

    }

   public function addPhoto($id){
       if (islogin()) {
           if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
                $files = $_FILES;
               $data = $this->input->post();


               $filesn=$_FILES ['photoname'] ['name'];

               $filesn=array_filter($filesn,'strlen');

               $cpt = count ( $_FILES ['photoname'] ['name'] );


               $ci=CI::get_instance();

               $name_array = array();
               $name_display = array();



                   for($i = 0; $i < $cpt; $i ++) {

                       $_FILES['photoname']['name']= $files['photoname']['name'][$i];
                       $_FILES['photoname']['type']= $files['photoname']['type'][$i];
                       $_FILES['photoname']['tmp_name']= $files['photoname']['tmp_name'][$i];
                       $_FILES['photoname']['error']= $files['photoname']['error'][$i];
                       $_FILES['photoname']['size']= $files['photoname']['size'][$i];

                       $this->upload->initialize($this->set_upload_options());

                       if(!$this->upload->do_upload ('photoname'))
                       {

                           $data = $this->upload->data();

                           /*cho  $name_array[] = $data['file_name'];
                    die;*/

                           $error = array('error' => $ci->upload->display_errors());
                           setInformUser('error', $error['error'].' please uploads  file formate only');


                           redirect(base_url('admin'));
                       }

                       $data = $this->upload->data();
                       $name_array[] = $data['file_name'];

                       /*print_r($name_array);die;*/
                   }


                   if($this->Mdl_admin->addPhoto($id, $name_array)){
                       /*echo "string";
                               print_r($name_array);die;*/
                       setInformUser('success', 'Successfully Added Photo in album.');
                       redirect(base_url('admin'));

                   }
                   else {

                       setInformUser('error', 'Some Error occurred. Please try again.');

                       redirect(base_url('admin'));
                   }

               }

              else {
               $data['active'] = 3;
               $data['id']=$id;
               $this->load->view('header', $data);
               $this->load->view('addPhoto',$data);
               $this->load->view('footer');
           }
       } else{
           setInformUser('error', 'Please login at first . Please try again.');
           redirect(base_url('admin'));
       }

   }

private function set_upload_options() {
    // upload an image options
    $config = array ();
    $config ['upload_path'] = 'uploads/';
    $config ['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size']      = 2000;
    $config ['encrypt_name'] = TRUE;

    return $config;
}


    public  function getJobPost(){

        $data['jobs']=$this->Mdl_admin->getPostJobs();
        $data['active'] = 3;
        $this->load->view('header', $data);
        $this->load->view('table',$data);
        $this->load->view('footer');
    }


  public function  update($id){
      if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
          $data = $this->input->post();
         /*  print_r($data);die;*/

          $ci = CI::get_instance();
          /*
            echo $data['upload']; die();*/

          /*  $this->load->view('profile_quote',$data);*/


          $config ['upload_path'] = 'uploads/';
          $config ['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size'] = 2000;
          $config ['encrypt_name'] = TRUE;

          $this->upload->initialize($config);

          if ($_FILES['filename']['name']) {

              if (!$this->upload->do_upload('filename')) {

                  $error = array('error' => $ci->upload->display_errors());
                  setInformUser('error', $error['error'] . ' please import  file formate only');
                  redirect(base_url('admin/album'));


              } else {

                  $path = set_realpath('uploads');
                  $file = $this->upload->data();
                   /* echo $file['file_name'];die;*/

                  $this->Mdl_admin->setData('album', $data['name'], $data['description'], $file['file_name']);
                  if ($this->Mdl_admin->update($id)) {
                      setInformUser('success', ' Successfully Update.');
                      redirect(base_url('admin/album'));
                  } else {
                      setInformUser('error', 'Some Error occurred. Please try again.');
                      redirect(base_url('admin/album'));
                  }

              }

          } else {
             /* echo "sdfddfs"; die;*/
              setInformUser('error', 'Some Error occurred. Please try again.');
              redirect(base_url('admin/album'));
          }




      } else {
          $data['active'] = 0;
          $data['ablum']=$this->Mdl_admin->getAblum($id);
          $this->load->view('header', $data);
          $this->load->view('update',$data);
          $this->load->view('footer');
      }




  }
    public function  delete($id){
        if( $this->Mdl_admin->delete($id)){
            setInformUser('success', ' Album successfully Delete.');
            redirect(base_url('admin/album'));
        }
        else{
            setInformUser('error', 'Some Error occurred. Please try again.');
            redirect(base_url('admin/album'));
        }
    }

    public function jobDetails($id){
        $data['active'] = 0;
        $data['post']=$this->Mdl_admin->getPostJob($id);
        $this->load->view('header', $data);
        $this->load->view('jobDetails',$data);
        $this->load->view('footer');
    }

    public function albumPhoto($id){
        $data['active'] = 0;
        $data['album_id']=$id;
        $data['photo']=$this->Mdl_admin->getPhoto($id);
        $this->load->view('header', $data);
        $this->load->view('showPhoto',$data);
        $this->load->view('footer');
    }

    public function deletePhoto($id,$albumId){
        if( $this->Mdl_admin->deletePhoto($id)){
           /* setInformUser('success', '  Successfully Delete Photo.');*/
            $this->albumPhoto($albumId);
            /*redirect(base_url('admin'));*/
        }
        else{
            setInformUser('error', 'Some Error occurred. Please try again.');
            redirect(base_url('admin'));
        }
    }

    public function password(){

        if (islogin()) {

            if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
                $data=$this->input->post();
                /*print_r($data);
                      die;*/
                $this->Mdl_admin->setData('password',$data['old_pass'],$data['new_pass']);

                if ($this->Mdl_admin->password()) {
                    setInformUser('success','your password has been successfully updated.');
                    $this->session->sess_destroy();
                    redirect(base_url('admin'));
                }else{
                    setInformUser('error','password does not match old password');
                    redirect(base_url('admin/password'));
                }




            }
            else{  $data['active']=4;
                $this->load->view('header',$data);
                $this->load->view('password');
                $this->load->view('footer');
            }
        }
        else{

            redirect(base_url('admin'));
        }
    }
}
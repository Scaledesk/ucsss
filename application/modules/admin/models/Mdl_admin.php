<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 5:08 PM
 */
class Mdl_admin extends CI_model
{
  private $email;
  private $password;
  private $name;
  private $title;
  private $description;
  private $location;
  private $jobType;
  private $education;
  private $experience;
  private $fileName;
    private $newPassword;

    /**
     * @return mixed
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param mixed $newPassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }


    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * @param mixed $jobType
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
    }

    /**
     * @return mixed
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param mixed $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }





    public function setData()
        {
            switch (func_get_arg(0)) {

                case "checkUser": {
                    /* print_r(func_get_arg(1));die;*/
                    $this->setEmail(func_get_arg(1));
                    $this->setPassword(func_get_arg(2));
                    break;
                   }
                case "album":{
                    /* print_r(func_get_arg(1));die;*/
                    $this->setName(func_get_arg(1));
                    $this->setDescription(func_get_arg(2));
                    $this->setFileName(func_get_arg(3));
                    break;
                 }
                case "password":{
                    /* print_r(func_get_arg(1));die;*/
                    $this->setPassword(func_get_arg(1));
                    $this->setNewPassword(func_get_arg(2));

                    break;
                }
                default:
                    break;
            }
        }

    public function checkUser()
    {
        if ($data = $this->db->where(array('ucsss_admin_email' => $this->email))->select('ucsss_admin_pass,ucsss_admin_name')->get('ucsss_admin')->result_array()) {
            /* print_r($data);die;*/
              $this->setName($data[0]['ucsss_admin_name']);
            if (password_verify($this->password, $data[0]['ucsss_admin_pass'])){
                /*print_r($data);die;*/
                return true;

            }
            return false;
        }
    }

public function create(){
    $data=[
        'album_name'=>$this->name,
        'album_photo'=>$this->fileName,
        'album_description'=>$this->description,

    ];

    if($this->db->insert('ucsss_admin_album',$data)){
        return true;
    }else{
        return false;
    }
   /* print_r($data);die;*/
}
  public  function getAblums(){

      return $this->db->get('ucsss_admin_album')->result_array();
  }

    public  function update($id){
        $data=[
            'album_name'=>$this->name,
            'album_photo'=>$this->fileName,
            'album_description'=>$this->description,

        ];

        return $this->db->where('album_id',$id)->update('ucsss_admin_album',$data);
    }


    public  function delete($id){

        return $this->db->where('album_id',$id)->delete('ucsss_admin_album');
    }

    public function getAblum($id){
        return $this->db->where('album_id',$id)->get('ucsss_admin_album')->result_array();
    }


/*gallery_description gallery_photo gallery_photo_name 	album_id*/

    public function addPhoto($album_id,$file_name=array()){
       /* print_r($file_name);die;*/


        foreach ($file_name as $row) {

            $data=['album_id' =>$album_id,

                'gallery_photo' => $row

            ];
            $a=$this->db->insert('ucsss_admin_gallery_photo',$data);
        }
        if($this->db->affected_rows()){
            return true;
        }
        else{
            return false;
        }

    }

    public function getPhoto($id){

        return $this->db->where('album_id',$id)->get('ucsss_admin_gallery_photo')->result_array();

    }

    public function deletePhoto($id){
        return $this->db->where('gallery_photo_id',$id)->delete('ucsss_admin_gallery_photo');
    }

    public function password(){
        $data = $this->db->where(array('ucsss_admin_email' =>$this->session->userdata['user_data']['email']))->select('ucsss_admin_pass')->get('ucsss_admin')->result_array();
/*echo $this->db->last_query();
print_r($data);die;*/
        if($data) {
            /*echo $this->newPassword;
            print_r($data);die;*/
            if (password_verify($this->password, $data[0]['ucsss_admin_pass'])){
                $this->setNewPassword(password_hash($this->newPassword, PASSWORD_DEFAULT));

                $data1=['ucsss_admin_pass'=>$this->getNewPassword()] ;

             /* print_r($data1);
                echo $this->password;
                echo $data[0]['ucsss_admin_pass'];
                die;*/
                $data=$this->db->where('ucsss_admin_pass',$data[0]['ucsss_admin_pass'])->update('ucsss_admin',$data1);
               /* print_r($data);die;*/
                if ($data) {
                   /* print_r($data);die;*/
                    return true;
                }else{
                    return false;
                }


            }else {return false;}

        }else { return false;}

    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/2/2016
 * Time: 2:41 PM
 */
class Mdl_gallery extends CI_model
{
  private $album_id;

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * @param mixed $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;
    }


    public function setData()
    {
        switch (func_get_arg(0)) {

            case "album": {
                /* print_r(func_get_arg(1));die;*/
                $this->setAlbumId(func_get_arg(1));

                break;
              }
            default:
                break;
        }
    }
    public function getAblums($start, $limit)
    {
        {
            $sql = 'select album_name, album_photo, album_description from ucsss_admin_album  order by album_id limit ' . $start . ', ' . $limit;
            $query = $this->db->query($sql);
            return $query->result();


            /* $data=$this->db->get('ucsss_admin_album')->result_array();
            echo $data->num_rows(); die;*/

            /* $this->db->where('USERID',1);*/
            /* $this->db->from('ucsss_admin_album');
            return $this->db->count_all_results();*/
            /* return $data;*/


        }
    }


    // Count all record of table "contact_info" in database.
    public function record_count() {
        return $this->db->count_all("ucsss_admin_album");
    }

// Fetch data according to per_page limit.
    public function fetch_data($limit, $id) {
       /* echo $limit;
        echo "<br>".$id;die;*/
        $query_id = $this->db->select('album_id')->get("ucsss_admin_album")->result_array();
//        echo "<pre/>";
        $new_array=array();
        foreach($query_id as $val){
            array_push($new_array,$val['album_id']);
        }
        $query_id=$new_array;
        unset($new_array);
//        print_r($query_id);/*$result = serialize( $query_id);*/
        $sliced_array=array_chunk($query_id,$limit);
        if($id>0){
            $i=$id-1;
        }else{
            $i=0;
        }

       // print_r(implode(',',$sliced_array[$i]));

       $this->db->limit($limit);
       $this->db->where_in('album_id',$sliced_array[$i]);
        $query = $this->db->get("ucsss_admin_album");


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
             /* print_r($data);*/
            return $data;
        }
        return false;



    }
    public function record_count_photo(){
        $album_id= $this->session->userdata['album_id'];
        $this->db->where('album_id',$album_id);
        $data=$this->db->select('gallery_photo_id')->get("ucsss_admin_gallery_photo");
       /* return $this->db->count_all("ucsss_admin_gallery_photo");*/
       $count= $data->num_rows();
      /* echo $count;die;*/
        return $count;
    }

// Fetch data according to per_page limit.
    public function fetch_data_photo($limit, $id) {

        $album_id= $this->session->userdata['album_id'];
        /* echo $limit;
         echo "<br>".$id;

        die;*/
        $query_id = $this->db->where('album_id',$album_id)->select('gallery_photo_id')->get("ucsss_admin_gallery_photo")->result_array();
      /* echo "<pre/>";
        print_r($query_id);die;*/
        $new_array=array();
        foreach($query_id as $val){
            array_push($new_array,$val['gallery_photo_id']);
        }
        $query_id=$new_array;
        unset($new_array);
//        print_r($query_id);/*$result = serialize( $query_id);*/
        $sliced_array=array_chunk($query_id,$limit);



        if($id>0){
            $i=$id-1;
        }else{
            $i=0;
        }

        // print_r(implode(',',$sliced_array[$i]));
        if(!isset($sliced_array[$i]))
            return [];
        $this->db->limit($limit);
        $this->db->where_in('gallery_photo_id',$sliced_array[$i]);
        $query = $this->db->get("ucsss_admin_gallery_photo");


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
               /* return $data;*/
            }
            /* print_r($data);die;*/
             return $data;
        }
        return false;



    }
}
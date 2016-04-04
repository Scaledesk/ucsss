<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/2/2016
 * Time: 2:41 PM
 */
class Mdl_gallery extends CI_model
{
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
}
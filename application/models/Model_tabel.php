<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tabel extends CI_Model {

    function get_datatables($type=null,$sort=null,$order=null,$search=null)
    {
        $this->_get_datatables_query($type,$sort,$order,$search);
        if($type != 'laporan_pasien'){
            if($_GET['length'] != -1){
                $this->db->limit($_GET['length'], $_GET['start']);
            }
        }

        $query = $this->db->get();
        return $query->result();
    }


    private function _get_datatables_query($type=null,$sort=null,$order=null,$search=null)
    {         
        switch ($type) {

            case 'user':
            $this->db->select('a.*,b.*');
            $this->db->from('tbl_master_user a');
            $this->db->join('tbl_master_agama b','b.id_agama=a.agama_user','left');
            $this->db->where('a.level_user','admin');
            if($_GET['order'][0]['column'] == 0)
            {
                $this->db->order_by('a.nama_user',$order);
            }else{
                $this->db->order_by($sort,$order);
            }
            if ($search!=null && $search!='') {
                $this->db->like('a.nama_user',$search);
                $this->db->or_like('a.email_user',$search);
                $this->db->or_like('a.username',$search);
                $this->db->or_like('a.level_user',$search);
            }
            
            break;

            default:

            break;
        }
    }

    function count_filtered($type=null,$sort=null,$order=null,$search=null)
    {

        $this->_get_datatables_query($type,$sort,$order,$search);
        return $this->db->get()->num_rows();
        // return $query->num_rows();


    }



    public function count_all($type=null,$sort=null,$order=null,$search=null)
    {
        $this->_get_datatables_query($type,$sort,$order,$search);
        return $this->db->get()->num_rows();
        // $results = $db_results->result();
        // $num_rows = $db_results->num_rows();
        // return $num_rows;
    }

}

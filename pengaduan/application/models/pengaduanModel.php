<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaduanModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function all(){
        return $this->db->get('pengaduan');
    }

    public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('pengaduan');
    }


    public function insert($data)
    {
        $this->db->insert('pengaduan',$data);
    }

    public function update($data,$where)
    {
        $this->db->where($where);
    return $this->db->update('pengaduan',$data);   
    }

    public function delete($where)
    {
        return $this->db->delete('pengaduan',$where);
    }
}
?>
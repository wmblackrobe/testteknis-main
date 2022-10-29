<?php 
date_default_timezone_set("Asia/Jakarta");
class M_data extends CI_Model{	

	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	// LOGIN //

	public function getWhere($where)
    {
        $this->db->where($where);
        return $this->db->get('user');
    }

	
	Public function cekuser($username)
	{
		return $this->db->query("select username from user where username=? ",[$username])->row_array();
	}


}
?>
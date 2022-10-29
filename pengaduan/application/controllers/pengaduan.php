<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
        $this->load->helper('url');
        $this->load->library('session');
        $_SESSION['judul'] = 'Pengaduan';
        $this->load->model('pengaduanModel');
       
        if($this->session->userdata('status') != "login"){
            $this->session->sess_destroy();
			redirect('login');
		}		
    }

    public function index(){
     $data['pengaduan']= $this->pengaduanModel->all();

     $this->template('pengaduan/list',$data);
    }

public function template($content,$data=null){
    $data['judul']= $_SESSION['judul'];
    $data['nama']= $_SESSION['nama'];
    $data['content']= $this->load->view($content,$data,true);
    $this->load->view('admin/template/main',$data);
   }

   
  

   public function form(){
   

    if($this->input->post('simpan'))
    {
       
        $array = array(
            'nama'=>$this->input->post('nama'),
            'judul_pengaduan'=>$this->input->post('judul_pengaduan'),
            'deskripsi_pengaduan'=>$this->input->post('deskripsi_pengaduan'),
            'tanggal_pengaduan'=>$this->input->post('tanggal_pengaduan'),
           
        );
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        if($this->input->post('id_pengaduan')== '')
        {
            
            if($this->pengaduanModel->insert($array))
            {
                redirect('pengaduan');
            }
            else{
                $this->session->set_flashdata('gagal', '');
                redirect('pengaduan');
            }
        }
        else{
           
            if($this->pengaduanModel->update($array, array('id_pengaduan'=>$this->input->post('id_pengaduan'))))
            {
                $this->session->set_flashdata('update', '');
              
                redirect('pengaduan');
            }
            else{
                $this->session->set_flashdata('gagal', '');
                redirect('pengaduan');
            }  
        }
    }
    $data['satu']= $this->pengaduanModel->getWhere(array('id_pengaduan'=>$this->uri->segment(3)))->row_array();
    if ($data['satu'] != null)
    {
        $data['judulform']= 'Edit Pengaduan';
        $data['tombol']= 'update';
    }

    // $data['alert'] = $this->alert;
    $this->template('pengaduan/form',$data);
}

  
   public function hapus(){
    
    if($this->uri->segment(3)) $this->pengaduanModel->delete(array('id_pengaduan'=>$this->uri->segment(3)));

    redirect('pengaduan');
}

}
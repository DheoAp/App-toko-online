<?php
  class Admin extends CI_Controller{

   public function __construct()
   {
     parent::__construct();
     $this->load->library('form_validation');
   }
   public function index()
    {
    $data['judul'] = 'Halaman Admin';
    $data['barang'] = $this->Model_barang->tampil_data();
    $this->load->view('templates/admin_header',$data);
    $this->load->view('admin/dashboard');
    $this->load->view('templates/footer');
    }

    public function tambah()
    {
      $data['judul'] = 'Tambah Data';
      $data['barang'] = $this->Model_barang->tampil_data();
      
      $this->form_validation->set_rules('nama_brg', 'Nama barang', 'required');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('harga', 'Harga barang', 'required|numeric');
      $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
      
      

      if($this->form_validation->run() == FALSE){
          $this->load->view('templates/admin_header',$data);
          $this->load->view('admin/tambah');
          $this->load->view('templates/footer');
      }else{
        $this->Model_barang->tambahDataBarang();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('admin');
      }
    }
    
    public function hapus($id)
    {
      $this->Model_barang->hapusBarang($id);
      $this->session->set_flashdata('flash_hapus','Dihapus');
      redirect('admin');
    }
    
    public function update($id)
    {
      $data['judul'] = 'Ubah Data';
      $data['barang'] = $this->Model_barang->getAllDataById($id);

      $this->form_validation->set_rules('nama_brg', 'Nama barang', 'required');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('harga', 'Harga barang', 'required|numeric');
      $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
      $this->form_validation->set_rules('gambar', 'Gambar', 'required');

      if($this->form_validation->run() == FALSE){
          $this->load->view('templates/admin_header',$data);
          $this->load->view('admin/ubah');
          $this->load->view('templates/footer');
      }else{
        $this->Model_barang->ubah_data();
        $this->session->set_flashdata('flash_ubah','Diubah');
        redirect('admin');
      }
    }

    public function invoice()
     {
       $data['judul'] = 'Invoice';
       $data['invoice'] = $this->Model_invoice->tampil_data();
       $this->load->view('templates/admin_header',$data);
       $this->load->view('admin/invoice',$data);
       $this->load->view('templates/footer');
     }


  }// akhir class
  
    
   
?>


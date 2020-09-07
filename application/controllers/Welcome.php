<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Selamat Datang';
		$data['barang'] = $this->Model_barang->tampil_data();
		$this->load->view('templates/header',$data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function tambah_keranjang($id)
	{
		$barang = $this->Model_barang->find($id);
		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
		);

		$this->cart->insert($data);	
		redirect('welcome');
	}

	public function keranjang()
	{
		$data['judul'] = 'Belanjaan Anda';
		$this->load->view('templates/header',$data);
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome');
	}

	public function bayar()
	{
		$data['judul'] = 'Pembayaran';
		$this->load->view('templates/header',$data);
		$this->load->view('bayar');
		$this->load->view('templates/footer');
	}

	public function proses_pembayaran()
	{	
		$is_proses = $this->Model_invoice->index();
		if($is_proses){
			$this->cart->destroy();
			$data['judul'] = 'Proses Pembayaran';
			$this->load->view('templates/header',$data);
			$this->load->view('proses_pembayaran');
			$this->load->view('templates/footer');
		}else{
			echo "Maaf pesanan anda gagal kami proses";
		}
	}
		
}


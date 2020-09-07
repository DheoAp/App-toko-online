<div class="container" style="height: 800px;">
  <div class="row">
    <div class="col-md-2"></div> 
    <div class="col-md-8">
      <div class="btn btn-danger">
        <?php
          $grand_total = 0;
          if($keranjang = $this->cart->contents()){
            foreach ($keranjang as $item) {
              $grand_total = $grand_total + $item['subtotal'];
            }
          echo "<i class='fa fa-coins'></i> Total belanja anda: Rp. ".number_format($grand_total,0,',','.');
          
        ?>        
      </div>
      <br>
      <hr>
      <h4>Input Alamat Anda</h4>
      <form action="<?= base_url().'welcome/proses_pembayaran';?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">Nama Lengkap Anda</label>
          <input class="form-control" type="text" name="nama" id="nama">
        </div>
      
        <div class="form-group">
          <label for="alamat">Alamat Lengkap</label>
          <input  class="form-control" type="text" name="alamat" id="alamat">
        </div>
        
        <div class="form-group">
          <label for="no_tlp">No. Telepon</label>
          <input  class="form-control" type="number" name="no_tlp" id="no_tlp">
        </div>
        
        <div class="form-group">
          <label for="jasa">Jasa Pengiriman</label>
          <select class="form-control">
            <option >Pilih</option>
            <option value="">JNE</option>
            <option value="">J&T</option>
            <option value="">NINJA</option>
          </select>
        </div>

        <div class="form-group">
          <label>Pilih Bank</label>
          <select class="form-control">
            <option>Pilih</option>
            <option value="">BCA - 334234</option>
            <option value="">BRI - 44522</option>
            <option value="">BTN - 02123</option>
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Bayar</button>
      </form>
      <?php
        }else{
          echo "<h4 class='text-center'><i class='fa fa-times-circle'></i> Keranjang belanja anda masih kosong</h4>";        
        }
      ?>
    </div> 
    <div class="col-md-2"></div> 
  </div>
</div>
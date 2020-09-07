<div class="container" style="height: 600px;">
  <div class="mb-5 text-center">
    <h2>Tambah Barang</h2>
    <hr>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="form-group">
            <label for="nama_brg">Nama Barang</label>
            <input class="form-control" type="text" name="nama_brg" id="nama_brg">
            <small class="form-text text-danger"><?= form_error('nama_brg');?></small>
        </div>

        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input  class="form-control" type="text" name="keterangan" id="keterangan">
          <small class="form-text text-danger"><?= form_error('keterangan');?></small>
        </div>
        
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input  class="form-control" type="text" name="kategori" id="kategori">
          <small class="form-text text-danger"><?= form_error('kategori');?></small>
        </div>
      </div>
      
      <div class="col-4">
        <div class="form-group">
          <label for="harga">Harga Barang</label>
          <input  class="form-control" type="text" name="harga" id="harga">
          <small class="form-text text-danger"><?= form_error('harga');?></small>
        </div>

        <div class="form-group">
          <label for="stok">Stok Barang</label>
          <input  class="form-control" type="text" name="stok" id="stok">
          <small class="form-text text-danger"><?= form_error('stok');?></small>
        </div>
        
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="file" name="gambar" id="gambar">
        </div>
        
        <button type="submit" class="btn btn-primary mr-4">Kirim</button>
        <a class="btn btn-danger" rel="stylesheet" onclick="return confirm('yakin kembali?')" href="<?= base_url();?>admin">Kembali</a>
      </div>    
    </div>
  </form>
</div>
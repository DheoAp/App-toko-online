<div class="container" style="height: 600px;">
  <div class="mb-5 text-center">
    <h2>Tambah Barang</h2>
    <hr>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <input type="hidden" name="id_brg" value="<?= $barang['id_brg'];?>">
      <div class="col-4">
        <div class="form-group">
            <label for="nama_brg">Nama Barang</label>
            <input value="<?= $barang['nama_brg'];?>" class="form-control" type="text" name="nama_brg" id="nama_brg">
        </div>

        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input value="<?= $barang['keterangan'];?>"  class="form-control" type="text" name="keterangan" id="keterangan">
        </div>
        
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input value="<?= $barang['kategori'];?>" class="form-control" type="text" name="kategori" id="kategori">
        </div>
      </div>
      
      <div class="col-4">
        <div class="form-group">
          <label for="harga">Harga Barang</label>
          <input value="<?= $barang['harga'];?>" class="form-control" type="text" name="harga" id="harga">
        </div>

        <div class="form-group">
          <label for="stok">Stok Barang</label>
          <input value="<?= $barang['stok'];?>" class="form-control" type="text" name="stok" id="stok">
        </div>
        
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input value="<?= $barang['gambar'];?>" class="form-control" type="text" name="gambar" id="gambar">
        </div>
        
        <button type="submit" class="btn btn-primary mr-4" onclick="return confirm('Yakin mau ubah data?')">Ubah</button>
        <a class="btn btn-danger" rel="stylesheet" onclick="return confirm('Yakin mau kembali?')" href="<?= base_url();?>admin">Kembali</a>
      </div>    
    </div>
  </form>
</div>
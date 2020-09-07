<div class="container" style="height: 800px;">
  <div class="contaier-fluid mb-5 text-center">
    <h2>Selamat Datang Admin</h2>
  </div>
  <a href="<?= base_url()?>admin/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Barang</a>
  <?php if($this->session->flashdata('flash')): ?>
    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
      Data Barang <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($this->session->flashdata('flash_hapus')): ?>
    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
      Data Barang <strong>Berhasil</strong> <?= $this->session->flashdata('flash_hapus');?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php elseif($this->session->flashdata('flash_ubah')): ?>
      <div class="mt-3 alert alert-info alert-dismissible fade show" role="alert">
        Data Barang <strong>Berhasil</strong> <?= $this->session->flashdata('flash_ubah');?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <?php endif; ?>
  <hr>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama Barang</th>
        <th>Keterangan</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th class="text-center" colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      foreach( $barang  as $b ): ?>
          <tr>
            <td><?= $no++;?></td>
            <td><?= $b['nama_brg'];?></td>
            <td><?= $b['keterangan'];?></td>
            <td><?= $b['kategori'];?></td>
            <td><?= $b['stok'];?></td>
            <td><?= $b['harga'];?></td>
            <td class="text-center">
              <a class="btn btn-danger" onClick="return confirm('Hapus Barang?')" title="hapus data" rel="stylesheet" href="<?= base_url();?>admin/hapus/<?= $b['id_brg']?>"><i class="fa fa-trash-alt"></i></a>
              <a class="btn btn-success" title="edit data" rel="stylesheet" href="<?= base_url();?>admin/update/<?= $b['id_brg']?>"><i class="fa fa-edit"></i></a>
            </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


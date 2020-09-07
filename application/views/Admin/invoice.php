<div class="container" style="height: 800px;">
  <div class="contaier-fluid mb-5 text-center">
    <h2>Selamat Datang Admin</h2>
  </div>
  
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Id Invoice</th>
        <th>Nama Pemesan</th>
        <th>Alamat Pengirim</th>
        <th>Tanggal Pemesanan</th>
        <th>Batas Pembayaran</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach( $invoice  as $i ): ?>
          <tr>
            <td><?= $i['id_invoice'];?></td>
            <td><?= $i['nama'];?></td>
            <td><?= $i['alamat'];?></td>
            <td><?= $i['tgl_pesan'];?></td>
            <td><?= $i['batas_bayar'];?></td>
            <td><button class="btn btn-primary">Detail</button></td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>



</div>
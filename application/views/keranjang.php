<div class="container" style="height: 800px;">
    <div class="contaier-fluid mb-5 text-center">
      <h2>Keranjang Belanja Anda</h2>
      <hr>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th class="text-center">Jumlah</th>
          <th>Harga</th>
          <th>Sub-Total</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $no = 1;
      foreach( $this->cart->contents() as $items ): ?>
          <tr>
            <td><?= $no++;?></td>
            <td><?=$items['name'];?></td>
            <td class="text-center"><?=$items['qty'];?></td>
            <td>Rp. <?= number_format($items['price'],0,',','.');?></td>
            <td>Rp. <?= number_format($items['subtotal'],0,',','.');?></td>
          </tr>
      <?php endforeach; ?>
          <tr>
            <td colspan="4" style="text-align: left;">Total Belanja</td>
            <td>Rp. <?= number_format($this->cart->total(),0,',','.');?></td>
          </tr>
    </tbody>
    </table>
    <div class="float-right">
      <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url().'welcome/hapus_keranjang'?>" class="btn btn-danger mr-3"><i class="fa fa-trash"></i> Hapus keranjang</a>
      <a href="<?= base_url()?>" class="btn btn-primary mr-3"><i class="fa fa-shopping-cart"></i> Belanja lagi</a>
      <a href="<?= base_url().'welcome/bayar'?>" class="btn btn-info"><i class="fa fa-cash-register"></i> Bayar</a>
    </div>
  
</div>
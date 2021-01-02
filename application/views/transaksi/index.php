<div class="container" style="height: 40rem">
  <h1 class="mt-5 font-weight-bold">Riwayat Transaksi</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID Transaksi</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Jumlah Beli</th>
        <th scope="col">Total Bayar</th>
      </tr>
    </thead>
    <tbody>
    <?php
    setlocale(LC_MONETARY, "id_ID");
    foreach ($transaksi as $t) { ?>
        <tr>
          <th scope="row"><?= $t['id_transaksi']; ?></th>
          <td><?= $t['nama_produk']; ?></td>
          <td><?= $t['jumlah_beli'] ?></td>
          <td><?= money_format("%i",$t['total_bayar']); ?></td>
        </tr>
    <?php } ?>
  </tbody>
  </table>
</div>

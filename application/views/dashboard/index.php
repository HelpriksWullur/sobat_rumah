<!-- awal konten -->

<!-- awal background  -->
<div class="">
  <div class="card">
    <div class="card-body-img" style="height: 30em">
      <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="" style="height: 30em; width: 100%">
    </div>
  </div>
<!-- akhir background -->

<!-- awal katalog -->
<div class="container pt-3">
  <h3>Produk Kami</h3>
  <div class="row">
    <?php
    setlocale(LC_MONETARY, "id_ID");
    foreach ($katalog as $k) { ?>
      <div class="mb-3" style="margin-right: 3rem">
        <form class="" action="<?= base_url('Account/detail'); ?>" method="post">
        <div class="row border rounded" style="width: 15rem; height: 20rem">
          <img class="w-100 h-50 rounded" src="<?= $k['gambar']; ?>" alt="<?= $k['nama_produk']; ?>">
          <div class="w-100 h-100 p-1 pr-2 pl-2">
            <h6 class="text-dark font-weight-bold"><?= $k['nama_produk']; ?></h6>
            <h4 class="text-dark font-weight-bold"><?= money_format("%i",$k['harga_produk']); ?></h4>
            <p class="text-success"><?= $k['stok']; ?></p>
            <input type="hidden" name="produk" value="<?= $k['id_produk']; ?>">
            <button type="button" class="btn btn-primary w-100 font-weight-bold" name="button" data-toggle="modal" data-target="#produk<?= $k['id_produk']; ?>">Detail</button>
          </form>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Popup Pembelian -->
  <?php
  foreach ($katalog as $k) { ?>
    <div class="modal fade" id="produk<?= $k['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?= $k['nama_produk']; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex flex-column justify-content-center align-items-center">
            <form class="" action="<?= base_url('Account/beli'); ?>" method="post">
            <div class="mb-3" style="width: 15rem; height: 15rem">
              <img class="w-100 h-100" src="<?= $k['gambar']; ?>" alt="<?= $k['nama_produk']; ?>">
            </div>
            <div class="bg-success p-1 rounded mb-2">
              <?= $k['deskripsi_produk']; ?>
            </div>
            <h4><b><?= money_format("%i",$k['harga_produk']); ?></b></h4>
            <div class="row d-flex align-items-center w-100 justify-content-center">
              <p class="h6 mr-3">Jumlah Beli</p>
              <input id="<?= $k['id_produk']; ?>" class="inpt_jmlh form-control w-25" type="number" name="jumlah_beli" min="1" max="10" value="1" onchange="totalBayar(this.id)">
            </div>
            <div class="p-3 mb-3">
              <hr>
              <h3>Detail Pembayaran</h3>
              <hr>
              <div class="mb-3">
                NOMOR KARTU <input class="form-control w-100" type="text" name="" value="" minlength="10" maxlength="19" required>
              </div>
              TANGGAL KADALUARSA
              <div class="row mb-3">
                <input class="form-control w-50 ml-3" type="date" name="" value="" placeholder="MM" required>
              </div>
              <div class="mb-3">
                KODE CV <input class="form-control w-25" type="text" name="" value="" minlength="3" maxlength="3" required>
              </div>
              TOTAL PEMBAYARAN <input id="total_byr_<?= $k['id_produk']; ?>" class="form-control w-100" type="text" name="" value="<?= money_format("%i",$k['harga_produk']); ?>" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="nama_produk" value="<?= $k['nama_produk']; ?>">
            <input id="hrg_produk_<?= $k['id_produk']; ?>" type="hidden" name="harga_produk" value="<?= $k['harga_produk']; ?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button id="btn_beli_<?= $k['id_produk']; ?>" type="submit" class="btn btn-primary">BELI</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
<!-- akhir katalog -->

<div class="mt-5">
</div>
</div>

<!-- akhir konten -->
<script>
  function totalBayar(id){
    document.getElementById('total_byr_' + id).value = document.getElementById('hrg_produk_' + id).value * document.getElementById(id).value;
  }
</script>

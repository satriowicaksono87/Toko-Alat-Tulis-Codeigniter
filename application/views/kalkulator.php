<div class="container-fluid">

  <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('img/slide1.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('img/slide2.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('img/slide3.jpg') ?>" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="btn btn-info btn-sm mt-3 mb-3">
      <h5 class=""><b>Kategori</b> : "<i>Kalkulator</i>"</h5>
</div>
  <div class="row text-center mt-3">

    <?php foreach ($kalkulator as $brg) :

     ?>

     <div class="card ml-3" style="width: 16rem;">
  <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
    <small><?php echo $brg->keterangan ?></small><br>
    <span class="badge badge-danger mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span><br>
    <?php echo anchor('template/tambah_ke_keranjang/' .$brg->id_barang, '<div class="btn btn-sm btn-primary"> Tambah Ke Keranjang</div>' ) ?>
    <?php echo anchor('template/detail/' .$brg->id_barang, '<div class="btn btn-sm btn-success"> Detail</div>' ) ?>

  </div>
</div>

   <?php endforeach; ?>

  </div>

</div>
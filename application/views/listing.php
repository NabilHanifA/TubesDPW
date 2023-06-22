

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <h1>Servis Motor Kesayangan Anda di Jaya Motor<span>.</span></h1>
        <h2>Kami siap melayani dengan sepenuh hati</h2>
      </div>
    </div>

  </div>
</section><!-- End Hero -->
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs mt-0">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-0"><?= $title ?></h2>
        <ol>
          <li><a href="<?= base_url('Home'); ?>">Home</a></li>
          <li><?= $title ?></li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <section id="pesanan" class="inner-page py-4">
    <div class="container px-0">
      <div class="row">
        <div class="col">

          <!-- DataTales Example -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th style="width: 5%; text-align:center">No</th>
                        <th>ID Pesanan</th>
                        <th>Nama</th>
                        <th>Motor</th>
                        <th>Service</th>
                        <th>Biaya Service</th>
                        <th>Status Pesanan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        foreach ($pesanan as $p) : ?>
                            <tr>
                                <td style="text-align:center"><?= $no++; ?></td>
                                <td><?= $p['id']; ?></td>
                                <td><?= $p['nama_customer']; ?></td>
                                <td><?= $p['nama_motor']; ?></td>
                                <td><?= $p['nama_service']; ?></td>
                                <td>Rp. <?= number_format($p['harga'],0,'','.'); ?></td>
                                <td><?= $p['status_pesanan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>


          <!-- /.container-fluid -->

        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
<!-- ======= Header ======= -->


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
        <h2 class="mb-0">Booking Order</h2>
        <ol>
          <li><a href="<?= base_url('Home'); ?>">Home</a></li>
          <li>Booking Order</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->
  <section id="order" class="inner-page py-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <?= form_open_multipart('booking/tambahData'); ?>
          <div class="form-group row">
            <div class="col">
              <label for="nama_lengkap" class="col-mx-0 col-form-label">Nama</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="email" class="col-mx-0 col-form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="nomor_telepon" class="col-mx-0 col-form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon">
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="alamat" class="col-mx-0 col-form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="nama_jenis" class="col-mx-0 col-form-label">Jenis Motor</label>
              <select name="nama_jenis" id="nama_jenis" class="custom-select">
                <option value="">--Select--</option>
                <?php foreach ($jenismotor as $jm) : ?>
                  <option value="<?= $jm['id']; ?>"><?= $jm['nama_jenis']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-sm-6">
              <label for="nama_motor" class="col-mx-0 col-form-label">Nama Motor</label>
              <select name="nama_motor" id="nama_motor" class="custom-select">
                <option value="">--Select--</option>
                <?php foreach ($motor as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['nama_motor']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="nama_service" class="col-mx-0 col-form-label">Jenis Service</label>
              <select name="nama_service" id="nama_service" class="custom-select">
                <option value="">--Select--</option>
                <?php foreach ($jenis_service as $js) : ?>
                  <option value="<?= $js['id']; ?>"><?= $js['nama_service']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group d-flex justify-content-end">
            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
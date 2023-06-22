<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pesanan</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align:center">No</th>
                            <th>ID Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            <th>Email Pelanggan</th>
                            <th>Nomor Telepon Pelanggan</th>
                            <th>Alamat Pelanggan</th>
                            <th>Jenis Motor</th>
                            <th>Nama Motor</th>
                            <th>Jenis Service</th>
                            <th>Biaya Service</th>
                            <th>Status Pesanan</th>
                            <th style="width: 10%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pesanan as $ps) : ?>
                            <tr>
                                <td style="text-align:center"><?= $no++; ?></td>
                                <td><?= $ps['id']; ?></td>
                                <td><?= $ps['nama_customer']; ?></td>
                                <td><?= $ps['email_customer']; ?></td>
                                <td><?= $ps['nomor_telepon_customer']; ?></td>
                                <td><?= $ps['alamat_customer']; ?></td>
                                <td><?= $ps['nama_jenis']; ?></td>
                                <td><?= $ps['nama_motor']; ?></td>
                                <td><?= $ps['nama_service']; ?></td>
                                <td>Rp. <?= number_format($ps['harga'], 0, '', '.'); ?></td>
                                <td><?= $ps['status_pesanan']; ?></td>
                                <td class="text-center">
                                    <a href="#" type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#editModal<?= $ps['id']; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
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
<!-- End of Main Content -->

<!-- Edit Modal -->
<?php
$no = 0;
foreach ($pesanan as $p) : $no++; ?>
    <div class="modal fade" id="editModal<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('Pesanan/editData'); ?>
                    <div class="form-group row">
                        <div class="col">
                            <label for="nama_lengkap" class="col-mx-0 col-form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $p['nama_customer']?>"readonly >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="email" class="col-mx-0 col-form-label">Email Pelanggan</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $p['email_customer']?>"readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="nomor_telepon" class="col-mx-0 col-form-label">Nomor Telepon Pelanggan</label>
                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?= $p['nomor_telepon_customer']?>"readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="alamat" class="col-mx-0 col-form-label">Alamat Pelanggan</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $p['alamat_customer']?>"readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_jenis" class="col-mx-0 col-form-label">Jenis Motor</label>
                            <select name="nama_jenis" id="nama_jenis" class="custom-select">
                                <option value="">--Select--</option>
                                <?php foreach ($jenismotor as $jm) : ?>
                                    <option disabled value="<?= $jm['id']; ?>"><?= $jm['nama_jenis']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="nama_motor" class="col-mx-0 col-form-label">Nama Motor</label>
                            <select name="nama_motor" id="nama_motor" class="custom-select">
                                <option value="">--Select--</option>
                                <?php foreach ($motor as $m) : ?>
                                    <option disabled value="<?= $m['id']; ?>"><?= $m['nama_motor']; ?></option>
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
                                    <option disabled value="<?= $js['id']; ?>"><?= $js['nama_service']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="Harga" class="col-mx-0 col-form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $p['harga']?>"readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="status_pesanan" class="col-mx-0 col-form-label">Status Pesanan</label>
                            <select name="nama_service" id="nama_service" class="custom-select">
                                <option value="">Waiting List</option>
                                <?php foreach ($status as $s) : ?>
                                    <option value="<?= $s['id'];?>"><?= $s['status_pesanan']; ?></option>            
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Motor</h1>
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">Tambah Data</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align:center">No</th>
                            <th>Jenis Motor</th>
                            <th>Nama Motor</th>
                            <th style="width: 10%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($motor as $m) : ?>
                            <tr>
                                <td style="text-align:center"><?= $no++; ?></td>
                                <td><?= $m['nama_jenis']; ?></td>
                                <td><?= $m['nama_motor']; ?></td>
                                <td class="text-center">
                                    <a href="#" type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#editModal<?= $m['id']; ?>">
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

<!-- Tambah Modal -->
<?php
$no = 0;
foreach ($motor as $m) :
?>
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('Motor/tambahData'); ?>">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $m['id']; ?>">
                        <div class="form-group row">
                            <label for="nama_jenis" class="col-sm-2 col-form-label">Jenis Motor</label>
                            <div class="col-sm-10">
                                <select name="nama_jenis" id="nama_jenis" class="custom-select">
                                    <option value="">--Select--</option>
                                    <?php foreach ($jenismotor as $jm) : ?>
                                        <option value="<?= $jm['id']; ?>"><?= $jm['nama_jenis']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_motor" class="col-sm-2 col-form-label">Nama Motor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_motor" name="nama_motor">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('Motor/deleteData/') . $m['id']; ?>" type="submit" class="btn btn-primary">Hapus Data</a>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<?php
$no = 0;
foreach ($motor as $m) : $no++; ?>
    <div class="modal fade" id="editModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('Motor/editData'); ?>
                    <input type="hidden" name="id" value="<?= $m['id']; ?>">
                    <div class="form-group row">
                        <label for="nama_jenis" class="col-sm-2 col-form-label">Jenis Motor</label>
                        <div class="col-sm-10">
                            <select name="nama_jenis" id="nama_jenis" class="custom-select">
                                <?php foreach ($jenismotor as $jm) : ?>
                                    <option value="<?= $jm['id']; ?>"><?= $jm['nama_jenis']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_motor" class="col-sm-2 col-form-label">Nama Motor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="<?= $m['nama_motor']; ?>">
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
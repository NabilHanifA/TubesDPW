<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jenis Service</h1>
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">Tambah Data</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align:center">No</th>
                            <th>Jenis Service</th>
                            <th>Harga</th>
                            <th style="width: 10%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($jenis_service as $js) : ?>
                            <tr>
                                <td style="text-align:center"><?= $no++; ?></td>
                                <td><?= $js['nama_service']; ?></td>
                                <td>Rp. <?= number_format($js['harga']); ?></td>
                                <td class="text-center">
                                    <a type="button" class="btn btn-success mr-2">
                                        <i class="fas fa-pencil-alt" data-toggle="modal" data-target="#editModal<?= $js['id']; ?>"></i>
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
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('JenisService/tambahData'); ?>">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_service" class="col-sm-2 col-form-label">Jenis Service</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_service" name="nama_service">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga">
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

<!-- Delete Modal -->
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
                <a href="<?= base_url('JenisService/deleteData/') . $js['id']; ?>" type="submit" class="btn btn-primary">Hapus Data</a>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<?php
$no = 0;
foreach ($jenis_service as $js) : $no++; ?>
    <div class="modal fade" id="editModal<?= $js['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('JenisService/editData'); ?>
                    <input type="hidden" name="id" value="<?= $js['id'];?>">
                    <div class="form-group row">
                        <label for="nama_service" class="col-sm-2 col-form-label">Jenis Service</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_service" name="nama_service" value="<?= $js['nama_service']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $js['harga']; ?>">
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
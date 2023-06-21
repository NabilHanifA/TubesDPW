<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jenis Motor</h1>
    <button class="btn btn-primary mb-3" type="submit">Tambah Data</button>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align:center">No</th>
                            <th>Jenis Motor</th>
                            <th style="width: 10%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($jenismotor as $jm) : ?>
                            <tr>
                                <td style="text-align:center"><?= $no++; ?></td>
                                <td><?= $jm['nama_jenis']; ?></td>
                                <td class="text-center">
                                    <a href="#" type="button" class="btn btn-success mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger">
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


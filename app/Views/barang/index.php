<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h2 class="text-center">📦 Inventory Management System 📦</h2>
        </div>

        <div class="card-body">

            <a href="http://localhost/inventaris-app/public/barang/create" class="btn btn-success mb-3">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </a>

            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name Item</th>
                        <th>Quantity</th>
                        <th>Condition</th>
                        <th>Date</th>
                        <th width="170">Option</th>
                    </tr>
                </thead>

                <tbody>

                <?php foreach ($barang as $b) : ?>

                    <tr>

                        <td><?= $b['id']; ?></td>

                        <td><?= $b['nama_barang']; ?></td>

                        <td><?= $b['jumlah']; ?></td>

                        <td><?= $b['kondisi']; ?></td>

                        <td><?= date('d-m-Y', strtotime($b['tanggal_masuk'])); ?></td>

                        <td>

                            <a href="http://localhost/inventaris-app/public/barang/edit/<?= $b['id']; ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <a href="http://localhost/inventaris-app/public/barang/delete/<?= $b['id']; ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash3"></i> Hapus
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
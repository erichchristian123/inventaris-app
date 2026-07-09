<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h2 class="text-center">✏️ Edit Barang</h2>
        </div>

        <div class="card-body">

            <form action="http://localhost/inventaris-app/public/barang/update/<?= $barang['id']; ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?= $barang['nama_barang']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="<?= $barang['jumlah']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kondisi</label>
                    <input type="text" class="form-control" name="kondisi" value="<?= $barang['kondisi']; ?>" required>
                </div>

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="http://localhost/inventaris-app/public/barang" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>
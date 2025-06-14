<?php
include 'partials/head.php';
require_once '../crud.php';  // Pastikan jalur ini benar sesuai struktur folder kamu

$crud = new CRUD();

// Jika ada permintaan untuk Create atau Update, proses dilakukan di sini
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Menangani Create
        // Menangani Create
        if (isset($_POST['create'])) {
            $data = [
                'jenis_legalitas' => $_POST['jenis_legalitas'],
                'nomor_keterangan' => $_POST['nomor_keterangan'],
                'tanggal' => $_POST['tanggal'],
            ];

            // Upload file terenkripsi
            if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] === 0) {
                $fileTmpPath = $_FILES['file_upload']['tmp_name'];
                $fileName = $_FILES['file_upload']['name'];
                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                $encryptedFileName = md5(time() . $fileName . uniqid()) . '.' . $fileExtension;
                $uploadDir = 'uploads/doc/';
                $filePath = $uploadDir . $encryptedFileName;

                if (!is_dir($uploadDir)) {
                    throw new Exception("Folder upload tidak ditemukan.");
                }

                if (move_uploaded_file($fileTmpPath, $filePath)) {
                    $data['file_path'] = $filePath;
                } else {
                    throw new Exception("Gagal mengupload file.");
                }
            }

            // Create Data
            if (!$crud->create('legalitas', $data)) {
                throw new Exception("Failed to create legalitas data");
            }
        }


        // Menangani Update
        // Menangani Update
        if (isset($_POST['update'])) {
            $data = [
                'jenis_legalitas' => $_POST['jenis_legalitas'],
                'nomor_keterangan' => $_POST['nomor_keterangan'],
                'tanggal' => $_POST['tanggal'],
            ];

            // Upload file terenkripsi
            if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] === 0) {
                $fileTmpPath = $_FILES['file_upload']['tmp_name'];
                $fileName = $_FILES['file_upload']['name'];
                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                $encryptedFileName = md5(time() . $fileName . uniqid()) . '.' . $fileExtension;
                $uploadDir = 'uploads/doc/';
                $filePath = $uploadDir . $encryptedFileName;

                if (!is_dir($uploadDir)) {
                    throw new Exception("Folder upload tidak ditemukan.");
                }

                if (move_uploaded_file($fileTmpPath, $filePath)) {
                    $data['file_path'] = $filePath;
                } else {
                    throw new Exception("Gagal mengupload file.");
                }
            } else {
                // Jika tidak upload file baru, tetap gunakan file lama
                if (isset($_POST['existing_file']) && $_POST['existing_file'] != '') {
                    $data['file_path'] = $_POST['existing_file'];
                }
            }

            // Update Data
            $conditions = ['id' => $_POST['id']];
            if (!$crud->update('legalitas', $data, $conditions)) {
                throw new Exception("Failed to update legalitas data");
            }
        }


        // Menangani Delete
        if (isset($_POST['delete'])) {
            $conditions = ['id' => $_POST['id']];
            if (!$crud->delete('legalitas', $conditions)) {
                throw new Exception("Failed to delete legalitas data");
            }
        }

        // Setelah aksi CRUD berhasil, redirect ke document.php
        header('Location: document.php');
        exit;
    } catch (Exception $e) {
        // Tangani error dan tampilkan pesan
        echo "Error: " . $e->getMessage();
    }
}

// Fetch all legalitas
$legalitas = $crud->read('legalitas');
?>

<body id="page-top">
    <div id="wrapper">
        <?php include 'partials/sidebar.php'; ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include 'partials/navbar.php'; ?>

                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Legalitas</h6>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createLegalitasModal"><i class="fas fa-plus"></i> Tambah</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Jenis Legalitas</th>
                                            <th>Nomor/Keterangan</th>
                                            <th>Tanggal</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1; // Inisialisasi nomor urut
                                        foreach ($legalitas as $row):
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td> <!-- Menampilkan nomor urut -->
                                                <td><?= $row['jenis_legalitas'] ?></td>
                                                <td><?= $row['nomor_keterangan'] ?></td>
                                                <td><?= $row['tanggal'] ?></td>
                                                <td>
                                                    <?php if (isset($row['file_path'])): ?>
                                                        <a href="<?= $row['file_path'] ?>" target="_blank">Lihat File</a>
                                                    <?php else: ?>
                                                        Tidak ada file
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning edit-btn"
                                                        data-id="<?= $row['id'] ?>"
                                                        data-jenis="<?= $row['jenis_legalitas'] ?>"
                                                        data-nomor="<?= $row['nomor_keterangan'] ?>"
                                                        data-tanggal="<?= $row['tanggal'] ?>"
                                                        data-file="<?= isset($row['file_path']) ? $row['file_path'] : '' ?>"
                                                        data-toggle="modal"
                                                        data-target="#editLegalitasModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <form action="document.php" method="POST" style="display:inline;">
                                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                        <button type="submit" class="btn btn-sm btn-danger" name="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'partials/footer.php'; ?>
        </div>
    </div>

    <!-- Modal Create Legalitas -->
    <div class="modal fade" id="createLegalitasModal" tabindex="-1" role="dialog" aria-labelledby="createLegalitasModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLegalitasModalLabel">Tambah Legalitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="document.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jenisLegalitas">Jenis Legalitas</label>
                            <input type="text" class="form-control" id="jenisLegalitas" name="jenis_legalitas" required>
                        </div>
                        <div class="form-group">
                            <label for="nomorKeterangan">Nomor/Keterangan</label>
                            <input type="text" class="form-control" id="nomorKeterangan" name="nomor_keterangan" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="fileUpload">Upload File</label>
                            <input type="file" class="form-control" id="fileUpload" name="file_upload">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="create">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Legalitas -->
    <div class="modal fade" id="editLegalitasModal" tabindex="-1" role="dialog" aria-labelledby="editLegalitasModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLegalitasModalLabel">Edit Legalitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="document.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="editId" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editJenisLegalitas">Jenis Legalitas</label>
                            <input type="text" class="form-control" id="editJenisLegalitas" name="jenis_legalitas" required>
                        </div>
                        <div class="form-group">
                            <label for="editNomorKeterangan">Nomor/Keterangan</label>
                            <input type="text" class="form-control" id="editNomorKeterangan" name="nomor_keterangan" required>
                        </div>
                        <div class="form-group">
                            <label for="editTanggal">Tanggal</label>
                            <input type="date" class="form-control" id="editTanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="editFileUpload">Upload File</label>
                            <input type="file" class="form-control" id="editFileUpload" name="file_upload">
                            <input type="hidden" id="existingFile" name="existing_file">
                            <small>Jika tidak ingin mengganti file, biarkan kosong</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="update">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'partials/modal.php'; ?>
    <?php include 'partials/script.php'; ?>
</body>

</html>

<script>
    // Handle Edit Button Click to Fill Modal Data
    $('#editLegalitasModal').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget); // Button that triggered the modal
        var id = button.data('id');
        var jenis = button.data('jenis');
        var nomor = button.data('nomor');
        var tanggal = button.data('tanggal');
        var file = button.data('file');

        // Set values in modal
        $(this).find('#editId').val(id);
        $(this).find('#editJenisLegalitas').val(jenis);
        $(this).find('#editNomorKeterangan').val(nomor);
        $(this).find('#editTanggal').val(tanggal);
        $(this).find('#existingFile').val(file);
    });
</script>
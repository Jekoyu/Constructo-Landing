<?php
include 'partials/head.php';
require_once '../crud.php';  // Pastikan jalur ini benar sesuai struktur folder kamu

$crud = new CRUD();

// Jika ada permintaan untuk Create atau Update, proses dilakukan di sini
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Menangani Create
        if (isset($_POST['create'])) {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
            ];

            // Menangani Upload Image
            if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === 0) {
                $fileTmpPath = $_FILES['image_upload']['tmp_name'];
                $fileName = $_FILES['image_upload']['name'];
                $fileSize = $_FILES['image_upload']['size'];
                $fileType = $_FILES['image_upload']['type'];

                // Tentukan lokasi penyimpanan gambar
                $uploadDir = 'uploads/img/';  // Ganti dengan uploads/img/
                $filePath = $uploadDir . basename($fileName);

                // Pastikan folder upload ada dan memiliki izin yang benar
                if (!is_dir($uploadDir)) {
                    throw new Exception("Folder upload tidak ditemukan.");
                }

                // Pindahkan gambar ke folder upload
                if (move_uploaded_file($fileTmpPath, $filePath)) {
                    $data['image_url'] = $filePath; // Tambahkan path gambar ke data
                } else {
                    throw new Exception("Gagal mengupload gambar.");
                }
            }

            // Create Data
            if (!$crud->create('services', $data)) {
                throw new Exception("Failed to create service data");
            }
        }

        // Menangani Update
        if (isset($_POST['update'])) {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
            ];

            // Menangani Update Image
            if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === 0) {
                $fileTmpPath = $_FILES['image_upload']['tmp_name'];
                $fileName = $_FILES['image_upload']['name'];
                $fileSize = $_FILES['image_upload']['size'];
                $fileType = $_FILES['image_upload']['type'];

                // Tentukan lokasi penyimpanan gambar
                $uploadDir = 'uploads/img/';  // Ganti dengan uploads/img/
                $filePath = $uploadDir . basename($fileName);

                // Pastikan folder upload ada dan memiliki izin yang benar
                if (!is_dir($uploadDir)) {
                    throw new Exception("Folder upload tidak ditemukan.");
                }

                // Pindahkan gambar ke folder upload
                if (move_uploaded_file($fileTmpPath, $filePath)) {
                    $data['image_url'] = $filePath; // Tambahkan path gambar ke data
                } else {
                    throw new Exception("Gagal mengupload gambar.");
                }
            } else {
                // Jika tidak ada gambar yang diupload, gunakan gambar yang sudah ada
                if (isset($_POST['existing_image']) && $_POST['existing_image'] != '') {
                    $data['image_url'] = $_POST['existing_image'];
                }
            }

            // Update Data
            $conditions = ['id' => $_POST['id']];
            if (!$crud->update('services', $data, $conditions)) {
                throw new Exception("Failed to update service data");
            }
        }
        
        // Menangani Delete
        if (isset($_POST['delete'])) {
            $conditions = ['id' => $_POST['id']];
            if (!$crud->delete('services', $conditions)) {
                throw new Exception("Failed to delete service data");
            }
        }

        // Setelah aksi CRUD berhasil, redirect ke document.php
        header('Location: services.php');
        exit;
    } catch (Exception $e) {
        // Tangani error dan tampilkan pesan
        echo "Error: " . $e->getMessage();
    }
}

// Fetch all services
$services = $crud->read('services');
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
                            <h6 class="m-0 font-weight-bold text-primary">Services</h6>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createServiceModal"><i class="fas fa-plus"></i> Tambah</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Nama Service</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach ($services as $row): ?>
                                            <tr>
                                                <td><?= $no++ ?></td> <!-- Menampilkan nomor urut -->
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['description'] ?></td>
                                                <td>
                                                    <?php if (isset($row['image_url'])): ?>
                                                        <a href="<?= $row['image_url'] ?>" target="_blank">Lihat Gambar</a>
                                                    <?php else: ?>
                                                        Tidak ada gambar
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning edit-btn" 
                                                        data-id="<?= $row['id'] ?>" 
                                                        data-name="<?= $row['name'] ?>" 
                                                        data-description="<?= $row['description'] ?>" 
                                                        data-image="<?= isset($row['image_url']) ? $row['image_url'] : '' ?>"
                                                        data-toggle="modal" 
                                                        data-target="#editServiceModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <form action="services.php" method="POST" style="display:inline;">
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

    <!-- Modal Create Service -->
    <div class="modal fade" id="createServiceModal" tabindex="-1" role="dialog" aria-labelledby="createServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createServiceModalLabel">Tambah Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="services.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="serviceName">Nama Service</label>
                            <input type="text" class="form-control" id="serviceName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceDescription">Deskripsi</label>
                            <textarea class="form-control" id="serviceDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imageUpload">Upload Gambar</label>
                            <input type="file" class="form-control" id="imageUpload" name="image_upload">
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

    <!-- Modal Edit Service -->
    <div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editServiceModalLabel">Edit Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="services.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="editId" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editServiceName">Nama Service</label>
                            <input type="text" class="form-control" id="editServiceName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="editServiceDescription">Deskripsi</label>
                            <textarea class="form-control" id="editServiceDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editImageUpload">Upload Gambar</label>
                            <input type="file" class="form-control" id="editImageUpload" name="image_upload">
                            <input type="hidden" id="existingImage" name="existing_image">
                            <small>Jika tidak ingin mengganti gambar, biarkan kosong</small>
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
    $('#editServiceModal').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget);  // Button that triggered the modal
        var id = button.data('id');
        var name = button.data('name');
        var description = button.data('description');
        var image = button.data('image');

        // Set values in modal
        $(this).find('#editId').val(id);
        $(this).find('#editServiceName').val(name);
        $(this).find('#editServiceDescription').val(description);
        $(this).find('#existingImage').val(image);
    });
</script>

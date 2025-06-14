<?php
include 'partials/head.php';
require_once '../crud.php';

$crud = new CRUD();

$projects = $crud->read('projects');
$clients = $crud->read('clients');

// Helper nama client
function get_client_name($clients, $client_id)
{
    foreach ($clients as $c) {
        if ($c['id'] == $client_id) return $c['name'];
    }
    return '-';
}

// ---- UPLOAD ----
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_images'])) {
    try {
        $project_id = $_POST['project_id'];
        $uploadDir = 'uploads/img/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $files = $_FILES['images'];
        for ($i = 0; $i < count($files['name']); $i++) {
            if ($files['error'][$i] === 0) {
                $ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);
                $hashName = md5(uniqid(rand(), true) . $files['name'][$i]) . '.' . $ext;
                $fileTmpPath = $files['tmp_name'][$i];
                $targetPath = $uploadDir . $hashName;

                if (move_uploaded_file($fileTmpPath, $targetPath)) {
                    $crud->create('images', [
                        'project_id' => $project_id,
                        'url' => $targetPath
                    ]);
                }
            }
        }
        header("Location: images.php");
        exit;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Upload Error: " . $e->getMessage() . "</div>";
    }
}

// ---- EDIT ----
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_image'])) {
    try {
        $id = $_POST['id'];
        $project_id = $_POST['project_id'];
        $data = ['project_id' => $project_id];
        $uploadDir = 'uploads/img/';

        // Cek jika ganti gambar
        if (isset($_FILES['edit_image_upload']) && $_FILES['edit_image_upload']['error'] === 0) {
            $ext = pathinfo($_FILES['edit_image_upload']['name'], PATHINFO_EXTENSION);
            $hashName = md5(uniqid(rand(), true) . $_FILES['edit_image_upload']['name']) . '.' . $ext;
            $fileTmpPath = $_FILES['edit_image_upload']['tmp_name'];
            $targetPath = $uploadDir . $hashName;

            if (move_uploaded_file($fileTmpPath, $targetPath)) {
                // Hapus gambar lama
                if (!empty($_POST['existing_image']) && file_exists($_POST['existing_image'])) {
                    unlink($_POST['existing_image']);
                }
                $data['url'] = $targetPath;
            } else {
                throw new Exception("Gagal upload gambar baru.");
            }
        } else {
            $data['url'] = $_POST['existing_image'];
        }

        if (!$crud->update('images', $data, ['id' => $id])) {
            throw new Exception("Gagal update gambar.");
        }
        header("Location: images.php");
        exit;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Edit Error: " . $e->getMessage() . "</div>";
    }
}

// ---- DELETE ----
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_image'])) {
    try {
        $id = $_POST['id'];
        $img = $crud->read('images', ['id' => $id]);
        if ($img && file_exists($img[0]['url'])) {
            unlink($img[0]['url']);
        }
        $crud->delete('images', ['id' => $id]);
        header("Location: images.php");
        exit;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Delete Error: " . $e->getMessage() . "</div>";
    }
}

// --- DATA TABEL ---
$images = [];
foreach ($crud->read('images') as $img) {
    $project = $crud->read('projects', ['id' => $img['project_id']]);
    $client_name = '-';
    $project_name = '-';
    if ($project) {
        $project_name = $project[0]['name'];
        $client = $crud->read('clients', ['id' => $project[0]['client_id']]);
        if ($client) $client_name = $client[0]['name'];
    }
    $images[] = [
        'id' => $img['id'],
        'url' => $img['url'],
        'project' => $project_name,
        'client' => $client_name,
        'project_id' => $img['project_id']
    ];
}
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
                            <h6 class="m-0 font-weight-bold text-primary">Upload Gambar Project</h6>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadModal">
                                <i class="fas fa-upload"></i> Upload Gambar
                            </button>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Gambar Project</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Client - Project</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($images as $img): ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= htmlspecialchars($img['client'] . ' - ' . $img['project']) ?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-info btn-sm view-image"
                                                        data-toggle="modal"
                                                        data-target="#viewImageModal"
                                                        data-img="<?= htmlspecialchars($img['url']) ?>"
                                                        title="Lihat Gambar">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-warning btn-sm edit-image"
                                                        data-toggle="modal"
                                                        data-target="#editImageModal"
                                                        data-id="<?= $img['id'] ?>"
                                                        data-url="<?= htmlspecialchars($img['url']) ?>"
                                                        data-project="<?= $img['project_id'] ?>">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <form action="images.php" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus gambar ini?');">
                                                        <input type="hidden" name="id" value="<?= $img['id'] ?>">
                                                        <button type="submit" name="delete_image" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach;
                                        if (empty($images)): ?>
                                            <tr>
                                                <td colspan="4" class="text-center">Belum ada gambar.</td>
                                            </tr>
                                        <?php endif; ?>
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

    <!-- Modal Upload -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Upload Gambar Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="project_id">Pilih Project</label>
                            <select name="project_id" id="project_id" class="form-control" required>
                                <option value="">-- Pilih Project --</option>
                                <?php foreach ($projects as $p): ?>
                                    <?php $clientName = get_client_name($clients, $p['client_id']); ?>
                                    <option value="<?= $p['id'] ?>">
                                        <?= htmlspecialchars($p['name']) . ' - ' . htmlspecialchars($clientName) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="images">Upload Gambar (bisa lebih dari satu):</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name="upload_images" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editImageModal" tabindex="-1" role="dialog" aria-labelledby="editImageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editImageModalLabel">Edit Gambar Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit_image_id">
                        <input type="hidden" name="existing_image" id="edit_existing_image">
                        <div class="form-group">
                            <label for="edit_project_id">Pilih Project</label>
                            <select name="project_id" id="edit_project_id" class="form-control" required>
                                <option value="">-- Pilih Project --</option>
                                <?php foreach ($projects as $p): ?>
                                    <?php $clientName = get_client_name($clients, $p['client_id']); ?>
                                    <option value="<?= $p['id'] ?>">
                                        <?= htmlspecialchars($p['name']) . ' - ' . htmlspecialchars($clientName) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_image_upload">Ganti Gambar (kosongkan jika tidak ingin ganti):</label>
                            <input type="file" name="edit_image_upload" id="edit_image_upload" class="form-control">
                            <div class="mt-2">
                                <img id="edit_image_preview" src="" alt="" width="100" style="border:1px solid #ddd;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name="edit_image" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal View Image -->
    <div class="modal fade" id="viewImageModal" tabindex="-1" role="dialog" aria-labelledby="viewImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" src="" style="max-width:100%;max-height:70vh;" alt="Preview" />
                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/modal.php'; ?>
    <?php include 'partials/script.php'; ?>
    <script>
        $('.view-image').on('click', function() {
            var img = $(this).data('img');
            $('#modalImage').attr('src', img);
        });
        $('#viewImageModal').on('hidden.bs.modal', function() {
            $('#modalImage').attr('src', '');
        });

        // Fill Edit Modal
        $('.edit-image').on('click', function() {
            var id = $(this).data('id');
            var url = $(this).data('url');
            var project = $(this).data('project');
            $('#edit_image_id').val(id);
            $('#edit_existing_image').val(url);
            $('#edit_image_preview').attr('src', url);
            $('#edit_project_id').val(project);
        });
    </script>
</body>

</html>
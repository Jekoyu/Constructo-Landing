<?php
include 'partials/head.php';
require_once '../crud.php';  // Pastikan jalur ini benar sesuai struktur folder kamu

$crud = new CRUD();

// Jika ada permintaan untuk Create atau Update, proses dilakukan di sini
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Menangani Create Clients
        if (isset($_POST['create_client'])) {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'city' => $_POST['city'],
            ];

            // Create Data Clients
            if (!$crud->create('clients', $data)) {
                throw new Exception("Failed to create client data");
            }
        }

        // Menangani Update Clients
        if (isset($_POST['update_client'])) {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'city' => $_POST['city'],
            ];

            $conditions = ['id' => $_POST['id']];
            if (!$crud->update('clients', $data, $conditions)) {
                throw new Exception("Failed to update client data");
            }
        }

        // Menangani Delete Clients
        if (isset($_POST['delete_client'])) {
            $conditions = ['id' => $_POST['id']];
            if (!$crud->delete('clients', $conditions)) {
                throw new Exception("Failed to delete client data");
            }
        }

        // Menangani Create Projects
        if (isset($_POST['create_project'])) {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'client_id' => $_POST['client_id'],
                'year' => $_POST['year'],
                'type' => $_POST['type'],
            ];

            // Create Data Projects
            if (!$crud->create('projects', $data)) {
                throw new Exception("Failed to create project data");
            }
        }

        // Menangani Update Projects
        if (isset($_POST['update_project'])) {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'client_id' => $_POST['client_id'],
                'year' => $_POST['year'],
                'type' => $_POST['type'],
            ];

            $conditions = ['id' => $_POST['id']];
            if (!$crud->update('projects', $data, $conditions)) {
                throw new Exception("Failed to update project data");
            }
        }

        // Menangani Delete Projects
        if (isset($_POST['delete_project'])) {
            $conditions = ['id' => $_POST['id']];
            if (!$crud->delete('projects', $conditions)) {
                throw new Exception("Failed to delete project data");
            }
        }

        // Setelah aksi CRUD berhasil, redirect ke project.php
        header('Location: project.php');
        exit;
    } catch (Exception $e) {
        // Tangani error dan tampilkan pesan
        echo "Error: " . $e->getMessage();
    }
}

// Fetch all clients
$clients = $crud->read('clients');

// Fetch all projects
$projects = $crud->read('projects');
?>

<body id="page-top">
    <div id="wrapper">
        <?php include 'partials/sidebar.php'; ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include 'partials/navbar.php'; ?>

                <div class="container-fluid">
                    <!-- Card for Clients -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createClientModal"><i class="fas fa-plus"></i> Tambah Client</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Nama Client</th>
                                            <th>Deskripsi</th>
                                            <th>Kota</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($clients as $row): ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['description'] ?></td>
                                                <td><?= $row['city'] ?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning edit-btn"
                                                        data-id="<?= $row['id'] ?>"
                                                        data-name="<?= $row['name'] ?>"
                                                        data-description="<?= $row['description'] ?>"
                                                        data-city="<?= $row['city'] ?>"
                                                        data-toggle="modal"
                                                        data-target="#editClientModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <form action="project.php" method="POST" style="display:inline;">
                                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                        <button type="submit" class="btn btn-sm btn-danger" name="delete_client" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Projects -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createProjectModal"><i class="fas fa-plus"></i> Tambah Project</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Nama Project</th>
                                            <th>Deskripsi</th>
                                            <th>Client</th>
                                            <th>Tahun</th>
                                            <th>Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($projects as $row): ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['description'] ?></td>
                                                <td>
                                                    <?php
                                                    $client = $crud->read('clients', ['id' => $row['client_id']]);
                                                    echo isset($client[0]['name']) ? $client[0]['name'] : 'Client not found';
                                                    ?>
                                                </td>
                                                <td><?= $row['year'] ?></td>
                                                <td><?= $row['type'] ?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning edit-btn"
                                                        data-id="<?= $row['id'] ?>"
                                                        data-name="<?= $row['name'] ?>"
                                                        data-description="<?= $row['description'] ?>"
                                                        data-client="<?= $row['client_id'] ?>"
                                                        data-year="<?= $row['year'] ?>"
                                                        data-type="<?= $row['type'] ?>"
                                                        data-toggle="modal"
                                                        data-target="#editProjectModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <form action="project.php" method="POST" style="display:inline;">
                                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                        <button type="submit" class="btn btn-sm btn-danger" name="delete_project" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</button>
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

    <!-- Modal Create Client -->
    <div class="modal fade" id="createClientModal" tabindex="-1" role="dialog" aria-labelledby="createClientModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createClientModalLabel">Tambah Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="project.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="clientName">Nama Client</label>
                            <input type="text" class="form-control" id="clientName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="clientDescription">Deskripsi</label>
                            <textarea class="form-control" id="clientDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="clientCity">Kota</label>
                            <input type="text" class="form-control" id="clientCity" name="city" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="create_client">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Client -->
    <div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editClientModalLabel">Edit Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="project.php" method="POST">
                    <input type="hidden" id="editClientId" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editClientName">Nama Client</label>
                            <input type="text" class="form-control" id="editClientName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="editClientDescription">Deskripsi</label>
                            <textarea class="form-control" id="editClientDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editClientCity">Kota</label>
                            <input type="text" class="form-control" id="editClientCity" name="city" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="update_client">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Create Project -->
    <div class="modal fade" id="createProjectModal" tabindex="-1" role="dialog" aria-labelledby="createProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createProjectModalLabel">Tambah Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="project.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="projectName">Nama Project</label>
                            <input type="text" class="form-control" id="projectName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="projectDescription">Deskripsi</label>
                            <textarea class="form-control" id="projectDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="projectClient">Client</label>
                            <select class="form-control" id="projectClient" name="client_id" required>
                                <option value="">Pilih Client</option>
                                <?php foreach ($clients as $client): ?>
                                    <option value="<?= $client['id'] ?>"><?= $client['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="projectYear">Tahun</label>
                            <input type="text" class="form-control" id="projectYear" name="year" required>
                        </div>
                        <div class="form-group">
                            <label for="projectType">Jenis</label>
                            <input type="text" class="form-control" id="projectType" name="type" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="create_project">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Project -->
    <div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProjectModalLabel">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="project.php" method="POST">
                    <input type="hidden" id="editProjectId" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editProjectName">Nama Project</label>
                            <input type="text" class="form-control" id="editProjectName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="editProjectDescription">Deskripsi</label>
                            <textarea class="form-control" id="editProjectDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editProjectClient">Client</label>
                            <select class="form-control" id="editProjectClient" name="client_id" required>
                                <option value="">Pilih Client</option>
                                <?php foreach ($clients as $client): ?>
                                    <option value="<?= $client['id'] ?>"><?= $client['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editProjectYear">Tahun</label>
                            <input type="text" class="form-control" id="editProjectYear" name="year" required>
                        </div>
                        <div class="form-group">
                            <label for="editProjectType">Jenis</label>
                            <input type="text" class="form-control" id="editProjectType" name="type" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="update_project">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include 'partials/modal.php'; ?>
    <?php include 'partials/script.php'; ?>
    <script>
        // Handle Edit Button Click to Fill Modal Data
        $('#editClientModal').on('show.bs.modal', function(e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var name = button.data('name');
            var description = button.data('description');
            var city = button.data('city');

            // Set values in modal
            $(this).find('#editClientId').val(id);
            $(this).find('#editClientName').val(name);
            $(this).find('#editClientDescription').val(description);
            $(this).find('#editClientCity').val(city);
        });

        $('#editProjectModal').on('show.bs.modal', function(e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var name = button.data('name');
            var description = button.data('description');
            var client = button.data('client');
            var year = button.data('year');
            var type = button.data('type');

            // Set values in modal
            $(this).find('#editProjectId').val(id);
            $(this).find('#editProjectName').val(name);
            $(this).find('#editProjectDescription').val(description);
            $(this).find('#editProjectClient').val(client);
            $(this).find('#editProjectYear').val(year);
            $(this).find('#editProjectType').val(type);
        });
    </script>
</body>

</html>
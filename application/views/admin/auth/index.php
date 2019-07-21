<link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet">

<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Administrator</h6>
        <a href="<?php echo base_url("admin/auth/create_user") ?>"
           class="btn btn-md btn-primary">Tambah Baru</a>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">No</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>No. Hp</th>
                <th style="width: 15%">Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1;
            foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $user->username ?></td>
                    <td><?php echo $user->alamat ?></td>
                    <td><?php echo $user->no_hp ?></td>
                    <td>
                        <a href="<?php echo base_url("admin/auth/edit_user/$user->id_admin") ?>"
                           class="btn btn-sm btn-warning">Edit</a>
                        <?php if ($this->session->userdata('username') !== $user->username): ?>
                            <a href="<?php echo base_url("admin/auth/delete_user/$user->id_admin") ?>"
                                class="btn btn-sm btn-danger">Hapus</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script defer="defer">
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>
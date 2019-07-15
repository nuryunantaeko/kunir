<link href="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
        <a href="<?php echo base_url("admin/kriteria/create")?>" class="btn btn-md btn-primary">Tambah Baru</a>
    </div>
    <!-- Card Body -->
    <div class="card-body">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>Bobot</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach($kriteria as $kriteria): ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $kriteria->nama_kriteria ?></td>
                <td><?php echo $kriteria->nilai_bobot ?></td>
                <td>
                    <a href="<?php echo base_url("admin/kriteria/edit/$kriteria->id_kriteria")?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url("admin/kriteria/delete/$kriteria->id_kriteria")?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php $no++; endforeach; ?>
        </tbody>
    </table>
    </div>
</div>


<!-- Page level plugins -->
<script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script defer="defer">
$(document).ready(function() {
  $('#dataTable').DataTable();
});
</script>
<link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet">

<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Kunir</h6>
        <a href="<?php echo base_url("admin/kunir/create") ?>"
           class="btn btn-md btn-primary">Tambah Baru</a>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="matriksX" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">No</th>
                <th>Kode Kunir</th>
                <th style="width: 15%">Opsi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
            </tr>
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
    $('#matriksX').DataTable();
  });
</script>
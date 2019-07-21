<link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet">

<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Penilaian</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">No</th>
                <th>Kode Kunir</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th style="width: 10%">Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1;
            foreach ($penilaian as $penilaian): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $penilaian->kode_kunir ?></td>
                    <td>
                        <?php if (empty($penilaian->c1)): ?>
                            <span class="badge badge-danger">Belum di isi</span>
                        <?php elseif ($penilaian->c1 >3): ?>
                            <span class="badge badge-warning">Berbau</span>
                        <?php else: ?>
                            <span class="badge badge-success">Tidak Berbau</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (empty($penilaian->c2)): ?>
                            <span class="badge badge-danger">Belum di isi</span>
                        <?php elseif ($penilaian->c2 = 1 ): ?>
                            <span class="badge badge-danger"><?php echo $penilaian->c2 ?>Busuk</span>
                        <?php elseif ($penilaian->c2 >= 2
                            && $penilaian->c2 < 4
                        ): ?>
                            <span class="badge badge-warning">Layu</span>
                        <?php else: ?>
                            <span class="badge badge-success">Segar</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (empty($penilaian->c3)): ?>
                            <span class="badge badge-danger">Belum di isi</span>
                        <?php elseif ($penilaian->c3 = 1): ?>
                            <span class="badge badge-danger">Kecoklatan</span>
                        <?php elseif ($penilaian->c3 >= 2
                            && $penilaian->c3 < 4
                        ): ?>
                            <span class="badge badge-warning">Kuning Tua</span>
                        <?php else: ?>
                            <span class="badge badge-success">Kuning Muda</span>
                        <?php endif; ?></td>
                    <td>
                        <?php if (empty($penilaian->c4)): ?>
                            <span class="badge badge-danger">Belum di isi</span>
                        <?php elseif ($penilaian->c4 <3): ?>
                            <span class="badge badge-warning">Ada</span>
                        <?php else: ?>
                            <span class="badge badge-success">Tidak Ada</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (empty($penilaian->c5)): ?>
                            <span class="badge badge-danger">Belum di isi</span>
                        <?php elseif ($penilaian->c5 = 1): ?>
                            <span class="badge badge-danger">Kecil</span>
                        <?php elseif ($penilaian->c5 >=2
                            && $penilaian->c5 < 4
                        ): ?>
                            <span class="badge badge-warning">Sedang</span>
                        <?php else: ?>
                            <span class="badge badge-success">Besar</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url("admin/penilaian/edit/$penilaian->id_kunir") ?>"
                           class="btn btn-sm btn-warning">Edit</a>
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
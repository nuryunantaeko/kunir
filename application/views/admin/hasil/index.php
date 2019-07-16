<link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet">
<!--Bobot Kriteria-->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Bobot Kriteria</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="bobotKriteria" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">Kriteria</th>
                <?php foreach ($bobotKriteria as $bk): ?>
                    <th><?php echo $bk->nama_kriteria ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Bobot</td>
                <?php foreach ($bobotKriteria as $bk): ?>
                    <td><?php echo $bk->nilai_bobot ?></td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!--Matrik Alternatif/Kriteria-->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Matrix Alternatif -
            Kriteria</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="matriksAlternatif" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">Alternatif/Kriteria</th>
                <?php foreach (
                    $matriksAlternatifKriteria->kriteria as $kriteria
                ): ?>
                    <th><?php echo $kriteria->nama_kriteria ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php $maksAlternatif
                = count($matriksAlternatifKriteria->alternatif); ?>
            <?php foreach (
                $matriksAlternatifKriteria->alternatif as $key => $alternatif
            ): ?>
                <tr>
                    <td><?php echo $alternatif->kode_kunir ?></td>
                    <td><?php echo $alternatif->c1 ?></td>
                    <td><?php echo $alternatif->c2 ?></td>
                    <td><?php echo $alternatif->c3 ?></td>
                    <td><?php echo $alternatif->c4 ?></td>
                    <td><?php echo $alternatif->c5 ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!--Nilai Maks dan Min-->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Maks</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="maxAndMin" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">Kriteria</th>
                <?php foreach (
                    $matriksAlternatifKriteria->kriteria as $kriteria
                ): ?>
                    <th><?php echo $kriteria->nama_kriteria ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Nilai Maksimal</td>
                <td><?php echo $nilaiMaks->c1 ?></td>
                <td><?php echo $nilaiMaks->c2 ?></td>
                <td><?php echo $nilaiMaks->c3 ?></td>
                <td><?php echo $nilaiMaks->c4 ?></td>
                <td><?php echo $nilaiMaks->c5 ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!--Matrik Normalisasi-->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Matrix Normalisasi</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="normalisasi" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">Alternatif/Kriteria</th>
                <?php foreach (
                    $matriksAlternatifKriteria->kriteria as $kriteria
                ): ?>
                    <th><?php echo $kriteria->nama_kriteria ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach (
                $matriksAlternatifKriteria->alternatif as $alternatif
            ): ?>
                <tr>
                    <td><?php echo $alternatif->kode_kunir ?></td>
                    <?php foreach (
                        $normalisasi->{$alternatif->kode_kunir} as $normal
                    ): ?>
                        <td><?php echo $normal ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!--Matrik Terbobot-->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Matrix Terbobot</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="terbobot" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">Alternatif/Kriteria</th>
                <?php foreach (
                    $matriksAlternatifKriteria->kriteria as $kriteria
                ): ?>
                    <th><?php echo $kriteria->nama_kriteria ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach (
                $matriksAlternatifKriteria->alternatif as $alternatif
            ): ?>
                <tr>
                    <td><?php echo $alternatif->kode_kunir ?></td>
                    <?php foreach (
                        $terbobot->{$alternatif->kode_kunir} as $bobot
                    ): ?>
                        <td><?php echo $bobot ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!--Hasil Analisa-->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Matrix Terbobot</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <table class="table table-bordered" id="hasilAnalisa" width="100%"
               cellspacing="0">
            <thead>
            <tr>
                <th style="width: 7%">No</th>
                <th style="width: 7%">Alternatif/Kriteria</th>
                <th>Hasil Akhir</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1;
            foreach ($perangkingan as $alternatif => $rangking): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $alternatif ?></td>
                    <td><?php echo $rangking ?></td>
                </tr>
                <?php $no++;endforeach; ?>
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
    $('#bobotKriteria').DataTable({
      'paging': false,
      'ordering': false,
      'info': false,
      'searching': false,
    });
    $('#matriksAlternatif').DataTable({
      'info': false,
      'searching': false,
    });
    $('#maxAndMin').DataTable({
      'paging': false,
      'ordering': false,
      'info': false,
      'searching': false,
    });
    $('#normalisasi').DataTable({
      'paging': true,
      'ordering': true,
      'info': false,
      'searching': false,
    });
    $('#terbobot').DataTable({
      'paging': true,
      'ordering': true,
      'info': false,
      'searching': false,
    });
    $('#hasilAnalisa').DataTable({
      'paging': true,
      'ordering': true,
      'info': false,
      'searching': false,
      // 'order': [[2, 'desc']],
    });
  });
</script>
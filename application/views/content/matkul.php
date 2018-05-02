<?php
$i = 1;
?>
<div class="tables">
    <h2 class="title1">Mata Kuliah</h2>
   <?php for ($ar=1; $ar <= $row->num_rows(); $ar++) { ?>
    <div class="panel-body widget-shadow">
        <h4>Data MatKul semester <?php echo $ar;?> </h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //$matkul = $db->query("select * from matkul where semester = '$ar'");
                foreach ($matkul->result_array() as $data) {
                    if ($data['semester'] != $ar) continue;
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['sks']; ?></td>
                    <td><?php echo $data['semester']; ?></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    <br>
    <?php } ?>
</div>
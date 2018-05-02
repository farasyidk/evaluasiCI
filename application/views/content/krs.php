<div class="tables">
    <h2 class="title1">KRS</h2>
    <div class="panel-body widget-shadow">
        <h4>NAMA    : <?php echo $_SESSION['nama'] ?></h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama MK</th>
                    <th>SKS</th>
                    <th>Waktu</th>
                    <th>Ruang</th>
                    <th>Dosen Pengampu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($krs->result_array() as $data) {
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $data['matkul']; ?></td>
                    <td><?php echo $data['sks']; ?></td>
                    <td><?php echo $data['waktu']; ?></td>
                    <td><?php echo $data['ruang']; ?></td>
                    <td><a href="<?php echo base_url('perkuliahan/dosens/'.$data['id']); ?>"><?php echo $data['dosen']; ?></a></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    
</div>
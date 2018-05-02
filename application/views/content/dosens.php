
<div class="tables">
    <div class="panel-body widget-shadow">
        <h4>NIM</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kejuruan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($dosen->result_array() as $data) {
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><a href="<?php echo base_url('perkuliahan/dosens/'.$data['id']); ?>"><?php echo $data['nama']; ?></a></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['prodi']; ?></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    
</div>
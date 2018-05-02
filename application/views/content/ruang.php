
<div class="tables">
    <div class="panel-body widget-shadow">
        <h4>NIM</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Ruang</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $i = 1;
                foreach ($ruang->result_array() as $data) {
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $data['nama']; ?></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    
</div>
<h3>Siswa List</h3>
<a href="<?php echo site_url() ?>/welcome/create" class="btn btn-primary">Tambah Data</a><br><br>
<table class="table table-bordered" >
    <tr>
        <th>no</th>
        <th>nis siswa</th>
        <th>nama siswa</th>
        <th>alamat siswa</th>
        <th>aksi</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($siswa_data as $siswa) : ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $siswa['nis'] ?></td>
        <td><?php echo $siswa['nm_siswa'] ?></td>
        <td><?php echo $siswa['alamat'] ?></td>
        <td>
            <a href="<?php echo site_url('/welcome/edit/'.$siswa['id']) ?>" class="btn btn-primary btn-sm" >Edit</a>
            <a href="<?php echo site_url('/welcome/delete/'.$siswa['id']) ?>" class="btn btn-danger btn-sm" >Hapus</a>
        </td>
    </tr>
    <?php endforeach ?> 
</table>
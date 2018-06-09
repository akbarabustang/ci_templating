<h3>Tambah data</h3>
<form action="<?php echo site_url() ?>/welcome/create" method="POST">
    <table class="table table-bordered">
        <tr>
            <td>Masukkan NIS siswa</td>
            <td><input type="text" name="nis" class="form-control" ></td>
        </tr>
        <tr>
            <td>Masukkan Nama siswa</td>           
            <td><input type="text" name="nm_siswa" class="form-control" ></td>
        </tr>
        <tr>
            <td>Masukkan Alamat siswa</td>          
            <td><input type="text" name="alamat" class="form-control" ></td>
        </tr>
    </table>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>
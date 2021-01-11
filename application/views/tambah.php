<form method="post" id="form">
    <div class="form-group">
        <label for="email">NIP:</label>
        <input type="text" class="form-control"  name="nip" placeholder="Masukan NIP">
    </div>
    <div class="form-group">
        <label for="email">Nama:</label>
        <input type="text" class="form-control"  name="nama" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
            <label>Jabatan:</label>
        <select class="form-control" name="jurusan">
            <option value="JP">Junior Programmer</option>
            <option value="DR">Sistem Informasi</option>
            <option value="KP">Kepala Programmer</option>
            <option value="KD">Kepala Divisi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control"  name="alamat" placeholder="Masukan Alamat" >
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/c_pegawai/simpanPegawai",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/c_pegawai/tampilPegawai");
                    }
                });
            });
        });
</script> 
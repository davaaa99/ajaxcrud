<form method="post" id="form">
    <div class="form-group">
        <label for="email">NIP:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nip; ?>" name="nip_baru" placeholder="Masukan NIP">
    </div>
    <div class="form-group">
        <label for="email">Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nama; ?>" name="nama" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
            <label>Jabatan:</label>
        <select class="form-control" name="jurusan">
        <?php
            $jur[0]="";
            $jur[1]="";
            $jur[2]="";
            $jur[3]="";
            switch ($hasil->jurusan){
                case "JP" : $jur[0]="selected"; break;
                case 'DR' : $jur[1]="selected"; break;
                case 'KP' : $jur[2]="selected"; break;
                case 'KD' : $jur[3]="selected"; break;
            }
        ?>
            <option value="JP" <?php echo $jur[0]; ?>>Junior Programmer</option>
            <option value="DR" <?php echo $jur[1]; ?>>Direktur</option>
            <option value="KP" <?php echo $jur[2]; ?>>Kepala Tim</option>
            <option value="KD" <?php echo $jur[3]; ?>>Kepala Divisi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->alamat; ?>"  name="alamat" placeholder="Masukan Alamat" >
    </div>
    <input type="hidden" name="nip_lama" value="<?php echo $hasil->nip;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/c_pegawai/editPegawai",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/c_pegawai/tampilPegawai");    
                    }
                });
            });
        });
</script> 
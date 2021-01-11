<form method="post" id="form">
    <center><p>Yakin ingin menghapus data pegawai <br><?php echo $hasil->nip;?> - <?php echo $hasil->nama;?> </p></center>
    <input type="hidden" name="nip" value="<?php echo $hasil->nip;?>">
    <center><button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button></center>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_hapus").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/c_pegawai/hapusPegawai",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/c_pegawai/tampilPegawai");
                    }
                });
            });
        });
</script> 
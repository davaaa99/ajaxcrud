<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url()?>/assets/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <title> Pengelolaan Data Pegawai </title>
</head>
<style>
h2{
    margin-top: 30px
}
#tampil{
    margin-top:50px
}
</style>



<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>c_pegawai/tampilPegawai",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });

});
</script>
<body>
    <div class='container'>
        <h2 align="center">PENGELOLAAN DATA PEGAWAI</h2>
        <div id="tampil">
            <!-- Data tampil disini -->
        </div>
</div>
</body>
</html>
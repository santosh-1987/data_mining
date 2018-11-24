<?php
include '__dbconf__.php';
$priv = __fcc_priv8_string();
?>
<!DOCTYPE html>
<html>
<head>
	<title>~TEST PROJECT~| PRASANT~</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/crud_style.css">
	<script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container container-fluid">
<br>
<br>
<div class="header">
<h1>~ Create Read Update Delete ~</h1>
<p> TEST PROJECT FOR NEW GEN. WEB DATA PRESENTATION | c0ded By : <b>PK MOHANTY</b></p>
</div>
<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> CREATE |ADD </button>
<br><br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> CREATE | ADD </h4>
      </div>
      <div class="modal-body">
      <div class="alert alert-success" id="sukses_tambah"></div>
         <form method="post" id="form">
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="nama" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="form-group">
    <label for="nisn">NISN</label>
    <input type="number" class="form-control" id="nis" name="nis" required>
  </div>
    <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
    <select id="jk" name="jk" class="form-control">
    	<option value="P">Perempuan</option>
    	<option value="L">Laki-Laki</option>
    </select>
  </div>
  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select id="kelas" name="kelas" class="form-control">
    	<option value="X">X</option><option value="XI">XI</option><option value="XII">XII</option>
    </select>
  </div>
    <div class="form-group">
    <label for="jurusan" name="jurusan" >Jurusan</label>
   <select name="jurusan" id="jurusan" class="form-control">
   	<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
   	<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
   	<option value="Kriya Tekstil">Kriya Tekstil</option>
   	<option value="Perbankan Syariah">Perbankan Syariah</option>
   </select>
  </div>
  <input type="hidden" name="__fcc_priv8_string__" value="<?=$priv;?>">
  <button type="button" id="submit" class="btn btn-default">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#sukses").hide();
		$("#sukses_tambah").hide();
		$("#gagal").hide();
$("#submit").click(function(){
$.ajax({
	url : '__action__.php?a=input',
	type : 'POST',
	data : $('#form').serialize(),
	success:function(data){
		if(data == "ok"){
			$("#sukses_tambah").fadeIn().html("success tambah data").fadeOut(2000);
			$("#table").load('__action__.php?a=show');
		}else{
			alert('input Failll');
		}
	},
	error:function(data){
		alert('Input Error !');
	}
});
});

return false;
	});
</script>
<div class="alert alert-success" id="sukses"></div>
<div class="alert alert-danger" id="gagal"></div>
<div id="table"></div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#table").hide(100);
		$("#table").slideToggle();
		$("#table").load('__action__.php?a=show');
	});
</script>
</body>
</html>
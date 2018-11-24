<?php
include '__dbconf__.php';
if(empty($_GET['a'])){
	@header('location:index.php?');
}else{
	$a=$_GET['a'];
	if($a == "input")
	{
		if($_POST['__fcc_priv8_string__'] == __fcc_priv8_string()){
		$personalno=$_POST['personalno'];
		$name=$_POST['name'];
		$unit=$_POST['unit'];
		$jk=$_POST['jk'];
		$command=$_POST['command'];
		$insert=$dbconf->__query_db_fcc($acon,"INSERT INTO data_siswa VALUES('','$personalno','$name','$unit','$jk','$command') ");
		if($insert){
			echo "ok";
		}else{
			echo "failed :(";
		}
	}else{
		header('HTTP/1.1 Not Found');
	}
	}elseif ($a == "delete") {
		$data = $_POST['id_siswa'];
		$delete = $dbconf->__query_db_fcc($acon,"DELETE FROM data_siswa WHERE id_siswa='$data' ");
		if($delete){
			echo "ok";
		}else{
			echo "failed";
		}
	}elseif ($a == "show") {
		?>
		<table class="table table-hover table-striped" id="tabel">
<?php
	$tr= $html->__th_fcc("No.").$html->__th_fcc("Personal No").$html->__th_fcc("Name").
	$html->__th_fcc("Date").$html->__th_fcc("Unit").$html->__th_fcc("Command").$html->__th_fcc("ACTION");
	echo $tr;

$q = $dbconf->__query_db_fcc($acon,"SELECT * FROM data_siswa ORDER BY nis_siswa DESC");
$n=1;
$o=1;
while($o=$dbconf->__fetch_db_fcc($q))
{
	$aksi = "<a href=\"javascript:delete_data_fcc('#id_".$o['id_siswa']."');\" class='btn btn-default'>
	<span class=\"glyphicon glyphicon-trash\"></span></a> <a href=\"javascript:edit_data_fcc('#id_".$o['id_siswa']."');\" class='btn btn-default'><span class=\"glyphicon glyphicon-edit\"></span></a> <a href=\"javascript:view_data_fcc('#id_".$o['id_siswa']."');\" class='btn btn-default'><span class=\"glyphicon glyphicon-open-file\"></span></a>";
	$td = $html->__td_fcc($n++);
	$jk = ($o['jk_siswa']=="A") ? "UNIT-1" : "UNIT-2";
	$td.= $html->__td_fcc($o['nis_siswa']);
	$td.= $html->__td_fcc($o['nama_siswa']);
	$td.= $html->__td_fcc($jk);
	$td.= $html->__td_fcc($o['kelas_siswa']);
	$td.= $html->__td_fcc($o['jurusan_siswa']);
	$td.= $html->__td_fcc($aksi);
	echo "<input type='hidden' name='id_siswa' id='id_".$o['id_siswa']."' value='".$o['id_siswa']."'>";
	echo $html->__tr_fcc($td);
}
?>
</table>
</div>
<script type="text/javascript">
		function edit_data_fcc(ida){
			$(document).ready(function(){
				$.ajax({
					url : '__action__.php?a=edit',
					type : 'POST',
					data : $(ida).serialize(),
					success:function(data){
						var loadedit = "__action__.php?a=edit&"+$(ida).serialize();
						$("#table").load(loadedit);
					},
					error:function(data){
						alert('error !');
					}
				});
			});
		
		}
		function delete_data_fcc(id){
			var ya=confirm('CONFIRM DELETE ? ');
			if(ya == true){
				$.ajax({
					url : '__action__.php?a=delete',
					type : 'POST',
					data : $(id).serialize(),
					success:function(data){
						if(data == "ok")
						{
						  $('#sukses').fadeIn().html('Success Delete Data ').fadeOut(2000);
						  $('#table').load('__action__.php?a=show');
						}else{
						 $('#gagal').fadeIn().html('Failed delete data');
						}
					},
					error:function(data){
						alert('Failed Proses data');
					}
				});
			}
		}
		 	function view_data_fcc(pk){
	 		$(document).ready(function(){
    $("#table").hide(100);
    $("#table").slideToggle();
    $("#table").load('__action__.php?a=show');
  });
        }
</script>
<?php
	}elseif ($a == "edit") {
		$id = $_GET['id_siswa'];
		$edit = $dbconf->__query_db_fcc($acon,"SELECT * FROM data_siswa WHERE id_siswa='$id'");
		$p=$dbconf->__fetch_db_fcc($edit);
		?>
		<div id="edit_area">
		 <form method="post" id="form_edit">
  <div class="form-group">
    <label for="name_edit">EDIT NAME </label>
    <input type="text" class="form-control" id="name_edit" name="name_edit" value="<?=$p['nama_siswa'];?>">
  </div>
  <div class="form-group">
    <label for="personalno_edit">EDIT PERSONAL NO</label>
    <input type="number" class="form-control" id="personalno_edit" name="personalno_edit" value="<?=$p['nis_siswa'];?>">
  </div>
   <!-- <div class="form-group">
    <label for="jk_edit">Jenis Kelamin</label>
    <select id="unit_edit" name="unit_edit" class="form-control">
    	<?php
    	if($p['jk_siswa']=="A"){
    		?>
    	<option value="A" selected>UNIT-1</option>
    	<option value="B">UNIT-2</option>
    	<?php
    }elseif($p['jk_siswa']=="B"){
    	?>
    	<option value="B" selected>UNIT-2</option>
    	<option value="A">UNIT-1</option>
    	<?php
    }
    ?>
    </select>
  </div>-->
  <div class="form-group">
    <label for="unit_edit">| UNIT |</label>
    <select id="unit_edit" name="unit_edit" class="form-control">
    	<option value="I">I</option><option value="II">II</option><option value="III">III</option>
      <option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option>
    </select>
  </div>
    <div class="form-group">
    <label for="jurusan_edit" >| AREA |</label>
    <select name="command_edit" id="command_edit" class="form-control">
    <option value="<?=$p['jurusan_siswa'];?>"><?=$p['jurusan_siswa'];?></option>
   	<option value="Western">WESTERN</option>
    <option value="Eastern">EASTERN</option>
    <option value="Southern">SOUTHERN</option>
    <option value="Central">CENTRAL</option>
   </select>  </div>
  <input type="hidden" name="id_siswa" value="<?=$_GET[id_siswa];?>" id="id_siswa">
  <button type="button" id="submit_edit" class="btn btn-default btn-lg">Submit</button>
  <a href="javascript:;" class="btn btn-default btn-lg" id="cancel_edit">Cancel</a>
</form>
<br><br><br>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#edit_area").hide(100);
		$("#edit_area").slideToggle();
		$("#success_edit").hide();
		$("#submit_edit").click(function(){
			$.ajax({
				url : '__action__.php?a=simpanedit',
				type : 'POST',
				data : $("#form_edit").serialize(),
				success:function(data){
					if(data == "ok")
					{
						$("#success").fadeIn().html("Success Edit Data !").fadeOut(2000);
						$("#table").load("__action__.php?a=show");
					}else{
						$("#success_edit").fadeIn().html(data);
					}
				},error:function(data){
					alert('error');
				}
			});
		});
		$("#cancel_edit").click(function(){
			$("#table").load("__action__.php?a=show");
		});
	});
</script>
		<?php
	}elseif ($a == "simpanedit") {
		$id = $_POST['id_siswa'];
		$name= $_POST['name_edit'];
		$personalno= $_POST['personalno_edit'];
		$command= $_POST['command_edit'];
		$jk= $_POST['jk_edit'];
		$unit=$_POST['unit_edit'];
		$edit = $dbconf->__query_db_fcc($acon,"UPDATE data_siswa SET nama_siswa='$name',nis_siswa='$personalno',jurusan_siswa='$command',kelas_siswa='$unit',jk_siswa='$jk' WHERE id_siswa='$id'");
		if($edit){
			echo "ok";
		}else{
			echo mysqli_error();
		}
	}
}
?>
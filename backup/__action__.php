<?php
include '__dbconf__.php';
if(empty($_GET['a'])){
	@header('location:index.php?');
}else{
	$a=$_GET['a'];
	if($a == "input")
	{
		if($_POST['__fcc_priv8_string__'] == __fcc_priv8_string()){
		$pincode=$_POST['pincode'];
		$name=$_POST['name'];
		$kelas=$_POST['kelas'];
		$unit=$_POST['unit'];
		$command=$_POST['command'];
		$insert=$dbconf->__query_db_fcc($acon,"INSERT INTO data_fcc VALUES('','$pincode','$name','$kelas','$unit','$command') ");
		if($insert){
			echo "ok";
		}else{
			echo "failed :(";
		}
	}else{
		header('HTTP/1.1 Not Found');
	}
	}elseif ($a == "delete") {
		$data = $_POST['id_fcc'];
		$delete = $dbconf->__query_db_fcc($acon,"DELETE FROM data_fcc WHERE id_fcc='$data' ");
		if($delete){
			echo "ok";
		}else{
			echo "failed";
		}
	}elseif ($a == "show") {
		?>
		<table class="table table-hover" id="tabel">
<?php
	$tr= $html->__th_fcc("No.").$html->__th_fcc("pincode").$html->__th_fcc("name").
	$html->__th_fcc("unit").$html->__th_fcc("Kelas").$html->__th_fcc("command").$html->__th_fcc("Action");
	echo $tr;

$q = $dbconf->__query_db_fcc($acon,"SELECT * FROM data_fcc ORDER BY pincode_fcc DESC");
$n=1;
$o=1;
while($o=$dbconf->__fetch_db_fcc($q))
{
	$Action = "<a href=\"javascript:delete_data_fcc('#id_".$o['id_fcc']."');\" class='btn btn-default'>
	<span class=\"glyphicon glyphicon-remove\"></span></a> <a href=\"javascript:edit_data_fcc('#id_".$o['id_fcc']."');\" class='btn btn-default'><span class=\"glyphicon glyphicon-pencil\"></span></a>";
	$td = $html->__td_fcc($n++);
	$unit = ($o['unit_fcc']=="A") ? "UNIT-1" : "UNIT-2" : "UNIT-3" : "UNIT-4" : "UNIT-5" : "UNIT-6" : "UNIT-7" : "UNIT-8" : "UNIT-9" : "UNIT-10";
	$td.= $html->__td_fcc($o['pincode_fcc']);
	$td.= $html->__td_fcc($o['name_fcc']);
	$td.= $html->__td_fcc($unit);
	$td.= $html->__td_fcc($o['kelas_fcc']);
	$td.= $html->__td_fcc($o['command_fcc']);
	$td.= $html->__td_fcc($Action);
	echo "<input type='hidden' name='id_fcc' id='id_".$o['id_fcc']."' value='".$o['id_fcc']."'>";
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
			var ya=confirm('DO YOU WANT TO DELETE ? ');
			if(ya == true){
				$.ajax({
					url : '__action__.php?a=delete',
					type : 'POST',
					data : $(id).serialize(),
					success:function(data){
						if(data == "ok")
						{
						  $('#success').fadeIn().html('Success Delete Data ').fadeOut(2000);
						  $('#table').load('__action__.php?a=show');
						}else{
						 $('#danger').fadeIn().html('Failed delete data');
						}
					},
					error:function(data){
						alert('Failed Process data');
					}
				});
			}
		}
</script>
<?php
	}elseif ($a == "edit") {
		$id = $_GET['id_fcc'];
		$edit = $dbconf->__query_db_fcc($acon,"SELECT * FROM data_fcc WHERE id_fcc='$id'");
		$p=$dbconf->__fetch_db_fcc($edit);
		?>
		<div id="edit_area">
		<a href="javascript:;" class="btn btn-default btn-lg" id="cancel_edit">Cancel</a>
		 <form method="post" id="form_edit">
  <div class="form-group">
    <label for="name_edit">Name </label>
    <input type="text" class="form-control" id="name_edit" name="name_edit" value="<?=$p['name_fcc'];?>">
  </div>
  <div class="form-group">
    <label for="pincode_edit">PIN CODE</label>
    <input type="number" class="form-control" id="pincode_edit" name="pincode_edit" value="<?=$p['pincode_fcc'];?>">
  </div>
    <div class="form-group">
    <label for="unit_edit">UNIT</label>
    <select id="unit_edit" name="unit_edit" class="form-control">
    	<?php
    	if($p['unit_fcc']=="A"){
    		?>
    	<option value="A" selected>UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
     	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="B"){
    	?>
    	<option value="B" selected>UNIT-2</option>
    	<option value="A">UNIT-1</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
     	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="C"){
    	?>
    	<option value="C" selected>UNIT-3</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
      	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="D"){
    	?>
    	<option value="D" selected>UNIT-4</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
      	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="E"){
    	?>
    	<option value="E" selected>UNIT-5</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
      	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="F"){
    	?>
    	<option value="F" selected>UNIT-6</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
      	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="G"){
    	?>
    	<option value="G" selected>UNIT-7</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="H">UNIT-8</option>
      	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="H"){
    	?>
    	<option value="H" selected>UNIT-8</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="I">UNIT-9</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="I"){
    	?>
    	<option value="I" selected>UNIT-9</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
      	<option value="J">UNIT-10</option>
    	<?php
    }elseif($p['unit_fcc']=="J"){
    	?>
    	<option value="J" selected>UNIT-10</option>
    	<option value="A">UNIT-1</option>
      	<option value="B">UNIT-2</option>
      	<option value="C">UNIT-3</option>
      	<option value="D">UNIT-4</option>
      	<option value="E">UNIT-5</option>
      	<option value="F">UNIT-6</option>
      	<option value="G">UNIT-7</option>
      	<option value="H">UNIT-8</option>
      	<option value="I">UNIT-9</option>
    	<?php
    }
    	?>
    </select>
  </div>
  <div class="form-group">
    <label for="kelas_edit">Kelas</label>
    <select id="kelas_edit" name="kelas_edit" class="form-control">
    	<option value="X">X</option><option value="XI">XI</option><option value="XII">XII</option>
    </select>
  </div>
    <div class="form-group">
    <label for="command_edit" >| AREA |</label>
    <select name="command_edit" id="command_edit" class="form-control">
    <option value="<?=$p['command_fcc'];?>"><?=$p['command_fcc'];?></option>
   	<option value="western">WESTERN</option>
   	<option value="eastern">EASTERN</option>
   	<option value="southern">SOUTHERN</option>
   	<option value="central">CENTRAL</option>
   </select>  </div>
  <input type="hidden" name="id_fcc" value="<?=$_GET[id_fcc];?>" id="id_fcc">
  <button type="button" id="submit_edit" class="btn btn-default btn-lg">Submit</button>
</form>
<br><br><br>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#edit_area").hide(100);
		$("#edit_area").slideToggle();
		$("#sukses_edit").hide();
		$("#submit_edit").click(function(){
			$.ajax({
				url : '__action__.php?a=simpanedit',
				type : 'POST',
				data : $("#form_edit").serialize(),
				success:function(data){
					if(data == "ok")
					{
						$("#sukses").fadeIn().html("Success Edit Data !").fadeOut(2000);
						$("#table").load("__action__.php?a=show");
					}else{
						$("#sukses_edit").fadeIn().html(data);
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
		$id = $_POST['id_fcc'];
		$name= $_POST['name_edit'];
		$pincode= $_POST['pincode_edit'];
		$command= $_POST['command_edit'];
		$unit= $_POST['unit_edit'];
		$kelas=$_POST['kelas_edit'];
		$edit = $dbconf->__query_db_fcc($acon,"UPDATE data_fcc SET name_fcc='$name',pincode_fcc='$pincode',command_fcc='$command',kelas_fcc='$kelas',jk_fcc='$jk' WHERE id_fcc='$id'");
		if($edit){
			echo "ok";
		}else{
			echo mysqli_error();
		}
	}
}
?>





<?php
      if($p['jk_siswa']=="A"){
        ?>
      <option value="A" selected>UNIT-1</option>
      <option value="B">UNIT-2</option>
      <option value="C">UNIT-3</option>
      <?php
    }elseif($p['jk_siswa']=="B"){
      ?>
      <option value="B" selected>UNIT-2</option>
      <option value="A">UNIT-1</option>
      <option value="C">UNIT-3</option>
      <?php
    }elseif($p['jk_siswa']=="C"){
      ?>
      <option value="C" selected>UNIT-3</option>
      <option value="A">UNIT-1</option>
      <option value="B">UNIT-2</option>
      <?php
    }
    ?>
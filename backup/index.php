<?php
include '__dbconf__.php';
$priv = __fcc_priv8_string();
?>
<!DOCTYPE html>
<html>
<head>
  <title>~TEST PROJECT~</title>
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
<p>TEST PROJECT FOR NEW GEN. WEB DATA PRESENTATION | c0ded By : <b>PK MOHANTY</b></p>
</div>
<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> CREATE / ADD </button>
<br><br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> CREATE / ADD </h4>
      </div>
      <div class="modal-body">
      <div class="alert alert-success" id="SUCCESS"></div>
         <form method="post" id="form">
  <div class="form-group">
    <label for="name">NAME</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="pincode">PIN CODE</label>
    <input type="number" class="form-control" id="pincode" name="pincode" required>
  </div>
    <div class="form-group">
    <label for="unit">|UNIT|</label>
    <select id="unit" name="unit" class="form-control">
      <option value="A">UNIT-1</option>
      <option value="B">UNIT-2</option>
      <option value="C">UNIT-3</option>
      <option value="D">UNIT-4</option>
      <option value="E">UNIT-5</option>
      <option value="F">UNIT-6</option>
      <option value="G">UNIT-7</option>
      <option value="H">UNIT-8</option>
      <option value="I">UNIT-9</option>
      <option value="J">UNIT-10</option>
    </select>
  </div>

  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select id="kelas" name="kelas" class="form-control">
      <option value="X">X</option><option value="XI">XI</option><option value="XII">XII</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="datetimepicker1">DATE</label>
    <div class='input-group date' id="datetime" readonly>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
    </div>
  </div>
  
  <div class="form-group">
  <label for="command" name="command" >| AREA |</label>
  <select name="command" id="command" class="form-control">
    <option value="western">WESTERN</option>
    <option value="eastern">EASTERN</option>
    <option value="southern">SOUTHERN</option>
    <option value="central">CENTRAL</option>
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
    $("#success").hide();
    $("#SUCCESS").hide();
    $("#danger").hide();
$("#submit").click(function(){
$.ajax({
  url : '__action__.php?a=input',
  type : 'POST',
  data : $('#form').serialize(),
  success:function(data){
    if(data == "ok"){
      $("#SUCCESS").fadeIn().html("DATA ADDED SUCCESSFULLY").fadeOut(2000);
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
<div class="alert alert-success" id="success"></div>
<div class="alert alert-danger" id="danger"></div>
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
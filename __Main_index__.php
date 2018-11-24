<?php
include '__dbconf__.php';
$priv = __fcc_priv8_string();
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
<head>
  <title>~TEST PROJECT~</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/crud_style.css">
  <script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                          <li> <img src="./assets/images/ce.png" alt="CE" class="tlogo"> </li>
                        <li class="active"><a href="index.php">Home</a></li>
                    </ul>

                </div>
            </div>
        </nav>
<div class="container container-fluid">
<br>
<br>
<div class="header">
<h1>~ DATA MINING ~</h1>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> CREATE / ADD </button>
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
    <label for="personalno">PERSONAL NO</label>
    <input type="number" class="form-control" id="personalno" name="personalno" required>
  </div>
   <!--  <div class="form-group">
    <label for="unit">|UNIT|</label>
    <select id="unit" name="unit" class="form-control">
      <option value="A">UNIT-1</option>
      <option value="B">UNIT-2</option>
      <option value="C">UNIT-3</option>
      
    </select>
  </div>-->

  <div class="form-group">
    <label for="unit">|UNIT|</label>
    <select id="unit" name="unit" class="form-control">
      <option value="I">I</option><option value="II">II</option><option value="III">III</option>
      <option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option>
    </select>
  </div>
  <div class="form-group">
    <label for="datetimepicker1">DATE</label>
    <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
    </div>
  </div>
 
  <div class="form-group">
  <label for="command" name="command" >| AREA |</label>
  <select name="command" id="command" class="form-control">
    <option value="Western">WESTERN</option>
    <option value="Eastern">EASTERN</option>
    <option value="Southern">SOUTHERN</option>
    <option value="Central">CENTRAL</option>
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
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    defaultDate: "01/1/2018",
                    disabledDates: [
                        moment("12/25/2018"),
                        new Date(2018, 11 - 1, 21),
                        "11/22/2018 00:53"
                    ]
                });
            });
        </script>

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
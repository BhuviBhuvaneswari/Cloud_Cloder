<?php include('../common/header.php');  ?>
<html>
<head>
<style>
ul.theme {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 60;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li.theme {
    float: left;
}

li a.theme {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active).theme {
    background-color: #367AB7;
    color: white;
}

li a.active.theme {
    color: white;
    background-color: #367AB7;
}
</style>
</head>
<body>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
<h3 class="page-header">Manage Exercise</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

                  <div class="row">


                      <div class="col-lg-3 col-md-6">
                    <div >
                      <h4>  Year</h4>
                    </div>
                  <select name="ptype"  class="col-md-21 form-control">
                    <optgroup><option>I Year</option>
                      <option>II Year</option>
                      <option>III Year</option>
                      <option value="">IV Year</option>
                    </optgroup>
                  </select>
                </div>



                <div class="col-lg-3 col-md-6">
                <div><h4> Department</h4></div>
            <select name="ptype"  class="col-md-21 form-control">
              <optgroup><option>CSE</option>
                <option>IT</option>
                <option>MECH</option>
                <option value="">ECE</option>
                <option>CIVIL</option>
              </optgroup>
            </select>
          </div>


            <div class="col-lg-3 col-md-6">
          <div >
            <h4> Section</h4>
          </div>
        <select name="ptype"  class="col-md-21 form-control">
          <optgroup><option>Class A</option>
            <option>Class B</option>
            <option>Class C</option>
          </optgroup>
        </select>
      </div>

              </div>
<br>
<div class="row">
  <ul class="theme" style="width:60;" >
    <li class="theme"><a class="theme" href="manage_exercise_add.php">Add Exercide</a></li>
    <li class="theme"><a class="theme" href="#news">Edit Exercise</a></li>
    <li class="theme"><a class="theme" href="#contact">Delete Exercise</a></li>
    <li class="theme"><a class="theme" href="#about">Import</a></li>
    <li class="theme"><a class="theme" href="#about">Share</a></li>
    <li class="theme"><a class="active theme" href="manage_exercise_visibility.php">Visibility</a></li>
  </ul>
</div><br><br><br><br><br>
<div class="row"><h4>
<form><center>
    <label class="radio-inline">
      <input type="radio" name="enable">Enable Visibility
    </label><br><br>
    <label class="radio-inline">
      <input type="radio" name="disable">Disable Visibility
    </label></h4><br><br>
    <li class="form-line" data-type="control_button">
      <div class="form-input-wide">
        <div class="form-buttons-wrapper">
        <center>  <button type="submit" class="form-submit-button" data-component="button"style="padding:8px 20px; font-size:20px;">
            Ok
          </button>
        </center></div>
      </div>
    </li>
  </center>
</form>
</div>
</div>
</body>
</html>

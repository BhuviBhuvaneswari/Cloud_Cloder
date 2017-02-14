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
        <div id="page-wrapper" style="height:100%; padding-left:50px;" >
            <div class="row">
                <div class="col-lg-6">
<h3 class="">Manage Exercise</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

                  <div class="row">


                      <div class="col-lg-3 col-md-6">
                    <div >
                      <h4>  Year</h4>
                    </div>
                  <select name="ptype"  class="col-md-6 form-control">
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
    <li class="theme"><a class="active theme" href="manage_exercise_add.php">Add Exercide</a></li>
    <li class="theme"><a class="theme" href="#news">Edit Exercise</a></li>
    <li class="theme"><a class="theme" href="#contact">Delete Exercise</a></li>
    <li class="theme"><a class="theme" href="#about">Import</a></li>
    <li class="theme"><a class="theme" href="#about">Share</a></li>
    <li class="theme"><a class="theme" href="manage_exercise_visibility.php">Visibility</a></li>
  </ul>
</div>



  <div style="margin:30px;padding:20px;height:100%;">
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Problem Type</b></label>
  								<div class="col-sm-9">
  									<select name="ptype" class="col-sm-3">
  										<option selected="selected">Select problem Type</option>
  										<option>c</option>
  										<option>c++</option>
  										<option>java</option>
  										<option>python</option>
  										<option>python3</option>
  										<option>PHP</option>
  									</select>
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Problem Name</b></label>
  								<div class="col-sm-9">
  									<input name="pname" class="col-sm-3" type="text">
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Brief Description</b></label>
  								<div class="col-sm-9">
  									<input name="bdes" class="col-sm-3" type="text">
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Full Description(HTML)</b></label>
  								<div class="col-sm-9">
  									<textarea rows="3" style="width:600px;background-color:#d9d9d9" name="fdes" class="col-sm-3" autofocus="" onchange="ValidatePassKey(this)"></textarea>


  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Skeleton Code</b></label>
  								<div class="col-sm-9">
  									<textarea rows="3" id="1" name="scode" style="width:600px;background-color:#d9d9d9" class="col-sm-3"></textarea>
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Author Name</b></label>
  								<div class="col-sm-9">
  									<input name="aname" class="col-sm-3" type="text">
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Author Email</b></label>
  								<div class="col-sm-9">
  									<input name="aemail" class="col-sm-3" type="text">
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Website</b></label>
  								<div class="col-sm-9">
  									<input name="web" class="col-sm-3" type="text">
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>Creation Date</b></label>
  								<div class="col-sm-9">
  									<input class="datepicker hasDatepicker" id="datepicker" name="creation_date" style="width:205px" value="02/06/2017" type="text">
  								</div>
  							</div>

  							<div class="form-group">
  								<label class="col-sm-3 control-label no-padding-right"><b>License</b></label>
  								<div class="col-sm-9">
  									<select name="lic" class="col-sm-3">
  										<option selected="selected">Select license</option>
  										<option>NOT REDISTRIBUTABLE</option>
  									</select>
  								</div>
  							</div>
                <!--	<div class="form-group" >
                                <label class="col-sm-3 control-label no-padding-right"><b>URL for Required External Library</b></label>
                                <div class="col-sm-9">
                                <input type="text" name="bdes"  class="col-sm-3">
                                </div>
                                </div>
                                <div class="form-group" >
                                <label class="col-sm-3 control-label no-padding-right"><b>MD5 checksum of required external library</b></label>
                                <div class="col-sm-9">
                                <input type="text" name="bdes"  class="col-sm-3">
                                </div>
                                </div> -->
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right"><b>When assigned</b></label>
								<div class="col-sm-2">
									<input class="datepicker hasDatepicker" id="datepicker2" style="width:205px" name="assigned_date" readonly="readonly" value="02/06/2017" type="text">
								</div>
								<div class="col-sm-5" style="padding-left:30px">
									<label class="col-sm-5 control-label no-padding-right"><b>Time (HH:MM)</b></label>
									<input style="margin-left:5px" name="time1" id="e1" value="11:33" class="col-sm-3" type="text">
									<script>
										function display_ct() {
											var strcount
											var x = new Date()
											var x1=x.getMonth() + "/" + x.getDate() + "/" + x.getYear();
											x1 =  x.getHours( )+ ":" +  x.getMinutes() ;
											//document.getElementById('ct').innerHTML = x1;

											//tt=display_c();
											document.getElementById('e1').value = x1;
										}

										display_ct();
									</script>
								</div>

							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right"><b>When due</b></label>
								<div class="col-sm-2">
									<input style="width:205px" class="datepicker hasDatepicker" id="datepicker3" name="due_date" readonly="readonly" value="02/06/2017" type="text">
								</div>
								<div class="col-sm-5" style="padding-left:30px">
									<label class="col-sm-5 control-label no-padding-right"><b>Time (HH:MM)</b></label>
									<input style="margin-left:5px" name="time2" id="e2" value="11:33" class="col-sm-3" type="text">
									<script>
										function display_c() {
											var strcount
											var x = new Date()
											var x1=x.getMonth() + "/" + x.getDate() + "/" + x.getYear();
											x1 =  x.getHours( )+ ":" +  x.getMinutes() ;
											//document.getElementById('ct').innerHTML = x1;

											//tt=display_c();
											document.getElementById('e2').value = x1;
										}

										display_c();
									</script>
								</div>

							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right"><b>Problem Visible to students</b></label>
								<div class="col-sm-9">
									<input name="pv" value="" style="margin-left:5px" type="checkbox"><b>Check to make problem visible to students</b>
								</div>
							</div>
							<div class="form-group" style="" id="main">
								<div class="col-md-offset-3 col-md-4">
									<input class="btn btn-primary btn-md" name="save" value="Save Problem!" type="submit">
									<input class="btn btn-primary bt" id="btAdd" name="submit" value="Save Test Case" type="submit">
									<!--   <input class="btn btn-primary bt" type="button" id="btRemove" value="Reset" class="bt" />  -->

								</div>
							</div>


							<script>
								function addMore() {
									$("<DIV>").load("input.php", function() {
										$("#product").append($(this).html());
									});
								}
								function deleteRow() {
									$('DIV.product-item').each(function(index, item){
										jQuery(':checkbox', this).each(function () {

											$(item).remove();

										});
									});
								}
							</script>

							<div id="outer">
								<div id="header">
									<div class="float-left">&nbsp;</div>
									<!--<DIV class="float-left col-heading">Item Name</DIV>
                                    <DIV class="float-left col-heading">Item Price</DIV> -->
								</div>
								<div id="product">

<div style="margin:20px">
<div class="product-item float-clear" style="padding:20px;clear:both;border:2px solid #808000;width:600px">

<div class=""><label><b>Test Input</b></label><input name="test_input[]" type="text"></div><br>
<div class="float-left"><label><b>Test Output</b></label><input name="test_output[]" type="text"></div><br>
<div class="float-left"><label><b>Secret</b></label>
<input name="test_index[]" type="checkbox">If checked, the test is secret (not revealed to students)</div>

</div>
</div>								</div>
								<div class="btn-action float-clear">
									<div class="col-md-offset-3 col-md-4">
										<input class="btn btn-primary bt" name="add_item" value="Add Test Case" onclick="addMore();" type="button">
										<input class="btn btn-primary bt" name="del_item" value="Delete" onclick="deleteRow();" type="button">
									</div>
									<span class="success"></span>
								</div>
								<div class="footer">

								</div>
							</div>





</div>
</div>

</div>
          </body>
          </html>

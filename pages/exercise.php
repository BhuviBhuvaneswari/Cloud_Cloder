<?php include('../common/header.php');  ?>
<html>
<body>
  <div id="page-wrapper" style="padding-right:50px;">
  <form method="post" action="" target="_self">
	<div class="tab-content container" id="h4">
		<div id="home4" class="tab-pane in active">


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

			<div class="row">
				<div><!--form start-->

						<!--	<nav>
                                <label>
                                    <u><b style="font-size:20px">Exercise Description</b></u>
                                </label><br>
                                <div id="edes"><script>docment.write($text);</script></div>
                            </nav> -->

						<article width="100%">
							<div>
								<label>
									<h3>Exercises</h3>
								</label>
								<select style="margin-left:300px;">
									<option value="select">All Modules</option>
									<option value="1"> A1-Array</option><option value="2"> A1-Basic</option><option value="3"> A1-Function</option><option value="4" selected="selected"> Loop</option>								</select>
								<input style="margin-left:10px;" class="btn btn-info" name="refresh" value="Refresh" type="submit">
								<a style="margin-left:10px;" class="btn btn-info" id="e">Load Exercise</a>
								<br>


																<table style="width:100%;" id="" class="table table-bordered">
									<thead>
									<tr>

										<th>Name</th>
										<th style="display: none;">Description</th>
										<th>Due</th>
										<th>Status</th>
									</tr>
									</thead>
									<tbody>
																		</tbody>
								</table>





				</div>
				</article>

			</div><!-- /.main-content -->
		</div></div></div></form>

</div>
</body>
</html>

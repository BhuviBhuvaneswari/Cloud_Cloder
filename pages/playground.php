<?php include('../common/header.php');  ?>
<html>
<head>
<style type="text/css" media="screen">
.ace_editor {
  border: 1px solid lightgray;
  margin: auto;
  height: 300px;
  width: 80%;
}
</style>
</head>
<body>
        <div id="page-wrapper">
          <div class="row">
          <div class="col-lg-12">
          <h1 class="page-header">Playground</h1>
        </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="row">
                          <select id="mode" size="1" class="col-sm-40 form-input jf-required form-control">             <optgroup>
                          <option value="c_cpp">C and C++</option>
                          <option value="java">Java</option>
                          <option value="python">Python</option>
                          <option value="javascript">JavaScript</option>
                          <option value="sql">SQL</option>
                          <option value="ruby">Ruby</option>
                        </select><h4>Language</h4>


                          </optgroup>

                        </div>
                        </div>
                      </div>
                      <!--Editor-->
                      <hr />

                      <pre id="editor">
#include&lt;conio.h&gt;
#include&lt;stdio.h&gt;
int main(){
int a=45;
printf("hello");
getch();
}"
</pre><br>

                      <!--Editor and theme Script-->
                      <script src="ace.js"></script>
                      <script src="ext-themelist.js"></script>
                      <!--Editor Script-->
                      <script>
                      var mod= "c_cpp";
                      var editor = ace.edit("editor");
                      editor.setTheme("ace/theme/twilight");
                      editor.session.setMode("ace/mode/c_cpp");
                      editor.renderer.setScrollMargin(10,300);
                      </script>
                    </div>

                    <!-- /. PAGE INNER  -->
                  </div>

                  <!-- /. PAGE WRAPPER  -->
                </div>



        </body>
        </html>

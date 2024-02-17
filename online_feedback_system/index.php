<?php
require('header.php');
?>
<html>
<head> <style>
.pan-head {
color: #344e41;
background-color: #a3b18a;
border-color: #d6e9c6;
height: 41px;
padding: 10px 15px;
border-bottom: 1px solid transparent;
border-top-left-radius: 3px;
border-top-right-radius: 3px;
}
</style></head>
</html>
<br /><br />
<div class="container">
<div class="row" style="margin-left: -250px;">
<!-- <h3 class="form-signin-heading">Please Login here...</h3><br/>-->
<div class="col-md-3">&nbsp;
</div>
<div class="col-md-3">
<div class="panel panel-success">
<div class="pan-head">Student Login</div>
<div class="panel-body">
<form class="form-signin" role="form" action="student.php"
method=
"post"><br/><br/>
<div class="input-group">
<span class="input-group-addon" id="sizing-
addon2"><i class="glyphicon glyphicon-user text-primary"></i></span>
<input type="text" class="form-control"
placeholder="Admission Number" name="sid" pattern="[0-9]{2}[0-9a-ZA-Z]{2}[0-
9]{1}[a-zA-Z]+[0-9]{4}" title="Only Alphabets, digits are allowed with a
maximum of 10 characters" maxlength="10" required autofocus />
</div><br/>
<div class="input-group">
<span class="input-group-addon" id="sizing-
addon2"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control"
placeholder="Password" name="pwd" required />
</div>
<br/>

<button class="btn btn-md btn-primary btn-block"
type="submit">Log in</button>
</form>
<br />
<p align="right"><a href="forgot.php"> Forgot Password?</a></p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="panel panel-success">
<div class="pan-head">Staff/Admin Login</div>
<div class="panel-body">
<form class="form-signin" role="form" action="staff.php"
method="post"><br/><br/>
<div class="input-group">
<span class="input-group-addon" id="sizing-
addon2"><i class="glyphicon glyphicon-user text-primary"></i></span>
<input type="text" class="form-control"
placeholder="Username" name="sname" required autofocus />
</div><br/>
<div class="input-group">
<span class="input-group-addon" id="sizing-
addon2"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control"
placeholder="Password" name="spwd" required />
</div>
<br/>
<button class="btn btn-md btn-primary btn-block"
type="submit">Log in</button>
</form>
<br />
<p align="right"><a href="forgot.php"> Forgot Password?</a></p>
</div>
</div>
</div>
<div class="col-md-3">&nbsp;
</div>
</div>
</div> <!-- /container -->
<?php
require('footer.php');
?>
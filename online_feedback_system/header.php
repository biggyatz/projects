<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Feedback System</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="print"
href="css/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script
src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script
src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
/* Sticky footer styles
-------------------------------------------------- */
html {
position: relative;
min-height: 100%;
}
body {
/* Margin bottom by footer height */
margin-bottom: 60px;
/*background-color: #DFE2DB;
background-color: #FDF3E7;*/
background-color: #F5F3EE;
}
.footer {
position: absolute;
bottom: 0;
width: 100%;
/* Set the fixed height of the footer here */
height: 60px;
background-color: #f5f5f5;
}
47 | P a g e
.labelapply3{
padding-top: 1px !important;
}
.nav1{
background: #1a243f;
margin-right:0.1em;
}
.vit{
display:flex;
margin-left:0.6em;
margin-top:1.8rem;
margin-bottom:0.6em;
float:left;
font-size:30px;
margin-right:6.4em;
}
.txt_left{
display:flex;
margin-top:1.8rem;
margin-bottom:0.6em;
float:left;
font-size:30px;
margin-right:1em;
}
.txt_right{
display:flex;
margin-top:1.8rem;
margin-bottom:0.6em;
float:right;
margin-left:1em;
font-size:30px;
}
.feed{
margin-top:1.8rem;
margin-bottom:0.6em;
font-size:30px;
margin-right:0em;
color:#a3b18;
}
48 | P a g e
.logo{
align:center;
margin-right:0.5em;
}
.container {
padding-right: 5px;
padding-left: 5px;
margin-right: 0em;
margin-left: 1em;
width: 1450px;
}
.col-md-3 {
width: 25%;
margin-right: 6.0em;
}
.doprint{
display: none;
}
@media print {
.dontprint { display: none !important; }
.doprint { display: block !important; }
}
.text-success{
color:#fff;
}
</style>
<script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top dontprint nav1">
<div class="container">
<div class="txt_left">
<br>
<span class="text-primary logo"><img class="logo"
src="https://iqac.vit.ac.in/images/vit-logo-only.png" width="70px"
height="70px"></span>
<span class="text-primary vit">VELLORE INSTITUTE OF
TECHNOLOGY</span>
</div>
<div class="txt_right">
<span class="text-success feed">Online Feedback System </span>

</div>
</div>
</div>
</nav
<?php ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="login_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  <style>
  body
{
 text-align:center;
 width:100%;
 margin:0 auto;
 padding:0px;
 background-color:#21610B;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#login_div
{
 background-color:white;
 padding:20px;
 max-width:300px;
 margin-left:345px;
}
#login_div button
{
 margin-top:20px;
 height:40px;
 width:100%;
}
#login_div #register
{
 margin-top:20px;
 float:left;
}
#login_div #forgot
{
 margin-top:20px;
 float:right;
}
  </style>
</head>
<body>
<div id="wrapper">

<div id="login_div">
<form method="post">

<div class="input-field">
<i class="mdi-social-person-outline prefix"></i>
<input class="validate" id="email" type="email">
<label for="email" data-error="wrong" data-success="right" class="center-align">Enter Your Email</label>
</div>

<div class="input-field">
<i class="mdi-action-lock-outline prefix"></i>
<input id="password" type="password">
<label for="password">Password</label>
</div>
        
<div class="input-field">
<input type="checkbox" id="remember-me"/>
<label for="remember-me">Remember me</label>
</div>

<div class="input-field">
<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
</div>

<p>
<a href="#" id="register">Register Now!</a>
<a href="#" id="forgot">Forgot password?</a>
</p>

<br>
<br>
</form>
</div>

</div>
</body>
</html>

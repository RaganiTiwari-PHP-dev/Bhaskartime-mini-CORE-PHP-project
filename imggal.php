<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/all.css" rel="stylesheet"/>
<style>
.ico{
font-size:22px;
padding:2px;
transition:all 1s;
}
:root{
--mycolor:linear-gradient(45deg,#B71C1C,#B71C1C);
--txtmycolor:#f50057;
}
.txt-mycolor{
color:var(--txtmycolor);
}
.bg-mycolor{
background:var(--mycolor);
}
#menu ul{
margin:0px auto;
font-size:22px;
}
.navbg{
background:white;
}
#menu ul li a{
color:#B71C1C !important;
}

</style>
</head>
<body>
<div class="container-fluid">
<div class="row ttop bg-light text-center py-1 bg-mycolor text-light">
<div class="col-lg-6 col-md-6 col-sm-12">
<i class="fa-solid fa-envelope"></i>
info@bhaskartimes.in
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<i class="fa-brands fa-facebook ico"></i>
<i class="fa-brands fa-twitter ico"></i>
<i class="fa-brands fa-youtube ico"></i>
<i class="fa-brands fa-instagram ico"></i>
</div>
</div>
<div class="row">
<div class="col-sm-12 font">
<center>
<img src="images/logo.png" class="img-fluid" style="max-height:150px;"/>
</center>
</div>
</div>
<div class="row">
<div class="col-sm-12 navbg">
<!--start menu-->
<nav id="menu" class="navbar navbar-expand-lg navbar-light m-0 p-0">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">
		  <i class="fa-solid fa-house"></i>
		   Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html"><i class="fa-solid fa-circle-info"></i> About Us</a>
        </li>        
		<li class="nav-item">
          <a class="nav-link" href="Newsmenu.html"><i class="fa-solid fa-newspaper"></i> News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fa-solid fa-image"></i> Gallery
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item disabled" href="vdogal.html">Video</a></li>
            <li><a class="dropdown-item disabled" href="imggal.html">Image</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.html"><i class="fa-solid fa-envelope"></i> Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="blog.html"><i class="fa-solid fa-blog"></i> Blog</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Feedback.html"><i class="fa-solid fa-comment"></i> Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--end menu-->
</div>
</div>

<!--Footer-->
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 text-bg-dark p-4">
<center>
<img src="images/logo.png" class="img-fluid" style="max-height:150px;"/>
</center>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 text-bg-dark">
<p class="text-light p-4">Bhaskar Times, is an Indian English-language daily newspaper and digital news media owned and managed by Bhaskar Times Group. It is the fourth-largest newspaper in India by circulation and largest selling English-language daily in the world.</p>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 text-bg-dark">
<img src="images/play.png" class="img-fluid pt-4" style="max-height:100px;"/><br/>
<img src="images/gem.png" class="img-fluid pt-2" style="max-height:85px;"/>
</div>
</div>
<!--footer end-->
</div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
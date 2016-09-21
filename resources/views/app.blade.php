<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div class="container">
 <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <img class="background" src="{{ asset('img/technology.jpg') }}">
      <a href="#!user"><img class="circle" src="{{ asset('img/somrat.jpg') }}"></a>
      <a href="#!name"><span class="black-text name">G. M. Nazmul Hossain Somrat</span></a>
      <a href="#!email"><span class="black-text email">eng.nazmulhossain@gmail.com</span></a>
    </div></li>
    <li><a href="#">Home</a></li>
    <li><a href="#">Task List</a></li>
    <li><div class="divider"></div></li>
    <li><a href="http://www.somrat.info/">ABOUT ME</a></li>
  </ul>
  
   <nav class="#00897b teal darken-1">
    <div class="nav-wrapper">
    <a href="#" data-activates="slide-out" class="button-collapse" style="
    display: -webkit-box;"><i class="material-icons">menu</i></a>
    <a href="#!" class="brand-logo center">To Do List</a>
    </div>
  </nav>
 
</div>
<div class="container">
  
</div>


<script type="text/javascript" src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript">
   $(document).ready(function(){
  $(".button-collapse").sideNav();
   });   
</script>
</body>
</html>
      
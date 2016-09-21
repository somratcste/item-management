<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div class="container">
<ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <img class="background" src="images/office.jpg">
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

  
  <nav>
    <div class="nav-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
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
      
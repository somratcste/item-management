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

<ul id="slide-out" class="side-nav fixed">
    <li><div class="userView">
      <img class="background" src="{{ asset('img/technology.jpg') }}">
      <a href="#!user"><img class="circle" src="{{ asset('img/somrat.jpg') }}"></a>
      <a href="#!name"><span class="black-text name">G. M. Nazmul Hossain</span></a>
      <a href="#!email"><span class="black-text email">eng.nazmulhossain@gmail.com</span></a>
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
      <a href="#" class="brand-logo center">Task Management</a>
    </div>
  </nav>
    
 <div class="container">   
 
    Navbar goes here

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens 

      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens 

      </div>

    </div>
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
      
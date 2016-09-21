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
<div class="row"> 
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
</div>
<div class="container">
  <div class="row">
    <h4>Task Management</h4>
  </div>
  <div class="row">
    <table class="striped responsive-table">
        <thead>
          <tr>
              <th>No</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td width="5%">Alvin</td>
            <td width="15%">Eclair</td>
            <td width="40%">$0.87</td>
            <td width="20%"><a class="waves-effect waves-light btn #0d47a1 blue darken-4 modal-trigger" href="#modaledit">Edit</a>
            <!-- Modal Structure -->
            <div id="modaledit" class="modal">
              <div class="modal-content">
                <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="first_name" type="text" class="validate" value="Task1">
                      <label for="Title">Title</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <textarea id="textarea1" class="materialize-textarea">It is good.</textarea>
                      <label for="textarea1">Description</label>
                    </div>
                  </div>
                </form>
              </div>
                  
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close #1b5e20 green darken-4 btn-flat ">Update</a>
              </div>
            </div>

            <a class="waves-effect waves-light btn #ff1744 red accent-3 modal-trigger" href="#modaldelet">Delete</a>
            <!-- Modal Structure -->
            <div id="modaldelet" class="modal">
              <div class="modal-content">
                <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="black-text">Do you want to delete this ? </label>
                    </div>
                  </div>
                </form>
              </div>
                  
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close #1b5e20 green darken-4 btn-flat">No</a> <a href="#!" class="modal-action modal-close #1b5e20 green darken-4 btn-flat" style="margin-right: 6px;">Yes</a>
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td width="5%">Alvin</td>
            <td width="15%">Eclair</td>
            <td width="40%">$0.87</td>
            <td width="20%"><a class="waves-effect waves-light btn #0d47a1 blue darken-4">Edit</a> <a class="waves-effect waves-light btn #ff1744 red accent-3">Delete</a></td>
          </tr>
          <tr>
            <td width="5%">Alvin</td>
            <td width="15%">Eclair</td>
            <td width="40%">$0.87</td>
            <td width="20%"><a class="waves-effect waves-light btn #0d47a1 blue darken-4">Edit</a> <a class="waves-effect waves-light btn #ff1744 red accent-3">Delete</a></td>
          </tr>
        </tbody>
      </table>
  </div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Title" id="first_name" type="text" class="validate">
          <label for="Title">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" placeholder="Description"></textarea>
          <label for="textarea1">Description</label>
        </div>
      </div>
    </form>
  </div>
      
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close #1b5e20 green darken-4 btn-flat ">Create New</a>
  </div>
</div>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect red modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
</div>

<script type="text/javascript" src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript">
   $(document).ready(function(){
      $(".button-collapse").sideNav();
      $('.modal-trigger').leanModal();
   });   
</script>
</body>
</html>
      
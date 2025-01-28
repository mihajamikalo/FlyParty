<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
</head>
    <style>
      body{
        background-color: rgb(18 17 17 / 87%);
      }
        .container{
            margin-top: 50px;
            max-width: 600px;
            padding: 70px;
            box-shadow: #495057 0px 7px 29px 0px;
            border-radius: 6px;
            background-color: #1e1e22;
        }
       
        .form-group{
            margin: 30px;
        }
        input.btn.btn-success{
          width: 100%;
          height: auto;
          padding: 10px
        }
        h2.header{
          color: rgb(19, 162, 210);
          font-size: 30px;
        }
        input{
          height: 40px;
        }
        .profile{
          color: white;
          font-size: 17px;
        }
    </style>

<body>
  <nav class="navbar bg-warning navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="/Dashboard">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="/AdminNew">New Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/rapportAdmin">Rapport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/message">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/account">Account</a>
          </li>
        </ul>
        <a class="btn btn-danger" href="/logout" role="button">Logout</a>
      </div>
    </div>
  </nav>
  <br>
  <br>
 
    <div class="container">
        <form action="/register" method="post" >
            @csrf
            <center><h2 class="header"><pre>Admin <br>Registration</h2></center>
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
              <div class="alert alert-danger">{{(Session::get('fail'))}}</div>
              @endif
            <div class="form-group mb-3">
                <input type="text" name="name" required="required" class="form-control" value="{{old('name')}}" placeholder="Nom">
                <span class="text-danger">@error('name') {{ $message }} @enderror </span>
              </div>
            
            <div class="form-group mb-3">
                <input type="email" name="email" required="required" class="form-control" value="{{old('email')}}" placeholder="Email...">
                <span class="text-danger">@error('email') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <input type="password" name="password" required="required" class="form-control" value="{{old('password')}}" id="floatingPassword" placeholder="Password">
                <span class="text-danger">@error('password') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <input type="text" name="role" required="required" class="form-control" value="{{old('role')}}" id="floatingPassword" placeholder="Admin Rôle">
              </div>
              <!--
                <div class="form-group mb-3">
                  <label class="profile" for="image">Please choose profil image :</label> <br> <br>
                    <input type="file" name="image" required="required"  class="form-control"  placeholder="Votre profil picture">
              </div> -->
              <center>
              <div class="form-group">
               <input type="submit" class="btn btn-success" value="Register">
              </div>
            </center>
        </form>
        <hr>
       
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Code Admin</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Pour assurer la securité du page,toute nouvelle Admin devrait être ajouter par une Admin déjà existant.
                  <br>Pour éviter tout type d'intrusion, une code Admin existant sera demander.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Je comprend</button>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>
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

    <link rel="stylesheet" href="css/Account.css">
</head>
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
            <a class="nav-link " aria-current="page" href="/AdminNew">New Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/rapportAdmin">Rapport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/message">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/account">Account</a>
          </li>
        </ul>
        <a class="btn btn-danger" id="logout" href="/logout" role="button">Logout</a>
      </div>
    </div>
  </nav>
  <br>
  <br>

 <div class="info">
   <div class="info-header">
    <center>
    <h2 class="header">About account</h2>
</center>
   </div>
   <div class="info-body">
    <h3 class="name">Nom : </h3>
    <p class="userInfo">{{$Info->name}}</p>
    <br>
    <h3 class="name">Email : </h3>
    <p class="userInfo">{{$Info->email}}</p>
    <br>
    <h3 class="name">Rôle : </h3>
    <p class="userInfo">Admin</p>
    <br>
   </div>
   <div class="info-footer">
    <center>
    <button class="btn-update"> <a class="button" href="">Update</a></button>
    <button class="btn-delete">Delete Account</button>
</center>
   </div>
 </div>
   


</body>
<script src="js/bootstrap.js"></script>
</html>
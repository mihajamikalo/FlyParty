<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fly party</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
  

</head>
<style>
  body{
    background-image: url("images/nicholas-green-unsplash-blur.jpg");
    background-repeat: no-repeat;
  }
  .table-dark{
    border-radius: 10px;
  }
  h5{
    border: 2px dashed;
    margin: 3px;
  box-sizing:inherit;
  margin-right: 25%;
  margin-left: 25%;
  border-color: chocolate;
  color: aliceblue;
  
  }
  .table{
    margin-top: 5%;
  }
 
</style>

<body>
    <main>
        
  <nav class="navbar bg-warning navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/AdminNew">New Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rapport</a>
          </li>
        </ul>
        <a class="btn btn-danger" href="/logout" role="button">Logout</a>
      </div>
    </div>
  </nav>
   
 <br>
<center>
  <h5>Liste Ticket</h5>
<br>
</center>
      <div class="c" style="margin: 20px">
      <table class="table table-dark table-bordered border-warning rounded-1"  >
        <thead>
          <tr class="text-center" >
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Tel</th>
            <th scope="col">Type billet</th>
            <th scope="col">Nombre billet</th>
            <th scope="col">Demande</th>
            <th scope="col">Date de creation</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($billets as $billets)
                
           
          <tr class="text-center align-text-top" >
            <th scope="row">{{$billets->id}}</th>
            <td>{{$billets->nom}}</td>
            <td>{{$billets->email}}</td>
            <td>{{$billets->phone}}</td>
            <td>{{$billets->type}}</td>
            <td>{{$billets->NbrTicket}}</td>
            <td>{{$billets->demande}}</td>
            <td>{{$billets->created_at}}
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>
    </div>
  </main>
   
</body>
<script src="js/bootstrap.js"></script>
</html>

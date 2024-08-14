<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <link rel="shortcut icon" href="/house.svg" type="image/x-icon">
    <meta name="author" content="">

    <title>Fly party</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
  

</head>
<style>
  body{
    /*background-image: url("images/nicholas-green-unsplash-blur.jpg");*/
    background-color:  rgba(9, 9, 9, 0.815);
    background-repeat: no-repeat;
  }
  .table-dark{
    border-radius: 10px;
  }
  h5{
    color: rgb(78, 156, 220);
    border: solid 2px;
    margin: 3px;
    margin-right: 25%;
    margin-left: 25%;
    border-color: rgb(30, 133, 181);
    font-size: 40px ;
    border-radius: 5px;
  }
  .table{
    margin-top: 5%;
  }
  tr{
    font-size:20px;
  }
 
</style>
<body>
    <main>
        
  <nav class="navbar bg-warning navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand active" href="/Dashboard">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/AdminNew">New Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rapportAdmin">Rapport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/message">Admin</a>
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $id = 1 ;?>
           @foreach ($billets as $billets)
                
           
          <tr class="text-center align-text-top" >
            <th scope="row"><?php echo $id ?></th>
            <td>{{$billets->nom}}</td>
            <td>{{$billets->email}}</td>
            <td>{{$billets->phone}}</td>
            <td>{{$billets->type}}</td>
            <td>{{$billets->NbrTicket}}</td>
            <td>{{$billets->demande}}</td>
            <td>{{$billets->created_at}}</td>
            <?php $id++ ?>
            <form action="/destroy/{{$billets->id}}" method="POST">
              @csrf
              @method('DELETE')
            <td><button type="submit" class="btn btn-danger">Delete</button></td>
          </form>
            
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

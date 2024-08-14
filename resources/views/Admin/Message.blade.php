
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tiavina Liantsoa">

    <title>Fly party</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/envelope.svg" type="image/x-icon">

  

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
  

</head>
<style>
  
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
  h1.header{
    color: rgb(237, 214, 40);
    margin: 3px;
  }
  .message{
    margin-right: 50%; 
    margin-left: 30%;
    border: solid;
    border-color: orange;
    border-radius: 3px;
    align-items: center;
    width: 10cm;
    align-content: center;
  }
  
  body{
    background-color: rgba(9, 9, 9, 0.815);
  }
  .card.text-center{
    background-color: rgba(33, 30, 30, 0.975);
  }
  h3{
    color: white;
  }
  h3.footer{
    color: rgb(30, 124, 196);
    font-size: 19px;
  }
 
 .card{
        background-color: rgb(214, 183, 28);
        margin: 5px;
        margin-left: 35%;
        width: 50rem;
        height: auto;
        display: flex;
 }
 .btn{
  width: 90px;
  height: 35px;
  margin: 5px;
 }
 .card-title{
  border: solid 1px;
 }

</style>

<body>
    <main>
        
    
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
                    <a class="nav-link active" href="/message">Admin</a>
                  </li>
                </ul>
                <a class="btn btn-danger" href="/logout" role="button">Logout</a>
              </div>
            </div>
          </nav>
<br>
<br>
@foreach ($message as $messages )
          

<div class="card text-center">
    <div class="card-header">
      <h3>{{$messages->Author}}</h3>
    </div>
    <div class="card-body">
      
      <h5 class="card-title" style="color: rgb(30, 133, 181)" >{{$messages->Titre}}</h5><br>
      <p class="card-text" style="color: rgb(241, 248, 249)" >{{$messages->Rapport}}</p>
    <br>
      <form action="/delete/{{$messages->id}}" method="post">
        @csrf
        @method("DELETE")
        <div class="butt">  <a href="/rapportAdmin" class="btn btn-outline-primary">Rapport</a>
        <button type="submit" class="btn btn-outline-danger">  Delete</button>
       
      </form> 
    </div>
    </div>
    <div class="card-footer text-body-secondary">
     <h3 class="footer"> {{$messages->date}} </h3>
    </div>
  </div>
  <br>
  @endforeach
    </main>
</body>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/envelope-arrow-up.svg" type="image/x-icon">

    <meta name="description" content="">
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
  .custom-form.ticket-form.mb-5.mb-lg-0{
    background-color: #1e1e22;
    box-shadow: #495057 0px 7px 29px 0px;
  }
  body{
    /*background-image: url("images/nicholas-green-unsplash-blur.jpg");
    background-repeat: no-repeat; */
    background-color: rgb(18 17 17 / 87%);
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
  hr{
    color: red;
  }
  body{
    margin: 2px;
  }
  h2.text-center.mb-4{
    color: rgb(42, 114, 196);
  }
  button.form-control{
    background-color: #0d6efd ; 
  }
  .col-lg-6.col-10.mx-auto{
    width: 470px;
  }
  textarea{
    width: 100%;
    height: auto;
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
                    <a class="nav-link active" href="/rapportAdmin">Rapport</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/message">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/information">Modification</a>
                  </li>
                </ul>
                <a class="btn btn-danger" href="/logout" role="button">Logout</a>
              </div>
            </div>
          </nav>
          <br>
          <br>
          <div class="col-lg-6 col-10 mx-auto">
            <form class="custom-form ticket-form mb-5 mb-lg-0" action="/updateMessage" method="POST">
                @csrf
               @method('POST')
               
                <h2 class="text-center mb-4">RAPPORT UPDATE</h2>
                  @if(Session::has('succes'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Titre</label>
                    <input type="text" name="Titre" class="form-control" id="formGroupExampleInput" max="20" min="5" placeholder="Titre" value="{{$value->Titre}}">
                  </div>
                    <input type="text" name="Author" value="{{Session::get('Author')}}" style="display: none" >
                  <div class="mb-3">
                    <label for="Rapport" class="form-label">Rapport</label>
                    <textarea placeholder="Vôtre Rapport" name="Rapport" id="form-control" >{{$value->Rapport}}</textarea>
                  
                  </div>
                  <input type="hidden" name="id_mess" value="{{$value->id}}" style="" >
                  <input type="hidden" name="date" value="{{$value->date}}" style="" >
                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                        <button type="submit" class="form-control">Send</button>
                    </div>
                    <hr>
                    <div class="justify-content-center">
                    <a href="/Dashboard" >Dashboard</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
  </main>
   
</body>
<script src="js/bootstrap.js"></script>
</html>

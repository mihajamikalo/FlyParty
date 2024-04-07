<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
    <style>
        .container{
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            box-shadow: #495057 0px 7px 29px 0px;
            border-radius: 6px;
            background-color: #d6922b;
        }
       
        .form-group{
            margin: 30px;
        }
        
    </style>

<body>
  <a class="btn btn-primary" href="/Dashboard" role="button">Go Back</a>
    <div class="container">
        <form action="/register" method="post">
            @csrf
            <center><h2><pre>Admin <br>Registration</h2></center>

            <div class="form-group mb-3">
                <input type="text" name="name" required="required" class="form-control"  placeholder="Nom">
               
              </div>
            
            <div class="form-group mb-3">
                <input type="email" name="email" required="required" class="form-control"  placeholder="Email...">
               
              </div>
              <div class="form-group">
                <input type="password" name="password" required="required" class="form-control" id="floatingPassword" placeholder="Password">
              </div>
                <div class="form-group mb-3">
                    <input type="text" name="code" required="required" autocomplete="off" class="form-control"  placeholder="Code Admin existant">
              </div>

              <div class="form-group">
               <input type="submit" class="btn btn-success" value="Register">
              </div>
        </form>
        <hr>
        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
            C'est quoi un code Admin existant?
          </button>
          
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        body{
            margin: 8px;
        }
       .about{
            margin: 10px;
            margin-left: auto;
            width: 300px;
            height: auto;
        }
        h2.info{
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <div class="about">
        <h2>FlyParty</h2>
        <p>Confirmation achat de billet</p>
        <p>Antananarivo le @php
         echo (date('d') . "/" . date('m') . "/" . date('Y') );  
        @endphp
        </p>
        <p>à <br> Madame\Monsieur <br> {{$user['nom']}}</p>
        <p>{{$user['email']}}</p>
    </div>
    <br>
    <center><h2 class="info">Achat de billet (à imprimer)</h2></center>
    <br>
    <p>Mdame\Monsieur {{$user['nom']}}, Vôtre achat de billet le @php echo((date('d') . "/" . date('m') . "/" . date('Y') )) @endphp à bien été enregistrer dans nos base de donné.</p>
    <p>Le billet N°:452 à été réserver pour vous, vous avez 2 jours à compter de ce jour pour vous présenter dans nos point de vente pour payer la somme ou nous contacter via email FlyParty@gmail.com en cas de 
        changement de programme de vôtre part.
        Une fois payé, le ticket est <b>Non remboursable</b>.
    </p>
    <p>Veuillez présenter cette papier quand vous payé la somme dans nôtre point de confirmation ou payer directement la somme via mobile money et entré la référence en bas comme 
        référence de transaction via le numéro <b> <a href="tel:+">0332356412</a></b> ou <b><a href="tel:+">0347887878</a> </b> ou <b> <a href="tel:+">0326578958</a></b>. Ce ticket est toujours téléchargeable en cas de perte. Nous vous remérciont pour vôtre confiance.</p>
    <p>Réference : flyB156478R12</p>
    <br>
    <h3>Fly Party <?php echo date('Y') ?></h3>
</body>
</html>
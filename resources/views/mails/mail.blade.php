<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOUNGUE & PATNERS | Cabinet d'avocat</title>
</head>

<body>
    <div style="border: 1px solid gray; padding:10px;">
        <h2 style="text-decoration: underline; text-align:center;">Candidature spontanée</h2>
        <br>
        <p><span style="color:#05244d;">Expéditeur :</span> {{ $candidate->noms }}</p>
        <p><span style="color:#05244d;">E-mail :</span> {{ $candidate->e_mail }}</p>
        <p><span style="color:#05244d;">Niveau d'études :</span> {{ $candidate->niveau }}</p>
        <p><span style="color:#05244d;">Numéro :</span> {{ $candidate->telephone }}</p>
        <p><span style="color:#05244d;">Adresse :</span> {{ $candidate->adresse }}</p>
        <p><span style="color:#05244d;">Cv :</span> <a href="{{ asset('storage/'.$candidate->cv) }}">Télécharger le CV</a></p>
    </div>

    
</body>

</html>

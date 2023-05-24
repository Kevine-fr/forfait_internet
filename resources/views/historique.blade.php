<body style="background-color: black">
<center><u style="color:white"><h1 style="color:white">Historique de {{$comptes->nom}}</h1></u></center>

@foreach($comptes->forfaits as $forfait)
    
<div style="background-color:white; padding-left: 5px">
<p style="color:black;padding-top: 25px">Nom du forfait : {{$forfait->nomF}}</p><br>
<p style="color:black">Durée du forfait :{{$forfait->dureeF}}</p><br>
<p style="color:black">Prix du forfait : {{$forfait->prixF}} FCFA</p><br>
<p style="color:black">Date d'expiration du forfait : {{$forfait->dateF}}</p><br>
</div>

@endforeach
</body>
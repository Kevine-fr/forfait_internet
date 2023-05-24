<center><u><h1>Liste des comptes</h1></u></center>

@if($message = Session::get('success'))
<p style="color:green">{{$message}}</p>
@endif

@foreach($comptes as $compte)

<div style="background-color: black;">
<p style="color:white;padding-top:8px;padding-left:5px">Nom : {{$compte->nom}}</p>
<p style="color:white;padding-left:5px">Prénom : {{$compte->prenom}}</p>
<p style="color:white;padding-left:5px">Numero : {{$compte->numero}}</p>
<p style="color:white;padding-left:5px">Adresse : {{$compte->adresse}}</p>
<!-- <a href="compte/{{$compte->id}}">forfait</a>--> 

<a href="{{'compte/' . $compte->id}}" style="color:white;padding-left:5px">Forfaits</a>

<a href="{{'historiques/' . $compte->id}}" style="color:white">historique</a>

<hr>

</div>

@endforeach

<br>
<button style="color:blue"><a href="/" style="color:black">Créer un compte</a></button>


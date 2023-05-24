<div>

<center><u><h1>Forfait internet</h1></u></center>

@foreach($forfaits ?? [] as $forfait)
<form action="{{route('forfait.store' , ['id' => $forfait->id])}}" method= "POST">
@csrf
    <div style="background-color: black; padding-left:5px">
    <input type="text" value="{{$compte->id}}" hidden name="compte">
    <p style="color:white;padding-top:15px">Nom : {{$forfait->nomF}}</p>
    <p style="color:white">Durée : {{$forfait->dureeF}}</p>
    <p style="color:white">Prix : {{$forfait->prixF}} fcfa</p>

    <input type="submit" value="Acheter" style="background-color: white; color: black;margin-bottom:15px"> 
    
    </div>
</form>
@endforeach


<center><h2 style="color:grey;">Merci de bien vouloir choisir un forfait {{$compte->prenom}} 🙏🏽 </h2></center>

</div>

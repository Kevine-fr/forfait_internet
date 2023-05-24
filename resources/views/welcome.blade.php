<!-- formulaire.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <center><h1>Créer votre compte</h1></center>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	<center>
    <form method="POST" action="{{route('creation')}}">
        @csrf

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" name="adresse" id="email" value="{{ old('email') }}" required>

        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" name="numero" id="telephone" value="{{ old('telephone') }}" required>

        <button type="submit">Envoyer</button>
    </form>
	</center>
</body>
</html>

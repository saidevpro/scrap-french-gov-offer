<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div style='font-size: 18px; text-align: left; line-height: 30px;padding-bottom: 30px'>
        <h2>{{ ucfirst($user->civility) }} {{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }}</h2>
        <p>
            Nous avons bien reçu votre demande d'inscription sur Neomarché. <br>
            Votre inscription est en cours de vérification. <br>
            {{-- @if ($user->isProvider())
                Pour finaliser votre inscription veuillez contacter le numéro suivant: 06 XX XX XX XX. <br>
            @endif --}}
            Cependant vous avez déjà accès à votre compte.
        </p>
    </div>
    <div style='padding: 10px 0 50px 0; text-align: left;'>
        <a style='background: #176d8c; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 50px; letter-spacing: 0.3px;' href="{{ $login_url }}">
            Mon Compte
        </a>
    </div>
</body>
</html>




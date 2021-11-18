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
        <h2>{{ ucfirst($contact->civility) }} {{ ucfirst($contact->first_name) }} {{ ucfirst($contact->last_name) }}</h2>
        <p>
            {{ $user->first_name }} {{ $user->last_name }} vient de partager avec vous son profil de recherche sur néomarchés.<br>
            Vous pouvez consultez le profil de recherche en cliquant sur le button ci-dessous.<br>
        </p>
    </div>
    <div style="padding: 10px 0 50px 0; text-align: left;">
        <a style="background: #176d8c; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 50px; letter-spacing: 0.3px;" href="{{ $research_url }}">
            Voir le profil recherche
        </a>
    </div>
</body>
</html>




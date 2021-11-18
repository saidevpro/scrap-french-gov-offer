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
            Vous avez reçu une invitation de la part de {{ $parent_user->first_name }} {{ $parent_user->last_name }}<br>
            Vous pouvez dès à présent vous connectez sur la plateforme<br>
        </p>
        <p>Voila vos identifiants</p>
        <table style="border: none; border-collapse: collapse">
            <tbody>
                <tr>
                    <td style="padding: 0 10px">
                        Email
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 10px">
                        Mot de passe
                    </td>
                    <td>
                        {{ $password }}
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 10px">
                        Lien
                    </td>
                    <td>
                        {{ $login_url }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="padding: 10px 0 50px 0; text-align: left;">
        <a style="background: #176d8c; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 50px; letter-spacing: 0.3px;" href="{{ $login_url }}">
            Mon Compte
        </a>
    </div>
</body>
</html>




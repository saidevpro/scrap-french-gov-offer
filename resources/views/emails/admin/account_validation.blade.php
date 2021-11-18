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
    <div style='padding: 20px 0; font-size: 22px; text-align: left; line-height: 15px;color: #616161;font-weight: bold'>
        Demande de validation de compte
    </div>
    <div style='margin: 30px 0; font-size: 20px; text-align: left; line-height: 15px;color: #616161;'>
        {{ $user->last_name }} {{ $user->first_name }} vous a envoyé une demande d'activation de compte.
        <p>Informations de l'utilisateur</p>
        <table>
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>{{ $user->last_name }}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>{{ $user->first_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>




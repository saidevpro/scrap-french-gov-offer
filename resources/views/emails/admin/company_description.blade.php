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
        Demande de candidature fournisseur
    </div>
    <div style='margin: 30px 0; font-size: 20px; text-align: left; line-height: 15px;color: #616161;'>
        Un nouveau dossier de candidature a été déposé sur le site.
    </div>
    <div style='font-size: 18px; text-align: left; line-height: 30px;padding-bottom: 30px'>
        <table>
            <tbody>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Civilité du responsable légal </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ ucfirst($user->civility) }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Nom et Prénom du représentant légal </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ ucfirst($user->last_name) }} {{ ucfirst($user->first_name) }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Téléphone fixe ou portable </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ $user->phone }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Raison social </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ $company->name }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left">Email</td>
                    <td style="text-align: right; padding: 10px 0 "> {{ $user->email }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Adresse </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ $company->address_line1 }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Code postal </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ $company->zip_code }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Ville </td>
                    <td style="text-align: right; padding: 10px 0 ">
                        @if ($company->city)
                            {{ ucfirst($company->city->name) }}
                        @else
                            <em>N'a pas été précisé</em>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left"> Rayon d'intervention </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ ucfirst($company->intervention_zone) }} </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left">Chiffre d'affaire </td>
                    <td style="text-align: right; padding: 10px 0 "> {{ $company->turnover ? $company->turnover->name. ' €' : 'Aucune indication' }} </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>




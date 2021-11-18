<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body style="padding: 0; margin: 0;font-family: Arial, Helvetica, sans-serif">
    <h1 style="color: #176d8c; margin: 0; margin: 27px 0;font-family: Arial">
        Nouveaux marchés sur Néomarchés
    </h1>
    <div style='margin: 30px 0; font-size: 20px; text-align: left; line-height: 15px;color: #616161; line-height: 1.1'>
        {{ $count_total }} nouveaux marchés correspondant à votre profil de recherche viennent d'être ajoutez.
        Veuillez consultez le site neomarches pour plus de marchés.
    </div>
    <div style='font-size: 16px; text-align: left; line-height: 30px;padding-bottom: 30px'>
        <div style="background: #f9fafc;padding: 30px 0;">
            @foreach ($tenders as $tender)
                <div style="width: 700px;max-width: 100%;display: block;text-decoration: none;padding: 20px;background: #fff;color: #3e4044;border-radius: 8px;margin-bottom: 20px; display: block;margin-right: auto; margin-left: auto; border-radius: 8px">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td colspan="2" style="padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    <h5 style="position:relative; color: #176d8c; margin: 0; margin-bottom: 7px; font-size: 24px">{{ $tender['title'] }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    <b>{{ $tender['denomination'] }}</b>
                                </td>
                                <td style="text-align: right; padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    {{ ucfirst($tender['city']) }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    Date de parution: {{ date_format(date_create($tender['publish_date']), 'd/m/Y') }}
                                </td>
                                <td style="text-align: right; padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    {{ ucfirst($tender['activity']) }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    Date de clotûre: {{ date_format(date_create($tender['closing_date']), 'd/m/Y') }}
                                </td>
                                <td  style="padding: 15px 10px; border-bottom: 1px solid #eee; text-align: right">
                                    {{ ucfirst($tender['procedure']) }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="padding: 15px 10px; border-bottom: 1px solid #eee;">
                                    <span style=" background: #f4f7f9; color: #8c97ad; font-weight: 600; padding: 5px 10px 5px 20px; float: left; border-radius: 6px; margin-left: -10px; box-sizing: border-box; ">
                                        {{ $tender['budget'] === 'mapa' ? '<90 k€' : '>90 k€'}}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"  style="padding: 15px 10px;">
                                    <div style="color: #176d8c">
                                        <b style="font-size: 12px">Dans profil de recherche suivant: </b> {{ implode(', ', $tender['matched_researchs']) }}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
            <div style="display: block; width: 100%; text-align: center; margin-top: 45px">
                <a style="font-size: 0.75rem; padding: 14px 30px; border-radius: 50px; display: inline-block; touch-action: manipulation; cursor: pointer; background-image: none; white-space: nowrap; text-transform: uppercase; text-align: center; font-weight: 600; letter-spacing: .3px; line-height: 1; position: relative; background: #176d8c; border: 1px solid #176d8c; color: #fff;text-decoration: none" href="{{ $front_url }}/entreprise/profil-de-recherche">
                    Voir votre profile de recherche
                </a>
            </div>
        </div>
    </div>
</body>
</html>




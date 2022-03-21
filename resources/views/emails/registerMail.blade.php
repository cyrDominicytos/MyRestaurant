use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Bonjour  Monsieur <b>{{ $user->firstname }} {{ $user->lastname }} </b></div>
    <br>
    <div style='background: #f1f1f1; padding:25px; max-width: 900px; font-size: 16px; font-family:Arial;  line-height:1.5'>
        <div> <b style='color: red'> Votre Compte a été créer par Monsieur le DG  {{  Auth::user()->firstname }} {{  Auth::user()->lastname }} </b></div>
        <div style='background: #fff; padding: 10px; margin:15px 0'><b>Message </b> : 
         <br>Veuillez bien vouloir ce rapprochez de nous merci.
        </div>
        <div></div>
        </div>
        <br>
        <div style='color: blue; font-size: 14px;'>===========<br>Equipe </div>
    </div>
</body>
</html>
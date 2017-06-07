<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<body style="background-color: #ffffff;font-family: 'Montserrat', sans-serif;">
<div class="panel" style="background-color: white;width: 400px;padding: 20px;margin: 0px auto;">
    <img src="https://s16.postimg.org/vaf4zem1x/logo.png" class="logo" style="width: 400px;">
    <div class="content" style="margin-top: 15px;">
        <div style="font-family: 'Open Sans', sans-serif;">
            Beste {{ $firstname }},<br>
            Klik <a href="{{url('alumnus/confirm', $token) }}">hier</a> om in te loggen.
        </div>

        Met vriendelijke groet,
        <br><br>
        Windesheim Flevoland
    </div>
</div>
</body>
</html>
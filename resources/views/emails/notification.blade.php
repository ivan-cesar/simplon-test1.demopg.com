<html>
    <head></head>
    <title></title>
    <body>
        <img src="{{asset('public/dashboard/images/logo.svg')}}" alt="logo" style="width: 50%;position: relative;left: -5%;"/>
        <div style="width:600px">
            <h3>Bonjour, {{$name}} {{$prenoms}}</h3>
            <p>Votre Inscripton pour la formation a étè pris en compte </p>
            <p> email: {{$email}}</p>
        </div>
    </body>
</html>
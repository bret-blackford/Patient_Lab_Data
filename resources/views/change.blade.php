<!doctype html>

<html>

    <head>
        <meta charset="utf-8">
        <title>CHANGE</title>
    </head>

    <body> 
        <h2>Bret CHANGE View</h2>
        <p>patient: {{ $ptInfo }}</p>
        <p>last name: {{ $ptInfo->last_name }}</p>
        <p>labs: {{ $labs }}</p>
        <p>AiC: {{ $labs->a1c }}</p>
    </body>

    <footer> &copy; {{ date('Y') }} </footer>

</html>



<!doctype html>

<html>

    <head>
        <meta charset="utf-8">
        <title> Patient List </title>
    </head>

    <body> 
        <h2> Patient List </h2>

        <table class="patients">
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First name</th>
                <th>Birthdate</th>
                <th>Gender</th>
            </tr>
            @foreach($patients as $patient)

            <tr>
                <td><a href="../change/{{$patient->id}}"> {{$patient->id}}</a></td>
                <td>{{$patient->last_name}}</td>
                <td>{{$patient->first_name}}</td>
                <td>{{$patient->birthdate}}</td>
                <td>{{$patient->gender}}</td>
            </tr>
            @endforeach
        </table>

    </body>

    <footer> &copy; {{ date('Y') }} </footer>

</html>


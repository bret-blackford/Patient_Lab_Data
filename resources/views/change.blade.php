<!doctype html>

<html>

    <head>
        <meta charset="utf-8">
        <title>CHANGE</title>
    </head>

    <body> 
        <h2>Lab Values for {{ $ptInfo->last_name }}, {{ $ptInfo->first_name }}</h2>

        @if( count($labs) == 0 )
            No lab results found for patient
        @else
        click lab id to change or click button to add new lab results
        <button class="new_lab" onclick="window.location.href = '../get';">New Labs</button>
        <table class="patients">
            <tr>
                <th>lab id</th>
                <th>A1C</th>
                <th>glucose</th>
                <th>hdl</th>
                <th>ldl</th>
                <th>triglicerides</th>
            </tr>

            @foreach($labs as $lab)

            <tr>
                <td><a href="../changelab/{{$lab->id}}">{{$lab->id}}</a></td>
                <td>{{$lab->a1c}}</td>
                <td>{{$lab->glucose}}</td>
                <td>{{$lab->hdl}}</td>
                <td>{{$lab->ldl}}</td>
                <td>{{$lab->triglicerides}}</td>
            </tr>
            @endforeach
        </table>
        @endif
    </body>

    <footer> &copy; {{ date('Y') }} </footer>

</html>



<!doctype html>

<html>    
    <head>
        <meta charset="utf-8">
        <link href='/css/labs.css' type='text/css' rel='stylesheet'>
        <title>NEW PATIENT</title>
    </head>

    <h1>Add a New Patient</h1>
    <p>All fields are required</p>

    <form method='GET'  class='form' action='/checks'>
        <fieldset>
            {{ csrf_field() }}

            <input type='text' name='last_name' value='{{ old("last_name") }}'>
            <label class='line'>Last Name</label></br>

            <input type='text' name='first_name' value='{{ old("first_name") }}'>
            <label class='line'>First Name</label></br>       

            <input type='date' name='dob' value='{{ old("dob") }}'>
            <label class='line'>birtdate</label></br>   

            <div id='gender-block'>
                Gender:
                <input type="radio" name='gender' value='Male' {{ (old('gender') == 'Male') ? 'checked' : '' }}>
                <label>male</label>
                <input type="radio" name='gender' value='Female' {{ (old('gender') == 'Female') ? 'checked' : '' }}>
                <label>female</label>
            </div>

        </fieldset>
        <input type="submit" value='update' class='btn'>
    </form>

    <div id="alerts">
        @if( count($errors) > 0 ) 
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

</body>

<footer> &copy; {{ date('Y') }} </footer>

</html>


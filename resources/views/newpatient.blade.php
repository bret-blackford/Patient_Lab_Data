@extends('layouts.master')

@section('content')

    <h1>Add a New Patient</h1>
    <p>All fields are required</p>

    <form method='GET'  class='form' action='/checkpatient'>
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


@endsection

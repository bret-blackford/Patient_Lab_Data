@extends('layouts.master')

@section('content')

<div class='view'>
        <h2> Patient List </h2>
        <p>Click on the ID below to get lab results data, or click button to add a new patient</p>

        <button class="new_pt" onclick="window.location.href = '../newpatient';">Add Patient</button>
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
                <td class="click"><a href="../change/{{$patient->id}}"> {{$patient->id}}</a></td>
                <td>{{$patient->last_name}}</td>
                <td>{{$patient->first_name}}</td>
                <td>{{$patient->birthdate}}</td>
                <td>{{$patient->gender}}</td>
            </tr>
            @endforeach
        </table>

</div>


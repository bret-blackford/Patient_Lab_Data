@extends('layouts.master')

@section('content')

<div class='view'>
    <h1>Change Labs</h1>
    <h2>Patient: {{$patient->last_name}}, {{$patient->first_name}}</h2>

    <form method='GET'  class='form' action='/checklabs'>
        <fieldset>
            {{ csrf_field() }}

            <input type='number' name='a1c' step="any" min="0" max="300" value='{{ $lab_data->a1c }}'>
            <label class='line'>AiC</label></br>

            <input type='number' name='glucose' step="any" min="0" max="999" value='{{ $lab_data->glucose }}'>
            <label class='line'>Glucose</label></br>       

            <input type='number' name='hdl' step="any" min="0" max="999" value='{{ $lab_data->hdl }}'>
            <label class='line'>HDL</label></br>   

            <input type='number' name='ldl' step="any" min="0" value='{{ $lab_data->ldl }}'>
            <label class='line'>LDL</label></br>

            <input type='number' name='triglicerides' step="any" min="0" max="999" value='{{ $lab_data->triglicerides }}'>
            <label class='line'>Triglicerides</label></br>

            <input type="hidden" value="{{$lab_data->id}}" name="lab_id" />
            <input type="hidden" value="{{$patient->id}}" name="pt_id" />

        </fieldset>
        <input type="submit" value='update' class='btn'>
    </form>
</div>
@endsection


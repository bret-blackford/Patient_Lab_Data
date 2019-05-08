@extends('layouts.master')

@section('content')

<div class='view'>
    <h2>Lab Values for: [{{$ptInfo->id}}]{{ $ptInfo->last_name }}, {{ $ptInfo->first_name }}</h2>

    @if( count($labs) == 0 )
        <button class="new_lab" onclick="window.location.href = '../addlab/{{$ptInfo->id}}';">Add Labs</button>
        No lab results found for patient
    @else

    <div class="description">click lab id to change, or click buttons to either add new lab results or analyze latest lab results</div>

    <button class="new_lab" onclick="window.location.href = '../addlab/{{$ptInfo->id}}';">New Labs</button>
    <button class="lab_analysis" onclick="window.location.href = '../analyzelab/{{$ptInfo->id}}';">Analyze Latest Lab</button>
    <table class="patients">
        <tr>
            <th>lab id</th>
            <th>A1C</th>
            <th>glucose</th>
            <th>hdl</th>
            <th>ldl</th>
            <th>triglicerides</th>
            <th>create date</th>
            <th>change date</th>
        </tr>

        @foreach($labs as $lab)

        <tr>
            <td class="click"><a href="../changelab/{{$lab->id}}">{{$lab->id}}</a></td>
            <td>{{$lab->a1c}}</td>
            <td>{{$lab->glucose}}</td>
            <td>{{$lab->hdl}}</td>
            <td>{{$lab->ldl}}</td>
            <td>{{$lab->triglicerides}}</td>
            <td>{{$lab->created_at}}</td>
            <td>{{$lab->updated_at}}</td>
        </tr>
        @endforeach
    </table>
    @endif
</div>
@endsection


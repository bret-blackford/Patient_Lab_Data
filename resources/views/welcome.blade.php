@extends('layouts.master')

@section('content')

<h1>Welcome to the Patient Portal</h1>
<h2>Blood Glucose and Lipid Lab Data</h2>
<p>This application is designed to allow healthcare facilities to manage patient blood lab results.  
    This application will store a series of lab results for specific patients, allowing the medical professional to add patients and lab results as needed.  
    Additionally, the application also incorporates standard lab value ranges and will notify when a patient's lab results are outside of the normal range and need additional review.</p>
<button class="start" onclick="window.location.href = '../get';">START</button>

@endsection

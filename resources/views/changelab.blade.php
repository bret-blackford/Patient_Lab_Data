
<h1>Change Labs</h1>
<h2>Patient: {{$patient->last_name}}, {{$patient->first_name}}</h2>

<form method='GET'  class='form' action='/checklabs'>
    <fieldset>
        {{ csrf_field() }}
        
        <input type='text' name='a1c' value='{{ $lab_data->a1c }}'>
        <label class='line'>AiC</label></br>
        
        <input type='text' name='a1c' value='{{ $lab_data->glucose }}'>
        <label class='line'>Glucose</label></br>       
        
        <input type='text' name='hdl' value='{{ $lab_data->hdl }}'>
        <label class='line'>HDL</label></br>   
        
        <input type='text' name='hdl' value='{{ $lab_data->ldl }}'>
        <label class='line'>LDL</label></br>

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



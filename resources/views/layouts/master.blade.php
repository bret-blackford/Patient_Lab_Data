<!doctype html>
<!-- M. Bret Blackford -->
<!-- Date: May 2019 -->
<html lang='en'>
    <head>
        <title>Labs</title>
        <meta charset='utf-8'>
        <link href='/css/demo.css' type='text/css' rel='stylesheet'>
        @yield('head')
    </head>

    <body>
        <div id="grid-wrapper">

            @if(session('alert'))
                <div class='grid-alert'>{{session('alert')}}</div>
            @endif

            <div id="grid_header" class="grid">
                <a href="../"><div class="HoME">HoME</div></a> 
                <h1 id="header">Patient Lab Portal</h1> 
            </div>

            <div id="grid-content" class="grid">
                @yield('content')
            </div>

            <div id="grid-alerts" class="grid">

                @if( count($errors) > 0 ) 
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div id="grid-footer" class="grid">
                &copy; {{ date('Y') }}  mBret Blackford
            </div>
        </div>   
    </body>
</html>

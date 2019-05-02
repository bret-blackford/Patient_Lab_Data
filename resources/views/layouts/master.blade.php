<!doctype html>
<!-- M. Bret Blackford -->
<!-- Date: April 2019 -->
<html lang='en'>
    <head>
        <title>Labs</title>
        <meta charset='utf-8'>
        <link href='/css/labs.css' type='text/css' rel='stylesheet'>

        @yield('head')
    </head>
    <body>

        @if(session('alert'))
            <div class='alert'>{{session('alert')}}</div>
        @endif
        
        <section>
            @yield('content')
        </section>

        <div id="alerts">
            @if( count($errors) > 0 ) 
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <footer>
            &copy; {{ date('Y') }}  mBret Blackford
        </footer>

    </body>
</html>

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
        <div class="grid-wrapper"
             <header>
                @if(session('alert'))
                <div class='alert'>{{session('alert')}}</div>
                @endif

                <div id="master_header">
                    <a href="../"><div class="HoME">HoME</div></a> 
                    <h1>Patient Lab Portal</h1> 
                </div>
            </header>

            <section>
                <div class="grid-section">
                    @yield('content')
                </div>
            </section>


            <div id="alerts" class="grid-section">
                @if( count($errors) > 0 ) 
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <footer class="footer">
                <div class="grid-section">
                    &copy; {{ date('Y') }}  mBret Blackford
                </div>
            </footer>
        </div>   
    </body>
</html>

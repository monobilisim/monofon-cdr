<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow" />
    <title>Çağrı Kayıtları</title> 
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body> 
    <div class="container">
    
    <h2 class="mt-2"> <a style="text-decoration: none" href="{{ route('cdr') }}">Çağrı Kayıtları</a></h2>
    
    @if (Auth::check())
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                @if (Config::get('application.call_tags'))
                    <li>{{ HTML::link('tag', 'Etiket Raporu') }}</li>
                @endif
                @if (Auth::check() AND Auth::user()->role === 'admin')
                    <li>{{ HTML::link_to_action('user@index', 'Kullanıcı Yönetimi') }}</li>
                @endif
                </ul>
                <ul class="nav pull-right">
                    <li>{{ route('logout') }}</li>
                </ul>
            </div>
        </div>
    </div>
    @endif
        
    <div class="content">
        @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_status') }}">{{ Session::get('message') }}</div>
        @endif
        
        @yield('content')
    </div>
    
    <footer>
        <p>© 2012 - 2019 Mono Bilişim</p>
    </footer>
    
    </div>

<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>

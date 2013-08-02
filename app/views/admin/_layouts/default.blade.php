<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dominion Kingdom Deck Creator</title>
 
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
 
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
<div>
    <div>
        <div>
            <div>
                <a href="">Dominion Cards</a>
            </div>
        </div>
    </div>
 
    <hr>
 
    @yield('main')
    
</div>
</body>
</html>
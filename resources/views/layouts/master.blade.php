<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="pragma" content="no-cache">

        <title>Online GD</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/newhome.css" rel="stylesheet" type="text/css"/>
        <script src="/js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/angular.min.js" type="text/javascript"></script>
        <script src="/js/angular-route.js" type="text/javascript"></script>
    </head>
    <body>

        <form method="POST" action="/logout">
            {{ csrf_field() }}

            <button type="submit" class="btn btn-success">Logout</button>

        </form>
        @yield('content')
    </body>
</html>

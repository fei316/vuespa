<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Vue SPA</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <router-link to="/" class="navbar-brand">Vue-SPA</router-link>
                </div>
                <div class="navbar-header">
                    <router-link to="/about" class="navbar-brand">About</router-link>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>

<script src="/js/app.js"></script>
</body>
</html>

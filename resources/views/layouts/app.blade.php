<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wgt@400;600&display=swap">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.45/dist/vue.global.prod.js"></script> 
</head>
<body>
    <div id="app"></div>

    <script>
        const { createApp } = Vue;
        const app = createApp({}); 
        app.mount('#app'); 
    </script>
</body>
</html>
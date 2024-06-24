<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title  >|SLLAB|{{$title ?? ''}}</title>
    <link rel="icon" href="/img/round.png" type="png">

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jersey+15&display=swap" rel="stylesheet">
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.1/mdb.min.css"
rel="stylesheet"
/>
</head>
<body class="{{$bgbody ?? 'bg-secondary'}}">

    <x-nav/>
    @if (session('deleteMessage'))
    <div class="alert alert-success mt-3">
        {{ session('deleteMessage') }}
    </div>
    
@endif

    <div class="min-vh-100">

            {{$slot}}
    </div>
    
   

    <x-footer />
    




    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.1/mdb.umd.min.js"
></script>
</body>
</html>
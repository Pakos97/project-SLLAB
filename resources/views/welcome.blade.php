<x-layout
title="welcome"
bgbody="bg-nero"
>
@if (session('message'))
<div class="alert alert-success mt-3">
    {{ session('message') }}
</div>
@endif
    <header class="bg-nero">
        <!-- Background image -->
        <div class="  text-center bg-image bg-header" >
            <video autoplay muted loop id="video-header" src="/video/Registrazione 2024-06-14 172959.mp4" type="video/mp4" class="video"> </video>
            
            
            
            
       
        </div>
        <!-- Background image -->
        
    </header>
    
</x-layout>
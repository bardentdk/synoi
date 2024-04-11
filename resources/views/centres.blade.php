@extends('template.app')
@section('content')
    <div class="lg:mx-32 lg:my-20 mx-5 my-10">
        <!-- Bannière h1 -->
        <div>
            <h1 class="text-slate-800 text-5xl lg:text-7xl ">Nos centres de formations</h1>
            <p class="text-lg text-slate-700">Retrouver tous nos centres de formation disponibles sur l'île.</p>
        </div>
        <!-- Fin Bannière h1 -->
        <!-- Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-20 my-10 gap-y-10">
            @foreach($centres as $centre)
            <div>
                <div>
                    <img src="{{asset('img/logo.png')}}" alt="Logo Synergie OI" class="w-20 h-auto"/>
                </div>
                <h2 class="text-4xl">{{$centre->nom_du_centre}}</h2>
                <a href="http://maps.google.com/?q={{$centre->adresse_centre}}" target="_blank" class="font-bold text-lg text-orange-600">
                    <i class="fa-solid fa-map"></i> {{$centre->adresse_centre}}
                </a>
                <div class="flex  justify-start items-center">
                    <a href="mailto:{{$centre->contact_centre}}" class="text-white py-2 px-3 font-bold text-lg bg-cyan-600 hover:bg-cyan-700">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                    <a href="tel:{{$centre->contact_centre}}" class="bg-orange-600 font-bold text-lg text-white hover:bg-orange-700 py-2 px-3">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    
                </div>
            </div>
            @endforeach
        </div>
        <!-- Fin Content -->
    </div>
@endsection
@extends('template.app')
@section('content')
<div class="lg:my-10">
    @foreach($form as $form)
        <div class="mx-5 lg:my-10 lg:mx-32 grid items-center">
            <img src="{{$form->formation_image}}" alt="Image de la formation {{$form->formation_titre}}" class="w-full mb-5 "/>
            <h1 class="text-5xl lg:text-7xl text-cyan-900">{{$form->formation_titre}}</h1>
            <p>{{$form->categorie_name}}</p>
            <div class="mb-5 gap-x-5 items-center text-justify my-5">
                <h5 class="text-3xl text-orange-500">Description de la formation</h5>
                <p class="text-lg">{{$form->formation_description}}</p>
            </div>
        </div>
        <div class="mx-5 lg:mx-32 grid grid-cols-1 lg:grid-cols-2 gap-x-20">
            <div class="grid gap-y-10">
                <div class="text-justify">
                    <h5 class="text-xl"><i class="fa-solid fa-bullseye"></i> Objectifs de la formation</h5>
                    <p><i class="fa-solid fa-arrow-right"></i> {{$form->formation_objectifs}}</p>
                </div>
                <div class="text-justify">
                    <h5 class="text-xl"><i class="fa-solid fa-clock"></i> Durée de la formation</h5>
                    <p><i class="fa-solid fa-arrow-right"></i> {{$form->formation_duree}} heures</p>
                </div>
                <div class="text-justify">
                    <h5 class="text-xl"><i class="fa-solid fa-dollar bg-black text-white px-2 py-1 rounded-full"></i> Coût de la formation</h5>
                    <p class="font-bold"><i class="fa-solid fa-arrow-right"></i> {{$form->formation_cout}}</p>
                </div>
            </div>
            <div class="grid gap-y-10">
                <div class="text-justify">
                    <h5 class="text-xl"> <i class="fa-solid fa-info-circle"></i> Delais d'accès</h5>
                    <p><i class="fa-solid fa-arrow-right"></i> {{$form->formation_accessibilite}}</p>
                </div>
                <div class="text-justify">
                    <h5 class="text-xl"><i class="fa-solid fa-warning"></i> Prérequis</h5>
                    <p><i class="fa-solid fa-arrow-right"></i> {{$form->formation_prerequis}}</p>
                </div>
                <div class="text-justify">
                    <h5 class="text-xl"><i class="fa-solid fa-users"></i> Profil des participants</h5>
                    <p><i class="fa-solid fa-arrow-right"></i> {{$form->formation_profil}}</p>
                </div>
                <a href="{{$form->formation_lien_pf}}" target="_blank" class="text-lg bg-orange-50 p-3 border border-t-1 border-orange-300 rounded hover:bg-orange-200 text-center text-orange-500 duration-300"><i class="fa-solid fa-download"></i> Télécharger le programme de formation</a>
            </div>
        </div>
        <div class="lg:mx-32 mx-5 flex justify-end my-10">
            <a href="./" class="text-slate-800 border border-slate-800 hover:bg-slate-900 duration-300 hover:text-white inline p-2">
                <i class="fa-solid fa-home"></i> Retour à l'accueil
            </a>
        </div>
        @endforeach
</div>
@endsection
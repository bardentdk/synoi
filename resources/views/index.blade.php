@extends('template.app')
@section('content')
    <div class="bg-[url('{{asset('img/bann.jpg')}}')] py-10 lg:py-52 lg:text-center lg:align-center" id="banner">
        <div class="gap-y-5 grid text-center">
            <div class="flex justify-center gap-x-10 lg:mx-60 gap-y-10 lg:flex lg:gap-x-5">
                <img src="{{asset('img/qualiopi.jpg')}}" class="h-10 lg:h-20" alt="qualiopi" />
                <img src="{{asset('img/pix.webp')}}" class="h-10 lg:h-20" alt="pix" />
                <img src="{{asset('img/icdl.png')}}" class="h-10 lg:h-20" alt="icdl" />
            </div>
            <h1 class="text-4xl lg:text-6xl text-slate-100">Synergie Océan Indien - Centre de formation professionnelle</h1>
            <p class="font-regular text-slate-300">Faites le choix de vôtre formation parmis une selection de +200 formations certifiantes</p>
            <div class="my-5">
                <a href="." class="border-2 border-cyan-700 px-3 py-5 text-cyan-700 text-xl hover:bg-cyan-700 duration-300 hover:text-white">Catalogue de formations</a>
                <a href="." class="px-3 py-5 text-cyan-700 text-xl hover:border-2 hover:border-cyan-700 duration-300 hover:text-white">Prendre contact</a>
            </div>
        </div>
    </div>
    <div class="mx-5 my-10 lg:mx-32">
        <h2 class="text-5xl text-orange-600 text-center">AVENIR OI</h2>
        <p class="text-center">Découvrez toute l'actualités de SynergieOI et des évènements</p>
        @include('parts.aveniroi')
    </div>
    <div class="my-10 mx-5 lg:mx-32 lg:my-32">
        <h2 class="text-5xl text-orange-600 text-center">Ils nous recommandent...</h2>
        @include('parts.testimonial')
    </div>
    <div class="my-10 mx-5 lg:mx-32 lg:my-32">
        <h2 class="text-5xl text-orange-600 text-center">Ils nous recommandent...</h2>
        @include('parts.somenumbers')
    </div>
@endsection
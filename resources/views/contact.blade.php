@extends('template.app')
@section('content')
    <div class="mx-5 my-10 lg:mx-32 lg:my-20">
        <!-- Bannière -->
        <div>
            <h1 class="text-7xl lg:text-start text-center mb-5 text-slate-800">Fiche contact</h1>
            <p class="rounded text-lg bg-yellow-50 text-slate-700 p-2 px-5 text-center lg:text-start">En passant, par le formulaire de contact, vous maximisez vos chances d'obtenir une réponse sous peu.</p>
        </div>
        <!-- Fin de la bannière -->
        <!-- Formulaire de contact -->
        <form class="w-full max-w-screen my-20">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  Votre nom de famille
                </label>
                <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-100 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Votre prénom
                </label>
                <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Votre adresse email
                  </label>
                  <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-100 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Jane@doe.re">
                  {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Votre n° de téléphone
                  </label>
                  <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="0692 78 00 00">
                </div>
              </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Votre ville de résidence
                    </label>
                    <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-100 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2 my-7">
                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Votre demande concerne
                    </label>
                    <select class="block appearance-none w-full bg-gray-50 border border-gray-100 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option default class="text-gray-700">-- Choisir une option --</option>
                        <option class="text-gray-500">Une formation</option>
                        <option class="text-gray-500">Une information externe</option>
                        <option class="text-gray-500">Autre</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2 my-7">
                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Votre message(Facultatif)
                    </label>
                    <textarea rows="10" placeholder="Bonjour, ...." class="block appearance-none w-full bg-gray-50 border border-gray-100 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state"></textarea>
                </div>
            </div>
            <div class="flex flex-wrap mb-2 my-7 sm:flex gap-y-5">
                <div class="w-full lg:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Pièce jointe n°1 
                    </label>
                    <input type="file" class="block appearance-none w-1/2 bg-orange-200 border border-5 border-dotted border-slate-900 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                </div>
                <div class="w-full lg:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Pièce jointe n°2
                    </label>
                    <input type="file" class="block appearance-none w-1/2 bg-orange-200 border border-dotted border-gray-900 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-6 md:mb-0 my-10">
              <button type="submit" class="bg-orange-500 text-white hover:bg-orange-700 p-2">Envoyer la fiche contact</button>
            </div>
          </form>
        <!-- Fin Formulaire de contact -->

    </div>
@endsection
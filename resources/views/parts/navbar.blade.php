<header class="bg-white shadow-xl z-50 sticky top-0">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 " aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="{{route('home')}}" class="-m-1.5 p-1.5">
          {{-- <span class="sr-only">Your Company</span> --}}
          <img class="h-20 w-auto" src="{{asset('img/logo.png')}}" alt="Logo de synergie">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="openCollapse">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="{{route('home')}}" class="text-lg font-semibold leading-6 text-slate-700">Accueil</a>
        <a href="{{route('blog')}}" class="text-lg font-semibold leading-6 text-slate-700">Avenir OI</a>
        <a href="{{route('catalogue')}}" class="text-lg font-semibold leading-6 text-slate-700">Catalogue de formation</a>
        <a href="{{route('centres')}}" class="text-lg font-semibold leading-6 text-slate-700">Nos centres</a>
        <a href="{{route('contact.index')}}" class="text-lg font-semibold leading-6 text-slate-700">Contact</a>
        <a href="{{route('recrutement')}}" class="text-lg font-semibold leading-6 text-slate-700">Espace Recrutement</a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="hidden lg:hidden" role="dialog" aria-modal="true" id="collapse">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-20 w-auto" src="{{asset('img/logo.png')}}" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="closeCollapse">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold leading-6 text-slate-800">Accueil</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold leading-6 text-slate-800">Avenir OI</a>
                <a href="catalogue" class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold leading-6 text-slate-800">Catalogue de formation</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold leading-6 text-slate-800">Nos centres</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold leading-6 text-slate-800">Contact</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold leading-6 text-slate-800">Espace Recrutement</a>
              
            </div>
            {{-- <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </header>
  
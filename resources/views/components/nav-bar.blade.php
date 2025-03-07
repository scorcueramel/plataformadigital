<header
{{--    {{ $attributes->merge(['class' => 'sticky inset-0 z-50 backdrop-blur-lg mb-4 py-8 '.$class]) }}>--}}
    {{ $attributes->merge(['class' => 'backdrop-blur-lg mb-4 py-8 '.$class]) }}>
    <nav class="mx-auto flex max-w-7xl gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12">
        <div class="relative flex items-center">
            <a href="{{route('public.home')}}">
                <img  src="{{asset('assets/images/LOGOS-INSTITUCIONALES-BLANCO.png')}}" loading="lazy" style="color:transparent" width="180">
            </a>
        </div>
        <ul class="hidden items-center justify-center gap-6 md:flex">
            <li class="pt-1.5 font-dm text-xl font-medium text-slate-700 text-white">
                <a href="{{route('public.home')}}" class="hover:text-[#91F100] {{request()->routeIs('public.home') ? 'border-b-2 border-white hover:border-[#91F100]' : ''}}">Inicio</a>
            </li>
            <li class="pt-1.5 font-dm text-xl font-medium text-slate-700 text-white">
                <a href="#" class="hover:text-[#91F100]">Preguntas Frecuentes</a>
            </li>
        </ul>
        <div class="flex-grow"></div>
        <div class="hidden items-center justify-center gap-6 md:flex">
            <a href="#"
               class="rounded-full bg-white px-8 py-3 font-dm text-xl font-medium text-[#005EA5] hover:bg-[#91F100] hover:shadow-md hover:shadow-[#91F100]/50 transition-transform duration-200 ease-in-out hover:scale-[1.03] hover:text-[#005EA5]">
                Ingreso
            </a>
        </div>
        <div class="relative flex items-center justify-center md:hidden">
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-auto text-slate-900"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
            </button>
        </div>
    </nav>
</header>

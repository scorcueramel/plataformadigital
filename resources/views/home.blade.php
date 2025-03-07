@extends('layout.public.app')
@push('css')
    <style>
        #default-carousel {
            margin-left: -320px !important;
        }

        #images-carousel {
            height: 500px !important;
        }

        #images-carousel > div > img {
            height: 500px !important;
        }

        #slider-buttons {
            margin-top: -80px !important;
            padding: 20px;
        }

        #aplicaciones {
            margin-top: -100px !important;
        }

    </style>
@endpush
@section('content')
    <div class="bg-radial-[at_50%_75%] from-[#398BF7] via-[#005EA5] to-[#005EA5] to-90%">
        <x-nav-bar></x-nav-bar>

        <div class="flex mx-auto items-center max-w-7xl">
            <form class="ms-20 mx-auto w-full z-20">
                <h3 class="text-white font-normal text-2xl mb-4 text-center">¡Hagámoslo facil!</h3>
                <h2 class="text-white font-medium text-4xl mb-8 text-center">¿Qué servicio estás búscando?</h2>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <button type="button" id="search" class="absolute inset-y-0 start-0 flex items-center mx-6">
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                    <input type="text"
                           name="services"
                           list="services"
                           id="search-input"
                           class="block w-3xl ps-16 text-lg text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-[#1DD3B0] h-16"
                           placeholder="Búsca un serivcio"
                    >
                    <datalist id="services">
                        @foreach($data as $d)
                            <option value="{{$d["serviceName"]}}"></option>
                        @endforeach
                    </datalist>
                </div>

                <div class="flex mt-8">
                    <p class="text-xl text-gray-900 dark:text-white me-3">Accesos directos : </p>
                    <div>
                        <a href="#"
                           role="button"
                           class="text-[#005EA5] border border-[#91F100] hover:border-white hover:bg-white hover:text-[#005EA5] bg-[#91F100] rounded-full text-base font-medium px-3 py-2 text-center cursor-pointer">
                            Mesa de partes
                        </a>
                        <a href="#"
                           role="button"
                           class="text-[#005EA5] border border-[#91F100] hover:border-white hover:bg-white hover:text-[#005EA5] bg-[#91F100] rounded-full text-base font-medium px-3 py-2  text-center cursor-pointer mx-1">
                            Información pública
                        </a>
                        <a href="#"
                           role="button"
                           class="text-[#005EA5] border border-[#91F100] hover:border-white hover:bg-white hover:text-[#005EA5] bg-[#91F100] rounded-full text-base font-medium px-3 py-2  text-center cursor-pointer">
                            Notificacines eléctronicas
                        </a>
                    </div>
                </div>

            </form>

            <x-carousel></x-carousel>

        </div>

        <div class="curva flex justify-center mt-4">
            <img src="{{asset('assets/images/wave.svg')}}" class="w-full h-full z-10 bg-transparent" alt="curvita"
                 style="margin-top: -20px">
        </div>

    </div>

    <x-applications></x-applications>

    <x-telefonos-emergencia></x-telefonos-emergencia>

    <x-footer></x-footer>
@endsection
@push('js')
    <script src="{{asset('assets/js/personalized/buscador.js')}}"></script>
@endpush

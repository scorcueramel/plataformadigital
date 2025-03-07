@extends('layout.public.app')
@push('css')
    <style>
        li > a:hover {
            border-bottom: 2px solid #91F100;
        }

        .curva {
            margin-top: -200px !important;
            height: 20px !important;
        }
    </style>
@endpush
@section('content')
    <x-nav-bar type="blue"></x-nav-bar>
    <section class="w-full flex justify-center bg-radial-[at_50%_75%] from-[#398BF7] via-[#005EA5] to-[#005EA5] to-90%">
        <div class="w-2/4 mt-24">
            <div class="flex items-center mx-auto me-2.5 z-40">
                <form class="mx-auto w-full">
                    <h3 class="text-white font-normal text-2xl">¡Hagámoslo facil!</h3>
                    <h2 class="text-white font-medium text-4xl mb-10">¿Qué servicio estás búscando?</h2>
                    <label for="default-search"
                           class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 cursor-pointer">
                            <svg class="w-6 h-6 me-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                               class="block w-xl p-4 ps-10 text-xl text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 h-20"
                               placeholder="Búsca un servicio..."/>
                    </div>
                </form>
                <x-carousel></x-carousel>
            </div>
        </div>
    </section>
    <div class="curva bg-transparent">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
            <path fill="#FF0000" fill-opacity="1"
                  d="M0,224L120,202.7C240,181,480,139,720,138.7C960,139,1200,181,1320,202.7L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
    </div>
@endsection

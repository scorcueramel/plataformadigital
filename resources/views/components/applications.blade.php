<div class="w-full z-50 py-30" id="aplicaciones">
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <div class="text-center my-4">
            <p class="text-5xl text-gray-600 font-bold">¿Tienes prisa? ¡Lo sabemos!</p>
            <p class="text-2xl text-gray-600 font-normal my-6">A continuación te listamos los servicios de tu
                <strong>
                    <u>plataforma gitital.</u>
                </strong>
            </p>
        </div>
        <div class="text-center">
            <button type="button"
                    value="Todas"
                    onclick="filterService('Todas')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] bg-white focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white hover:bg-[#005EA5] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value button-all">
                Todos
            </button>
            <button type="button"
                    value="MesadePartes"
                    onclick="filterService('MesadePartes')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] hover:border-[#005EA5] hover:bg-[#005EA5] focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white bg-white rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value">
                Mesa de partes
            </button>
            <button type="button"
                    value="InformacionPublica"
                    onclick="filterService('InformacionPublica')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] hover:border-[#005EA5] hover:bg-[#005EA5] focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white bg-white rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value">
                Información pública
            </button>
            <button type="button"
                    value="NotificacionElectronica"
                    onclick="filterService('NotificacionElectronica')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] hover:border-[#005EA5] hover:bg-[#005EA5] focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white bg-white rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value">
                Notificacines eléctronicas
            </button>
            <button type="button"
                    value="PortalTributario"
                    onclick="filterService('PortalTributario')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] hover:border-[#005EA5] hover:bg-[#005EA5] focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white bg-white rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value">
                Portal tributario
            </button>
            <button type="button"
                    value="AtencionVecino"
                    onclick="filterService('AtencionVecino')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] hover:border-[#005EA5] hover:bg-[#005EA5] focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white bg-white rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value">
                Atención al vecino
            </button>
            <button type="button"
                    value="LicenciaWeb"
                    onclick="filterService('LicenciaWeb')"
                    class="text-[#1DD3B0] border border-[#1DD3B0] hover:border-[#005EA5] hover:bg-[#005EA5] focus:bg-[#005EA5] focus:border-[#005EA5] focus:text-white hover:text-white bg-white rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 cursor-pointer button-value">
                Licencias web
            </button>
        </div>
    </div>
    <div class="grid grid-cols-2 justify-items-center md:grid-cols-4 gap-4 text-center px-96" id="servicios"></div>


{{--    <div class="grid grid-cols-2 justify-items-center md:grid-cols-3 gap-4 text-center px-96">--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_subsanar_documentacion.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_sugerencias_virtuales.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_acceso_a_la_informacion_publical.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_cuponera_virtual.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_documentacion_sustentatoria.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_estado_de_cuenta.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_estado_de_mi_registro.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_libro_de_reclamaciones_virtual.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_mesa_de_partes_virtual.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_mis_documentosl.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_notificacion_electronical.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_pagos_en_linea.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_quejas.png')}}" alt="">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img class="h-auto max-w-full rounded-xl drop-shadow-md hover:drop-shadow-2xl p-4 cursor-pointer"--}}
{{--                 src="{{asset('assets/images/Icono_requerimientos.png')}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $data =
            [
                [
                    'serviceName' => "Mesa de partes",
                    'category' => "MesadePartes",
                    'state' => true,
                    'image' => "assets/images/Icono_mesa_de_partes_virtual.png",
                    'url' => "https =>//apps.munisurco.gob.pe/pladigsurco/mpv_RegistraDocumento.aspx#no-back-button",
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Información pública",
                    'category' => "InformacionPublica",
                    'state' => true,
                    'image' => "assets/images/Icono_acceso_a_la_informacion_publical.png",
                    'url' => "https =>//apps.munisurco.gob.pe/pladigsurco/aip_RegistraSolicitud.aspx#no-back-button",
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Notificaciones electrónicas",
                    'category' => "NotificacionElectronica",
                    'state' => true,
                    'image' => "assets/images/Icono_notificacion_electronical.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Pagos en linea",
                    'category' => "PortalTributario",
                    'state' => true,
                    'image' => "assets/images/Icono_pagos_en_linea.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Estado de cuenta",
                    'category' => "PortalTributario",
                    'state' => true,
                    'image' => "assets/images/Icono_estado_de_cuenta.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Cuponera virtual",
                    'category' => "PortalTributario",
                    'state' => true,
                    'image' => "assets/images/Icono_cuponera_virtual.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Sugerencias",
                    'category' => "AtencionVecino",
                    'state' => true,
                    'image' => "assets/images/Icono_sugerencias_virtuales.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Requerimientos",
                    'category' => "AtencionVecino",
                    'state' => true,
                    'image' => "assets/images/Icono_requerimientos.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Quejas",
                    'category' => "AtencionVecino",
                    'state' => true,
                    'image' => "assets/images/Icono_quejas.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Libro de Reclamaciones",
                    'category' => "AtencionVecino",
                    'state' => true,
                    'image' => "assets/images/Icono_libro_de_reclamaciones_virtual.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Estado de mi Registro",
                    'category' => "AtencionVecino",
                    'state' => true,
                    'image' => "assets/images/Icono_estado_de_mi_registro.png",
                    'url' => '#',
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Anexar Documentos",
                    'category' => "MesadePartes",
                    'state' => false,
                    'image' => "assets/images/Icono_documentacion_sustentatoria.png",
                    'url' => "https =>//apps.munisurco.gob.pe/pladigsurco/mpv_RegistraAnexo.aspx#no-back-button",
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Subsanar Documentos",
                    'category' => "MesadePartes",
                    'state' => false,
                    'image' => "assets/images/Icono_subsanar_documentacion.png",
                    'url' => "https =>//apps.munisurco.gob.pe/pladigsurco/mpv_RegistraSubsanacion.aspx#no-back-button",
                    'active' => false,
                    'authenticate' => false,
                ],
                [
                    'serviceName' => "Mis Documentos",
                    'category' => "MesadePartes",
                    'state' => false,
                    'image' => "assets/images/Icono_mis_documentosl.png",
                    'url' => "https =>//apps.munisurco.gob.pe/pladigsurco/mpv_MisDocumentos.aspx#no-back-button",
                    'active' => false,
                    'authenticate' => false,
                ]
            ];
        return view('home', ['data' => $data]);
    }
}

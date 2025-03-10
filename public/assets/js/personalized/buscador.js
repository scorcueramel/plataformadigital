let services = {
    data: [
        {
            serviceName: "Mesa de partes",
            category: "MesadePartes",
            state: true,
            image: "assets/images/Icono_mesa_de_partes_virtual.png",
            url: "//apps.munisurco.gob.pe/pladigsurco/mpv_RegistraDocumento.aspx#no-back-button",
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Información pública",
            category: "InformacionPublica",
            state: true,
            image: "assets/images/Icono_acceso_a_la_informacion_publical.png",
            url: "//apps.munisurco.gob.pe/pladigsurco/aip_RegistraSolicitud.aspx#no-back-button",
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Notificaciones electrónicas",
            category: "NotificacionElectronica",
            state: true,
            image: "assets/images/Icono_notificacion_electronical.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Pagos en linea",
            category: "PortalTributario",
            state: true,
            image: "assets/images/Icono_pagos_en_linea.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Estado de cuenta",
            category: "PortalTributario",
            state: true,
            image: "assets/images/Icono_estado_de_cuenta.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Cuponera virtual",
            category: "PortalTributario",
            state: true,
            image: "assets/images/Icono_cuponera_virtual.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Sugerencias",
            category: "AtencionVecino",
            state: true,
            image: "assets/images/Icono_sugerencias_virtuales.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Requerimientos",
            category: "AtencionVecino",
            state: true,
            image: "assets/images/Icono_requerimientos.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Quejas",
            category: "AtencionVecino",
            state: true,
            image: "assets/images/Icono_quejas.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Libro de Reclamaciones",
            category: "AtencionVecino",
            state: true,
            image: "assets/images/Icono_libro_de_reclamaciones_virtual.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Estado de mi Registro",
            category: "AtencionVecino",
            state: true,
            image: "assets/images/Icono_estado_de_mi_registro.png",
            url: '#',
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Anexar Documentos",
            category: "MesadePartes",
            state: true,
            image: "assets/images/Icono_documentacion_sustentatoria.png",
            url: "//apps.munisurco.gob.pe/pladigsurco/mpv_RegistraAnexo.aspx#no-back-button",
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Subsanar Documentos",
            category: "MesadePartes",
            state: true,
            image: "assets/images/Icono_subsanar_documentacion.png",
            url: "//apps.munisurco.gob.pe/pladigsurco/mpv_RegistraSubsanacion.aspx#no-back-button",
            active: false,
            authenticate: false,
        },
        {
            serviceName: "Mis Documentos",
            category: "MesadePartes",
            state: true,
            image: "assets/images/Icono_mis_documentosl.png",
            url: "//apps.munisurco.gob.pe/pladigsurco/mpv_MisDocumentos.aspx#no-back-button",
            active: false,
            authenticate: false,
        }
    ],
};

for (let i of services.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hidden");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let url = document.createElement("a");
    url.setAttribute("href", i.url);
    imgContainer.appendChild(url);
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    image.classList.add("h-auto");
    image.classList.add("max-w-full");
    image.classList.add("rounded-xl");
    image.classList.add("drop-shadow-md");
    image.classList.add("hover:drop-shadow-2xl");
    image.classList.add("p-4");
    image.classList.add("cursor-pointer");
    url.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    // let name = document.createElement("h5");
    // name.classList.add("service-name");
    // name.innerText = i.serviceName.toUpperCase();
    // container.appendChild(name);

    card.appendChild(container);
    document.getElementById("servicios").appendChild(card);
}

//parameter passed from button (Parameter same as category)
function filterService(value) {
    // console.log(value.toUpperCase());
    //Button class code
    // let buttons = document.querySelectorAll(".button-value");
    // buttons.forEach((button) => {
    //     //check if value equals innerText
    //     // console.log(value.toUpperCase());
    //     //console.log(button.innerText.toUpperCase());
    //
    //     if (value.toUpperCase() == button.value.toUpperCase()) {
    //         button.classList.add("active");
    //     } else {
    //         button.classList.remove("active");
    //     }
    // });

    //select all cards
    let elements = document.querySelectorAll(".card");

    //loop through all cards
    elements.forEach((element, index) => {
        //display all cards on 'all' button click
        if (value === "Todas") {
            //element.classList.remove("hide");
            if (services.data[index].state) {
                //display element based on category
                element.classList.remove("hidden");

            } else {
                //hide other elements
                element.classList.add("hidden");
            }
        } else {
            //Check if element contains category class
            if (element.classList.contains(value)) {
                //display element based on category
                element.classList.remove("hidden");
            } else {
                //hide other elements
                element.classList.add("hidden");
            }
        }
    });
}

//Search button click
// document.getElementById("search").addEventListener("click", () => {
//     text = document.getElementById("search-input").value;
//
//     if (text.length == 0 ){
//         filterService("Todas");
//     }else
//     {
//         //initializations
//         let searchInput = document.getElementById("search-input").value;
//         let elements = document.querySelectorAll(".service-name");
//         let cards = document.querySelectorAll(".card");
//
//         //console.log(searchInput.toUpperCase());
//         //loop through all elements
//         elements.forEach((element, index) => {
//             //check if text includes the search value
//             if (element.innerText.includes(searchInput.toUpperCase()))
//             {
//                 //console.log(services.data[index].category.toUpperCase());
//                 let buttons = document.querySelectorAll(".button-value");
//                 buttons.forEach((button) => {
//                     //check if value equals innerText
//                     //console.log(services.data[index].category.toUpperCase() == button.value.toUpperCase());
//                     if (services.data[index].category.toUpperCase() == button.value.toUpperCase()) {
//                         //console.log(" service ->" + services.data[index].category.toUpperCase());
//                         //console.log(" button ->" + button.value.toUpperCase());
//                         button.classList.add("active");
//                     } else {
//                         button.classList.remove("active");
//                     }
//                 });
//
//                 //display matching card
//                 if (services.data[index].state) {
//                     cards[index].classList.remove("hide");
//                 }
//             } else {
//                 //hide others
//                 cards[index].classList.add("hide");
//             }
//         });
//     }
// });

//Initially display all services
window.onload = () => {
    filterService("Todas");
};

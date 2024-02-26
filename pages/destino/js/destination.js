let dstBanner = document.querySelector("#destBanner"),
  dstName = document.querySelector("#destName"),
  dstDesc = document.querySelector("#destDesc"),
  dstHotels = document.querySelector("#destHotels"),
  dstServices = document.querySelector("#destServices");

// Function to get URL parameters
function getUrlParameter(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
  var results = regex.exec(location.search);
  return results === null
    ? ""
    : decodeURIComponent(results[1].replace(/\+/g, " "));
}

// Get the selected destination
let urlDestination = getUrlParameter("destination");

let destinations = {
  havana: {
    name: "Havana",
    description:
      "As diving enthusiasts, we always seize any opportunity to plunge into the water, and if you're going to be in Havana, we can also dive into shipwrecks, coral reefs, and enjoy a diverse marine life. Indeed, Havana has several certified diving sites with excellent instructors that will allow us to appreciate the underwater world of the Havana coastline in the warm waters of the Caribbean Sea. We will encounter various vibrant tropical fish, such as angelfish, parrotfish, butterflyfish, and clownfish, along with other species like barracudas, rays, moray eels, lobsters, and crabs.",
    banner: "destino/images/havana/havana-banner.jpg",
    hotels: [
      {
        name: "Hotel Royalton Habana",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/3d/9c/ac/royalton-habana.jpg?w=700&h=-1&s=1",
      },
      {
        name: "Hotel Memories Miramar",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/a7/f2/bc/entrada-del-hotel.jpg?w=700&h=-1&s=1",
      },
      {
        name: "Hotel Parque Central",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/15/c9/f7/iberostar-parque-central.jpg?w=700&h=-1&s=1",
      },
      {
        name: "Hotel Packard",
        image:
          "https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_600,q_auto,w_600//hotelier-images/8b/84/6895a3f85dc50db54ca30e18eca03d08f7b1e421d1733b7108b4d3ac1ec1.jpeg",
      },
      {
        name: "Hotel Melia Habana",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/58/a1/b1/fb-img-1503196494981.jpg?w=300&h=-1&s=1",
      },
      {
        name: "Hotel Melia Cohiba",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/06/19/72/exteriores-del-hotel.jpg?w=700&h=-1&s=1",
      },
      {
        name: "Hostales",
        image: "",
      },
    ],
    services: [
      {
        type: "immersion",
        name: "Buceo en arrecifes coralinos de la Habana",
        description:
          "Descubre la belleza del mundo submarino con esta experiencia de buceo en arrecife de coral. Un instructor certificado te guiará a través de una inmersión segura y emocionante. Tu aventura comienza con una bienvenida en el centro de buceo, donde se preparará el plan de inmersión con toda la información necesaria del sitio de buceo, las medidas de seguridad, y temas generales.  A continuación, subirás a una lancha que te llevará al sitio de buceo. Durante el trayecto, podrás disfrutar de las vistas panorámicas de la hermosa Habana. Al llegar al sitio de buceo, te prepararás para la inmersión. Tu instructor te ayudará en todo lo que necesites para trasladarte confianza y guiarte para disfrutar al máximo la experiencia. Descenderás en aguas abiertas según la certificación que poseas. Podrás explorar en el arrecife de coral, donde hay varias formaciones coralinas y multitud de especies tropicales, destacando los alevines, pez león, morenas y rayas Podrás ver una gran variedad de peces, corales y otras criaturas marinas. La inmersión durará aproximadamente 50 minutos, podrá ser más o menos tiempo en dependencia de tu propio consumo. Al finalizar, regresarás a la lancha para volver al centro de buceo. Esta experiencia es una excelente manera de descubrir el mundo submarino de la majestuosa Habana, donde el mar complementa los encantos que ofrece esta maravillosa ciudad en tierra.",
        schedule: "1 Enero a 31 Dic 2024, 9am-3pm",
        duration: "2 hours",
        prices: ["Tarifa: 40 usd", "Tarifa Privada: 240 por el grupo de 6"],
        cancelation_policy: "Custom 0-1 dia  100%, 1-2 dias 75%, 2-3 dias 50%",
        misc: "El Servicio incluye Embarcación, equipamiento completo, tanques, lastre e instructor x cada 6 buzos. Todos los clientes deberán ser mayores de 12 años (entre 12 y 18 acompañados de un tutor), presentar su certificación de buceo y pasaporte y firmar un acta de exoneración de responsabilidad para poder realizar actividades de buceo en los centros de buceo.",
      },
      {
        type: "excursion",
        name: "Paseo por el litoral habanero",
        description:
          "Salida desde la marina Hemingway navegando en dirección Este hasta la altura de la entrada de la bahía de La Habana donde el cliente podrá contemplar parte del litoral habanero y disfrutar de una vista panorámica de la ciudad. Tiempo para realizar baños de mar de regreso a La Marina. incluye: Bebidas nacionales a bordo. ",
        schedule: "",
        duration: "3 hours",
        prices: [
          "Precio Costo: 255.00 hasta 4pax, A partir del 5to pax, paga 29.00 por pax. Niños de 3 a 12 años solo pagan el 50%",
          "Precio Publico: 300.00 hasta 4 pax, A partir del 5to pax paga 34.00 por pax. Niños de 3 a 12 años solo pagan el 50%",
        ],
        cancelation_policy: "",
        misc: "",
      },
      {
        type: "excursion",
        name: "Seafari",
        description:
          "Es la combinación de varias actividades náuticas. En esta modalidad la embarcación permanece fondeada permitiéndole al cliente hacer snorkeling y contemplar la belleza de los fondos marinos, tomar baños de sol y realizar pesca al curricán. Incluye: avíos para la pesca, equipamiento para hacer snorkeling y bebidas nacionales a bordo",
        schedule: "",
        duration: "5 hours",
        prices: [
          "Precio Costo: 357.00 hasta pax. A partir del 5to pax paga 35.00 por pax. Niños de 3 a 12 años solo pagan el 50%.",
          "Precio Publico: 420.00 hasta 4 pax. A partir del 5to pax paga 42.50 por pax. Niños de 3 a 12 años solo pagan el 50%.",
        ],
        cancelation_policy: "",
        misc: "",
      },
      {
        type: "excursion",
        name: "La Habana en Autos Clasicos",
        description:
          "You will be picked up at the hotel or rental house where you are rented (let us know in the additional note of the booking process).  Then, we will tour the most magical places with the best views of the city such as the Hotel Nacional, the Almendares River, the University of Havana, the Revolution Square and the Christ of Havana. We will make some stops to enjoy the views and take pictures.",
        schedule: "",
        duration: "3 hours",
        prices: ["Precio: 130 EUR"],
        cancelation_policy: "",
        misc: "",
      },
      {
        type: "excursion",
        name: "Habana Panorámica en Motos",
        description:
          "Welcome to the Daiquiri Tours house, where you will learn about their exclusive product Cuba on the Road, on 6th Street between 5th and 5th A, Miramar.  Departure through the Havana Forest, stop for photos at Josefina Island. Climb to the hill of the three little dogs with panoramic view of the favored neighborhood of Nuevo Vedado and the National Zoo. Panoramic view of the Colon Cemetery, Cuba's National Monument since 1987. Continue to the iconic Plaza de la Revolución, with a stop for photos. Then we will continue with a panoramic view of the University of Havana and its university stadium. We will go down San Francisco Street, following the historic route of the students to the end, where the monument to the 8 medical students stands. We will continue along the Prado promenade to the Capitolio, the Central Park and then we will walk along the Malecon to the Plaza Vieja to see the historic center of the city. Return with a panoramic walk along the Malecon to the starting point at Daiquiri and its Cuba on the Road.",
        schedule: "",
        duration: "2 hours",
        prices: ["Precio: 60 EUR"],
        cancelation_policy: "",
        misc: "",
      },
      {
        type: "excursion",
        name: "Pedaleando en la Habana",
        description:
          "We will start by welcoming you to the home of Daiquiri Tours, where you will learn about their exclusive product Cuba on the Road, on 6th Street between 5th and 5th A, Miramar.  Departure through the Metropolitan Park of Havana, to appreciate the Cuban Flora, stop for photos at Josefina Island. Panoramic view of the National Zoo and the Necropolis of Colon. Continue to the iconic Plaza de la Revolución, with photo stop. Then we will continue with a panoramic view of the University of Havana and its university stadium. We will go down L Street and walk through the Vedado area of the capital. Stop with a visit to the gardens of the Hotel Nacional and then we return enjoying the breeze of the Malecón Habanero to the starting point at Daiquirí and its Cuba on the Road.",
        schedule: "",
        duration: "2 hours",
        prices: ["Precio: 60 EUR"],
        cancelation_policy: "",
        misc: "",
      },
    ],
  },
  varadero: {
    name: "Varadero",
    description:
      "Varadero is one of the most recognized and awarded tourist resorts in the world year after year. In addition to its beautiful beaches and the numerous water activities it offers, it boasts admirable and well-preserved underwater ecosystems in warm and crystal-clear waters throughout the year, allowing for an enriching underwater experience. Multiple marine species coexist among the coral reefs and shipwrecks, which can be enjoyed with excellent visibility near the entry point and the start of the dive.",
    banner: "destino/images/varadero/varadero-banner.jpg",
    hotels: [
      {
        name: "ROYALTON HICACOS",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/a7/dc/14/royalton-hicacos-varadero.jpg?w=700&h=-1&s=1",
      },
      {
        name: "MYSTIQUE CASA PERLA",
        image:
          "https://media-cdn.tripadvisor.com/media/photo-s/21/f5/7d/01/mystique-casa-perla.jpg",
      },
      {
        name: "IBEROSTAR SELECTION VARADERO",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/af/90/8b/iberostar-selection-varadero.jpg?w=700&h=-1&s=1",
      },
      {
        name: "SOL CARIBE BEACH",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/72/b2/2c/sol-caribe-beach.jpg?w=700&h=-1&s=1",
      },
      {
        name: "SOL VARADERO BEACH",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/43/05/c9/sol-varadero-beach-all.jpg?w=700&h=-1&s=1",
      },
      {
        name: "MELIA VARADERO",
        image:
          "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/a4/53/e1/melia-varadero.jpg?w=700&h=-1&s=1",
      },
    ],
    services: [
      {
        type: "excursion",
        name: "Russian Frigate #383 Dive Site",
        description:
          "Discover the captivating depths of the Russian Frigate #383, a Konning-class warship sunk in 1998. With a remarkable length of 98 meters and a width of 17.5 meters, this dive site offers an exhilarating adventure. Descending to a maximum depth of 30 meters, you'll encounter a mesmerizing world teeming with marine life",
        schedule: "",
        duration: "",
        prices: [],
        cancelation_policy: "",
        misc: "",
      },
      {
        type: "excursion",
        name: "Claraboyas 1 Coral Reef Dive Site",
        description:
          "Prepare to be enchanted by the mesmerizing Claraboyas 1 Coral Reef Dive Site. With a maximum depth of 27 meters and an average depth of 14 meters, this vibrant coral reef offers a breathtaking underwater spectacle.",
        schedule: "",
        duration: "",
        prices: [],
        cancelation_policy: "",
        misc: "",
      },
      {
        type: "excursion",
        name: "Sunken Tug Ship Dive Site",
        description:
          "Embark on an exploration of the Sunken Tug Ship Dive Site, where history and marine life converge in a remarkable underwater setting. This tug ship, sunk in 1998, rests at a maximum depth of 18 meters, inviting divers into its captivating realm",
        schedule: "",
        duration: "",
        prices: [],
        cancelation_policy: "",
        misc: "",
      },
    ],
  },
};

// banner
dstBanner.src = destinations[urlDestination].banner;
// nombre del destino
dstName.innerHTML = destinations[urlDestination].name;
// descripcion
dstDesc.innerHTML = destinations[urlDestination].description;
// hoteles
destinations[urlDestination]["hotels"].forEach((htl) => {
  setHotelCard(htl.name, "", htl.image);
});
// services
destinations[urlDestination]["services"].forEach((serv) => {
  setServiceCard(
    "",
    serv.type,
    serv.name,
    serv.description,
    serv.schedule,
    serv.duration,
    [],
    serv.misc
  );
});

function setHotelCard(hName = "", hDesc = "", hImg = "") {
  dstHotels.innerHTML += `<div id="hotelCard" class="card m-2" style="max-width: 300px; padding:0px; overflow:hidden">
          <img class="card-img-top hotelImage" src=${hImg} alt="${hName}" style="height:100%;" />
          <div class="card-body">
            <h4 id="hotelName" class="card-title text-center">${hName}</h4>
            <p id="hotelDesc" class="card-text">${hDesc}</p>
          </div>
        </div>`;
}

function setServiceCard(
  sImg = "",
  sType = "",
  sName = "",
  sDesc = "",
  sSchedule = "",
  sDuration = "",
  sPrices = [],
  sMisc = ""
) {
  let hidden = sImg === "" ? `hidden` : ``;
  dstServices.innerHTML += `<div class="card mb-3" >
          <div class="row g-0">
            <div ${hidden} class="col-md-4">
              <img src=${sImg}
                class="img-fluid rounded-start"
                alt="Card title"
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">${sName}</h5>
                <p class="card-text">${sDesc}</p>
                <p class="card-text">
                  <small class="text-muted"
                    >Schedule: ${sSchedule}</small
                  >
                </p>
                <p class="card-text">
                  <small class="text-muted"
                    >Duration: ${sDuration}</small
                  >
                </p>
              </div>
            </div>
          </div>
        </div>`;
}

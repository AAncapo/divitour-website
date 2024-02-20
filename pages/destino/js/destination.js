let dstName = document.querySelector("#destName"),
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
let urlDestination = getUrlParameter("dest");

let destinations = {
  havana: {
    name: "Havana",
    description:
      "As diving enthusiasts, we always seize any opportunity to plunge into the water, and if you're going to be in Havana, we can also dive into shipwrecks, coral reefs, and enjoy a diverse marine life. Indeed, Havana has several certified diving sites with excellent instructors that will allow us to appreciate the underwater world of the Havana coastline in the warm waters of the Caribbean Sea. We will encounter various vibrant tropical fish, such as angelfish, parrotfish, butterflyfish, and clownfish, along with other species like barracudas, rays, moray eels, lobsters, and crabs.",
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
        name: "Hotel Hostal",
        image:
          "https://media-cdn.tripadvisor.com/media/photo-s/04/35/67/d1/cuba-colonial.jpg",
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
        misc: "El Serivcio incluye Embarcación, equipamiento completo, tanques, lastre e instructor x cada 6 buzos. Todos los clientes deberán ser mayores de 12 años (entre 12 y 18 acompañados de un tutor), presentar su certificación de buceo y pasaporte y firmar un acta de exoneración de responsabilidad para poder realizar actividades de buceo en los centros de buceo.",
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
        misc: "",
      },
    ],
  },
};

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
          <img class="card-img-top hotelImage" src=${hImg} alt="Title" style="height:100%;" />
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

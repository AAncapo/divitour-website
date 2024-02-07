const eventContact = document.querySelector(".ev-contact-a");
const contactForm = document.querySelector(".contact-form");
const popDestContainer = document.querySelector(".pop-destinations");
const navBtns = document.querySelectorAll(".nav-btn");

const imgPath = "images/destinos/";

eventContact.addEventListener("click", () => {
  contactForm.style.height = `300px`;
});

// toggle show/hide navbuttons list on click
navBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    let elem;
    if (btn.firstElementChild) {
      if (btn.lastElementChild.style.opacity > 0) {
        btn.lastElementChild.style.opacity = 0;
      } else {
        btn.lastElementChild.style.opacity = 100;
      }
    }
  });
});

// set destination cards in home Destinations section
// varadero
setDestination(
  `${imgPath}varadero/varadero.jpg`,
  "Varadero",
  "Varadero is one of the most recognized and awarded tourist resorts in the world year after year. In addition to its beautiful beaches and the numerous water activities it offers, it boasts admirable and well-preserved underwater ecosystems in warm and crystal-clear waters throughout the year, allowing for an enriching underwater experience. Multiple marine species coexist among the coral reefs and shipwrecks, which can be enjoyed with excellent visibility near the entry point and the start of the dive."
);
// cayo largo
setDestination(
  `${imgPath}cayolargo/cayolargo1.png`,
  "Cayo Largo del Sur",
  "Cayo Largo is a paradise destination for diving enthusiasts. Located in the Canarreos Archipelago, Cuba, this cay offers a unique and thrilling underwater experience. Its turquoise and crystal-clear waters are home to a great diversity of marine life and spectacular coral reefs. Divers can explore impressive vertical walls covered in coral, underwater caves, canyons, and vibrant coral gardens. The visibility in the waters of Cayo Largo is exceptional, easily reaching 30 meters or more. This allows for detailed appreciation of the beauty of the corals, as well as the observation of brightly colored tropical fish, sea turtles, rays, sharks, and other fascinating species."
);
// jibacoa
setDestination(
  `${imgPath}jibacoa/jibacoa-1920.png`,
  "Jibacoa",
  "Scuba diving at Memories Jibacoa offers divers access to a variety of technical diving experiences. The dive center is equipped with high-quality gear, including air tanks and compressors, ensuring a reliable and safe diving operation. The water temperature ranges from 24°C to 30°C, providing comfortable diving conditions year-round."
);
// havana
setDestination(
  `${imgPath}havana/havana.JPG`,
  "Havana",
  "As diving enthusiasts, we always seize any opportunity to plunge into the water, and if you're going to be in Havana, we can also dive into shipwrecks, coral reefs, and enjoy a diverse marine life. Indeed, Havana has several certified diving sites with excellent instructors that will allow us to appreciate the underwater world of the Havana coastline in the warm waters of the Caribbean Sea."
);
// peninsula de zapata
setDestination(
  `${imgPath}zapata/zapata.jpg`,
  "Peninsula de Zapata",
  "Diving in the Playa Girón and Playa Larga area in the Zapata Peninsula is an exceptional experience for underwater enthusiasts. These coastal areas offer diverse diving sites and abundant marine life, making them popular destinations for divers."
);
// santa lucia
setDestination(
  `${imgPath}stlucia/brisas-santa-lucia.jpg`,
  "Santa Lucia",
  "As you dive into the waters of Santa Lucia, you'll discover stunning coral reefs teeming with life. The reefs boast a colorful array of hard and soft corals, including brain corals, sea fans, and sponges. These vibrant habitats provide a home to an abundance of tropical fish, such as angelfish, parrotfish, and butterflyfish, creating a mesmerizing underwater scene."
);

function setDestination(imgPath, dstName, descr) {
  let imgSrc = "" ? imgPath.length <= 0 : imgPath;

  popDestContainer.innerHTML += `<div class="dest-container"> <div class="dest-image"> <img src=${imgSrc}></img><div class="dest-text-bg"><h3 class="dest-name">${dstName} </h3><p class="dest-descr">${descr}</p> </div> </div> </div>`;
}

function setData() {
  //create data
  let destHabana = {
    havana: createDestino(
      "Havana",
      "descripcion de la Habana",
      [imgPathPrefix + "havana/havana.JPG"],
      [
        createHotel("Hotel1", "prueba descripcion del hotel1", [
          "https://www.memoriesresorts.com/assetsTransformed/assets/images/site/9497/OPB_IB_POOL_MAIN_D1704_013_5d115737bb40693b26d0f189b7a2eb16.jpg",
        ]),
        createHotel("Hotel2", "prueba de hotel 2", [
          "https://www.memoriesresorts.com/assetsTransformed/assets/images/site/9497/OPB_IB_POOL_MAIN_D1704_013_5d115737bb40693b26d0f189b7a2eb16.jpg",
        ]),
      ],
      [
        createServicio(
          "seafari test",
          "description del servicio este",
          [""],
          [230.32, "USD"],
          "detalles del precio",
          [24, "Horas"]
        ),
      ]
    ),
  };
  //clear data.json

  //populate data.json
  console.log("HEY!");

  fs.writeFileSync("../data.json", JSON.stringify(destHabana));
}

function createDestino(_name, desc, imgsPaths, hotels, services) {
  return {
    nombre: _name,
    descripcion: desc,
    images: imgsPaths,
    hoteles: hotels,
    servicios: services,
  };
}

function createHotel(_name, desc, imgsPaths) {
  return {
    nombre: _name,
    descripcion: desc,
    imagenes: imgsPaths,
  };
}

function createServicio(_name, desc, imgPaths, cost, costDetail, dur) {
  return {
    nombre: _name,
    decripcion: desc,
    coste: cost, // la info sobre los precios debe permanecer en el server !!!!!
    coste_detalle: costDetail, // para agregar detalles sobre costes por PAX
    duracion: dur,
    imagenes: imgPaths,
  };
}

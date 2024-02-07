//import { fs } from "node:fs";
//const fs = require("fs");

const gtoDestBtns = document.querySelectorAll(".goto-dest");
const popDestContainer = document.querySelector(".pop-destinations");
const navBtns = document.querySelectorAll(".nav-btn");

const imgPathPrefix = "images/destinos/";

//init data.json
//setData();

//add event on goto destination page butttons
gtoDestBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    //preventDefault
    e.preventDefault();
    let dest = btn.classList[1]; //TODO: check against json keys instead!!!!!
    //json -> get key -dest-

    //set information in destination.html to [dest]
    //open destination.html
  });
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

// set destination cards in home section Destinations
setDestination(imgPathPrefix + "varadero/varadero2.jpeg", "Varadero");
setDestination(
  imgPathPrefix + "cayolargo/cayolargo1.png",
  "Cayo Largo del Sur"
);
setDestination(imgPathPrefix + "jibacoa/jibacoa-1920.png", "Jibacoa");
setDestination(imgPathPrefix + "havana/havana.JPG", "Havana");
setDestination("", "Santiago de Cuba");
setDestination("", "Cayo Levisa");
setDestination("", "Peninsula de Zapata");
setDestination("", "Santa Lucia");
setDestination("", "Maria la Gorda");

function setDestination(imgPath, dstName) {
  let imgSrc = "" ? imgPath.length <= 0 : imgPath;
  let parr =
    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quod repudiandae maiores voluptas voluptatibus dolor, nostrum quam, fugit ex autem repellat ad qui vero veritatis illo enim, libero soluta eius!";

  popDestContainer.innerHTML += `<div class="dest-container"> <div class="dest-image"> <img src=${imgSrc}></img><div class="dest-text-bg"><h3 class="dest-name">${dstName} </h3><p class="dest-descr">${parr}</p> </div> </div> </div>`;
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

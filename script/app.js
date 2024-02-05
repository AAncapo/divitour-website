const popDestContainer = document.querySelector(".pop-destinations");
const navBtns = document.querySelectorAll(".nav-btn");

// show navbuttons list on click
navBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.firstElementChild) {
      if (btn.lastElementChild.style.opacity > 0) {
        btn.lastElementChild.style.opacity = 0;
      } else {
        btn.lastElementChild.style.opacity = 100;
      }
    }
  });
});

setDestinations("images/destinos/varadero/varadero2.jpeg", "Varadero");
setDestinations(
  "images/destinos/cayolargo/cayolargo1.png",
  "Cayo Largo del Sur"
);
setDestinations("images/destinos/jibacoa/jibacoa.JPG", "Jibacoa");
setDestinations("images/destinos/havana/havana.JPG", "Havana");
setDestinations("", "Santiago de Cuba");
setDestinations("", "Cayo Levisa");
setDestinations("", "Peninsula de Zapata");
setDestinations("", "Santa Lucia");
setDestinations("", "Maria la Gorda");

function setDestinations(imgPath, dstName) {
  let destContainerDiv = document.createElement("div");
  destContainerDiv.className = "dest-container";

  let destImageDiv = document.createElement("div");
  destImageDiv.className = "dest-image";
  destContainerDiv.appendChild(destImageDiv);

  let _img = document.createElement("img");
  if (imgPath === "") {
    _img.style.backgroundColor = "#fff";
  } else {
    _img.src = imgPath;
  }
  destImageDiv.appendChild(_img);

  // add gradient image
  let destTextBgDiv = document.createElement("div");
  destTextBgDiv.className = "dest-text-bg";
  destImageDiv.appendChild(destTextBgDiv);

  // name
  let destNameH = document.createElement("h3");
  destNameH.innerHTML = dstName;
  destNameH.className = "dest-name";
  // description
  let destDescP = document.createElement("p");
  destDescP.className = "dest-descr";
  destDescP.innerHTML =
    "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quod repudiandae maiores voluptas voluptatibus dolor, nostrum quam, fugit ex autem repellat ad qui vero veritatis illo enim, libero soluta eius!";
  destTextBgDiv.appendChild(destNameH);
  destTextBgDiv.appendChild(destDescP);

  popDestContainer.appendChild(destContainerDiv);
}

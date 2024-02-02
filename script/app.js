const popDestContainer = document.querySelector(".pop-destinations");

setDestinations("images/destinos/varadero/varadero2.jpeg", "Varadero");
setDestinations(
  "images/destinos/cayo-largo/cayolargo1.png",
  "Cayo Largo del Sur"
);
setDestinations("images/destinos/jibacoa.JPG", "Jibacoa");

function setDestinations(imgPath, dstName) {
  let destContainerDiv = document.createElement("div");
  destContainerDiv.className = "dest-container";

  let destImageDiv = document.createElement("div");
  destImageDiv.className = "dest-image";
  destContainerDiv.appendChild(destImageDiv);

  let _img = document.createElement("img");
  _img.src = imgPath;
  destImageDiv.appendChild(_img);

  let destTextBgDiv = document.createElement("div");
  destTextBgDiv.className = "dest-text-bg";
  destContainerDiv.appendChild(destTextBgDiv);

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

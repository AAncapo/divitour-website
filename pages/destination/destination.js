let navbar = document.querySelector(".navbar"),
  dstName = document.querySelector(".dest-name"),
  dstDesc = document.querySelector(".dest-desc");

let destinations = {
  havana: { name: "Havana", description: "", hotels: [] },
  varadero: { name: "Varadero", description: "", hotels: [] },
  guillermo: { name: "Cayo Guillermo", description: "", hotels: [] },
  stlucia: { name: "Santa Lucia", description: "", hotels: [] },
  zapata: { name: "Peninsula de Zapata", description: "", hotels: [] },
  cayolargo: { name: "Cayo Largo del Sur", description: "", hotels: [] },
  jibacoa: { name: "Jibacoa", description: "", hotels: [] },
  trinidad: { name: "Trinidad", description: "", hotels: [] },
};

function initPage(dstId) {
  if (!destinations.contains(dstId)) {
    console.log("Destination Id: " + dstId + ", not found in destinations.");
    window.location.href = "../../index.html";
  } else {
    dstName.innerHTML = destinations[dstId].name;
  }
}

export function initNavbar(navInnerHtml) {
  navbar.innerHTML = navInnerHtml;
}

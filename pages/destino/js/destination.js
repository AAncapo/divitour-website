let dstName = document.querySelector("#destName"),
  dstDesc = document.querySelector("#destDesc"),
  dstHotels = document.querySelector("#destHotels");

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
    hotels: [
      "Royalton Habana",
      "Memories Miramar",
      "Parque Central",
      "Packard",
      "Melia Habana",
      "Melia Cohiba",
      "Hostales",
    ],
  },
  varadero: {
    name: "Varadero",
    description:
      "Varadero is one of the most recognized and awarded tourist resorts in the world year after year. In addition to its beautiful beaches and the numerous water activities it offers, it boasts admirable and well-preserved underwater ecosystems in warm and crystal-clear waters throughout the year, allowing for an enriching underwater experience. Multiple marine species coexist among the coral reefs and shipwrecks, which can be enjoyed with excellent visibility near the entry point and the start of the dive.",
    hotels: [
      "ROYALTON HICACOS",
      "MYSTIQUE CASA PERLA",
      "IBEROSTAR SELECTION VARADERO",
      "SOL CARIBE BEACH",
      "SOL VARADERO BEACH",
      "MELIA VARADERO",
    ],
  },
  guillermo: { name: "Cayo Guillermo", description: "", hotels: [] },
  stlucia: {
    name: "Santa Lucia",
    description:
      "Diving in Santa Lucia, Camaguey offers a captivating underwater experience for diving enthusiasts. Located on the northern coast of Cuba, Santa Lucia is known for its pristine beaches and vibrant marine ecosystems. As you dive into the waters of Santa Lucia, you'll discover stunning coral reefs teeming with life. The reefs boast a colorful array of hard and soft corals, including brain corals, sea fans, and sponges. These vibrant habitats provide a home to an abundance of tropical fish, such as angelfish, parrotfish, and butterflyfish, creating a mesmerizing underwater scene. The visibility in Santa Lucia is generally excellent, allowing for clear views of the marine life and intricate coral formations. Water temperatures remain warm throughout the year, ensuring comfortable diving conditions. In addition to the coral reefs, Santa Lucia is also known for its encounters with larger marine species. Divers have the chance to spot sea turtles gracefully gliding through the water, as well as rays and various species of sharks. Santa Lucia offers well-equipped dive centers that provide professional guidance and rental equipment for both novice and experienced divers. Whether you're a beginner or an advanced diver, there are suitable dive sites catering to different skill levels and interests. Overall, diving in Santa Lucia, Camaguey promises an unforgettable experience with its vibrant coral reefs, diverse marine life, and the opportunity to witness captivating underwater encounters.",
    hotels: ["BRISAS SANTA LUCIA"],
  },
  zapata: {
    name: "Peninsula de Zapata",
    description: `Diving in the Playa Girón and Playa Larga area in the Zapata Peninsula is an exceptional experience for underwater enthusiasts. These coastal areas offer diverse diving sites and abundant marine life, making them popular destinations for divers. Underwater, you'll encounter stunning coral reefs housing a wide variety of marine species, including brain corals, fire corals, and gorgonians. Colorful tropical fish like angelfish, butterflyfish, and parrotfish thrive in these reefs. The visibility is excellent, allowing for clear views of marine life and reef details. Water temperatures remain warm year-round, providing comfortable diving conditions. The Zapata Peninsula is also known for encounters with larger marine creatures such as sea turtles, rays, sharks, and occasionally manatees. For beginners, there are professional dive centers that offer certification courses and expert guides to ensure a safe and exciting experience. In summary, diving in Playa Girón and Playa Larga offers breathtaking coral reefs, abundant marine life, and the opportunity to encounter fascinating underwater species. It's an ideal destination for divers of all levels and a unique opportunity to explore Cuba's underwater beauty.`,
    hotels: ["Hotel Playa Girón", "Casas Privadas", "Campers"],
  },
  cayolargo: {
    name: "Cayo Largo del Sur",
    description:
      "Cayo Largo is a paradise destination for diving enthusiasts. Located in the Canarreos Archipelago, Cuba, this cay offers a unique and thrilling underwater experience. Its turquoise and crystal-clear waters are home to a great diversity of marine life and spectacular coral reefs. Divers can explore impressive vertical walls covered in coral, underwater caves, canyons, and vibrant coral gardens. The visibility in the waters of Cayo Largo is exceptional, easily reaching 30 meters or more. This allows for detailed appreciation of the beauty of the corals, as well as the observation of brightly colored tropical fish, sea turtles, rays, sharks, and other fascinating species. In addition to the reefs, Cayo Largo features several shipwrecks that offer exciting exploration opportunities. These submerged wrecks provide a unique habitat for a variety of marine species and add an element of adventure to the dives. Diving centers in Cayo Largo have expert and certified staff and offer a wide range of options for divers of all levels, from beginners to experienced divers. Certification courses and specialized dive programs can also be undertaken.",
    hotels: [
      "MEMORIES CAYO LARGO",
      "STARFISH CAYO LARGO",
      "VILLA LINDA MAR",
      "Grand Memories Cayo Largo",
      "SANCTUARY GM",
    ],
  },
  jibacoa: {
    name: "Jibacoa",
    description:
      "Scuba diving at Memories Jibacoa offers divers access to a variety of technical diving experiences. The dive center is equipped with high-quality gear, including air tanks and compressors, ensuring a reliable and safe diving operation. The water temperature ranges from 24°C to 30°C, providing comfortable diving conditions year-round. Divers can explore vibrant coral reefs, walls, and fascinating shipwrecks. The reefs are home to a diverse range of marine life, including colorful tropical fish, turtles, rays, and moray eels. The walls offer thrilling dives with depths ranging from 10 to over 40 meters, adorned with coral and sponges, and inhabited by pelagic fish, sharks, and barracudas. The area's shipwrecks provide exciting opportunities for exploration, catering to divers of different skill levels. With excellent visibility often exceeding 30 meters, divers can fully appreciate the beauty of the underwater world. Memories Jibacoa ensures the safety of divers by providing experienced instructors who guide and oversee diving activities. Whether you're a beginner seeking certification or an experienced technical diver, Memories Jibacoa offers an enriching and adventurous diving experience in Cuba's pristine waters.",
    hotels: ["MEMORIES JIBACOA"],
  },
  trinidad: { name: "Trinidad", description: "", hotels: [] },
};

dstName.innerHTML = destinations[urlDestination].name;
dstDesc.innerHTML = destinations[urlDestination].description;
destinations[urlDestination]["hotels"].forEach((htl) => {
  setHotelCard(htl, "");
});

function setHotelCard(hName, hDesc) {
  dstHotels.innerHTML += `<div id="hotelCard" class="card" style="max-width: 300px">
          <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
          <div class="card-body">
            <h4 id="hotelName" class="card-title">${hName}</h4>
            <p id="hotelDesc" class="card-text">${hDesc}</p>
          </div>
        </div>`;
}

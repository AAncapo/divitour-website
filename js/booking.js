// let servCards = document.querySelectorAll('#servCard');
// let bookedItemsList = document.querySelector('#bookedItemsList');
// const offcanvas = document.querySelector('.offcanvas');

// let totalCost = 0;

// servCards.forEach(scard => {
//     let nombre = scard.querySelector('#servName').textContent;
//     let offersButton = scard.querySelector('#offersTrigger');
//     offersButton.addEventListener('click',() => {
//         updateOffcanvas(nombre, '0.00 USD');
//     });
// });


// function addNewBookedItem(nombre, precio) {
//     let bitem = `<div class="row w-100 align-items-center py-2">
//                     <p class="col fs-5 fw-semibold text-start m-0">${precio} - ${nombre} </p>
//                     <button id="removeBI" class="col-1 btn btn-danger fw-bold"> - </button>
//                 </div>`;
//     bookedItemsList.innerHTML += bitem;
//     return bitem;
// }

// function removeBookedItem() {

// }

// function updateOffcanvas(title, description) {
//     offcanvas.querySelector('#staticBackdropLabel').textContent = title;
//     offcanvas.querySelector('#offcanvasDesc').textContent = description;

//     let addButton = offcanvas.querySelector('#addReservation');
//     addButton.addEventListener('click', () => {
//         addNewBookedItem(title,description);
//         // CLEAR DATA INSIDE OFFCANVAS AND CLOSE
//     });
// }
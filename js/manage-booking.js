const childInput = document.querySelector('#childInput');
const adultsInput = document.querySelector('#adultsInput');
const curCost = document.querySelector('#currentCost');

let adultAmount = adultsInput.value;
let childAmount = childInput.value;

updateServiceUI();
setCurrentCost(adultAmount,childAmount);

function updateServiceUI () {
    // Events on input value change
    childInput.addEventListener('change', () => {
        childAmount = childInput.value;
        setCurrentCost(adultAmount,childAmount);
    })
    adultsInput.addEventListener('change', () => {
        adultAmount = adultsInput.value;
        setCurrentCost(adultAmount,childAmount);
    })
}

function setCurrentCost (adults, child) {
    const bCost = document.querySelector('#baseCost').textContent;
    const bLimit = document.querySelector('#baseLimit').textContent;
    const overCost = document.querySelector('#overCost').textContent;
    let currCost = (adults + child) <= bLimit ? bCost : overCost;

    
    let adultsCost = adults * currCost;
    let childsCost = child * (currCost * 0.5);
    curCost.textContent = `TOTAL COST: ${adultsCost + childsCost}.00 EUR`;
}
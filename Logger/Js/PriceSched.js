
var PriceStartText = document.getElementById('PriceStartText');
var PricePerKgText = document.getElementById('PricePerKgText');
var PriceSchedUpdate = document.getElementById('PriceSchedButtonStyle');


var MissingError = "Field Cannot Be Empty";


PricePerKgText.addEventListener('click', ()=>{
    if(PricePerKgText.style.color == 'rgb(255, 56, 90)')
            {
                PricePerKgText.value="";
                PricePerKgText.style.color = "#000";
            }
})

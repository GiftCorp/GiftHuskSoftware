var WeighInSideButton = document.getElementById('WeighInSideButton');
var WeighOutSideButton = document.getElementById('WeighOutSideButton');
var PaymentSideButton = document.getElementById('PaymentSideButton');

var WeighInContainer = document.getElementById('WeighInContainer');
var WeighOutContainer = document.getElementById('WeighOutContainer');
var PaymentContainer = document.getElementById('PaymentContainer');

function TransactionButtonsClearStyle(){
    WeighInSideButton.setAttribute('class','SubOptionButtons');
    WeighOutSideButton.setAttribute('class','SubOptionButtons');
    PaymentSideButton.setAttribute('class','SubOptionButtons');
}

function TransactionClearContent(){
    WeighInContainer.classList.add('ContentInvisible');
    WeighOutContainer.classList.add('ContentInvisible');
    PaymentContainer.classList.add('ContentInvisible');
}

function ShowPopUp()
{
    PopUp.classList.remove('ContentInvisible');
    ContentDisable.classList.remove('ContentInvisible');
}

function TransactionButtonSelect(Button){
    SideButtonClearStyle();

    TransButton.setAttribute('class','ButtonSelected');
    TransButton.children[0].classList.remove('ContentInvisible');
    TransButton.children[1].classList.add('ContentInvisible');

    Transaction_Container.classList.remove('ContentInvisible');

    SubOptionButtonSelect(Button);
}


WeighInSideButton.addEventListener('click', ()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    TransactionButtonSelect(WeighInSideButton);
    ShowContent(WeighInContainer);
    SetCurrentContent("WeighIn");
    location.reload();
})

WeighOutSideButton.addEventListener('click', ()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    TransactionButtonSelect(WeighOutSideButton);
    ShowContent(WeighOutContainer);
    SetCurrentContent("WeighOut$List");
    WO_ListShow();
    location.reload();
})

PaymentSideButton.addEventListener('click', ()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    TransactionButtonSelect(PaymentSideButton);
    ShowContent(PaymentContainer);
    SetCurrentContent("Payment");
    
    location.reload();
})

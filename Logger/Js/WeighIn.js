var WeighInContent_Container = document.getElementById('WeighInContent_Container');
var WeighInButton = document.getElementById('WeighInButton');
var WI_DriverNameText = document.getElementById('WI_DriverNameText');
var WI_PlateNumberText = document.getElementById('WI_PlateNumberText');
var WI_WeightText = document.getElementById('WI_WeightText');
var WeighInUIDtext = document.getElementById('WeighInUIDtext');

var WI_TransacTypeCbox = document.getElementById('WI_TransacTypeCbox');
var WI_LocationFromCBox = document.getElementById('WI_LocationFromCBox');
var WI_LocationToCBox = document.getElementById('WI_LocationToCBox');
var WI_LocationFromLabel = document.getElementById('WI_LocationFromLabel');
var WI_LocationToLabel = document.getElementById('WI_LocationToLabel');
var WI_ClientNameCbox = document.getElementById('WI_ClientNameCbox');


if(WI_LocationFromCBox[WI_LocationFromCBox.length - 1].value == WI_ClientNameCbox.value)
{
    WI_LocationFromCBox.removeChild(WI_LocationFromCBox.childNodes[WI_LocationToCBox.length - 1]);
}



WI_LocationFromCBox.value = null;;
WI_LocationFromCBox.disabled = true;



WeighInButton.addEventListener('click', async()=>{

    var Errors = 0;

    if(WI_PlateNumberText.value == "")
    {
        
        ErrorMessage(WI_PlateNumberText);
        Errors++;
    }
    else
    {
        if(WI_PlateNumberText.value.includes('-'))
        {
            if(await ShowPopUp("Plate Numbers Cannot Contain The Character '-'", "Default","OK") == true)
            {
                HidePopUp();
            }
            else
            {
                HidePopUp();
            }
            Errors++;
        }
    }

    if(WI_WeightText.value == "")
    {
        WI_WeightText.type = "text";
        ErrorMessage(WI_WeightText);
        Errors++;
    }

    if(WI_ClientNameCbox.value == "") 
    {
        Errors++;
        if(await ShowPopUp("Client Not Selected","Default","OK") == true) 
        {
            HidePopUp();
        }
        else
        {
            HidePopUp();
        }
    }

    if(Errors == 0)
    {
        
        if(await ShowPopUp("Are you sure you want to add the transaction?") == true){
            WeighInUIDtext.value = sessionStorage.getItem('UID');
            WI_LocationFromCBox.disabled = false;
            WeighInContent_Container.submit();
        }
        else
        {
            HidePopUp();
        }
       
    }
})



WI_PlateNumberText.addEventListener('click',()=>
{
    if(WI_PlateNumberText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WI_PlateNumberText);
    }
})

WI_WeightText.addEventListener('click',()=>
{
    if(WI_WeightText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WI_WeightText);
        WI_WeightText.type = "number";
    }
})

WI_TransacTypeCbox.addEventListener('change', ()=>{
    
    if(WI_TransacTypeCbox.value == "Deliver" || WI_TransacTypeCbox.value == "Hakot")
    {
        
        WI_LocationFromCBox.disabled = true;
        var op = document.createElement("option");
        op.innerHTML = WI_ClientNameCbox.value;
        op.value = WI_ClientNameCbox.value;

        
        if(WI_LocationToCBox[WI_LocationToCBox.length - 1].value == WI_ClientNameCbox.value)
        {
            WI_LocationFromCBox.removeChild(WI_LocationToCBox.childNodes[WI_LocationToCBox.length - 1]);
        }

        
        WI_LocationFromCBox.appendChild(op);
        WI_LocationFromCBox.value = WI_ClientNameCbox.value;
        console.log(WI_LocationFromCBox.value);
    
    }
    else
    {
        

        WI_LocationFromCBox.innerHTML = "";
        LocationList.forEach((item,index) => {
            var op = document.createElement("option");
            op.innerHTML = item;
            op.value = item;
            WI_LocationFromCBox.appendChild(op);
        })
        

        WI_LocationFromCBox[0].selected = true;
        WI_LocationToCBox[0].selected = true;
        WI_LocationFromCBox.disabled = false;

       
    }

    console.log(WI_LocationFromCBox.value);
    
})



WI_ClientNameCbox.addEventListener('change',()=>{

    
   
    if(WI_ClientNameCbox.value != "Select a client")
    {
        WI_ClientNameCbox.classList.remove("italized");
    }
   
    if(WI_TransacTypeCbox.value == "Deliver" || WI_TransacTypeCbox.value == "Hakot")
    {
        WI_TransacTypeCbox.dispatchEvent(new Event('change'));
    }
})

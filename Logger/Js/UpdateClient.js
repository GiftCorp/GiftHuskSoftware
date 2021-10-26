var UpdateClientNameText = document.getElementById("UpdateClientNameText");
var UpdateClientSubmit = document.getElementById("UpdateClientSubmit");
var UpdateCompanyNameText = document.getElementById("UpdateCompanyNameText");
var UpdateAddressText = document.getElementById("UpdateAddressText");
var UpdateContactNumberText = document.getElementById("UpdateContactNumberText");
var UpdateClientClientID = document.getElementById("UpdateClientClientID");

var ListClientContentContainer = document.getElementById("ListClientContentContainer");
var UpdateClientForm = document.getElementById("UpdateClientForm");
var DeleteClientButton = document.getElementById("DeleteClientButton");
var UC_BackArrow = document.getElementById("UC_BackArrow");

var DeletClientForm = document.getElementById("DeletClientForm");
var UC_ClientId = document.getElementById("UC_ClientId");

var UC_CurrentClientIndex;

UpdateClientSubmit.addEventListener('click', async()=>{
    if(UpdateClientNameText.value == "")
    {
        ErrorMessage(UpdateClientNameText);
    }
    else
    {
        if(await ShowPopUp("Are you sure you want to update this client") == true)
        {
            UpdateClientForm.submit();
        }   
        else
        {
            HidePopUp()
        }     
    }
})

UpdateClientNameText.addEventListener('click',()=>{
    if(UpdateClientNameText.style.color == 'rgb(255, 56, 90)')
    {
        
        ClearInput(UpdateClientNameText);
    }
})

function UpdateClientShow(id){
    
    ListClientContentContainer.classList.add("ContentInvisible");
    var UC_Index;
    ClientIDArray.forEach((item,index)=>{
        if(item == id)
        {
            UC_Index = index;
            UC_CurrentClientIndex = index;
        }
    })
    UpdateClientClientID.value = id;

    console.log(id);
    UpdateClientNameText.value = ClientArray[UC_Index];
    if(CompanyArray[UC_Index] == "" || CompanyArray[UC_Index] == "Not Set" )
    {
        UpdateCompanyNameText.value = "";
    }
    else
    {
        UpdateCompanyNameText.value = CompanyArray[UC_Index];
    }


    if(AddressArray[UC_Index] == "" || AddressArray[UC_Index] == "Not Set")
    {
        UpdateAddressText.value = "";
    }
    else
    {
        UpdateAddressText.value = AddressArray[UC_Index];
    }
    


    if(NumberArray[UC_Index] == "" || NumberArray[UC_Index] == "Not Set")
    {
        UpdateContactNumberText.value = "";
    }
    else
    {
        UpdateContactNumberText.value = NumberArray[UC_Index];
    }
    
}


function UpdateClientHide()
{
    ListClientContentContainer.classList.remove("ContentInvisible");

    UpdateClientNameText.value = null;
    UpdateCompanyNameText.value = null;
    UpdateAddressText.value = null;
    UpdateContactNumberText.value = null;
    UpdateClientClientID.value = null;
}

UC_BackArrow.addEventListener('click', ()=>{
    UpdateClientHide();
})

DeleteClientButton.addEventListener('click', async ()=>{
    UC_ClientId.value = ClientIDArray[UC_CurrentClientIndex];
    if(await ShowPopUp("Are you sure you want to delete this client?") == true) {
        DeletClientForm.submit();
    }
    else
    {
        HidePopUp();
    }
    
})
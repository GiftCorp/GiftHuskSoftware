var ClientNameText = document.getElementById('ClientNameText');
var CompanyNameText = document.getElementById('CompanyNameText');
var ClientAddressText = document.getElementById('ClientAddressText');
var ClientContactNumberText = document.getElementById('ClientContactNumberText');

var AddClientSubmit = document.getElementById('AddClientSubmit');
var AddClientForm = document.getElementById('AddClientForm');

var MissingError = "Field Cannot Be Empty";



AddClientSubmit.addEventListener('click', async() =>{

    var Errors = 0;

    if(ClientNameText.value == "")
    {
        ErrorMessage(ClientNameText);
        Errors+=1;
    }
   
    if(Errors == 0)
    {

        if(await ShowPopUp("Are you sure you want to add this client") == true)
        {
            AddClientForm.submit();
        }
        else
        {
            HidePopUp();
        }
        
        
    }
})

ClientNameText.addEventListener('click',()=>{
    
    ClearInput(ClientNameText);
})

CompanyNameText.addEventListener('click',()=>{
    
    ClearInput(CompanyNameText);
})

ClientAddressText.addEventListener('click',()=>{
    
    ClearInput(ClientAddressText);
})

ClientContactNumberText.addEventListener('click',()=>{
    
    ClientContactNumberText.type = 'number';
    ClearInput(ClientContactNumberText);
    

})

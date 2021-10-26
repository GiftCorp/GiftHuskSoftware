
AddLocationButton.addEventListener('click', async ()=>{
    if(LocationInputText.value =="")
    {
        LocationInputText.value = "Field Cannot Be Empty";
        LocationInputText.style.color = "#ff385a";
    }
    else
    {
        if(LocationList.includes(LocationInputText.value))
        {
            await ShowPopUp("Location already exists","Default","OK");
            HidePopUp();
        }
        else
        {
            if(await ShowPopUp("Are you sure you want to add this location") == true)
            {
                MLocationInputContainer.submit();
            }
            HidePopUp();
            
        }
        
    }
})

LocationInputText.addEventListener('click', ()=>{
if(LocationInputText.style.color == 'rgb(255, 56, 90)')
        {
            LocationInputText.value="";
            LocationInputText.style.color = "#000";
        }
})

LIndexList.forEach((item,index)=>{
    var cb = document.getElementById(item);
    var locindex = item.split('B')[1];
    cb.addEventListener('click', async()=>{

        if(await ShowPopUp("Are you sure you want to delete this location") ==true)
        {
            DeleteLocationText.value = LocationList[locindex];
            DeleteLocationForm.submit();
        }
        HidePopUp();
    })
})
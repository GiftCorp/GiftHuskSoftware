var UpdateUserContainer = document.getElementById("UpdateUserContainer");
var ListUserContentContainer = document.getElementById("ListUserContentContainer");
var UU_BackArrow = document.getElementById("UU_BackArrow");

var UU_FnameText = document.getElementById("UU_FnameText");
var UU_MnameText = document.getElementById("UU_MnameText");
var UU_LnameText = document.getElementById("UU_LnameText");
var UU_AddressText = document.getElementById("UU_AddressText");
var UU_CivilStatusText = document.getElementById("UU_CivilStatusText");
var UU_ContactText = document.getElementById("UU_ContactText");

var UU_RadioMale = document.getElementById("UU_RadioMale");
var UU_RadioFemale = document.getElementById("UU_RadioFemale");

var UU_BdateMonth = document.getElementById("UU_BdateMonth");
var UU_BdateDay = document.getElementById("UU_BdateDay");
var UU_BdateYear = document.getElementById("UU_BdateYear");

var UU_EmailText = document.getElementById("UU_EmailText");
var UU_DesignationText = document.getElementById("UU_DesignationText");
var UU_UserNameText = document.getElementById("UU_UserNameText");
var UU_authority = document.getElementById("UU_authority");
var UU_UserNameText = document.getElementById("UU_UserNameText");

var UpdateUserButton = document.getElementById("UpdateUserButton");
var DeleteUserButton = document.getElementById("DeleteUserButton");
// var ChangePassword = document.getElementById("ChangePassword");
var UU_UID = document.getElementById("UU_UID");
var DU_UID = document.getElementById("DU_UID");

var UpdateUserForm = document.getElementById("UpdateUserForm");
var DeleteUserForm = document.getElementById("DeleteUserForm");

// var ChangePasswordContainer = document.getElementById("ChangePasswordContainer");
// var UU_OldPassword = document.getElementById("UU_OldPassword");
// var UU_NewPassword = document.getElementById("UU_NewPassword");
// var UU_RepeatPassword = document.getElementById("UU_RepeatPassword");

function UpdateUserShow(id){
    
    UU_UID.value = id;
    DU_UID.value = id;
    
    var index;
    U_UserIDList.forEach((item, i)=>{
        if(item == id){
            index = i;
        }
    })

    UU_FnameText.value = U_FnameList[index];
    UU_MnameText.value = U_MnameList[index];
    UU_LnameText.value = U_LnameList[index];
    UU_AddressText.value = U_AddressList[index];
    UU_CivilStatusText.value= U_CivilStatusList[index];
    UU_ContactText.value = U_MobileNumberList[index];
    UU_EmailText.value = U_EmailList[index];
    UU_DesignationText.value = U_DesignationList[index];
    UU_UserNameText.value = U_UserNameList[index];
    UU_authority.value = U_AuthorityList[index];

    if(U_GenderList[index] == 'Male')
    {
        UU_RadioMale.checked = true;
    }
    else
    {
        UU_RadioFemale.checked = true;
    }

    if(U_BdateList[index]!=null)
    {
        UU_BdateMonth.selectedIndex = parseInt(U_BdateList[index].split('/')[0]) - 1;
        UU_BdateDay.selectedIndex = parseInt(U_BdateList[index].split('/')[1]) - 1;
        UU_BdateYear.value = U_BdateList[index].split('/')[2];
    }
    

    UpdateUserContainer.classList.remove("ContentInvisible");
    ListUserContentContainer.classList.add("ContentInvisible");
}

UU_BackArrow.addEventListener('click',()=>{
    UpdateUserContainer.classList.add("ContentInvisible");
    ListUserContentContainer.classList.remove("ContentInvisible");
})


UpdateUserButton.addEventListener('click', async()=>{
    var Errors = 0;
    if(UU_FnameText.value == "")
    {
        ErrorMessage(UU_FnameText);
        Errors+=1;
    }
  
    if(UU_LnameText.value == "")
    {
        ErrorMessage(UU_LnameText);
        Errors+=1;
    }

    // if(UU_OldPassword.value == "")
    // {
    //     ErrorPassword(UU_OldPassword);
    //     Errors+=1;
    // }
    // else
    // {
    //     if(UU_OldPassword.value)
    //     if(UU_NewPassword.value == "")
    //     {
    //         ErrorPassword(UU_NewPassword);
    //         Errors+=1;
    //     }
        
        
    //     if(UU_RepeatPassword.value == "")
    //     {
    //         ErrorPassword(UU_RepeatPassword);
    //         Errors+=1;
    //     }
    
    // }

    if(Errors == 0)
    {
        if(await ShowPopUp("Are you sure you want to update this user?") == true)
        {
            UpdateUserForm.submit();
        }
        else
        {
            HidePopUp();
        }
        
    }

})

DeleteUserButton.addEventListener("click",async()=>{
    console.log(UU_UID.value);
    if(UU_UID.value == window.sessionStorage.getItem("UID"))
    {
        if(await ShowPopUp("User in use. Cannot be deleted", "Default","OK") == true)
        {
            HidePopUp();
        }
        else
        {
            HidePopUp();
        }
    }
    else
    {
        if(await ShowPopUp("Are you sure you want to delete this user?") == true)
        {
            DeleteUserForm.submit();
        }
        else
        {
            HidePopUp();
        }
    }
    
})


var CP_State = 0;
ChangePassword.addEventListener('click',()=>{
    if(CP_State == 0)
    {
        ChangePasswordContainer.classList.remove('ContentInvisible');
    }
    else
    {
        UU_OldPassword.value = "";
        UU_NewPassword.value = "";
        UU_RepeatPassword.value = "";
        ChangePasswordContainer.classList.add('ContentInvisible');
    }

})

UU_FnameText.addEventListener('click',()=>
{
    if(UU_FnameText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(UU_FnameText);
    }
})

UU_LnameText.addEventListener('click',()=>
{
    if(UU_FnameText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(UU_FnameText);
    }
})

UU_NewPassword.addEventListener('click',()=>
{
    PasswordClearError(UU_NewPassword);
})

UU_OldPassword.addEventListener('click',()=>
{
    PasswordClearError(UU_OldPassword);
})

UU_RepeatPassword.addEventListener('click',()=>
{
    PasswordClearError(UU_RepeatPassword);
})




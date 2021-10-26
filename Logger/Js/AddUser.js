var AddUsersButton = document.getElementById('AddUsersButton');
var AddClientButton = document.getElementById('AddClientButton');
var PriceSchedButton = document.getElementById('PriceSchedButton');




// Setting Defaults

var DayCb = document.getElementById("BdateDay");
var MonthCb = document.getElementById("BdateMonth");
var YearCb = document.getElementById("BdateYear");

var MonthNum = MonthCb.selectedIndex +1;
var Days;


function SetDate()
{
    console.log(MonthNum);
    //Setting Days
    if(MonthNum <=7)
    {
        if(MonthNum == 2)
        {
            Days = 29;
        }
        else
        {
            if(MonthNum % 2 == 0)
            {
                Days = 30;
            }
            else
            {
                Days = 31;
            }
        }
        
    }
    else
    {
        MonthNum -= 7
    
        if(MonthNum % 2 == 0)
        {
            Days = 30;
        }
        else
        {
            Days = 31;
        }
    }
    
    for(var i = 1; i<=Days; i++)
    {
        var option = document.createElement('option');
        var option2 = document.createElement('option');
        option.value = i;
        option2.value = i;
        option.innerHTML = i;
        option2.innerHTML = i;
        DayCb.appendChild(option);
        UU_BdateDay.appendChild(option2);
    }


    //Setting Year

    for(var i = 2021; i>= 1900; i--)
    {
        var option = document.createElement('option');
        var option2 = document.createElement('option');
        option.value = i;
        option2.value = i;
        option.innerHTML = i;
        option2.innerHTML = i;
        YearCb.appendChild(option);
        UU_BdateYear.appendChild(option2);
    }
    
    
}

MonthCb.addEventListener('change',()=>{
    MonthNum = MonthCb.selectedIndex +1;
    DayCb.innerHTML = ``;
    YearCb.innerHTML = ``;
    UU_BdateDay.innerHTML = ``;
    UU_BdateYear.innerHTML = ``;
    SetDate()
})

SetDate();

//End of Setting Defaults


//Null Checking and Submission

var FnameText = document.getElementById('FnameText');
var Mnametext = document.getElementById('MnameText');
var LnameText = document.getElementById('LnameText'); 
var AddressText = document.getElementById('AddressText');
var CivilStatusText = document.getElementById('CivilStatusText');
var ContactText = document.getElementById('ContactText');
var UserNameText = document.getElementById('UserNameText');
var PasswordText = document.getElementById('PasswordText');
var RepeatPasswordText = document.getElementById('RepeatPasswordText');
var EmailText = document.getElementById('EmailText');

var DesignationText = document.getElementById('DesignationText');
var AddAccountButton = document.getElementById('addAccountSubmit');

var AddedDateText = document.getElementById('AddedDateText');
var AddedByText = document.getElementById('AddedByText');

var AccountForm = document.getElementById('addUserForm');

var MissingError = "Cannot Be Empty";
var Errors;

AddAccountButton.addEventListener('click', async()=>{

    Errors = 0;
    if(FnameText.value == "" || FnameText.value == MissingError)
    {
        ErrorMessage(FnameText);
        Errors+=1;
    }
  
    if(LnameText.value == "" || LnameText.value == MissingError)
    {
        ErrorMessage(LnameText);
        Errors+=1;
    }

    if(UserNameText.value == "" || UserNameText.value == MissingError)
    {
        ErrorMessage(UserNameText);
        Errors+=1;
    }

        
    if(PasswordError() >0)
    {
        Errors++;
    }

    if(U_UserNameList.includes(UserNameText.value))
    {
        if(await ShowPopUp("User Name already exists", "Default","OK") == true)
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
        var date = new Date();
        AddedDateText.value = date.toDateString();
        AddedByText.value = window.sessionStorage.getItem('username');

        if(await ShowPopUp("Are you sure you want to add this user") == true)
        {
            AccountForm.submit();
        }
        else
        {
            HidePopUp();
        }
        
    }
   
})

var NotSameError = "Password Not The Same";

function PasswordError()
{
    var Errors = 0;
    if(PasswordText.value == "")
    {
        PasswordText.type = "text";
        ErrorMessage(PasswordText);
        Errors++;
    }
    else
    {
        if(PasswordText.value.length < 6)
        {
            PasswordText.type = "text";
            ErrorMessage(PasswordText, "Needs to be at least 6 characters long");
            Errors++;
        }
        else
        {
            if(RepeatPasswordText.value == "")
            {
                RepeatPasswordText.type = "text";
                ErrorMessage(RepeatPasswordText);
                Errors++;
            }
            else
            {
                if(RepeatPasswordText.value != PasswordText.value)
                {
                    PasswordText.type = "text";
                    RepeatPasswordText.type = "text";
                    ErrorMessage(RepeatPasswordText, NotSameError);
                    ErrorMessage(PasswordText, NotSameError);
                    Errors++;
                }
    
            }
        }
        
        
    }

    return Errors;
    

    
}

FnameText.addEventListener('click',()=>
{
    if(FnameText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(FnameText);
    }
})

Mnametext.addEventListener('click',()=>
{
    
    if(Mnametext.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(Mnametext);
    }
})

LnameText.addEventListener('click',()=>
{
    if(LnameText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(LnameText);
    }
})

AddressText.addEventListener('click',()=>
{
    if(AddressText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(AddressText);
    }
})

CivilStatusText.addEventListener('click',()=>
{
    if(CivilStatusText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(CivilStatusText);
    }
})

ContactText.addEventListener('click',()=>
{
    if(ContactText.style.color == 'rgb(255, 56, 90)')
    {
        ContactText.type = 'number';
        ClearInput(ContactText);
    }
})

UserNameText.addEventListener('click',()=>
{
    if(UserNameText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(UserNameText);
    }
})

PasswordText.addEventListener('click',()=>
{
    if(PasswordText.style.color == 'rgb(255, 56, 90)')
    {
        PasswordText.type = 'password';
        ClearInput(PasswordText);
    }
})

RepeatPasswordText.addEventListener('click',()=>
{
    if(RepeatPasswordText.style.color == 'rgb(255, 56, 90)')
    {
        RepeatPasswordText.type = 'password';
        ClearInput(RepeatPasswordText);
    }
})

EmailText.addEventListener('click',()=>
{
    if(EmailText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(EmailText);
    }
})


DesignationText.addEventListener('click',()=>
{
    if(DesignationText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(DesignationText);
    }
})





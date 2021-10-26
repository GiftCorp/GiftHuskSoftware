var CurrentUserText = document.querySelector('.CurrentUserText');
CurrentUserText.innerHTML = `Current User: <h1 id="userText">${window.sessionStorage.getItem('username')}</h1>`;
var body = document.getElementById('body');

var TransButton = document.getElementById('TransactionButton');
var ReportsButton = document.getElementById('ReportsButton');
var MaintenanceButton = document.getElementById('MaintenanceButton');

var TransOptionsContainer = document.getElementById('TransactionOptionsContainer');
var ReportsOptionsContainer = document.getElementById('ReportsOptionsContainer');
var MaintenanceOptionsContainer = document.getElementById('MaintenanceOptionsContainer');

var MaintenanceContainer = document.getElementById('maintenance_Container');
var Reports_Container = document.getElementById('Reports_Container');
var Transaction_Container = document.getElementById('Transaction_Container');

var PopUpClose = document.getElementById('PopUpClose');
var PopUp = document.getElementById('PopUp');
var ContentDisable = document.getElementById('ContentDisable');
var LogOutButton = document.getElementById('LogOutButton');

var MaintenanceButtonContainer = document.getElementById('MaintenanceButtonContainer');

//Base Layout

function SideButtonClearStyle(){
    
    TransButton.setAttribute('class','SideBarButtons');
    ReportsButton.setAttribute('class','SideBarButtons');
    MaintenanceButton.setAttribute('class','SideBarButtons');
    
}

function SubOptiosButtonClearStlye(){
    MaintenanceButtonClearStyle();
    TransactionButtonsClearStyle();
    ReportsButtonsClearStyle();
}

function ShowContent(Content){
    
    Content.classList.remove('ContentInvisible');
    
}

function SubOptionButtonSelect(Button){
    
    Button.setAttribute('class','SubOptionSelected');
}

function ContentClear(){
    MaintenanceContainer.classList.add('ContentInvisible');
    Transaction_Container.classList.add('ContentInvisible');
    Reports_Container.classList.add('ContentInvisible');
    MaintenanceClearContent();
    TransactionClearContent();
    ReportsClearContent();
}




function SideButtonSelect(Button, Container){
    Button.setAttribute('class','ButtonSelected');
    Button.children[0].classList.remove('ContentInvisible');
    Button.children[1].classList.add('ContentInvisible');
    

    if(Container.classList.contains('ContentInvisible'))
    {
        Container.classList.remove('ContentInvisible');
        Button.children[0].classList.remove('ContentInvisible');
        Button.children[1].classList.add('ContentInvisible');
        
    }
    else
    {
        Container.classList.add('ContentInvisible');
        Button.children[0].classList.add('ContentInvisible');
        Button.children[1].classList.remove('ContentInvisible');
        Button.setAttribute('class','SideBarButtons');
    }
    
}


function ClearInput(Input)
{
    if(Input.style.color == 'rgb(255, 56, 90)')
    {
        Input.style.color = "#000";
        Input.value = "";
    }
    
}

function ErrorMessage(Input, Error = MissingError)
{
    Input.value = Error;
    Input.style.color = "#ff385a";
}

function ErrorPassword(Input, Error="Field Cannot Be Empty")
{
    Input.type = "text";
    Input.style.color = "#ff385a";
    Input.value = Error;
}

function PasswordClearError(Input)
{
    if(Input.style.color == 'rgb(255, 56, 90)')
    {
        Input.type = "password";
        Input.style.color = "#000";
        Input.value = "";
    }
}


var WO_PopUp = document.getElementById('WO_PopUp');
var P_PopUp = document.getElementById('P_PopUp');
var VerificationPopUpText = document.getElementById('VerificationPopUpText');
var VerificationPopUpButtonNo = document.getElementById('VerificationPopUpButtonNo');
var VerificationPopUpButtonYes = document.getElementById('VerificationPopUpButtonYes');



function ShowPopUp(Message,PopUpContainer = "Default", Button="YESNO")
{
    PopUp.classList.remove('ContentInvisible');
    ContentDisable.classList.remove('ContentInvisible');

    if(Button =="YESNO")
    {
        VerificationPopUpButtonNo.innerHTML = "No";
        VerificationPopUpButtonYes.innerHTML = "Yes";
    }
    else if("OK")
    {
        VerificationPopUpButtonNo.innerHTML = "Close";
        VerificationPopUpButtonYes.innerHTML = "Ok";
    }

    var PopUpPromise = new Promise((resolve,reject)=>{
        VerificationPopUpButtonYes.addEventListener('click',()=>{ 
            resolve(true);
        })
        VerificationPopUpButtonNo.addEventListener('click',()=>{
            resolve(false);
        })
    })
    
    console.log(PopUpContainer)
    if(PopUpContainer == "WeighOut")
    {
        WO_PopUp.classList.remove('ContentInvisible');
    }
    else if(PopUpContainer == "PayOut")
    {
        P_PopUp.classList.remove('ContentInvisible');
    }
    else
    {
        VerificationPopUpContainer.classList.remove('ContentInvisible');
        VerificationPopUpText.innerHTML = Message;
        return(PopUpPromise);

    }
    
}

function HidePopUp()
{
    PopUp.classList.add('ContentInvisible');
    ContentDisable.classList.add('ContentInvisible');

    WO_PopUp.classList.add('ContentInvisible');
    VerificationPopUpContainer.classList.add('ContentInvisible');
}




TransButton.addEventListener('click',()=>{
    SideButtonClearStyle();
    SideButtonSelect(TransButton,TransOptionsContainer);
    
})

ReportsButton.addEventListener('click',()=>{
    SideButtonClearStyle();
    SideButtonSelect(ReportsButton,ReportsOptionsContainer);
    
})

MaintenanceButton.addEventListener('click',()=>{
    SideButtonClearStyle();
    SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    
})

var AddUserContainer = document.getElementById('AddUserContainer');
var AddClientContainer = document.getElementById('AddClientContainer');
var ClientListContainer = document.getElementById('ListClientContainer');

function SetContent()
{
    var storage = window.sessionStorage;
    var currentcontent = storage.getItem('CurrentContent')
    var authority = storage.getItem('authority');

    if(authority != "Admin")
    {
        MaintenanceButtonContainer.classList.add('ContentInvisible');
    }
    if(authority == null)
    {
        window.location.replace('site.php');
    }

    console.log(authority);

    if(currentcontent == "AddUser")
    {
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(AddUserContainer);
        MaintenanceButtonSelect(AddUsersButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "ListUser")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(ListUserContainer);
        MaintenanceButtonSelect(ListUserButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "AddClient")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(AddClientContainer);
        MaintenanceButtonSelect(AddClientButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "ClientList")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(ClientListContainer);
        MaintenanceButtonSelect(ClientListButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "PriceSched$List" || currentcontent == "PriceSched$Spec")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(PriceScheduleContainer);
        MaintenanceButtonSelect(PriceSchedButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }

    else if(currentcontent == "Location")
    {
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(MLocationContainer);
        MaintenanceButtonSelect(LocationSideButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }

    else if(currentcontent == "WeighIn")
    {
        ContentClear();
        SubOptiosButtonClearStlye();
        ShowContent(WeighInContainer);
        TransactionButtonSelect(WeighInSideButton);
        SideButtonSelect(TransButton,TransOptionsContainer);
    }

    else if(currentcontent == "WeighOut$List" || currentcontent == "WeighOut$Input" )
    {
        ContentClear();
        SubOptiosButtonClearStlye();
        ShowContent(WeighOutContainer);
        TransactionButtonSelect(WeighOutSideButton);
        SideButtonSelect(TransButton,TransOptionsContainer);
    }

    else if(currentcontent == "Payment")
    {
        ContentClear();
        SubOptiosButtonClearStlye()
        TransactionButtonSelect(PaymentSideButton);
        ShowContent(PaymentContainer);
        SideButtonSelect(TransButton,TransOptionsContainer);
    }
    else if(currentcontent == "CreateReports")
    {
        ContentClear();
        SubOptiosButtonClearStlye();
        ReportsButtonSelect(CreateReportButton);
        ShowContent(CreateReportsContainer);
        SideButtonSelect(ReportsButton,ReportsOptionsContainer);
    }
    else if(currentcontent == "RetrieveReports")
    {
        ContentClear();
        SubOptiosButtonClearStlye();
        ReportsButtonSelect(RetrieveReportButton);
        ShowContent(RetrieveReportsContainer);
        SideButtonSelect(ReportsButton,ReportsOptionsContainer);
    }


  
    
}

SetContent();

PopUpClose.addEventListener("click", ()=>{
    HidePopUp();
})


document.addEventListener("keyup", function(event) {
    if (event.code === 'Enter') {
        var storage = window.sessionStorage;
        var currentcontent = storage.getItem('CurrentContent');

        if(currentcontent == "WeighIn")
        {
           
            WeighInButton.click()
        }

        
        else if(currentcontent == "WeighOut$Input" )
        {
            
            WeighOutButton.click()
        }

   
    }
});

LogOutButton.addEventListener("click", ()=>{
    window.sessionStorage.clear();
    window.location.replace("site.php")
})
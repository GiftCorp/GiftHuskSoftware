

var CR_ViewReportButton = document.getElementById('CR_ViewReportButton');
var CR_CreateReportButton = document.getElementById('CR_CreateReportButton');
var CR_FilterContainer = document.getElementById('CR_FilterContainer');

CR_ViewReportButton.addEventListener('click', ()=>{
    
    document.cookie = `CR_ViewReport=true`;
    document.cookie = `CR_ClientCBox=${CR_ClientCBox.value}`;
    document.cookie = `CR_StatusCbox=${CR_StatusCBox.value}`;
    document.cookie = `CR_DateFromInput=${CR_DateFromInput.value}`;
    document.cookie = `CR_DateToInput=${CR_DateToInput.value}`;
    document.cookie = `CR_TransacTypeCBox=${CR_TransacTypeCBox.value}`;
    
    window.sessionStorage.setItem('CR_ViewReport', "true");
    window.sessionStorage.setItem('CR_ClientCBox', CR_ClientCBox.value);
    window.sessionStorage.setItem('CR_StatusCBox', CR_StatusCBox.value);
    window.sessionStorage.setItem('CR_DateFromInput', CR_DateFromInput.value);
    window.sessionStorage.setItem('CR_DateToInput', CR_DateToInput.value);
    window.sessionStorage.setItem('CR_TransacTypeCBox', CR_TransacTypeCBox.value);
    
    location.reload();
})



CR_CreateReportButton.addEventListener('click', async()=>{

    if(CR_ClientNameList.length > 0)
    {
        
        var w = window.open("Report.php",'_blank');
    }
    else
    {
        if(await ShowPopUp("No transaction","Default","OK") == true)
        {
            HidePopUp()
        }
        else
        {
            HidePopUp()
        }
    }
    
   

   
})


if(window.sessionStorage.getItem('P_ReportStart') == "True"){
    window.sessionStorage.removeItem('P_ReportStart')
    CR_ViewReportButton.click();
    var w = window.open("Report.html",'_blank');
    
}


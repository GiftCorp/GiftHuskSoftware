
var CreateReportButton = document.getElementById('CreateReportButton');
var RetrieveReportButton = document.getElementById('RetrieveReportButton');

var CreateReportsContainer = document.getElementById('CreateReportsContainer');
var RetrieveReportsContainer = document.getElementById('RetrieveReportsContainer');


function ReportsButtonsClearStyle(){

    CreateReportButton.setAttribute('class','SubOptionButtons');
    RetrieveReportButton.setAttribute('class','SubOptionButtons');
    
}

function ReportsClearContent(){
  
    CreateReportsContainer.classList.add('ContentInvisible');
    RetrieveReportsContainer.classList.add('ContentInvisible');
}


function ReportsButtonSelect(Button){
    SideButtonClearStyle();

    ReportsButton.setAttribute('class','ButtonSelected');
    ReportsButton.children[0].classList.remove('ContentInvisible');
    ReportsButton.children[1].classList.add('ContentInvisible');

    Reports_Container.classList.remove('ContentInvisible');

    SubOptionButtonSelect(Button);
}



CreateReportButton.addEventListener('click', ()=>{
    ContentClear();
    SubOptiosButtonClearStlye();
    ReportsButtonSelect(CreateReportButton);
    ShowContent(CreateReportsContainer);
    SetCurrentContent("CreateReports");
    document.cookie = "CR_ViewReport=false";
    location.reload();
    
})

RetrieveReportButton.addEventListener('click', ()=>{
    ContentClear();
    SubOptiosButtonClearStlye();
    ReportsButtonSelect(RetrieveReportButton);
    ShowContent(RetrieveReportsContainer);
    SetCurrentContent("RetrieveReports");
    location.reload();
    
})


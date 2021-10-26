var P_TableB = document.getElementById('P_TableB');
var P_TableHeaderB = document.getElementById('P_TableHeaderB');

var P_ContentRightA = document.getElementById('P_ContentRightA');
var P_ContentRightB = document.getElementById('P_ContentRightB');

var P_MainContentContainer = document.getElementById('P_MainContentContainer');
var P_SpecInformationContainer = document.getElementById('P_SpecInformationContainer');
var P_SelectAllButton = document.getElementById('P_SelectAllButton');
var P_ClearSelectionButton = document.getElementById('P_ClearSelectionButton');

var P_SelectDateFrom = document.getElementById('P_SelectDateFrom');
var P_SelectDateTo = document.getElementById('P_SelectDateTo');
var P_SelectDateButton = document.getElementById('P_SelectDateButton');

var P_CreateReportForm = document.getElementById('P_CreateReportForm')
var PCR_TransactioNumberListText = document.getElementById('PCR_TransactioNumberListText');

var P_SearchText = document.getElementById('P_SearchText');
var P_ButtonSearch = document.getElementById('P_ButtonSearch');

var P_BackArrow = document.getElementById('P_BackArrow');
var PayButton = document.getElementById('PayButton');

var PSPEC_ClientNameText = document.getElementById('PSPEC_ClientNameText');
var PSPEC_LocationFromText = document.getElementById('PSPEC_LocationFromText');
var PSPEC_DriverText = document.getElementById('PSPEC_DriverText');
var PSPEC_WeighInDateText = document.getElementById('PSPEC_WeighInDateText');
var PSPEC_NetWeightText = document.getElementById('PSPEC_NetWeightText');
var PSPEC_TransactionTypeText = document.getElementById('PSPEC_TransactionTypeText');
var PSPEC_TransactionNumberText = document.getElementById('PSPEC_TransactionNumberText');
var PSPEC_LocationToText = document.getElementById('PSPEC_LocationToText');
var PSPEC_PlateNumberText = document.getElementById('PSPEC_PlateNumberText');
var PSPEC_WeighOutDateText = document.getElementById('PSPEC_WeighOutDateText');
var PSPEC_PricePerKgText = document.getElementById('PSPEC_PricePerKgText');
var PSPEC_TotalPriceText = document.getElementById('PSPEC_TotalPriceText');
var PSPEC_Remarks = document.getElementById('PSPEC_Remarks');

var PSPEC_BackArrow = document.getElementById('PSPEC_BackArrow');

function P_SearchDisable()
{   
    P_SearchText.disabled = true;
    P_ButtonSearch.disabled = true;
}
function P_SearchEnable()
{   
    P_SearchText.disabled = false;
    P_ButtonSearch.disabled = false;
}

function P_ShowMainContent(){
    P_SpecInformationContainer.classList.add('ContentInvisible');
    P_MainContentContainer.classList.remove('ContentInvisible');
}

function P_ShowSpecMainContent(){
    P_SpecInformationContainer.classList.remove('ContentInvisible');
    P_MainContentContainer.classList.add('ContentInvisible');
}

function P_ButtonDisabled(){
    P_SelectDateButton.setAttribute('class', 'P_ButtonDisabled');
    P_ClearSelectionButton.setAttribute('class', 'P_ButtonDisabled');
    P_SelectAllButton.setAttribute('class', 'P_ButtonDisabled');
    PayButton.setAttribute('class', 'P_ButtonDisabled');

    P_SelectDateButton.disabled = true;
    P_ClearSelectionButton.disabled = true;
    P_SelectAllButton.disabled = true;
    PayButton.disabled = true;
    P_SelectDateFrom.disabled = true;
    P_SelectDateTo.disabled = true;

}

function P_ButtonEnabled(){
    P_SelectDateButton.setAttribute('class', 'P_Button');
    P_ClearSelectionButton.setAttribute('class', 'P_Button');
    P_SelectAllButton.setAttribute('class', 'P_Button');
    PayButton.setAttribute('class', 'P_Button');

    P_SelectDateButton.disabled = false;
    P_ClearSelectionButton.disabled = false;
    P_SelectAllButton.disabled = false;
    PayButton.disabled = false;
    P_SelectDateFrom.disabled = false;
    P_SelectDateTo.disabled = false;
}


var PCB_List = [];
var P_IndexList = [];
var PR_TList = [];
var PR_TListSelected = [];
function P_ShowClientTransaction()
{

    
    P_ButtonEnabled();
    P_CurrentClient.innerHTML = window.sessionStorage.getItem("P_CurrentClient");
    P_ContentRightA.classList.add('ContentInvisible');
    P_ContentRightB.classList.remove('ContentInvisible');
    console.log(P_BackArrow.classList)
    
    
    var CC = window.sessionStorage.getItem("P_CurrentClient");
    P_IndexList = [];
    var T = P_UClientList;
    P_TransactionInfo.ClientName.forEach((item,index) => {
        if(item == CC)
        {   
            P_IndexList.push(index);
        }
    })


    var LongestTransactionNumber = "";
    var LongestWODate = "";
    var LongestNetWeight = "";
    var LongestTotalPrice = "";
    
    PCB_List = [];
    var PR_IDList = [];
    PR_TList = [];
    
    P_TableB.innerHTML = `
    <tr class="ListHeader2">
        <th></th>
        <th>Transaction Number</th>
        <th>Weigh Out Date</th>
        <th>Net Weight</th>
        <th>Total Price</th>
    </tr>`;

    P_IndexList.forEach((item,index) => {

        var TNumber = P_TransactionInfo.TransactionNumber[item];
        var T2 = TNumber.split('-');
        var PID = `P_${T2[0].replace(/ /g,'_')}_${T2[1]}`;

        if(index % 2 == 0)
        {
            P_TableB.innerHTML += `
            <tr class="RowStyleS" id="P_${T2[0].replace(/ /g,'_')}_${T2[1]}">
                <td><input class="DisabledCB" type="checkbox" id="PCB_${T2[0].replace(/ /g,'_')}_${T2[1]}" disabled></td>
                <td class="P_TableData">${TNumber}</td>
                <td class="P_TableData">${P_TransactionInfo.WeighOutDate[item]}</td>
                <td class="P_TableData">${FormatNumber(P_TransactionInfo.NetWeight[item])} KG</td>
                <td class="P_TableData">₱${FormatNumber(P_TransactionInfo.TotalPrice[item])}</td>
            </tr>`;
        }
        else 
        {
            P_TableB.innerHTML += `
            <tr class="RowStyle2S" id="P_${T2[0].replace(/ /g,'_')}_${T2[1]}">
                <td><input class="DisabledCB" type="checkbox" id="PCB_${T2[0].replace(/ /g,'_')}_${T2[1]}" disabled></td>
                <td class="P_TableData">${TNumber}</td>
                <td class="P_TableData">${P_TransactionInfo.WeighOutDate[item]}</td>
                <td class="P_TableData">${FormatNumber(P_TransactionInfo.NetWeight[item])} KG</td>
                <td class="P_TableData">₱${FormatNumber(P_TransactionInfo.TotalPrice[item])}</td>
            </tr>`;
        }
       

        PCB_List.push(`PCB_${T2[0].replace(/ /g,'_')}_${T2[1]}`);
        
        PR_IDList.push(`P_${T2[0].replace(/ /g,'_')}_${T2[1]}`);
        PR_TList.push(TNumber);

        if(TNumber.length > LongestTransactionNumber.length)
        {
            LongestTransactionNumber = TNumber;
        }

        console.log(P_TransactionInfo.WeighOutDate[item])
        if(P_TransactionInfo.WeighOutDate[item].length > LongestWODate.length)
        {
            LongestWODate = P_TransactionInfo.WeighOutDate[item];
        }

        if(P_TransactionInfo.NetWeight[item].length> LongestNetWeight.length)
        {
            LongestNetWeight = P_TransactionInfo.NetWeight[item];
        }

        if(FormatNumber(P_TransactionInfo.TotalPrice[item]).length > LongestTotalPrice.length)
        {
            LongestTotalPrice = FormatNumber(P_TransactionInfo.TotalPrice[item]);
        }


    })



    PR_IDList.forEach((item,index)=>{
        var row = document.getElementById(item);
        var T = PR_TList[PR_IDList.indexOf(item)];
        row.addEventListener('click',()=>{
            window.sessionStorage.setItem('PSPEC_CurrentTransactionNumber',T);
            P_ShowSpec();
        })
    })

    P_TableHeaderB.innerHTML+=` 
    <tr class="RowStyle">
        <td><input type="checkbox"></td>
        <td class="P_TableData">${LongestTransactionNumber}</td>
        <td class="P_TableData">${LongestWODate}</td>
        <td class="P_TableData">${FormatNumber(LongestNetWeight)}KG</td>
        <td class="P_TableData">₱${LongestTotalPrice}</td>
    </tr>`;

}


function P_ShowSpec(){
    var CurTransNumber = window.sessionStorage.getItem('PSPEC_CurrentTransactionNumber');
    var index = P_TransactionInfo.TransactionNumber.indexOf(CurTransNumber);
    PSPEC_ClientNameText.innerHTML = P_TransactionInfo.ClientName[index];
    PSPEC_LocationFromText.innerHTML = P_TransactionInfo.LocationFrom[index];
    PSPEC_DriverText.innerHTML = P_TransactionInfo.Driver[index];
    PSPEC_WeighInDateText.innerHTML = P_TransactionInfo.WeighInDate[index];
    PSPEC_NetWeightText.innerHTML = FormatNumber(P_TransactionInfo.NetWeight[index]) +' KG';
    PSPEC_TransactionTypeText.innerHTML = P_TransactionInfo.TransactionType[index];
    PSPEC_TransactionNumberText.innerHTML = P_TransactionInfo.TransactionNumber[index];
    PSPEC_LocationToText.innerHTML = P_TransactionInfo.LocationTo[index];
    PSPEC_PlateNumberText.innerHTML = P_TransactionInfo.PlateNumber[index];
    PSPEC_WeighOutDateText.innerHTML = P_TransactionInfo.WeighOutDate[index];
    PSPEC_PricePerKgText.innerHTML = '₱'+FormatNumber(P_TransactionInfo.PricePerKg[index]);
    PSPEC_TotalPriceText.innerHTML = '₱'+FormatNumber(P_TransactionInfo.TotalPrice[index]);
    PSPEC_Remarks.innerHTML = P_TransactionInfo.Remarks[index];
    console.log( P_TransactionInfo.ClientName[index])
    P_ShowSpecMainContent();
}

P_BackArrow.addEventListener('click',()=>{
    P_ContentRightA.classList.remove('ContentInvisible');
    P_ContentRightB.classList.add('ContentInvisible');
    P_CurrentClient.innerHTML  = "None";
    P_ButtonDisabled();
    P_SearchEnable()
})

PSPEC_BackArrow.addEventListener('click',()=>{
    P_ShowMainContent();
})

P_SelectAllButton.addEventListener('click', ()=>{
    PR_TListSelected = []
    PCB_List.forEach((item, index)=>{
        var cb = document.getElementById(item);
        PR_TListSelected.push(PR_TList[index]);
        cb.checked = true;
    })

    var ilist = [];

    P_TransactionInfo.TransactionNumber.forEach((item, index)=>{
        if(PR_TListSelected.includes(item)){
            ilist.push(index);
        }
    })

    var datefrom;
    var df;
    var dateto;
    var dt;
    var datelist = [];

    ilist.forEach((item, index)=>{
        datelist.push(Date.parse(P_TransactionInfo.WeighOutDate[item].split('-')[0]))
    })

    df = new Date(Math.min.apply(Math,datelist));
    dt = new Date(Math.max.apply(Math,datelist));
    datefrom = `${df.getFullYear()}-${df.getMonth()+1}-${df.getDate()}`;
    dateto = `${dt.getFullYear()}-${dt.getMonth()+1}-${dt.getDate()}`;
    console.log(PR_TListSelected)
    P_SelectDateFrom.value = datefrom;
    P_SelectDateTo.value = dateto;
    
    
})

P_ClearSelectionButton.addEventListener('click', ()=>{
    PCB_List.forEach((item, index)=>{
        var cb = document.getElementById(item);
        cb.checked = false;
    })
})

var P_TransactioNumberListText = document.getElementById('P_TransactioNumberListText');
var P_PaymentUID = document.getElementById('P_PaymentUID');
var P_PopUpContainer = document.getElementById('P_PopUpContainer');

var P_BankIssued  = document.getElementById('P_BankIssued');
var P_ChequeNum = document.getElementById('P_ChequeNum');
var P_PopUpPayButton = document.getElementById('P_PopUpPayButton');

PayButton.addEventListener('click', async()=>{
    var checked = [];

    
    
    PCB_List.forEach((item, index)=>{
        var i = document.getElementById(item);
        if(i.checked == true)
        { 
            checked.push(item);
        }
    })
    if(checked.length>0)
    {
        ShowPopUp("","PayOut");
    }
    else
    {
        if(await ShowPopUp("No Transaction Selected","Default", "OK") == true)
        {
            HidePopUp();
        }
        else
        {
            HidePopUp();
        }
    }
    
    
})

P_PopUpPayButton.addEventListener('click',()=>{
    var Errors = 0;
    
    if(P_BankIssued.value == '')
    {
        ErrorMessage(P_BankIssued);
        Errors+=1;
    } 
    if(P_ChequeNum.value == '')
    {
        ErrorMessage(P_ChequeNum);
        Errors+=1;
    } 
    if(P_RecievedBy.value == '')
    {
        ErrorMessage(P_ChequeNum);
        Errors+=1;
    }
    if(Errors == 0)
    {
        
        P_TransactioNumberListText.value = PR_TListSelected;
        

        P_PaymentUID.value = window.sessionStorage.getItem('UID');
        window.sessionStorage.setItem('PCR_TransactionList', PR_TListSelected);
        window.sessionStorage.setItem('PCR_Create', "True");

        
        P_PopUpContainer.submit();

        var w = window.open("PaymentReports.php",'_blank');
    }

    
    
})

P_BankIssued.addEventListener('click',()=>
{
    if(P_BankIssued.style.color == 'rgb(255, 56, 90)')
    {
        P_BankIssued.type = "number";
        ClearInput(P_BankIssued);
    }
})

P_ChequeNum.addEventListener('click',()=>
{
    if(P_ChequeNum.style.color == 'rgb(255, 56, 90)')
    {
        P_ChequeNum.type = "number";
        ClearInput(P_ChequeNum);
    }
})



P_SelectDateButton.addEventListener('click',()=>{
    var LIndexList = [];
    PR_TListSelected = [];
    var datefrom = parseInt(Date.parse(`${P_SelectDateFrom.value.toString().split('-')[1]}-${P_SelectDateFrom.value.toString().split('-')[2]}-${P_SelectDateFrom.value.toString().split('-')[0]}`));
    var dateto = parseInt(Date.parse(`${P_SelectDateTo.value.toString().split('-')[1]}-${P_SelectDateTo.value.toString().split('-')[2]}-${P_SelectDateTo.value.toString().split('-')[0]}`));
    
    PDateFrom = P_SelectDateFrom.value;
    PDateTo = P_SelectDateTo.value;

    P_IndexList.forEach((item, index)=>{
        var d = parseInt(Date.parse(P_TransactionInfo.WeighOutDate[item].split('-')[0]));
        
        if(d <= dateto && d >= datefrom )
        {
            var T2  = P_TransactionInfo.TransactionNumber[item].split('-');
            LIndexList.push(`PCB_${T2[0].replace(/ /g,'_')}_${T2[1]}`);
            
        }
    })

    PCB_List.forEach((item, index)=>{
        var cb = document.getElementById(item);
        cb.checked = false;
    })
    
    LIndexList.forEach((item, index)=>{
        var cb = document.getElementById(item);
        PR_TListSelected.push(PR_TList[index]);
        cb.checked = true;
    })

    console.log(PR_TListSelected);
})

P_ButtonDisabled();


P_ButtonSearch.addEventListener('click',()=>{
    var search = P_SearchText.value;
    var uniqueClients = [];

    P_UniqueClientList = {};

    P_ClientNameList.forEach((item,index) => {
        if(item.toUpperCase().includes(search.toUpperCase()))
        {
            if(P_UniqueClientList[item] == null)
            {
                var l = [item];
                P_UniqueClientList[item] = parseFloat(P_TotalPriceList[index])
                P_UniqueTransactionList[item] = l;
    
                console.log(P_LongestTotalPrice)
                if(P_TotalPriceList[index].length > P_LongestTotalPrice.length)
                {
                    P_LongestTotalPrice = P_TotalPriceList[index];
                    
                }
                if(item.length > P_LongestClientName.length)
                {
                    P_LongestClientName = item;
                }
                
            }
            else
            {
                P_UniqueClientList[item] += parseFloat(P_TotalPriceList[index])
                P_UniqueTransactionList[item].push(item);
            }
            uniqueClients.push(item);
        }
        
    })
    console.log(P_UniqueClientList);
    Set_PValues();
})


P_SearchText.addEventListener('change',()=>{
    var search = P_SearchText.value;
    var uniqueClients = [];

    P_UniqueClientList = {};

    P_ClientNameList.forEach((item,index) => {
        if(item.toUpperCase().includes(search.toUpperCase()))
        {
            if(P_UniqueClientList[item] == null)
            {
                var l = [item];
                P_UniqueClientList[item] = parseFloat(P_TotalPriceList[index])
                P_UniqueTransactionList[item] = l;
    
                console.log(P_LongestTotalPrice)
                if(P_TotalPriceList[index].length > P_LongestTotalPrice.length)
                {
                    P_LongestTotalPrice = P_TotalPriceList[index];
                    
                }
                if(item.length > P_LongestClientName.length)
                {
                    P_LongestClientName = item;
                }
                
            }
            else
            {
                P_UniqueClientList[item] += parseFloat(P_TotalPriceList[index])
                P_UniqueTransactionList[item].push(item);
            }
            uniqueClients.push(item);
        }
        
    })
    Set_PValues();
})


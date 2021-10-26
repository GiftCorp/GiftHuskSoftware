var WO_Search = document.getElementById('WO_Search');
var WO_Filter = document.getElementById('WO_Filter');
var WO_SearchButton = document.getElementById('WO_SearchButton');

var WO_InputContainer = document.getElementById('WO_InputContainer');
var WO_ListContentContainer = document.getElementById('WO_ListContentContainer');
var WO_BackArrow = document.getElementById('WO_BackArrow');

var WO_ClientNameText = document.getElementById('WO_ClientNameText');
var WO_LocationFromText = document.getElementById('WO_LocationFromText');
var WO_DriverNameText = document.getElementById('WO_DriverNameText');
var WO_WeighInDateText = document.getElementById('WO_WeighInDateText');
var WO_WeightInText = document.getElementById('WO_WeightInText');
var WO_TransacNumberText = document.getElementById('WO_TransacNumberText');

var WO_PlateNumberText = document.getElementById('WO_PlateNumberText');
var WO_TransacTypeText = document.getElementById('WO_TransacTypeText');

var WeighOutButton = document.getElementById('WeighOutButton');
var WeighOutCancelButton = document.getElementById('WeighOutCancelButton');
var WO_WeightText = document.getElementById('WO_WeightText');
var WO_LocationToCBox = document.getElementById('WO_LocationToCBox');
var WO_TransactionNumberInput = document.getElementById('WO_TransactionNumberInput');
var WeighOutForm = document.getElementById('WeighOutForm');
var WO_RemarksText = document.getElementById('WO_RemarksText');

var WO_LocationToEditButton = document.getElementById('WO_LocationToEditButton');
var WO_LocationToEditSave = document.getElementById('WO_LocationToEditSave');

var WO_PricePerKGEditButton = document.getElementById('WO_PricePerKGEditButton');
var WO_PricePerKGEditSave = document.getElementById('WO_PricePerKGEditSave');

var WO_PopUpContainer = document.getElementById('WO_PopUpContainer');
var WO_PopUpContinueButton = document.getElementById('WO_PopUpContinueButton');
var WO_PopUpUserName = document.getElementById('WO_PopUpUserName');
var WO_PopUpPassword = document.getElementById('WO_PopUpPassword');
var WO_PopUpError = document.getElementById('WO_PopUpError');

var WeighOutUIDtext = document.getElementById('WeighOutUIDtext');
var WO_PricePerKGInputTextF = document.getElementById('WO_PricePerKGInputTextF');
var WO_LocationToTextF = document.getElementById('WO_LocationToTextF');
var WO_Remarks = document.getElementById('WO_Remarks');
var WO_PriceUpdateUID = document.getElementById('WO_PriceUpdateUID');



function WO_ListShow(){
    window.sessionStorage.setItem('CurrentContent',"WeighOut$List");
    WO_InputContainer.classList.add('ContentInvisible');
    WO_ListContentContainer.classList.remove('ContentInvisible');
}

function WO_PopUpReset(){
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

    ShowPopUp("","WeighOut");
  
    WO_PricePerKGInputText.value = '₱' + window.sessionStorage.getItem('WO_PopUpPricePerKG$Temp');

    WO_LocationToCBox.value = window.sessionStorage.getItem('WO_PopUpLocationToText$Temp');

    WO_RemarksText.value = window.sessionStorage.getItem('WO_PopUpRemarks$Temp');
    WO_WeightText.value = parseFloat(window.sessionStorage.getItem('WO_PopUpWeight$Temp'));
    
    window.sessionStorage.removeItem('Auth');
    
}

function WO_ContentDefault(){
    if(window.sessionStorage.getItem('CurrentContent') == "WeighOut$Input")
    {
        WO_ShowCurrentTransaction();

        if(sessionStorage.getItem('Auth') != null)
        {
            if(sessionStorage.getItem('Auth') == 1)
            {
                WO_TransactionNumberInput.value = window.sessionStorage.getItem('WOL_CurrentTransactionNumber');
                WO_LocationToTextF.value = window.sessionStorage.getItem('WO_PopUpLocationToText$Temp');
                WO_PricePerKGInputTextF.value = window.sessionStorage.getItem('WO_PopUpPricePerKG$Temp');
                WO_WeightText.value = parseFloat(window.sessionStorage.getItem('WO_PopUpWeight$Temp'));
                WeighOutUIDtext.value = window.sessionStorage.getItem('UID');
                WO_RemarksText.value = window.sessionStorage.getItem('WO_PopUpRemarks$Temp');
                WO_PriceUpdateUID.value = window.sessionStorage.getItem('WO_SecID$Temp')

                console.log(WeighOutUIDtext.value);
                window.sessionStorage.removeItem('WO_PopUpLocationToText$Temp');
                window.sessionStorage.removeItem('WO_PopUpPricePerKG$Temp');
                window.sessionStorage.removeItem('WO_PopUpWeight$Temp');
                window.sessionStorage.removeItem('WO_PopUpRemarks$Temp');
                window.sessionStorage.removeItem('WO_SecID$Temp');

                window.sessionStorage.removeItem('Auth');

                WeighOutForm.submit();
            }
            else if(sessionStorage.getItem('Auth') == 0) 
            {
                WO_PopUpReset();
                WO_PopUpError.classList.remove('TextInvisible');
                WO_PopUpError.innerHTML = "User Credentials Incorrect";
            }

            else if(sessionStorage.getItem('Auth') == -1) 
            {
                WO_PopUpReset();
                WO_PopUpError.classList.remove('TextInvisible');
                WO_PopUpError.innerHTML = "Same User Cannot Be Used";
            }
        }
       
    }
    else if(window.sessionStorage.getItem('CurrentContent') == "WeighOut$List")
    {
        WO_ListShow();
    }
}

var currentIndex;

function WO_InputShow(index){

    
    WO_InputContainer.classList.remove('ContentInvisible');
    WO_ListContentContainer.classList.add('ContentInvisible');
    WO_ClientNameText.innerHTML = WO_InformationList.ClientName[index];
    WO_LocationFromText.innerHTML = WO_InformationList.LocationFrom[index];
    WO_DriverNameText.innerHTML = WO_InformationList.DriverName[index];
    WO_WeighInDateText.innerHTML = WO_InformationList.WeighInDate[index];
    WO_WeightInText.innerHTML = FormatNumber(WO_InformationList.WeightIn[index]) + ' KG';
    WO_TransacNumberText.innerHTML = WO_InformationList.TransactionNumber[index];
    WO_LocationToTextF.value = WO_InformationList.LocationTo[index];
    WO_PlateNumberText.innerHTML = WO_InformationList.PlateNumber[index];
    WO_TransacTypeText.innerHTML = WO_InformationList.TransactionType[index];
    
    if(WO_InformationList.PricePerKg[index] == null)
    {
        
        WO_PricePerKGInputText.value = 0;
    }
    else
    {
        
        WO_PricePerKGInputText.value = FormatNumber(WO_InformationList.PricePerKg[index]);
    }
    
    
    
    
}

function WO_Search_SetListValues()
{
    WO_Table.innerHTML = `<tr class="ListHeader2">
    <th >Client Name</th>
    <th>Transaction Number</th>
    <th>Transaction Type</th>
    <th>Weigh In Date</th>
    <th>Weight (IN)</th>
    </tr>`;

    WO_TableRows = [];
    WO_LongestClientName = "";
    WO_LongestTransactionNumber = "";
    WO_LongestTransType = "";
    WO_LongestWeighInDate = "";
    WO_LongestWeight = "";

    IndexList.forEach((item,index)=>{
        var TransNumber = WO_InformationList.TransactionNumber[item];
        var T  = WO_InformationList.TransactionNumber[item].split('-');
        if(index % 2 == 0)
        {
            
            WO_Table.innerHTML += ` <tr class="RowStyleS" id="WOL_${T[0]}_${T[1]}">
                        <td class="WO_TableData">${WO_InformationList.ClientName[item]}</td>
                        <td class="WO_TableData">${WO_InformationList.TransactionNumber[item]}</td>
                        <td class="WO_TableData">${WO_InformationList.TransactionType[item]}</td>
                        <td class="WO_TableData">${WO_InformationList.WeighInDate[item]}</td>
                        <td class="WO_TableData">${FormatNumber(WO_InformationList.WeightIn[item])} KG</td>
                    </tr>`

        }
        else
        {
            WO_Table.innerHTML += ` <tr class="RowStyle2S" id="WOL_${T[0]}_${T[1]}">
            <td class="WO_TableData">${WO_InformationList.ClientName[item]}</td>
            <td class="WO_TableData">${WO_InformationList.TransactionNumber[item]}</td>
            <td class="WO_TableData">${WO_InformationList.TransactionType[item]}</td>
            <td class="WO_TableData">${WO_InformationList.WeighInDate[item]}</td>
            <td class="WO_TableData">${FormatNumber(WO_InformationList.WeightIn[item])} KG</td>
                    </tr>`
        }

        WO_TableRows.push(`WOL_${T[0]}_${T[1]}&${TransNumber}`);

        if(WO_InformationList.ClientName[item].length > WO_LongestClientName.length)
        {
            WO_LongestClientName = WO_InformationList.ClientName[item];
        }

        if(WO_InformationList.TransactionNumber[item].length > WO_LongestTransactionNumber.length)
        {
            WO_LongestTransactionNumber = WO_InformationList.TransactionNumber[item];
        }

        if(WO_InformationList.TransactionType[item].length > WO_LongestTransType.length)
        {
            WO_LongestTransType = WO_InformationList.TransactionType[item];
        }

        if(WO_InformationList.WeighInDate[item].length > WO_LongestWeighInDate.length)
        {
            WO_LongestWeighInDate = WO_InformationList.WeighInDate[item];
        }

        if(WO_InformationList.WeightIn[item].length > WO_LongestWeight.length)
        {
            WO_LongestWeight = WO_InformationList.WeightIn[item];
        }
        
    })


    WO_HeaderTable.innerHTML = `
                                <tr class="ListHeader">
                                    <th>Client Name</th>
                                    <th>Transaction Number</th>
                                    <th>Transaction Type</th>
                                    <th>Weigh In Date</th>
                                    <th>Weight (IN)</th>
                                </tr>

                                <tr class="RowStyle2">
                                    <td class="WO_TableData">${WO_LongestClientName}</td>
                                    <td class="WO_TableData">${WO_LongestTransactionNumber}</td>
                                    <td class="WO_TableData">${WO_LongestTransType}</td>
                                    <td class="WO_TableData">${WO_LongestWeighInDate}</td>
                                    <td class="WO_TableData">${WO_LongestWeight} KG</td>
                                </tr>`;
  

    WO_TableRows.forEach((item,index)=>{
        var data = item.split('&');
        var item2 = document.getElementById(data[0]);

    
        item2.addEventListener('click',()=>{

            window.sessionStorage.setItem('WOL_CurrentTransactionNumber', data[1]);
            SetCurrentContent('WeighOut$Input');
            WO_ShowCurrentTransaction();
            
        })
        
    })
}

function Search(){
    
    IndexList = [];
    if(WO_Filter.value == "Client Name"){

        
        WO_InformationList.ClientName.forEach((item,index)=>{
            if(item.toUpperCase().indexOf(WO_Search.value.toUpperCase()) > -1)
            {
                
                IndexList.push(index);
                
            }
        })

        WO_Search_SetListValues();

    }

    if(WO_Filter.value == "Transaction Number"){

        WO_InformationList.TransactionNumber.forEach((item,index)=>{
            if(item.toUpperCase().indexOf(WO_Search.value.toUpperCase()) > -1)
            {
                
                IndexList.push(index);
            }
        })

        WO_Search_SetListValues();

    }

    if(WO_Filter.value == "Transaction Type"){

        WO_InformationList.TransactionType.forEach((item,index)=>{
            if(item.toUpperCase().indexOf(WO_Search.value.toUpperCase()) > -1)
            {
                
                IndexList.push(index);
            }
        })

        WO_Search_SetListValues();

    }

    if(WO_Filter.value == "Weigh In Date"){

        WO_InformationList.WeighInDate.forEach((item,index)=>{
            if(item.toUpperCase().indexOf(WO_Search.value.toUpperCase()) > -1)
            {
                
                IndexList.push(index);
            }
        })

        WO_Search_SetListValues();

    }

    if(WO_Filter.value == "Weight(IN)"){

        WO_InformationList.WeightIn.forEach((item,index)=>{
            if(item.toUpperCase().indexOf(WO_Search.value.toUpperCase()) > -1)
            {
                
                IndexList.push(index);
            }
        })
        WO_Search_SetListValues();

    }
}

WO_Search.addEventListener('change', ()=>{
    if(WO_Search.value =="")
    {
        WO_SetListValues();
    }
    Search()
})

WO_SearchButton.addEventListener('click', ()=>{
    if(WO_Search.value =="")
    {
        WO_SetListValues();
    }
    Search()
})


function WO_ShowCurrentTransaction(){
    var TransactionNumber = window.sessionStorage.getItem('WOL_CurrentTransactionNumber');
    
    IndexList.forEach((item,index)=>{
        
        if(WO_InformationList.TransactionNumber[item] == TransactionNumber)
        {
            currentIndex = item;
            WO_InputShow(item);
            window.sessionStorage.setItem('WO_CurrentIndex', item);
        }   
    })
}

WO_BackArrow.addEventListener('click', ()=>{
    WO_ListShow();
})

WeighOutButton.addEventListener('click', async ()=>{
    
    if(WO_WeightText.value == "")
    {
        WO_WeightText.type = "text";
        ErrorMessage(WO_WeightText);
    }
    else if(WO_WeightText.value.includes('-'))
    {
        if(await ShowPopUp("Cannot use negative number", "Default", "OK") == true)
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
        WO_TransactionNumberInput.value = window.sessionStorage.getItem("WOL_CurrentTransactionNumber")
        WeighOutUIDtext.value = window.sessionStorage.getItem('UID');
        if(WO_PricePerKGInputText.value == 0 || WO_PricePerKGInputText.value == null)
        {
            if(await ShowPopUp("Price Per Kg Not Set", "Default", "OK") == true)
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
            var num = WO_InformationList.PricePerKg[currentIndex];
            console.log(num);

            async function Check()
            {
                if(num != null)
                {
                
                    if(WO_PricePerKGInputText.value != FormatNumber(num))
                    {
                        ShowPopUp("","WeighOut");
                    }
                    else
                    {
                    
                        if(await ShowPopUp("Are you sure you want to save this transaction") == true)
                        {
                            WeighOutForm.submit();
                        }
                        else
                        {
                            HidePopUp();
                        }
                        
                    }
                
                
                }
                else
                {
                
                    ShowPopUp("","WeighOut");
                    
                }
            }


            if(parseFloat(WO_WeightText.value)>parseFloat(WO_InformationList.WeightIn[currentIndex]))
            {

                if(await ShowPopUp("Are you sure you want to input a larger weight than the (IN) weight?") == true)
                {
                    HidePopUp();
                    Check();
                }
                else
                {
                    HidePopUp();
                }
                
            }
            else
            {
                Check();
            }
            
            
        }
       
        
    }
})

WO_WeightText.addEventListener('click',()=>
{
    if(WO_WeightText.style.color == 'rgb(255, 56, 90)')
    {
        WO_WeightText.type = "number";
        ClearInput(WO_WeightText);
    }
})






var WO_PopUpLocationToText = document.getElementById('WO_PopUpLocationToText');
var WO_PopUpPricePerKG = document.getElementById('WO_PopUpPricePerKG');
var WO_PopUpRemarks = document.getElementById('WO_PopUpRemarks');
var WO_PopUpPricePerKG = document.getElementById('WO_PopUpPricePerKG');

WO_PopUpContinueButton.addEventListener("click", ()=>{
    var Error = 0;
    if(WO_PopUpUserName.value == "")
    {
        Error+=1;
        ErrorMessage(WO_PopUpUserName);
    }
    if(WO_PopUpPassword.value == "")
    {
        Error+=1;
        WO_PopUpPassword.type = "text";
        ErrorMessage(WO_PopUpPassword);
        
    }

    if(Error == 0)
    {
        
        WO_PopUpPricePerKG.value = WO_PricePerKGInputText.value;
        WO_PopUpLocationToText.value = WO_LocationToCBox.value;
        WO_PopUpWeight.value = WO_WeightText.value;
        WO_PopUpRemarks.value = WO_RemarksText.value;
        WO_PopUpCurUID.value = window.sessionStorage.getItem('UID');
        WO_PopUpContainer.submit();

    }
})

WO_PopUpUserName.addEventListener('click',()=>{

    if(WO_PopUpUserName.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WO_PopUpUserName);
    }
})

WO_PopUpPassword.addEventListener('click',()=>{
    if(WO_PopUpPassword.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WO_PopUpPassword);
        WO_PopUpPassword.type = 'password';
    }
})

var WO_PopUpCancel = document.getElementById('WO_PopUpCancel');

WeighOutCancelButton.addEventListener('click',async ()=>{
    var pop = await ShowPopUp("Are you sure you want to cancel the transaction?");
    if( pop== true){
        WO_TransactionNumberInput.value = window.sessionStorage.getItem('WOL_CurrentTransactionNumber');
        WO_PopUpCancel.value = "Cancelled";
        WeighOutForm.submit();
    }
    else
    {
        HidePopUp();
    }
})


WO_ContentDefault();
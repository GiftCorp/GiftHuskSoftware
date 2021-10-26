

var RR_SearchButton = document.getElementById("RR_SearchButton");
var RR_Search = document.getElementById("RR_Search");
var RR_CreateReportButton = document.getElementById("RR_CreateReportButton");

var RR_TableHeader = document.getElementById("RR_TableHeader");
var RR_Table = document.getElementById("RR_Table");

var RR_TransNumberList = [];


RR_SearchButton.addEventListener('click', ()=>{
    var search = RR_Search.value;

    if(search != "")
    {
        RR_Table.innerHTML = 
        `<tr class="ListHeader2" >
            <th>Client Name</th>
            <th>Transaction Number</th>
            <th>Cheque Number</th>
            <th>Net Weight</th>
            <th>Total Price</th>
            <th>OR Date</th>
        </tr>`;
    
        R_IndexList = [];
        R_ChequeNumberList.forEach((item, index)=>{
            if(item != null)
            {
                if(item == search)
                {
                    R_IndexList.push(index);
                }
            }
            
        })
    
        var LongestClientName = "";
        var LongestTransNumber = "";
        var LongestChequeNumber = "";
        var LongestNetWeight = "";
        var LongestTotalPrice = "";
        var LongestORDate = "";
    
        RR_TransNumberList = [];
    
        R_IndexList.forEach((item, index)=>{
            if(index % 2 == 0)
            {
                RR_Table.innerHTML +=` 
                <tr class="RowStyle">
                    <td>${R_ClientNameList[item]}</td>
                    <td>${R_TransactionNumberList[item]}</td>
                    <td>${R_ChequeNumberList[item]}</td>
                    <td>${FormatNullText(FormatNumber(R_NetWeightList[item]),"KG")}</td>
                    <td>${FormatNullText(FormatNumber(R_TotalPriceList[item]),"₱")}</td>
                    <td>${R_ORDateList[item]}</td>
                </tr>`;
            }
            else
            {
                RR_Table.innerHTML +=` 
                <tr class="RowStyle2">
                    <td>${R_ClientNameList[item]}</td>
                    <td>${R_TransactionNumberList[item]}</td>
                    <td>${R_ChequeNumberList[item]}</td>
                    <td>${FormatNullText(FormatNumber(R_NetWeightList[item]),"KG")}</td>
                    <td>${FormatNullText(FormatNumber(R_TotalPriceList[item]),"₱")}</td>
                    <td>${R_ORDateList[item]}</td>
                </tr>`;
            }
    
            if(R_ClientNameList[item].length > LongestClientName.length )
            {
                LongestClientName = R_ClientNameList[item];
            }
    
            if(R_TransactionNumberList[item].length > LongestTransNumber.length )
            {
                LongestTransNumber = R_TransactionNumberList[item];
            }
    
            if(R_ChequeNumberList[item].length > LongestChequeNumber.length )
            {
                LongestChequeNumber = R_ChequeNumberList[item];
            }
    
            if(R_NetWeightList[item].length > LongestNetWeight.length )
            {
                LongestNetWeight = R_NetWeightList[item];
            }
    
            if(R_TotalPriceList[item].length > LongestTotalPrice.length )
            {
                LongestTotalPrice = R_TotalPriceList[item];
            }
    
            if(R_ORDateList[item].length > LongestORDate.length )
            {
                LongestORDate = R_ORDateList[item];
            }
    
            RR_TransNumberList.push(R_TransactionNumberList[item]);
    
           
        })
    
        RR_TableHeader.innerHTML += 
        `<tr class="RowStyle">
            <th>${LongestClientName}</th>
            <th>${LongestTransNumber}</th>
            <th>${LongestChequeNumber}</th>
            <th>${FormatNullText(FormatNumber(LongestNetWeight),"KG")}</th>
            <th>${FormatNullText(FormatNumber(LongestTotalPrice),"₱")}</th>
            <th>${LongestORDate}</th>
        </tr>`;
    }

    else

    {
        RR_Table.innerHTML = ` 
        <tr class="ListHeader2" >
            <th >Client Name</th>
            <th>Transaction Number</th>
            <th>Cheque Number</th>
            <th>Net Weight</th>
            <th>Total Price</th>
            <th>OR Date</th>
        </tr>
        `;

        RR_HeaderTable.innerHTML =` 
        <tr class="ListHeader2" >
            <th >Client Name</th>
            <th>Transaction Number</th>
            <th>Cheque Number</th>
            <th>Net Weight</th>
            <th>Total Price</th>
            <th>OR Date</th>
        </tr>
        `;
    }

   

})

RR_CreateReportButton.addEventListener('click', ()=>{
    window.sessionStorage.setItem('PCR_Create',"True");
    window.sessionStorage.setItem('PCR_TransactionList', RR_TransNumberList);

    var w = window.open("PaymentReports.php",'_blank');

})
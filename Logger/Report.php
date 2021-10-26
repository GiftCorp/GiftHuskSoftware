<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Report.css">
    <title id="TitleText">Report</title>
</head>
<body>

    
    <div id="ReportsHeader">
        <h1 id="GiftHeader">GREEN INNOVATIONS FOR TOMORROW CORPORATION</h1>
        <h2 id="GiftAddress">BACAL 2, TALAVERA, NUEVA ECIJA</h2>
        <hr>

        <h2 id="HeaderText">Transaction Report</h2>
        <h2 id="ClientNameText" class="ContentInvisible">ABAR RICE MILL</h2>
        
        
        
        <div id= "DateFromToTextContainer">
            <b>Date From:</b>
            <p id="DateFromText">10/9/2021</p>
            <div></div>
            <b>Date To:</b>
            <p id="DateToText"> 10/9/2021</p>
        </div>

    </div>

    <div id="ReportsTableContainer">
        <div>
            <h4 id="ReportsTableDate"></h4>
            <table id="SummaryTable" cellspacing="0">
                <tr>
                    <th>Total Deliveries:</th>
                    <td id="TotalDeliveriesText"></td>
                </tr>
                <tr>
                    <th>Total Price:</th>
                    <td id="TotalPriceText"></td>
                </tr>
                <tr>
                    <th>Total No. Of Trucks:</th>
                    <td id="TotalTrucksText"></td>
                </tr>
            </table>
        </div>
        <table id="TransactionReportsTable" >
            <tr id="TransactionReportsTableHeader">
                
                <th>Transaction Number</th>
                <th>Weight (IN)</th>
                <th>Weight (OUT)</th>
                <th>Net Weight</th>
                <th>Weigh Out Date</th>
                <th>Transaction Type</th>
                <th>Price Per KG</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
            
        </table>

        <table id="PaymentReportsTable" >
            <tr id="PaymentReportsTableHeader">
                
                <th>Transaction Number</th>
                <th>Transaction Type</th>
                <th>Location To</th>
                <th>Net Weight</th>
                <th>Price Per Kg</th>
                <th>Total Price</th>
                <th>Cheque Number</th>
                <th>Bank</th>
                <th>Recieved By</th>
                <th>OR Date</th>
                <th>Status</th>

            </tr>
            
        </table>

    </div>
    
    <div id="ReportsFooter">
        <h1 class="ReportsFootertext">Prepared By:</h1>
        <h1 class="ReportsFootertext">Date:</h1>
        <h1 class="ReportsFootertext">Noted By:</h1>   
        <h1 class="ReportsFootertext">Date:</h1>
        
    </div>
</body>
</html>



<script>
    function FormatNumber(number) {
        var formatted = "";
        if(number != null)
        {
            
            var numtostring;
            var negative = "";
            if(number.toString().split('-').length == 2) 
            {
                numtostring = number.toString().split('-')[1];
                negative = "-";
            }
            else
            {
                numtostring = number.toString();
            }
            if(Number.isNaN(parseFloat(number)))
            {
                return number;
            }
            else if(numtostring == "0")
            {
                return negative + number;
            }
            else
            {
                if(numtostring.split('.')[0].length > 3)
                {
                    if(numtostring.split('.')[0].length == 0)
                    {
                        formatted = '.' + parseInt(numtostring.split('.')[1].replace(/0/g,'')).toString();
                        
                        return negative +formatted;
                        
                    }
                    else
                    {
                        
                        Array.from(numtostring.split('.')[0]).reverse().forEach((item,index)=>{
                        if((index +1)%3 == 0)
                        {
                            
                            if(numtostring.split('.')[0].length == index+1)
                            {
                                formatted = item + formatted;
                            }
                            else
                            {
                                if(index == (numtostring.length-1))
                                {
                                    formatted = item + formatted;
                                }
                                else
                                {
                                    formatted = ','+ item + formatted;
                                }
                            }
                        
                            
                            
                        }
                        else
                        {
                            formatted = item + formatted;
                        }
                        
                        })
                        
                        if(numtostring.split('.')[1] != null)
                        {
                            return negative + formatted+"."+ numtostring.split('.')[1].substring(0, 2);
                        }
                        else
                        {
                            return negative +formatted+"."+"00";
                        }
                        
                    
                    }
                }
                else
                {
                    
                    if(numtostring.split('.').length>2)
                    {
                        return negative + numtostring.split('.')[0] + "."+numtostring.split('.')[1].substring(0, 2);
                    }
                    else
                    {
                        
                        if(numtostring.split('.')[0] == "")
                        {
                           
                            return negative + "0." + numtostring.split('.')[1] ;
                        }
                        
                        else
                        {
                            return negative + numtostring.split('.')[0] + ".00";
                        }
                        
                    }
                    
                }
            }
        }
        
        
        
      
        
        
    }

    function FormatNullText(text, unit) 
    {
        if(text == null || text.toString() =="undefined")
        {
            return "";
        }
        else
        {
            if(unit == 'KG')
            {
                return text + " KG";
            }
            else if(unit == '₱')
            {
                return "₱" + text;
            }
            else
            {
                return text;
            }
            
        }
    }
    
    if(window.sessionStorage.getItem("CR_Reset") == "True")
    {
        console.log("asdas")
        document.cookie = `CR_ClientCBox=${window.sessionStorage.getItem("CR_ClientCBox")}`;
        document.cookie = `CR_StatusCbox=${window.sessionStorage.getItem("CR_StatusCbox")}`;
        document.cookie = `CR_DateFromInput=${window.sessionStorage.getItem("CR_DateFromInput")}`;
        document.cookie = `CR_DateToInput=${window.sessionStorage.getItem("CR_DateToInput")}`;
        document.cookie = `CR_TransacTypeCBox=${window.sessionStorage.getItem("CR_TransacTypeCBox")}`;

    }
    

    
</script> 

<?php

    include("Scripts/DBHandler.php");

    $CR_CurStatus = "";
    $CR_ClientNameList = array();
    $CR_TransactionNumberList = array();
    $CR_LocationToList = array();
    $CR_PlateNumberList = array();
    $CR_WeightInList  = array();
    $CR_WeightOutList = array();
    $CR_NetWeightList = array();
    $CR_TransactionTypeList = array();
    $CR_PricePerKGList = array();
    $CR_DateList = array();
    $CR_ChequeNumberList = array();
    $CR_BankList = array();
    $CR_PaymentRecievedByList = array();
    $CR_ORDateList = array();
    $CR_StatusList = array();

    $CR_TotalPriceList = array();

    $CR_ClientCbox = "";
    $CR_StatusCbox;
    $CR_DateFromInput;
    $CR_DateToInput;
    $CR_TransacTypeCBox;

    $CR_Empty = 1;

    
    if(isset($_COOKIE["CR_ViewReport"]) && $_COOKIE["CR_ViewReport"] == "true") 
    {
        
        $CR_ClientCbox = $_COOKIE["CR_ClientCBox"];
        $CR_StatusCbox = $_COOKIE["CR_StatusCbox"];
        $CR_DateFromInput = $_COOKIE["CR_DateFromInput"];
        $CR_DateToInput = $_COOKIE["CR_DateToInput"];
        $CR_TransacTypeCBox = $_COOKIE["CR_TransacTypeCBox"];

        $CR_Status;
        $CR_SQLStatus;
        $CR_StatusDate;
        $CR_ClientName;
        $CR_TransactionType;
        $CR_Empty = 2;

        
        if($CR_StatusCbox == "Unpaid")
        {
            $CR_Status = "Unpaid";
            $CR_SQLStatus = "OUT";
            
            $CR_StatusDate = "Weigh_Out_Date";
        }
        else if($CR_StatusCbox == "Paid")
        {
            $CR_Status = "PAID";
            $CR_SQLStatus = "PAID";
            $CR_StatusDate = "ORDAte";
        }
        else if($CR_StatusCbox == "All")
        {

            $CR_Status = "All";
            $CR_SQLStatus = "%";
            $CR_StatusDate = "Weigh_Out_Date";
        }

        if($CR_ClientCbox == "Any")
        {
            $CR_ClientName = "%";
        }
        else
        {
            $CR_ClientName = $CR_ClientCbox;
        }

        if($CR_TransacTypeCBox == "Any")
        {
            $CR_TransactionType = "%";
        }
        else 
        {
            $CR_TransactionType = $CR_TransacTypeCBox;
        }

        $sql = "SELECT FORMAT($CR_StatusDate, 'MM/dd/yyyy') as DateFormatted,
        FORMAT(Weigh_Out_Date, 'MM/dd/yyyy') as WO_DateFormatted,
        FORMAT(ORDAte, 'MM/dd/yyyy') as P_DateFormatted,
        * FROM dbo.Transaction_Information
        WHERE Status LIKE '$CR_SQLStatus'
        AND CAST($CR_StatusDate as date) >= CAST('$CR_DateFromInput' as date)
        AND CAST($CR_StatusDate as date)<= CAST('$CR_DateToInput' as date)
        AND ClientName LIKE '$CR_ClientName'
        AND TransactionType LIKE '$CR_TransactionType'";
        
        $CR_CurStatus = $CR_Status;

        $query = sqlsrv_query($Con, $sql);

        while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
        {
            
            array_push($CR_ClientNameList, $row["ClientName"]);
            array_push($CR_TransactionNumberList, $row["TransactionNumber"]);
            array_push($CR_PlateNumberList, $row["PlateNumber"]);
            array_push($CR_WeightInList, $row["WeighIn"]);
            array_push($CR_WeightOutList, $row["WeighOut"]);
            array_push($CR_NetWeightList, $row["NetWeight"]);
            array_push($CR_TransactionTypeList, $row["TransactionType"]);
            array_push($CR_PricePerKGList, $row["Price_Per_Kg"]);
            array_push($CR_DateList, $row["DateFormatted"]);
            array_push($CR_TotalPriceList, $row["Total_Price"]);
            array_push($CR_ChequeNumberList, $row["ChequeNumber"]);
            array_push($CR_BankList, $row["BankIssued"]);
            array_push($CR_PaymentRecievedByList, $row["PaymentRecievedBy"]);
            array_push($CR_ORDateList, $row["P_DateFormatted"]);
            array_push($CR_StatusList, $row["Status"]);
            array_push($CR_LocationToList, $row["LocationTo"]);
            

            $CR_Empty =0;
        }
        
    }
    
   
?>



<script>

    var CR_ClientCbox = <?php echo json_encode($CR_ClientCbox);?>;
    var CR_StatusCbox = <?php echo json_encode($CR_StatusCbox);?>;
    var CR_DateFromInput = <?php echo json_encode($CR_DateFromInput);?>;
    var CR_DateToInput = <?php echo json_encode($CR_DateToInput);?>;
    var CR_TransacTypeCBox = <?php echo json_encode($CR_TransacTypeCBox);?>;

    

    if(window.sessionStorage.getItem("CR_Reset") != "True")
    {
        window.sessionStorage.setItem("CR_Reset","True");
        window.sessionStorage.setItem("CR_ClientCbox", CR_ClientCbox);
        
        window.sessionStorage.setItem("CR_StatusCbox", CR_StatusCbox);
        window.sessionStorage.setItem("CR_DateFromInput", CR_DateFromInput);
        window.sessionStorage.setItem("CR_DateToInput", CR_DateToInput);
        window.sessionStorage.setItem("CR_TransacTypeCBox", CR_TransacTypeCBox);
    }
    else
    {
        if(window.sessionStorage.getItem("CR_Refreshed") == "True")
        {
            window.sessionStorage.removeItem("CR_Refreshed");
        }
        else
        {
            window.sessionStorage.setItem("CR_Refresh","True");
        }
    }
    
    
    if(window.sessionStorage.getItem("CR_Refresh") == "True")
    {
        window.sessionStorage.removeItem("CR_Refresh");
        window.sessionStorage.setItem("CR_Refreshed","True");
        location.reload();
    }
    

    var ReportsTableDate = document.getElementById("ReportsTableDate");
    var TransactionReportsTable = document.getElementById("TransactionReportsTable");
    var PaymentReportsTableHeader = document.getElementById("PaymentReportsTableHeader");
    var date = new Date();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var year = date.getFullYear();

    ReportsTableDate.innerHTML = `Report Printed Date: ${month}-${day}-${year}`;
    

    var status = <?php echo json_encode($CR_CurStatus);?>;
    var CR_ClientNameList = <?php echo json_encode($CR_ClientNameList);?>;
    var CR_TransactionNumberList = <?php echo json_encode($CR_TransactionNumberList);?>;
    var CR_PlateNumberList = <?php echo json_encode($CR_PlateNumberList);?>;
    var CR_WeightInList = <?php echo json_encode($CR_WeightInList);?>;
    var CR_WeightOutList = <?php echo json_encode($CR_WeightOutList);?>;
    var CR_NetWeightList = <?php echo json_encode($CR_NetWeightList);?>;
    var CR_TransactionTypeList = <?php echo json_encode($CR_TransactionTypeList);?>;
    var CR_PricePerKGList = <?php echo json_encode($CR_PricePerKGList);?>;
    var CR_DateList = <?php echo json_encode($CR_DateList);?>;
    var CR_TotalPriceList = <?php echo json_encode($CR_TotalPriceList);?>;
    var CR_ChequeNumberList = <?php echo json_encode($CR_ChequeNumberList);?>;
    var CR_BankList = <?php echo json_encode($CR_BankList);?>;
    var CR_PaymentRecievedByList = <?php echo json_encode($CR_PaymentRecievedByList);?>;
    var CR_ORDateList = <?php echo json_encode($CR_ORDateList);?>;
    var CR_StatusList = <?php echo json_encode($CR_StatusList);?>;
    var CR_LocationToList = <?php echo json_encode($CR_LocationToList);?>;

    

    
  
    TransactionReportsTable.classList.add('ContentInvisible');
    PaymentReportsTable.classList.add('ContentInvisible');

 
    var TotalDeliveries = 0;
    var TotalPrice = 0;
    CR_NetWeightList.forEach((item,index)=>{
        if(item != null)
        {
            TotalDeliveries += parseFloat(item);
        }
        
    })

    CR_TotalPriceList.forEach((item,index)=>{
        if(item != null)
        {
            TotalPrice += parseFloat(item);
        }
        
    })

    TotalDeliveriesText.innerHTML = FormatNumber(TotalDeliveries) + " KG";
    TotalPriceText.innerHTML = "₱" + FormatNumber(TotalPrice);
    TotalTrucksText.innerHTML = CR_TransactionNumberList.length;

    DateFromText.innerHTML = CR_DateFromInput.split('-')[1]+ "-" +CR_DateFromInput.split('-')[2]+ "-" +CR_DateFromInput.split('-')[0];
    DateToText.innerHTML = CR_DateToInput.split('-')[1]+ "-" +CR_DateToInput.split('-')[2]+ "-" +CR_DateToInput.split('-')[0];

    console.log(status);
    if(status == "Unpaid")
    {
        TitleText.innerHTML = "Transaction Report (Unpaid)";
        HeaderText.innerHTML = "Transaction Report (Unpaid)";
        ClientNameText.classList.add("ContentInvisible");
        TransactionReportsTable.classList.remove('ContentInvisible');

        var uniqueClient = [];
        CR_ClientNameList.forEach((item,index)=>{
            if(!uniqueClient.includes(item))
            {
                uniqueClient.push(item);
            }
        })

        if(uniqueClient.length == 1)
        {
            ClientNameText.classList.remove('ContentInvisible');
            ClientNameText.innerHTML = uniqueClient[0];

            CR_ClientNameList.forEach((item,index)=>{

                var stat = CR_StatusList[index];
                if(CR_StatusList[index]=="OUT")
                {
                    stat = "UPAID"
                }

                TransactionReportsTable.innerHTML+=`
                    <tr>
                        <td>${CR_TransactionNumberList[index]}</td>
                        <td>${FormatNumber(CR_WeightInList[index])} KG</td>
                        <td>${FormatNumber(CR_WeightOutList[index])} KG</td>
                        <td>${FormatNumber(CR_NetWeightList[index])} KG</td>
                        <td>${CR_DateList[index]}</td>
                        <td>${CR_TransactionTypeList[index]}</td>
                        <td>₱${FormatNumber(CR_PricePerKGList[index])}</td>
                        <td>₱${FormatNumber(CR_TotalPriceList[index])}</td>
                        <td>${stat}</td>
                    </tr>`;})
        }
        else
        {
            TransactionReportsTableHeader.innerHTML = "<th>Client Name</th>" + TransactionReportsTableHeader.innerHTML;

            CR_ClientNameList.forEach((item,index)=>{

                var stat = CR_StatusList[index];
                if(CR_StatusList[index]=="OUT")
                {
                    stat = "UNPAID"
                }


                TransactionReportsTable.innerHTML+=`
                    <tr>
                        <td>${CR_ClientNameList[index]}</td>
                        <td>${CR_TransactionNumberList[index]}</td>
                        <td>${FormatNumber(CR_WeightInList[index])} KG</td>
                        <td>${FormatNumber(CR_WeightOutList[index])}</td>
                        <td>${FormatNumber(CR_NetWeightList[index])}</td>
                        <td>${CR_DateList[index]}</td>
                        <td>${CR_TransactionTypeList[index]}</td>
                        <td>₱${FormatNumber(CR_PricePerKGList[index])}</td>
                        <td>${FormatNullText(FormatNumber(CR_TotalPriceList[index]),"₱")}</td>
                        <td>${stat}</td>
                    </tr>`;})
        }
        
    }
    else if(status == "PAID" || status == "All")
    {   
        
        TitleText.innerHTML = `Transaction Report (${status.toUpperCase()})`;
        HeaderText.innerHTML = `Transaction Report (${status.toUpperCase()})`;;
        var uniqueClient = [];
        CR_ClientNameList.forEach((item,index)=>{
            if(!uniqueClient.includes(item))
            {
                uniqueClient.push(item);
            }
        })

        
        
        if(uniqueClient.length == 1)
        {
            PaymentReportsTable.classList.remove('ContentInvisible');
            ClientNameText.classList.remove('ContentInvisible');
            ClientNameText.innerHTML = uniqueClient[0];

         
            CR_ClientNameList.forEach((item,index)=>{
                
                var stat = CR_StatusList[index];

                if(CR_StatusList[index] == "OUT") {
                    stat = "UNPAID";
                }

                PaymentReportsTable.innerHTML+=`
                <tr>
                    <td>${CR_TransactionNumberList[index]}</td>
                    <td>${CR_TransactionTypeList[index]}</td>
                    <td>${CR_LocationToList[index]}</td>
                    <td>${FormatNullText(FormatNumber(CR_NetWeightList[index]), "KG")}</td>
                    <td>${FormatNullText(FormatNumber([index]),"₱")}</td>
                    <td>${FormatNullText(FormatNumber(CR_TotalPriceList[index]),"₱")}</td>
                    <td>${FormatNullText(CR_ChequeNumberList[index])}</td>
                    <td>${FormatNullText(CR_BankList[index])}</td>
                    <td>${FormatNullText(CR_PaymentRecievedByList[index])}</td>
                    <td>${FormatNullText(CR_ORDateList[index])}</td>
                    <td>${stat}</td>
                </tr>`;

            })
        }
        else
        {
            
            PaymentReportsTable.classList.remove('ContentInvisible');
            PaymentReportsTableHeader.innerHTML = "<th>Client Name</th>" + PaymentReportsTableHeader.innerHTML;
            
            CR_ClientNameList.forEach((item,index)=>{
               

                var stat = CR_StatusList[index];

                if(CR_StatusList[index] == "OUT") {
                    stat = "UNPAID";
                }

                PaymentReportsTable.innerHTML+=`
                <tr>
                    <td>${CR_ClientNameList[index]}</td>
                    <td>${CR_TransactionNumberList[index]}</td>
                    <td>${CR_TransactionTypeList[index]}</td>
                    <td>${CR_LocationToList[index]}</td>
                    <td>${FormatNullText(FormatNumber(CR_NetWeightList[index]), "KG")}</td>
                    <td>${FormatNullText(FormatNumber(CR_PricePerKGList[index]),"₱")}</td>
                    <td>${FormatNullText(FormatNumber(CR_TotalPriceList[index]),"₱")}</td>
                    <td>${FormatNullText(CR_ChequeNumberList[index])}</td>
                    <td>${FormatNullText(CR_BankList[index])}</td>
                    <td>${FormatNullText(CR_PaymentRecievedByList[index])}</td>
                    <td>${FormatNullText(CR_ORDateList[index])}</td>
                    <td>${stat}</td>
                </tr>`;

            })
        }
        
        
    }
    
    

    

</script>
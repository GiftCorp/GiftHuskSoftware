<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Report.css">
    <title>Payment Report</title>
</head>
<body>

    
    <div id="ReportsHeader">
        <h1 id="GiftHeader">GREEN INNOVATIONS FOR TOMORROW CORPORATION</h1>
        <h2 id="GiftAddress">BACAL 2, TALAVERA, NUEVA ECIJA</h2>
        <hr>

        <h2 id="TitleText">Payment Report</h2>
        <h2 id="ClientNameText">ABAR RICE MILL</h2>
        
        
        
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
                <tr>
                    <th>Cheque Number:</th>
                    <td id="ChequeNumberText"></td>
                </tr>
                <tr>
                    <th>Bank</th>
                    <td id="BankText"></td>
                </tr>
            </table>
        </div>
        
        <table id="PaymentReportsTable" >
            <tr id="PaymentReportsTableHeader">
                
                <th>Transaction Number</th>
                <th>Weigh (IN)</th>
                <th>Weigh (OUT)</th>
                <th>Net Weight</th>
                <th>Out Date</th>
                <th>Transaction Type</th>
                <th>Price Per Kg</th>
                <th>Total Price</th>

            </tr>

            
            
        </table>

    </div>
    
    <div id="ReportsFooter">
        <h1 class="ReportsFootertext" id="RecievePaymentText">Recieved Payment:</h1>
        <h1 class="ReportsFootertext" id="RecievePaymentDateText">Payment Date:</h1>
        <h1 class="ReportsFootertext">Paid By:</h1>   
        <h1 class="ReportsFootertext">Date:</h1>
        
    </div>

    <form action="PaymentReports.php" method="post" id="TransListForm">
        <input type="hidden" name="TransList" id="TransList">
    </form>
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
    

    
</script> 
<script>
    var TransListForm = document.getElementById("TransListForm");
    var TransList = document.getElementById("TransList")
    var Transaction = window.sessionStorage.getItem('PCR_TransactionList');
    var PaymentReportsTable = document.getElementById("PaymentReportsTable");

    var DateFromText = document.getElementById("DateFromText");
    var DateToText = document.getElementById("DateToText");
    var ClientNameText = document.getElementById("ClientNameText");
    var RecievePaymentText = document.getElementById("RecievePaymentText");
    var RecievePaymentDateText = document.getElementById("RecievePaymentDateText");
    var ChequeNumberText = document.getElementById("ChequeNumberText");
    var BankText = document.getElementById("BankText");


    TransList.value = Transaction;

    if(window.sessionStorage.getItem('PCR_Create') == "True")
    {
        window.sessionStorage.setItem('PCR_Create',"False"); 
        TransListForm.submit();
    }
    
    
</script>

<?php

    $TransactionNumberList = array();
    $WeighInList = array();
    $WeighOutList = array();
    $NetWeightList = array();
    $OutDateList = array();
    $TransactionTypeList = array();
    $PricePerKgList = array();
    $TotalPriceList = array();
    $ChequeNumberList = array();
    $BankList = array();

    $WO_DateSort = array();
    $PaymentCreate = "";
    $PaymentRecieved = "";
    $PaymentDate = "";
    $ClientName = "";

    if(isset($_POST["TransList"]))
    {

        include("Scripts/DBHandler.php");
        $TransList = explode(",",$_POST["TransList"]);
        $sql = "SELECT FORMAT(Weigh_Out_Date, 'MM/dd/yyyy') as WODate_Formatted,
         FORMAT(Weigh_Out_Date, 'yyyy-MM-dd') as WODate_Sort,
         FORMAT(ORDate, 'MM/dd/yyyy') as ORDateFormatted, * FROM dbo.Transaction_Information WHERE ";

        $index = 1;
        foreach($TransList as $v)
        {   
            $s = " TransactionNumber = ";
            if(count($TransList) == $index)
            {
                $sql = $sql.$s."'$v'";
            }
            else
            {
                $sql = $sql.$s."'$v'"." OR ";
            }
            
            $index++;

        }

        
        $query = sqlsrv_query($Con, $sql);

        while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_BOTH))
        {
            array_push($TransactionNumberList,$row["TransactionNumber"]);
            array_push($WeighInList,$row["WeighIn"]);
            array_push($WeighOutList,$row["WeighOut"]);
            array_push($NetWeightList,$row["NetWeight"]);
            array_push($OutDateList,$row["WODate_Formatted"]);
            array_push($TransactionTypeList,$row["TransactionType"]);
            array_push($PricePerKgList,$row["Price_Per_Kg"]);
            array_push($TotalPriceList,$row["Total_Price"]);
            array_push($ChequeNumberList,$row["ChequeNumber"]);
            array_push($BankList,$row["BankIssued"]);
            array_push($WO_DateSort,$row["WODate_Sort"]);

            $PaymentRecieved = $row["PaymentRecievedBy"];
            $PaymentDate = $row["ORDateFormatted"];
            $ClientName = $row["ClientName"];
        }

        
        $PaymentCreate = "True";
        
    }

?>

<script>

    var TransactionNumberList = <?php echo json_encode($TransactionNumberList)?>;
    var WeighInList = <?php echo json_encode($WeighInList);?>;
    var WeighOutList = <?php echo json_encode($WeighOutList);?>;
    var NetWeightList = <?php echo json_encode($NetWeightList);?>;
    var OutDateList = <?php echo json_encode($OutDateList);?>;
    var TransactionTypeList = <?php echo json_encode($TransactionTypeList);?>;
    var PricePerKgList = <?php echo json_encode($PricePerKgList);?>;
    var TotalPriceList = <?php echo json_encode($TotalPriceList);?>;
    var ChequeNumberList = <?php echo json_encode($ChequeNumberList);?>;
    var BankList = <?php echo json_encode($BankList);?>;
    var WO_DateSort = <?php echo json_encode($WO_DateSort);?>;

    var PaymentCreate = <?php echo json_encode($PaymentCreate);?>;
    var PaymentRecieved = <?php echo json_encode($PaymentRecieved);?>;
    var PaymentCreate = <?php echo json_encode($PaymentCreate);?>;
    var PaymentDate = <?php echo json_encode($PaymentDate);?>;
    var ClientName = <?php echo json_encode($ClientName);?>;

    ChequeNumberText.innerHTML = ChequeNumberList[0];
    BankText.innerHTML = BankList[0];

    var WO_DateSorted = [];

    WO_DateSort.forEach((item,index)=>{
        WO_DateSorted.push(Date.parse(item));
    })

    var Datemin = Math.min.apply(Math,WO_DateSorted);
    var Datemax = Math.max.apply(Math,WO_DateSorted);

    if(PaymentCreate == "True")
    {

        var TotalKG = 0;
        var TotalPrice = 0;
        var TotalTrucks = 0;
        
        TransactionNumberList.forEach((item,index)=>{
            PaymentReportsTable.innerHTML+=`
                <tr>
                    <td>${item}</td>
                    <td>${FormatNumber(WeighInList[index])} KG</td>
                    <td>${FormatNumber(WeighOutList[index])} KG</td>
                    <td>${FormatNumber(NetWeightList[index])}</td>
                    <td>${OutDateList[index]}</td>
                    <td>${TransactionTypeList[index]}</td>
                    <td>₱${FormatNumber(PricePerKgList[index])}</td>
                    <td>₱${FormatNumber(TotalPriceList[index])}</td>
                </tr>
            `;
            
            TotalKG += parseFloat(NetWeightList[index]);
            TotalPrice += parseFloat(TotalPriceList[index])
            TotalTrucks +=1;
        })
    
        TotalDeliveriesText.innerHTML = FormatNumber(TotalKG) + " KG";
        TotalPriceText.innerHTML = "₱" + FormatNumber(TotalPrice);
        TotalTrucksText.innerHTML = TotalTrucks;

        DateFromText.innerHTML = `${new Date(Datemin).getMonth()+1}/${new Date(Datemin).getDate()}/${new Date(Datemin).getFullYear()}`;
        DateToText.innerHTML = `${new Date(Datemax).getMonth()+1}/${new Date(Datemax).getDate()}/${new Date(Datemax).getFullYear()}`;
        ClientNameText.innerHTML = `${ClientName}`;
        RecievePaymentText.innerHTML = `Recieved Payment: ${PaymentRecieved}`;
        RecievePaymentDateText.innerHTML = `Payment Date: ${PaymentDate}`;
    }

</script>

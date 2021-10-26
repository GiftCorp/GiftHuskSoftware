<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/WeighIn.css"/>
    <link rel="stylesheet" href="Style/WeighOut.css"/>
    <link rel="stylesheet" href="Style/Payment.css"/>

    <link rel="stylesheet" href="Style/CreateReports.css"/>
    <link rel="stylesheet" href="Style/RetrieveReports.css"/>

    <link rel="stylesheet" href="Style/MainStyle.css?v=1"/>
    <link rel="stylesheet" href="Style/AddUser.css?v=1"/>
    <link rel="stylesheet" href="Style/ListUser.css?v=1"/>
    <link rel="stylesheet" href="Style/AddClient.css?v=1"/>
    <link rel="stylesheet" href="Style/PriceSchedule.css"/>
    <link rel="stylesheet" href="Style/Location.css"/>

    <title>Document</title>
</head>
<body id ="body">

    <div class="SideBar">
        <div id="upSideBar">
            <div></div>
            <div></div>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" 
            fill="#ffff" id="LogOutButton"><g><path d="M0,0h24v24H0V0z" fill="none"/></g>
            <g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z 
            M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg>
            <h1 class="CurrentUserText"></h1>
            <div></div>
        </div>
       
        <div id="sideButtonContainer">
            <div class="SideBarSelections">
                
                <button class="ButtonSelected" id="TransactionButton">Input Transaction 
                    <svg 
                        class="ContentInvisible"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20" width="20px" 
                        fill="white" text-align="center" >
                            <path d="M24 24H0V0h24v24z" 
                            fill="none" opacity="1"/> <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20"
                        width="20px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/>
                    </svg>
                </button>
                
               
                <div>
                    <ul class="SidebarOptionsContainer  ContentInvisible" id="TransactionOptionsContainer">
                        <li>
                            <div class="SubOptionButtons" id="WeighInSideButton">
                                Weigh In
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="WeighOutSideButton">
                                Weigh Out
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="PaymentSideButton">
                                Payment
                            </div>
                        </li>
                    </ul>
                        
                    
                </div> 

            </div>
            
            <div class="SideBarSelections">
                <button class="SideBarButtons"  id="ReportsButton">Reports 
                    <svg 
                        class="ContentInvisible"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20" width="20px" 
                        fill="white" text-align="center" >
                        <path d="M24 24H0V0h24v24z" fill="none" opacity="1"/> 
                        <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20"
                        width="20px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/>
                    </svg>
                </button>

                <div>
                    <ul class="SidebarOptionsContainer ContentInvisible" id="ReportsOptionsContainer" >
                      
                        <li>
                            <div class="SubOptionButtons" id="CreateReportButton">
                                Create Report
                            </div>

                            <div class="SubOptionButtons" id="RetrieveReportButton">
                                Re-print Payment Report
                            </div>
                        </li>
                    </ul>
                        
                    
                </div> 

                
            </div>

            <div class="SideBarSelections" id="MaintenanceButtonContainer" >
                <button class="SideBarButtons " id="MaintenanceButton">Maintenance
                    <svg 
                        class="ContentInvisible"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20" width="20px" 
                        fill="white" text-align="center" >
                            <path d="M24 24H0V0h24v24z" 
                            fill="none" opacity="1"/> <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20"
                        width="20px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/>
                    </svg>
                </button>

                <div>
                    <ul class="SidebarOptionsContainer  ContentInvisible" id="MaintenanceOptionsContainer" >
                        <li>
                            <div class="SubOptionButtons" id="AddUsersButton">
                                Add User
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="ListUserButton">
                                List User
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="AddClientButton">
                                Add Client
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="ClientListButton">
                                List Clients
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="PriceSchedButton">
                                Price Schedule
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="LocationSideButton">
                                Location List
                            </div>
                        </li>
                    </ul>
                        
                    
                </div> 
            </div>
            
       
            
        </div>
       
    </div>
    

    <!--Input Transaction-->

    <div id="Transaction_Container" class="ContentInvisible" >
        <div id="TransactionContent_Container">
            <div class="topContent"></div>

            <div id="WeighInContainer" class="ContentInvisible">
                
                <form id="WeighInContent_Container" method="post" action="WeighIn.php">
                    <div id="WeighInContentLeft">
                        <h1 class="InputTypeText">Client Name</h1>
                        <select id="WI_ClientNameCbox" name="WI_ClientNameText" class="CboxStyle italized">
                            <option value="" disabled selected class="italized">Select a client</option>
                        </select>
                        <h1 class="InputTypeText" id="WI_LocationFromLabel">Location From</h1>
                        <select id="WI_LocationFromCBox" name="WI_LocationFromText" class="CboxStyle"></select>
                        <h1 class="InputTypeText">Driver Name</h1>
                        <input type="text" name="WI_DriverNameText" id="WI_DriverNameText" class="InputText2">
                    </div>
                    <hr>

                    <div id="WeighInContentRight">
                        <h1 class="InputTypeText">Transaction Type</h1>
                        <select id="WI_TransacTypeCbox" name="WI_TransacTypeName" class="CboxStyle">
                            <option value="Deliver">Deliver</option>
                            <option value="Hakot">Hakot</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Rider Transfer">Rider Transfer</option>
                            <option value="Sale">Sale</option>
                        </select>
                        <h1 class="InputTypeText" id="WI_LocationToLabel">Location To</h1>
                        <select id="WI_LocationToCBox" name="WI_LocationToText" class="CboxStyle"></select>
                        <h1 class="InputTypeText">Plate Number</h1>
                        <input type="text" name="WI_PlateNumberText" id="WI_PlateNumberText"  class="InputText2">
                    </div>

                    <div id="WeighInContentBottom" >
                        <div>
                            <input type="hidden" name="WeighInUIDtext" id="WeighInUIDtext">
                        </div>
                        <h1 class="InputTypeText TextCenter" id="WeightStyle">Weight (IN)</h1>
                        <span id="WeighInWeightTextContainer">

                            <input type="number" name="WI_WeightText" id="WI_WeightText">
                            KG
                        </span>


                        <div id="WeighInButtonContainer" class="ContentCenter"><button id="WeighInButton" type="button">Add Transaction</button></div>
                    </div>
                    

                </form>

                <div id="WI_TableContentContainer">
                    <div id="WI_HeaderListContainer">
                        <table id="WI_HeaderTable">
                                <tr class="ListHeader">
                                    <th>Client Name</th>
                                    <th>Transaction Number</th>
                                    <th>Transaction Type</th>
                                    <th>Weigh In Date</th>
                                    <th>Weight (IN)</th>
                                </tr>

                        </table>
                    </div>

                    <div id="WI_TableContainer">
                        <table id="WI_Table">
                            <tr class="ListHeader2">
                                <th >Client Name</th>
                                <th>Transaction Number</th>
                                <th>Transaction Type</th>
                                <th>Weigh In Date</th>
                                <th>Weight (IN)</th>
                            </tr>
                            
                        </table>
                    </div>
                    

                </div>
            </div>  

            

            <div id="WeighOutContainer" class="ContentInvisible">

                <div id="WO_InputContainer" class="ContentInvisible">
                    <div id="WeighOutContent_Container">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        height="24px" viewBox="0 0 24 24"
                         width="24px" fill="#000000"
                         id="WO_BackArrow">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                        </svg>
                        <div></div>
                        <div></div>
                        <div id="WeighOutContentLeft">
                            <h1 class="InputTypeText">Client Name:</h1>
                            <h1 class="OutputText" id="WO_ClientNameText"></h1>
                            <h1 class="InputTypeText">Location From:</h1>
                            <h1 class="OutputText" id="WO_LocationFromText" ></h1>
                            <h1 class="InputTypeText">Driver:</h1>
                            <h1 class="OutputText" id="WO_DriverNameText"></h1>
                            <h1 class="InputTypeText">Weigh In Date:</h1>
                            <h1 class="OutputText" id="WO_WeighInDateText"></h1>
                            <h1 class="InputTypeText">Weight (IN)</h1>
                            <h1 class="OutputText" id="WO_WeightInText"></h1>
                        </div>
                        <hr>
                        <div id="WeighOutContentRight">
                            <h1 class="InputTypeText">Transaction Num:</h1>
                            <h1 class="OutputText" id="WO_TransacNumberText"></h1>
                            <h1 class="InputTypeText">Location To:</h1>
                            <div class="WO_EditContainer">
                                <select id="WO_LocationToCBox" class="CboxStyle"></select>
                            </div>
                            <h1 class="InputTypeText">Plate Number:</h1>
                            <h1 class="OutputText" id="WO_PlateNumberText"></h1>
                            <h1 class="InputTypeText">Transaction Type:</h1>
                            <h1 class="OutputText" id="WO_TransacTypeText"></h1>
                            <h1 class="InputTypeText">Price Per KG:</h1>

                            <div class="WO_EditContainer">
                                
                                <input type="number" id="WO_PricePerKGInputText" class="TextCenter InputText">
                                
                            </div>

                            
                        </div>
    
                        <form id="WeighOutForm" method="post" action="WeighOut.php">
                            <div>
                                <input type="hidden" name="WO_TransactionNumberInput" id="WO_TransactionNumberInput">
                                <input type="hidden" name="WeighOutUIDtext" id="WeighOutUIDtext">
                                <input type="hidden" name="WO_PricePerKGInputText" id="WO_PricePerKGInputTextF" value="none">
                                <input type="hidden" name="WO_LocationToCBox" id="WO_LocationToTextF" value="none">
                                <input type="hidden" name="WO_Remarks" id="WO_Remarks" value="none">
                                <input type="hidden" name="WO_PriceUpdateUID" id="WO_PriceUpdateUID" value="none">
                                <input type="hidden" name="WO_PopUpCancel" id="WO_PopUpCancel">
                                
                            </div>
                            <h1 class="InputTypeText TextCenter" id="WeightStyle">Weight (OUT)</h1>
                            <span id="WeighOutWeightTextContainer">
    
                                <input type="number" name="WO_WeightText" id="WO_WeightText">
                                KG
                                
                            </span>
                            
                            <div id="WeighOutButtonContainer" class="ContentCenter">
                                <button id="WeighOutCancelButton" class="WeighOutButtonStyle ButtonStyle" type="button">Cancel</button>
                                <button id="WeighOutButton" class="WeighOutButtonStyle ButtonStyle" type="button">Update</button>
                            </div>
                        </form>

                    </div>
                    <div id="WO_RemarksInputContainer">
                        <h1 id="WO_RemarksHeader">Remarks</h1>
                        <textarea form="WeighOutForm" type="text" name="WO_RemarksText" id="WO_RemarksText"></textarea>
                    </div>
                </div>

                

                <div id="WO_ListContentContainer">
                    <div id="WO_ListContainer" >

                        <div id="WO_SearchContainer">
                            <h1 class="InputTypeText2">Search</h1>
                            <h1 class="InputTypeText2">Filter</h1>
                        
                            <div></div>
                            <div id="Wo_SearchInputContainer">
                                <input type="text" class="InputText2" id="WO_Search">
                                <button type="button" class="ButtonStyle" id="WO_SearchButton">Search</button>
                            </div>
                            
                            
                            <select class="CboxStyle" id="WO_Filter" >
                                <option value="Client Name">Client Name</option>
                                <option value="Transaction Number">Transaction Number</option>
                                <option value="Transaction Type">Transaction Type</option>
                                <option value="Weigh In Date">Weigh In Date</option>
                                <option value="Weight(IN)">Weight(IN)</option>
                            </select>

                        </div>

                        <div id="WO_List">

                            <div id="WO_HeaderListContainer">
                                <table id="WO_HeaderTable">
                                    <tr class="ListHeader">
                                        <th>Client Name</th>
                                        <th>Transaction Number</th>
                                        <th>Transaction Type</th>
                                        <th>Weigh In Date</th>
                                        <th>Weight (IN)</th>
                                    </tr>

                                </table>
                            </div>

                            <div id="WO_TableContainer">
                                    <table id="WO_Table">
                                        <tr class="ListHeader2">
                                            <th >Client Name</th>
                                            <th>Transaction Number</th>
                                            <th>Transaction Type</th>
                                            <th>Weigh In Date</th>
                                            <th>Weight (IN)</th>
                                        </tr>
                                        
                                    </table>
                            </div>

                        </div>

                        
                    </div>
              
                </div>
            </div>

            <div id="PaymentContainer" class="ContentInvisible">
                <div id="P_MainContentContainer" >
                    <div id="P_SearchContainer">
                        <h1 class="InputTypeText2">Search</h1>
                        <div></div>
                        <div></div>
                        <div></div>
                        <input type="text" class="InputText" id="P_SearchText">
                        <button type="button" class="ButtonStyle" id="P_ButtonSearch">Search</button>
                    </div>
                    <div id="P_ContentContainer">
                        <div id="P_ContentContainerLeft">
                            <div id="P_ContentLeft">
                                
                                <div class="DualButtonContainer" id="P_CurrentClientContainer">
                                    <span id="P_CurrentClientHeader">Client Selected:</span>
                                    <span id="P_CurrentClient">None</span>
                                </div>
                                
                                <div id="P_SelectDateRangeContainer">
                                    <h1 class="InputTypeText">Select Date From</h1>
                                    <input type="date" id="P_SelectDateFrom">
                                    <h1 class="InputTypeText">Select Date To</h1>
                                    <input type="date" id="P_SelectDateTo">
                                    <button type="button" id="P_SelectDateButton" class="P_Button">Select</button>
                                    
                                    <button class="P_Button" id="P_ClearSelectionButton">Clear Selection</button>
                                    <button class="P_Button" id="P_SelectAllButton">Select All</button>
                                    
                                </div>

                                <div></div>

                                <button class="P_Button" id="PayButton">Pay</button>
                               
                                
                            </div>
                        </div>

                        <div id="P_ContentContainerRight" > 
                            <div id="P_ContentRightA">
        
                                <div id="P_ContainerRightTableA">
                                    <div id="P_TableHeaderContainerA">
                                        <table id="P_TableHeaderA">
                                            <tr class="ListHeader">
                                                <th>Client Name</th>
                                                <th>Total Unpaid Transactions</th>
                                                <th>Total Price</th>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                
                                    <div id="P_TableContainerA">
                                        <table id="P_TableA" >
                                            <tr class="ListHeader2">
                                                <th>Client Name</th>
                                                <th>Total Unpaid Transactions</th>
                                                <th>Total Price</th>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                   
                                </div>
                            </div>


                            <div id="P_ContentRightB" class="ContentInvisible">
                                <div id="P_ContainerRightTableB">
                                    <div id="P_TableHeaderContainerB">
                                        <table id="P_TableHeaderB">
                                            <tr class="ListHeader">
                                                <th></th>
                                                <th>Transaction Number</th>
                                                <th>Weigh Out Date</th>
                                                <th>Net Weight</th>
                                                <th>Total Price</th>
                                            </tr>

                                            
                                            
                                        </table>
                                    </div>
                                
                                    <div id="P_TableContainerB">
                                        <table id="P_TableB" >
                                            <tr class="ListHeader2">
                                                <th></th>
                                                <th>Transaction Number</th>
                                                <th>Weigh Out Date</th>
                                                <th>Net Weight</th>
                                                <th>Total Price</th>
                                            </tr>

                                        </table>
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#000000"
                                        id="P_BackArrow" >
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                                    </svg>
                                    
                                </div>
                                

                            </div>
                        </div>
                    </div>
                

                    
                </div>

                <div id="P_SpecInformationContainer" class="ContentInvisible">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="24px" viewBox="0 0 24 24"
                        width="24px" fill="#000000"
                        id="PSPEC_BackArrow">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                    </svg>
                        
                    
                    <div id="P_SpecInfoContent">
                        <div id="P_SpecInfoContentLeft">
                            <h1 class="InputTypeText">Client Name:</h1>
                            <h1 class="OutputText" id="PSPEC_ClientNameText"></h1>
                            <h1 class="InputTypeText">Location From:</h1>
                            <h1 class="OutputText" id="PSPEC_LocationFromText"></h1>
                            <h1 class="InputTypeText">Driver:</h1>
                            <h1 class="OutputText" id="PSPEC_DriverText"></h1>
                            <h1 class="InputTypeText">Weigh In Date:</h1>
                            <h1 class="OutputText" id="PSPEC_WeighInDateText"></h1>
                            <h1 class="InputTypeText">Net Weight:</h1>
                            <h1 class="OutputText" id="PSPEC_NetWeightText"></h1>
                            <h1 class="InputTypeText">Transaction Type:</h1>
                            <h1 class="OutputText" id="PSPEC_TransactionTypeText"></h1>
                        </div>

                        <hr>

                        <div id="P_SpecInfoContentRight">
                            <h1 class="InputTypeText">Transaction Number:</h1>
                            <h1 class="OutputText" id="PSPEC_TransactionNumberText"></h1>
                            <h1 class="InputTypeText">Location To:</h1>
                            <h1 class="OutputText" id="PSPEC_LocationToText"></h1>
                            <h1 class="InputTypeText">Plate Number:</h1>
                            <h1 class="OutputText" id="PSPEC_PlateNumberText"></h1>
                            <h1 class="InputTypeText">Weigh Out Date:</h1>
                            <h1 class="OutputText" id="PSPEC_WeighOutDateText"></h1>
                            <h1 class="InputTypeText">Price Per KG:</h1>
                            <h1 class="OutputText" id="PSPEC_PricePerKgText"></h1>
                            <h1 class="InputTypeText">Total Price:</h1>
                            <h1 class="OutputText" id="PSPEC_TotalPriceText"></h1>
                        </div>
                    </div>

                    <div id="P_RemarksContainer">
                        <h1 class="Headers TextCenter" >Remarks</h1>
                        <p id="PSPEC_Remarks"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="Reports_Container" class="ContentInvisible">
        <div id="ReportsContent_Container">
            <div class="topContent"></div>

            <div id="CreateReportsContainer">
                <div id="CreateReportsContentContainer">
                    <form id="CR_FilterContainer" class="Container" method="post" action="index.php">
                        <h1 class="Headers" id="CR_FilterHeader">Filters</h1>
                        <h1 class="InputTypeText2">Client Name</h1>
                        <h1 class="InputTypeText2">Status</h1>
                        <h1 class="InputTypeText2">Date From</h1>
                        <h1 class="InputTypeText2">Date To</h1>
                        <h1 class="InputTypeText2">Transaction Type</h1>
                        
                        <!--  -->

                        <select class="CboxStyle" id="CR_ClientCBox" name="CR_ClientCbox">
                            <option value="Any">Any</option>
                        </select>
                        <select class="CboxStyle" id="CR_StatusCBox" name="CR_StatusCbox">
                           
                            <option value="All">All</option>
                            <option value="Unpaid">Unpaid</option>
                            <option value="Paid">Paid</option>
                        </select>

                        <input class="DateStyle" type="date" id="CR_DateFromInput" name="CR_DateFromInput">
                        <input class="DateStyle" type="date" id="CR_DateToInput" name="CR_DateToInput">

                        <select class="CboxStyle" id="CR_TransacTypeCBox" name="CR_TransacTypeCBox">
                            <option value="Any">Any</option>
                            <option value="Deliver">Deliver</option>
                            <option value="Hakot">Hakot</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Rider Transfer">Rider Transfer</option>
                            <option value="Sale">Sale</option>
                        </select>
                    </form>


                    <div id="CR_TableContainer" class="Container">

                    
                        <div id="CRA_TableContainer" class="ContentInvisible" >

                            <div id="CRA_ContentContainer" >
                                <div class="CR_HeaderTableContainer">
                                    <table id="CRA_HeaderTable">
                                        <tr class="ListHeader">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Price Per Kg</th>
                                        </tr>

                                      
                                    </table>
                                </div>
                               

                                <div id="_TableContainerData">
                                    <table id="CRA_Table">
                                        <tr class="ListHeader2">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Price Per Kg</th>
                                        </tr>

                                        
                                    </table>
                                </div>
                             
                            </div>
                            
                        </div>

                        <div id="CRUP_TableContainer" class="ContentInvisible">

                            <div id="CRUP_ContentContainer">
                                <div class="CR_HeaderTableContainer">
                                    <table id="CRUP_HeaderTable">
                                        <tr class="ListHeader">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>Plate #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Price Per Kg</th>
                                        </tr>

                                    
                                    </table>
                                </div>
                               

                                <div id="CRUP_TableContainerData">
                                    <table id="CRUP_Table">
                                        <tr class="ListHeader2">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>Plate #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Price Per Kg</th>
                                        </tr>

                                     
                                    </table>
                                </div>
                            </div>
                                                    
                        </div>

                        <div id="CRP_TableContainer" class="ContentInvisible">

                            <div id="CRP_ContentContainer">
                                <div class="CR_HeaderTableContainer">
                                    <table id="CRP_HeaderTable">
                                        <tr class="ListHeader">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>Plate #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Payment Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Total Price</th>

                                        </tr>

                                      
                                    </table>
                                </div>
                               

                                <div id="CRP_TableContainerData">
                                    <table id="CRP_Table">
                                        <tr class="ListHeader2">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>Plate #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Payment Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Total Price</th>
                                        </tr>

                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div id="CR_CreateReportContainer" class="Container">
                        <button class="CR_ButtonStyle" id="CR_ViewReportButton">View Report</button>
                        <button class="CR_ButtonStyle" id="CR_CreateReportButton">Create Printable Report</button>
                        
                    </div>
                </div>
            </div> 

            <div id="RetrieveReportsContainer">

                <div id="RetrieveReportsContent">
                    <div id="RR_SearchContainer">
                        <h1 class="InputTypeText2">Search</h1>
                        <div></div>
                        <input class="InputText2" type="text" id="RR_Search" placeholder="Cheque Number">
                        <button type="button" class="ButtonStyle" id="RR_SearchButton">Search</button>
                    </div>

                    <div id="RR_ListContainer">
                        <div id="RR_TableHeaderContainer">
                            <table id="RR_TableHeader" >
                                <tr class="ListHeader">
                                    <th>Client Name</th>
                                    <th>Transaction Number</th>
                                    <th>Cheque Number</th>
                                    <th>Net Weight</th>
                                    <th>Total Price</th>
                                    <th>OR Date</th>
                                </tr>
                                
                            </table>
                        </div>

                        <div id="RR_TableContainer">
                            <table id="RR_Table">
                                <tr class="ListHeader2" >
                                    <th >Client Name</th>
                                    <th>Transaction Number</th>
                                    <th>Cheque Number</th>
                                    <th>Net Weight</th>
                                    <th>Total Price</th>
                                    <th>OR Date</th>
                                </tr>

                               
                                
                            </table>
                        </div>
                    </div>

                    <div id="RR_BottomContainer">
                        <button type="button" class="ButtonStyle" id="RR_CreateReportButton">Create Printable Report</button>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>

    <!--Maintenance-->
    <div id="maintenance_Container" class="ContentInvisible">
        <div id="Maintenance_Container">
            <div class="topContent"></div>
           
            <div id="AddUserContainer" class="ContentInvisible">
                <form id="addUserForm" method="POST" action="AddUser.php" autocomplete="off"> 
                    <div class="personalInformationInputContainer">
                        <div class="nameInput">
                            <h1 class="InputTypeText">First Name</h1>
                            <input type="text" name="FnameText" class="InputText" id="FnameText">
                            <h1 class="InputTypeText">Middle Name</h1>
                            <input type="text" name="MnameText" class="InputText" id="MnameText">
                            <h1 class="InputTypeText">Last Name</h1>
                            <input type="text" name="LnameText" class="InputText" id="LnameText">
                            <h1 class="InputTypeText">Address</h1>
                            <input type="text" name="AddressText" class="InputText" id="AddressText">
                        </div>
    
                        <hr>
    
                        <div class="personalInformationInput2">
    
                            <h1 class="InputTypeText">Civil Status</h1>
                            <input type="text" name="CivilStatusText" class="InputText" id="CivilStatusText">
                            <h1 class="InputTypeText">Birth Date</h1>
                            <div id="birthDateInput">
                                
                                <select name="BdateMonth" id="BdateMonth" class="CboxStyle">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
    
                                <select name="BdateDay" id="BdateDay" class="CboxStyle">
                                    
                                </select>
    
                                <select name="BdateYear" id="BdateYear" class="CboxStyle">
                                    
                                </select>
                            </div>
                            
                            <h1 class="InputTypeText">Mobile #</h1>
                            <input type="number" name="ContactText" class="InputText" id="ContactText">
    
                            <h1 class="InputTypeText">Gender</h1>
                            <div id="genderRadio" class="doubleColoumnContainer">
                                
                                <div class="doubleColoumnContainer">
                                    <input type="radio" name="Gender" value="Male"  class="RadioMiddle" checked>
                                    <label >Male</label>
                                </div>
                                
                                <div  class="doubleColoumnContainer">
                                    <input type="radio" name="Gender" value="Female" class="RadioMiddle">
                                    <label  >Female</label>
                                </div>
                                
                               
                            </div>
                        </div>
                    
                       
    
                    </div>
    
                    <div class="hr"></div>
                    
                    <div id="accountInformationInputContainer" >
                        <div id="accountCredentialsInput">
                            <h1 class="InputTypeText" >User Name</h1>
                            <input type="text" name="UserNameText" class="InputText" id="UserNameText">
                            <h1 class="InputTypeText">Password</h1>
                            <input type="password" name="PasswordText" class="InputText" id="PasswordText">
                            <h1 class="InputTypeText">Confirm Password</h1>
                            <input type="password" name="RepeatPasswordText" class="InputText" id="RepeatPasswordText">
                            <h1 class="InputTypeText">Authority</h1>
                            <select id="authorityCbox" class="CboxStyle" name="Authority">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <hr>
                        <div id="accountCredentialsInput2">
                            <h1 class="InputTypeText">Email Address</h1>
                            <input type="text" name="EmailText" class="InputText" id="EmailText">
                            
                            <h1 class="InputTypeText">Designation</h1>
                            <input type="text" name="DesignationText" class="InputText" id="DesignationText">
                        </div>
    
                    </div>
                    <input type="hidden" name="AddUserActive" value="Active">
                    <input type="hidden" name="AddedDate" id="AddedDateText">
                    <input type="hidden" name="AddedBy" id="AddedByText">
                    <button id="addAccountSubmit" type="button">Add User</button>
    
                </form>
            </div>

            <div id="ListUserContainer">
                <div id="ListUserContentContainer" >
                    <div id="ListUserContent" >
                        <div id="LU_TableHeaderContainer">
                            <table id="LU_HeaderTable"> 
                                <tr>
                                    <th class="LU_TableHeader">Authority</th>
                                    <th class="LU_TableHeader">User Name</th>
                                    <th class="LU_TableHeader"> Full Name</th>
                                </tr>
                               
                            </table>
                        </div>

                        <div id="LU_TableContainer">
                            <table id="LU_Table"> 
                                <tr class="ListHeader2">
                                    <th>Authority</th>
                                    <th>User Name</th>
                                    <th> Full Name</th>
                                </tr>

                                
                            </table>
                        </div>
                        
                    </div>
                </div>
                


                <div id="UpdateUserContainer" class="ContentInvisible">
                    
                    <form id="UpdateUserForm" method="POST" action="UpdateUser.php" autocomplete="off"> 
                        <div class="personalInformationInputContainer">
                            <div class="nameInput">
                                <h1 class="InputTypeText">First Name</h1>
                                <input type="text" name="FnameText" class="InputText" id="UU_FnameText">
                                <h1 class="InputTypeText">Middle Name</h1>
                                <input type="text" name="MnameText" class="InputText" id="UU_MnameText">
                                <h1 class="InputTypeText">Last Name</h1>
                                <input type="text" name="LnameText" class="InputText" id="UU_LnameText">
                                <h1 class="InputTypeText">Address</h1>
                                <input type="text" name="AddressText" class="InputText" id="UU_AddressText">
                            </div>
        
                            <hr>
        
                            <div class="personalInformationInput2">
        
                                <h1 class="InputTypeText">Civil Status</h1>
                                <input type="text" name="CivilStatusText" class="InputText" id="UU_CivilStatusText">
                                <h1 class="InputTypeText">Birth Date</h1>
                                <div id="birthDateInput">
                                    
                                    <select name="BdateMonth" id="UU_BdateMonth" class="CboxStyle">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
        
                                    <select name="BdateDay" id="UU_BdateDay" class="CboxStyle">
                                        
                                    </select>
        
                                    <select name="BdateYear" id="UU_BdateYear" class="CboxStyle">
                                        
                                    </select>
                                </div>
                                
                                <h1 class="InputTypeText">Mobile #</h1>
                                <input type="number" name="ContactText" class="InputText" id="UU_ContactText">
        
                                <h1 class="InputTypeText">Gender</h1>
                                <div id="genderRadio" class="doubleColoumnContainer">
                                    
                                    <div class="doubleColoumnContainer">
                                        <input type="radio" name="Gender" value="Male" id="UU_RadioMale"  class="RadioMiddle" checked>
                                        <label >Male</label>
                                    </div>
                                    
                                    <div  class="doubleColoumnContainer">
                                        <input type="radio" name="Gender" value="Female" id="UU_RadioFemale" class="RadioMiddle">
                                        <label  >Female</label>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        
                        
        
                        </div>
        
                        <div class="hr"></div>
                        
                        <div id="accountInformationInputContainer" >
                            <div id="accountCredentialsInput">
                                <h1 class="InputTypeText" >User Name</h1>
                                <input type="text" name="UserNameText" class="InputText  DisabledTextBox_Text" id="UU_UserNameText" disabled>
                                
                                <h1 class="InputTypeText ">Authority</h1>
                                <input type="text" id="UU_authority" class="InputText  DisabledTextBox_Text" disabled>
                            </div>
                            <hr>
                            <div id="accountCredentialsInput2">
                                <h1 class="InputTypeText">Email Address</h1>
                                <input type="text" name="EmailText" class="InputText" id="UU_EmailText">
                                
                                <h1 class="InputTypeText">Designation</h1>
                                <input type="text" name="DesignationText" class="InputText" id="UU_DesignationText">
                            </div>
        
                        </div>

                        <div class="ContentInvisible" >
                            <div class="InputContainer">
                                <h1 class="InputTypeText">Old Password</h1>
                                <input type="password" class="InputText" id="UU_OldPassword">
                            </div>
                            <div class="InputContainer">
                                <h1 class="InputTypeText">New Password</h1>
                                <input type="password" class="InputText" id="UU_NewPassword">
                            </div>
                            <div class="InputContainer">
                                <h1 class="InputTypeText">Repeat Password</h1>
                                <input type="password" class="InputText" id="UU_RepeatPassword">
                            </div>
                        </div>
                        
                        
                        <input type="hidden" name="UID" id="UU_UID">
                        <div id="UpdateUserBottomContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            height="24px" viewBox="0 0 24 24"
                                width="24px" fill="#000000"
                                id="UU_BackArrow">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                            </svg>
                            <button id="UpdateUserButton" type="button" class="ButtonStyle">Update User</button>
                            <button id="DeleteUserButton" type="button" class="ButtonStyle">Delete User</button>
                            <button id="ChangePassword" type="button" class="ButtonStyle ContentInvisible">Change Password</button>
                        </div>
                        
        
                    </form>

                    <form id="DeleteUserForm" method="post" action="DeleteUser.php">
                        <input type="hidden" name="UID" id="DU_UID">
                    </form>
                </div>
            </div>
    
            <div id="AddClientContainer" class="ContentInvisible">
                <form id="AddClientForm" method="post" action="ClientAdd.php" autocomplete="off">
                    <h1 class="InputTypeText">Client Name</h1>
                    <input type="text" class="InputText" id="ClientNameText" name="ClientName" >
                    <h1 class="InputTypeText" >Company Name</h1>
                    <input type="text" class="InputText" id="CompanyNameText" name="CompanyName" >
                    <h1 class="InputTypeText">Address</h1>
                    <input type="text" class="InputText" id="ClientAddressText" name="ClientAddress" >
                    <h1 class="InputTypeText">Contact Number</h1>
                    <input type="number" class="InputText" id="ClientContactNumberText" name="ClientContactNumber">
                    <input type="hidden" name="AddClientActive" value="Active">
                    <button type=button id="AddClientSubmit">Add Client</button>
                    
                </form>
            </div>
    
            <div id="ListClientContainer"  class="ContentInvisible">
                <div id="ListClientContentContainer" > 
                    <div id="ClientList">
                    
                        <div id="ClientListContainer2">
                            <table id="ClientListTable2" scroll="0">
                                <tr>
                                    <th class="ClientTableHeader">Client Name</td>
                                    <th class="ClientTableHeader">Company</td>
                                    <th class="ClientTableHeader">Mobile Number</td>
                                    <th class="ClientTableHeader">Address</td>
                                </tr>
                            </table>
                        </div>

                        <div id="ClientListContainer">
                            <table id="ClientListTable">
                                <tr>
                                    <th class="ClientTableHeader">Client Name</td>
                                    <th class="ClientTableHeader">Company</td>
                                    <th class="ClientTableHeader">Mobile Number</td>
                                    <th class="ClientTableHeader">Address</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div id="UpdateClientContainer">
                    <form id="UpdateClientForm" method="POST" action="UpdateClient.php">
                        <input type="hidden" id = "UpdateClientClientID" name="ClientID">
                        <h1 class="InputTypeText">Client Name</h1>
                        <input type="text" class="InputText DisabledTextBox_Text" id="UpdateClientNameText" name="ClientName" disabled >
                        <h1 class="InputTypeText" >Company Name</h1>
                        <input type="text" class="InputText" id="UpdateCompanyNameText" name="CompanyName" value ="" >
                        <h1 class="InputTypeText">Address</h1>
                        <input type="text" class="InputText" id="UpdateAddressText" name="ClientAddress" value ="">
                        <h1 class="InputTypeText">Contact Number</h1>
                        <input type="number" class="InputText" id="UpdateContactNumberText" name="ClientContactNumber" value ="">
                        <div id="UpdateClientBottomContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            height="24px" viewBox="0 0 24 24"
                                width="24px" fill="#000000"
                                id="UC_BackArrow">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                            </svg>
                            <button type=button id="UpdateClientSubmit" class="ButtonStyle">Update Client</button>
                            <button type=button id="DeleteClientButton" class="ButtonStyle">Delete Client</button>
                        </div>
                        
                    </form>

                    <form id="DeletClientForm" method="post" action="DeleteClient.php">

                        <input type="hidden" name="UC_ClientID" id="UC_ClientId">
                    </form>
                </div>
                
            </div>
    
            <div id="PriceScheduleContainer" class="ContentInvisible">
                <div id="PS_SearchContainer">
                    <h1 class="InputTypeText2">Search</h1>
                    <div></div>
                    <input list="PS_Search" type="text" class="InputText2" id="PS_SearchInput">
                    <datalist id="PS_Search" class="CboxStyle">

                    </datalist>

                    <div id="PS_SearchBottomContainer">
                        <button type="button" class="ButtonStyle" id="PS_SearchButton">Search</button>
                        <button type="button" class="ButtonStyle" id="PS_ShowAll">Show All</button>
                    </div>
                    
                    
                </div>
                <form id="PriceScheduleLayout" method="post" action="PriceSchedule.php" autocomplete="off">
                    <div id="PriceScheduleLeftContainer">
                        <div id="PriceScheduleLeftInContainer">
                            <div></div>
                            <div id="PriceScheduleForm">
                                <div id="PriceScheduleTextInputContainer">
                                    <h1 class="InputTypeText">Price/KG</h1>
                                    <input type="text" name="PricePerKgText" class="InputText PStextadjustments" id="PricePerKgText">
                                    <h1 class="InputTypeText">Start Date</h1>
                                    <input type="date" name="PriceStartText" class="InputText PStextadjustments" id="PriceStartText">
                                </div>
                                
                                
                                <input type="hidden" name="PriceScheduleSelected" id="PriceScheduleSelected" >
                            </div>
                            
                            
                            <div id="PriceScheduleSelectionOptionsContainer">
                                
                                <h1 class="PriceSchedButtonStyle" id="PriceScheduleApplyToAllButton">Apply To All</h1>
                                <h1 class="PriceSchedButtonStyle" id="PriceScheduleClearButton">Clear Selection</h1>
                            </div>
                        </div>                    
                        <div></div>
                        <h1 class="PriceSchedButtonStyle" id="PriceSchedButtonStyle">Update Prices</h1>
             
    
                    </div>
    
                    <div id="PriceScheduleList">
                   
                        <div id="PriceSchedContainer2">
                            <table id="PriceSchedTable2" scroll="0">
                                <tr>
                                    <th></th>
                                    <th class="ClientTableHeader">Client Name</th>
                                    <th class="ClientTableHeader">Company</th>
                                    <th class="ClientTableHeader">Price/KG</th>
                                    <th class="ClientTableHeader">Latest Date</th>
                                    
                                </tr>
                            </table>
        
                        </div>
    
                        <div id="PriceSchedContainer">
                            <table id="PriceSchedTable">
                                <tr>
                                    <th><input type="checkbox"  name="" value="Checked"></th>
                                    <th class="ClientTableHeader">Client Name</th>
                                    <th class="ClientTableHeader">Company</th>
                                    <th class="ClientTableHeader">PHP/KG</th>
                                    <th class="ClientTableHeader">Latest Date</th>
                                    
                                </tr>
                            </table>
            
                        </div>

                        
                    </div>
                    
    
                </form>

                <form id="PriceSchedInputSpec" method="post" action="PriceSchedule.php">
                    <input type="hidden" name="PricePerKgText"  id="PricePerKgTextSpec">                      
                    <input type="hidden" name="PriceStartText"id="PriceStartTextSpec">
                    <input type="hidden" name="PriceScheduleSelected" id="PriceScheduleSelectedSpec">
                </form>
                <div id="PriceSchedInputSpecTemp">

                </div>
    
            </div>
            
            <div id="MLocationContainer" class="ContentInvisible">
                <div id="MLocationContentContainer">
                    <form id="MLocationInputContainer" method="post" action="Location.php" autocomplete="off">
                        <input type="text" id="LocationInputText" name="LocationInputText">
                        <button type="button" id="AddLocationButton">Add Location</button>
                    </form>

                    <div id="MLocationListContainer">
                        <h1 id="AddLocationLocationHeader">Locations</h1>
                        <table id="MlocationList">
                            
                            
                        </table>
                    </div>
                    <form id="DeleteLocationForm" method="post" action="DeleteLocation.php">
                        <input type="hidden" name="DeleteLocationText" id="DeleteLocationText">
                    </form>

                </div>
                
            </div>
    
        </div>
    </div>

    <div id="ContentDisable" class="ContentInvisible"></div>

    <div id="PopUp" class="ContentInvisible">
        <svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 0 24 24"
            width="24px" fill="#000000"
            id="PopUpClose">
            <path d="M0 0h24v24H0V0z" fill="none"/>
            <path d="M19 6.41L17.59 5 12 10.59 
            6.41 5 5 6.41 10.59 12 5 17.59
            6.41 19 12 13.41 17.59 19 19
                17.59 13.41 12 19 6.41z"/>
        </svg>
        <div id="WO_PopUp" class="ContentInvisible" > 
            <form id="WO_PopUpContainer" method="post" action="WO_Verification.php" autocomplete="off" >
                
                <input type="hidden" name="WO_PopUpLocationToText" id="WO_PopUpLocationToText">
                <input type="hidden" name="WO_PopUpPricePerKG" id="WO_PopUpPricePerKG">
                <input type="hidden" name="WO_PopUpWeight" id="WO_PopUpWeight">
                <input type="hidden" name="WO_PopUpRemarks" id="WO_PopUpRemarks">
                <input type="hidden" name="WO_PopUpCurUID" id="WO_PopUpCurUID">
                
            
                <p class="PopUpMessage">Secondary Account Needed</p>
                <div id="WO_PopUpInputContainer">
                    <h1 class="PopText" >User Name</h1>
                    <h1 class="PopText" >Password</h1>
                    
                    <input type="text" class ="WO_PopUpInputText" id="WO_PopUpUserName" name="WO_PopUpUserName" >
                    <input type="password" class ="WO_PopUpInputText"  id="WO_PopUpPassword" name="WO_PopUpPassword">
                </div>
                <h1 id="WO_PopUpError" class="TextInvisible">User Credentials Incorrect</h1>
                <button type="button" id="WO_PopUpContinueButton" class="P_Button">Continue</button>
            </form>
        </div>


        <div id="P_PopUp" class="ContentInvisible" >
            <form id="P_PopUpContainer" method="post" action="Payment.php">
                <input type="hidden" name="P_TransactioNumberListText[]" id="P_TransactioNumberListText">
                <input type="hidden" name="P_PaymentUID" id="P_PaymentUID"> 
                <h1 class="InputTypeText">Bank Issued</h1>
                <input type="text" class="InputText2" name="P_BankIssued" id="P_BankIssued"> 
                <h1 class="InputTypeText">Cheque Num</h1>
                <input type="text" class="InputText2" name="P_ChequeNum" id="P_ChequeNum"> 
                <h1 class="InputTypeText">Recieved By</h1>
                <input type="text" class="InputText2" name="P_RecievedBy" id="P_RecievedBy"> 

                <button type="button" class="P_Button" id="P_PopUpPayButton">Payout</button>
            </form>

            
        </div>
        

        <div id="VerificationPopUpContainer" class="ContentInvisible">
            <div id="VerificationPopUpContentContainer">
                
                <div>
                <p id="VerificationPopUpText"></p>
                </div>
                <div class="DualButtonContainer">
                    <button type="button" id="VerificationPopUpButtonNo" class="PopUpButtonStyle">No</button>
                    <button type="button" id="VerificationPopUpButtonYes" class="PopUpButtonStyle">Yes</button>
                </div>
            </div>
        </div> 
        
    </div>
    
    
 
</body>

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
    

    
</script> 

<!-- USER SETTINGS-->

<?php
    include("Scripts/DBHandler.php");

    $U_UserIDList= array();
    $U_FnameList = array();
    $U_MnameList = array();
    $U_LnameList = array();
    $U_AddressList = array();
    $U_UserNameList = array();
    $U_AuthorityList = array();
    $U_CivilStatusList = array();
    $U_BdateList = array();
    $U_MobileNumberList = array();
    $U_GenderList = array();
    $U_EmailList = array();
    $U_DesignationList = array();


    $sql = "SELECT FORMAT(BirthDate, 'MM/dd/yyyy') as BirthDateFormatted, * FROM dbo.UserData";

    $query = sqlsrv_query($Con, $sql);

    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($U_UserIDList,$row["UserID"]);
        array_push($U_FnameList,$row["FirstName"]);
        array_push($U_MnameList,$row["MiddleName"]);
        array_push($U_LnameList,$row["LastName"]);
        array_push($U_AddressList,$row["Address"]);
        array_push($U_UserNameList,$row["UserName"]);
        array_push($U_AuthorityList,$row["AccountAuthority"]);
        array_push($U_CivilStatusList,$row["CivilStatus"]);
        array_push($U_BdateList,$row["BirthDateFormatted"]);
        array_push($U_MobileNumberList,$row["ContactNumber"]);
        array_push($U_GenderList,$row["Gender"]);
        array_push($U_EmailList,$row["EmailAddress"]);
        array_push($U_DesignationList,$row["Designation"]);
    }
?> 

<script>

    var LU_HeaderTable = document.getElementById('LU_HeaderTable');
    var LU_Table = document.getElementById('LU_Table');

    var U_UserIDList = <?php echo json_encode($U_UserIDList);?>;
    var U_FnameList = <?php echo json_encode($U_FnameList);?>;
    var U_MnameList = <?php echo json_encode($U_MnameList);?>;
    var U_LnameList = <?php echo json_encode($U_LnameList);?>;
    var U_AddressList = <?php echo json_encode($U_AddressList);?>;
    var U_UserNameList = <?php echo json_encode($U_UserNameList);?>;
    var U_AuthorityList = <?php echo json_encode($U_AuthorityList);?>;
    var U_CivilStatusList = <?php echo json_encode($U_CivilStatusList);?>;
    var U_BdateList = <?php echo json_encode($U_BdateList);?>;
    var U_MobileNumberList = <?php echo json_encode($U_MobileNumberList);?>;
    var U_GenderList = <?php echo json_encode($U_GenderList);?>;
    var U_EmailList = <?php echo json_encode($U_EmailList);?>;
    var U_DesignationList = <?php echo json_encode($U_DesignationList);?>;

    var LongestUserName = "";
    var LongestAuthority = "";
    var LongestFullName = "";

    var UU_UserList = [];

    U_UserNameList.forEach((item,index)=>{
        var UU_ID = `UU_${U_UserIDList[index]}`;
        UU_UserList.push(UU_ID);
        if(index % 2 == 0)
        {
            LU_Table.innerHTML+=`<tr class="RowStyleS" id="${UU_ID}">
                                    <td class="LU_TableData">${U_AuthorityList[index]}</td>
                                    <td class="LU_TableData">${U_UserNameList[index]}</td>
                                    <td class="LU_TableData">${U_FnameList[index]} ${U_LnameList[index]}</td>
                                </tr>`;
        }
        else

        {
            LU_Table.innerHTML+=`<tr class="RowStyle2S" id="${UU_ID}">
                                    <td class="LU_TableData">${U_AuthorityList[index]}</td>
                                    <td class="LU_TableData">${U_UserNameList[index]}</td>
                                    <td class="LU_TableData">${U_FnameList[index]} ${U_LnameList[index]}</td>
                                </tr>`;
        }

        
        if(U_AuthorityList[index].length > LongestAuthority.length)
        {
            LongestAuthority = U_AuthorityList[index];
        }

        if(U_UserNameList[index].length > LongestUserName.length)
        {
            LongestUserName = U_UserNameList[index];
        }

        if(`${U_FnameList[index]} ${U_LnameList[index]}`.length > LongestFullName.length)
        {
            LongestFullName = `${U_FnameList[index]} ${U_LnameList[index]}`;
        }
        
    })

    UU_UserList.forEach((item,index)=>{
        var u = document.getElementById(item);
        u.addEventListener('click',()=>{
            UpdateUserShow(item.split('_')[1]);
        })
    })

    LU_HeaderTable.innerHTML += `<tr>
                                    <td class="LU_TableData">${LongestAuthority}</td>
                                    <td class="LU_TableData">${LongestUserName}</td>
                                    <td class="LU_TableData">${LongestFullName}</td>
                                </tr>`;

</script>

<!--CLIENT SETTINGS-->

<?php 
    $ActiveAddClient = "False";
    
    $value;
    $ClientIDArray = array();
    $ClientArray = array();
    $CompanyArray = array();
    $NumberArray = array();
    $AddressArray = array();

    
    $sql = "SELECT * FROM dbo.Client_Information";
    
    $query = sqlsrv_query($Con, $sql);
    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($ClientArray,$row["ClientName"]);
        array_push($ClientIDArray,$row["ClientID"]);

        if($row["Company"] == null || $row["Company"] == "")
        {
            array_push($CompanyArray,"Not Set");
        }
        else
        {
            array_push($CompanyArray,$row["Company"]);
        }

        if($row["ContactNumber"] == null || $row["ContactNumber"] == "" )
        {
            array_push($NumberArray,"Not Set");
        }
        else
        {
            array_push($NumberArray,$row["ContactNumber"]);
        }

        if($row["Address"] == null || $row["Address"] == "")
        {
            array_push($AddressArray,"Not Set");
        }
        else
        {
            array_push($AddressArray,$row["Address"]);
        }

        
        
    }

?>

<script>



    var ClientTable = document.getElementById('ClientListTable');
    var ClientTable2 = document.getElementById('ClientListTable2');
    var PS_Search = document.getElementById('PS_Search');
    var CR_ClientCBox = document.getElementById('CR_ClientCBox');

    class ClientInformation{
        constructor(ClientName, Company, ContactNumber, Address)
        {
            this.ClientName = ClientName;
            this.Company = Company;
            this.ContactNumber = ContactNumber;
            this.Address = Address;
        }

    }

    var ClientInfoArray = [];
    var ClientArray = JSON.parse('<?php echo json_encode($ClientArray);?>');
    var ClientIDArray = JSON.parse('<?php echo json_encode($ClientIDArray);?>');
    var CompanyArray = JSON.parse('<?php echo json_encode($CompanyArray);?>');
    var NumberArray = JSON.parse('<?php echo json_encode($NumberArray);?>');
    var AddressArray = JSON.parse('<?php echo json_encode($AddressArray);?>');

    

    var LongestClientName = "";
    var LongestCompany = "";
    var LongestMobile = "";
    var LongestAddress= "";

    var LC_IDList = [];

    function PS_ButtonDisabled()
    {
        PriceScheduleApplyToAllButton.setAttribute('class', 'PriceSchedButtonDisabled');
        PriceScheduleClearButton.setAttribute('class', 'PriceSchedButtonDisabled');

        PriceScheduleApplyToAllButton.disabled = true;
        PriceScheduleClearButton.disabled = true;
    }

    function PS_ButtonEnabled()
    {
        PriceScheduleApplyToAllButton.setAttribute('class', 'PriceSchedButtonStyle');
        PriceScheduleClearButton.setAttribute('class', 'PriceSchedButtonStyle');

        PriceScheduleApplyToAllButton.disabled = false;
        PriceScheduleClearButton.disabled = false;
    }

    
    ClientArray.forEach((item,index) => {
        var Client = new ClientInformation(item,CompanyArray[index], NumberArray[index],AddressArray[index]);
        var op = document.createElement('option');
        var op2 = document.createElement('option');
        op.name =item;
        op2.name =item;
        op.innerHTML =item;
        op2.innerHTML =item;
        PS_Search.appendChild(op);
        CR_ClientCBox.appendChild(op2);
        var ID = `LC${ClientIDArray[index]}`;
        LC_IDList.push(ID);

        var id = ""
        if(index % 2 == 0)
        {
            ClientTable.innerHTML +=  `<tr class="RowStyleS" id="${ID}">
                        <td class="ClientTableData">${Client.ClientName}</td>
                        <td class="ClientTableData">${Client.Company}</td>
                        <td class="ClientTableData">${Client.ContactNumber}</td>
                        <td class="ClientTableData">${Client.Address}</td>
                    </tr>`

        }
        else
        {   ClientTable.innerHTML +=  `<tr class="RowStyle2S" id="${ID}">
                        <td class="ClientTableData">${Client.ClientName}</td>
                        <td class="ClientTableData">${Client.Company}</td>
                        <td class="ClientTableData">${Client.ContactNumber}</td>
                        <td class="ClientTableData">${Client.Address}</td>
                    </tr>`

        }

        
        if(Client.ClientName.length > LongestClientName.length)
        {
            LongestClientName = Client.ClientName;
        }

        if(Client.Company.length > LongestCompany.length)
        {
            LongestCompany = Client.Company;
        }

        if(Client.Number != undefined)
        {
            if(Client.Number.length > LongestMobile.length)
            {
                LongestMobile = Client.Number;
            }
        }

        if(Client.Address    != undefined)
        {
            if(Client.Address.length > LongestAddress.length)
            {
                LongestAddress = Client.Address;
            }
        }

    })

    LC_IDList.forEach((item,index)=>{
        var id = document.getElementById(item);
        id.addEventListener('click',()=>{
            var i = item.split('C')[1];
            UpdateClientShow(i);
        })
    })

    var client = new ClientInformation(LongestClientName,LongestCompany,LongestMobile,LongestAddress);
    ClientTable2.innerHTML +=  `<tr>
                        <td class="ClientTableData">${client.ClientName}</td>
                        <td class="ClientTableData">${client.Company}</td>
                        <td class="ClientTableData">${client.Number}</td>
                        <td class="ClientTableData">${client.Address}</td>
                    </tr>`;

</script>

<!--PRICE SCHEDULE SETTINGS--> 
<?php
    $PS_ClientNameList = array();
    $PS_PPGList = array();
    $PS_PriceStartDateList = array();
    $PS_CompanyList = array();

    $sql = "SELECT FORMAT(PriceStartDate, 'MM/dd/yyyy') as PriceStartDateFormatted, * FROM dbo.PriceSchedule_Information ORDER BY ClientName ASC, PriceStartDate DESC";

    $query = sqlsrv_query($Con,$sql);
    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($PS_ClientNameList, $row["ClientName"]);
        
    
        array_push($PS_PPGList, $row["Price_Per_KG"]);
    

        array_push($PS_PriceStartDateList, $row["PriceStartDateFormatted"]);
        
        
        array_push($PS_CompanyList, $row["Company"]);
    }
?>

<script>

    var PriceSchedtable = document.getElementById('PriceSchedTable');
    var PriceSchedtable2 = document.getElementById('PriceSchedTable2');
    var PS_SearchButton = document.getElementById('PS_SearchButton');
    var PS_ShowAll = document.getElementById('PS_ShowAll');

    class PriceSchedInformation{
        constructor(ClientID,ClientName, Company, Price, PriceDate)
        {
            this.ClientID = ClientID;
            this.ClientName = ClientName;
            this.Company = Company;
            this.Price = Price;
            this.PriceDate = PriceDate;
        }

    }

    var ClientInfoArray = [];
    var PS_ClientNameList = JSON.parse('<?php echo json_encode($PS_ClientNameList);?>');
    var PS_PPGList = JSON.parse('<?php echo json_encode($PS_PPGList);?>');
    var PS_PriceStartDateList = JSON.parse('<?php echo json_encode($PS_PriceStartDateList);?>');
    var PS_CompanyList = JSON.parse('<?php echo json_encode($PS_CompanyList);?>');
    

    var LongestClientName = "";
    var LongestCompany = "";
    var LongestPrice = "";
    var LongestPriceDate= "";
    var CBArray =[];
    var PS_SearchIndexList = [];
    

    function PS_HeaderReset(Type= "A")
    {
        if(Type =="A")
        {
            
            PriceSchedtable2.innerHTML = `<tr>
                                    <th></th>
                                    <th class="ClientTableHeader">Client Name</th>
                                    <th class="ClientTableHeader">Company</th>
                                    <th class="ClientTableHeader">Price/KG</th>
                                    <th class="ClientTableHeader">Latest Date</th>
                                    
                                </tr>`;
        }
        else if(Type=="B")
        {
            
            PriceSchedtable2.innerHTML = `<tr>
                                    
                                    <th class="ClientTableHeader">Client Name</th>
                                    <th class="ClientTableHeader">Company</th>
                                    <th class="ClientTableHeader">Price/KG</th>
                                    <th class="ClientTableHeader">Latest Date</th>
                                    
                                </tr>`;
        }
        
    }

    function PS_TableReset(Type ="A"){

        if(Type == "A")
        {
            PriceSchedtable.innerHTML = `<tr >
                                        <th></th>
                                        <th class="ClientTableHeader">Client Name</th>
                                        <th class="ClientTableHeader">Company</th>
                                        <th class="ClientTableHeader">Price/KG</th>
                                        <th class="ClientTableHeader">Latest Date</th>
                                        
                                    </tr>`;
        }
        else if(Type=="B")
        {
            PriceSchedtable.innerHTML = `<tr>
                                        
                                        <th class="ClientTableHeader">Client Name</th>
                                        <th class="ClientTableHeader">Company</th>
                                        <th class="ClientTableHeader">Price/KG</th>
                                        <th class="ClientTableHeader">Latest Date</th>
                                        
                                    </tr>`;
        }

                                    
    }

    
    function PS_Init(){
        ClientArray.forEach((item,index) => {
            var ppg = "Not Set";
            var ppgd  = "Not Set";

            
            
            PS_ClientNameList.forEach((item2,index2) => {
                
                if(item2 == item)
                {
                
                
                    ppg = PS_PPGList[index2];                
                    ppgd = PS_PriceStartDateList[index2];
                      
                    
                }
                
            })

            
            
            var PriceSched = new PriceSchedInformation(ClientIDArray[index],item,CompanyArray[index],ppg,ppgd);
            
        
            if(index % 2 == 0)
            {
                PriceSchedtable.innerHTML +=  `<tr class="RowStyle">
                            <td><input type="checkbox" name="PSCB${PriceSched.ClientID}" value="Checked" id="PSCB${PriceSched.ClientID}"></td>
                            <td class="ClientTableData">${PriceSched.ClientName}</td>
                            <td class="ClientTableData">${PriceSched.Company}</td>
                            <td class="ClientTableData">${FormatNumber(PriceSched.Price)}</td>
                            <td class="ClientTableData">${PriceSched.PriceDate}</td>
                        </tr>`

            }
            else
            {
                PriceSchedtable.innerHTML +=  `<tr class="RowStyle2">
                            <td><input type="checkbox" name="PSCB${PriceSched.ClientID}" value="Checked" id="PSCB${PriceSched.ClientID}"></td>
                            <td class="ClientTableData">${PriceSched.ClientName}</td>
                            <td class="ClientTableData">${PriceSched.Company}</td>
                            <td class="ClientTableData">${FormatNumber(PriceSched.Price)}</td>
                            <td class="ClientTableData">${PriceSched.PriceDate}</td>
                        </tr>`;

            }

            CBArray.push(`PSCB${PriceSched.ClientID}`);
        
            if(PriceSched.ClientName.length > LongestClientName.length)
            {
                LongestClientName = PriceSched.ClientName;
            }

            if(PriceSched.Company.length > LongestCompany.length)
            {
                LongestCompany = PriceSched.Company;
            }

            if(PriceSched.Price != null)
            {
                if(FormatNumber(PriceSched.Price).length > LongestPrice.length)
                {
                    LongestPrice = FormatNumber(PriceSched.Price);
                }
            }

            if(PriceSched.PriceDate  != null)
            {
                if(PriceSched.PriceDate.length > LongestPriceDate.length)
                {
                    LongestPriceDate = PriceSched.PriceDate;
                }
            }

        })

        var price = new PriceSchedInformation(-1,LongestClientName,LongestCompany,LongestPrice,LongestPriceDate);
        PriceSchedtable2.innerHTML +=  `<tr>
                            <td><input type="checkbox" name="-1"></td>
                            <td class="ClientTableData2">${price.ClientName}</td>
                            <td class="ClientTableData2">${price.Company}</td>
                            <td class="ClientTableData2">${price.Price}</td>
                            <td class="ClientTableData2">${price.PriceDate}</td>
                        </tr>`
        ;

        
    }
    
    PS_Init();


    var PriceScheduleApplyToAllButton = document.getElementById('PriceScheduleApplyToAllButton')
    var PriceScheduleClearButton = document.getElementById('PriceScheduleClearButton')
    var PriceSchedUpdate = document.getElementById('PriceSchedButtonStyle');
    var PriceScheduleSelected = document.getElementById('PriceScheduleSelected');
    var PriceScheduleLayout = document.getElementById('PriceScheduleLayout');

    var PriceStartText = document.getElementById('PriceStartText');
    var PricePerKgText = document.getElementById('PricePerKgText');
    var PriceSchedUpdate = document.getElementById('PriceSchedButtonStyle');
    var CR_DateFromInput = document.getElementById('CR_DateFromInput');
    var CR_DateToInput = document.getElementById('CR_DateToInput');
    var PricePerKgTextSpec = document.getElementById('PricePerKgTextSpec');
    var PriceStartTextSpec = document.getElementById('PriceStartTextSpec');
    var PriceScheduleSelectedSpec = document.getElementById('PriceScheduleSelectedSpec');
    var PriceSchedInputSpec = document.getElementById('PriceSchedInputSpec');
    var PriceSchedInputSpecTemp = document.getElementById('PriceSchedInputSpecTemp');
   

    var date = new Date();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var year = date.getFullYear();
    
    if(day<10)
    {
        day = `0${day}`
    }
    PriceStartText.value = `${year}-${month}-${day}`;
    CR_DateFromInput.value = `${year}-${month}-${day}`;
    CR_DateToInput.value = `${year}-${month}-${day}`;

    var MissingError = "Field Cannot Be Empty";

    PriceScheduleApplyToAllButton.addEventListener('click', ()=>{
        CBArray.forEach((item,index)=>{
            var cb = document.getElementById(item)
            cb.checked = true;
        })
    })

    PriceScheduleClearButton.addEventListener('click', ()=>{
        CBArray.forEach((item,index)=>{
            var cb = document.getElementById(item)
            cb.checked = false;
        })
    })

    PriceSchedUpdate.addEventListener('click', async ()=>{
        
        var CBArray2 = [];
        var selected = 0;
        console.log(document.getElementById(CBArray[0]))
        if(document.getElementById(CBArray[0]) != null) 
        {
            
            CBArray.forEach((item,index)=>{
                var cb = document.getElementById(item)
                if(cb.checked == true)
                {
                    
                    if(!CBArray2.includes(item))
                    {
                        CBArray2.push(item);
                        selected++;
                    }
                
                }
            })
            PriceScheduleSelected.value=CBArray2;
            
            if(selected > 0)
            {
                
                if(PricePerKgText.value == "")
                {
                    PricePerKgText.style.color = "#ff385a";
                    PricePerKgText.value= MissingError;
                }
                else
                {
                    PS_SearchIndexList.forEach((item,index)=>{

                    })
                    if(Date.parse(PriceStartText.value) > Date.parse(`${year}-${month}-${day}`) )
                    {
                        
                        if(await ShowPopUp("Are you sure you want to update the price") ==true)
                        {
                            PriceScheduleLayout.submit();
                            
                        }
                        else
                        {
                            HidePopUp();
                        }
                    }
                    else
                    {
                        if(await ShowPopUp("Date cannot be updated", "Default", "OK") ==true)
                        {
                            HidePopUp();
                            
                        }
                        else
                        {
                            HidePopUp();
                        }
                    }
                    
                    
                }
                
                
                
            }
            else
            {
                if(await ShowPopUp("Please Select The Client You Want To Update", "Default", "Ok") == true)
                {
                        HidePopUp();
                }
                else
                {
                        HidePopUp();
                }
            
            }
        }
        else       
        {

            console.log(PriceScheduleSelectedSpec.value);

            if(PricePerKgText.value == "")
                {
                    PricePerKgText.style.color = "#ff385a";
                    PricePerKgText.value= MissingError;
                }
                else
                {
                    
                    var P_DayAvailable = false;
                    PS_SearchIndexList.forEach((item,index) =>{
                    
                        var d = new Date(PS_PriceStartDateList[item]);
                        var dt = new Date();
                        if(Date.parse(PS_PriceStartDateList[item]) >= Date.parse(`${dt.getFullYear()}-${dt.getMonth()}-${dt.getDate()}`))
                        {
                            P_DayAvailable = true;
                            
                        }
                        
                    })

                    if(Date.parse(PriceStartText.value) > Date.parse(`${year}-${month}-${day}`) || P_DayAvailable == false)
                    {
                       
                        if(await ShowPopUp("Are you sure you want to update the price") ==true)
                        {
                            PricePerKgTextSpec.value = PricePerKgText.value;
                            PriceStartTextSpec.value = PriceStartText.value;
                            
                            PriceSchedInputSpec.submit();
                            
                        }
                        else
                        {
                            HidePopUp();
                        }
                    }
                    else
                    {
                        if(await ShowPopUp("Date cannot be updated", "Default", "OK") ==true)
                        {
                            HidePopUp();
                            
                        }
                        else
                        {
                            HidePopUp();
                        }
                    }
                    
                }
        }
        
        
    })


    PS_SearchButton.addEventListener('click', ()=>{
        

        var search = PS_SearchInput.value;
        var i = ClientArray.indexOf(search);
        window.sessionStorage.setItem('PS_Search', search);
        
      
        PS_ButtonDisabled()
        PricePerKgText.value= "";
        PriceStartText.value = `${year}-${month}-${day}`;
        PS_TableReset("B");
        
        PS_HeaderReset("B");
        window.sessionStorage.setItem('CurrentContent',"PriceSched$Spec");
        PS_SearchIndexList = [];
        PS_ClientNameList.forEach((item,index)=>{
            if(item == search){
                PS_SearchIndexList.push(index)
            }
        })

        var array = [`PSCB${ClientIDArray[i]}`];
        PriceSchedInputSpecTemp.innerHTML = `<input type="hidden" form="PriceSchedInputSpec" name="PSCB${ClientIDArray[i]}" value="Checked">`;
        PriceScheduleSelectedSpec.value = array;

        
        LongestClientName = "";
        LongestCompany = "";
        LongestPrice = "";
        LongestPriceDate= "";

        PS_SearchIndexList.forEach((item,index)=>{
            var PriceSched = new PriceSchedInformation(ClientIDArray[ClientArray.indexOf(PS_ClientNameList[item])],
            PS_ClientNameList[item],
            PS_CompanyList[item],
            PS_PPGList[item],PS_PriceStartDateList[item]);
            

            PS_ID = `PSS${ClientIDArray[item]}`;
            if(index % 2 == 0)
            {
                PriceSchedtable.innerHTML +=  `<tr class="RowStyleS" id="${PS_ID}">
                            
                            <td class="ClientTableData">${PriceSched.ClientName}</td>
                            <td class="ClientTableData">${PriceSched.Company}</td>
                            <td class="ClientTableData">${PriceSched.Price}</td>
                            <td class="ClientTableData">${PriceSched.PriceDate}</td>
                        </tr>`

            }
            else
            {
                PriceSchedtable.innerHTML +=  `<tr class="RowStyle2S" id="${PS_ID}">
                            
                            <td class="ClientTableData">${PriceSched.ClientName}</td>
                            <td class="ClientTableData">${PriceSched.Company}</td>
                            <td class="ClientTableData">${PriceSched.Price}</td>
                            <td class="ClientTableData">${PriceSched.PriceDate}</td>
                        </tr>`;

            }

    
            if(PriceSched.ClientName.length > LongestClientName.length)
            {
                LongestClientName = PriceSched.ClientName;
            }

            if(PriceSched.Company.length > LongestCompany.length)
            {
                LongestCompany = PriceSched.Company;
            }

            if(PriceSched.Price != null)
            {
                if(PriceSched.Price.length > LongestPrice.length)
                {
                    LongestPrice = PriceSched.Price;
                }
            }

            if(PriceSched.PriceDate  != null)
            {
                if(PriceSched.PriceDate.length > LongestPriceDate.length)
                {
                    LongestPriceDate = PriceSched.PriceDate;
                }
            }
        })

        PS_SearchIndexList.forEach((item,index)=>{
            
            var psi = document.getElementById(`PSS${ClientIDArray[item]}`);
            psi.addEventListener('click',()=>{

                var datesub = PS_PriceStartDateList[item].split('/');
                var date = `${datesub[2]}-${datesub[0]}-${datesub[1]}`;
                PricePerKgText.value = PS_PPGList[item];
                PriceStartText.value = date;
                console.log(PriceScheduleSelectedSpec.value)
                
            })
        })


        PriceSchedtable2.innerHTML +=  `<tr>
                        
                        <td class="ClientTableData2">${LongestClientName}</td>
                        <td class="ClientTableData2">${LongestCompany}</td>
                        <td class="ClientTableData2">${LongestPrice}</td>
                        <td class="ClientTableData2">${LongestPriceDate}</td>
                    </tr>`;
        
        
    })

    PS_ShowAll.addEventListener('click',()=>{
        PS_ButtonEnabled()
        PS_TableReset();
        PS_HeaderReset();
        window.sessionStorage.setItem('CurrentContent',"PriceSched$List");
        PS_Init();
        PricePerKgText.value= "";
        PriceStartText.value = `${year}-${month}-${day}`;
    })

    PS_Search.addEventListener('change', ()=>{
        
        var search = PS_Search.value;
        var i = ClientArray.indexOf(search);
        window.sessionStorage.setItem('PS_Search', search);
        
        if(search == 'All')
        {
            PS_ButtonEnabled()
            PS_TableReset();
            PS_HeaderReset();
            window.sessionStorage.setItem('CurrentContent',"PriceSched$List");
            PS_Init();
            PricePerKgText.value= "";
            PriceStartText.value = `${year}-${month}-${day}`;
        }
        else
        {
            PS_ButtonDisabled()
            PricePerKgText.value= "";
            PriceStartText.value = `${year}-${month}-${day}`;
            PS_TableReset("B");
            
            PS_HeaderReset("B");
            window.sessionStorage.setItem('CurrentContent',"PriceSched$Spec");
            PS_SearchIndexList = [];
            PS_ClientNameList.forEach((item,index)=>{
                if(item == search){
                    PS_SearchIndexList.push(index)
                }
            })

            var array = [`PSCB${ClientIDArray[i]}`];
            PriceSchedInputSpecTemp.innerHTML = `<input type="hidden" form="PriceSchedInputSpec" name="PSCB${ClientIDArray[i]}" value="Checked">`;
            PriceScheduleSelectedSpec.value = array;

            
            LongestClientName = "";
            LongestCompany = "";
            LongestPrice = "";
            LongestPriceDate= "";

            PS_SearchIndexList.forEach((item,index)=>{
                var PriceSched = new PriceSchedInformation(ClientIDArray[ClientArray.indexOf(PS_ClientNameList[item])],
                PS_ClientNameList[item],
                PS_CompanyList[item],
                PS_PPGList[item],PS_PriceStartDateList[item]);
                

                PS_ID = `PSS${ClientIDArray[item]}`;
                if(index % 2 == 0)
                {
                    PriceSchedtable.innerHTML +=  `<tr class="RowStyleS" id="${PS_ID}">
                                
                                <td class="ClientTableData">${PriceSched.ClientName}</td>
                                <td class="ClientTableData">${PriceSched.Company}</td>
                                <td class="ClientTableData">${PriceSched.Price}</td>
                                <td class="ClientTableData">${PriceSched.PriceDate}</td>
                            </tr>`

                }
                else
                {
                    PriceSchedtable.innerHTML +=  `<tr class="RowStyle2S" id="${PS_ID}">
                                
                                <td class="ClientTableData">${PriceSched.ClientName}</td>
                                <td class="ClientTableData">${PriceSched.Company}</td>
                                <td class="ClientTableData">${PriceSched.Price}</td>
                                <td class="ClientTableData">${PriceSched.PriceDate}</td>
                            </tr>`;

                }

        
                if(PriceSched.ClientName.length > LongestClientName.length)
                {
                    LongestClientName = PriceSched.ClientName;
                }

                if(PriceSched.Company.length > LongestCompany.length)
                {
                    LongestCompany = PriceSched.Company;
                }

                if(PriceSched.Price != null)
                {
                    if(PriceSched.Price.length > LongestPrice.length)
                    {
                        LongestPrice = PriceSched.Price;
                    }
                }

                if(PriceSched.PriceDate  != null)
                {
                    if(PriceSched.PriceDate.length > LongestPriceDate.length)
                    {
                        LongestPriceDate = PriceSched.PriceDate;
                    }
                }
            })

            PS_SearchIndexList.forEach((item,index)=>{
                
                var psi = document.getElementById(`PSS${ClientIDArray[item]}`);
                psi.addEventListener('click',()=>{

                    var datesub = PS_PriceStartDateList[item].split('/');
                    var date = `${datesub[2]}-${datesub[0]}-${datesub[1]}`;
                    PricePerKgText.value = PS_PPGList[item];
                    PriceStartText.value = date;
                    console.log(PriceScheduleSelectedSpec.value)
                    
                })
            })


            PriceSchedtable2.innerHTML +=  `<tr>
                            
                            <td class="ClientTableData2">${LongestClientName}</td>
                            <td class="ClientTableData2">${LongestCompany}</td>
                            <td class="ClientTableData2">${LongestPrice}</td>
                            <td class="ClientTableData2">${LongestPriceDate}</td>
                        </tr>`;
        
        }
        
    })

    PS_HeaderReset("A");
    PS_TableReset("A");
    
    if(window.sessionStorage.getItem("CurrentContent") == "PriceSched$Spec"){
        PS_Search.value = window.sessionStorage.getItem("PS_Search");
        PS_Search.dispatchEvent(new Event('change'));
        
        PS_ButtonDisabled();
        
    }

</script>

<!--LOCATION SETTINGS-->

<?php
    $LocationList = array();

    $sql = "SELECT * FROM dbo.Location_Information";
    $query = sqlsrv_query($Con,$sql);

    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($LocationList,$row["Location"]);
    }
?> 
<script>

    var MlocationList = document.getElementById('MlocationList');
    var AddLocationButton = document.getElementById('AddLocationButton');
    var MLocationInputContainer = document.getElementById('MLocationInputContainer');

    var DeleteLocationText = document.getElementById('DeleteLocationText');
    var DeleteLocationForm = document.getElementById('DeleteLocationForm');
    
    var LocationList = <?php echo json_encode($LocationList)?>;

    var LIndexList = [];
    
    LocationList.forEach((item,index)=>{
        var LUID = `LCB${index}`;
        if(index%2 == 0)
        {
            MlocationList.innerHTML +=  
            `<tr class="RowStyle" ">
                <td class="ClientTableData">
                <svg xmlns="http://www.w3.org/2000/svg"
                height="16px" viewBox="0 0 24 24"
                width="16px" fill="#000000"
                id="${LUID}" class="CloseButton">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M19 6.41L17.59 5 12 10.59 
                6.41 5 5 6.41 10.59 12 5 17.59
                6.41 19 12 13.41 17.59 19 19
                17.59 13.41 12 19 6.41z"/></td>
                <td class="ClientTableData">${item}</td>
            <tr>`
        }
        else
        {
            MlocationList.innerHTML +=  
            `<tr class="RowStyle2" ">
                <td class="ClientTableData">
                <svg xmlns="http://www.w3.org/2000/svg"
                height="16px" viewBox="0 0 24 24"
                width="16px" fill="#000000"
                id="${LUID}" class="CloseButton">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M19 6.41L17.59 5 12 10.59 
                6.41 5 5 6.41 10.59 12 5 17.59
                6.41 19 12 13.41 17.59 19 19
                17.59 13.41 12 19 6.41z"/></td>
                <td class="ClientTableData">${item}</td>
            <tr>`
        }

        LIndexList.push(LUID);

    })

    

   


</script>


<!--WEIGH IN SETTINGS-->

<script>
    var WI_ClientNameCbox = document.getElementById('WI_ClientNameCbox');
    var WI_LocationFromCBox = document.getElementById('WI_LocationFromCBox');
    var WI_LocationToCBox = document.getElementById('WI_LocationToCBox');
    var WO_LocationToCBox = document.getElementById('WO_LocationToCBox');

    var ClientArray = JSON.parse('<?php echo json_encode($ClientArray);?>');
    var LocationList = <?php echo json_encode($LocationList)?>;

    ClientArray.forEach((item,index)=>{
        var i = document.createElement('option');
        i.value = item;
        i.innerHTML = item;
        WI_ClientNameCbox.appendChild(i);
    })

    function LoadLocationCBox() 
    {
        LocationList.forEach((item,index)=>{
        var i = document.createElement('option');
        var i2 = document.createElement('option');
        var i3 = document.createElement('option');

        i.value = item;
        i.innerHTML = item;

        i2.value = item;
        i2.innerHTML = item;
        
        i3.value = item;
        i3.innerHTML = item;

        WI_LocationFromCBox.appendChild(i);
        WI_LocationToCBox.appendChild(i2);
        WO_LocationToCBox.appendChild(i3);
        })
    }

    LoadLocationCBox(); 
    


</script>

<!--WEIGH OUT SETTINGS-->


<?php
    
    $WO_ClientNameList = array();
    $WO_TransactionNumList = array();
    $WO_LocationFromList = array();
    $WO_LocationToList = array();
    $WO_DriverNameList = array();
    $WO_PlateNumberList = array();
    $WO_WeighInDateList = array();
    $WO_TransacTypeList = array();
    $WO_WeighINList = array();
    $WO_PricePerKGList = array();

    $sql = "SELECT FORMAT(Weigh_In_Date, 'MM/dd/yyyy - hh:mm tt') as WeighInDate_Formatted,* FROM dbo.Transaction_Information WHERE Status = 'IN' ORDER BY WeighInDate_Formatted ASC";

    $query = sqlsrv_query($Con,$sql);

    while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_BOTH))
    {
        array_push($WO_ClientNameList,$row["ClientName"]);
        array_push($WO_TransactionNumList,$row["TransactionNumber"]);
        array_push($WO_LocationFromList,$row["LocationFrom"]);
        array_push($WO_LocationToList,$row["LocationTo"]);
        array_push($WO_DriverNameList,$row["Driver"]);
        array_push($WO_PlateNumberList,$row["PlateNumber"]);
        array_push($WO_WeighInDateList,$row["WeighInDate_Formatted"]);
        array_push($WO_TransacTypeList,$row["TransactionType"]);
        array_push($WO_WeighINList,$row["WeighIn"]);
        array_push($WO_PricePerKGList,$row["Price_Per_Kg"]);
    }

    
?>
<script>
    var WO_Table = document.getElementById('WO_Table');
    var WI_Table = document.getElementById('WI_Table')
    var WO_HeaderTable = document.getElementById('WO_HeaderTable');
    var WI_HeaderTable = document.getElementById('WI_HeaderTable');
    class WeighOutInformation{
        constructor(ClientName,TransactionNumber, LocationFrom,LocationTo,DriverName,PlateNumber,WeighInDate,TransactionType,WeightIn,PricePerKg){
            this.ClientName = ClientName;
            this.TransactionNumber = TransactionNumber;
            this.LocationFrom = LocationFrom;
            this.LocationTo = LocationTo;
            this.DriverName = DriverName;
            this.PlateNumber = PlateNumber;
            this.WeighInDate = WeighInDate;
            this.TransactionType = TransactionType;
            this.WeightIn = WeightIn;
            this.PricePerKg = PricePerKg;
        }
    }

    
    var WO_ClientNameList = <?php echo json_encode($WO_ClientNameList);?>;
    var WO_TransactionNumList = <?php echo json_encode($WO_TransactionNumList);?>;
    var WO_LocationFromList =<?php echo json_encode($WO_LocationFromList);?>;
    var WO_LocationToList = <?php echo json_encode($WO_LocationToList);?>;
    var WO_DriverNameList = <?php echo json_encode($WO_DriverNameList);?>;
    var WO_PlateNumberList = <?php echo json_encode($WO_PlateNumberList);?>;
    var WO_WeighInDateList = <?php echo json_encode($WO_WeighInDateList);?>;
    var WO_TransacTypeList = <?php echo json_encode($WO_TransacTypeList);?>;
    var WO_WeighINList = <?php echo json_encode($WO_WeighINList);?>;
    var WO_PricePerKGList = <?php echo json_encode($WO_PricePerKGList);?>;
    var WO_InformationList =
     new WeighOutInformation(WO_ClientNameList,
     WO_TransactionNumList,
     WO_LocationFromList,
     WO_LocationToList,
     WO_DriverNameList,
     WO_PlateNumberList,
     WO_WeighInDateList,
     WO_TransacTypeList,
     WO_WeighINList,
     WO_PricePerKGList);
    
    var WO_LongestClientName = "";
    var WO_LongestTransactionNumber = "";
    var WO_LongestTransType = "";
    var WO_LongestWeighInDate = "";
    var WO_LongestWeight = "";

    var IndexList = [];
    var WO_TableRows = [];
    function WO_SetListValues()
    {
        WO_TableRows = [];
        WO_ClientNameList.forEach((item,index)=>{

            var WO = new WeighOutInformation(
                WO_ClientNameList[index],
                WO_TransactionNumList[index],
                WO_LocationFromList[index],
                WO_LocationToList[index],
                WO_DriverNameList[index],
                WO_PlateNumberList[index],
                WO_WeighInDateList[index],
                WO_TransacTypeList[index],
                WO_WeighINList[index],
                WO_PricePerKGList[index]);
            
            var T = WO.TransactionNumber.split('-');

            if(index % 2 == 0)
            {
                
                
                WO_Table.innerHTML += ` <tr class="RowStyleS" id="WOL_${T[0]}_${T[1]}">
                                    <td class="WO_TableData">${WO.ClientName}</td>
                                    <td class="WO_TableData">${WO.TransactionNumber}</td>
                                    <td class="WO_TableData">${WO.TransactionType}</td>
                                    <td class="WO_TableData">${WO.WeighInDate}</td>
                                    <td class="WO_TableData">${FormatNumber(WO.WeightIn)} KG</td>
                                </tr>`;

                WI_Table. innerHTML += ` <tr class="RowStyle"">
                    <td class="WO_TableData">${WO.ClientName}</td>
                    <td class="WO_TableData">${WO.TransactionNumber}</td>
                    <td class="WO_TableData">${WO.TransactionType}</td>
                    <td class="WO_TableData">${WO.WeighInDate}</td>
                    <td class="WO_TableData">${FormatNumber(WO.WeightIn)} KG</td>
                </tr>`;
               
               

            }
            else
            {
                WO_Table.innerHTML += `<tr class="RowStyle2S" id="WOL_${T[0]}_${T[1]}">
                                    <td class="WO_TableData">${WO.ClientName}</td>
                                    <td class="WO_TableData">${WO.TransactionNumber}</td>
                                    <td class="WO_TableData">${WO.TransactionType}</td>
                                    <td class="WO_TableData">${WO.WeighInDate}</td>
                                    <td class="WO_TableData">${FormatNumber(WO.WeightIn)} KG</td>
                                </tr>`;

                WI_Table. innerHTML += ` <tr class="RowStyle2" ">
                    <td class="WO_TableData">${WO.ClientName}</td>
                    <td class="WO_TableData">${WO.TransactionNumber}</td>
                    <td class="WO_TableData">${WO.TransactionType}</td>
                    <td class="WO_TableData">${WO.WeighInDate}</td>
                    <td class="WO_TableData">${FormatNumber(WO.WeightIn)} KG</td>
                </tr>`;
                
            }
            
            if(WO.ClientName.length > WO_LongestClientName.length)
            {
                WO_LongestClientName = WO.ClientName;
            }

            if(WO.TransactionNumber.length > WO_LongestTransactionNumber.length)
            {
                WO_LongestTransactionNumber = WO.TransactionNumber;
            }

            if(WO.TransactionType.length > WO_LongestTransType.length)
            {
                WO_LongestTransType = WO.TransactionType;
            }

            if(WO.WeighInDate.length > WO_LongestWeighInDate.length)
            {
                WO_LongestWeighInDate = WO.WeighInDate;
            }

            if(WO.WeightIn.length > WO_LongestWeight.length)
            {
                WO_LongestWeight = WO.WeightIn;
            }

            
            WO_TableRows.push(`WOL_${T[0]}_${T[1]}&${WO.TransactionNumber}`);
            IndexList.push(index);
        })


        WO_HeaderTable.innerHTML += `<tr class="RowStyle2">
                                    <td class="WO_TableData">${WO_LongestClientName}</td>
                                    <td class="WO_TableData">${WO_LongestTransactionNumber}</td>
                                    <td class="WO_TableData">${WO_LongestTransType}</td>
                                    <td class="WO_TableData">${WO_LongestWeighInDate}</td>
                                    <td class="WO_TableData">${WO_LongestWeight} KG</td>
                                </tr>`;

        WI_HeaderTable.innerHTML += `<tr class="RowStyle2">
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

    WO_SetListValues();
    
</script>

<!--PAYMENT SETTINGS-->

<?php
    $P_TransactionNumberList = array();
    $P_PlateNumberList = array();
    $P_ClientNameList = array();
    $P_DriverList = array();
    $P_TransactionTypeList = array();
    $P_LocationFromList = array();
    $P_LocationToList = array();
    $P_WeighInDateList = array();
    $P_WeighOutDateList = array();
    $P_NetWeightList = array();
    $P_PricePerKgList = array();
    $P_TotalPriceList = array();
    $P_RemarksList = array();

    $sql = "SELECT FORMAT(Weigh_In_Date, 'MM/dd/yyyy') as WeighInDate_Formatted, 
    FORMAT(Weigh_Out_Date, 'MM/dd/yyyy') as WeighOutDate_Formatted, * FROM dbo.Transaction_Information WHERE Status = 'OUT'";

    $query = sqlsrv_query($Con, $sql);

    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($P_TransactionNumberList,$row["TransactionNumber"]);
        array_push($P_PlateNumberList,$row["PlateNumber"]);
        array_push($P_ClientNameList,$row["ClientName"]);
        array_push($P_DriverList,$row["Driver"]);
        array_push($P_TransactionTypeList,$row["TransactionType"]);
        array_push($P_LocationFromList,$row["LocationFrom"]);
        array_push($P_LocationToList,$row["LocationTo"]);
        array_push($P_WeighInDateList,$row["WeighInDate_Formatted"]);
        array_push($P_WeighOutDateList,$row["WeighOutDate_Formatted"]);
        array_push($P_NetWeightList,$row["NetWeight"]);
        array_push($P_PricePerKgList,$row["Price_Per_Kg"]);
        array_push($P_TotalPriceList,$row["Total_Price"]);
        array_push($P_RemarksList,$row["Remarks"]);
    }

?>

<script>

    

    var P_TableHeaderA = document.getElementById("P_TableHeaderA");
    var P_TableA = document.getElementById('P_TableA');

    var P_SelectAllButton = document.getElementById("P_SelectAll");
    
    var P_TransactionNumberList = <?php echo json_encode($P_TransactionNumberList);?>;
    var P_PlateNumberList = <?php echo json_encode($P_PlateNumberList);?>;
    var P_ClientNameList = <?php echo json_encode($P_ClientNameList);?>;
    var P_DriverList = <?php echo json_encode($P_DriverList);?>;
    var P_TransactionTypeList = <?php echo json_encode($P_TransactionTypeList);?>;
    var P_LocationFromList = <?php echo json_encode($P_LocationFromList);?>;
    var P_LocationToList = <?php echo json_encode($P_LocationToList);?>;
    var P_WeighInDateList = <?php echo json_encode($P_WeighInDateList);?>;
    var P_WeighOutDateList = <?php echo json_encode($P_WeighOutDateList);?>;
    var P_NetWeightList = <?php echo json_encode($P_NetWeightList);?>;
    var P_PricePerKgList = <?php echo json_encode($P_PricePerKgList);?>;
    var P_TotalPriceList = <?php echo json_encode($P_TotalPriceList);?>;
    var P_RemarksList = <?php echo json_encode($P_RemarksList);?>;

    class P_TransactionInformation{
        constructor(TransactionNumber,PlateNumber,ClientName,Driver,TransactionType,LocationFrom,LocationTo,WeighInDate,WeighOutDate,NetWeight, PricePerKg,TotalPrice,Remarks){
            this.TransactionNumber = TransactionNumber;
            this.PlateNumber = PlateNumber;
            this.ClientName = ClientName;
            this.Driver = Driver;
            this.TransactionType = TransactionType;
            this.LocationFrom = LocationFrom;
            this.LocationTo = LocationTo;
            this.WeighInDate = WeighInDate;
            this.WeighOutDate = WeighOutDate;
            this.NetWeight = NetWeight;
            this.PricePerKg = PricePerKg;
            this.TotalPrice = TotalPrice;
            this.Remarks = Remarks;
        }
    }

    var P_TransactionInfo = new P_TransactionInformation();
    P_TransactionInfo.TransactionNumber = P_TransactionNumberList;
    P_TransactionInfo.PlateNumber = P_PlateNumberList;
    P_TransactionInfo.ClientName =P_ClientNameList;
    P_TransactionInfo.Driver = P_DriverList;
    P_TransactionInfo.TransactionType = P_TransactionTypeList;
    P_TransactionInfo.LocationFrom = P_LocationFromList;
    P_TransactionInfo.LocationTo = P_LocationToList;
    P_TransactionInfo.WeighInDate = P_WeighInDateList;
    P_TransactionInfo.WeighOutDate = P_WeighOutDateList;
    P_TransactionInfo.NetWeight = P_NetWeightList;
    P_TransactionInfo.PricePerKg = P_PricePerKgList;
    P_TransactionInfo.TotalPrice = P_TotalPriceList;
    P_TransactionInfo.Remarks = P_RemarksList;


    

    var P_LongestClientName = "";
    var P_LongestTotalUT = "";
    var P_LongestTotalPrice = "";
    var P_UniqueClientList = {};
    var P_UClientList = [];
    var P_UniqueTransactionList = {};
    P_UClientList = []

    P_ClientNameList.forEach((item,index) => {
        
        if(P_UniqueClientList[item] == null)
        {
            var l = [item];
            console.log(P_TotalPriceList[index]);
            
            P_UniqueClientList[item] = parseFloat(P_TotalPriceList[index])
            P_UniqueTransactionList[item] = l;

            console.log(P_LongestTotalPrice)
            if(P_TotalPriceList[index] != null && P_TotalPriceList[index].length > P_LongestTotalPrice.length)
            {
                P_LongestTotalPrice = P_TotalPriceList[index];
                
            }
            if(item!= null && item.length > P_LongestClientName.length)
            {
                P_LongestClientName = item;
            }
            
        }
        else
        {
            
            
            P_UniqueClientList[item] += parseFloat(P_TotalPriceList[index])
            P_UniqueTransactionList[item].push(item);
        }
    })

    function Set_PValues()
    {
        P_UClientList = [];

        P_TableA.innerHTML = `<tr class="ListHeader2">
                                                <th>Client Name</th>
                                                <th>Total Unpaid Transactions</th>
                                                <th>Total Price</th>
                                            </tr>`;

        for(const[key,value] of Object.entries(P_UniqueClientList))
        {
           
            
            var P_ID = `P_${key.replace(/ /g, '_')}`;
            P_TableA.innerHTML += `
                    <tr class="RowStyleS" id="${P_ID}" >
                        <td class="P_TableData">${key}</td>
                        <td class="P_TableData">${P_UniqueTransactionList[key].length}</td>
                        <td class="P_TableData">₱${FormatNumber(value)}</td>
                    </tr>`;

        
            P_UClientList.push(key);

            if(value!= null && value > P_LongestTotalPrice)
            {
                P_LongestTotalPrice = value;
            }

            if(P_UniqueTransactionList[key] != null && P_UniqueTransactionList[key].length >P_LongestTotalUT.length )
            {
                P_LongestTotalUT = P_UniqueTransactionList[key].length;
            }
        }

        P_UClientList.forEach((item,index)=>{
            
            var P_ID = `P_${item.replace(/ /g, '_')}`;
            console.log(P_ID);
        
            var id = document.getElementById(P_ID);
            id.addEventListener('click', ()=>{
                window.sessionStorage.setItem("P_CurrentClient", item);
                P_ShowClientTransaction();
                P_SearchDisable();
            })
        })
    }

    Set_PValues();

    P_TableHeaderA.innerHTML += `
                <tr class="RowStyle" >
                    <td class="P_TableData">${P_LongestClientName}</td>
                    <td class="P_TableData">${P_LongestTotalUT}</td>
                    <td class="P_TableData">₱${FormatNumber(P_LongestTotalPrice)}</td>
                </tr>`;
    



    

    

   
    
    
</script>


<!-- CREATE REPORT SETTINGS -->

<?php

    $R_ClientNameList = array();
    $R_TransactionNumberList = array();
    $R_NetWeightList = array();
    $R_TotalPriceList = array();
    $R_ORDateList = array();
    $R_ChequeNumberList = array();
    

    $sql = "SELECT FORMAT(ORDate, 'MM/dd/yyyy') as ORDateFormatted, * FROM dbo.Transaction_Information";

    $query = sqlsrv_query($Con, $sql);

    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($R_ClientNameList,$row["ClientName"]);
        array_push($R_TransactionNumberList,$row["TransactionNumber"]);
        array_push($R_NetWeightList,$row["NetWeight"]);
        array_push($R_TotalPriceList,$row["Total_Price"]);
        array_push($R_ORDateList,$row["ORDateFormatted"]);
        array_push($R_ChequeNumberList,$row["ChequeNumber"]);
    }

?>

<script>
    var R_ClientNameList = <?php echo json_encode($R_ClientNameList);?>;
    var R_TransactionNumberList = <?php echo json_encode($R_TransactionNumberList);?>;
    var R_NetWeightList = <?php echo json_encode($R_NetWeightList);?>;
    var R_TotalPriceList = <?php echo json_encode($R_TotalPriceList);?>;
    var R_ORDateList = <?php echo json_encode($R_ORDateList);?>;
    var R_ChequeNumberList = <?php echo json_encode($R_ChequeNumberList);?>;
</script>

<script>

    var CR_ClientCBox = document.getElementById('CR_ClientCBox');
    var CR_StatusCBox = document.getElementById('CR_StatusCBox');
    var CR_DateFromInput = document.getElementById('CR_DateFromInput');
    var CR_DateToInput = document.getElementById('CR_DateToInput');
    var CR_TransacTypeCBox = document.getElementById('CR_TransacTypeCBox');


    if(window.sessionStorage.getItem('CR_ClientCBox')!=null) 
    {
        CR_ClientCBox.value = window.sessionStorage.getItem('CR_ClientCBox');
    }
    if(window.sessionStorage.getItem('CR_StatusCBox')!=null)
    {
        CR_StatusCBox.value = window.sessionStorage.getItem('CR_StatusCBox');
    }
    if(window.sessionStorage.getItem('CR_DateFromInput')!=null)
    {
        CR_DateFromInput.value = window.sessionStorage.getItem('CR_DateFromInput');
    }
    if(window.sessionStorage.getItem('CR_DateToInput')!=null)
    {
        CR_DateToInput.value = window.sessionStorage.getItem('CR_DateToInput');
    }
    if(window.sessionStorage.getItem('CR_TransacTypeCBox')!=null)
    {
        CR_TransacTypeCBox.value = window.sessionStorage.getItem('CR_TransacTypeCBox');
    }
    
    
    
   
    
</script>

<?php

    $CR_CurStatus = "";
    $CR_ClientNameList = array();
    $CR_TransactionNumberList = array();
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

    $CR_TotalPriceList = array();

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

        echo $CR_StatusCbox;

        
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

        $sql = "SELECT FORMAT($CR_StatusDate, 'MM/dd/yyyy') as DateFormatted, * FROM dbo.Transaction_Information
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
            

            $CR_Empty =0;
        }
        
    }
    else
    {
        setcookie("CR_ViewReport",true);
    }
   
   
?>

<script>

    var CRA_TableContainer = document.getElementById('CRA_TableContainer');
    var CRUP_TableContainer = document.getElementById('CRUP_TableContainer');
    var CRP_TableContainer = document.getElementById('CRP_TableContainer');

    var CRA_HeaderTable = document.getElementById('CRA_HeaderTable');
    var CRUP_HeaderTable = document.getElementById('CRUP_HeaderTable');
    var CRP_HeaderTable = document.getElementById('CRP_HeaderTable');

    var CRA_Table = document.getElementById('CRA_Table');
    var CRUP_Table = document.getElementById('CRUP_Table');
    var CRP_Table = document.getElementById('CRP_Table');

    var CR_CreateReportButton = document.getElementById('CR_CreateReportButton');

    
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
    
    
    var CR_CurStatus = <?php echo json_encode($CR_CurStatus);?>;

    console.log(CR_CurStatus);

    var CR_Empty = <?php echo json_encode($CR_Empty);?>;
    

    if(CR_ClientNameList.length > 0)
    {
       
        var status = CR_CurStatus;
        
        
        
        if(status == "Unpaid" || status == "All")
        {
          
            CRUP_TableContainer.classList.remove("ContentInvisible");
            var CR_LongestClientName = "";
            var CR_LongestTransactionNumber = "";
            var CR_LongestPlateNumber = "";
            var CR_LongestWeightIn= "";
            var CR_LongestWeightOut= "";
            var CR_LongestTransactionType = "";
            var CR_LongestPricePerKG = "";
            var CR_LongestDate = "";
            var CR_LongestNetWeight = "";

            CR_ClientNameList.forEach((item,index)=>{
               
                if(index % 2 == 0)
                {
                    CRUP_Table.innerHTML +=  `<tr class="RowStyle">
                                            <td class="CR_TableData">${CR_ClientNameList[index]}</td>
                                            <td class="CR_TableData">${CR_TransactionNumberList[index]}</td>
                                            <td class="CR_TableData">${CR_PlateNumberList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightInList[index])} KG</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightOutList[index])} KG</td>
                                            <td class="CR_TableData">${CR_DateList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_NetWeightList[index])}</td>
                                            <td class="CR_TableData">${CR_TransactionTypeList[index]}</td>
                                            <td class="CR_TableData">${CR_PricePerKGList[index]}</td>
                                           
                                        </tr>`;

                }
                else
                {
                    CRUP_Table.innerHTML +=  `<tr class="RowStyle2">
                                            <td class="CR_TableData">${CR_ClientNameList[index]}</td>
                                            <td class="CR_TableData">${CR_TransactionNumberList[index]}</td>
                                            <td class="CR_TableData">${CR_PlateNumberList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightInList[index])} KG</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightOutList[index])} KG</td>
                                            <td class="CR_TableData">${CR_DateList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_NetWeightList[index])}</td>
                                            <td class="CR_TableData">${CR_TransactionTypeList[index]}</td>
                                            <td class="CR_TableData">${CR_PricePerKGList[index]}</td>
                                            
                                        </tr>`;

                

                }

                if(CR_ClientNameList[index] != null && CR_ClientNameList[index].length > CR_LongestClientName.length)
                {
                    CR_LongestClientName = CR_ClientNameList[index];
                }
                if( CR_TransactionNumberList[index] != null && CR_TransactionNumberList[index].length > CR_LongestTransactionNumber.length)
                {
                    CR_LongestTransactionNumber = CR_TransactionNumberList[index];
                }
                if(CR_PlateNumberList[index] != null && CR_PlateNumberList[index].length > CR_LongestPlateNumber.length)
                {
                    CR_LongestPlateNumber = CR_PlateNumberList[index];
                }
                if( CR_WeightInList[index] != null && CR_WeightInList[index].length > CR_LongestWeightIn.length)
                {
                    CR_LongestWeightIn = CR_WeightInList[index];
                }

                if(CR_WeightOutList[index] != null && CR_WeightOutList[index].length > CR_LongestWeightOut.length)
                {
                    CR_LongestWeightOut = CR_WeightOutList[index];
                }
                if(CR_TransactionTypeList[index] != null && CR_TransactionTypeList[index].length > CR_LongestTransactionType.length)
                {
                    CR_LongestTransactionType = CR_TransactionTypeList[index];
                }
                if(CR_PricePerKGList[index] != null && CR_PricePerKGList[index].length > CR_LongestPricePerKG.length)
                {
                    CR_LongestPricePerKG = CR_PricePerKGList[index];
                }
                if(CR_DateList[index] != null && CR_DateList[index].length > CR_LongestDate.length)
                {
                    CR_LongestDate = CR_DateList[index];
                }

                if(CR_NetWeightList[index] != null && CR_NetWeightList[index].length > CR_LongestNetWeight.length )
                {
                    CR_LongestNetWeight = CR_NetWeightList[index];
                }
              

            })

            CRUP_HeaderTable.innerHTML = `<tr class="ListHeader">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>Plate #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Price Per Kg</th>
                                        </tr>

                                        <tr>
                                            <td class="CR_TableData">${CR_LongestClientName}</td>
                                            <td class="CR_TableData">${CR_LongestTransactionNumber}</td>
                                            <td class="CR_TableData">${CR_LongestPlateNumber}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_LongestWeightIn)} KG</td>
                                            <td class="CR_TableData">${FormatNumber(CR_LongestWeightOut)} KG</td>
                                            <td class="CR_TableData">${CR_LongestDate}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_LongestNetWeight)}</td>
                                            <td class="CR_TableData">${CR_LongestTransactionType}</td>
                                            <td class="CR_TableData">${CR_LongestPricePerKG}</td>
                                            
                                        </tr>`;
        }
        else if(status == "PAID")
        {
          
            CRP_TableContainer.classList.remove("ContentInvisible");
            var CR_LongestClientName = "";
            var CR_LongestTransactionNumber = "";
            var CR_LongestPlateNumber = "";
            var CR_LongestWeightIn= "";
            var CR_LongestWeightOut= "";
            var CR_LongestTransactionType = "";
            var CR_LongestPricePerKG = "";
            var CR_LongestTotalPrice = "";
            var CR_LongestDate = "";
            var CR_LongestNetWeight = "";

            CR_ClientNameList.forEach((item,index)=>{
               
                if(index % 2 == 0)
                {
                    CRP_Table.innerHTML +=  `<tr class="RowStyle">
                                            <td class="CR_TableData">${CR_ClientNameList[index]}</td>
                                            <td class="CR_TableData">${CR_TransactionNumberList[index]}</td>
                                            <td class="CR_TableData">${CR_PlateNumberList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightInList[index])} KG</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightOutList[index])} KG</td>
                                            <td class="CR_TableData">${CR_DateList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_NetWeightList[index])} KG</td>
                                            <td class="CR_TableData">${CR_TransactionTypeList[index]}</td>
                                            <td class="CR_TableData">₱${FormatNumber(CR_TotalPriceList[index])}</td>
                                           
                                        </tr>`;

                }
                else
                {
                    CRP_Table.innerHTML +=  `<tr class="RowStyle2">
                                            <td class="CR_TableData">${CR_ClientNameList[index]}</td>
                                            <td class="CR_TableData">${CR_TransactionNumberList[index]}</td>
                                            <td class="CR_TableData">${CR_PlateNumberList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightInList[index])} KG</td>
                                            <td class="CR_TableData">${FormatNumber(CR_WeightOutList[index])} KG</td>
                                            <td class="CR_TableData">${CR_DateList[index]}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_NetWeightList[index])} KG</td>
                                            <td class="CR_TableData">${CR_TransactionTypeList[index]}</td>
                                            <td class="CR_TableData">₱${FormatNumber(CR_TotalPriceList[index])}</td>
                                            
                                        </tr>`;

                

                }

                if(CR_ClientNameList[index].length > CR_LongestClientName.length)
                {
                    CR_LongestClientName = CR_ClientNameList[index];
                }
                if(CR_TransactionNumberList[index].length > CR_LongestTransactionNumber.length)
                {
                    CR_LongestTransactionNumber = CR_TransactionNumberList[index];
                }
                if(CR_PlateNumberList[index].length > CR_LongestPlateNumber.length)
                {
                    CR_LongestPlateNumber = CR_PlateNumberList[index];
                }
                if(CR_WeightInList[index].length > CR_LongestWeightIn.length)
                {
                    CR_LongestWeightIn = CR_WeightInList[index];
                }

                if(CR_WeightOutList[index].length > CR_LongestWeightOut.length)
                {
                    CR_LongestWeightOut = CR_WeightOutList[index];
                }
                if(CR_TransactionTypeList[index].length > CR_LongestTransactionType.length)
                {
                    CR_LongestTransactionType = CR_TransactionTypeList[index];
                }
                if(CR_PricePerKGList[index].length > CR_LongestPricePerKG.length)
                {
                    CR_LongestPricePerKG = CR_PricePerKGList[index];
                }
                if(CR_TotalPriceList[index].length > CR_LongestTotalPrice.length)
                {
                    CR_LongestTotalPrice = CR_TotalPriceList[index];
                }
                if(CR_DateList[index].length > CR_LongestDate.length)
                {
                    CR_LongestDate = CR_DateList[index];
                }

                if(CR_NetWeightList[index].length > CR_LongestNetWeight.length)
                {
                    CR_LongestNetWeight = CR_NetWeightList[index];
                }
              

            })

            CRP_HeaderTable.innerHTML = `<tr class="ListHeader">
                                            <th>Client Name</th>
                                            <th>Transaction #</th>
                                            <th>Plate #</th>
                                            <th>(IN) KG</th>
                                            <th>(OUT) KG</th>
                                            <th>Payment Date</th>
                                            <th>Net Weight</th>
                                            <th>Transaction Type</th>
                                            <th>Total Price</th>
                                        </tr>

                                        <tr>
                                            <td class="CR_TableData">${CR_LongestClientName}</td>
                                            <td class="CR_TableData">${CR_LongestTransactionNumber}</td>
                                            <td class="CR_TableData">${CR_LongestPlateNumber}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_LongestWeightIn)} KG</td>
                                            <td class="CR_TableData">${FormatNumber(CR_LongestWeightOut)} KG</td>
                                            <td class="CR_TableData">${CR_LongestDate}</td>
                                            <td class="CR_TableData">${FormatNumber(CR_LongestNetWeight)} KG</td>
                                            <td class="CR_TableData">${CR_LongestTransactionType}</td>
                                            <td class="CR_TableData">₱${FormatNumber(CR_LongestTotalPrice)}</td>
                                            
                                        </tr>`;
        }
       
        
        
    }

    
    
</script>

<script src="Js/Transactions.js"></script>
<script src="Js/WeighIn.js"></script>
<script src="Js/WeighOut.js"></script>
<script src="Js/Payment.js"></script>

<script src="Js/Reports.js"></script>
<script src="Js/CreateReport.js"></script>
<script src="Js/RetrieveReport.js"></script>

<script src="Js/AddUser.js?version=1"></script>
<script src="Js/ListUser.js?version=1"></script>
<script src="Js/Maintenance.js?v=1"></script>
<script src="Js/AddClient.js?version=1"></script>
<script src="Js/UpdateClient.js?version=1"></script>
<script src="Js/PriceSched.js?version=1"></script>
<script src="Js/Location.js?version=1"></script>

<script src="Js/index.js?version=1"></script>

    

</html>
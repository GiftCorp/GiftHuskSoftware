<?php

    include("Scripts/DBHandler.php");

    $Fname; 
    $Mname;
    $Lname;
    $Gender;
    $ContactNumber;
    $Address;
    $CivilStatus;
    $Birthdate;

    $EmailAddress;
    $Designation;

    if(isset($_POST["UID"]))
    {
        $UID = $_POST["UID"];
        $Fname = $_POST["FnameText"];
        $Mname = $_POST["MnameText"];
        $Lname = $_POST["LnameText"];
        $Gender = $_POST["Gender"];
        $ContactNumber = $_POST["ContactText"];
        $Address = $_POST["AddressText"];
        $CivilStatus = $_POST["CivilStatusText"];
    
        $EmailAddress = $_POST["EmailText"];
        $Designation = $_POST["DesignationText"];
    
        $BdateMonth = $_POST["BdateMonth"];
        $BdateDay = $_POST["BdateDay"];
        $BdateYear = $_POST["BdateYear"];

        $Birthdate = "$BdateMonth $BdateDay, $BdateYear";

        echo $Birthdate;

        $sql = "UPDATE dbo.UserData SET FirstName = ?, 
        MiddleName = ?,
        LastName = ?, 
        Gender = ?, 
        ContactNumber = ?, 
        Address = ?, 
        CivilStatus = ?,
        EmailAddress = ?,
        Designation = ?,
        BirthDate = FORMAT(CAST('$Birthdate' as date), 'MMMM dd, yyyy')
        WHERE UserID = $UID";

        $params = array($Fname,$Mname,$Lname,$Gender,$ContactNumber,$Address,$CivilStatus,$EmailAddress,$Designation);

        $query = sqlsrv_prepare($Con, $sql, $params);
        if( !$query ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            if( sqlsrv_execute( $query ) === false ) {
                die( print_r( sqlsrv_errors(), true));
            }
        }
    }

   header("Location:index.php");

    
?>
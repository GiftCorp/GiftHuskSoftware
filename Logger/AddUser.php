<?php
 
    $Fname;
    $Mname;
    $Lname;
    $Gender;
    $ContactNumber;
    $Address;
    $CivilStatus;
    $Birthdate;

    $UserName;
    $EmailAddress;
    $Authority;
    $Designation;
    $Password;
    $AddedDate;
    $AddedBy;


    if(isset($_POST["AddUserActive"]))
    {
        $Fname = $_POST["FnameText"];
        $Mname = $_POST["MnameText"];
        $Lname = $_POST["LnameText"];
        $Gender = $_POST["Gender"];
        $ContactNumber = $_POST["ContactText"];
        $Address = $_POST["AddressText"];
        $CivilStatus = $_POST["CivilStatusText"];

        $UserName = $_POST["UserNameText"];
        $EmailAddress = $_POST["EmailText"];
        $Authority = $_POST["Authority"];
        $Designation = $_POST["DesignationText"];
        $Password  = $_POST["PasswordText"];

        $BdateMonth = $_POST["BdateMonth"];
        $BdateDay = $_POST["BdateDay"];
        $BdateYear = $_POST["BdateYear"];

        $AddedDate = $_POST["AddedDate"];
        $AddedBy = $_POST["AddedBy"];

        $Birthdate = "$BdateMonth $BdateDay, $BdateYear";
        
        

        $Password = hash("sha512", $Password);


        $sql = "INSERT INTO dbo.UserData(
             UserName
            ,Password
            ,EmailAddress
            ,AccountAuthority
            ,FirstName
            ,MiddleName
            ,LastName
            ,Gender
            ,Address
            ,ContactNumber
            ,Designation
            ,BirthDate
            ,CivilStatus
            ,AddedDate
            ,AddedBy)
             VALUES(?
            ,?
            ,?
            ,?
            ,?
            ,?
            ,?
            ,?
            ,?
            ,?
            ,?
            ,FORMAT(CAST('$Birthdate' as date), 'MMMM dd, yyyy')
            ,?
            ,FORMAT(getDate(), 'MMMM dd, yyyy'),?)";

        
        $Params = array($UserName,$Password,$EmailAddress,$Authority,$Fname,$Mname,$Lname,$Gender,$Address,$ContactNumber,$Designation
        
        ,$CivilStatus
        
        ,$AddedBy);

        include("Scripts/DBHandler.php");
        $query = sqlsrv_prepare($Con,$sql,$Params );

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
    header("Location: index.php");
   
?>
<script>
    var storage = window.sessionStorage;

    
    if(localStorage.getItem('ClientAddStatus') == "Active")
    {
        alert(localStorage.getItem('ClientAddStatus'));
        document.innerHTML += '$ActiveAddClient = "Active"';
    }
</script>


<?php
    $ClientAddActive = $_POST["AddClientActive"];

    include("Scripts/DBHandler.php");

    if($ClientAddActive == "Active" )
    {
        $ClientName = $_POST["ClientName"];
        $CompanyName = $_POST["CompanyName"];
        $ClientAddress = $_POST["ClientAddress"];
        $ClientContactNumber = $_POST["ClientContactNumber"];

        $sql = "INSERT INTO dbo.Client_Information(ClientName,Company,Address,ContactNumber)
        VALUES(?,?,?,?)";

        $options = array($ClientName,$CompanyName,$ClientAddress,$ClientContactNumber);

        $query = sqlsrv_prepare($Con,$sql, $options);
        
        if( !$query ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            if( sqlsrv_execute( $query ) === false ) {
                die( print_r( sqlsrv_errors(), true));
          }
        }
        
        $ActiveAddClient == "False";
        header("Location: index.php");
    
    }
?>
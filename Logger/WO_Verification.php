<?php

    include("Scripts/DBHandler.php");

    $WO_PopUpUserName = $_POST['WO_PopUpUserName'];
    $WO_PopUpPassword = hash("sha512",$_POST['WO_PopUpPassword']);
    $WO_PopUpLocationToText = $_POST['WO_PopUpLocationToText'];
    $WO_PopUpPricePerKG = $_POST['WO_PopUpPricePerKG'];
    $WO_PopUpWeight = $_POST['WO_PopUpWeight'];
    $WO_PopUpRemarks = $_POST['WO_PopUpRemarks'];
    $WO_PopUpCurUID = $_POST['WO_PopUpCurUID'];

    $sql = "SELECT * FROM dbo.UserData WHERE UserName = '$WO_PopUpUserName' AND Password = '$WO_PopUpPassword'";
    

    $query = sqlsrv_query($Con,$sql);
    $Verified = 0;
    $SecID = null;
    while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_BOTH))
    {
        if($WO_PopUpCurUID == $row['UserID'])
        {
            $Verified = -1;
        }
        else
        {
            $Verified = 1;
            $SecID = $row['UserID'];
        }
        
    }
?>


<script>
    var Verified = parseInt('<?php echo json_encode($Verified)?>');

    var WO_PopUpLocationToText = '<?php echo json_encode($WO_PopUpLocationToText)?>'
    var WO_PopUpPricePerKG = '<?php echo json_encode($WO_PopUpPricePerKG)?>'
    var WO_PopUpWeight = '<?php echo json_encode($WO_PopUpWeight)?>'
    var WO_PopUpRemarks = '<?php echo json_encode($WO_PopUpRemarks)?>'

    function Reset()
    {
        window.sessionStorage.setItem('WO_PopUpLocationToText$Temp', WO_PopUpLocationToText.replace(/"/g,''));
        window.sessionStorage.setItem('WO_PopUpPricePerKG$Temp', WO_PopUpPricePerKG.replace(/"/g,''));
        window.sessionStorage.setItem('WO_PopUpWeight$Temp', WO_PopUpWeight.replace(/"/g,''));
        window.sessionStorage.setItem('WO_PopUpRemarks$Temp', WO_PopUpRemarks.replace(/"/g,''));
        window.sessionStorage.setItem('Auth', 0);

        
    }
    
    if(Verified == 1)
    {
        var SecID= '<?php echo json_encode($SecID)?>';

        Reset();
        window.sessionStorage.setItem('Auth', Verified);
        window.sessionStorage.setItem('WO_SecID$Temp', SecID);
        window.location.replace('index.php');
        

    }
    else if(Verified == 0)
    {
        Reset();
        window.sessionStorage.setItem('Auth', 0);
        window.location.replace('index.php');
        
    }
    else if(Verified == -1)
    {
        Reset();
        window.sessionStorage.setItem('Auth', -1);

        window.location.replace('index.php');
    }
    
</script>
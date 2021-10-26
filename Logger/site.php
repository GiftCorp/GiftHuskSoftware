<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="Style/LoginStyle.css?version=2"/>
    
    <title>Document</title>
</head>
<body>

    <div></div>
    <div class="LoginContainer">
        <div></div>
        <div id="loginText">Log In</div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>
            <form id="loginContainer" method="POST" action="site.php">
                <h1 class="HeaderText">Username</h1>
                <input type="text" class="LogInTextBox" name="UserName"  id="UserNameText"/>
                <h1 class="HeaderText">Password</h1>
                <input type="Password" class="LogInTextBox" name="Password"/>
                <input type="submit" id="loginButton" value="Login"/>
                
                <h1 class="errorMessage"  >Username or Password Incorrect</h1>
                
            </form>
        </div>
       
        
    </div>
    <div></div>
    

    
</body>


<?php
    include("Scripts/DBHandler.php");
    
    if(isset($_POST["UserName"]) && isset($_POST["Password"]))
    {
        $UserName = $_POST["UserName"];
        $Password = $_POST["Password"];
        $Password = hash("sha512", $Password);
      

        $Sql = "SELECT * FROM UserData WHERE UserName = '$UserName' AND Password = '$Password'";
        $Password = hash("sha512", $Password);
        $result = sqlsrv_query($Con, $Sql);
        $Correct = false;

        $UID;
        $Authority;

        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_BOTH ))
        {
            $Correct = true;
            $UID = $row["UserID"];
            $Authority = $row["AccountAuthority"];
        }

    
    
    }

?>


<script>

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    var ErrorMessageText = document.querySelector(".errorMessage");
    console.log(ErrorMessageText);
        
    var correct = '<?= $Correct?>';
    var username = '<?= $UserName?>';
    var password = '<?= $Password?>';
    var authority = '<?= $Authority?>';
    var UID = '<?= $UID?>';

    if(correct)
    {
        window.location.replace('index.php');
        var storage = window.sessionStorage;
        storage.setItem('username', username);
        storage.setItem('password', password);
        storage.setItem('authority', authority);
        storage.setItem('UID', UID);
        
        storage.setItem('CurrentContent', 'Maintenance');
    }
    else
    {
        
        ErrorMessageText.setAttribute('id','errorMessageVisible');
        
        async function wait(){
            await sleep(2000)
            ErrorMessageText.setAttribute('id','');
        }
        wait();
        
    }



</script>


</html>

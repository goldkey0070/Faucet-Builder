<!DOCTYPE html>
<html>
<head>
<title>No</title>
<link rel="stylesheet" href="style/css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="style/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="style/css/myCssClass.css" media="screen">
  
     
       
<meta http-equiv="content-type" content="text/html;charset="UTF-8">

 
  
<?php
require_once("Balance-non-Xapo-Faucet-Users.php");

$sToken = json_decode(GetAuthToken());

if(isset($_POST['addyBalance'])){

$addyBalance = $_POST['addyBalance'];

if(empty($addyBalance)) {
   echo "No Address Entered";
   die();
}

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, "https://v2.api.xapo.com/addresses/" . $addyBalance);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
   curl_setopt($ch, CURLOPT_HEADER, FALSE);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
     "Authorization: Bearer " . $sToken->access_token
   ));
   $response = curl_exec($ch);
  
 
  echo "<p><h2><font color=lime >$response; </font></h2></p>";  
}

?>


<body>
<center><h1><font color="blue">ENJOY!</h1>
 <lable><h2>Non-Xapo Address Check For Balance In Faucet:</h2></lable>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
    <div>
      <input type="text" name="addyBalance" class="form-control text-center" placeholder="Enter your BTC Address Only !"></div>
     </div>
      <input type="submit" value="Check Balance">
     
     </font>
   </form></center>
  
  </body>

  </html>

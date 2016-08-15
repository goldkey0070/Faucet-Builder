<!DOCTYPE html>
<html>
<head><title>Balance check for non xapo users</title>
<link rel="stylesheet" href="style/css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="style/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="style/css/myCssClass.css" media="screen">
  <meta property="og:url"                content="" /> <!--your domain-->
	<meta property="og:title"              content="" /> <!--Your Title -->
	<meta property="og:description"        content="" /> <!--description-->
	<meta property="og:image"              content="" /> <!--Image that will show on facebook-->
	<meta name="alexaVerifyID" content=""/>
	<meta name="description" content=""> <!--description for search engines-->
	<meta name="keywords" content=""/> <!--keywords for search engines-->
	<meta name="google-site-verification" content="" />
	
	
	
       

    <META http-equiv="Content-type" content="text/html; charset=iso-8859-1">

        
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
       
		<script type="text/javascript">
if ( window.self !== window.top ) {
    window.top.location.href=window.location.href;
}
</script>



<style>
body {
    background-color: lightblue;
}
</style>
</head>
    
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
  
  print_r($response);
}

?>


<body>
<h1>ENJOY!</h1>

<br>
   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
       Non-Xapo Account Check For Faucet: <input type="text" name="addyBalance">
      <br>
      <input type="submit" value="Check Balance">
   </form>
  </body>

  </html>

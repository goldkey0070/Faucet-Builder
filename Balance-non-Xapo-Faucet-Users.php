<?php

function GetAuthToken() {
    
    $sYourRedirectUri = "fill this in"; // fill in
    $sAPPID = "Fill this in"; //fill in
    $sAPPSecret = "fill this in";  //fill in
    
    $sPostFields = "client_credentials&redirect_uri=" . $sYourRedirectUri;
    $sAuthCode = base64_encode($sAPPID . ":" . $sAPPSecret);
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://v2.api.xapo.com/oauth2/token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    
    curl_setopt($ch, CURLOPT_POST, TRUE);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=" . $sPostFields);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/x-www-form-urlencoded",
      "Authorization: Basic " . $sAuthCode
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);
}

<?php
/**
 * Handle the form and get request and throw response
 */

require 'tools.php';
require 'BillSplitter.php';

session_start(); //used session to maintain a session as I am using HTTP response

$numberToSplit = sanitize($_POST['numberToSplit']); // required
$amountToSplit = sanitize($_POST['amountToSplit']); // required
$select = sanitize($_POST['select']); // not required
$roundUp = sanitize($_POST['roundUp']); // not required


$billSplitter = new \DWA\BillSplitter($_POST); // Calling the class


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $validate = $billSplitter->validate($_POST); //calling class methods
    if($validate['status']==0){
        $_SESSION['message']= $validate['message'];
        header('Location: index.php?response=0');  // setup header to identify responses on the HTML
    }
    else {
        $calculate = $billSplitter->calculate($_POST);  // calling class methods
        $_SESSION['compute'] = $calculate;
        header('Location: index.php?response=1');  // setup header to identify responses on the HTML
    }
}

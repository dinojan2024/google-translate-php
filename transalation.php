<?php 
require_once 'vendor/autoload.php';
use Stichoza\GoogleTranslate\GoogleTranslate;
$validation_error = '';
$msg = $p_name = "";
if (isset($_POST['action'])) {
    if($_POST['action'] == "Translate"){
        if(empty($_POST['p_tr_name'])){
            $error[] = 'Error !, Translate name is required!';
        }else{
            $tr = new GoogleTranslate();
            $tr->setSource('eng-ta');  // Set source language to Tamil
            $tr->setTarget('ta');  // Set target language to English
            $inputText = $_POST['p_tr_name'];
            $p_name = $tr->translate($inputText);
        }
    }
} else {
    $error[] = 'Error !, Please Try !';
}

if (empty($error)) {
} else {
    $validation_error = implode(", ", $error);
}

$output = array(
    'error' => $validation_error,
    'p_name' => $p_name
);
echo json_encode($output);
?>
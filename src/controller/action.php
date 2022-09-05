
<?php
$dataJson = array();
if ($_SERVER['REQUEST_METHOD'] == "POST")
    $dataJson = $_POST;
else
    $dataJson = $_GET;

echo '<h2>Post information</h2>';
echo '<pre>';
print_r($dataJson);
echo '</pre>';

 

?>


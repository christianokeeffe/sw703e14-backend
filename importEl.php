<?php

$dbhost = "localhost";
$dbuser = "okeeffed_sg_user";
$dbpass = "QAZ^W.AZ;@8W";
$dbname = "okeeffed_smartgrid";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($mysqli->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}


//FUnction to read CSV
function readCSV($csvFile){
    //Open the file in read mode
    $file_handle = fopen($csvFile, 'r');
    //Go through a loop
    while (!feof($file_handle) ) {
        // get data using fgetcsv and push to an array
        $line_of_text[] = fgetcsv($file_handle, 1024,';');
    }
    //Close the file after reading
    fclose($file_handle);
    //return the array of data
    return $line_of_text;
}

// Set path to CSV file
$csvFile = 'MarketData.csv';

//call the csv reading function
$csv = readCSV($csvFile);
$table_name = "market_data";
$mysqli->query("TRUNCATE TABLE " . $table_name);
echo "Truncated  " . $table_name . "<br />";
ini_set('max_execution_time', 3000); //300 seconds = 5 minutes
//Loop to insert to DB
$arraySize=sizeof($csv);
for($i=2; $i<$arraySize; $i++)
{
    $mysqli->query("INSERT INTO " . $table_name . " (`time`, `price`) VALUES (".strtotime($csv[$i][0]." ".$csv[$i][1].":00").",".$csv[$i][2].");");
}
$i = 5;
ini_set('max_execution_time', 30); //300 seconds = 5 minutes
echo "inserted " . $arraySize . " market prices";
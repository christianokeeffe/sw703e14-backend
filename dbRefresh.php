<?php
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
ini_set('max_execution_time', 3000); //300 seconds = 5 minutes
$location = "smartgrid.sql";

$dbhost = "localhost";
$dbuser = "okeeffed_sg_user";
$dbpass = "QAZ^W.AZ;@8W";
$dbname = "okeeffed_smartgrid";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($mysqli->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    select * from information_schema.tables where TABLE_SCHEMA = '$dbname'

SQL;

if(!$result = $mysqli->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
    $table_name = $row["TABLE_NAME"];
    $mysqli->query("DROP TABLE " . $table_name);
    echo "dropped " . $table_name . "<br />";
}



$qrr = "";
if(isset($_GET["type"]))
{
	if($_GET["type"] == "full")
	{
        // Set path to CSV file
        $csvFile = 'MarketData.csv';

        //call the csv reading function
        $csv = readCSV($csvFile);

        $table_name = "market_price";
   
        //Loop to insert to DB
        $arraySize=sizeof($csv);
        $qrr = "INSERT INTO " . $table_name . " (`time`, `price`) VALUES ";
        $first = true;
        $prev = 100;
        for($i=2; $i<$arraySize; $i++)
        {
            if($first)
            {
                $first = false;
            }
            else
            {
                $qrr = $qrr . ",";
            }

            if(empty($csv[$i][2]))
            {
                $val = $prev;
            }
            else
            {
                $val = str_replace(",", "", $csv[$i][2]);
                $prev = $val;
            }

            $qrr = $qrr . "(".strtotime($csv[$i][0]." ".$csv[$i][1].":00").",".$val.")";

            /*if($i%882 == 0)
            {
                if($i == 881)
                {
                    //echo $qrr;
                }
                $mysqli->query($qrr);
                printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
                $qrr = "INSERT INTO " . $table_name . " (`time`, `price`) VALUES ";
                $first = true;
            }*/
        }
        $qrr = $qrr . ";";
        echo "Imported prices";
        //$mysqli->query($qrr);

	}
}

echo "inserting file";

$commands = file_get_contents($location) . $qrr;

$mysqli->multi_query($commands);

$mysqli->close();
ini_set('max_execution_time', 30); //300 seconds = 5 minutes
?>
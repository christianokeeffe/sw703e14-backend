<?php
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

echo "inserting file";

$commands = file_get_contents($location);

$mysqli->multi_query($commands);


if(isset($_GET["type"]))
{
	if($_GET["type"] == "full")
	{
		include("importEl.php");
	}
}

?>
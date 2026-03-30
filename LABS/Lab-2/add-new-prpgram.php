<?PHP
// Auhtor: Shimona
//Date: 18 March 2026
//Unit: IS312 Webb Application Development

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$programCode = $_POST['programCode'];
$programName = $_POST['programName'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$programCode', '$programName')";

if ($conn->query(sql)== TRUE) {
    echo "New program added sucessfully!";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?Php 

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

$fact_head = $_POST['fact_head'];
$fact_details = $_POST['fact_details'];
$fact_icon = $_POST['fact_icon'];
$fact_status = $_POST['fact_status'];

$fact_query = "INSERT INTO facts (fact_name, fact_details, fact_icon, fact_status) VALUES ('$fact_head', '$fact_details', '$fact_icon', '$fact_status')";

$fact_final = mysqli_query($db_connect, $fact_query);




header('location: fact.php');


?>

    
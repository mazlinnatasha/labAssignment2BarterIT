 <?php
 if (!isset($_POST)){
	 $response = array('status' => 'failed', 'data' => null);
	 sendJsonResponse($response);
	 die();
 }
$email = $_POST['email'];
$password = sha1($_POST['password']);

include_once("dbconnect.php");

$sqllogin = "SELECT * FROM tbl_users WHERE user_email = '$email' AND
user_password = '$password'";
$result = $conn->query($sqllogin);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
        $userlist = array();
        $userlist['id'] = $row['user_id'];
        $userlist['name'] = $row['user_name'];
        $userlist['email'] = $row['user_email'];
        $userlist['phone'] = $row['user_phone'];
 
        $response = array('status' => 'success', 'data' => $userlist);
        sendJsonResponse($response);
    }
}else{
    $response = array('status' => 'failed', 'data' => null);
    sendJsonResponse($response);
}

function sendJsonResponse($sentArray)
{
    header('Content‐Type: application/json');
    echo json_encode($sentArray);
}
?>

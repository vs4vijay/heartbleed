<? 

$DB_PATH = "sqlite:poc.db";
$connection = new PDO($DB_PATH);


$username = $_REQUEST['username'];

if(empty($username)) {
	print "Please pass username!!!";
	die();
}

print "Searching with username: $username <br/>";

$query = "SELECT * FROM users WHERE username = '$username'";
print "Query: $query <br/>";

$result = $connection->query($query);



print "Users";
print "<br/> ------- <br/>";

foreach ($result as $user) {
	var_dump($user);
	print $user['username'] . ":" . $user['password'];
	print "<br/>";
}




error_log(print_r($_REQUEST, true));

?>

<?php
	
	/*原生sql  使用mysqli  链接mysql*/
	$mysqli = new mysqli("localhost","root","root","shop");
	
				//如果连接错误
	if($mysqli->connect_errno) 
	{
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
	}
	echo "链接成功";echo "<br>";
	// echo $mysqli->host_info . "\n";
	
	//查询
	$sql = "select * from p_users";
	
	//执行
	$res = $mysqli->query($sql);
	while($row = $res->fetch_assoc())
	{
		echo "<pre>";print_r($row);echo "</pre>";
	}
?>

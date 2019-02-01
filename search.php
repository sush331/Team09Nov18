<? php
define("MYSQLUSER","jc505984");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","_team09nov18");
	$db = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB) or die("couldn't connect");
	$output='';
	if (isset($_POST['search'])) {
		$searchq =$_POST['search'];
		$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
		$query = mysql_query("SELECT * FROM file WHERE subjects LIKE'%$searchq
			%' OR courses LIKE'%$searchq
			%' OR menus LIKE'%$searchq
			%'") or die("couldnot search");
		$count=mysql_num_rows($query);
		if($count == 0){
			$output="no results";
		}else{
			while ($row=mysql_fetch_array($query)) {
				$sub=$row['subjects'];
				$cour=$row['courses'];
				$m=$row['menus'];

				$output='<div>'.$sub.''.$cour.''.$m.'</div>';
			}
		}

	}
?>
<?php

	function getDBConnection()
	{
		$dbServer = "db1087.perfora.net";
		$dbName = "db214499194";
		$dbUser = "dbo214499194";
		$dbPassword = "A8sdMKNu";

		$con = mysql_connect($dbServer, $dbUser, $dbPassword);
		if(!$con)
			die(mysql_error());
			
		mysql_select_db($dbName, $con);

		return $con;
	}
	
	function executeSelectQuery($sql, $con)
	{
		$result = mysql_query($sql, $con) or die(mysql_error());
			return $result;	
	}
	
	// This may do something later
	function prepareStatement($sql)
	{
		return $sql;
	}
	
	function getNavigationRecordSet($con)
	{
		$sql = prepareStatement("SELECT * FROM navigation ORDER BY sequence");
		
		$result = executeSelectQuery($sql, $con);
		return $result;
	}
	
	function getFeaturedProfilesRecordSet($con)
	{
		$sql = prepareStatement("SELECT * FROM featuredprofiles");
		
		$result = executeSelectQuery($sql, $con);
		return $result;
	}
	
	function echoNavList($con, $top)
	{
		$navTable = getNavigationRecordSet($con);
	
		while($row = mysql_fetch_array($navTable))
		{
			if($top && !$row["inTop"])
				continue;
			echo("<li><a href = \"" . $row["link"] . "\">" . $row["display"] . "</a></li>");
		}
	}
	
	function echoFeaturedProfilesList($con)
	{
		$profileLinkTable = getFeaturedProfilesRecordSet($con);
		
		while($row = mysql_fetch_array($navTable))
		{
			echo("<li><a href = \"" . $row["link"] . "\">" . $row["display"] . "</a></li>");
		}		
	}
	
	function getUserTable()
	{
		return null;
	}
	
	function getUserProfile()
	{
		return null;
	}
	
?>
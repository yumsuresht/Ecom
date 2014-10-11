<?   
class DBCon
{
      var $execute_query="";
      var $conn="";
      var $row_count=1;
	  
	function DBCon()
	{
		$hostname_conn = "localhost";
		$database_conn = "ecom";
		$username_conn = "root";
		$password_conn = "123456";
		$this->conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
		mysql_select_db($database_conn, $this->conn );
		
	}

	function executeQuery($query)
	{
	      $this->execute_query = mysql_query($query, $this->conn ) or die(mysql_error());
	}
	
      function nextRecord()
	{
	       return  mysql_fetch_assoc($this->execute_query);
	}    
	
      function countRows()
	{
	     return mysql_num_rows($this->execute_query);
	}
     

      function close()
	{
	      mysql_free_result($this->execute_query);
	}
	
}

?>

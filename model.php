<?php 
class model{
    public function get_row($sql){
        $query = $this->query($sql);
        return mysqli_fetch_object($query);
    }
    public function query($sql){
        $query = mysqli_query($this->conn, $sql) or die('<pre>Error mysqli_query: ' . mysqli_error($this->conn) . '<br />' . $sql . '</pre>');
        
        if ( preg_match("/^(insert|replace)\s+/i",$sql) )
		{
			$this->insert_id = @$this->conn->insert_id;
		}
        
        return $query;
    }
}
?>
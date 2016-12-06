<?php
class db{
    private $host="127.0.0.1";
    private $user="root";
    private $password="";
    private $db="ders_db";
	private $connection;
	public  $sql,$sorgu,$sat,$sayi,$html;
	public  $createdSql='';
	private $from='';
	private $where='';
	private $orderBy='';
	private $groupBy='';
	private $limit='';
	function __construct($db="login"){
		if($db == "login"){
			$this->connect();
		}
	}
	function setDBInfo($host,$user,$password,$db){
		$this->host		= $host;
		$this->user		= $user;
		$this->password = $password;
		$this->db		= $db;
	}
	function connect(){ // Class yüklendiği anda database baglantısı yapılır.
		$conn= mysqli_connect($this->host,$this->user,$this->password,$this->db);// or die (header("Location:whoops.php"));
		$this->connection = $conn;
		@mysqli_query($this->connection,"SET NAMES 'utf-8'");   
		@mysqli_query($this->connection,"SET CHARACTER SET 'utf-8'");   
		@mysqli_query($this->connection,"SET NAMES 'utf8' COLLATE 'utf8_general_ci'");  
	}
	function setSql($str){ 
		$this->createdSql=$str;
		return;
	}
	function seeCreatedSql(){
		return $this->createdSql.$this->where.$this->orderBy.$this->groupBy.$this->limit;
	}
	function select($fields=array()){
		if(count($fields) < 1){
			$this->createdSql .= 'select  *';
			return;
		}
		$this->createdSql .= 'select ';
		foreach($fields as $field){
			$this->createdSql .= $field.',';
		}
		$this->createdSql = substr($this->createdSql, 0, -1);
	}
	function from($table){
		$this->createdSql .= ' from '.$table;
	}
	function where($whereString,$data){
		$whereParts = explode("?", $whereString);
		if($whereParts < 1 && $whereParts != count($data)){
			return 0;
		}
		$where = ' where ';
		$i=0;
		foreach($whereParts as $wherePart){

			$where .= $wherePart;
			if(!isset($data[$i])){
				break;
			}
			if(is_int($data[$i])){
				$where .= $data[$i];
			}else{
				$where .= "'".$data[$i]."'";
			}
			$i++;
		}
		$this->where = $where;
	}
    function whereRange($field,$start,$end){
        $where = ( $this->where == '' )?' where ':$this->where.' and ';
        $where .= " (".$field.">'".$start."' and ".$field."<'".$end."') ";
        $this->where = $where;
    }
	function orderBy($field,$desc=null){
		$orderBy=" order by ".$field;
		if($desc != null){
			$orderBy .= " ".$desc;
		}
		$this->orderBy=$orderBy;
	}
	function groupBy($field){
		$this->groupBy = " group by ".$field;
	}
	function limit($count,$start=0){
		if($start == 0){
			$this->limit = " limit ".$count;
		}else{
			$this->limit = " limit ".($start-1).",".$count;
		}
		
	}
	function query(){
		return mysqli_query($this->connection,$this->createdSql);
	}
	function createSqlString(){
		$sqlString = '';
		if( $this->createdSql != '' ) 		$sqlString .= $this->createdSql;
		if( $this->from != '' ) 			$sqlString .= $this->from;
		if( $this->where != '' ) 			$sqlString .= $this->where;
		if( $this->orderBy != '' )			$sqlString .= $this->orderBy;
		if( $this->groupBy != '' )			$sqlString .= $this->groupBy;
        if( $this->limit != '' ) 			$sqlString .= $this->limit;
		$this->createdSql=$sqlString;
	}
	
	function createOperationSqlString(){
		$sqlString = $this->createdSql;
		if( $this->where != '' ) $sqlString .= $this->where;
		return $this->createdSql = $sqlString;
	}
	
	function fetchArray(){ 
		$this->createSqlString();
		$sorgu=mysqli_query($this->connection,$this->createdSql);// or die(header("Location:whoops.php"));
		if($sorgu == false){
			return 0;
		}
		$sayi = mysqli_num_rows($sorgu);
		if($sayi > 0){
			while($satir=mysqli_fetch_assoc($sorgu)){
				$data[]=$satir;
			}
			return $data;
		}else{
			return 0;
		}
	}
	
	function fetchNum(){
		$this->createSqlString();
		$sorgu=mysqli_query($this->connection,$this->createdSql);// or die(header("Location:whoops.php"));
		if($sorgu == false){
			return 0;
		}
		$sayi=@mysqli_num_rows($sorgu);
		if($sayi>0){
			return $sayi;
		}else{
			return 0;
		}
	}
	function clean(){
        $this->sql = "";
        $this->createdSql = "";
		$this->where='';
		$this->orderBy='';
		$this->groupBy='';
    }
	function fetchOneArray(){ 
		$this->createSqlString();
		$sorgu=mysqli_query($this->connection,$this->createdSql);// or die(header("Location:whoops.php"));
				
        $sayi=mysqli_num_rows($sorgu);
		if($sayi<1){
			return 0;
		}else{
			$data=mysqli_fetch_assoc($sorgu);
            return  $data;
		}
	}
	
	function insert($data,$table){
		$sql = "insert into ".$table." ";			
		$fields = "(";
		$values = ") values (";	
		foreach($data as $key => $data){
			$fields .= "$key,";
            $dataEdit = addslashes($data);
			$values .= "'$dataEdit',";
		}			
		$sql .= substr($fields,0,-1).substr($values,0,-1).")";
		try{
            // echo $sql;
			if(!mysqli_query($this->connection,$sql))
            {
                throw new Exception("Hey");
            }
			
		}catch(Exception $e){
			echo 'DB Error'.mysqli_error($this->connection);
			return 0;
		}
		return mysqli_insert_id($this->connection);
	}	
	function update($data,$table){
		$this->clean();
		$sql = "UPDATE ".$table." SET";			
		$fields_values = "";
		foreach($data as $key => $data){
			$fields_values .= " ".$key." = '".$data."',";
		}			
		$sql .= substr($fields_values,0,-1);
		$this->createdSql = $sql;
	}	
	
	function delete($table){
		$this->clean();
		$this->createdSql = "DELETE FROM ".$table;
	}	
	function execute(){
		$this->createOperationSqlString();
		//echo $this->createdSql;
		$sorgu=mysqli_query($this->connection,$this->createdSql);// or die(header("Location:whoops.php"));
		if($sorgu == false){
			return 0;
		}
		return 1;
	}
	function replace($data,$table){
		$sql = "replace into ".$table." ";			
		$fields = "(";
		$values = ") values (";			
		foreach($data as $key => $data){
			$fields .= " $key,";
			$values .= "'$data',";
		}			
		$sql .= substr($fields,0,-1).substr($values,0,-1).")";
		try{
			mysqli_query($this->connection,$sql);
		}catch(Exception $e){
			echo 'DB Error'.mysqli_error($this->connection);
			return 0;
		}
		return 1;
	}
	function showTableColumn(){
		$this->clean();
		$sql = "Show columns ";
		$this->createdSql = $sql;
	}
}
?>

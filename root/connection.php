<?php




class Database extends Exception {
	
	
	private $host = 'localhost';
	private $username = 'ksrtc';
	private $password = 'ksrtc';
	private $db = 'ksrtc';
	private $base;

		// Defining constructor
	public function __construct() {
		$this->connect();
	}
		// Database connection
	public function connect() {

		try {
				//Crearing database source name 
			$nrja = 'mysql:host=' . $this->host . ';dbname=' . $this->db;

				//Creating object in PDO
			$this->base = new PDO($nrja, $this->username, $this->password);
			$this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->base->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			return true;
		} catch( PDOException $e ) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}

	}

	public function execute_query( $sql, $array = NULL ) {

		try {
			$statement = $this->base->prepare($sql);
			$big_data  = $statement->execute($array);

			if( $big_data ) {
				return true;
			} else {
				return false;
			}
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}

	}

	public function display( $sql, $array = NULL ) {

		try {
			$statement = $this->base->prepare($sql);
			$statement->execute( $array );

			return $big_data = $statement->fetchAll();
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}
	}



	// cust function new nr  added
	public function execute_query_return_id( $sql, $array = NULL ) {

		try {
			$statement = $this->base->prepare($sql);
			$big_data  = $statement->execute($array);

			$retunrId = $this->base->lastInsertId(); 

			if( $big_data ) {
				return $retunrId;
			} else {
				return false;
			}
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}

	}

	// end cust function
}	































	// insert in to 
function insertInToTable ($table, $xarray, $a, $retunrId = false ) {

	$query = "INSERT INTO ".$table." ( ";
	$bzo = 0;
	foreach($xarray as $k=>$value) { 
		if ( $bzo != 0 ) {
			$query = $query.", ";
		}
		$query = $query." `".$k."`";
		$bzo++;
	}
	$query = $query." ) VALUES ( ";
	$bzo = 0;
	foreach($xarray as $k=>$value) { 
		if ( $bzo != 0 ) {
			$query = $query.", ";
		}
		$query = $query." :update_item_".$bzo ;
		$xarray[':update_item_'.$bzo] = $xarray[$k];
		unset($xarray[$k]); 
		$bzo++;
	}
	$query = $query." ) "; 
	if ( $retunrId ) {
		try{
			$returnStatus = $a->execute_query_return_id($query, $xarray);
			if ( $returnStatus === false){	
				return 0;
			} else {
				return $returnStatus;	
			}
		} catch( Exception $er) {}
	} else {
		if ($a->execute_query($query, $xarray)){	
			return 1;
		} else {
			return 0;	
		}
	}

}

	// select from
function selectFromTable ($columns, $table, $where, $a ) {
	$query = "SELECT ".$columns."  FROM ".$table." WHERE " . $where ; 
	$result = $a->display($query); 
	if ($result ){	
		$ouch = 0;
		$reto = null;
		foreach ($result[0] as $key => $value) {
			if(trim($key) == trim($columns)){
				$reto = $value;
				$ouch++;
			}
		}
		if($ouch == 1 && $reto != null)
			return $reto;
		else
			return $result ;
	} else {
		return null;	
	}
}


	// update table 
function updateTable ($table, $xarray, $where, $a ) {

	$query = "UPDATE ".$table." SET ";
	$bzo = 0;
	foreach($xarray as $k=>$value) { 
		if ( $bzo != 0 ) {
			$query = $query.", ";
		}
		$query = $query . " `".$k."` = :update_item_".$bzo ;
		$xarray[':update_item_'.$bzo] = $xarray[$k];
		unset($xarray[$k]); 
		$bzo++;
	}
	$query = $query." WHERE " . $where; 
		//echo "$query";
	if ($a->execute_query($query, $xarray)){	
		return 1;
	} else {
		return 0;	
	}
}
?>
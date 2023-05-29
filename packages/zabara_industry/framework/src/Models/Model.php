<?php

namespace ZabaraIndustry\Framework\Models;

use ZabaraIndustry\Framework\DB;

class Model {

	protected DB $pdo;

	protected string $table;

	public function __construct() {
		$this->pdo = DB::getInstance();
	}

	public function where( string $key, string $compare, string $search ) {

		$str = htmlspecialchars( $key . $compare . "'" . $search . "'" );

		$sql = "SELECT * FROM $this->table WHERE $str";


		return $this->pdo->query( $sql );

	}

	public function findAll() {
		$sql = "SELECT * FROM $this->table";

		return $this->pdo->query( $sql );
	}

	public function deleteRow( $columnName, $compare, $where ) {
		$str = htmlspecialchars( $columnName . $compare . "'" . $where . "'" );

		$sql = "DELETE FROM  $this->table WHERE $str";

		return $this->pdo->query( $sql );
	}

	public function insertRow( array $data ) {
		$columName  = [];
		$valueArray = [];
		foreach ( $data as $key => $value ) {
			$columName[]  = htmlspecialchars( $columName );
			$valueArray[] = htmlspecialchars( $value );
		}

		$sql = "INSERT INTO $this->table ( $columName ) VALUE( $valueArray );";

		return $this->pdo->query( $sql );
	}

	public function updateRow( array $data, $columnName, $compare, $where ) {
		$str = '';

		foreach ( $data as $key => $value ) {
			$str .= $key . ' =' . "'" . $value . "', ";
		}

		$str .= 'WHERE ' . $columnName . $compare . "'" . $where . "'";

		$sql = "UPDATE $this->table SET $str";

		return $this->pdo->query( $sql );
	}
}
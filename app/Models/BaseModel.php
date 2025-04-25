<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{

	/**
	  * Get Data from table by id
	  *
	  * @return object Data Ex. {}
	  */
	public function getById($id)
	{
		return $this->where($this->primaryKey, $id)->first();
	}

	/**
	  * Get a particular field/row from table by its primary key eg. id
	  *
	  * @param int $id Primary Key Example - id 
	  * @param string $row coloumn name Example - name 
	  * 
	  * @return string
	  * 
	  */

	public function getRowById($id, $row)
	{
		$q = $this->where($this->primaryKey, $id)->first();
		return $q->{$row} ?? null;
	}

	/**
	  * Create/Insert the row in Table
	  * 
	  * @param array $data
	  *
	  * @return int Inserted Id
	  */
	function create($data)
	{
		$this->protect(false);
		$this->insert($data);
		return $this->getInsertID();

	}

	/**
	  * Create/Insert the multiple rows in Table
	  * 
	  * @param array $data
	  *
	  * @return int Inserted Id
	  */
	function createBatch($data)
	{
		
		$this->insertBatch($data);
		return $this->getInsertID();

	}

	/**
	  * Update the row in Table by id
	  * 
	  * @param array $data
	  *
	  * @return int Updated Id
	  */
	function updateById($id, $data)
	{
		$this->where('id', $id)->set($data)->update();
		return $id;
	}

	/**
	  * Delete the row in Table by id
	  * 
	  * @param int $id
	  *
	  * @return boolean true
	  */
	function deleteById($id)
	{
		$this->where('id', $id)->delete($this->table);
		return true;
	}


	/**
	  * Get Data Using Where condition from Table
	  * Quick Function to extract information from table
	  * 
	  * @param array $whereArg
	  * @param array $args Other conditions like order
	  *
	  * @return boolean true
	  */
	public function getByWhere($whereArg, $args = [])
	{
        $q = $this->where($whereArg);

		if(isset($args['order']))
			$q->orderBy($args['order'][0], $args['order'][1]);

		// die(var_dump($whereArg));

		return $q->findAll();
	}

	/**
	  * Predict Id of table using simple algo
	  * 
	  * @return int
	  */
	public function predictId()
	{
		return ($query = $this->where($this->table)->orderBy($this->table_key, 'desc')) && $query->countAllResults() > 0 ? $query->first()->id + 1 : 1;
	}
    
}
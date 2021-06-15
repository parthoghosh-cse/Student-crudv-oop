<?php

/**
 * Database management
 */

abstract class Database {

    private $host ='localhost';
    private $user ='root';
    private $pass ='';
    private $db ='oop';
    private $connection;



    /**
     * database connection
     */

     private function connection()
     {
        return $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db );
     }
 
    /**
     * create data
     */

     protected function create($sql)
     {
         $this -> connection() -> query($sql);
     }


    /**
     * find data
     */

    protected function find($table,$id)
    {
       return $this->connection() -> query("SELECT * FROM $table WHERE id ='$id'");
    }

    /**
     * update data
     */

    protected function update($table,$id)
    {
        $this->connection()->query();
    }


    /**
     * Delete data
     */

    protected function delete($table,$id)
    {
       $this->connection() -> query("DELETE FROM $table WHERE id ='$id'");
    }

    /**
     * all data
     */

    protected function all($table ,$order='DESC')
    {
       return $this -> connection() -> query("SELECT * FROM $table ORDER by id $order");
    }


    /**
     * where data
     */

    protected function where()
    {
        
    }

      /**
     * or where data
     */

    protected function orwhere()
    {
        
    }

    /**
     * single data show
     */

    protected function show($table,$id)
     {
      return  $this->connection() -> query("SELECT * FROM $table WHERE id='$id'");
     }
   


 }


?>
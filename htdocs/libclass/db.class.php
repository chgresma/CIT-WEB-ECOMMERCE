<?php

    /// Database class file configuration and its methods
    class DB{

        private static const DB_HOST = "localhost"; // database hostname or servername
	    private static const DB_NAME = "storename"; // the actual name of the system's database [database name]
	    private static const DB_USER = "root"; // the actual name of database user
	    private static const DB_PASSWORD = ""; // database password

	    /// SYSTEM 
	    private static const SYSTEM_NAME = "[StoreName] System";
	    private static const SYSTEM_TITLE = "[StoreName]"; // THIS CAN BE SYSTEM'S TITLE

        ///  make this private to be not access out of this class file
        private static function connect(){ //this will connect to the phpmyadmin database
            try{
                $database = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER, self::DB_PASSWORD);
                $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e){
                die($e);
            }
    
            return $database;
        }

        /// fetch data from selected table
        public static function fetchData(){
            $con = self::connect();
            
        }

        /// fetch data as array from selected table
        public static function fetchDataAsArray(){

        }

        /// insert data to selected table
        public static function insertData(){

        }

        /// update selected table from table
        public static function updateData(){

        }

        /// delete selected data from table
        public static function deleteData(){

        }
    }
?>
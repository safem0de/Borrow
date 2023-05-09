<?php
class Borrow
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getQueryData($string_query)
    {
        /* 
        example : "SELECT TOP(10) * FROM [STT_EXPORT].[dbo].[MODEL_MASTER]" 
        */

        $this->db->query($string_query);
            $results = $this->db->resultSet();
            return $results;
    }

}
<?php
public function get()
    {               
        $this->dbLink = new \PDO('mysql:host=localhost;dbname=test_db', 'root', 'pass1312');

        print_r($this->dbLink); // - always empty

        $res = $this->dbLink('SELECT * FROM product')->fetchAll(PDO::FETCH_ASSOC);  

        print_r($res); // - always empty
    }

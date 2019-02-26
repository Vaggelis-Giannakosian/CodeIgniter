<?php
/**
 * Created by PhpStorm.
 * User: Vagelis
 * Date: 26-Feb-19
 * Time: 5:18 PM
 */

class Sample_model extends CI_Model
{

    public function crudCreate($name){
        $query = 'CREATE TABLE '.$name.'(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                firstname VARCHAR (30) NOT NULL,
                lastname VARCHAR (30) NOT NULL,
                email VARCHAR (50))';
        return $this->db->query($query);
    }
}
<?php 

require_once __DIR__ . '/DbObject.php';

/**
 * La classe DbManager doit pouvoir gérer n'importe quelle table de votre base de donnée
 * 
 * Complétez les fonctions suivantes pour les faires fonctionner
 */

class DbManager {
    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    // return l'id inseré
    function insert(string $sql, array $data) {
        $this -> db -> prepare($sql)
        -> execute($data);
        return $this ->db -> lastInsertId();
    }

    function insert_advanced(DbObject $dbObj) {

    }
    
    function select(string $sql, array $data, string $className) {
        echo '<div><h2>select</h2>';
        $req = $this->db->prepare($sql);
        $req->execute($data);
        $req->setFetchMode(PDO::FETCH_CLASS, 'ContactForm');
        return $req->fetchAll();
    }

    function getById(string $tableName, $id, string $className) {

    }

    function getById_advanced($id, string $className) {

    }

    function getBy(string $tableName, string $column, $value, string $className) {

    }

    function getBy_advanced(string $column, $value, string $className) {

    }

    function removeById(string $tableName, $id) {

    }

    function update(string $tableName, array $data) {

    }

    function update_advanced(DbObject $dbObj) {
        
    }

}
<?php
public function create ($table, $fields) {} // retourne un id
public function read ($table, $id) {} // retourne un tableau associatif de l'enregistrement
public function update ($table, $id, $fields) {} // retourne un booléen
public function delete ($table, $id) {} // retourne un booléen
public function find ($table, $params = array(
 'WHERE' => '1',
 'ORDER BY' => 'id ASC',
 'LIMIT' => ''
)) {} 
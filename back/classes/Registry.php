<?php
// Класс хранилища
Class Registry {
    private $vars = array();
     
    // запись данных
     function set($key, $var) {
        if (isset($this->vars[$key]) == true) {
            throw new Exception('Unable to set var `' . $key . '`. Already set.');
        }
        $this->vars[$key] = $var;
        return true;
    }
 
    // получение данных
    function get($key) {
        if (isset($this->vars[$key]) == false) {
            return null;
        }
        return $this->vars[$key];
    }
 
    // удаление данных
    function remove($var) {
        unset($this->vars[$var]);
    }
}
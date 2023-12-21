<?php
// модель
Class ModelUsers Extends ModelBase {
     
    public $id;
    public $name;
    public $last_name;
     
    public function fieldsTable(){
        return array(
            'id' => 'Id',
            'first_name' => 'First name',
            'last_name' => 'Last name'
        );
    }
     
}
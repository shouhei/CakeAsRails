<?php

App::uses('First', 'Vendor/AsRails');
App::uses('All', 'Vendor/AsRails');

class R_Model extends Object {

    public $result;

    function __construct($result) {
        $this->result = $result;
    }

    public function rebuild() {
        $depth = $this->array_depth($this->result);
        if($depth === 0){
            return array();
        }
        return $depth === 1 || $depth === 2 ? First::rebuild($this->result) : All::rebuild($this->result);
    }

    function array_depth($a, $c = 0) {
        if (is_array($a) && count($a)) {
            ++$c;
            $_c = array($c);
            foreach ($a as $v) {
                if (is_array($v) && count($v)) {
                    $_c[] = $this->array_depth($v, $c);
                }
            }
            return max($_c);
        }
        return $c;
    }

}

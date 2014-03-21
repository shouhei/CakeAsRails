<?php

class First extends Model {

    static function rebuild($result) {
        $data = array();
        foreach ($result as $val) {
            foreach($val as $key=>$str){
                $data[$key]=$str;
            }
        }
        return $data;
    }

}

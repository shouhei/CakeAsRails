<?php

class All extends Model {

    static function rebuild($result) {
        $data = array();
        $counter = 0;
        foreach ($result as $value) {
            $data[$counter] = array();
            foreach ($value as $val) {
                foreach ($val as $record => $str) {
                    $data[$counter][$record] = $str;
                }
            }
            $counter++;
        }
        return $data;
    }

}

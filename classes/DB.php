<?php

class DB {
    private static $data = [
        [
            "name" => "jonh",
            "age" => 18,
            "gender" => "male"
        ],[
            "name" => "lucy",
            "age" => 17,
            "gender" => "female"
        ]
    ];

    public static function getAllStudents() {
        return self::$data;
    }
}

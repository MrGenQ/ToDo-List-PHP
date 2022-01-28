<?php
namespace ToDo;


class Validation{
    public static $validationErrors = [];
    public static function validate($data){
        if(!preg_match('/^[A-Za-z0-9]{3,255}$/', $data['subject'])){
            self::$validationErrors[]="Too few or too many characters";
        }
        if(empty($data['priority'])){
            self::$validationErrors[]="Select Priority";
        }
        if(empty($data['dueDate'])){
            self::$validationErrors[]="Didn't select due date";
        }

        return self::$validationErrors;
    }


}
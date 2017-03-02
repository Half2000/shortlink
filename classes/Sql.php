<?php

class Sql {

    public function __construct() {
        $DB = new Db();
    }

    private function checkInt($val) {
        if (is_int($val))
            return $val;
        return 0;
    }

    public static function getAllLinks() {
        $sql = "select * from `url`";
        return Db::getRow($sql);
    }
    
    public static function checkLink($link) {
        $sql = "select count(*) as 'cnt' from `url`
            where `original` = '$link'";
        return Db::getRow($sql);
    }
    
    public static function getClick($small) {
        $sql = "select `click` from `url`
            where `small` = '$small'";
        return Db::getRow($sql);
    }    
    
    public static function addClick($small, $click) {
        $sql = "update `url`
            set `click` = $click
            where `small` = '$small'";
        return Db::execute($sql);
    }
    
    public static function addLink($orig, $small) {
        $sql = "insert into `url`
            (original, small)
            VALUES ('$orig', '$small')";
        return Db::execute($sql);
    }
    
     public static function checkDuplicate($small) {
        $sql = "select count(*) as 'cnt' from `url`
            where `small` = '$link'";
        return Db::getRow($sql);
    }
    
    public static function getFulllink($small) {
        $sql = "select `original` from `url`
            where `small` = '$small'";
        return Db::getRow($sql);
    }


}

<?php

class Db {

    protected static $connect;
    protected static $result;
    protected static $sql;

    public function __construct() {
        if (!self::$connect) {
            self::$connect = $this->dbConnect();
        }
        if (!self::$connect) {
            echo "Ошибка подключения к БД.<br />";
            die(print_r(mysql_connect_error(), true));
        }
    }

    //Подключение к БД
    protected function dbConnect() {
        mysql_connect(DB_SERVER, DB_USER, DB_PASSWD);
        return mysql_select_db(DB_NAME);
    }

    //Выполнение запроса
    protected static function execSql() {
//        if (!self::$connect) exit ('ok');
        if (!self::$connect) {
            echo "Ошибка подключения к БД.<br />";
            die(print_r(mysql_error(), true));
        }
        self::$result = mysql_query(self::$sql) or die(print_r(mysql_error(), true));
    }

    //Валидация запроса
    protected static function validate($str) {
        if (is_array($str)) {
            while (list($key) = each($str)) {
                $str[$key] = $this->do_shield($str[$key]);
            }

            return $str;
        }
        if (is_null($str))
            return NULL;
        else
            return preg_replace("/'/", "''", $str);
    }

    //Получение таблицы данных
    public static function getRow($sql) {
        self::$sql = $sql;
        self::execSql();
        while ($row = mysql_fetch_array(self::$result, MYSQL_ASSOC)) {
            $result[] = $row;
        }
        mysql_free_result(self::$result);

        return $result;
    }

    //Получение единичного значения
    public static function getValue($sql) {
        self::$sql = $sql;
        self::execSql();
        if (sqlsrv_fetch(self::$result) === false) {
            die(print_r(mysql_error(), true));
        }
        $result = mysql_get_field(self::$result, 0);
        mysql_free_result(self::$result);

        return $result;
    }

    //Выполнение запроса без возврата данных
    public static function execute($sql) {
//        self::$sql = self::validate($sql);
        self::$sql = $sql;
        self::execSql();
    }

}


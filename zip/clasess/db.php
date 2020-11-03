<?php

// For Localhost
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'devtmp1abmweb_user');
define('DB_PASSWORD', 'P%X*)p&NY5bI');
define('DB_NAME', 'devtmp1abmweb_epsco_en');
//date_default_timezone_set('Africa/Cairo');

class db
{
    // Localhost
    private $host = DB_HOSTNAME;
    private $db_user = DB_USERNAME;
    private $db_pass = DB_PASSWORD;
    private $db_name = DB_NAME;
    public static $connection;

    public function con()
    {
        if (!self::$connection) {
            // Connect with Localhost
            self::$connection = mysqli_connect($this->host, $this->db_user, $this->db_pass, $this->db_name);
            mysqli_query(self::$connection, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8',character_set_server = 'utf8'");
        }

        if (!self::$connection) {
            /*
            * The mysqli_connect_error() function returns the error has ocurred with Database connection.
            * throw new Exception(); it generates a fatal error.. remember ?
            */
            throw new Exception('Connection failed: '.mysqli_connect_error());
        }

        return self::$connection;
    }

    public function query($sql)
    {
        $con = $this->con();
        $res = mysqli_query($con, $sql);

        if (mysqli_error($con)) {
            throw new Exception('Query error:'.mysqli_error($con));
        }

        return $res;
    }

    public static function count($sql)
    {
        $res = new static();
        $c = $res->query($sql)->num_rows;

        return $c;
    }

    public function fetch($sql)
    {
        $res = $this->query($sql);

        $data = [];

        if ($res) {
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $data[] = $row;
                    /*
                        $a = new static;
                        foreach ($row as $k => $v) {
                            $a->$k = $v;
                        }
                        $data[] = $a;
                     */
                }
            }
        }

        return $data;
    }

    public function one($sql)
    {
        $res = $this->fetch($sql);
        if ($res) {
            return $res[0];
        } else {
            return [];
        }
    }

    public function last_inserted_id()
    {
        return mysqli_insert_id($this->con());
    }
}

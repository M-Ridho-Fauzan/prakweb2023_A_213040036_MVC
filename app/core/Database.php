<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh; // database handler
    private $stmt; // statement

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $option = [
            PDO::ATTR_PERSISTENT => true, // agar connection tetap hidup
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // menampilkan error
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * Summary of query
     * @param mixed $query
     * @return void
     */
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    /**
     * Summary of bind
     * @param mixed $param
     * @param mixed $value
     * @param mixed $type
     * @return void
     */
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    /**
     * Summary of execute
     * @return void
     */
    public function execute()
    {
        $this->stmt->execute();
    }

    /**
     * Jika data yang di kembalikan lebih dari 1
     * @return mixed
     */
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Jika data yang di kembalikan hanya 1
     * @return mixed
     */
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Summary of rowCount
     * @return mixed
     */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}

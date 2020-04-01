<?php
    
    class SQLResponse
    {
        public $lines, $affectedRows;
        function __construct($lines, $affectedRows)
        {
            $this->lines = $lines;
            $this->affectedRows = $affectedRows;
        }
        public function getLines(){return $this->lines;}
        public function getAffectedRows(){return $this->affectedRows;}
    }

    class MySQL
    {
        private $host, $user, $passwd, $database, $connection, $returnTypeSql;
        public function __construct($host, $user, $passwd, $database)
        {
            $this->host = $host;
            $this->user = $user;
            $this->passwd = $passwd;
            $this->database = $database;
            $this->returnTypeSql = 1;

            $this->connect();
        }

        public function setArrayTypeReturnSql($type)
        {
            $this->returnTypeSql = $type;
        }

        public function connect()
        {
            $this->connection = new \mysqli($this->host, $this->user, $this->passwd, $this->database);
            if($this->connection->error === null)
            {
                throw new \Exception("Error trying connect to database");
            }
            $this->connection->set_charset("utf8");
        }

        public function close()
        {
            try {
                $this->connection->close();
            } catch (\Exception $erro) {
            }
        }
        public function __destruct()
        {
            try {
                $this->close();
            } catch (\Throwable $th) {
            }
        }

        public function query($sql, $types, $params)
        {
            $smtp = $this->connection->prepare($sql);
            if($smtp !== false)
            {
                @$smtp->bind_param($types, ...$params);
                $status = $smtp->execute();
                $result = $smtp->get_result();

                $affectedRows = $smtp->affected_rows;
                $lines = [];
                if(!$status)
                {
                    throw new \Exception("Error executing the sql query {$sql} error : {$smtp->error}\n");
                }
                else if($result !== false)
                {
                    $lines = $result->fetch_all($this->returnTypeSql);
                }
                $smtp->close();

                return new SQLResponse($lines, $affectedRows);
                
            }
            else
            {
                throw new \Exception("Error executing sql query {$sql} verify your sql syntax\n");
            }
        }
    }


?>
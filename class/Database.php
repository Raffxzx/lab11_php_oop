<?php
class Database extends mysqli {

    public function __construct() {
        parent::__construct(
            DB_HOST,
            DB_USER,
            DB_PASS,
            DB_NAME
        );

        if ($this->connect_error) {
            die("Connection failed: " . $this->connect_error);
        }
    }
}

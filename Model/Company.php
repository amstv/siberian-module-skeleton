<?php

class Job_Model_Company extends Core_Model_Default {

    public function __construct($params = array()) {
        parent::__construct($params);
        $this->_db_table = 'Job_Model_Db_Table_Company';
        return $this;
    }
}
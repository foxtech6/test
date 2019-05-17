<?php

class Update201905161250 extends \Foxtech\Kernel\AbstractUpdate
{
    public function run(): void
    {
        $this->db->query(
            "CREATE TABLE `markers` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `address` varchar(80) NOT NULL,
            `lat` float(10, 6) NOT NULL,
            `lng` float(10, 6) NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
        );
    }
}

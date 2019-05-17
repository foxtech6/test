<?php

namespace App;

use Foxtech\Kernel\AbstractModel;

/**
 * Class MainModel
 *
 * @author Mykhailo Bavdys <bavdysmyh@ukr.net>
 * @since 17.05.2019
 */
class MainModel extends AbstractModel
{
    /**
     * Get all markets from db
     *
     * @return array Return markers
     */
    public function getMarkers(): array
    {
        return $this->db->query("select * from `markers`")->fetchAll();
    }

    /**
     * List addresses all markets from db
     *
     * @return array Return addresses
     */
    public function getAddresses(): array
    {
        return $this->db->query("select address from `markers`")->fetchAll();
    }
}

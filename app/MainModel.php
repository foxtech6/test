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

    /**
     * Add marker to db
     *
     * @param string $name Address marker
     * @param float  $lat  Lat marker
     * @param float  $lng  Lng marker
     *
     * @return bool True if success and false if fail
     */
    public function addMarker(string $name, float $lat, float $lng): bool
    {
        $query = $this->db->prepare("insert into `markers` (`address`, `lat`, `lng`) values (?, ?, ?)");

        $query->bindParam(1, $name);
        $query->bindParam(2, $lat);
        $query->bindParam(3, $lng);

        return $query->execute();
    }
}

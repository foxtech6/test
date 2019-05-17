<?php

namespace App\Controllers;

use App\MainModel;
use Foxtech\Kernel\AbstractController;
use Foxtech\Kernel\Exceptions\NotFoundException;

/**
 * Class MainController
 *
 * @author Mykhailo Bavdys <bavdysmyh@ukr.net>
 * @since 17.05.2019
 */
class MainController extends AbstractController
{
    /**
     * Main page
     *
     * @throws NotFoundException
     */
    public function index(): void
    {
        $mainModel = new MainModel();

        $lan = 0;
        $lng = 0;
        $result = [];

        foreach ($mainModel->getMarkers() as $number => $marker) {
            $lan += $marker['lat'];
            $lng += $marker['lng'];

            $result[] = [
                $marker['address'],
                $marker['lat'],
                $marker['lng'],
                $number,
            ];
        }

        $countMarkers = count($result);

        $this->render('main', [
            'markers' => $result,
            'lan' => round($lan/$countMarkers, 2),
            'lng' => round($lng/$countMarkers, 2),
        ]);
    }

    /**
     * List all addresses
     *
     * @throws NotFoundException
     */
    public function listAddresses()
    {
        $mainModel = new MainModel();
        $result = [];

        foreach ($mainModel->getAddresses() as $address) {
            $result[] = $address['address'];
        }

        $this->render('list', [
            'addresses' => $result
        ]);
    }
}

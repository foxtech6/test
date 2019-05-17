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
        $this->render('main');
    }
}

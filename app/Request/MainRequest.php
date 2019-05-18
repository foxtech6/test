<?php

namespace App\Request;

use Foxtech\Kernel\AbstractRequest;

/**
 * Class MainRequest
 *
 * @author Mykhailo Bavdys <bavdysmyh@ukr.net>
 * @since  18.05.2019
 */
class MainRequest extends AbstractRequest
{
    /**
     * List rules for params
     *
     * @return array Rules for params
     */
    protected function rules(): array
    {
        return [
            'lan'  => 'required|float|max:4|min:2',
            'lng'  => 'required|float|max:16|min:2',
            'name' => 'required|float|max:80|min:5',
        ];
    }
}
<?php

namespace App\Common\Components;

class MenuData {

    public static $_data = [
        'notice-dome' => [
            'title' => '公告管理',
            'url' => [
                'href' => '#'
            ],
            'current' => false,
            'enabled' => false,
            'prefix' => '<i class="fa fa-calendar"></i>',
            'maps' => [],
            'items' => [
                'category' => [
                    'title' => '分类管理',
                    'url' => [
                        'href' => '/admin/notice-dome/index'
                    ],
                    'current' => false,
                    'enabled' => false,
                    'prefix' => '',
                    'maps' => ['/admin/notice-dome/index', '/admin/notice-dome/create', '/admin/notice-dome/update/*'],
                ]
            ]
        ],
    ];

    public static function getData()
    {
        foreach (static::$_data as $dataKey => $data) {
            if (empty($data['items'])) {
                if (!empty($data['maps']) && static::checkUrl($data['maps'])) {
                    static::$_data[$dataKey]['current'] = true;
                    static::$_data[$dataKey]['enabled'] = true;
                    break;
                }
            } else {
                foreach ($data['items'] as $itemkey => $items) {
                    if (!empty($items['maps']) && static::checkUrl($items['maps'])) {
                        static::$_data[$dataKey]['current'] = true;
                        static::$_data[$dataKey]['enabled'] = true;
                        static::$_data[$dataKey]['items'][$itemkey]['current'] = true;
                        static::$_data[$dataKey]['items'][$itemkey]['enabled'] = true;
                        break;
                    }
                }
            }
        }
        return static::$_data;
    }

    protected static function checkUrl($maps)
    {
        foreach ($maps as $map) {
            if (\Request::is(ltrim($map, '/'))) {
                return true;
            }
        }
        return false;
    }

}

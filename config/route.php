<?php

use Core\Core;

return [
    /*
     * |-----------------------------------
     * |
     * | 是否加载默认路由配置
     * |-----------------------------------
     */
    'load'      => true,

    /*
     * |-----------------------------------
     * |
     * | 拓展路由命名空间
     * |-----------------------------------
     */
    'namespace' => 'App\Http\Controllers',


    /*
     * |-----------------------------------
     * |
     * | passport作用域配置
     * |-----------------------------------
     */
    'scopes'    => [],

    /*
     * |-----------------------------------
     * |
     * | 路由配置
     * | [
     * |    'middleware' => [],
     * |    'routes'     => [
     * |        [method, path, action, name or resource method],
     * |    ],
     * | ]
     * | 路由规则 [ method , path , Controller@action , name or resource method , ]
     * |-----------------------------------
     */
    'routes'    => [
        [
            'middleware' => [
                ''
            ],
            'routes'     => [
                [Core::GET, 'index', 'Admin\IndexController@index', 'index'],
            ],
        ]
    ],
];

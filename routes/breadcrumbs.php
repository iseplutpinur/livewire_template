<?php

/**
 * @Author: Bayu Rifki Alghifari
 * @Date:   2021-12-29 21:25:32
 * @Last Modified by:   Bayu Rifki Alghifari
 * @Last Modified time: 2022-02-09 17:50:50
 */


use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', url('/home'));
});

// Setting Menu
Breadcrumbs::for('admin/setting/menu', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', url('/admin'));
    $trail->push('Setting');
    $trail->push('Menu');
});

// Setting Role
Breadcrumbs::for('admin/setting/role', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', url('/admin'));
    $trail->push('Setting');
    $trail->push('Role');
});

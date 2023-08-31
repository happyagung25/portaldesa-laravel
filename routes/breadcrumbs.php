<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Home
Breadcrumbs::for('desa', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Desa');
});

Breadcrumbs::for('identitas', function (BreadcrumbTrail $trail) {
    $trail->parent('desa');
    $trail->push('Identitas Desa', url('desa/identitas'));
});

// Wilayah
Breadcrumbs::for('wilayah', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Wilayah');
});

Breadcrumbs::for('cluster', function (BreadcrumbTrail $trail) {
    $trail->parent('wilayah');
    $trail->push('Cluster', url('desa/wilayah'));
});

Breadcrumbs::for('rw', function (BreadcrumbTrail $trail) {
    $trail->parent('wilayah');
    $trail->push('RW', url('wilayah/rw'));
});

Breadcrumbs::for('rt', function (BreadcrumbTrail $trail) {
    $trail->parent('wilayah');
    $trail->push('RT', url('wilayah/rt'));
});

// Dashboard > Kependudukan
Breadcrumbs::for('adminduk', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Kependudukan');
});

Breadcrumbs::for('keluarga', function (BreadcrumbTrail $trail) {
    $trail->parent('adminduk');
    $trail->push('Keluarga', url('adminduk/keluarga'));
});

Breadcrumbs::for('penduduk', function (BreadcrumbTrail $trail) {
    $trail->parent('adminduk');
    $trail->push('Penduduk', url('adminduk/penduduk'));
});

// Dashboard > Webmin
Breadcrumbs::for('webmin', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Webmin');
});

Breadcrumbs::for('article', function (BreadcrumbTrail $trail) {
    $trail->parent('webmin');
    $trail->push('Artikel', url('posts'));
});

Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('webmin');
    $trail->push('Kategori', url('webmin/categories'));
});

// Dashboard > Setting
Breadcrumbs::for('setting', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Setting');
});

Breadcrumbs::for('application', function (BreadcrumbTrail $trail) {
    $trail->parent('setting');
    $trail->push('Aplikasi', url('setting/application'));
});

Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('setting');
    $trail->push('Pengguna', url('setting/users'));
});

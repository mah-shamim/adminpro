<?php
namespace Adminlte\Config;

// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();

$routes->add('/adminlte', '\Adminlte\Controllers\Adminlte');

$routes->group('adminlte', function ($routes) {

    $routes->add('serverside_datatables_data', '\Adminlte\Controllers\Adminlte::serverside_datatables_data');
    
    $routes->add('form_validation', '\Adminlte\Controllers\Adminlte::form_validation');
    
    $routes->add('file_uploads', '\Adminlte\Controllers\Adminlte::file_uploads');
    
    // SIMPLE FILE UPLOAD EXAMPLE ROUTES
    $routes->add('multi_file_uploads_files', '\Adminlte\Controllers\Adminlte::multi_file_uploads_files');
   
    // MULTI FILES UPLOAD EXAMPLE ROUTES
    $routes->add('ci_examples/multi_file_uploads', '\Adminlte\Controllers\Adminlte::multi_file_uploads');
    
    $routes->post('ci_examples/multi_file_uploads', '\Adminlte\Controllers\Adminlte::multi_file_uploads');
    
    
    $routes->add('ci_examples/multi_file_uploads_delete/(:any)', '\Adminlte\Controllers\Adminlte::multi_file_uploads_delete/$1');
    
    
    $routes->add('(:any)', '\Adminlte\Controllers\Adminlte');

});

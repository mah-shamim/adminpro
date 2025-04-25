<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class AdminBaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [
        'basic',
        'form',
        'url',
        'cookie',
        'module'
    ];
    
    public $title = 'AdminPro';
    public $menu = 'dashboard';
    public $submenu = '';
    
    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        
        $this->session = \Config\Services::session();
        // custom function to set default view data for all views
        setDefaultViewData();
        
        $this->setDefaultPageData();
        service('request')->setLocale(getUserlang());

    }

    public function setDefaultPageData()
    {
        setPageData([
            'title' => $this->title,
            'menu' => $this->menu,
            'submenu' => $this->submenu,
        ]);
    }

    public function updatePageData(array $newData)
    {
        $defaultData = [
            'title' => $this->title,
            'menu' => $this->menu,
            'submenu' => $this->submenu,
        ];
        
        setPageData(array_merge($defaultData, $newData));
    }

    public function permissionCheck($key)
    {
        if( \is_logged() && !hasPermissions($key) )
            $this->response->redirect('/errors/denied');
    }
}

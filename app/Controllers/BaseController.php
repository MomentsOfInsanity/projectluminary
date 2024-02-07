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
abstract class BaseController extends Controller
{
    protected $_layout = 'layouts/admin/layout';
    protected $valentine_layout = 'layouts/admin/valentine';

    protected $_layoutData = array();
    protected $_viewData = array();
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
    protected $helpers = ['form'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    function addViewData($name,$value = NULL) {
        if (is_array($name)) {
            $this->_viewData = $name;
        }
        else {
            $this->_viewData[$name] = $value;
        }
    }

    function template($view, $data = NULL) {
        if (!empty($data)) {
            $viewData = array_merge($data,$this->_viewData);
        }
        else {
            $data = array();
            $viewData = array_merge($data,$this->_viewData);
        }
        $content_for_layout = view($view,$viewData);
        if (!empty($this->_layout)) {
            $this->_layoutData['content_for_layout'] = $content_for_layout;
           // $this->_layoutData['user_logged_in'] = $this->session->userdata('loggedin');
            // $this->_layoutData['user'] = $this->getUser();
            //$this->_layoutData['spoofed'] = $this->session->userdata('spoofed');
            //$this->_layoutData['javascripts'] = $this->_javascripts;
            //$this->_layoutData['cssfiles'] = $this->_cssfiles;
            /*$this->_layoutData['title_for_layout'] = $this->_title;
            if (!empty($this->_bodyClasses)) {
                $this->_layoutData['bodyClasses'] = $this->_bodyClasses;
            }
            $popupmessage = $this->session->userdata('popupmessage');
            if (!empty($popupmessage) && !$this->_isXHTTPRequest) {
                $this->_layoutData['popupmessage'] = $popupmessage;
                $this->session->unset_userdata('popupmessage');
            }
            $modalpopupmessage = $this->session->userdata('modalpopupmessage');
            if (!empty($modalpopupmessage) && !$this->_isXHTTPRequest) {
                $this->_layoutData['modalpopupmessage'] = $modalpopupmessage;
                $this->session->unset_userdata('modalpopupmessage');
            }
            $this->_layoutData['current_module'] = $this->uri->segment(1,'default');
            $this->_layoutData['current_section'] = $this->uri->rsegment(1);
            $this->_layoutData['current_action'] = $this->uri->rsegment(2);*/
            $content = view($this->_layout,$this->_layoutData);
        }
        else {
            $content = $content_for_layout;
        }

        
            echo $content;
        
        
        

    }


    function templatevalentine($view, $data = NULL) {
        if (!empty($data)) {
            $viewData = array_merge($data,$this->_viewData);
        }
        else {
            $data = array();
            $viewData = array_merge($data,$this->_viewData);
        }
        $content_for_layout = view($view,$viewData);
        if (!empty($this->valentine_layout)) {
            $this->_layoutData['content_for_layout'] = $content_for_layout;
           // $this->_layoutData['user_logged_in'] = $this->session->userdata('loggedin');
            // $this->_layoutData['user'] = $this->getUser();
            //$this->_layoutData['spoofed'] = $this->session->userdata('spoofed');
            //$this->_layoutData['javascripts'] = $this->_javascripts;
            //$this->_layoutData['cssfiles'] = $this->_cssfiles;
            /*$this->_layoutData['title_for_layout'] = $this->_title;
            if (!empty($this->_bodyClasses)) {
                $this->_layoutData['bodyClasses'] = $this->_bodyClasses;
            }
            $popupmessage = $this->session->userdata('popupmessage');
            if (!empty($popupmessage) && !$this->_isXHTTPRequest) {
                $this->_layoutData['popupmessage'] = $popupmessage;
                $this->session->unset_userdata('popupmessage');
            }
            $modalpopupmessage = $this->session->userdata('modalpopupmessage');
            if (!empty($modalpopupmessage) && !$this->_isXHTTPRequest) {
                $this->_layoutData['modalpopupmessage'] = $modalpopupmessage;
                $this->session->unset_userdata('modalpopupmessage');
            }
            $this->_layoutData['current_module'] = $this->uri->segment(1,'default');
            $this->_layoutData['current_section'] = $this->uri->rsegment(1);
            $this->_layoutData['current_action'] = $this->uri->rsegment(2);*/
            $content = view($this->valentine_layout,$this->_layoutData);
        }
        else {
            $content = $content_for_layout;
        }

        
            echo $content;
        
        
        

    }

    

    

    
}

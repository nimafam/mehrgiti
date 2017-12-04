<?php
/**
 *
 *  Project: Streatart Website
 *  Author: Nima Feizy Mirkhani <nimafaizy@gnmail.com>
 *
 *  Copyright (c) 2017.
 *  Since: 1.0
 *
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Aboutus
 */
class Aboutus extends CI_Controller {

    /**
     * Aboutus constructor.
     */
    public function __construct()
    {
        parent::__construct();

        //This load url helper
        $this->load->helper('url');

        //This load session library
        $this->load->library('session');

        $this->_init();
    }

    /**
     *
     */
    private function _init(){
        $this->output->set_template('default');

        $this->load->js('assets/themes/default/js/classie.js');
        $this->load->css('assets/themes/default/hero_files/fixed-animated-header.css');
    }

    /**
     *
     */
    public function index(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('general/aboutus');
    }

}
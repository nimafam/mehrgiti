<?php
/**
 *
 *  Project: Loopetoo Website
 *  Author: Nima Feizy Mirkhani <nimafaizy@gnmail.com>
 *
 *  Copyright (c) 2017.
 *  Since: 1.0
 *
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends  CI_Controller {

    /**
     * Loopetoo constructor.
     */
    public function __construct()
    {
        parent::__construct();

        //This load url helper
        $this->load->helper(array('url', 'text'));

        //This load session library
        $this->load->library('session');

        $this->_init();
    }


    private function _init(){
        $this->output->set_template('public');

        //Load js file for this template
        $this->load->js('assets/themes/default/js/classie.js');

        //Load CSS file for this template
        $this->load->css('assets/themes/default/hero_files/fixed-animated-header.css');
        $this->load->css('assets/themes/default/css/bootstrap.css');
        $this->load->css('assets/themes/default/css/bootstrap-responsive.css');
        $this->load->css('assets/themes/default/css/bootstrap-grid.css');
        $this->load->css('assets/themes/default/css/general.css');
        $this->load->css('assets/themes/default/css/font-awesome.min.css');
        $this->load->css('assets/themes/default/css/fontiran.min.css');
        $this->load->css('assets/themes/default/css/fontello.css');

    }

    /**
     *
     */
    public function index(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('general/news');
    }

}
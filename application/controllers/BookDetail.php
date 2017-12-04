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
class BookDetail extends CI_Controller {

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
        $this->output->set_template('book-detail');

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
    public function fox(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/fox');
    }

    public function donkey(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/donkey');
    }
    public function rabbit(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/rabbit');
    }
    public function rooster(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/rooster');
    }
    public function bee(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/bee');
    }
    public function crow(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/crow');
    }
    public function cat(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/cat');
    }
    public function deer(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/deer');
    }
    public function octapus(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/octopus');
    }
    public function baby_boy(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/baby-boy');
    }
    public function baby_girl(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/baby-girl');
    }
    public function loopetoo_girl(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/loopetoo-girl');
    }
    public function loopetoo_boy(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/loopetoo-boy');
    }
    public function you(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/you');
    }
    public function family(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/family');
    }
    public function friend(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/friend');
    }
    public function game(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/game');
    }
    public function life(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/life');
    }
    public function love(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/love');
    }
    public function concern(){
        $this->output->set_common_meta('Loopetoo', 'Loopetoo Meta Description' ,'Loopetoo' );
        $this->load->view('issues/book-detail/concern');
    }

}
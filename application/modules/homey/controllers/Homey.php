<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homey extends MY_Controller {
	public function __construct(){
        parent::__construct();
		// $this->load->module('app');
		// $this->app->cek_permit();
    }

	public function index()
	{
		$this->template->title('Homey Dashboard');
		$this->template->build('homey/homey_view');
	}
 

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
        $this->load->model('Main');  
        $this->load->model('Tour');  
    }

	public function index()
	{	
		$data = array(
		    'destination' => $this->Main->get_all_destination(),
		    'type'        => $this->Main->get_all_adv_type(),
		    'slider'      => $this->Main->get_all_home_slider(),
		    'wording'     => $this->Main->get_slider_wording(),
		    'featured'    => $this->Tour->get_featured_tour()
		);

		$this->load->view('home',$data);
	}

	public function listing() {

		$cat = $this->uri->segment(3);

		switch ($cat) {

			case 'rafting':
				$list = $this->Tour->get_rafting_list();
				$cat = 'White Water Rafting';
				break;
			
			default:
				# code...
				break;
		}

		$data = array(

		   'cat' => $cat,
		   'list' => $list
 		);

		$this->load->view('list',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
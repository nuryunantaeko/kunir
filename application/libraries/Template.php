<?php 

class Template {
    public $template_data = array();
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();

    }

    public function load($templateName, $data = null)
    {
        $this->set('content',
            $this->ci->load->view($templateName, $data, true));
        $this->ci->load->view('templates/__partials/header');
        $this->ci->load->view('templates/__partials/sidebar');
        $this->ci->load->view('templates/__partials/topbar');
        $this->ci->load->view('templates/__partials/content',
            $this->template_data);
        $this->ci->load->view('templates/__partials/footer');

    }

    public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }
}
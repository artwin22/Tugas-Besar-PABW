<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view web/home.php
        $this->load->view("web/home");
	}
  public function main()
	{
        // load view web/main.php
        $this->load->view("web/main");
	}
  public function login()
  {
        // load view web/login.php
        $this->load->view("web/login");
  }
  public function wisata()
	{
        // load view web/wisata.php
        $this->load->view("web/wisata");
	}
  public function developer()
	{
        // load view web/developer.php
        $this->load->view("web/developer");
	}
}

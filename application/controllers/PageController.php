<?php
defined("BASEPATH") OR exit ("No direct script access allowed.");
class PageController extends CI_Controller{
    public function index(){
        echo "I am index";
    }
    public function about ()
    {
        $this->load->view("about.php"); 
    }
}
?>
<?php
defined("BASEPATH") or exit("No direct script access allowed.");
class PageController extends CI_Controller
{
    public function index()
    {
        echo "I am index";
    }
    public function about()
    {
        $this->load->view("about.php");
    }
    public function home()
    {
        echo "hello";
    }
    public function blog($blog_url = "")
    { 
        echo $blog_url;
        $this->load->view('blogview');
    }
}
?>
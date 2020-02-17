<?php
class Pages extends Controller {
    public function __construct(){

    }
    public function index(){
    if(isLoggedIn()){
        redirect('posts');
    }


    $data = [
        'title' => 'CyberWorld',
        'description' => 'Simple social network built by Jimmy'
    ];

    $this->view('pages/index', $data);
    }       

    public function about(){
  
    $data = [
        'title' => 'About',
        'description' => 'App to share posts with other users'
    ];
    $this->view('pages/about', $data);
    }
}
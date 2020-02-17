<?php
    class Girls extends Controller {
        public function __construct(){

            
            // if(!isset($_SESSION['user_id'])){ //if user is not logged in
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->girlModel = $this->model('Girl');
        }


        public function index(){
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }

            $servername = "localhost";
            $username = "jimmy";
            $password = "121192";
            $dbname = "shareposts";

            // Check connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);


            $no_of_records_per_page = 50;

            $offset = ($pageno-1) * $no_of_records_per_page; 

            $total_pages_sql = "SELECT COUNT(*) FROM girl";
            $result = mysqli_query($conn,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            //Get Posts

            $girls = $this->girlModel->getGirls($offset, $no_of_records_per_page);

            $data = [
                'girls' => $girls,
                'total_pages' => $total_pages,
                'current_page' => $pageno
            ];

    
            $this->view('girls/index' , $data);
        }


    }
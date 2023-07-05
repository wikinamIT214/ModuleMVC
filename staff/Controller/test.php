<?php
class test extends bridgeMVC
{
    public $a;
    public $b;
    function __construct(){
        $this->a = $this->model("a");
        // $this->b = $this->view("demo",[]);
    }
    public function test1(){
        // echo $this->a->hello();
        $nv = $this->a->hello();
        // echo $nv;
        $this->view("demo",[
            "name"=>"Nam đẹp trai",
            "nhanvien"=>$nv
        ]);
        // require_once "staff/View/demo.php";
    }
    
}

?>
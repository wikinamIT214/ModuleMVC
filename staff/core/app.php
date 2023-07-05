<?php 
class app
{
    protected $controller = "test";
    protected $action = "test1";
    protected $param = [];

    var $handle;

    function __construct()
    {
        $arr = $this->processURL();

        //Xử lý controller
        if(isset($arr[0])){
            if(file_exists("staff/Controller/".$arr[0].".php")){
                $this->controller = $arr[0];
            }
            unset($arr[0]);
        }
        require_once "staff/Controller/".$this->controller.".php";
        $this->controller = new $this->controller;
        //Xử lý Action
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        //Xử lý params
        $this->param = $arr?array_values($arr):[];

         //Gọi đến class và đưa hàm trong class đó ra sử dụng
         $className = $this->controller;
         $className = new $className;
         call_user_func([$className,$this->action],$this->param);
    }
    function processURL()
    {
        if(isset($_GET['url'])){
            return explode("/",trim($_GET['url']));
        }
    }
}


?>
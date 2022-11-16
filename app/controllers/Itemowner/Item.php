<?php

class Item {

    use Controller;
    
    public function index (){
        
        if($_SESSION['USER'] == 'Owner'){
            $this->view('itemowner/Item');
        }else{
            redirect("home");
        }
        
    }

}

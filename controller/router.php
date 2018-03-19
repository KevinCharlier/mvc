<?php
/* FOR Presentation.php */
    class PresentationController{
        public function __construct(){
        }
        public function run(){
            require_once VIEW . 'presentation.php';
        }
    }
/* FOR Stock.php */
    class StockController{
        public function __construct(){
        }
        public function run(){
            require_once VIEW . 'stock.php';
        }
    }
/* FOR Contact.php */
    class ContactController{
        public function __construct(){
        }
        public function run(){
            require_once VIEW . 'contact.php';
        }
    }
?>

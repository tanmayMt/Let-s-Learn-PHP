<?php    
	    class base  
	    {    
	    function test_first(){    
	            //will always print parent class which is base here.    
	            echo __CLASS__;   
	        }    
	    }    
	    class child extends base    
	    {    
	        public function __construct()
	        {    
	            ;    
	        }    
	    }    
	    $t = new child;    
	    $t->test_first();    
?>  

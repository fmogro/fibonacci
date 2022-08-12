<?php

/**
* This class contain the helpers for API Rest
*
* @author     Felipe Mogro
* @version    1.0
* 
*/

class Fibonacci{

    private $position;

    function __construct( $position ) {
		$this->position = $position;
	}

    /**
     * Generate Fibonacci Number
     */
    function generateFibonacci(){
        $numFibbonaci1 = 0;
        $numFibbonaci2 = 1;
  
        $counter = 0;
        
        while ($counter < $this->position){
            $numFibbonaci3 = $numFibbonaci2 + $numFibbonaci1;
            $numFibbonaci1 = $numFibbonaci2;
            $numFibbonaci2 = $numFibbonaci3;
            $counter = $counter + 1;
        }
        return $numFibbonaci1;
    }

}

  
<?php
    
    namespace daily\test;
    
    use daily\NumSubarrayProductLessThanK;
    use PHPUnit\Framework\TestCase;
    
    class NumSubarrayProductLessThanKTest extends TestCase{
        
        public function testNumSubarrayProductLessThanK(){
            
//            $nums = [10, 5, 2, 6];
//
//            $k = 100;
//
            
            $nums = [10,9,10,4,3,8,3,3,6,2,10,10,9,3];
            
            $k = 19;
            
            
            echo (new NumSubarrayProductLessThanK())->numSubarrayProductLessThanK($nums, $k);
        }
    }

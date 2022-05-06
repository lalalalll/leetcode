<?php
    
    namespace daily\test;
    
    use daily\FindTheWinner;
    use PHPUnit\Framework\TestCase;
    
    class FindTheWinnerTest extends TestCase{
    
        public function testFindTheWinner4(){
    
            $result = (new FindTheWinner())->findTheWinner4(3, 1);
    
            ob_clean();
            
            echo json_encode($result);
        }
    }

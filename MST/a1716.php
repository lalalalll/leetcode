<?php
	/**
	 * Created by IntelliJ IDEA.
	 * User: 123
	 * Date: 2020/3/24
	 * Time: 18:28
	 */
	
	function massage(array $nums)
	{
		
		$a = 0;
		
		$b = 0;
		
		$n = count($nums);
		
		for ($i = 0; $i < $n; $i++) {
			
			$c = max($b, $a + $nums[$i]);
			
			$a = $b;
			
			$b = $c;
		}
		
		return $b;
	}
	
	var_dump(massage([1, 2, 3, 4]));
	
<?php
class baseclass{
	public function test(){
		echo "baseclass::test()called<br>";
	}
	 public function moretesting(){
	echo "baseclass::moretest()called<br>";	
	}
}
class childclass extends baseclass{
	public function moretesting()
	{
		echo "childclass::moretesting()called<br>";
	}
}
$obj=new BaseClass;
$obj->test();
$obj->moretesting();
?>
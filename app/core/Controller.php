<?php 


Trait Controller
{

	public function buildView($name, $data = [])
	{
		extract($data);
		
		$filename = "../app/views/".$name.".view.php";
		if(file_exists($filename))
		{
			require $filename;
		}else{

			$filename = "../app/views/404.view.php";
			require $filename;
		}
	}
}
<?php
function csv_to_array($filename='/home/mis/Downloads/Contact_1526447958103.csv')
{

	if(!file_exists($filename) || !is_readable($filename))
		return FALSE;
	
	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE)
	{
		$header=fgetcsv($handle);
		while (($row = fgetcsv($handle)) !== FALSE)
		{
			$data[] = array_combine($header, $row);
                                  
		}
		fclose($handle);
	}
	//print_r ($data);
      return $data;
}

$value=csv_to_array();

$str= json_encode($value, JSON_PRETTY_PRINT);
print $str;


?>

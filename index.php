<?php
include ('header.php');
//reading the file
//reading the file
$first_row = TRUE;
ini_set('auto_detect_line_endings',TRUE);
if (($handle = fopen("hd2013.csv", "r")) !== FALSE) { //opens and reads the file
    while (($row = fgetcsv($handle, 5000, ",")) !== FALSE) {
     if($first_row == TRUE) {
       $column_heading = $row;
       $first_row = FALSE;
     } else {
       $record = array_combine($column_heading, $row);
       $records[] = $record;
     }

    }

    fclose($handle);
}
//for each record, display college name
foreach ($records as $record){

		print $record['UNITID'] . '<a href=show.php?id=' . $record['UNITID']  .    '> - ' . $record['INSTNM'] . "</a> <br />";

		
	}
	
print_r($colleges);

//print_r($colleges);// prints out the college names into arrays


?>
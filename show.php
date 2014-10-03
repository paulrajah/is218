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



// search array method 
function searchUsingUNID($id) {




if (in_array($id, $records))
   {
   echo "Match found";
   }
else
   {
   echo "Match not found";
   }


  /*

  print $id . "<br>";

  foreach ($records as $record => $val){

       if ($records['UNITID'] == $id) {

           print " We have a match";

       }else{

          print "We do not have a match.";

       }

   }
   return null;
*/

}

$search = searchUsingUNID('185828');

print $search;


//for each record, display college name


//print_r($colleges);// prints out the college names into arrays


?>
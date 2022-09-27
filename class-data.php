<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DPDD STDENT</title>
        <h1>Students' names and ages comparison </h1>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            #create 2D array
            $student_name = array('Mithcell', 'Derron', 'Omarion', 'Ela', 'Jake', 'Alex', 'Rana', 'Rehman', 'Nour', 'Noman', 'Temi', 'Taylor','Elizabeth','Roddick');
            $age = array(17, 17, 19, 17, 18, 17, 19, 19, 19, 18, 18, 18, 17, 17);
            
            $student_details = array('Mitchell' => 17, 'Derron' => 17, 'Omarion' => 19, 'Ela' => 17, 'Jake' => 18, 'Alex' => 17, 'Rana' => 19, 'Rehman' => 19, 'Nour' => 19, 'Temi' => 18, 'Noman' => 18, 'Taylor' => 18, 'Elizabete' => 17, 'Roddick' => 17);

            echo "<dl><dt>DPDD Students: Original Order<dd>";
            foreach($student_details as $key => $value) {
                echo '&bull; ', $key.': '.$value;
                echo '<br>';
            }
            echo '<br>';

            #Sorted by Name
            ksort($student_details);
            echo "<dt>Sorted by Name:<dd>";
            foreach($student_details as $key => $value) {
                echo '&bull;', $key.': '.$value;
                echo '<br>';
            }
            echo '<br>';
        
            #Sorted by Age
            asort($student_details);
            echo "<dt>Sorted by Age:<dd>";
            foreach($student_details as $key => $value) {
                echo '&bull;', $key.': '.$value;
                echo '<br>';
            }
            echo '<br>';

            $average_age = array_sum($age);
            echo "<dt>The average age of the DPDD Group is: ";
            echo round($average_age/14);
            echo '<br> <br>';

            //comparing my age to the rest of the students' ages
            echo "<dt>Comparing my age to the rest of the students' ages: <dd><br>";

            foreach($student_details as  $key => $value) {
                if ($value > 19) {
                    echo " $key is older than Nour <br>" ;
                }
                if ($value < 19) {
                    echo " $key is younger than Nour <br>";
                }
                if ($value == 19) {
                    echo " $key is the same age as Nour <br>";
                }
            }
            echo'<br>'; 

            //doing seperate lists for students above and over 18
           
            echo "<dt>Students over 18 years old:<dd><br>";
            foreach($student_details as  $key => $value) {
                if ($value > 18) {
                    echo '&bull;', $key.': '.$value;
                    echo '<br>';
                }
            }
            echo'<br>';
            echo "<dt>Students less than 18 years old:<dd><br>";
            foreach($student_details as  $key => $value) {
                if ($value < 18) {
                    echo '&bull;', $key.': '.$value;
                    echo '<br>';
                }
            }
            echo'<br>';
            echo "<dt>Students who are 18 years old:<dd><br>";
            foreach($student_details as  $key => $value) {
                if ($value == 18) {
                    echo '&bull;', $key.': '.$value;
                    echo '<br>';
                }
            }


        ?>
    </body>

</html>
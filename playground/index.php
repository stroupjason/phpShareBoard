 
<?php
   // echo 'It\'s Alive!';

    //$myVar1 = 'Hello';
    //$myVar2 = 'World!';

    //echo $myVar1.' '.$myVar2;


//List of Arrays, Associative of array (hash like ruby on rails known as half)

//$numbers = array(12,45,22,34,65);
//echo $numbers; //only prints the word 'Array'
//print_r ($numbers); // prints each value with an index in the array

//challenge how do you access the second array?

//print_r ($numbers[1]); //prints '45'

//print_r ($numbers[5]); //returns error


//Associative array

// $ages = array(
//     "John" => 35,
//     "Mary" => 27,
//     "Bob" => 55
// );
    //make sure the key is wrapped in braces and argument is case sensative mary === Mary = false
    //echo $ages['Mary'];

    //use count function to find the number of values in the array

    //count($ages); // doesn't work because you need to 'echo'

    //echo count($ages)//should return the number of values in the list of the array (values) in this case 3 total values

//use array_pop method to remove last last value in the array list

    //echo array_pop($ages); //prints the popped value '55' no need to write echo in front unless you want it to print to scree

    //echo count($ages); //prints the value; '2'

    //print_r ($ages); //prints the list array of what's left (remaining)

// CHALLENGE: remove first value in the array 

    //echo array_shift($ages); //remember; don't have to use echo (not recommended)

    //print_r($ages);

//VISIT PHP.ORG FOR ALL THE BUILT IN PHP METHODS AND FUNCTIONS

//FOR LOOPS PRACTICE W PHP

    //for(initial expression; condition, increment expression)
    //for(i=0; i < i.lenth; i++; )
    //php syntax:
    // for($i=0; $i <= 5; $i++){       // add <= to print 5
    //     echo $i; // prints '01234'
    // };

//CHALLENGE: NOW PRINT A WHILE LOOP (hint: set variable outside the loop)
    // $i = 0;
    // while($i <= 10){
    //     echo 'Number '.$i. '<br />';   //prints 'number 0, number 1 etc...up to 10 and stops'
    //     $i++;
    // }

// CHALLENGE: NOW USE A FOR EACH LOOP USING PREVIOUS ARRAY FROM EARLIER AND 
    //PRINT OUT EACH VALUE 
    // $numbers = array(12,45,22,34,65);

    // foreach($numbers as $number){
    //     echo 'This is number '.$number. '<br />';
    // }

//CHALLENGE: PRINT AN ASSOCIATE ARRAY USING FOR EACH (USE AGE E.G. FROM BEFORE)

    $ages = array(
    "John" => 35,
    "Mary" => 27,
    "Bob" => 55
);

    // foreach($ages as $age){
    //     echo $age.' <br />'; // doesn't give us the key, just prints the ages
    // }

//CHALLENGE: PRINT KEY[VALUE] AS WELL WITH AGE (hint: use built in method)

    foreach($ages as $key => $age){
        echo $key.' is '.$age.' years old. <br />';
    }

?>
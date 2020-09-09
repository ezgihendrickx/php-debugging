<?php

declare(strict_types=1);
// === Exercise 1 ===
echo "Exercise 1 starts here:";
function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
// === Exercise 2 ===
new_exercise(2);
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach ($week as &$day) {
    $day = substr($day, 0, -3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alphabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
//for ($letter = 'a'; $letter <= 'z'; $letter++) {
$letter = 'a';
for ($i = 0; $i <= 25; $i++) {
    array_push($arr, $letter);
    $letter++;
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are randomly combined as seen in the code, fix all the bugs whilst keeping the functionality!
// Examples: captain strange, ant widow, iron man, ...
$arr = [];


function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];
    foreach ($params as $param) {
        if ($param == "") {
            $result = randomHeroName();
        }
    }
    return implode(" - ", $result);
}


function randomGenerate($arr, $amount)
{
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $firstname = $heroes[0][rand(0, 10)];
    $lastname = $heroes[1][rand(0, 10)];
    //$randname = $heroes[rand(0,count($heroes))][rand(0, 10)];

    // echo $randname;
    return [$firstname, $lastname];
}

echo ("Here is the name: " . combineNames());


new_exercise(7);
function copyright(int $year)
{
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright((int)date("Y"));

///
new_exercise(8);
function login(string $email, string $password)
{
    if ($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
        // return ' Smith';
    }
    return 'No access';
}
/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//Should say: no access
echo login('john@example.be', 'dfgidfgdfg');
//Should say: no access
echo login('wrong@example', 'wrong');
/* You can change code again */


new_exercise(9);
function isLinkValid(string $link)
{
    $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$length = count($areTheseFruits);
for ($i = 0; $i < $length; $i++) {
    if (!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits); //do not change this


// Bonus round
// Below are 5 characters (the space included)
// Find out why the substring with limit 10 still shortens the string, and what might be a solution (not easy)
$str = "안녕 세상";
echo mb_substr($str, 0, 10, "UTF-8");

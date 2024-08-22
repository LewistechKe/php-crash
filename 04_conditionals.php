<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

if($age >= 18){
  echo 'You are an adult. You are eligible to vote';
} else{
  echo 'You are a minor. You are not eligible to vote';
}

$t = date("H");

if($t < 12){
  echo 'Good Morning';
} elseif($t < 17){
  echo 'Good Afternoon';
}else{
  echo 'Good Evening';
}


$posts = ['First Post', 'Second Post', 'Third Post'];

if(empty($posts)){
  echo 'There are posts';
} else{
  echo 'There are no posts';
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

echo ($posts) > 0 ? $posts[0] : 'No Posts';
echo !empty($posts) ? $posts[1] : 'No Posts';

$firstpost = $posts[0] ?? null;
echo $firstpost;

/* -------- Switch Statements ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, blue or green';
    break;
}
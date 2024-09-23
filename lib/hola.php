<?php
//@author Alex Musat <musateduardalexandru@gmail.com>
require ('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim (fgets(STDIN));
print new HolaMundo($nombre);
?>

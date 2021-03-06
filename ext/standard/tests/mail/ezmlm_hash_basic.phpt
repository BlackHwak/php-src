--TEST--
Test ezmlm_hash() function : basic functionality 
--SKIPIF--
<?php
if (PHP_INT_SIZE != 4) die("skip this test is for 32bit platform only");
?>
--FILE--
<?php
/* Prototype  : int ezmlm_hash  ( string $addr  )
 * Description: Calculate the hash value needed by EZMLM.
 * Source code: ext/standard/mail.c
 */

echo "*** Testing ezmlm_hash() : basic functionality ***\n";

var_dump(ezmlm_hash("webmaster@somewhere.com"));
var_dump(ezmlm_hash("foo@somewhere.com"));

?>
===Done===
--EXPECT--
*** Testing ezmlm_hash() : basic functionality ***
int(1)
int(7)
===Done===

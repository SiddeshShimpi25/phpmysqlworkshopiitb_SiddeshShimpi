<?php
$letter = array("a","v","b","e","x","u");
foreach ($letter as $a){
    switch ($a) {
        case "a":
          echo "The character $a is a vowel!.<br>";
          break;
        case "e":
          echo "The character $a is a vowel!.<br>";
          break;
        case "i":
          echo "The character $a is a vowel!.<br>";
          break;
        case "o":
          echo "The character $a is a vowel!.<br>";
          break;
        case "u":
          echo "The character $a is a vowel!.<br>";
          break;
        default:
          echo "The character $a is a consonant!.<br>";
      }
}
?>
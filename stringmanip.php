<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
    ?>
    <h1><?php echo $title ?></h1>
    <?php
    //concatonation of strings
        $phrase1 = "Student who came late";
        $phrase2 = "In Class, Stand with Rock";
        $name = "kenworth hinds";
        echo $phrase1.", named Tiffany, ".$phrase2;
        echo '<br>';
        echo '<hr/>';
    //String transformation

echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
echo "Uppercase first letter of each word: " . ucwords($phrase1). " name is Tiffany <br/>";
echo 'Upper case: '. strtoupper($name). '<br/>';
echo 'Lower case: '. strtolower("THIS WAS ALL UPPERCASE"). '<br/>';
echo '<hr/>';
echo 'Repeat String: '.str_repeat('a',10) . '<br/>';
echo 'Repeat String Nested Function: '.strtoupper(str_repeat('a',10)) . '<br/>';
echo 'Getting A Substring: ' .substr($name, 3, 5) .'<br/>';

echo 'Get position of string: ' .strpos($name, 'w'). '<br/>';
//Returns NULL
// echo Get position of a string: ' . strpos($combine,'z') .'<br/>';
echo 'Find Character "R" : ' .strchr($name,'R'). '<br/>';
echo 'Find Character "r" : ' .strchr($name,'r'). '<br/>';
echo 'Find Character "s" : ' .strchr($name,'s'). '<br/>';
echo 'Find Character "e" : ' .strchr($name,'e'). '<br/>';

echo 'Find Length of String: ' .strlen($name). '<br/>';

echo 'Without Trim: '. "A" . "B C D" . "E". '<br/>';
echo 'Trim Spaces on Both sides: '. "A" .trim(" B C D ") . "E". '<br/>';
echo 'Trim Spaces on the Left: '. "A" . ltrim(" B C D ") . "E". '<br/>';
echo 'Trim Spaces on the Right: '. "A" . rtrim(" B C D ") . "E". '<br/>';

echo ' Replace String With Another: '. str_replace("stand", "sit",$phrase2 ).'<br/>';





?>
<?php require 'includes/footer.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
/* SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array. Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
$kids=array(
    0=>"Mike",
    1=>"Dustin",
    2=>"Will",
    3=>"Lucas",
    4=>"Max",
    5=>"Eleven"); // Lengkapi di sini
$adults=array(
    0=>"Hopper",
    1=>"Nancy",
    2=>"Joyce",
    3=>"Jonathan",
    4=>"Murray");
echo "<h3> Soal 2</h3>";
/* SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
echo "Cast Stranger Things: ";
echo "<br>";
echo "Total Kids: " .count($kids); // Berapa panjang array kids echo "<br>";
echo "<ol>";
echo "<li> $kids[0] </li>";
// Lanjutkan
echo "<li> $kids[1] </li>";
echo "<li> $kids[2] </li>";
echo "<li> $kids[3] </li>";
echo "<li> $kids[4] </li>";
echo "<li> $kids[5] </li>";
echo "</ol>";
echo "Total Adults: " .count($adults); // Berapa panjang array adults echo "<br>";
echo "<ol>";
echo "<li> $adults[0] </li>";
// Lanjutkan
echo "<li> $adults[1] </li>";
echo "<li> $adults[2] </li>";
echo "<li> $adults[3] </li>";
echo "<li> $adults[4] </li>";
echo "</ol>";
/* SOAL No 3
Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
Name: "Will Byers" 
Age: 12, 
Aliases: "Will the Wise" 
Status: "Alive" 

Name: "Mike Wheeler" 
Age: 12, 
Aliases: "Dungeon Master" 
Status: "Alive" 

Name: "Jim Hopper" 
Age: 43, 
Aliases: "Chief Hopper" 
Status: "Deceased"

Name: "Eleven" 
Age: 12, 
Aliases: "El" 
Status: "Alive" 

Output: 
Array
(
[0] => Array
(
    [Name] => Will Byers 
    [Age] => 12
    [Aliases] => Will the Wise
    [Status] => Alive
)
[1] => Array
(
    [Name] => Mike Wheeler 
    [Age] => 12
    [Aliases] => Dugeon Master 
    [Status] => Alive
)
[2] => Array
(
    [Name] => Jim Hooper 
    [Age] => 43
    [Aliases] => Chief Hopper 
    [Status] => Deceased
)
[3] => Array
(
    [Name] => Eleven
    [Age] => 12
    [Aliases] => El
    [Status] => Alive
)
) */
$data = array(
    array(
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
    ),
    array(
        "Name" => "Mike Wheeler",
        "Age" => 12,
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"
    ),
    array(
        "Name" => "Jim Hopper",
        "Age" => 43,
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"
    ),
    array(
        "Name" => "Eleven",
        "Age" => 12,
        "Aliases" => "El",
        "Status" => "Alive"
    )
);
echo"<pre>";
print_r($data);
echo"</pre>";
?>
</body>
</html>
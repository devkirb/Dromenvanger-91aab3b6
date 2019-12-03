<?php
echo "> Hoeveel vrienden vraag je naar hun droom". PHP_EOL;
$vrienden = readline("> ");
$info = array(
);
if (is_numeric($vrienden)) {
for ($tell = 1; $tell <= $vrienden; $tell++) 
{ 
echo "> Hoe heet je?" . PHP_EOL;
$naam = readline("> ");
echo "> Aantal dromen" . PHP_EOL;
$aantaldroom = readline("> ");
$ye = array();
for ($tel2 = 1; $tel2 <= $aantaldroom; $tel2++){
echo "> Wat is je droom?" . PHP_EOL;
$dromen = Readline("> ");
$ye[] = $dromen;
}
$informatie[$naam] = $ye;
} 
}
else
{
exit("> '" . $aantalvrienden . "' is geen nummer");
}
foreach($info as $naam => $array){
foreach($array as $array => $inhoud){
echo "> de droom van $naam is: $inhoud" . PHP_EOL;    
    }
}    

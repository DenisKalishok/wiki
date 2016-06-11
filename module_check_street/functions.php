<?php
function get_streets_list($db,$input_street){
	$name = $input_street;
	$name = strtolower($name); //переводим в нижний регистр
	$first = mb_substr($name,0,1, 'UTF-8');//первая буква
	$last = mb_substr($name,1);//все кроме первой буквы
	$first = mb_strtoupper($first, 'UTF-8');
	$last = mb_strtolower($last, 'UTF-8');
	$input_street = $first.$last;

	$inf = $db->query("SELECT * FROM `street` WHERE name LIKE '%$input_street%' ORDER BY name");
     while($r = $inf->fetchArray())
    {
         echo "<option value='",$r['name'],"'></option>";
    }
}

function get_house_list($db,$input_street){
	$inf = $db->query("SELECT id FROM `street` WHERE name='$input_street'");
	$r = $inf->fetchArray();
	$id_street = $r['id'];
	$houses = $db->query("SELECT * FROM 'house' WHERE street_id=$id_street ORDER BY number");
	while($h = $houses->fetchArray())
	{
		echo $h['number'],", ";
	}
}

?>
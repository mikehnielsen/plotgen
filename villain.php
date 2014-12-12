<?php
if(isset($_GET["q"])){
	


	//function setStructure ($modelfile){
		$villains = simplexml_load_file($_GET["q"].".xml");
		$arr = array();
		
		//echo $villains->villain[1]['rarity'];
		$arrlength = 0;
		foreach($villains->villain as $villain){
			$rarity = (int)$villain['rarity'];
			
			for ($x = 0; $x < $rarity; $x++) {
				//echo "The number is: $x <br>";
				if($x != 0){
					$arr[$arrlength][0] = $villain->name;
					$arr[$arrlength][1] = $villain->description;
					$arrlength++;
				}
			}
		
		}
		
		$entry = rand(0,count($arr));
				
		echo '<div class="panel panel-default">';
			echo '<div class="panel-heading">';
				echo '<h3 class="panel-title">';
					echo $arr[$entry][0];
				echo '</h3>';
			echo '</div>';
			echo '<div class="panel-body">';
				echo $arr[$entry][1];
			echo '</div>';
		echo '</div>';
		
	//}
}
?>
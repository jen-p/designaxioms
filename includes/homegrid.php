<div class="sixteen columns">
			<div class="gridItem gridContent">
<?php
	$gridCount = 0;  
			echo "				<ul>";
			foreach ($allCards as $card) {
			
				if($gridCount==4) {
					   $gridCount = 0;  
					echo "\n				</ul>\n				<ul>";  
				}  
				
				$thumb = $card->getElementsByTagName('thumb')->item(0)->nodeValue;
				$title = $card->getElementsByTagName('title')->item(0)->nodeValue;
				$imageUrl = $card->getElementsByTagName('thumb')->item(0)->getAttribute('url');
				$uniquetitle = $card->getElementsByTagName('title')->item(0);
				$uniquetitle = $uniquetitle->attributes->getNamedItem('id');
				$uniquetitle = $uniquetitle->nodeValue;
				echo "\n"."					<li><a href=\"" . $imageUrl . '?view=single#' . $uniquetitle . "\"><img src=\"" . $thumb . "\" alt=\"".$title."\" /></a></li>";
				
				$gridCount++;
			}
			echo "\n				</ul>\n";
?>
			</div><!--end #content-->
		</div>
		
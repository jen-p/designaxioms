<div id="content" class="sixteen columns singleContent">
			<ul id="slider">
		<?php
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				if($cardType == 'axiom'){
					$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
					$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
					$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
					$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
					
					echo"		<li class=\"panel\"> 
					<div class=\"axiomItem slide\" id=\"" . $imageId . "\"> 
						<img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" />
						<div class=\"axiomInfo\"><div class=\"axiomFlag\"></div> 
							<h1>" . $title . "</h1> 
							<hr> 
											" . $description . " 
						</div> 
					</div> 
				</li> \n";
				}
			}		
		?>
			</ul><!--end #slider1-->
		</div><!--end #content-->
		

		
		
		
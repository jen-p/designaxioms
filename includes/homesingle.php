<div id="content" class="sixteen columns singleContent">
			<ul id="slider">
		<?php
			$allQuoteLinks  = array();
			$allQuoteImgs = array();
			$allQuoteAlts = array();
			
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				$image=$card->getElementsByTagName('image')->item(0)->nodeValue;
				$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
				$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
				$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
				$authorLink=$card->getElementsByTagName('subtitle')->item(0)->getAttribute('href');
				$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
				if($cardType == 'author'){
					$authorQuotes=$card->getElementsByTagName('authorQuotes')->item(0)->nodeValue;
				}
				$quoteLinks=$card->getElementsByTagName('quoted');
				
				//loop to get all quotes, push to array
					$quoteCount = 0;
			
					foreach($quoteLinks as $quoteLink) {
						$quoteLink = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('url');
						$quoteAlt = $card->getElementsByTagName('quoted')->item($quoteCount)->getAttribute('title');
						$quoteImg = $card->getElementsByTagName('quoted')->item($quoteCount)->nodeValue;
						$allQuoteLinks[] = $quoteLink;
						$allQuoteImgs[] = $quoteImg;
						$allQuoteAlts[] = $quoteAlt;
						$quoteCount++;
					}//end loop<a id="example8" href="./example/8_b.jpg" title="&lt;a href=&#34;#&#34;&gt;Sed vel sapien vel sem tempus placerat eu ut tortor. Nulla facilisi. Sed adipiscing, turpis ut cursus molestie, sem eros viverra mauris, quis sollicitudin sapien enim nec est. ras pulvinar placerat diam eu consectetur.&lt;/a&gt;"><img class="last" alt="example7" src="./example/8_s.jpg" /></a>
				
				echo"		<li class=\"panel\">\n";
					if ($cardType == 'author'){
<<<<<<< HEAD
						echo"\n \n <div class=\"authorItem slide\" id=\"" . $imageId . "\">
						<img src=\"" . $image . "\" class=\"authorPortrait\" alt=\"" . $title . "\" width=\"288\" height=\"432\" />";
					} else {
						echo "<div class=\"axiomItem slide\" id=\"" . $imageId . "\">
						<img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" />"; 
					
					}
						echo "
						<div class=\"axiomInfo\">";
						if($cardType == 'quote'){
							echo"
							<div class=\"quoteFlag\"></div> ";
						}else if($cardType == 'axiom'){
							echo"
							<div class=\"axiomFlag\"></div> ";
						}else if($cardType == 'author'){
							echo "
							<div class=\"authorFlag\"></div>";
=======
						echo"					<div class=\"authorItem slide\" id=\"" . $imageId . "\">\n
						<div class=\"authorFlag\"></div>";
					} else {
						echo "					<div class=\"axiomItem slide\" id=\"" . $imageId . "\">\n";
					}
					echo "						<a class=\"hires\" href=\"" . $hiRes . "\" title=\"<a href=" . $hiRes . "&#34; target=&#34;blank&#34;>Download this card</a>\"><img src=\"" . $image . "\" alt=\"" . $title . "\" width=\"288\" height=\"432\" /></a> 
						<div class=\"axiomInfo\">\n";
						if($cardType == 'quote'){
							echo"							<div class=\"quoteFlag\"></div>\n";
						}else if($cardType == 'axiom'){
							echo"							<div class=\"axiomFlag\"></div>\n";
>>>>>>> parent of 07938bf... Revert "beginning to make home single changes to fix author problems"
						}
						echo"							<h1>" . $title . "</h1>"; 
						if ($cardType == 'author'){
							echo "<h5>" . $subtitle . "</h5>";
						} else if ($cardType == 'quote'){
							echo "<h4><a href=\"" . $authorLink . "\">" . $subtitle . "</a></h4>";
						}
<<<<<<< HEAD
						echo "\n<hr>
															" . $description . " 
						</div>"; 
						if ($cardType == 'author') {
							echo"<div class=\"quotedCards\">
=======
						echo "<hr>" . $description . " 
						</div>\n"; 
						/*if ($cardType == 'author') {
							echo"						<div class=\"quotedCards\">
>>>>>>> parent of 07938bf... Revert "beginning to make home single changes to fix author problems"
							<ul>\n";
							
							for($i=0;$i<$quoteCount;$i++) {
								//you should add the alts to the xml file as attributes
								echo "								<li><a href=\"" . $allQuoteLinks[$i] . "\"><img src=\"" . $allQuoteImgs[$i] . "\" alt=\"" . $allQuoteAlts[$i] . "\" width=\"69px\" height=\"103px\" /></a></li>\n";
							}//end loop			
								echo	"							</ul>
<<<<<<< HEAD
										</div>	";
						}
					
				echo"\n</div> 
=======
						</div>\n";
						}*/
					
				echo"					</div> 
>>>>>>> parent of 07938bf... Revert "beginning to make home single changes to fix author problems"
				</li> \n		";

			}		
		?>
	</ul><!--end #slider1-->
		</div><!--end #content-->
		

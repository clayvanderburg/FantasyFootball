<?php
	include('includes/header.php');

	$fantasyPros = file_get_contents('https://www.fantasypros.com/nfl/cheatsheets/top-ppr-players.php');
    
    //parse out unnecessary stuff
	$pageArray = explode('.&nbsp;', $fantasyPros);

	$secondpageArray = explode('<li class="mpb-player-', $pageArray[1]);

    $playersAll = array_slice($pageArray,1,330);

    $playersAll = preg_replace('/\d+/u','',$playersAll);

    $playersAll = str_replace('</ul></div><div class="four columns"><ul>', '', $playersAll);

    $playersAll = str_replace('<li class="mpb-player-"></li>', '', $playersAll);
    
?>



   		<div class="container-fluid" >
		    <div class="row">
		    		<!-- RANKED PLAYER LIST -->
		    	<div class="col-xs-12 rowpadsmall">
		    		<ul class="list1">	
				    	<?php foreach( $playersAll as $playersAll ): ?>
				    		<li class="listitem1"><?= $playersAll ?></li>
				    	<?php endforeach; ?>
			    	</ul> 
		    	</div>
		</div>

	<?php 

		//link to footer
		include('includes/footer.php'); 

	?>
	    
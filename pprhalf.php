<?php
	include('includes/header.php');
	$fantasyPros = file_get_contents('https://www.fantasypros.com/nfl/cheatsheets/top-half-ppr-players.php');
	//parse out unnecessary stuff
	$pageArray = explode('.&nbsp;', $fantasyPros);
	$pageArray1 = preg_replace('/\d+/u','',$pageArray);
	$pageArray1 = preg_replace( "/\r|\n/", "", $pageArray1 );
  $playersAll = array_slice($pageArray1,1,330);
	$playersAll = str_replace(array('</ul></div><div class="four columns"><ul>','</li><li class="mpb-player-">'),array('',''), $playersAll);
?>
   		<div class="container-fluid" >
		    <div class="row">
		    	<div class="col-xs-12 rowpadsmall">
		    		<ul id="parent-pprhalf" class="list1">
				    	<?php foreach( $playersAll as $playersAll ): ?>
								<li class="listitem1 parent-pprhalf" draggable="true"><?= $playersAll?><span class="handle"><i class="fa fa-sort-asc" aria-hidden="true"></i>
									<i class="fa fa-sort-desc" aria-hidden="true"></i></span>
				    	<?php endforeach; ?>
			    	</ul>
		    	</div>
		</div>
	  <?php
			//link to footer
			include('includes/footer.php');
		?>

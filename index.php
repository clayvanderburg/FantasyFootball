<?php
	include('includes/header.php');

	//Scrape from fantasy pros
	$fantasyPros = file_get_contents('https://www.fantasypros.com/nfl/cheatsheets/top-players.php');

	//parse out unnecessary stuff
	$pageArray = explode('.&nbsp;', $fantasyPros);

	$pageArray1 = preg_replace('/\d+/u','',$pageArray);
	$pageArray1 = preg_replace( "/\r|\n/", "", $pageArray1 );

    $playersAll = array_slice($pageArray1,1,330);

    $playersAll = str_replace(array('</ul></div><div class="four columns"><ul>','</li><li class="mpb-player-">'),array('',''), $playersAll);

    
    // $playersAll = str_replace(,'', $playersAll[2]); 
    
?>
		
		<div class="modal fade" id="instructionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLabel">Welcom to FFBCheatSheet.info!</h5>
		        
		      </div>
		      <div class="modal-body text-center">
		        <p>This site is intended to be a replacement for a physical cheat sheet at live fantasy drafts.</p>
		        <h5 class="modal-title" id="exampleModalLabel">Tips</h5><br>
		        <p>Click once to dismiss a player</p>
		        <p>Click twice to highlight a player</p>
		        <p>Click position buttons to hide position</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        
		      </div>
		    </div>
		  </div>
		</div>
   		<div class="container-fluid" >
		    <div class="row">
		       
		    	<div class="col-xs-12 rowpadsmall">
		    		<ol class="list1">	
				    	<?php foreach( $playersAll as $playersAll): ?>
				    		<li class="listitem1"><?= $playersAll?></li>
				    	<?php endforeach; ?>
			    	</ol> 
		    	</div>
		    </div>		
		</div>
		<script type="text/javascript">$(".listitem1 a").removeAttr("href");</script>
 
<?php 

//link to footer
include('includes/footer.php'); 

?>
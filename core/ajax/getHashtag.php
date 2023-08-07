<?php 
  include '../init.php';
  $getFromU->preventAccess($_SERVER['REQUEST_METHOD'], realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));
   if(isset($_POST['hashtag'])){	
   	  if(!empty($_POST['hashtag'])){
   	  	 $hashtag = $getFromU->checkInput($_POST['hashtag']);
   	  	 $mension = $getFromU->checkInput($_POST['hashtag']);

		  if(substr($hashtag, 0,1) === '#'){
		  	 $trend   = str_replace('#', '', $hashtag);
		  	 $trends  = $getFromT->getTrendByHash($trend);
		  	
		  	 foreach ($trends as $hashtag) {
		 	   echo '<li><a href="#"><span class="getValue">#'.$hashtag->hashtag.'</span></a></li>';
		  	 }
		   

   	  	 
   	  }
         if(substr($mension, 0,1) === '@'){
            $mension   = str_replace('@', '', $mension);
            
            $mensions  = $getFromT->getMension($mension);
           
            foreach ($mensions as $mension) {
                echo '<li><div class="nav-right-down-inner">
                <div class="nav-right-down-left">
                    <span><img src="'.BASE_URL.$mension->profileImage.'"></span>
                </div>
                <div class="nav-right-down-right">
                    <div class="nav-right-down-right-headline">
                        <a>'.$mension->screenName.'</a><span class="getValue">@'.$mension->username.'</span>
                    </div>
                </div>
            </div><!--nav-right-down-inner end-here-->
            </li>';
            }
   }
}
}
 
?>

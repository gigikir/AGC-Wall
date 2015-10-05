<?php 
include('header.php');
include('navbar.php');
?>
<div class="container">
	<div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">
	                	<img src="images/favicon.png" /> - 
	                	Dvorax
	                    <small>all wallpaper is here</small>
	                </h1>
	            </div>
	        </div>
		<?php
		include('sidebar-video.php');
		?>

		<div class="col-md-8">

		<form action="./video" method="GET">
               
                <div class="input-group col-md-12" style="padding:16px; margin-top:-16px;">                    
                    <input type="text" style="border:4px solid #E74C3C; height:50px;" class="form-control" name="search" placeholder="Search All Video" required autofocus />
                        <input type="hidden" name="idPage" value="<?php echo $_SESSION['rsz']; ?>">
                                    
                            <span class="input-group-btn">
                                <button class="btn btn-danger" style="height:50px" type="submit">
                                <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>            
                </div>

            </form> 
<!-- MESIN GRAB -->








<?php
        error_reporting(0);
        if (isset($_GET['search'])) {
                $keyword = str_replace(" ", '+', $_SESSION['key']);
                $getID = $_SESSION['rsz'];
                $url = "https://ajax.googleapis.com/ajax/services/search/video?v=1.0&q=".$keyword."&start=".$getID."&rsz=8";
                
        } else {
            $getID = $_SESSION['rsz'];
            $url = "https://ajax.googleapis.com/ajax/services/search/video?v=1.0&q=".$_SESSION['key']."&start=1&rsz=8";
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, 'http://www.dvorax.com/');
        $body = curl_exec($ch);
        curl_close($ch);
        $json = json_encode($body);

        $result = json_decode($json, true);
        //print_r($result);
        $jsonz = json_decode($result);

        if (isset($_GET['post_video'])) {


        $largeImage = $_GET['post_video'];
        $ti = str_replace("-", " ", $_GET['title']);
        $tit = str_replace(".html", "", $ti);
        $titl = str_replace(".jpg", "", $tit);
        $title = str_replace("...", " ", $titl);
        
        $getCat = str_replace(".html", "", $_GET['cat']);
        
        $getCount = rand(10, 1105);
        echo '
    
        <div class="col-md-12">
            <h1 class="judulAttachment">'.$title.' | '.$getCat.'</h1>
            <p><font color="gray">Posted by : Admin</font>
             
                

            <!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/'.base64_decode($largeImage).'?rel=0"></iframe>
			</div>
            
        </div>
        ';
    
} else {
    echo '<h4 style="padding-left:20px;">'.$_GET["search"].'</h4>';
    foreach($jsonz->responseData->results as $k=>$d){
        $lin = $d->tbUrl;
        $link = str_replace("\u003d", "", $lin);
        $linkThumb = str_replace("[\]", "=", $link);
   
        $jud = $d->title;
        $tit = str_replace("-", " ", $jud);
        $title = str_replace("...", " ", $tit);
        $bU = str_replace(" ", "-", $title);
        $bUr = str_replace(",", "", $bU);
        $bUr2 = str_replace("»", "", $bUr);
        $bUr3 = str_replace("«", "", $bUr2);
        $bUrl = str_replace("|", "", $bUr3);    
   
        $arr = explode('=', $d->url);
		$important = $arr[1];
		

        $encUrl = base64_encode($important);



            echo '
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="./video?post_video='.$encUrl.'&title='.strip_tags($bUrl).'&cat='.$_SESSION["key"].'.html">
                      
                        <div class="span2">
                            <div class="ratio" style="background-image:url('.$linkThumb.')" />
                            </div> 
                        </div>
                      
                      
                      <div class="caption">
                        <h1 class="judulHome" style="height:50px;"><a href="./video?post_video='.$encUrl.'&title='.strip_tags($bUrl).'&cat='.$_SESSION["key"].'.html">'.$d->titleNoFormatting.'</a></h1>
                      </div>
                    </div>
                  </div>

            ';

    }
}
    
?>


<div class="col-md-12">
<ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li>
                    <form class="pull-left" action="./video" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="1" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==1) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="1" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./video" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="12" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==12) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="2" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./video" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="24" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==24) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="3" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./video" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="36" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==36) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="4" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./video" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="48" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==48) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="5" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./video" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="56" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==56) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="6" />
                    </form>
              </li>
              <li class="disabled"><a href="#">»</a></li>
            </ul>
</div>




<!-- /MESIN GRAB -->
           </div>

	</div>
<?php
include('footer.php');
?>
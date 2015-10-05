<?php 
include('header.php');
include('navbar.php');
?>


<div class="container">
    <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                <img src="images/favicon.png" /> - 
                    Dvorax
                    <small>all wallpaper is here</small>
                </h1>
            </div>
        </div>

        <!-- /.row -->
        <?php include('sidebar.php'); ?>
            
        <div class="col-md-8">  
            <form action="./" method="GET">
               
                <div class="input-group col-md-12" style="padding:16px; margin-top:-16px;">                    
                    <input type="text" style="border:4px solid #dfdfdf; height:50px;" class="form-control" name="search" placeholder="Search Everything" required autofocus />
                        <input type="hidden" name="idPage" value="<?php echo $_SESSION['rsz']; ?>">
                                    
                            <span class="input-group-btn">
                                <button class="btn btn-danger" style="height:50px" type="submit">
                                <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>            
                </div>

            </form>            
            <br />
            <!-- Content Here -->
            
        <?php
        error_reporting(0);
        if (isset($_GET['search'])) {
                $keyword = str_replace(" ", '+', $_SESSION['key']);
                $getID = $_SESSION['rsz'];
                $url = "http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=".$keyword."&start=".$getID."&rsz=8";
                
        } else {
            $getID = $_SESSION['rsz'];
            $url = "http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=".$_SESSION['key']."&start=1&rsz=8";
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

        if (isset($_GET['post_image'])) {


        $largeImage = $_GET['post_image'];
        $ti = str_replace("-", " ", $_GET['title']);
        $tit = str_replace(".html", "", $ti);
        $titl = str_replace(".jpg", "", $tit);
        $title = str_replace("...", " ", $titl);
        
        $getCat = str_replace(".html", "", $_GET['cat']);
        
        $getCount = rand(10, 1105);
        $kesatu = 'SEP 17, 2015';
            $kedua = 'JUL 2, 2015';
            $ketiga = 'JUN 9, 2015';
            $keempat = 'JUN 5, 2012';
            $kelima = 'AUG 25, 2014';

            $dateArray = array($kesatu, $kedua, $ketiga, $keempat, $kelima);
        echo '
        <script>
        document.getElementById("download").click();
        </script>
        <div class="col-md-12">
            <h1 class="judulAttachment">'.$title.' | '.$getCat.'</h1>
            <p><font color="gray">Posted by : Admin - on '.$dateArray[rand(0, count($dateArray) - 1)].'</font>
             
                <a href="'.base64_decode($largeImage).'" class="btn btn-success btn-xs pull-right" download id="download" type="submit" name="download">Download</a>

            <a href="'.base64_decode($largeImage).'" class="btn btn-warning btn-xs pull-right">Full Resolution</a></p>
            <a href="'.base64_decode($largeImage).'"><img title="'.$title.'" alt="'.$title.'" class="thumbnail" style="width:100%;" src="'.base64_decode($largeImage).'" /></a>

            <table class="table" style="border:1px solid #dfdfdf;">
                <tr>
                    <td><strong>Wallpaper : </strong>'.$title.'</td>
                </tr>
                <tr>
                    <td><strong>Category : </strong>'.$getCat.'</td>
                </tr>
                <tr>
                    <td><strong>Downloads : </strong>'.$getCount.'</td>
                </tr>
                <tr>
                    <td><strong>Tags : '; 

                    $p = explode(" ", $title);
                    $pi = preg_replace('/[^a-zA-Z]/', '', $p);
                    $pie = str_replace("for", "", $pi);
                    $piec = str_replace("The", "", $pie);
                    $piece = str_replace("of", "", $piec);
                    $pieces = str_replace("that", "", $piece);
                     
                            foreach($pieces as $key => $tag) {
                                echo "<a href='#' class='btn btn-default'>".$tag."</a>";
                            }

                    echo '</strong></td>
                </tr>
            </table>
            <h2 class="h2small"><strong>'.$title.'</strong></h2>
            ';

            


            $first = '
            <p align="justify">
             '.$title.'is a picture of a pretty much sought after by people, this is the image <strong>'.$title.'</strong> image that is very cool, cool pictures other than usual is also used for the purposes of website design, wallpapers on your desktop wallpaper on a smartphone and also used to make a game. the image above has been downloaded <strong>'.$getCount.'</strong> times as much. There are a great many functions the image to your needs. the images on this <strong>'.$getCat.'</strong> category has its own uniqueness. To download these images you can press the download button to save the image into your computer or your smartphone. If you want a larger resolution you can press the "full Resolution" above. You can also click directly on the pictures to get a resolution. on this website you will find pictures of just about anything. only write down the keywords above you can get all the pictures you want. Suppose you want to find pictures of <em>landscapes, game, panorama, movie, sports cars and others</em>.
            </p>
            <p>
            Also known as desktop wallpaper picture, i.e. referring to the image used as a background on your desktop. Wallpaper itself is a term used in MS Windows. Mac OS uses the term desktop picture. Wallpaper can be a static image, web page or other dynamic information, appropriate support is provided by the desktop or the system.
            </p>
            <p>
            Wallpaper printing techniques include surface printing, gravure printing, silk screen-printing, rotary printing, and digital printing. Wallpaper is made in long rolls, which are hung vertically on a wall. Patterned wallpapers are designed so that the pattern "repeats", and thus pieces cut from the same roll can be hung next to each other so as to continue the pattern without it being easy to see where the join between two pieces occurs.
            </p>
            ';

            $second = '

            <p align="justify">
            the best spot a major goal of all people, a comfortable shelter and safe for we live in, such as <strong>'.$title.'</strong> to be an item of inspiration to have a good place to live. Picture '.$title.' entry in the <strong>'.$getCat.'</strong> and published on <strong>'.$dateArray[rand(0, count($dateArray) - 1)].'</strong>. Beautiful home decor will affect the way we think about something, therefore the interior and exterior house became one of the main things to note.
            </p>
            <p align="justify">
            Themes occupancy as what we want, nah <strong>'.$title.'</strong> is included in the label <strong>'.$getCat.'</strong> may be a basic overview for those of you who want to plan to make the home for a small family with a garden, bed and bathroom were quite outside for our use as well as possible ,
                        </p>
                        <p align="justify">
            Note, Fun interior of a small idea for small houses home with yellow walls of home ideas kitchen remodel design wooden floor has two pendant lamps landing cupboard closet table chairs and cooled centerp interest. Attractive interior design inspired interior design. Design ideas easy prepossessing bedroom decorating ideas interior design. Design ideas superb home interior design ideas and architcture.
            It is better you have to understand your needs whether you want a special place to decorate a room to the inner or home design interior decoration is needed? When you understand that, you can design beautiful decoration of your interior home. Here we suggest you some ideas interior decorating home design that can help you to design and decorate the interior of your home. These ideas range from simple to inspiration, traditional, contemporary, beautiful and slim for decorating ideas bewitching and captivating. By discovering the secrets of interior design, decorating ideas you can get inspired and create the interior design of your home so that inspiration and a symbol of beauty, functionality and practicality.
</p>
            ';

            $array = array($first, $second);
            echo $array[rand(0, count($array) - 1)];


            echo '
            <br />
        </div>
        ';
    
} else {
    echo '<h4 style="padding-left:20px;">'.$_GET["search"].'</h4>';

        // $urlSess = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        
    
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
   
        $encUrl = base64_encode($d->url);


            echo '
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="./?post_image='.$encUrl.'&title='.strip_tags($bUrl).'&cat='.$_SESSION["key"].'.html">
                      
                        <div class="span2">
                            <div class="ratio" style="background-image:url('.$linkThumb.')" />
                            </div> 
                        </div>
                      
                      
                      <div class="caption">
                        <h1 class="judulHome" style="height:50px;"><a href="./?post_image='.$encUrl.'&title='.strip_tags($bUrl).'&cat='.$_SESSION["key"].'.html">'.$d->titleNoFormatting.'</a></h1>
                      </div>
                    </div>
                  </div>

            ';

    }
    
?>

<div class="col-md-12">
<ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li>
                    <form class="pull-left" action="./" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="1" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==1) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="1" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="12" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==12) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="2" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="24" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==24) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="3" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="36" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==36) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="4" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="48" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==48) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="5" />
                    </form>
              </li>
              <li>
                    <form class="pull-left" action="./" method="GET">
                        <input type="hidden" name="search" value="<?php echo $_SESSION['key']; ?>" />
                        <input type="hidden" name="idPage" value="56" />
                        <input type="submit" style="border:1px solid #dfdfdf; border-radius: 50% !important;margin: 0 5px;" <?php if ($_SESSION['rsz']==56) { echo 'class="btn btn-info"'; } else { ?> class="btn btn-default" <?php } ?> value="6" />
                    </form>
              </li>
              <li class="disabled"><a href="#">»</a></li>
            </ul>
</div>
<?php
}
echo '
        </div>
    </div>

</div>';
?>
<?php include('footer.php'); ?>

<title>PocketCore | Loading...</title>

    <link rel="stylesheet" type="text/css" href="template/css/materialize.min.css">
    <!-- This have to come after importing materialize css in order to overwrite it's values -->
    <link href="template/css/main.css" type="text/css" rel="stylesheet"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="template/js/materialize.min.js"></script>
    <script type="text/javascript" src="template/js/main.js"></script>
    <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Loads UTF-8 characters-->
        <meta charset="UTF-8"/>
    <!-- FontAwesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
</head>
        <div class="header">
    		<nav class="theme-color">
    		  <div class="nav-wrapper theme-color">
    		     <a href="#" class="brand-logo center"><h4 style="margin-left: 7px; margin-top: 12px;">PocketCore</h4></a>
    		         <?php
    		            $left = "<ul class='left hide-on-med-and-down'>";
    		            $right = "<ul class='right hide-on-med-and-down'>";
    		            
    		            foreach($this->getMenuItems() as $id => $item){
    		                if($item['type'] === 'link'){
        		                if($item['side'] == 'left'){
        		                    # Left
        		                   if($item['visible']) $left .= "<li class='waves-effect waves-light ".($id == $_GET['app'] ? 'active' : '')."'><a href='".$item['link']."'>".$item['display']."</a></li>";
        		                } else {
        		                    # Right
        		                    if($item['visible']) $right .= "<li class='waves-effect waves-light ".($id == $_GET['app'] ? 'active' : '')."'><a href='".$item['link']."'>".$item['display']."</a></li>";
        		                }
    		                } elseif ($item['type'] == 'file'){
    		                    require $this->getAsset($item['file']);
    		                }
    		            }
    		            $left .= "</ul>";
    		            $right .= "</ul>";
    		            echo $left.$right;
    		         ?>
    		  </div>
    		</nav>
    	</div>
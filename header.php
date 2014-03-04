

<nav id="MainNav" class="navbar sticky">
<div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <!-- This button toggles visibility of menu on mobile devices -->
            </button>
            <a class="brand" href="index.php<?php if ($lang == "en") { echo "?lang=en";} ?>"><div class="header_img" style="margin-top: -20px; height: 50px; width: 50px; border: none"></div></a>
            <div class="nav-collapse collapse">
                <ul class="nav nav-pills">                   
                    <li><a href="works.php<?php if ($lang == "en") { echo "?lang=en";} ?>">
					<?php if ($lang == "en")
					{
						echo "Projects";					
					}
					else
					{
						echo "Projets";
					}
					?>
					</a></li> 
					<li><a href="biography.php<?php if ($lang == "en") { echo "?lang=en";} ?>">
					
					<?php if ($lang == "en")
					{
						echo "Biography";					
					}
					else
					{
						echo "Biographie";
					}
					?></a></li>
                    <li><select style="border: none; margin-top: 22px; width:110px; text-transform: none;" onchange="
				
					var str = window.location.href;
					
					str = str.split('?')[0];
					str = str.split('#')[0];
					
					str = str + '?';
					
					if (<?php if (isset($id))
					echo 'true';
else
					echo 'false';
					?>)
					{
					  str = str + 'id=' + <?php if (isset($id))
					  echo "'".$id."&'";
					  else echo "'&'";
					  ?>;
					}

					if (this.value == 'fr')
					{
						window.location.href = str;
					}
					else if (this.value == 'en')
					{					
						window.location.href =  str + '&lang=en';					
					}
					
					" id="combobox" style="margin-top: 22px; width : 110px;  margin-right: -20px " >
					
					<?php

					if ($lang == "en")
					{
					echo '
							<option style="font-family: gulim " value="en">English</option>
							<option style="font-family: gulim " value="fr">Français</option>
					';
					}
					else
					{
						echo '
						<option style="font-family: gulim " value="fr">Français</option>
						<option style="font-family: gulim " value="en">English</option>
						' ;
					}
					?>
						</select></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

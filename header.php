

<nav id="MainNav" class="navbar sticky">
<div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <!-- This button toggles visibility of menu on mobile devices -->
            </button>
            <a class="brand" href="index.php"><div class="header_img" style="margin-top: -20px; height: 50px; width: 50px; border: none"></div></a>
            <div class="nav-collapse collapse">
                <ul class="nav nav-pills">                   
                    <li><a href="works.php">Projects</a></li> 
					<li><a href="biography.php">Biography</a></li>
                    <li><select style="border: none; margin-top: 22px; width:110px" onchange="

					if (this.value == 'fr')
					{
//						window.location.href = 'http://www.google.com';
					}
					else if (this.value == 'en')
					{
//						window.location.href = 'www.google.com';					
					}
					
					" id="combobox" style="margin-top: 22px; width : 110px;  margin-right: -20px " >
							<option style="font-family: gulim " value="en">English</option>
							<option style="font-family: gulim " value="fr">Français</option>
						</select></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php if(isset($_SESSION["ID"])) { ?>
  <header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Contact</a></li>
            <li><a href="cv.php">Cv</a></li>
            <button class="dropbtn" onclick="myFunction()">Loisir
              <i class="fa fa-caret-down"></i>
            </button>
            <li><a href="profil.php">Mon compte</a></li>
            <li><a href="chat.php">Chatbox</a></li>
        </ul>
         <div>
            <div class="dropdown-content" id="myDropdown">
                <a href="interet.php" class="colonne"><img id="avatar" src="img/hobbies.jpg"/><p>Loisir</p></a>
              <a href="jeux.php"class="colonne"><img id="avatar" src="img/jeuxvid.jpg"/><p>Jeux-Vidéo</p></a>
              <a href="film-série.php"class="colonne"><img id="avatar" src="img/navfilm.jpg"/><p>Film</p></a>
              <a href="histoire.php" class="colonne"><img id="avatar" src="img/histoire.jpg"/><p>Histoire</p></a>
              <a href="science.php" class="colonne"><img id="avatar" src="img/espace1.jpg"/><p>Science</p></a>
            </div> 
            </div>
        </ul>
    </nav>
<?php } else { ?>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Contact</a></li>
            <li><a href="cv.php">Cv</a></li>
            <button class="dropbtn" onclick="myFunction()">Loisir
              <i class="fa fa-caret-down">
                  
              </i>
            </button>
            <li><a href="connexion.php">Connexion</a></li>
            <li><a href="chat.php">Chatbox</a></li>
        </ul>
         <div>
            <div class="dropdown-content" id="myDropdown">
                <a href="interet.php" class="colonne"><img id="avatar" src="img/hobbies.jpg"/><p>Loisir</p></a>
              <a href="jeux.php"class="colonne"><img id="avatar" src="img/jeuxvid.jpg"/><p>Jeux-Vidéo</p></a>
              <a href="film-série.php"class="colonne"><img id="avatar" src="img/navfilm.jpg"/><p>Film</p></a>
              <a href="histoire.php" class="colonne"><img id="avatar" src="img/histoire.jpg"/><p>Histoire</p></a>
              <a href="science.php" class="colonne"><img id="avatar" src="img/espace1.jpg"/><p>Science</p></a>
            </div> 
            </div>
        </ul>
    </nav>
  </header>
<?php } ?>

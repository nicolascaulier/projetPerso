<?php

function nav()
{
echo "<nav class=\"navbar navbar-expand-lg navbar-white bg-dark\">\n";
echo "<a class=\"navbar-brand\" href=\"#\"><img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.PNG\"width=\"50px;\"></a>\n";
echo "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n";
echo "<span class=\"navbar-toggler-icon\"></span>\n";
echo "</button>\n";
echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n";
echo "<ul class=\"navbar-nav mr-auto\">\n";  
echo "<li class=\"nav-item active\">\n";
echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
echo "Nicolas\n";
echo "</a>\n";
echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
echo "<a class=\"dropdown-item\" href=\"#\">Accueil</a>\n";
echo "<div class=\"dropdown-divider\"></div>\n";
echo "<a class=\"dropdown-item\" href=\"#\">Loisir</a>\n";
echo "<div class=\"dropdown-divider\"></div>\n";
echo "<a class=\"dropdown-item\" href=\"#\">Jeux</a>\n";        
echo "</div>\n";
echo "</li>\n";
echo "<li class=\"nav-item\">\n";
echo "<a class=\"nav-link\" href=\"#\">New</a>\n";
echo "</li>\n";
echo "<li class=\"nav-item\">\n";
echo "<a class=\"nav-link\" href=\"#\">Formulaire</a>\n";
echo "</li>\n";
echo "<li class=\"nav-item\">\n";
echo "<a class=\"nav-link\" href=\"#\">CV</a>\n";
echo "</li>\n";    
echo "<li class=\"nav-item dropdown\">\n";
echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
echo "connexion\n";
echo "</a>\n";
echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
echo "<a class=\"dropdown-item\" href=\"#\">enregistrer</a>\n";
echo "<div class=\"dropdown-divider\"></div>\n";
echo "<a class=\"dropdown-item\" href=\"#\">mon compte </a>\n";
echo "</div>\n";
echo "</li>\n";    
echo "</ul>\n";    
echo "<a href=\"#\" class=\"far fa-sign-in-alt\"></a>\n";
echo "<a href=\"#\" class=\"fa fa-user\"></a>\n";
   
echo "<a href=\"#\" class=\"fa fa-twitch\"></a>\n";
echo "<a href=\"#\" class=\"fa fa-twitter\"></a>\n";
echo "<a href=\"#\" class=\"fa fa-youtube\"></a>\n";

echo "</ul>\n";
echo "</div>\n";
echo "</div>\n";
echo "</nav>\n";
echo "<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>\n";
echo "<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>\n";
echo "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>\n";
}
?>
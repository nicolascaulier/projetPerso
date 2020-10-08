<?php
function accueilbody()
{ 

$str ="<input class=\"\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">";


$str .= "<div class=\"container\">";
$str .= "<div class=\"row\">";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"test.jpg\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "<div class=\"col-sm-4\">";
$str .=  "<img src=\"Images/Images_Charte_Graphique/logo_ozinor_propo_SIMPLE_v2.png\" width=150px;>";
$str .=  "</div>";
$str .=  "</div>";
$str .=  "</div>";

return $str;
}



function carousel()
{

    $str   = "<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">";
    $str  .= "<ol class=\"carousel-indicators\">";
    $str  .= "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>";
    $str  .= "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>";
    $str  .= "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>";
    $str  .= "</ol>";
    $str  .= "<div class=\"carousel-inner\">";
    $str  .= "<div class=\"carousel-item active\">";
    $str  .= "<img class=\"d-block w-100\" src=\"...\" alt=\"First slide\">";
    $str  .= "</div>";
    $str  .= "<div class=\"carousel-item\">";
    $str  .= "<img class=\"d-block w-100\" src=\"...\" alt=\"Second slide\">";
    $str  .= "</div>";
    $str  .= "<div class=\"carousel-item\">";
    $str  .= "<img class=\"d-block w-100\" src=\"...\" alt=\"Third slide\">";
    $str  .= "</div>";
    $str  .= "</div>";
    $str  .= "<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">";
    $str  .= "<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>";
    $str  .= "<span class=\"sr-only\">Previous</span>";
    $str  .= "</a>";
    $str  .= "<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">";
    $str  .= "<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>";
    $str  .= "<span class=\"sr-only\">Next</span>";
    $str  .= "</a>";
    $str  .= "</div>";

    return $str;

}






?>
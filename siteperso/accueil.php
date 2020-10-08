<?php

include "header.php";
echo entete();
include "navbar.php";
echo nav();

?>

<body>
<div>
<?php

include_once "bodyaccueil.php";
echo carousel();

?>
</div>
<div>
<?php


echo accueilbody();

?>
</div>
<?php

Include "footer.php";
echo footer();

?>

</body>

</html>

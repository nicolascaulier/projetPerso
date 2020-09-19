var yIndex = 0;
        carousel();

        function carousel() {
             var i;
             var x = document.getElementsByClassName("carrousel2");
             for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        yIndex++;
        if (yIndex > x.length) {yIndex = 1}
            x[yIndex-1].style.display = "block";
            setTimeout(carousel, 3000);
        }

 var myIndex = 0;
        carousel3();

        function carousel3() {
             var i;
             var x = document.getElementsByClassName("carrousel3");
             for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel3, 3000);
        }
        
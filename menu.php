<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/8487ba5679.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            
                <span class="head-name">PATEL ICEGOLA™</span>
            
                <span class="hmec">
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="exotic.php">Exotic Add-ons</a>
                <a href="contact.php">Contact</a>
                </span>

        </header>

        <div>
            <img src="images/menu-img.jpg" class="menupic">
        </div>

        <hr>

        <div class="f-container">

            <div class="f-but">
                <button onclick="changefunction()" id="but">Desi Flavours</button>
                <button onclick="changefunction1()" id="but1">American Flavours</button>
           </div>

            <table id="DF">

                <tr>
                    <td> KALA KHATTA AKA INDIAN BLACKBERRY </td>
                    <td style="border-left: 1px solid grey;">KACCHA AAM AKA RAW MANGO (GREEN)</td>
                </tr>
            
                <tr>
                    <td>CADBURY AKA CHOCOLATE</td>
                    <td style="border-left: 1px solid grey;">GULAB AKA ROSE</td>
                </tr>
            
                <tr>
                    <td>JEERA MASALA AKA ZEERA MASALA</td>
                    <td style="border-left: 1px solid grey;">KACCHI IMLI AKA TAMARIND</td>
                </tr>
            
                <tr>
                    <td>KHUS - MADE FROM VETIVER PLANT</td>
                    <td style="border-left: 1px solid grey;">KOKUM</td>
                </tr>
            
                <tr>
                    <td>KOTHU AKA GOLDEN APPLE</td>
                    <td style="border-left: 1px solid grey;">NIMBU AKA LEMON LIME</td>
                </tr>
            
                <tr>
                    <td style="border-bottom: none;">NAWABI PAAN</td>
                    <td style="border-left: 1px solid grey;border-bottom: none;">KHATTA MITHA AKA SWEET & SOUR</td>
                </tr>
            
            </table>

                <script>
                    function changefunction1(){

                        document.getElementById("DF").style.marginRight = "30.8em";

                        var a = document.getElementById("DF").rows[0].cells;
                        a[0].innerHTML = "BANANA";
                        a[1].innerHTML = "BLUE RASPBERRY";

                        var b = document.getElementById("DF").rows[1].cells;
                        b[0].innerHTML = "BUBBLE GUM";
                        b[1].innerHTML = "CHERRY";

                        var c = document.getElementById("DF").rows[2].cells;
                        c[0].innerHTML = "COCO COLA";
                        c[1].innerHTML = "COCONUT";

                        var d = document.getElementById("DF").rows[3].cells;
                        d[0].innerHTML = "COTTON CANDY";
                        d[1].innerHTML = "FRUIT PUNCH";

                        var e = document.getElementById("DF").rows[4].cells;
                        e[0].innerHTML = "GRAPE";
                        e[1].innerHTML = "GREEN APPLE";

                        var f = document.getElementById("DF").rows[5].cells;
                        f[0].innerHTML = "MANGO";
                        f[1].innerHTML = "ORANGE";

                        // var g = document.getElementById("DF").rows[6].cells;
                        // g[0].innerHTML = "PASSION FRUIT";
                        // g[1].innerHTML = "PINA COLADA";

                        // var h = document.getElementById("DF").rows[7].cells;
                        // h[0].innerHTML = "PINEAPPLE";
                        // h[1].innerHTML = "ROOT BEER";

                        // var i = document.getElementById("DF").rows[8].cells;
                        // i[0].innerHTML = "STRAWBERRY";
                        // i[1].innerHTML = "VANILLA";

                        // var j = document.getElementById("DF").rows[9].cells;
                        // j[0].innerHTML = "WATERMELON";
                        // j[1].innerHTML = "";

                    }

                    function changefunction(){

                        document.getElementById("DF").style.marginRight = "19.7em";

                        var a = document.getElementById("DF").rows[0].cells;
                        a[0].innerHTML = "KALA KHATTA AKA INDIAN BLACKBERRY";
                        a[1].innerHTML = "KACCHA AAM AKA RAW MANGO (GREEN)";

                        var b = document.getElementById("DF").rows[1].cells;
                        b[0].innerHTML = "CADBURY AKA CHOCOLATE";
                        b[1].innerHTML = "GULAB AKA ROSE";

                        var c = document.getElementById("DF").rows[2].cells;
                        c[0].innerHTML = "JEERA MASALA AKA ZEERA MASALA";
                        c[1].innerHTML = "KACCHI IMLI AKA TAMARIND";

                        var d = document.getElementById("DF").rows[3].cells;
                        d[0].innerHTML = "KHUS - MADE FROM VETIVER PLANT";
                        d[1].innerHTML = "KOKUM";

                        var e = document.getElementById("DF").rows[4].cells;
                        e[0].innerHTML = "KOTHU AKA GOLDEN APPLE";
                        e[1].innerHTML = "NIMBU AKA LEMON LIME";

                        var f = document.getElementById("DF").rows[5].cells;
                        f[0].innerHTML = "NAWABI PAAN";
                        f[1].innerHTML = "KHATTA MITHA AKA SWEET & SOUR";

                        // var g = document.getElementById("DF").rows[6].cells;
                        // g[0].innerHTML = "PASSION FRUIT";
                        // g[1].innerHTML = "PINA COLADA";

                        // var h = document.getElementById("DF").rows[7].cells;
                        // h[0].innerHTML = "PINEAPPLE";
                        // h[1].innerHTML = "ROOT BEER";

                        // var i = document.getElementById("DF").rows[8].cells;
                        // i[0].innerHTML = "STRAWBERRY";
                        // i[1].innerHTML = "VANILLA";

                        // var j = document.getElementById("DF").rows[9].cells;
                        // j[0].innerHTML = "WATERMELON";
                    }
                </script>
        </div>

        <div class="img-coll">

            <img src="images/1.jpg" width="300px" height="300px" class="zoom">
            <img src="images/2.jpg" width="300px" height="300px" class="zoom">
            <img src="images/3.jpg" width="300px" height="300px" class="zoom">

            <img src="images/4.jpg" width="300px" height="300px" class="zoom">
            <img src="images/5.jpg" width="300px" height="300px" class="zoom">
            <img src="images/6.jpg" width="300px" height="300px" class="zoom">

            <img src="images/7.jpg" width="300px" height="300px" class="zoom">
            <img src="images/8.jpg" width="300px" height="300px" class="zoom">
            <img src="images/9.jpg" width="300px" height="300px" class="zoom">

            <img src="images/10.jpg" width="300px" height="300px" class="zoom">
            <img src="images/11.jpg" width="300px" height="300px" class="zoom">
            <img src="images/12.jpg" width="300px" height="300px" class="zoom">

            <img src="images/13.jpg" width="300px" height="300px" class="zoom">
            <img src="images/14.jpg" width="300px" height="300px" class="zoom">
            <img src="images/15.jpg" width="300px" height="300px" class="zoom">

            <img src="images/16.jpg" width="300px" height="300px" class="zoom">
            <img src="images/17.jpg" width="300px" height="300px" class="zoom">
            <img src="images/18.jpg" width="300px" height="300px" class="zoom">

            <img src="images/19.jpg" width="300px" height="300px" class="zoom">
            <img src="images/20.jpg" width="300px" height="300px" class="zoom">
            <img src="images/21.jpg" width="300px" height="300px" class="zoom">

            <img src="images/22.jpg" width="300px" height="300px" class="zoom">
            <img src="images/23.jpg" width="300px" height="300px" class="zoom">
            <!-- <img src="images/6.jpg" width="300px" height="300px">

            <img src="images/1.jpg" width="300px" height="300px">
            <img src="images/2.jpg" width="300px" height="300px">
            <img src="images/3.jpg" width="300px" height="300px">

            <img src="images/4.jpg" width="300px" height="300px">
            <img src="images/5.jpg" width="300px" height="300px">
            <img src="images/6.jpg" width="300px" height="300px">

            <img src="images/1.jpg" width="300px" height="300px">
            <img src="images/2.jpg" width="300px" height="300px">
            <img src="images/3.jpg" width="300px" height="300px">

            <img src="images/4.jpg" width="300px" height="300px">
            <img src="images/5.jpg" width="300px" height="300px">
            <img src="images/6.jpg" width="300px" height="300px"> -->

        </div>


        </body>
        </html>


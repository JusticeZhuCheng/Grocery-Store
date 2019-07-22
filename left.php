
<html>
<head>
<!-- Rollover Demonstration Program -->
<!-- Written by Bernard Doyle -->

<!-- by creating this style we set the display -->
<!--for the whole page to 320 pixels wide and 400 pixels deep -->

<style type="text/css">

#display_area
{   position:absolute;
    top:0px;
    left:0px;
    padding:0px;
    width:380px;
    height: 100%;
}
#shopmenus {
    width: 170px;
    height: 70%;
    line-height: 40px;
    background-color: rgba(39, 39, 39, 0.81);
    margin-top: 15%;
    margin-bottom: 15%;
    text-align: center;
    list-style-type: none;
    padding-top: 20px;
}

#smenus > li {
    position: relative;
    list-style-type: none;
}

.smenu {
    margin-top: 10px;
    display: block;
    width: 130px;
    color: white;
    font-size: 16px;
    list-style-type: none;
}

.smenu:hover {
    background-color: crimson;
}

.hasmenu:hover .catalogs {
    display: block;
}

.hasmenu:hover .smenu {
    background-color: crimson;
}

.hasmenutwo:hover .twocatalog {
    display: block;
}

.catalogs, .twocatalog {
    background-color: white;
    display: none;
    z-index: 50;
    list-style-type: none;
}

.catalogs {
    position: absolute;
    top: 0px;
    left: 130px;
    padding-left: 10px;
    list-style-type: none;

}e

.twocatalog {
     position: absolute;
    top: 0px;
    left: 280px;
    list-style-type: none;
}

.class {
    display: block;
    width: 130px;
    height: 30px;
    line-height: 30px;
    color: black;
    margin-left: 5px;
    text-align: left;
    list-style-type: none;
    border: none;
    padding-left: 5px;
}

.class:hover {
    background-color: #e4e4e4;
    }
</style>

<title> Product List </title>


<body>
<div align="center">Grocery Store</div>
<div id="display_area" name="display_area">
<div id="shopmenus">
    <ul id="smenus">
        <!--导航菜单项-->
        <li class="hasmenu">
            <a href="#" class="smenu">Frozen Food</a>
            <ul class="catalogs">
                <li class="hasmenutwo"><a href="#" class="class">Fish Fingers</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=1000" target="top_right" class="class">500 gram</a></li>
                        <li><a href="show_products.php?product_id=1001" target="top_right" class="class">1000 gram</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=1002" target="top_right"  class="class">Hamburger Patties</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=1003" target="top_right" class="class">Shelled Prawns</a></li>
                <li class="hasmenutwo"><a href="#" class="class">Tub Ice Cream</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=1004" target="top_right" class="class">1 Litre</a></li>
                        <li><a href="show_products.php?product_id=1005" target="top_right" class="class">2 Litre</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="hasmenu">
            <a href="#" class="smenu">Home Health</a>
            <ul class="catalogs">
                <li class="hasmenutwo"><a href="#" class="class">Panadol</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=2000" target="top_right" class="class">Pack 24</a></li>
                        <li><a href="show_products.php?product_id=2001" target="top_right" class="class">Bottle 50</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=2002" target="top_right" class="class">Bath Soap</a></li>
                <li class="hasmenutwo"><a href="#" class="class">Garbage Bags</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=2003" target="top_right" class="class">Pack 10</a></li>
                        <li><a href="show_products.php?product_id=2004" target="top_right" class="class">Pack 50</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=2005" target="top_right" class="class">Washing Powder</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=2006" target="top_right" class="class">Laundry Bleach</a></li>
            </ul>
        </li>
        <li class="hasmenu"><a href="#" class="smenu">Fresh Food</a>
            <ul class="catalogs">
                <li class="hasmenutwo"><a href="#" class="class">Cheddar Cheese</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=3000" target="top_right" class="class">500 gram</a></li>
                        <li><a href="show_products.php?product_id=3001" target="top_right" class="class">1000 gram</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=3002" target="top_right" class="class">T'Bone Steak</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=3003" target="top_right" class="class">Navel Oranges</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=3004" target="top_right" class="class">Bananas</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=3005" target="top_right" class="class">Peaches</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=3006" target="top_right" class="class">Grapes</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=3007" target="top_right" class="class">Apples</a></li>
            </ul>
        </li>
        <li class="hasmenu"><a href="#" class="smenu">Beverages</a>
            <ul class="catalogs">
                <li class="hasmenutwo"><a href="#" class="class">Earl Grey Tea Bags</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=4000" target="top_right" class="class">Pack 25</a></li>
                        <li><a href="show_products.php?product_id=4001" target="top_right" class="class">Pack 100</a></li>
                        <li><a href="show_products.php?product_id=4002" target="top_right" class="class">Pack 200</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="#" class="class">Instant Coffee</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=4003" target="top_right" class="class">200 gram</a></li>
                        <li><a href="show_products.php?product_id=4004" target="top_right" class="class">500 gram</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=4005" target="top_right" class="class">Chocolate Bar</a></li>
            </ul>
        </li>
        <li class="hasmenu"><a href="#" class="smenu">Pet Food</a>
            <ul class="catalogs">
                <li class="hasmenutwo"><a href="#" class="class">Dry Dog Food</a>
                    <ul class="twocatalog">
                        <li><a href="show_products.php?product_id=5000" target="top_right" class="class">5 kg Pack</a></li>
                        <li><a href="show_products.php?product_id=5001" target="top_right" class="class">1 Kg Pack</a></li>
                    </ul>
                </li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=5002" target="top_right" class="class">Bird Food</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=5003" target="top_right" class="class">Cat Food</a></li>
                <li class="hasmenutwo"><a href="show_products.php?product_id=5004" target="top_right" class="class">Fish Food</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
</body>
</html>

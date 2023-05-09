<!-- header section starts  -->
<div class="header">
            <div class="search-box">
                <input class="search-text" type="text" placeholder="Type to search">
                <a class="search-btn" href="#">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="cart-box">
                <a class="cart-btn" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
                <nav id="navbar">
                    <img src="../images/logo.png" class="logo">
                    <ul id="menu">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Product</li>
                        <li>Contact</li>
                        <li>More info</li>
                    </ul>
                </nav>
            </div>
            <?php
            $categories = array(
                array(1, "Smart phone"),
                array(2,"Laptop"),
                array(3, 'Tab'),
                array(4,'Accessories')
            );
            ?>
            <div class="header_bottom">
                <div class="menu">
                    <ul>
                        <li class="active"><a href="sneakershop.php">Home</a></li> 
        <?php
            foreach($categories as $cat){
        ?>
        <li><a href="sneakershop.php?catid=<?=$cat[0]?>"><?=$cat[1]?></a></li>
        <?php
            }
        ?>
        <script>
            var navbar = document.getElementById("navbar");
            var menu = document.getElementById("menu");
            window.onscroll = function(){
                if(window.pageYOffset >= menu.offsetTop){
                    navbar.classList.add("sticky");
                }
                else{
                    navbar.classList.remove("sticky");
                }
            }
        </script>
        <!-- header section ends  -->
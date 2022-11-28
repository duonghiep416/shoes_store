
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes-store</title>
    <link rel="stylesheet" href="assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/main.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="header">
        <a href="" class="logo"><img src="assets/img/jump..png" alt=""></a>
        <div class="nav__PC">
            <ul class="nav__PC-list">
                <li>
                    <a class="nav__PC-link" href="">Home</a>
                </li>
                <li>
                    <a class="nav__PC-link" href="#empty-best-sellers">Best Sellers</a>
                </li>
                <li>
                    <a class="nav__PC-link" href="#empty-man">Man</a>
                </li>
                <li>
                    <a class="nav__PC-link" href="#!">Woman</a>
                </li>
                <li>
                    <a class="nav__PC-link" href="#!">Kids</a>
                </li>
                <li>
                    <a class="nav__PC-link" href="#!">Sales</a>
                </li>
            </ul>
        </div>
        
        <div class="search">
            <input type="search" placeholder="Search here...">
            <i class="ti-search"></i>
        </div>
        <input type="checkbox" name="" class="nav__input" id="nav__mobile-input">
        <label for="nav__mobile-input" class="nav__bars--icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </label>
        <label for="nav__mobile-input" class="nav__overlay"></label>
        <div class="nav__mobile">
            <label for="nav__mobile-input" class="nav__mobile-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
            </label>
            <ul class="nav__mobile-list">
                <li>
                    <a class="nav__mobile-link" href="">Home</a>
                </li>
                <li>
                    <a class="nav__mobile-link" href="#empty-best-sellers">Best Sellers</a>
                </li>
                <li>
                    <a class="nav__mobile-link" href="#empty-man">Man</a>
                </li>
                <li>
                    <a class="nav__mobile-link" href="#!">Woman</a>
                </li>
                <li>
                    <a class="nav__mobile-link" href="#!">Kids</a>
                </li>
                <li>
                    <a class="nav__mobile-link" href="#!">Sales</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="content">
        <div class="content-infor">
            <h1>Nike <span>Air</span> Max</h1>
            <div class="desc"><p>It is a long established fact that a reader 
                will be distracted by the readable content of a page when 
                looking at its layout.</p></div>
            <input type="button" value="Shop now">
        </div>
        <div class="shoes-image">
            <input type="radio" name="color" id="green" checked>
            <img src="assets/img/greenshoesbig.png" alt="">
        </div>
        <div class="shoes-image">
            <input type="radio" name="color" id="red">
            <img src="assets/img/redshoesbig.png" alt="">
        </div>
        <div class="shoes-image">
            <input type="radio" name="color" id="blue">
            <img src="assets/img/blueshoesbig.png" alt="">
        </div>
        <div class="colors">
            <label for="green">
                <!-- <div class="colorName">Green</div> -->
                <div class="ellipse" style="background: #17b4cc"></div>
            </label>
            <label for="red">
                <!-- <div class="colorName">Red</div> -->
                <div class="ellipse" style="background: #c92e3d"></div>
            </label>
            <label for="blue">
                <!-- <div class="colorName">Blue</div> -->
                <div class="ellipse" style="background: #2676c1"></div>
            </label>
        </div>
        <div class="hide-move-top"></div>
    </div>
    <div id="empty-best-sellers"></div>
    <h2 class="product-title" id="best-sellers">Best Sellers</h2>
    <div class="product">
        <div class="container__card">
            <?php
                $connect = mysqli_connect('localhost', 'root', '', 'add_product');
                if(!$connect) {
                    echo "Connection failed";
                }
                $sql = "select * from products";
                $result = mysqli_query($connect,$sql);
                while($row_product = mysqli_fetch_array($result)) {
                    $product_id = $row_product['product_id'];
                    $product_name = $row_product['product_name'];
                    $product_price = $row_product['product_price'];
                    $product_img = $row_product['product_img'];
                    $size_1 = $row_product['size_1'];
                    $size_2 = $row_product['size_2'];
                    $size_3 = $row_product['size_3'];
                    $size_4 = $row_product['size_4'];
                    echo "
                        <div class='card'>
                            <i class='ti-heart'></i>
                            <i class='ti-shopping-cart-full'></i>
                            <div class='card__img'>
                                <img style='padding: 30px 30px;' src='Image/$product_img' alt=''>
                            </div>
                
                            <h2 class='card__title'>$product_name</h2>
                            <p class='card__price'>$$product_price</p>
                
                            <div class='card__size'>
                                <h3>Size:</h3>
                                <span>$size_1</span>
                                <span>$size_2</span>
                                <span>$size_3</span>
                                <span>$size_4</span>
                            </div>
                            <div class='card__color'>
                                <h3>Color:</h3>
                                <span class='green'></span>
                                <span class='red'></span>
                                <span class='black'></span>
                                <span class='white'></span>
                            </div>
                            <button class='card__buy'>Buy now</button>
                            <button class='card__add'>Add cart</button>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
    <!-- <div id="empty-man"></div>
    <h2 class="product-title" id="man">Man</h2>
    <div class="product">
        <div class="container__card">
            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img style="padding: 30px 30px;" src="assets/img/pngaaa.com-951423.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 12</h2>
                <p class="card__price">$80</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>
    
            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img src="assets/img/pngaaa.com-951416.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 13</h2>
                <p class="card__price">$99</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div> 
    
            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img src="assets/img/pngaaa.com-951346.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 14</h2>
                <p class="card__price">$87</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>
    
            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img src="assets/img/pngaaa.com-951418.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 15</h2>
                <p class="card__price">$85</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>
    
            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img style="padding: 33px 33px;" src="assets/img/pngaaa.com-951399.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 80</h2>
                <p class="card__price">$90</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>
    
            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img style="width: 75%;" src="assets/img/pngaaa.com-951463.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 17</h2>
                <p class="card__price">$78</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>

            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img src="assets/img/pngaaa.com-951424-1.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 18</h2>
                <p class="card__price">$89</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>

            <div class="card">
                <i class="ti-heart"></i>
                <i class="ti-shopping-cart-full"></i>
                <div class="card__img">
                    <img src="assets/img/pngaaa.com-951344.png" alt="">
                </div>
    
                <h2 class="card__title">Nike Zoom KD 19</h2>
                <p class="card__price">$90</p>
    
                <div class="card__size">
                    <h3>Size:</h3>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                </div>
                <div class="card__color">
                    <h3>Color:</h3>
                    <span class="green"></span>
                    <span class="red"></span>
                    <span class="black"></span>
                    <span class="white"></span>
                </div>
                <button class="card__buy">Buy now</button>
                <button class="card__add">Add cart</button>
            </div>
        </div>
    </div> -->
    
        <div id="move_to_top">
            <a href="#" class="on-top"><i class="ti-arrow-circle-up"></i></a>
        </div>

    <div id="footer">
        <table >
            <tr>
                <th>MY ACCOUNT</th>
                <th>EXTRAS</th>
                <th>CUSTOMERS SERVICE</th>
                <th>LET'S GET IN TOUCH</th>
            </tr>
    
            <tr>
                <td><a href="#!">Orders</a></td>
                <td><a href="#!">About Us</a></td>
                <td><a href="#!">About Your Order</a></td>
                <td rowspan="3">
                    <div class="border facebook">
                        <a href="https://www.facebook.com/" target="_blank"><i class="ti-facebook"></i></a>
                    </div>
                    <div class="border linkedin">
                        <a href="https://www.linkedin.com/" target="_blank"><i class="ti-linkedin"></i></a>
                    </div>
                    <div class="border youtube">
                        <a href="https://www.youtube.com/" target="_blank"><i class="ti-youtube"></i></a>
                    </div>
                    <div class="border twitter">
                        <a href="https://twitter.com/" target="_blank"><i class="ti-twitter-alt"></i></a>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td><a href="#!">Profile Details</a></td>
                <td><a href="#!">Contact Us</a></td>
                <td><a href="#!">Wish List</a></td>
                <td></td>
            </tr>
    
            <tr>
                <td></td>
                <td><a href="#!">Gift Certificates</a></td>
                <td><a href="#!">Compare List</a></td>
                <td></td>
            </tr>
        </table>
    </div>
    

    
</body>
</html>
<div class="first-navbar">
            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand" href="/Shopmart/index.php">
                        <span class="text-upeercase shopmart">shopmart</span>
                    </a>
      
                    <div class="search">
                      <form class="d-flex">
                          <input class="form-control search-control" type="search" placeholder="Search for Product" aria-label="Search">
                          <button class="btn btn-outline-success btn0" type="submit">Search</button>
                        </form>
                    </div>
      
                    <div class="cart">
                      <span><i class="fas fa-cart-plus"></i></span>
                      <strong class="cart-my">My Cart</strong>
                    </div>
                    
                    <div class="login">
                        <?php
                          if(isset($_COOKIE['email'])) {
                          echo '<a href="/Shopmart/customer/account/myaccount.php">
                                <i class="fas fa-user-lock"></i>
                                <span>My Account</span>
                              </a>';
          
                              echo '<a href="/Shopmart/Database/logout.php">
                                  <i class="fas fa-user-plus"></i>
                                  <span>Log Out</span>
                                </a>';

                          }
                          else{
                            
                          echo '<a href="/Shopmart/customer/login/login.php">
                                <i class="fas fa-user-lock"></i>
                                <span>Login</span>
                              </a>';
          
                              echo '<a href="/Shopmart/customer/registation/create.php">
                                  <i class="fas fa-user-plus"></i>
                                  <span>Registion</span>
                                </a>';
                          }

                        ?>
                    </div>
                </div>
              </nav>
        </div>


        <div class="snd-navbar">

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><i class="fas fa-bars"></i></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="nav navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">

                      <li class="nav-item">
                        <a class="nav-link" id="home-f" aria-current="page" href="../index.php">Home</a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link" href="/Shopmart/product/woman.php" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                          woman's fashion
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'woman'.'&catagory='.'top'.'"'; ?>>Tops</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'woman'.'&catagory='.'winter'.'"'; ?>>winter cloth</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'woman'.'&catagory='.'hoodies'.'"'; ?>>Hoodies</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'woman'.'&catagory='.'accesori'.'"'; ?>>accessories</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link" href="/Shopmart/product/man.php" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                          man's fashion
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'man'.'&catagory='.'winter'.'"'; ?>>winter collection</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'man'.'&catagory='.'tshirt'.'"'; ?>>Tshirt</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'man'.'&catagory='.'shoe'.'"'; ?>>man's shoes</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link" href="/Shopmart/product/smartphone.php" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                          smartphones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'smartphone'.'&brand='.'nokia'.'"'; ?>>nokia</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'smartphone'.'&brand='.'samsung'.'"'; ?>>samsung</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'smartphone'.'&brand='.'apple'.'"'; ?>>apple</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'smartphone'.'&brand='.'mi'.'"'; ?>>mi</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'smartphone'.'&brand='.'oppo'.'"'; ?>>oppo</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link" href="/Shopmart/product/ena.php" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                          electronics & appliances
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'ena'.'&catagory='.'home'.'"'; ?>>home appliances</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'ena'.'&catagory='.'kitchen'.'"'; ?>>kitchen appliances</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link" href="/Shopmart/product/computer.php" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                          computer & accessories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'computer'.'&catagory='.'laptop'.'"'; ?>>laptop</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'computer'.'&catagory='.'dekstop'.'"'; ?>>dekstop</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'computer'.'&catagory='.'allone'.'"'; ?>>all in one pc</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'computer'.'&catagory='.'accesori'.'"'; ?>>acessories</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link" href="/Shopmart/product/home.php" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                          home & beauty
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown6">
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'gromming'.'"'; ?>>gromming product</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'trimmer'.'"'; ?>>trimmer & shaver</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'dryer'.'"'; ?>>hair dryer</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'hair'.'"'; ?>>hair product</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'perfumes'.'"'; ?>>Men's Perfumes & Fragrances</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'perfumes'.'"'; ?>>women's Perfumes & Fragrances</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'watch'.'"'; ?>>men's watch</a></li>
                          <li><a class="dropdown-item" <?php echo 'href="/Shopmart/product/page.php?table='.'home'.'&catagory='.'watch'.'"'; ?>>women's watch</a></li>
                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </nav>

        </div>
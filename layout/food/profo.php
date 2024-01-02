
<div id="pofo">
    <div id="filter">
        <?php 
               $thucphamchinh = thucphamchinh($conn);
               while($row_thucphamchinh=mysqli_fetch_array($thucphamchinh)){

        ?>
        
        <button class="btn" onclick="filterSelection('ingredient','<?php echo $row_thucphamchinh['ID_thucphamchinh'] ?>')"><?php echo $row_thucphamchinh['Tenthucphamchinh'] ?></button>
    <?php
               }
    ?>   
    </div>
    <div id="minimenu">
        <i class="fa-solid fa-bars"></i>
        <ul class="sub-menu">
            <?php 
               $thucphamchinh = thucphamchinh($conn);
               while($row_thucphamchinh=mysqli_fetch_array($thucphamchinh)){

             ?>
            <li><a onclick="filterSelection('ingredient','<?php echo $row_thucphamchinh['ID_thucphamchinh'] ?>')"><?php echo $row_thucphamchinh['Tenthucphamchinh'] ?></a></li>
             <?php
               }
             ?>   
        </ul>
       
    </div>
    <section id="pof">
        <div class="row">
            <div class="col-md-4 mix cat1 cat4 ingredient haisan top10">
                <div class="portfolio">
                    <img src="./Assets/Images/haisan.jpg" alt="">
  
                    <div class="overlay">
                        <div class="hover_text">
                            <i class="fa-sharp fa-solid fa-plus" onclick="openForm('formhaisan')"></i>
                        </div>
                    </div>
                </div>
                 <div class="form container-pop" id="formhaisan">
                    <section id="sanpham" class="section_tab_product">
                        <div class="bg_module">
                            <div class="container">
                                <div id="filter">
                                    <?php 
                                $thucphamchinhhaisan = thucphamchinhhaisan($conn);
                                while($row_thucphamchinhhaisan=mysqli_fetch_array( $thucphamchinhhaisan)){

                            ?>
                                    <button class="btn" onclick="filterSelection('haisann','<?php echo $row_thucphamchinhhaisan['ID_thucphamchinh2'] ?>') "><?php echo $row_thucphamchinhhaisan['Tenthucphamchinh2'] ?></button>

                            <?php   }  ?>
                                </div>
                                <div id="minimenu">
                                    <i class="fa-solid fa-bars"></i>
                                    <ul class="sub-menu">
                                    <?php 
                                $thucphamchinhhaisan = thucphamchinhhaisan($conn);
                                while($row_thucphamchinhhaisan=mysqli_fetch_array( $thucphamchinhhaisan)){

                                 ?>
                                        <li><a onclick="filterSelection('haisann','<?php echo $row_thucphamchinhhaisan['ID_thucphamchinh2'] ?>')"><?php echo $row_thucphamchinhhaisan['Tenthucphamchinh2'] ?></a></li>
                             <?php   }  ?>
                                    </ul>
                                </div>
                                <div class="row container-mini">
                                    <?php 
                                    
                                    $baidangmonanhaisan = baidangmonanhaisan($conn);
                                    while($row_baidangmonanhaisan=mysqli_fetch_array($baidangmonanhaisan)){
                                    
                                    ?>
                                    <div class="col-xl-3 col-lg-5 col-sm-15 haisann <?php echo $row_baidangmonanhaisan['ID_thucphamchinh'] ?>">
                                        <div class="product">
                                            <div class="product-thum">
                                                <img class="lazyload" src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['anhmon'] ?>">
                                                <h3><?php echo $row_baidangmonanhaisan['Tenmonan'] ?></h3>

                                                <div class="overlay">
                                                    <div class="hover_text">
                                                        <i class="fa-sharp fa-solid fa-plus" onclick="openForm('<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>')"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formf container-popf" id="<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>">
                                            <div class="headerf" class="text-center">
                                                <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i> <?php echo $row_baidangmonanhaisan['Tenmonan'] ?> <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i>
                                            </div>

                                            <div class="wp-contentf">

                                                <div class="contentf">
                                                    <p> <?php echo $row_baidangmonanhaisan['Motamonan'] ?>

                                                    </p>
                                                </div>

                                                <div class="sidebar">
                                                    <div class="anh">
                                                        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                            
                                                        </swiper-container>

                                                        <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true">
                                                        <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanhaisan['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                        </swiper-container>

                                                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="footerf">
                                                <div class="tabs">
                                                    <ul class="nav-tabs">
                                                        <li class="active"><a href="#<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>-1">Chuẩn bị</a></li>
                                                        <li><a href="#<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>-2">Cách làm</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>-1" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonanhaisan['Thoigianchuanbi'] ?>
                                                            <h1>Nguyên liệu</h1>
                                                            <?php echo $row_baidangmonanhaisan['Nguyenlieu'] ?>
                                                        </div>

                                                        <div id="<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>-2" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonanhaisan['Thoigianlam'] ?>
                                                            <h1>Công thức :</h1>
                                                            <?php echo $row_baidangmonanhaisan['Congthuc'] ?>

                                                            <div class="video"><iframe width="560" height="315" src="<?php echo $row_baidangmonanhaisan['Video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-x" id="close-cart" onclick="closeForm('<?php echo $row_baidangmonanhaisan['ID_baidang'] ?>')"></i>

                                        </div>
                                    </div>

                                    <?php 
                                    
                                                            }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <i class="fa-solid fa-x" id="close-cart" aria-hidden="true" onclick="closeForm('formhaisan')"></i>
                </div>
            </div>



            
            <div class="col-md-4 mix cat1 cat4 ingredient thit top10">
                <div class="portfolio">
                    <img src="./Assets/Images/thit.jpg" alt="">
  
                    <div class="overlay">
                        <div class="hover_text">
                            <i class="fa-sharp fa-solid fa-plus" onclick="openForm('formthit')"></i>
                        </div>
                    </div>
                </div>
                 <div class="form container-pop" id="formthit">
                    <section id="sanpham" class="section_tab_product">
                        <div class="bg_module">
                            <div class="container">
                                <div id="filter">
                                    <?php 
                                $thucphamchinhthit = thucphamchinhthit($conn);
                                while($row_thucphamchinhthit=mysqli_fetch_array( $thucphamchinhthit)){

                            ?>
                                    <button class="btn" onclick="filterSelection('thitt','<?php echo $row_thucphamchinhthit['ID_thucphamchinh2'] ?>') "><?php echo $row_thucphamchinhthit['Tenthucphamchinh2'] ?></button>

                            <?php   }  ?>
                                </div>
                                <div id="minimenu">
                                    <i class="fa-solid fa-bars"></i>
                                    <ul class="sub-menu">
                                    <?php 
                                $thucphamchinhthit = thucphamchinhthit($conn);
                                while($row_thucphamchinhthit=mysqli_fetch_array( $thucphamchinhthit)){

                                 ?>
                                        <li><a onclick="filterSelection('thitt','<?php echo $row_thucphamchinhthit['ID_thucphamchinh2'] ?>')"><?php echo $row_thucphamchinhthit['Tenthucphamchinh2'] ?></a></li>
                             <?php   }  ?>
                                    </ul>
                                </div>
                                <div class="row container-mini">
                                    <?php 
                                    
                                    $baidangmonanthit = baidangmonanthit($conn);
                                    while($row_baidangmonanthit=mysqli_fetch_array($baidangmonanthit)){
                                    
                                    ?>
                                    <div class="col-xl-3 col-lg-5 col-sm-15 thitt <?php echo $row_baidangmonanthit['ID_thucphamchinh'] ?>">
                                        <div class="product">
                                            <div class="product-thum">
                                                <img class="lazyload" src="./Assets/images 2/<?php echo $row_baidangmonanthit['anhmon'] ?>">
                                                <h3><?php echo $row_baidangmonanthit['Tenmonan'] ?></h3>

                                                <div class="overlay">
                                                    <div class="hover_text">
                                                        <i class="fa-sharp fa-solid fa-plus" onclick="openForm('<?php echo $row_baidangmonanthit['ID_baidang'] ?>')"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formf container-popf" id="<?php echo $row_baidangmonanthit['ID_baidang'] ?>">
                                            <div class="headerf" class="text-center">
                                                <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i> <?php echo $row_baidangmonanthit['Tenmonan'] ?> <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i>
                                            </div>

                                            <div class="wp-contentf">

                                                <div class="contentf">
                                                    <p> <?php echo $row_baidangmonanthit['Motamonan'] ?>

                                                    </p>
                                                </div>

                                                <div class="sidebar">
                                                    <div class="anh">
                                                        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                            
                                                        </swiper-container>

                                                        <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true">
                                                        <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonanthit['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                        </swiper-container>

                                                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="footerf">
                                                <div class="tabs">
                                                    <ul class="nav-tabs">
                                                        <li class="active"><a href="#<?php echo $row_baidangmonanthit['ID_baidang'] ?>-1">Chuẩn bị</a></li>
                                                        <li><a href="#<?php echo $row_baidangmonanthit['ID_baidang'] ?>-2">Cách làm</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="<?php echo $row_baidangmonanthit['ID_baidang'] ?>-1" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonanthit['Thoigianchuanbi'] ?>
                                                            <h1>Nguyên liệu</h1>
                                                            <?php echo $row_baidangmonanthit['Nguyenlieu'] ?>
                                                        </div>

                                                        <div id="<?php echo $row_baidangmonanthit['ID_baidang'] ?>-2" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonanthit['Thoigianlam'] ?>
                                                            <h1>Công thức :</h1>
                                                            <?php echo $row_baidangmonanthit['Congthuc'] ?>

                                                            <div class="video"><iframe width="560" height="315" src="<?php echo $row_baidangmonanthit['Video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-x" id="close-cart" onclick="closeForm('<?php echo $row_baidangmonanthit['ID_baidang'] ?>')"></i>

                                        </div>
                                    </div>

                                    <?php 
                                    
                                                            }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <i class="fa-solid fa-x" id="close-cart" aria-hidden="true" onclick="closeForm('formthit')"></i>
                </div>
            </div>
          



            <div class="col-md-4 mix cat1 cat4 ingredient diemtam top10">
                <div class="portfolio">
                    <img src="./Assets/Images/diemtam.jpg" alt="">
  
                    <div class="overlay">
                        <div class="hover_text">
                            <i class="fa-sharp fa-solid fa-plus" onclick="openForm('formdiemtam')"></i>
                        </div>
                    </div>
                </div>
                 <div class="form container-pop" id="formdiemtam">
                    <section id="sanpham" class="section_tab_product">
                        <div class="bg_module">
                            <div class="container">
                                
                                <div class="row container-mini">
                                    <?php 
                                    
                                    $baidangmonandiemtam = baidangmonandiemtam($conn);
                                    while($row_baidangmonandiemtam=mysqli_fetch_array($baidangmonandiemtam)){
                                    
                                    ?>
                                    <div class="col-xl-3 col-lg-5 col-sm-15 diemtam >">
                                        <div class="product">
                                            <div class="product-thum">
                                                <img class="lazyload" src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['anhmon'] ?>">
                                                <h3><?php echo $row_baidangmonandiemtam['Tenmonan'] ?></h3>

                                                <div class="overlay">
                                                    <div class="hover_text">
                                                        <i class="fa-sharp fa-solid fa-plus" onclick="openForm('<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>')"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formf container-popf" id="<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>">
                                            <div class="headerf" class="text-center">
                                                <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i> <?php echo $row_baidangmonandiemtam['Tenmonan'] ?> <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i>
                                            </div>

                                            <div class="wp-contentf">

                                                <div class="contentf">
                                                    <p> <?php echo $row_baidangmonandiemtam['Motamonan'] ?>

                                                    </p>
                                                </div>

                                                <div class="sidebar">
                                                    <div class="anh">
                                                        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                            
                                                        </swiper-container>

                                                        <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true">
                                                        <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandiemtam['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                        </swiper-container>

                                                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="footerf">
                                                <div class="tabs">
                                                    <ul class="nav-tabs">
                                                        <li class="active"><a href="#<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>-1">Chuẩn bị</a></li>
                                                        <li><a href="#<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>-2">Cách làm</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>-1" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonandiemtam['Thoigianchuanbi'] ?>
                                                            <h1>Nguyên liệu</h1>
                                                            <?php echo $row_baidangmonandiemtam['Nguyenlieu'] ?>
                                                        </div>

                                                        <div id="<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>-2" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonandiemtam['Thoigianlam'] ?>
                                                            <h1>Công thức :</h1>
                                                            <?php echo $row_baidangmonandiemtam['Congthuc'] ?>

                                                            <div class="video"><iframe width="560" height="315" src="<?php echo $row_baidangmonandiemtam['Video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-x" id="close-cart" onclick="closeForm('<?php echo $row_baidangmonandiemtam['ID_baidang'] ?>')"></i>

                                        </div>
                                    </div>

                                    <?php 
                                    
                                                            }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <i class="fa-solid fa-x" id="close-cart" aria-hidden="true" onclick="closeForm('formdiemtam')"></i>
                </div>
            </div>


            <div class="col-md-4 mix cat1 cat4 ingredient dochaytop10">
                <div class="portfolio">
                    <img src="./Assets/Images/monchay.jpg" alt="">
  
                    <div class="overlay">
                        <div class="hover_text">
                            <i class="fa-sharp fa-solid fa-plus" onclick="openForm('formdochay')"></i>
                        </div>
                    </div>
                </div>
                 <div class="form container-pop" id="formdochay">
                    <section id="sanpham" class="section_tab_product">
                        <div class="bg_module">
                            <div class="container">
                                
                                <div class="row container-mini">
                                    <?php 
                                    
                                    $baidangmonandochay = baidangmonandochay($conn);
                                    while($row_baidangmonandochay=mysqli_fetch_array($baidangmonandochay)){
                                    
                                    ?>
                                    <div class="col-xl-3 col-lg-5 col-sm-15 dochay >">
                                        <div class="product">
                                            <div class="product-thum">
                                                <img class="lazyload" src="./Assets/images 2/<?php echo $row_baidangmonandochay['anhmon'] ?>">
                                                <h3><?php echo $row_baidangmonandochay['Tenmonan'] ?></h3>

                                                <div class="overlay">
                                                    <div class="hover_text">
                                                        <i class="fa-sharp fa-solid fa-plus" onclick="openForm('<?php echo $row_baidangmonandochay['ID_baidang'] ?>')"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formf container-popf" id="<?php echo $row_baidangmonandochay['ID_baidang'] ?>">
                                            <div class="headerf" class="text-center">
                                                <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i> <?php echo $row_baidangmonandochay['Tenmonan'] ?> <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i>
                                            </div>

                                            <div class="wp-contentf">

                                                <div class="contentf">
                                                    <p> <?php echo $row_baidangmonandochay['Motamonan'] ?>

                                                    </p>
                                                </div>

                                                <div class="sidebar">
                                                    <div class="anh">
                                                        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                            
                                                        </swiper-container>

                                                        <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true" watch-slides-progress="true">
                                                        <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['anhmon'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu1'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu2'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu3'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu4'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu5'] ?> " />
                                                            </swiper-slide>
                                                            <swiper-slide>
                                                                <img src="./Assets/images 2/<?php echo $row_baidangmonandochay['nguyenlieu6'] ?> " />
                                                            </swiper-slide>
                                                        </swiper-container>

                                                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="footerf">
                                                <div class="tabs">
                                                    <ul class="nav-tabs">
                                                        <li class="active"><a href="#<?php echo $row_baidangmonandochay['ID_baidang'] ?>-1">Chuẩn bị</a></li>
                                                        <li><a href="#<?php echo $row_baidangmonandochay['ID_baidang'] ?>-2">Cách làm</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="<?php echo $row_baidangmonandochay['ID_baidang'] ?>-1" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonandochay['Thoigianchuanbi'] ?>
                                                            <h1>Nguyên liệu</h1>
                                                            <?php echo $row_baidangmonandochay['Nguyenlieu'] ?>
                                                        </div>

                                                        <div id="<?php echo $row_baidangmonandochay['ID_baidang'] ?>-2" class="tab-content-item">
                                                            <h1>Thời gian</h1>
                                                            <?php echo $row_baidangmonandochay['Thoigianlam'] ?>
                                                            <h1>Công thức :</h1>
                                                            <?php echo $row_baidangmonandochay['Congthuc'] ?>

                                                            <div class="video"><iframe width="560" height="315" src="<?php echo $row_baidangmonandochay['Video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-x" id="close-cart" onclick="closeForm('<?php echo $row_baidangmonandochay['ID_baidang'] ?>')"></i>

                                        </div>
                                    </div>

                                    <?php 
                                    
                                                            }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <i class="fa-solid fa-x" id="close-cart" aria-hidden="true" onclick="closeForm('formdochay')"></i>
                </div>
            </div>



        </div>
    </section>
</div>
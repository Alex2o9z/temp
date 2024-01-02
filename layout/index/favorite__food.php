<div class="favorite__food">
            <h2 class="ff-title">CÁC MÓN ĂN ĐƯỢC YÊU THÍCH</h2>
            <div class="row">
                <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                    <div class="row">
                                 <?php       
                                      $monanuuthich = monanuuthich($conn);
                                      while($row_monanuuthich=mysqli_fetch_array($monanuuthich)){
                                 ?>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 item-ff">
                            <div class="img-food">
                                <img src="./Assets/images 2/<?php echo $row_monanuuthich['anhmon'] ?>" alt="" class="food-img">
                                <div class="hover__ff-layer">
                                    <i class="fa-solid fa-plus" onclick="openForm('<?php echo $row_monanuuthich['ID_baidang'] ?>')"></i>
                                </div>
                                <div class="num-like">
                                    <i class="fa-regular fa-eye"></i>
                                    <span class="ff-num-like">1000 lượt xem</span>
                                </div>
                            </div>
                            <div class="div-title">
                                <span class="name-food">
                                    <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i> <?php echo $row_monanuuthich['Tenmonan'] ?> <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i>
                                </span>
                            </div>
                            <div class="formf container-popf" id="<?php echo $row_monanuuthich['ID_baidang'] ?>">
                                <div class="headerf" class="text-center">
                                    <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i> <?php echo $row_monanuuthich['Tenmonan'] ?> <i class="fa-sharp fa-solid fa-utensils" style="color: #fe0101;"></i>
                                </div>

                                <div class="wp-contentf">

                                    <div class="contentf">
                                         <p></i> <?php echo $row_monanuuthich['Motamonan'] ?>
                                        </p>
                                    </div>

                                    <div class="sidebar">
                                        <div class="anh">
                                            <swiper-container
                                                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                                class="mySwiper" thumbs-swiper=".mySwiper2" loop="true"
                                                space-between="10" navigation="true">
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['anhmon'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu1'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu2'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/?php echo $row_monanuuthich['nguyenlieu3'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu4'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu5'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu6'] ?>" />
                                                </swiper-slide>
                                               


                                            </swiper-container>

                                            <swiper-container class="mySwiper2" loop="true" space-between="10"
                                                slides-per-view="4" free-mode="true" watch-slides-progress="true">
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['anhmon'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu1'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu2'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu3'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu4'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu5'] ?>" />
                                                </swiper-slide>
                                                <swiper-slide>
                                                    <img src="./Assets/images 2/<?php echo $row_monanuuthich['nguyenlieu6'] ?>" />
                                                </swiper-slide>
                                            </swiper-container>

                                        </div>
                                    </div>

                                </div>

                                <div class="footerf">
                                    <div class="tabs">
                                        <ul class="nav-tabs">
                                            <li class="active"><a href="#<?php echo $row_monanuuthich['ID_baidang'] ?>-1">Chuẩn bị</a></li>
                                            <li><a href="#<?php echo $row_monanuuthich['ID_baidang'] ?>-2">Cách làm</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="<?php echo $row_monanuuthich['ID_baidang'] ?>-1" class="tab-content-item">
                                                <h1>Thời gian</h1>
                                                <?php echo $row_monanuuthich['Thoigianchuanbi'] ?>
                                                <h1>Nguyên liệu</h1>
                                                <?php echo $row_monanuuthich['Nguyenlieu'] ?>
                                                </p>
                                            </div>

                                            <div id="<?php echo $row_monanuuthich['ID_baidang'] ?>-2" class="tab-content-item">
                                                <h1>Thời gian</h1>
                                                <?php echo $row_monanuuthich['Thoigianlam'] ?>
                                                <h1>Công thức :</h1>
                                                <?php echo $row_monanuuthich['Congthuc'] ?>
                                                <div class="video"><iframe width="560" height="315"
                                                        src="<?php echo $row_monanuuthich['Video'] ?>"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <i class="fa-solid fa-x" id="close-cart" onclick="closeForm('<?php echo $row_monanuuthich['ID_baidang'] ?>')"></i>

                            </div>
                        </div>
                       
            <?php 
                                      }
                                 
            ?>

                    </div>

                </div>
            </div>

        </div>
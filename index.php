<?php get_header();?>

<body <?php body_class(); ?>>
    <?php get_template_part("menu")?>
    <?php get_template_part("home-page")?>
    <?php get_template_part("about")?>

    <!-- Skils start here -->
    <div id="Skils" class="skils_wrap">
        <div class="skil_heading_wrap">
            <div class="skils_underline"></div>
            <p class="skil_heading_wrap_para">Check out my</p>
            <h1 class="skil_heading_wrap_h1">Skils</h1>
        </div>
        <div class="skils">
            <div class="skils_buttons">
                <div class="skils_button_1_wrap">
                    <button class="skils_button skils_button_1 skils_button_active" data-filter="All">All</button>
                </div>
                <div class="skils_button_2_wrap">
                    <button class="skils_button skils_button_2" data-filter="Web">Web</button>
                </div>
                <div class="skils_button_3_wrap">
                    <button class="skils_button skils_button_5" data-filter="DBMS">DBMS</button>
                </div>
                <div class="skils_button_4_wrap">
                    <button class="skils_button skils_button_4" data-filter="CMS">CMS</button>
                </div>
                <div class="skils_button_5_wrap">
                    <button class="skils_button skils_button_3" data-filter="Programming">Programming</button>
                </div>
            </div>
            <div class="skils_all">
                <div class="skil_box_wrap carry_html Web">
                    <h3 class="skil_box_h3">HTML</h3>
                    <p class="skil_box_p">90%</p>
                    <div class="persentense_div persentense_div_html"></div>
                </div>
                <div class="skil_box_wrap carry_css Web">
                    <h3 class="skil_box_h3">CSS</h3>
                    <p class="skil_box_p">90%</p>
                    <div class="persentense_div persentense_div_css"></div>
                </div>
                <div class="skil_box_wrap carry_bootstrap Web">
                    <h3 class="skil_box_h3">BootStrap</h3>
                    <p class="skil_box_p">90%</p>
                    <div class="persentense_div persentense_div_bootstrap"></div>
                </div>
                <div class="skil_box_wrap carry_javascript Web Programming">
                    <h3 class="skil_box_h3">Java Script</h3>
                    <p class="skil_box_p">60%</p>
                    <div class="persentense_div persentense_div_js"></div>
                </div>
                <div class="skil_box_wrap carry_jquery Web">
                    <h3 class="skil_box_h3">jquery</h3>
                    <p class="skil_box_p">60%</p>
                    <div class="persentense_div persentense_div_jquery"></div>
                </div>
                <div class="skil_box_wrap carry_svg Web">
                    <h3 class="skil_box_h3">SVG</h3>
                    <p class="skil_box_p">70%</p>
                    <div class="persentense_div persentense_div_SVG"></div>
                </div>
                <div class="skil_box_wrap carry_php Web Programming">
                    <h3 class="skil_box_h3">PHP</h3>
                    <p class="skil_box_p">30%</p>
                    <div class="persentense_div persentense_div_PHP"></div>
                </div>
                <div class="skil_box_wrap carry_sql DBMS">
                    <h3 class="skil_box_h3">MySQL</h3>
                    <p class="skil_box_p">85%</p>
                    <div class="persentense_div persentense_div_MySQL"></div>
                </div>
                <div class="skil_box_wrap carry_wp Web CMS">
                    <h3 class="skil_box_h3">Wordpress</h3>
                    <p class="skil_box_p">85%</p>
                    <div class="persentense_div persentense_div_wp"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skils end here -->

    <!-- portfolio start -->
    <div id="Portfolio" class="portfolio_wrap">
        <div class="portfolio_heading">
            <h1 class="">PORTFOLIO'S</h1>
            <div class="border portfolio_border"></div>
        </div>
        <div class="portfolio">
            <div class="portfolio_buttons">
                <div class="portfolio_button_1_wrap">
                    <button class="portfolio_button portfolio_button_1 portfolio_button_active"
                        data-filter="All">All</button>
                </div>
                <div class="portfolio_button_2_wrap">
                    <button class="portfolio_button portfolio_button_2" data-filter="HTMLTemplate">HTML
                        Template</button>
                </div>
                <div class="portfolio_button_3_wrap">
                    <button class="portfolio_button portfolio_button_3" data-filter="BootStrap">BootStrap</button>
                </div>
                <div class="portfolio_button_4_wrap">
                    <button class="portfolio_button portfolio_button_4" data-filter="PSDtoHTML">PSD to HTML</button>
                </div>
                <div class="portfolio_button_5_wrap">
                    <button class="portfolio_button portfolio_button_5" data-filter="JSProjects">JS Project's</button>
                </div>
            </div>
            <div class="portfolio_items_wrap">
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 01</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-01/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">This is a javascript DramKit</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 02</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-02/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">This is a javascript Clock</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 03</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-03/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript dynamic css variable</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 04</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-04/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript Random color code</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 05</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-05/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript messenger app</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 06</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-06/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript Ecommerce counter</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 07</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-07/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript calculator</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 08</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-08/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript countdown</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 09</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-09/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">javascript StopWatch</p>
                    </a>
                </div>
                <div class="portfolio_item JSProjects">
                    <h3 class="project_heading">JS Project 10</h3>
                    <a href="https://salmanfarshe.github.io/javascript-project-10/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">Javascript To Do List</p>
                    </a>
                </div>
                <div class="portfolio_item PSDtoHTML">
                    <h3 class="project_heading">PSD Project 01</h3>
                    <a href="https://salmanfarshe.github.io/PSD-templete-02/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">eCommerce Resturent</p>
                    </a>
                </div>
                <div class="portfolio_item PSDtoHTML">
                    <h3 class="project_heading">PSD Project 02</h3>
                    <a href="https://salmanfarshe.github.io/PSD-templete-03/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">Jet Cycle | drive to the road</p>
                    </a>
                </div>
                <div class="portfolio_item PSDtoHTML">
                    <h3 class="project_heading">PSD Project 03</h3>
                    <a href="https://salmanfarshe.github.io/PSD-templete-04/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">High Pro | The powerpoint supporter</p>
                    </a>
                </div>
                <div class="portfolio_item PSDtoHTML">
                    <h3 class="project_heading">PSD Project 04</h3>
                    <a href="https://salmanfarshe.github.io/PSD-templete-05/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">4U Host | Hosting compability</p>
                    </a>
                </div>
                <div class="portfolio_item PSDtoHTML">
                    <h3 class="project_heading">PSD Project 05</h3>
                    <a href="https://salmanfarshe.github.io/PSD-templete-06/index.html" target="_blanked"
                        class="portfolio_item_link">
                        <p class="">Bigwing | start your business</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio end -->

    <!-- contact start -->
    <div id="Contact" class="contact_wrapper">
        <div class="contact_form">
            <div class="contact_heading">
                <h1 class="">Contact</h1>
                <div class="border contact_heading_border"></div>
            </div>
            <div class="contact_info">
                <h1 class="contact_info_heading" style="color: var(--main-color);">
                    Get in touch
                </h1>
                <p class="contact_info_para" style="color: var(--white-color);">
                    Don't be shy!! feel free to discuss together. I am always active in discussing new projects,
                    creative ideas, or opportunities. And I feel happy to be part of your visions.
                </p>
                <div class="address_2">
                    <div class="contact_address">
                        <i class="fas fa-map-marked-alt"></i>
                        <a style="margin-left: 55px; color: var(--main-color);"
                            href="https://www.google.com/maps/place/Norshinghpur/@23.9304289,90.3061403,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c2a2ba924249:0xf747fe10d57adf94!8m2!3d23.930424!4d90.308329"
                            class="contact_address_link" target="_blanked">View in Google Map</a>
                        <p style="margin-left: 55px;">Ashulia, Savar, Dhaka, Bangladesh</p>
                    </div>
                    <div class="contact_mail">
                        <p>
                            <i class="fas fa-envelope-open"></i>
                        <p style="margin-left: 50px; color: var(--main-color);">Mail me</p>
                        <span style="margin-left: 50px;">salmanzihad9024@gmail.com</span>
                        </p>
                    </div>
                    <div class="contact_phone">
                        <p><i class="fas fa-phone-square-alt"></i>
                        <p style="margin-left: 50px; color: var(--main-color);">Call me</p>
                        <span style="margin-left: 50px;">+8801747289024</span>
                        </p>
                    </div>
                </div>
            </div>
            <form action="https://formspree.io/f/xeqnoazo" method="POST">
                <div class="contact_input">
                    <div class="left_part">
                        <p class="" style="color: var(--main-color);">First Name</p>
                        <input type="text" name="firstName" placeholder="Enter your First Name" class="firstName">
                    </div>
                    <div class="right_part">
                        <p class="" style="color: var(--main-color);">Last Name</p>
                        <input type="text" placeholder="Enter your Last Name" class="lastName">
                    </div>
                    <div class="textarea_wrap">
                        <p class="" style="color: var(--main-color); margin-top: 10px; margin-bottom: -15px;">Email</p>
                        <input type="email" name="email" id="" class="lastName lastNameemail" placeholder="email">
                        <textarea name="message" id="" cols="" rows="3"
                            placeholder="Type your messege here"></textarea><br>
                    </div>
                    <button type="submit" class="send_messege_button">Send</button>
                </div>
            </form>
        </div>
    </div>
    <!-- contact end -->

    <!-- my team start -->
    <div id="My_team" class="our_team_wrap">
        <div class="tb_squad">
            <h1 class="tb_squad_h1" style="text-align: center; margin-top: 50px;">TB Squad</h1>
            <p class="tb_suad_para" style="text-align: center;">Team TB Squad is a dedicated developers team of
                bangladesh.
                If you are looking for a complete project from scratch, then you are in right place.
                We Have <span style="color: var(--hover-color);">UI/UX Designer</span>,
                <span style="color: var(--hover-color);">Web Designer</span>,
                <span style="color: var(--hover-color);">Front-end Specialist</span>,
                <span style="color: var(--hover-color);">Back-end Specialist of MERN stack</span>,
                <span style="color: var(--hover-color);"> Wordpress Specialist</span>, and
                <span style="color: var(--hover-color);">SEO Expert</span>. Tb Squad will made your life easy. I can
                take any kind of support and knowledge from my team mates for make your site best. The team is moving
                forward.
            </p>
            <p class="tb_suad_para" style="color: var(--hover-color);">I also enjoy working on teams, and I find that I
                am more successful at work when I have a
                team supporting me.
            <p>
            <p class="tb_squad_web">For more information <a target="_blanked" class="tb_squad_web_link">Visit
                    Here</a></p>
        </div>
        <div class="team_members">
            <h1 class="team_members_heading">Team Members <br style="display: none;" class="brr"><span
                    class="dedication_para" style="font-size:19px; color: var(--white-color);">They all are dedicated
                    about development</span> </h1>
            <div class="team_members_wrap">
                <div class="single_team_member">
                    <a href="https://facebook.com/mdtareque.ahmed.77" target="_blanked" class="single_team_member_link">
                        <img src="<?php bloginfo("template_directory")?>/img/Tarek.jpg" alt="" class="single_team_member_img">
                        <h4 class="single_team_member_name">Md Tareque Ahmed</h4>
                        <br>
                        <p class="single_team_member_description">He's a Web designer and Front-end developer. Also
                            studing in SWE, Daffodil University</p>
                    </a>
                </div>
                <div class="single_team_member">
                    <a href="https://muhammadsabbir.com" target="_blanked" class="single_team_member_link">
                        <img src="<?php bloginfo("template_directory")?>/img/Sabbir.JPG" alt="" class="single_team_member_img">
                        <h4 class="single_team_member_name">Muhammad Sabbir</h4>
                        <br>
                        <p class="single_team_member_description">He's a Back-end Specialist of MERN stack. Also
                            studing in SWE, Daffodil University</p>
                    </a>
                </div>
                <div class="single_team_member">
                    <a href="https://facebook.com/profile.php?id=100010501805151" target="_blanked"
                        class="single_team_member_link">
                        <img src="<?php bloginfo("template_directory")?>/img/Ferdous.jpg" alt="" class="single_team_member_img">
                        <h4 class="single_team_member_name">Md Ferdous Reza</h4>
                        <br>
                        <p class="single_team_member_description">He's Wordpress Specialist. Also studing in
                            CSE, Eastern University</p>
                    </a>
                </div>
                <div class="single_team_member">
                    <a href="https://facebook.com/nurhossainfarid221" target="_blanked" class="single_team_member_link">
                        <img src="<?php bloginfo("template_directory")?>/img/farid.jpg" alt="" class="single_team_member_img">
                        <h4 class="single_team_member_name">Md Nur Hossain Farid</h4>
                        <br>
                        <p class="single_team_member_description">He's a Web designer and Front-end developer. Also
                            studing in SWE, Daffodil University</p>
                    </a>
                </div>
                <div class="single_team_member">
                    <a href="https://facebook.com/RASEL1616" target="_blanked" class="single_team_member_link">
                        <img src="<?php bloginfo("template_directory")?>/img/Rasel.jpg" alt="" class="single_team_member_img">
                        <h4 class="single_team_member_name">Rasel Shikder</h4>
                        <br>
                        <p class="single_team_member_description">He is a UI/UX Designer and also graphic designer, Photo editor</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- my team end -->

    <!-- find me start -->
    <div class="find_me_wrap" id="Find_me">
        <div class="find_me">
            <h1 class="find_me_head">I am available on</h1>
            <p class="find_me_para">Online Market Place & Social Medias</p>
            <div class="border find_me_heading_border"></div>
            <div class="market_place">
                <h2 class="market_place_heading">Online Market Place</h2>
                <div class="border market_place_heading_border"></div>
                <ul class="market_place_ul">
                    <li class="market_place_li"><a href="" target="_banked" class="market_place_link"><img
                                src="<?php bloginfo("template_directory")?>/img/marketplace/up-work.png" alt="" class="upwork"></a></li>
                    <li class="market_place_li"><a href="https://www.fiverr.com/salmannfarshe?up_rollout=true" target="_banked" class="market_place_link"><img
                                src="<?php bloginfo("template_directory")?>/img/marketplace/fiverr.png" alt="" class="fiverr"></a></li>
                    <li class="market_place_li"><a target="_banked" class="market_place_link"><img
                                src="<?php bloginfo("template_directory")?>/img/marketplace/freelancer.png" alt="" class="" style="cursor: not-allowed;"></a>
                    </li>
                    <li class="market_place_li"><a target="_banked" class="market_place_link"><img
                                src="<?php bloginfo("template_directory")?>/img/marketplace/peoplephour.png" alt="" class="people_per_hour"
                                style="cursor: not-allowed;"></a></li>
                </ul>
            </div>
            <div class="social_media">
                <h2 class="social_media_heading">Social Medias</h2>
                <div class="border social_media_heading_border"></div>
                <ul class="social_media_ul">
                    <li class="social_media_li"><a href="https://facebook.com/salmannfarshe/" target="_banked"
                            class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/facebook.png" alt="" class=""></a>
                    </li>
                    <li class="social_media_li"><a href="https://www.instagram.com/salmannfarshe/" target="_banked"
                            class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/instra.png" alt="" class=""></a></li>
                    <li class="social_media_li"><a href="https://www.linkedin.com/in/salmannfarshe/" target="_banked"
                            class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/linkedin.png" alt="" class=""></a>
                    </li>
                    <li class="social_media_li"><a href="https://www.pin.it/4XGXdHe" target="_banked"
                            class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/pinterest.png" alt="" class=""></a>
                    </li>
                    <li class="social_media_li"><a href="https://salmanfarshe.tumblr.com/" target="_banked"
                            class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/tumblr.png" alt="" class=""></a></li>
                    <li class="social_media_li"><a href="https://twitter.com/salmannfarshe" target="_banked"
                            class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/tweeter.png" alt="" class=""></a></li>
                </ul>
                <ul class="social_media_ul wtsup_vibr wtsup_vibr_mobile">
                    <li class="social_media_li wtsup_vibr"><a class="social_media_link whatsapp"><img
                                src="<?php bloginfo("template_directory")?>/img/social-medias/whatsapp.png" alt="" class=""></a></li>
                    <li class="social_media_li wtsup_vibr"><a class="social_media_link"><span
                                style="font-size: 20px; color: #339933;">+8801747289024</span></a></li>
                    <li class="social_media_li wtsup_vibr viber"><a class="social_media_link"><img
                                src="<?php bloginfo("template_directory")?>/img/social-medias/viber.png" alt="" class=""></a></li>
                    <li class="social_media_li wtsup_vibr"><a class="social_media_link"><span
                                style="font-size: 20px; color: #7A4F9A;">+8801747289024</span></a></li>
                </ul>
                <ul class="social_media_ul youtube_wrap">
                    <h1 class="youtube_head">Visite my youtube <span class="arrow">&rarr;</span></h1>
                    <li class="social_media_li"><a href="https://www.youtube.com/channel/UCT_ymFie6RDVG6ZJOG5GYcA"
                            target="_banked" class="social_media_link"><img src="<?php bloginfo("template_directory")?>/img/social-medias/youtube.png" alt=""
                                class="social_media_link_youtube"></a></li>
                </ul>
                <div class="blog_link_refference">
                    <a target="_blanked" class="">
                        <h1 class="blog_link_refference_heading">My Blogs</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- find me end -->
    <?php get_footer(); ?>
    <script>
        // theme selection
        function themeCustomise() {
            var Night_Theme_wrap = document.querySelector(".Night_Theme_wrap");
            var Day_Theme_wrap = document.querySelector(".Day_Theme_wrap");
            var body = document.querySelector("body");
            var hero_img_color = document.querySelector(".hero_img_color");
            var hero_img_mobile = document.querySelector(".hero_img_mobile");
                Day_Theme_wrap.onclick = function dayTheme() {
                    Day_Theme_wrap.classList.add("active_theme");
                    Night_Theme_wrap.classList.remove("active_theme");
                    body.classList.add("light_theme");
                    hero_img_color.src = "<?php bloginfo("template_directory")?>./img/salman_farshe-light.png";
                    hero_img_mobile.src = "<?php bloginfo("template_directory")?>./img/salman_farshe-mobile_light.png";
                };
                Night_Theme_wrap.onclick = function nightTheme() {
                    Night_Theme_wrap.classList.add("active_theme");
                    Day_Theme_wrap.classList.remove("active_theme");
                    body.classList.remove("light_theme");
                    hero_img_color.src = "<?php bloginfo("template_directory")?>./img/salman_farshe_dark.png";
                    hero_img_mobile.src = "<?php bloginfo("template_directory")?>./img/salman_farshe-mobile.png";
                };
        }
        themeCustomise();
    </script>
    <!-- wow js cdn start here -->
    <script src=""></script>
    <!-- wow js cdn end -->

    <!-- aos cdn start here-->
    <script src=""></script>
    <!-- aos cdn end-->
    <!-- all CDN scripts end-->
    <!-- root script goes here -->
    <!-- initialising aos.js and wow.js -->
    <script>
        new WOW().init();
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        $("#scrollspy").scrollspy({
            activeClass: "active",
            offset: 50,
            duration: 500,
            animate: true,
        });
    </script>
    <script>
        jQuery('.scroll').onePgaeNav({
            wrapper: '.onepage-nav'
        });
    </script>
</body>

</html>
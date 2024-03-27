<?php get_header();?>
<body <?php body_class(); ?>>
    <!-- my team start -->
    <?php get_template_part("sections/menu")?>
    <!-- my team start -->
    <?php get_template_part("sections/hero")?>
    <!-- my team start -->
    <?php get_template_part("sections/about")?>
    <!-- my team start -->
    <?php get_template_part("sections/skills")?>
    <!-- my team start -->
    <?php get_template_part("sections/portfolio")?>
    <!-- my team start -->
    <?php get_template_part("sections/contactme")?>
    <!-- my team start -->
    <?php get_template_part("sections/myteam")?>
    <!-- find me start -->
    <?php get_template_part("sections/findme")?>
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
        new WOW().init();
        AOS.init();
        $("#scrollspy").scrollspy({
            activeClass: "active",
            offset: 50,
            duration: 500,
            animate: true,
        });
        jQuery('.scroll').onePgaeNav({
            wrapper: '.onepage-nav'
        });
    </script>
</body>
</html>
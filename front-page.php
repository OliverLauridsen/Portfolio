<?php get_header(); ?>
<section class="landing_page_wrapper">
    <div class="landing_page_wrapper_header">
        <button> <b>Download CV</b> </button>
        <img src="<?=get_stylesheet_directory_uri()?>/img/menu.svg" alt="Menu icon for navigating website">
    </div>
    <div class="main_content">
        <div class="text_content">
            <h1> Hi, I'm Oliver</h1>
            <p class="sub_title"> Danish iOS Developer </p>
            <p> my <span style="font-size:40px; font-weight:600;"> skills </span> are specialised, but not limited, within these specific technologies:</p>
            <div class="skills_grid">
                <div>Skill 1</div>
                <div>Skill 2</div>
                <div>Skill 3</div>
                <div>Skill 4</div>
                <div>Skill 5</div>
                <div>Skill 6</div>
                <div>Skill 7</div>
                <div>Skill 8</div>
                <div>Skill 9</div>
                <div>Skill 10</div>
                <div>Skill 11</div>
                <div>Skill 12</div>
            </div>
        </div>
        <div class="photo_content">
            <img src="<?=get_stylesheet_directory_uri()?>/img/oliver.png" alt="Photo of Oliver">
        </div>
        <a style="color: white; text-decoration: none" href="<?php echo site_url('my-work')?>"> 
            <div class="see_my_work_button">
                See my work
                <div class="container">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div>
            </div>
        </a>
    </div>
</section>
<?php get_footer(); ?>
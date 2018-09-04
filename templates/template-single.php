<?php /* Template Name: Single Template */ 
get_header(); ?>
<main>
    <div id="tabDiv">
        <div id="tab">
            <h3>WEB DESIGN</h3>
        </div>
    </div>
    <div id="projectMainDiv">
        <div class="projectHeader">
            <h1>
                <?php echo get_field('project_title');?>
            </h1>
            <h4>
                <?php echo get_field('company_name');?>
            </h4>
            <br>
            <?php  $image = get_field('hero_image');

if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%"/>

            <?php endif; ?>

        </div>
        <h2>
            <?php echo get_field('description_title'); ?>
        </h2>
        <?php echo get_field('project_description'); ?>

        <br><a href=<?php  echo get_field('project_link'); ?>><button>VISIT<br>NEWTON PRESBYTERIAN CHURCH<br>WEBSITE</button></a>
    </div>
</main>

<?php get_footer(); ?>
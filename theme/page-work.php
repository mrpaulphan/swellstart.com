<?php get_header(); ?>
<?php
$post_object = get_field('featured');
if( $post_object ):
	// override $post
	$post = $post_object;
	setup_postdata( $post );
  $featured_image = get_field('featured_image');
  $featured_excerpt = get_field('excerpt');
  $featured_link = get_permalink();
  wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
endif;

if( have_rows('category') ):
 $category_array = [];
  while( have_rows('category') ): the_row();
     $highlighted_word = get_sub_field('highlighted_word');
     $non_highlighted_word = get_sub_field('non_highlighted_word');
     $category_relationship = (string)get_sub_field('category_relationship');
     $category_array[] = [
       'category_id' => $category_relationship,
       'category_name' => get_cat_name($category_relationship),
       'highlighted_word' => $highlighted_word,
       'non_highlighted_word' => $non_highlighted_word
     ];
 endwhile;
endif;
$count = count($category_array);
$count_half = $count/2;
echo "<pre>";
 var_dump($category_array);
 echo "</pre>";


?>

<div class="work-wrap">
    <div class="work-hero">
    <a href="#"><img src="<?php echo $featured_image['url'] ?>" alt="<?php echo $featured_image['alt']; ?>"></a>
        <div class="work-hero_body">
            <div class="col-1">
                <p><?php echo $featured_excerpt; ?></p>
               <a class="btn" href="<?php echo $featured_link; ?>" style="background: url('/wp-content/uploads/2017/09/bg-arrow-work.png') no-repeat 0 0;">See the work</a>
            </div>
            <div class="col-2">
                <h2>UP NEXT &hellip;</h2>
                <p><?php the_field('up_next_text'); ?></p>
            </div>
        </div>
        <div class="work-body">
            <h2>– But Wait, There's More –</h2>
            <p class="intro">See what else we’ve done</p>
            <ul class="list-1 work-list">
                <li><p><span>Browse</span> through <span>Branding</span></p>
                    <div class="filter-content" data-branding>
                        <ul>
                            <li><a href="cps.html">Community Partnership School</a></li>
                            <li><a href="east-girard.html">East Girard</a></li>
                            <li><a href="glades-pike-winery.html">Glades Pike Winery</a></li>
                            <li><a href="mazza.html">Mazza Vineyards</a></li>
                            <li><a href="northern-childrens-services.html">Northern Children's Services</a></li>
                            <li><a href="prps.html">Pennsylvania Parks and Recreation</a></li>
                            <li><a href="pa-wine.html">Pennsylvania Winery Association</a></li>
                            <li><a href="philadelphia-collection.html">The Philadelphia Collection</a></li>
                            <li><a href="punk-burger.html">P'unk Burger</a></li>
                            <li><a href="slice.html">Slice</a></li>
                            <li><a href="trios.html">Trios</a></li>
                        <li><a href="cooperative.html">The Wilds Cooperative of Pennsylvania</a></li>
                        </ul>
                    </div>
                </li>
                <li><p><span>Peek</span> at <span>Planning</span></p>
                    <div class="filter-content" data-planning>
                        <ul>
                            <li><a href="pa-wine.html">Pennsylvania Winery Association</a></li>
                            <li><a href="prps.html">Pennsylvania Parks and Recreation</a></li>
                            <li><a href="valley-forge.html">Valley Forge</a></li>
                            <li><a href="mazza.html">Mazza Vineyards</a></li>
                            <li><a href="peddlers-village.html">Peddler's Village</a></li>
                            <li><a href="wharton.html">Wharton Executive Education</a></li>
                        <li><a href="cooperative.html">The Wilds Cooperative of Pennsylvania</a></li>
                        </ul>
                    </div>
                </li>
                <li><p><span>Review</span> some <span>Advertising</span></p>
                    <div class="filter-content" data-advertising>
                        <ul>
                            <li><a href="bernie-robbins.html">Bernie Robbins</a></li>
                            <li><a href="blue-plate-minds.html">Blue Plate Minds</a></li>
                            <li><a href="peddlers-village.html">Peddler's Village</a></li>
                            <li><a href="pa-ballet.html">Pennsylvania Ballet</a></li>
                            <li><a href="prps.html">Pennsylvania Parks and Recreation</a></li>
                            <li><a href="pa-wine.html">Pennsylvania Winery Association</a></li>
                            <li><a href="petplan.html">Petplan</a></li>
                            <li><a href="philadelphia-collection.html">The Philadelphia Collection</a></li>
                            <li><a href="trios.html">Trios</a></li>
                            <li><a href="wharton.html">Wharton Executive Education</a></li>
                        </ul>
                    </div>
                </li>
                <li><p><span>Dive in</span> to some <span>Content</span></p>
                    <div class="filter-content" data-content>
                        <ul>
                            <li><a href="mazza-vineyards.html">Mazza Vineyards</a></li>
                            <li><a href="valley-forge.html">Valley Forge</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="list-2 work-list">
                <li><p><span>Peruse</span> through <span>Web + Interactive</span></p>
                    <div class="filter-content" data-website>
                        <ul>
                            <li><a href="blue-plate-minds.html">Blue Plate Minds</a></li>
                            <li><a href="east-girard.html">East Girard</a></li>
                            <li><a href="glades-pike-winery.html">Glades Pike Winery</a></li>
                            <li><a href="mazza-vineyards.html">Mazza Vineyards</a></li>
                            <li><a href="northern-childrens-services.html">Northern Children's Services</a></li>
                            <li><a href="prps.html">Pennsylvania Parks and Recreation</a></li>
                            <li><a href="pa-wine.html">Pennsylvania Winery Association</a></li>
                            <li><a href="petplan.html">Petplan</a></li>
                            <li><a href="philadelphia-collection.html">The Philadelphia Collection</a></li>
                            <li><a href="punk-burger.html">P'unk Burger</a></li>
                            <li><a href="slice.html">Slice</a></li>
                        </ul>
                    </div>
                </li>
                <li><p><span>Check out</span> some <span>Research</span></p>
                    <div class="filter-content" data-research>
                        <ul>
                            <li><a href="bernie-robbins.html">Bernie Robbins</a></li>
                            <li><a href="cps.html">Community Partnership School</a></li>
                            <li><a href="east-girard.html">East Girard</a></li>
                            <li><a href="northern-childrens-services.html">Northern Children's Services</a></li>
                            <li><a href="prps.html">Pennsylvania Parks and Recreation</a></li>
                            <li><a href="pa-wine.html">Pennsylvania Winery Association</a></li>
                            <li><a href="petplan.html">Petplan</a></li>
                            <li><a href="slice.html">Slice</a></li>
                            <li><a href="valley-forge.html">Valley Forge</a></li>
                            <li><a href="wharton.html">Wharton Executive Education</a></li>
                        <li><a href="cooperative.html">The Wilds Cooperative of Pennsylvania</a></li>
                        </ul>
                    </div>
                </li>
                <li><p><span>Page</span> through <span>Print Collateral</span></p>
                    <div class="filter-content" data-collateral>
                        <ul>
                            <li><a href="cps.html">Community Partnership School</a></li>
                            <li><a href="east-girard.html">East Girard</a></li>
                            <li><a href="glades-pike-winery.html">Glades Pike Winery</a></li>
                            <li><a href="mazza-vineyards.html">Mazza Vineyards</a></li>
                            <li><a href="northern-childrens-services.html">Northern Children's Services</a></li>
                            <li><a href="peddlers-village.html">Peddler&rsquo;s Village</a></li>
                            <li><a href="pa-ballet.html">Pennsylvania Ballet</a></li>
                            <li><a href="prps.html">Pennsylvania Parks and Recreation</a></li>
                            <li><a href="pa-wine.html">Pennsylvania Winery Association</a></li>
                            <li><a href="petplan.html">Petplan</a></li>
                            <li><a href="philadelphia-collection.html">The Philadelphia Collection</a></li>
                            <li><a href="punk-burger.html">P'unk Burger</a></li>
                            <li><a href="slice.html">Slice</a></li>
                            <li><a href="trios.html">Trios</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>

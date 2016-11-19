<?php
/**
 * Plugin Name: Tutsplus display WooCommerce products and categories/subcategories separately in archive pages
 * Plugin URI: http://code.tutsplus.com/tutorials/woocommerce-display-product-categories-subcategories-and-products-in-two-separate-lists--cms-25479
 * Description: Display products and catgeories / subcategories as two separate lists in product archive pages
 * Version: 1.0
 * Author: Rachel McCollin
 * Author URI: http://rachelmccollin.co.uk
 *
 *
 */

function tutsplus_product_subcategories() {
    $args = array(
        'number'     => $number,
        'orderby'    => 'title',
        'order'      => 'ASC',
        'hide_empty' => $hide_empty,
        'include'    => $ids
    );
    $product_categories = get_terms( 'product_cat', $args );
    $count = count($product_categories);
    echo '<ul class="products">';
    if ( $count > 0 ) {
        foreach ($product_categories as $product_category) {
            echo '<h4><a href="' . get_term_link($product_category) . '">' . $product_category->name . '</a></h4>';
            $args = array(
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        // 'terms' => 'white-wines'
                        'terms' => $product_category->slug
                    )
                ),
                'post_type' => 'product',
                'orderby' => 'title,'
            );
            $products = new WP_Query($args);
            echo "<ul>";
            while ($products->have_posts()) {
                $products->the_post();
                ?>
                <?php wc_get_template_part( 'content', 'product' ); ?>
                <?php
            }
            echo "</ul>";
        }
    }
    echo '</ul>';
}

add_action( 'woocommerce_before_shop_loop', 'tutsplus_product_subcategories', 50 );
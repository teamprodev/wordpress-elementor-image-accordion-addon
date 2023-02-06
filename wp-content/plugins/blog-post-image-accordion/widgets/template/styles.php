<?php 
/**
 * @
 * @
 * @@@@@@@@@@@--------------------////////// Style template ||||||||
 * @
 * @
 * 
 */
echo '<div class="bpiacrdn-img-accordion-'.esc_attr($bpiacrdn_styles).' bpiacrdn-common-style">';
echo '<div class="bpiacrdn-item-wrap">';
$wp_query = new \WP_Query( $bpiacrdn_args );
if($wp_query->have_posts()) :
    while($wp_query->have_posts()) : $wp_query->the_post();
    echo '<div class="bpiacrdn-single-img">';
        // Cat
        if($bpiacrdn_yes_value === $bpiacrdn_categories_swtcher){
            echo '<div class="bpiacrdn-prodCat '.$settings['bpiacrdn_category_alignment'].'">';
            if('show_main_cat' === $bpiacrdn_cat_show_status){ 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<ul class="post-categories"><li><a href="'.esc_url(plugin_dir_url('../../category/'.get_cat_ID(get_the_category())).$categories[0]->name).'" class="bpiacrdn-cat">'.esc_html( $categories[0]->name ).'</a></li></ul>';	
                }
            } elseif('show_multiple_cat' === $bpiacrdn_cat_show_status){
                the_category();
            }
            echo '</div>';
        }
        echo ('yes' === !$bpiacrdn_image_link_show)?'<a class="bpiacrdn-for-overlay" href="'.get_the_permalink().'">':'<div class="bpiacrdn-for-overlay">';
            echo '<a class="bpiacrdn_thumbnail" href="'.get_the_permalink().'">'; $this->bpiacrdn_post_thumbnail_here();
            echo '<div class="bpiacrdn-content-box '.$settings['bpiacrdn_content_vertical_alignment'].'">';
                $bpiacrdn_title_link_check = ('yes' === $bpiacrdn_title_link)?'<a href="'.get_the_permalink().'">'.get_the_title().'</a>':get_the_title();
                $bpiacrdn_title_wrap = '<div class="bpiacrdn-title" style="text-align:'.$settings['bpiacrdn_title_alignment'].'">'.$bpiacrdn_title_link_check.'</div>';
                echo ('yes' === $bpiacrdn_title)?$bpiacrdn_title_wrap:'';
                echo '<div class="bpiacrdn-prodCont">';
                    echo '<div class="bpiacrdn-prodpriratbtn">';
                        echo '<div class="bpiacrdn-prodpriratwrap">';
                            // date
                            $bpiacrdn_post_date = get_the_date($bpiacrdn_blog_date_format);
                            $bpiacrdn_date_title = '<span>'.$bpiacrdn_post_date.'</span></div>';
                            $bpiacrdn_date_icon = '<i class="bpiacrdn_icons far fa-calendar-alt"></i>';
                            $bpiacrdn_date_show_icon = ('show' == $bpiacrdn_taxo_icon)?$bpiacrdn_date_icon:'';
                            $bpiacrdn_date_wrap_div = '<div class="bpiacrdn-salePrice bpiacrdn-price">'.$bpiacrdn_date_show_icon;
                            $bpiacrdn_date_switch = ($bpiacrdn_yes_value === $bpiacrdn_date_swtcher)? $bpiacrdn_date_wrap_div:'';
                            $bpiacrdn_date_title_switch = ($bpiacrdn_yes_value === $bpiacrdn_date_swtcher)? $bpiacrdn_date_title:'';
                            echo $bpiacrdn_date_switch.$bpiacrdn_date_title_switch;
                            // author
                            $bpiacrdn_control_icon = $settings['bpiacrdn_author_icon']['value'];
                            $bpiacrdn_author_icon = '<i class="bpiacrdn_icons '.$bpiacrdn_control_icon.'"></i>';
                            $bpiacrdn_gravater = get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) );
                            $bpiacrdn_author_indicator_check = ('icon' === $bpiacrdn_author_indicator) ? $bpiacrdn_author_icon : $bpiacrdn_gravater;
                            $bpiacrdn_total_author = $bpiacrdn_author_indicator_check;
                            $bpiacrdn_author = ($bpiacrdn_yes_value === $bpiacrdn_author_swtcher) ? $bpiacrdn_total_author.'<span>'.get_the_author_meta( 'nickname' ).'</span>' : '';
                            echo '<div class="bpiacrdn-regularPrice bpiacrdn-price">'.$bpiacrdn_author .'</div>';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="bpiacrdn-prodOptInfo">';
                        // ======================= Texo
                        // Tags
                        $bpiacrdn_post_tags = get_the_tags();
                        $bpiacrdn_main_tag = ($bpiacrdn_post_tags) ? $bpiacrdn_post_tags[0]->name:'';
                        $bpiacrdn_tag_title = '<span>'.$bpiacrdn_main_tag.'</span></div>';
                        $bpiacrdn_tag_icon = '<i class="fas fa-tag"></i>';
                        $bpiacrdn_tag_show_icon = ('show' == $bpiacrdn_taxo_icon)?$bpiacrdn_tag_icon:'';
                        $bpiacrdn_wrap_div = '<div class="bpiacrdn-prodSaleCount bpiacrdn-extra-meta">'.$bpiacrdn_tag_show_icon;
                        $bpiacrdn_wrap_tag = ($bpiacrdn_yes_value == $bpiacrdn_tags_swtcher)?$bpiacrdn_wrap_div:'';
                        $bpiacrdn_wrap_close_div = ($bpiacrdn_yes_value == $bpiacrdn_tags_swtcher)?$bpiacrdn_tag_title:'';
                        echo $bpiacrdn_wrap_tag.$bpiacrdn_wrap_close_div;
                        // Comment
                        $bpiacrdn_main_comm = (!have_comments())?esc_html__('Comment (') . get_comments_number().')':'';
                        $bpiacrdn_comm_title = '<span>'.$bpiacrdn_main_comm.'</span></div>';
                        $bpiacrdn_comm_show_icon = ('show' == $bpiacrdn_taxo_icon)?'<i class="fas fa-comments"></i>':'';
                        $bpiacrdn_wrap_comm_div = '<div class="bpiacrdn-prodType bpiacrdn-extra-meta">'.$bpiacrdn_comm_show_icon;
                        $bpiacrdn_comm_switch = ($bpiacrdn_yes_value === $bpiacrdn_comments_swtcher)?$bpiacrdn_wrap_comm_div:'';
                        $bpiacrdn_comm_title_echo = ($bpiacrdn_yes_value === $bpiacrdn_comments_swtcher)?$bpiacrdn_comm_title:'';
                        echo $bpiacrdn_comm_switch.$bpiacrdn_comm_title_echo;
                        // =======================
                    echo '</div>';
                    // Description
                    $bpiacrdn_description = wp_trim_words(get_the_content(), $bpiacrdn_post_description_words, $bpiacrdn_blog_word_trim_indi);
                    $bpiacrdn_description_switcher = ($bpiacrdn_yes_value === $bpiacrdn_description_swtcher)?$bpiacrdn_description:'';
                    echo '<div class="bpiacrdn-prodDesc"><p class="bpiacrdn-decs">'.$bpiacrdn_description_switcher.'</p></div>';
                    // Button
                    $bpiacrdn_cart_text = '<a href="'.get_the_permalink().'" class="bpiacrdn-cartBtn">'.esc_html__($bpiacrdn_cart_button).'</a>';
                    $bpiacrdn_cart_icon = '<a href="'.get_the_permalink().'" class="bpiacrdn-sscartbtndd"><i class="bpiacrdn-cartBtn '.esc_attr($bpiacrdn_cart_button_icon).'"></i></a>';
                    $bpiacrdn_cart_T_I = ('text' === $bpiacrdn_cart_type)?$bpiacrdn_cart_text:$bpiacrdn_cart_icon;
                    $bpiacrdn_cart_wrap_html = '<div class="bpiacrdn-atcart-btn">'.$bpiacrdn_cart_T_I.'</div>';
                    echo ('yes' === $bpiacrdn_cart_btn)?$bpiacrdn_cart_wrap_html:'';
                echo '</div>';
            echo '</div>';
        echo ('yes' === $bpiacrdn_wrapper)?'</a>':'</div>';
    echo '</div>';
endwhile;
echo '</div>';
    echo '<div class="bpiacrdn_pagination_item">';
    $total_pages = $wp_query->max_num_pages;
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        if('none' === $bpiacrdn_the_pagination_type){
            echo paginate_links(array(
                'show_all' => false,
            ));
        } elseif('number-and-text' === $bpiacrdn_the_pagination_type){
            echo paginate_links(array(
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => $settings['bpiacrdn_blog_prev_format'],
                'next_text' => $settings['bpiacrdn_blog_next_format'],
            ));
        } elseif('number' === $bpiacrdn_the_pagination_type){
            echo paginate_links(array(
                'current' => $current_page,
                'total' => $total_pages,
                'prev_next' => false,
            ));
        }
    }
    echo '</div>';
    endif;
echo '</div>';
<div class="sassico-single-pricing xs_single_pricing_style_2">
    <div class="sassico-content-body">
        <div class="sassico-pricing-header">
            <?php if ($settings['sassico_pricing__image']['url'] != '') { ?>
            <img src="<?php echo esc_url($settings['sassico_pricing__image']['url'])?>" class="sassico-pricing-image" alt="sassico pricing icon">
            <?php }; ?>

            <?php if ($settings['sassico_pricing_plan_name'] != '') { ?>
            <h2 class="saasico-pricing-plan-title"><?php echo $settings['sassico_pricing_plan_name']?></h2>
            <?php }; ?>

            <?php if ($settings['sassico_pricing_price'] != '') { ?>
            <h3 class="sassico-pricing-price">
                <?php if ($settings['sassico_pricing_price_currency'] != '') { ?>
                    <sub><?php echo $settings['sassico_pricing_price_currency']?></sub><?php }; ?><?php echo $settings['sassico_pricing_price']?><?php if ($settings['sassico_pricing_price_period'] != '') { ?><sup><?php echo esc_html($settings['sassico_pricing_price_period'])?></sup>
                <?php }; ?>
            </h3>
            <?php }; ?>
    
            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/wave-shape.svg" alt="sassico pricing image" class="xs_svg_image">
        </div>
        <ul class="sassico-pricing-plan">
            <?php foreach ($pricing_lists as $pricing_list) { ?>
            <li>
            <?php if (!empty($pricing_list['xs_pricing_list_icon']['value']) && $pricing_list['xs_pricing_list_icon']['library'] === 'svg') { ?>
                <img src="<?php echo esc_url($pricing_list['xs_pricing_list_icon']['value']['url'])?>" alt="">
            <?php } ?>
            <?php if (!empty($pricing_list['xs_pricing_list_icon']['value']) && $pricing_list['xs_pricing_list_icon']['library'] !== 'svg') { ?>
                <i class="<?php echo esc_attr($pricing_list['xs_pricing_list_icon']['value'])?>"></i>
            <?php } ?>
            <?php echo $pricing_list['sassico_pricing_list_title']; ?>
            </li>
            <?php }; ?>
        </ul>
    </div>            
    <?php if ($settings['sassico_pricing_button_text'] != '') { ?>
        <div class="sassico-pricing-footer">
            <a href="<?php echo esc_url($settings['sassico_pricing_website_link']['url'])?>" rel="<?php echo esc_attr($rel); ?>" target="<?php echo esc_attr($target); ?>" class="btn btn-primary btn-block"><?php echo esc_html($settings['sassico_pricing_button_text'])?>
            </a>
        </div>
    <?php };?>
</div>
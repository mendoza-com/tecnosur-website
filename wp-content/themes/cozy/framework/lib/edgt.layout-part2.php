<?php

class CozyEdgeFieldImageVideo extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $cozy_edge_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch switch-type">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "image") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Image', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "video") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Video', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_imagevideo" value="image"<?php if (cozy_edge_option_get_value($name) == "image") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_imagevideo" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldYesEmpty extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $cozy_edge_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_yesempty" value="yes"<?php if (cozy_edge_option_get_value($name) == "yes") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_yesempty" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldFlagPage extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $cozy_edge_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "page") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagpage" value="page"<?php if (cozy_edge_option_get_value($name) == "page") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagpage" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldFlagPost extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "post") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagpost" value="post"<?php if (cozy_edge_option_get_value($name) == "post") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagpost" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldFlagMedia extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $cozy_edge_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "attachment") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagmedia" value="attachment"<?php if (cozy_edge_option_get_value($name) == "attachment") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagmedia" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldFlagPortfolio extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $cozy_edge_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "portfolio_page") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagportfolio" value="portfolio_page"<?php if (cozy_edge_option_get_value($name) == "portfolio_page") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagportfolio" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldFlagProduct extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $cozy_edge_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->



            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (cozy_edge_option_get_value($name) == "product") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'cozy') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (cozy_edge_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'cozy') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagproduct" value="product"<?php if (cozy_edge_option_get_value($name) == "product") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagproduct" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldRange extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        $range_min = 0;
        $range_max = 1;
        $range_step = 0.01;
        $range_decimals = 2;
        if(isset($args["range_min"]))
            $range_min = $args["range_min"];
        if(isset($args["range_max"]))
            $range_max = $args["range_max"];
        if(isset($args["range_step"]))
            $range_step = $args["range_step"];
        if(isset($args["range_decimals"]))
            $range_decimals = $args["range_decimals"];
        ?>

        <div class="edgtf-page-form-section">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->

            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="edgtf-slider-range-wrapper">
                                <div class="form-inline">
                                    <input type="text"
                                           class="form-control edgtf-form-element edgtf-form-element-xsmall pull-left edgtf-slider-range-value"
                                           name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>

                                    <div class="edgtf-slider-range small"
                                         data-step="<?php echo esc_attr($range_step); ?>" data-min="<?php echo esc_attr($range_min); ?>" data-max="<?php echo esc_attr($range_max); ?>" data-decimals="<?php echo esc_attr($range_decimals); ?>" data-start="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}

class CozyEdgeFieldRangeSimple extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        ?>

        <div class="col-lg-3" id="edgtf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <div class="edgtf-slider-range-wrapper">
                <div class="form-inline">
                    <em class="edgtf-field-description"><?php echo esc_html($label); ?></em>
                    <input type="text"
                           class="form-control edgtf-form-element edgtf-form-element-xxsmall pull-left edgtf-slider-range-value"
                           name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"/>

                    <div class="edgtf-slider-range xsmall"
                         data-step="0.01" data-max="1" data-start="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"></div>
                </div>

            </div>
        </div>
        <?php

    }

}

class CozyEdgeFieldRadio extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

        $checked = "";
        if ($default_value == $value)
            $checked = "checked";
        $html = '<input type="radio" name="'.$name.'" value="'.$default_value.'" '.$checked.' /> '.$label.'<br />';
        echo wp_kses($html, array(
            'input' => array(
                'type' => true,
                'name' => true,
                'value' => true,
                'checked' => true
            ),
            'br' => true
        ));

    }

}

class CozyEdgeFieldRadioGroup extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        $dependence = isset($args["dependence"]) && $args["dependence"] ? true : false;
        $show = !empty($args["show"]) ? $args["show"] : array();
        $hide = !empty($args["hide"]) ? $args["hide"] : array();

        $use_images = isset($args["use_images"]) && $args["use_images"] ? true : false;
        $hide_labels = isset($args["hide_labels"]) && $args["hide_labels"] ? true : false;
        $hide_radios = $use_images ? 'display: none' : '';
        $checked_value = cozy_edge_option_get_value($name);
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>" <?php if ($hidden) { ?> style="display: none"<?php } ?>>

            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->

            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(is_array($options) && count($options)) { ?>
                                <div class="edgtf-radio-group-holder <?php if($use_images) echo "with-images"; ?>">
                                    <?php foreach($options as $key => $atts) {
                                        $selected = false;
                                        if($checked_value == $key) {
                                            $selected = true;
                                        }

                                        $show_val = "";
                                        $hide_val = "";
                                        if($dependence) {
                                            if(array_key_exists($key, $show)) {
                                                $show_val = $show[$key];
                                            }

                                            if(array_key_exists($key, $hide)) {
                                                $hide_val = $hide[$key];
                                            }
                                        }
                                        ?>
                                        <label class="radio-inline">
                                            <input
                                                <?php echo cozy_edge_get_inline_attr($show_val, 'data-show'); ?>
                                                <?php echo cozy_edge_get_inline_attr($hide_val, 'data-hide'); ?>
                                                <?php if($selected) echo "checked"; ?> <?php cozy_edge_inline_style($hide_radios); ?>
                                                type="radio"
                                                name="<?php echo esc_attr($name);  ?>"
                                                value="<?php echo esc_attr($key); ?>"
                                                <?php if($dependence) cozy_edge_class_attribute("dependence"); ?>> <?php if(!empty($atts["label"]) && !$hide_labels) echo esc_attr($atts["label"]); ?>

                                            <?php if($use_images) { ?>
                                                <img title="<?php if(!empty($atts["label"])) echo esc_attr($atts["label"]); ?>" src="<?php echo esc_url($atts['image']); ?>" alt="<?php echo esc_attr("$key image") ?>"/>
                                            <?php } ?>
                                        </label>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php
    }

}

class CozyEdgeFieldCheckBox extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

        $checked = "";
        if ($default_value == $value)
            $checked = "checked";
        $html = '<input type="checkbox" name="'.$name.'" value="'.$default_value.'" '.$checked.' /> '.$label.'<br />';
        echo wp_kses($html, array(
            'input' => array(
                'type' => true,
                'name' => true,
                'value' => true,
                'checked' => true
            ),
            'br' => true
        ));

    }

}

class CozyEdgeFieldDate extends CozyEdgeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        $col_width = 2;
        if(isset($args["col_width"]))
            $col_width = $args["col_width"];
        ?>

        <div class="edgtf-page-form-section" id="edgtf_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->

            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-<?php echo esc_attr($col_width); ?>">
                            <input type="text"
                                   id = "portfolio_date"
                                   class="datepicker form-control edgtf-input edgtf-form-element"
                                   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr(cozy_edge_option_get_value($name)); ?>"
                            /></div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }

}


class CozyEdgeFieldFactory {

    public function render( $field_type, $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {


        switch ( strtolower( $field_type ) ) {

            case 'text':
                $field = new CozyEdgeFieldText();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'textsimple':
                $field = new CozyEdgeFieldTextSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'textarea':
                $field = new CozyEdgeFieldTextArea();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'textareasimple':
                $field = new CozyEdgeFieldTextAreaSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'color':
                $field = new CozyEdgeFieldColor();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'colorsimple':
                $field = new CozyEdgeFieldColorSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'image':
                $field = new CozyEdgeFieldImage();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'imagesimple':
                $field = new CozyEdgeFieldImageSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'font':
                $field = new CozyEdgeFieldFont();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'fontsimple':
                $field = new CozyEdgeFieldFontSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'select':
                $field = new CozyEdgeFieldSelect();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'selectblank':
                $field = new CozyEdgeFieldSelectBlank();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'selectsimple':
                $field = new CozyEdgeFieldSelectSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'selectblanksimple':
                $field = new CozyEdgeFieldSelectBlankSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'yesno':
                $field = new CozyEdgeFieldYesNo();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'yesnosimple':
                $field = new CozyEdgeFieldYesNoSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'onoff':
                $field = new CozyEdgeFieldOnOff();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'portfoliofollow':
                $field = new CozyEdgeFieldPortfolioFollow();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'zeroone':
                $field = new CozyEdgeFieldZeroOne();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'imagevideo':
                $field = new CozyEdgeFieldImageVideo();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'yesempty':
                $field = new CozyEdgeFieldYesEmpty();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagpost':
                $field = new CozyEdgeFieldFlagPost();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagpage':
                $field = new CozyEdgeFieldFlagPage();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagmedia':
                $field = new CozyEdgeFieldFlagMedia();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagportfolio':
                $field = new CozyEdgeFieldFlagPortfolio();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagproduct':
                $field = new CozyEdgeFieldFlagProduct();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'range':
                $field = new CozyEdgeFieldRange();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'rangesimple':
                $field = new CozyEdgeFieldRangeSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'radio':
                $field = new CozyEdgeFieldRadio();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'checkbox':
                $field = new CozyEdgeFieldCheckBox();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'date':
                $field = new CozyEdgeFieldDate();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;
            case 'radiogroup':
                $field = new CozyEdgeFieldRadioGroup();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;
            default:
                break;

        }

    }

}

/*
   Class: CozyEdgeMultipleImages
   A class that initializes Edge Multiple Images
*/
class CozyEdgeMultipleImages implements iCozyEdgeRender {
    private $name;
    private $label;
    private $description;


    function __construct($name,$label="",$description="") {
        global $cozy_edge_Framework;
        $this->name = $name;
        $this->label = $label;
        $this->description = $description;
        $cozy_edge_Framework->edgtMetaBoxes->addOption($this->name,"");
    }

    public function render($factory) {
        global $post;
        ?>

        <div class="edgtf-page-form-section">


            <div class="edgtf-field-desc">
                <h4><?php echo esc_html($this->label); ?></h4>

                <p><?php echo esc_html($this->description); ?></p>
            </div>
            <!-- close div.edgtf-field-desc -->

            <div class="edgtf-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="edgt-gallery-images-holder clearfix">
                                <?php
                                $image_gallery_val = get_post_meta( $post->ID, $this->name , true );
                                if($image_gallery_val!='' ) $image_gallery_array=explode(',',$image_gallery_val);

                                if(isset($image_gallery_array) && count($image_gallery_array)!=0):

                                    foreach($image_gallery_array as $gimg_id):

                                        $gimage_wp = wp_get_attachment_image_src($gimg_id,'thumbnail', true);
                                        echo '<li class="edgt-gallery-image-holder"><img src="'.esc_url($gimage_wp[0]).'"/></li>';

                                    endforeach;

                                endif;
                                ?>
                            </ul>
                            <input type="hidden" value="<?php echo esc_attr($image_gallery_val); ?>" id="<?php echo esc_attr( $this->name) ?>" name="<?php echo esc_attr( $this->name) ?>">
                            <div class="edgtf-gallery-uploader">
                                <a class="edgtf-gallery-upload-btn btn btn-sm btn-primary"
                                   href="javascript:void(0)"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                <a class="edgtf-gallery-clear-btn btn btn-sm btn-default pull-right"
                                   href="javascript:void(0)"><?php esc_html_e('Remove All', 'cozy'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.edgtf-section-content -->

        </div>
        <?php

    }
}

/*
   Class: CozyEdgeImagesVideos
   A class that initializes Edge Images Videos
*/
class CozyEdgeImagesVideos implements iCozyEdgeRender {
    private $label;
    private $description;


    function __construct($label="",$description="") {
        $this->label = $label;
        $this->description = $description;
    }

    public function render($factory) {
        global $post;
        ?>
        <div class="edgtf_hidden_portfolio_images" style="display: none">
            <div class="edgtf-page-form-section">


                <div class="edgtf-field-desc">
                    <h4><?php echo esc_html($this->label); ?></h4>

                    <p><?php echo esc_html($this->description); ?></p>
                </div>
                <!-- close div.edgtf-field-desc -->

                <div class="edgtf-section-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2">
                                <em class="edgtf-field-description"><?php esc_html_e('Order Number', 'cozy');?></em>
                                <input type="text"
                                       class="form-control edgtf-input edgtf-form-element"
                                       id="portfolioimgordernumber_x"
                                       name="portfolioimgordernumber_x"
                                       placeholder=""/></div>
                            <div class="col-lg-10">
                                <em class="edgtf-field-description"><?php esc_html_e('Image/Video title (only for gallery layout - Portfolio Style 6)', 'cozy');?></em>
                                <input type="text"
                                       class="form-control edgtf-input edgtf-form-element"
                                       id="portfoliotitle_x"
                                       name="portfoliotitle_x"
                                       placeholder=""/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <em class="edgtf-field-description"><?php esc_html_e('Image', 'cozy');?></em>
                                <div class="edgtf-media-uploader">
                                    <div style="display: none"
                                         class="edgtf-media-image-holder">
                                        <img src="" alt=""
                                             class="edgtf-media-image img-thumbnail"/>
                                    </div>
                                    <div style="display: none"
                                         class="edgtf-media-meta-fields">
                                        <input type="hidden" class="edgtf-media-upload-url"
                                               name="portfolioimg_x"
                                               id="portfolioimg_x"/>
                                        <input type="hidden"
                                               class="edgtf-media-upload-height"
                                               name="edgt_options_theme[media-upload][height]"
                                               value=""/>
                                        <input type="hidden"
                                               class="edgtf-media-upload-width"
                                               name="edgt_options_theme[media-upload][width]"
                                               value=""/>
                                    </div>
                                    <a class="edgtf-media-upload-btn btn btn-sm btn-primary"
                                       href="javascript:void(0)"
                                       data-frame-title="<?php esc_html_e('Select Image', 'cozy'); ?>"
                                       data-frame-button-text="<?php esc_html_e('Select Image', 'cozy'); ?>"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                    <a style="display: none;" href="javascript: void(0)"
                                       class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-3">
                                <em class="edgtf-field-description"><?php esc_html_e('Video type', 'cozy');?></em>
                                <select class="form-control edgtf-form-element edgtf-portfoliovideotype"
                                        name="portfoliovideotype_x" id="portfoliovideotype_x">
                                    <option value=""></option>
                                    <option value="youtube"><?php esc_html_e('Youtube', 'cozy');?></option>
                                    <option value="vimeo"><?php esc_html_e('Vimeo', 'cozy');?></option>
                                    <option value="self"><?php esc_html_e('Self hosted', 'cozy');?></option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <em class="edgtf-field-description"><?php esc_html_e('Video ID', 'cozy');?></em>
                                <input type="text"
                                       class="form-control edgtf-input edgtf-form-element"
                                       id="portfoliovideoid_x"
                                       name="portfoliovideoid_x"
                                       placeholder=""/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <em class="edgtf-field-description"><?php esc_html_e('Video image', 'cozy');?></em>
                                <div class="edgtf-media-uploader">
                                    <div style="display: none"
                                         class="edgtf-media-image-holder">
                                        <img src="" alt=""
                                             class="edgtf-media-image img-thumbnail"/>
                                    </div>
                                    <div style="display: none"
                                         class="edgtf-media-meta-fields">
                                        <input type="hidden" class="edgtf-media-upload-url"
                                               name="portfoliovideoimage_x"
                                               id="portfoliovideoimage_x"/>
                                        <input type="hidden"
                                               class="edgtf-media-upload-height"
                                               name="edgt_options_theme[media-upload][height]"
                                               value=""/>
                                        <input type="hidden"
                                               class="edgtf-media-upload-width"
                                               name="edgt_options_theme[media-upload][width]"
                                               value=""/>
                                    </div>
                                    <a class="edgtf-media-upload-btn btn btn-sm btn-primary"
                                       href="javascript:void(0)"
                                       data-frame-title="<?php esc_html_e('Select Image', 'cozy'); ?>"
                                       data-frame-button-text="<?php esc_html_e('Select Image', 'cozy'); ?>"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                    <a style="display: none;" href="javascript: void(0)"
                                       class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-4">
                                <em class="edgtf-field-description"><?php esc_html_e('Video webm', 'cozy');?></em>
                                <input type="text"
                                       class="form-control edgtf-input edgtf-form-element"
                                       id="portfoliovideowebm_x"
                                       name="portfoliovideowebm_x"
                                       placeholder=""/></div>
                            <div class="col-lg-4">
                                <em class="edgtf-field-description"><?php esc_html_e('Video mp4', 'cozy'); ?></em>
                                <input type="text"
                                       class="form-control edgtf-input edgtf-form-element"
                                       id="portfoliovideomp4_x"
                                       name="portfoliovideomp4_x"
                                       placeholder=""/></div>
                            <div class="col-lg-4">
                                <em class="edgtf-field-description"><?php esc_html_e('Video ogv', 'cozy'); ?></em>
                                <input type="text"
                                       class="form-control edgtf-input edgtf-form-element"
                                       id="portfoliovideoogv_x"
                                       name="portfoliovideoogv_x"
                                       placeholder=""/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <a class="edgtf_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e('Remove portfolio image/video', 'cozy'); ?></a>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- close div.edgtf-section-content -->

            </div>
        </div>

        <?php
        $no = 1;
        $portfolio_images = get_post_meta( $post->ID, 'edgt_portfolio_images', true );
        if (count($portfolio_images)>1) {
            usort($portfolio_images, "cozy_edge_compare_portfolio_videos");
        }
        while (isset($portfolio_images[$no-1])) {
            $portfolio_image = $portfolio_images[$no-1];
            ?>
            <div class="edgtf_portfolio_image" rel="<?php echo esc_attr($no); ?>" style="display: block;">

                <div class="edgtf-page-form-section">


                    <div class="edgtf-field-desc">
                        <h4><?php echo esc_html($this->label); ?></h4>

                        <p><?php echo esc_html($this->description); ?></p>
                    </div>
                    <!-- close div.edgtf-field-desc -->

                    <div class="edgtf-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <em class="edgtf-field-description"><?php esc_html_e('Order Number', 'cozy'); ?></em>
                                    <input type="text"
                                           class="form-control edgtf-input edgtf-form-element"
                                           id="portfolioimgordernumber_<?php echo esc_attr($no); ?>"
                                           name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber']) ? esc_attr(stripslashes($portfolio_image['portfolioimgordernumber'])) : ""; ?>"
                                           placeholder=""/></div>
                                <div class="col-lg-10">
                                    <em class="edgtf-field-description"><?php esc_html_e('Image/Video title (only for gallery layout - Portfolio Style 6)', 'cozy'); ?></em>
                                    <input type="text"
                                           class="form-control edgtf-input edgtf-form-element"
                                           id="portfoliotitle_<?php echo esc_attr($no); ?>"
                                           name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle']) ? esc_attr(stripslashes($portfolio_image['portfoliotitle'])) : ""; ?>"
                                           placeholder=""/></div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="edgtf-field-description"><?php esc_html_e('Image', 'cozy'); ?></em>
                                    <div class="edgtf-media-uploader">
                                        <div<?php if (stripslashes($portfolio_image['portfolioimg']) == false) { ?> style="display: none"<?php } ?> class="edgtf-media-image-holder">
                                            <img src="<?php if (stripslashes($portfolio_image['portfolioimg']) == true) { echo esc_url(cozy_edge_get_attachment_thumb_url(stripslashes($portfolio_image['portfolioimg']))); } ?>" alt=""
                                                 class="edgtf-media-image img-thumbnail"/>
                                        </div>
                                        <div style="display: none"
                                             class="edgtf-media-meta-fields">
                                            <input type="hidden" class="edgtf-media-upload-url"
                                                   name="portfolioimg[]"
                                                   id="portfolioimg_<?php echo esc_attr($no); ?>"
                                                   value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>"/>
                                            <input type="hidden"
                                                   class="edgtf-media-upload-height"
                                                   name="edgt_options_theme[media-upload][height]"
                                                   value=""/>
                                            <input type="hidden"
                                                   class="edgtf-media-upload-width"
                                                   name="edgt_options_theme[media-upload][width]"
                                                   value=""/>
                                        </div>
                                        <a class="edgtf-media-upload-btn btn btn-sm btn-primary"
                                           href="javascript:void(0)"
                                           data-frame-title="<?php esc_html_e('Select Image', 'cozy'); ?>"
                                           data-frame-button-text="<?php esc_html_e('Select Image', 'cozy'); ?>"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)"
                                           class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-3">
                                    <em class="edgtf-field-description"><?php esc_html_e('Video type', 'cozy'); ?></em>
                                    <select class="form-control edgtf-form-element edgtf-portfoliovideotype"
                                            name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr($no); ?>">
                                        <option value=""></option>
                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "youtube") { echo "selected='selected'"; } ?>  value="youtube"><?php esc_html_e('Youtube', 'cozy'); ?></option>
                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "vimeo") { echo "selected='selected'"; } ?>  value="vimeo"><?php esc_html_e('Vimeo', 'cozy'); ?></option>
                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "self") { echo "selected='selected'"; } ?>  value="self"><?php esc_html_e('Self hosted', 'cozy'); ?></option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <em class="edgtf-field-description"><?php esc_html_e('Video ID', 'cozy'); ?></em>
                                    <input type="text"
                                           class="form-control edgtf-input edgtf-form-element"
                                           id="portfoliovideoid_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoid'])) : ""; ?>"
                                           placeholder=""/></div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="edgtf-field-description"><?php esc_html_e('Video image', 'cozy'); ?></em>
                                    <div class="edgtf-media-uploader">
                                        <div<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == false) { ?> style="display: none"<?php } ?>
                                            class="edgtf-media-image-holder">
                                            <img src="<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == true) { echo esc_url(cozy_edge_get_attachment_thumb_url(stripslashes($portfolio_image['portfoliovideoimage']))); } ?>" alt=""
                                                 class="edgtf-media-image img-thumbnail"/>
                                        </div>
                                        <div style="display: none"
                                             class="edgtf-media-meta-fields">
                                            <input type="hidden" class="edgtf-media-upload-url"
                                                   name="portfoliovideoimage[]"
                                                   id="portfoliovideoimage_<?php echo esc_attr($no); ?>"
                                                   value="<?php echo stripslashes($portfolio_image['portfoliovideoimage']); ?>"/>
                                            <input type="hidden"
                                                   class="edgtf-media-upload-height"
                                                   name="edgt_options_theme[media-upload][height]"
                                                   value=""/>
                                            <input type="hidden"
                                                   class="edgtf-media-upload-width"
                                                   name="edgt_options_theme[media-upload][width]"
                                                   value=""/>
                                        </div>
                                        <a class="edgtf-media-upload-btn btn btn-sm btn-primary"
                                           href="javascript:void(0)"
                                           data-frame-title="<?php esc_html_e('Select Image', 'cozy'); ?>"
                                           data-frame-button-text="<?php esc_html_e('Select Image', 'cozy'); ?>"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)"
                                           class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-4">
                                    <em class="edgtf-field-description"><?php esc_html_e('Video webm', 'cozy'); ?></em>
                                    <input type="text"
                                           class="form-control edgtf-input edgtf-form-element"
                                           id="portfoliovideowebm_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm']) ? esc_attr(stripslashes($portfolio_image['portfoliovideowebm'])) : ""; ?>"
                                           placeholder=""/></div>
                                <div class="col-lg-4">
                                    <em class="edgtf-field-description"><?php esc_html_e('Video mp4', 'cozy'); ?></em>
                                    <input type="text"
                                           class="form-control edgtf-input edgtf-form-element"
                                           id="portfoliovideomp4_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4']) ? esc_attr(stripslashes($portfolio_image['portfoliovideomp4'])) : ""; ?>"
                                           placeholder=""/></div>
                                <div class="col-lg-4">
                                    <em class="edgtf-field-description"><?php esc_html_e('Video ogv', 'cozy'); ?></em>
                                    <input type="text"
                                           class="form-control edgtf-input edgtf-form-element"
                                           id="portfoliovideoogv_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoogv'])):""; ?>"
                                           placeholder=""/></div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <a class="edgtf_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e('Remove portfolio image/video', 'cozy'); ?></a>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- close div.edgtf-section-content -->

                </div>
            </div>
            <?php
            $no++;
        }
        ?>
        <br />
        <a class="edgtf_add_image btn btn-sm btn-primary" onclick="javascript: return false;" href="/" ><?php esc_html_e('Add portfolio image/video', 'cozy'); ?></a>
        <?php

    }
}


/*
   Class: CozyEdgeImagesVideos
   A class that initializes Edge Images Videos
*/
class CozyEdgeImagesVideosFramework implements iCozyEdgeRender {
    private $label;
    private $description;


    function __construct($label="",$description="") {
        $this->label = $label;
        $this->description = $description;
    }

    public function render($factory) {
        global $post;
        ?>

        <!--Image hidden start-->
        <div class="edgtf-hidden-portfolio-images"  style="display: none">
            <div class="edgtf-portfolio-toggle-holder">
                <div class="edgtf-portfolio-toggle edgtf-toggle-desc">
                    <span class="number">1</span><span class="edgtf-toggle-inner"><?php esc_html_e('Remove', 'cozy'); ?></em></span>
                </div>
                <div class="edgtf-portfolio-toggle edgtf-portfolio-control">
                    <span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span>
                    <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="edgtf-portfolio-toggle-content">
                <div class="edgtf-page-form-section">
                    <div class="edgtf-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="edgtf-media-uploader">
                                        <em class="edgtf-field-description"><?php esc_html_e('Image', 'cozy'); ?> </em>
                                        <div style="display: none" class="edgtf-media-image-holder">
                                            <img src="" alt="" class="edgtf-media-image img-thumbnail">
                                        </div>
                                        <div  class="edgtf-media-meta-fields">
                                            <input type="hidden" class="edgtf-media-upload-url" name="portfolioimg_x" id="portfolioimg_x">
                                            <input type="hidden" class="edgtf-media-upload-height" name="edgt_options_theme[media-upload][height]" value="">
                                            <input type="hidden" class="edgtf-media-upload-width" name="edgt_options_theme[media-upload][width]" value="">
                                        </div>
                                        <a class="edgtf-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="Select Image" data-frame-button-text="Select Image">Upload</a>
                                        <a style="display: none;" href="javascript: void(0)" class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <em class="edgtf-field-description"><?php esc_html_e('Order Number', 'cozy'); ?></em>
                                    <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x" placeholder="">
                                </div>
                                <div class="col-lg-8">
                                    <em class="edgtf-field-description"><?php esc_html_e('Image Title (works only for Gallery portfolio type selected)', 'cozy'); ?> </em>
                                    <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliotitle_x" name="portfoliotitle_x" placeholder="">
                                </div>
                            </div>
                            <input type="hidden" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
                            <input type="hidden" name="portfoliovideotype_x" id="portfoliovideotype_x">
                            <input type="hidden" name="portfoliovideoid_x" id="portfoliovideoid_x">
                            <input type="hidden" name="portfoliovideowebm_x" id="portfoliovideowebm_x">
                            <input type="hidden" name="portfoliovideomp4_x" id="portfoliovideomp4_x">
                            <input type="hidden" name="portfoliovideoogv_x" id="portfoliovideoogv_x">
                            <input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="image">

                        </div><!-- close div.container-fluid -->
                    </div><!-- close div.edgtf-section-content -->
                </div>
            </div>
        </div>
        <!--Image hidden End-->

        <!--Video Hidden Start-->
        <div class="edgtf-hidden-portfolio-videos"  style="display: none">
            <div class="edgtf-portfolio-toggle-holder">
                <div class="edgtf-portfolio-toggle edgtf-toggle-desc">
                    <span class="number">2</span><span class="edgtf-toggle-inner"><?php esc_html_e('Video - (Order Number, Video Title)', 'cozy'); ?></span>
                </div>
                <div class="edgtf-portfolio-toggle edgtf-portfolio-control">
                    <span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span> <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="edgtf-portfolio-toggle-content">
                <div class="edgtf-page-form-section">
                    <div class="edgtf-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="edgtf-media-uploader">
                                        <em class="edgtf-field-description"><?php esc_html_e('Cover Video Image', 'cozy'); ?> </em>
                                        <div style="display: none" class="edgtf-media-image-holder">
                                            <img src="" alt="" class="edgtf-media-image img-thumbnail">
                                        </div>
                                        <div style="display: none" class="edgtf-media-meta-fields">
                                            <input type="hidden" class="edgtf-media-upload-url" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
                                            <input type="hidden" class="edgtf-media-upload-height" name="edgt_options_theme[media-upload][height]" value="">
                                            <input type="hidden" class="edgtf-media-upload-width" name="edgt_options_theme[media-upload][width]" value="">
                                        </div>
                                        <a class="edgtf-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="Select Image" data-frame-button-text="Select Image"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)" class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <em class="edgtf-field-description"><?php esc_html_e('Order Number', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x" placeholder="">
                                        </div>
                                        <div class="col-lg-10">
                                            <em class="edgtf-field-description"><?php esc_html_e('Video Title (works only for Gallery portfolio type selected)', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliotitle_x" name="portfoliotitle_x" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row next-row">
                                        <div class="col-lg-2">
                                            <em class="edgtf-field-description"><?php esc_html_e('Video type', 'cozy'); ?></em>
                                            <select class="form-control edgtf-form-element edgtf-portfoliovideotype" name="portfoliovideotype_x" id="portfoliovideotype_x">
                                                <option value=""></option>
                                                <option value="youtube"><?php esc_html_e('Youtube', 'cozy'); ?></option>
                                                <option value="vimeo"><?php esc_html_e('Vimeo', 'cozy'); ?></option>
                                                <option value="self"><?php esc_html_e('Self hosted', 'cozy'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 edgtf-video-id-holder">
                                            <em class="edgtf-field-description" id="videoId"><?php esc_html_e('Video ID', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliovideoid_x" name="portfoliovideoid_x" placeholder="">
                                        </div>
                                    </div>

                                    <div class="row next-row edgtf-video-self-hosted-path-holder">
                                        <div class="col-lg-4">
                                            <em class="edgtf-field-description"><?php esc_html_e('Video webm', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliovideowebm_x" name="portfoliovideowebm_x" placeholder="">
                                        </div>
                                        <div class="col-lg-4">
                                            <em class="edgtf-field-description"><?php esc_html_e('Video mp4', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliovideomp4_x" name="portfoliovideomp4_x" placeholder="">
                                        </div>
                                        <div class="col-lg-4">
                                            <em class="edgtf-field-description"><?php esc_html_e('Video ogv', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliovideoogv_x" name="portfoliovideoogv_x" placeholder="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="portfolioimg_x" id="portfolioimg_x">
                            <input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="video">
                        </div><!-- close div.container-fluid -->
                    </div><!-- close div.edgtf-section-content -->
                </div>
            </div>
        </div>
        <!--Video Hidden End-->


        <?php
        $no = 1;
        $portfolio_images = get_post_meta( $post->ID, 'edgt_portfolio_images', true );
        if (count($portfolio_images)>1) {
            usort($portfolio_images, "cozy_edge_compare_portfolio_videos");
        }
        while (isset($portfolio_images[$no-1])) {
            $portfolio_image = $portfolio_images[$no-1];
            if (isset($portfolio_image['portfolioimgtype']))
                $portfolio_img_type = $portfolio_image['portfolioimgtype'];
            else {
                if (stripslashes($portfolio_image['portfolioimg']) == true)
                    $portfolio_img_type = "image";
                else
                    $portfolio_img_type = "video";
            }
            if ($portfolio_img_type == "image") {
                ?>

                <div class="edgtf-portfolio-images edgtf-portfolio-media" rel="<?php echo esc_attr($no); ?>">
                    <div class="edgtf-portfolio-toggle-holder">
                        <div class="edgtf-portfolio-toggle edgtf-toggle-desc">
                            <span class="number"><?php echo esc_html($no); ?></span><span class="edgtf-toggle-inner">Image - <em>(<?php echo stripslashes($portfolio_image['portfolioimgordernumber']); ?>, <?php echo stripslashes($portfolio_image['portfoliotitle']); ?>)</em></span>
                        </div>
                        <div class="edgtf-portfolio-toggle edgtf-portfolio-control">
                            <a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a>
                            <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="edgtf-portfolio-toggle-content" style="display: none">
                        <div class="edgtf-page-form-section">
                            <div class="edgtf-section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="edgtf-media-uploader">
                                                <em class="edgtf-field-description"><?php esc_html_e('Image', 'cozy'); ?> </em>
                                                <div<?php if (stripslashes($portfolio_image['portfolioimg']) == false) { ?> style="display: none"<?php } ?>
                                                    class="edgtf-media-image-holder">
                                                    <img src="<?php if (stripslashes($portfolio_image['portfolioimg']) == true) { echo esc_url(cozy_edge_get_attachment_thumb_url(stripslashes($portfolio_image['portfolioimg']))); } ?>" alt=""
                                                         class="edgtf-media-image img-thumbnail"/>
                                                </div>
                                                <div style="display: none"
                                                     class="edgtf-media-meta-fields">
                                                    <input type="hidden" class="edgtf-media-upload-url"
                                                           name="portfolioimg[]"
                                                           id="portfolioimg_<?php echo esc_attr($no); ?>"
                                                           value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>"/>
                                                    <input type="hidden"
                                                           class="edgtf-media-upload-height"
                                                           name="edgt_options_theme[media-upload][height]"
                                                           value=""/>
                                                    <input type="hidden"
                                                           class="edgtf-media-upload-width"
                                                           name="edgt_options_theme[media-upload][width]"
                                                           value=""/>
                                                </div>
                                                <a class="edgtf-media-upload-btn btn btn-sm btn-primary"
                                                   href="javascript:void(0)"
                                                   data-frame-title="<?php esc_html_e('Select Image', 'cozy'); ?>"
                                                   data-frame-button-text="<?php esc_html_e('Select Image', 'cozy'); ?>"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                                <a style="display: none;" href="javascript: void(0)"
                                                   class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <em class="edgtf-field-description"><?php esc_html_e('Order Number', 'cozy'); ?></em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfolioimgordernumber_<?php echo esc_attr($no); ?>" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber']) ? esc_attr(stripslashes($portfolio_image['portfolioimgordernumber'])) : ""; ?>" placeholder="">
                                        </div>
                                        <div class="col-lg-8">
                                            <em class="edgtf-field-description"><?php esc_html_e('Image Title (works only for Gallery portfolio type selected)', 'cozy'); ?> </em>
                                            <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliotitle_<?php echo esc_attr($no); ?>" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle']) ? esc_attr(stripslashes($portfolio_image['portfoliotitle'])) : ""; ?>" placeholder="">
                                        </div>
                                    </div>
                                    <input type="hidden" id="portfoliovideoimage_<?php echo esc_attr($no); ?>" name="portfoliovideoimage[]">
                                    <input type="hidden" id="portfoliovideotype_<?php echo esc_attr($no); ?>" name="portfoliovideotype[]">
                                    <input type="hidden" id="portfoliovideoid_<?php echo esc_attr($no); ?>" name="portfoliovideoid[]">
                                    <input type="hidden" id="portfoliovideowebm_<?php echo esc_attr($no); ?>" name="portfoliovideowebm[]">
                                    <input type="hidden" id="portfoliovideomp4_<?php echo esc_attr($no); ?>" name="portfoliovideomp4[]">
                                    <input type="hidden" id="portfoliovideoogv_<?php echo esc_attr($no); ?>" name="portfoliovideoogv[]">
                                    <input type="hidden" id="portfolioimgtype_<?php echo esc_attr($no); ?>" name="portfolioimgtype[]" value="image">
                                </div><!-- close div.container-fluid -->
                            </div><!-- close div.edgtf-section-content -->
                        </div>
                    </div>
                </div>

                <?php
            } else {
                ?>
                <div class="edgtf-portfolio-videos edgtf-portfolio-media" rel="<?php echo esc_attr($no); ?>">
                    <div class="edgtf-portfolio-toggle-holder">
                        <div class="edgtf-portfolio-toggle edgtf-toggle-desc">
                            <span class="number"><?php echo esc_html($no); ?></span><span class="edgtf-toggle-inner"><?php esc_html_e('Video -', 'cozy'); ?> <em>(<?php echo stripslashes($portfolio_image['portfolioimgordernumber']); ?>, <?php echo stripslashes($portfolio_image['portfoliotitle']); ?></em>) </span>
                        </div>
                        <div class="edgtf-portfolio-toggle edgtf-portfolio-control">
                            <a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a> <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="edgtf-portfolio-toggle-content" style="display: none">
                        <div class="edgtf-page-form-section">
                            <div class="edgtf-section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="edgtf-media-uploader">
                                                <em class="edgtf-field-description"><?php esc_html_e('Cover Video Image', 'cozy'); ?> </em>
                                                <div<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == false) { ?> style="display: none"<?php } ?>
                                                    class="edgtf-media-image-holder">
                                                    <img src="<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == true) { echo esc_url(cozy_edge_get_attachment_thumb_url(stripslashes($portfolio_image['portfoliovideoimage']))); } ?>" alt=""
                                                         class="edgtf-media-image img-thumbnail"/>
                                                </div>
                                                <div style="display: none"
                                                     class="edgtf-media-meta-fields">
                                                    <input type="hidden" class="edgtf-media-upload-url"
                                                           name="portfoliovideoimage[]"
                                                           id="portfoliovideoimage_<?php echo esc_attr($no); ?>"
                                                           value="<?php echo stripslashes($portfolio_image['portfoliovideoimage']); ?>"/>
                                                    <input type="hidden"
                                                           class="edgtf-media-upload-height"
                                                           name="edgt_options_theme[media-upload][height]"
                                                           value=""/>
                                                    <input type="hidden"
                                                           class="edgtf-media-upload-width"
                                                           name="edgt_options_theme[media-upload][width]"
                                                           value=""/>
                                                </div>
                                                <a class="edgtf-media-upload-btn btn btn-sm btn-primary"
                                                   href="javascript:void(0)"
                                                   data-frame-title="<?php esc_html_e('Select Image', 'cozy'); ?>"
                                                   data-frame-button-text="<?php esc_html_e('Select Image', 'cozy'); ?>"><?php esc_html_e('Upload', 'cozy'); ?></a>
                                                <a style="display: none;" href="javascript: void(0)"
                                                   class="edgtf-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'cozy'); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Order Number', 'cozy'); ?></em>
                                                    <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfolioimgordernumber_<?php echo esc_attr($no); ?>" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber']) ? esc_attr(stripslashes($portfolio_image['portfolioimgordernumber'])) : ""; ?>" placeholder="">
                                                </div>
                                                <div class="col-lg-10">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Video Title (works only for Gallery portfolio type selected)', 'cozy'); ?> </em>
                                                    <input type="text" class="form-control edgtf-input edgtf-form-element" id="portfoliotitle_<?php echo esc_attr($no); ?>" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle']) ? esc_attr(stripslashes($portfolio_image['portfoliotitle'])) : ""; ?>" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row next-row">
                                                <div class="col-lg-2">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Video Type', 'cozy'); ?></em>
                                                    <select class="form-control edgtf-form-element edgtf-portfoliovideotype"
                                                            name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr($no); ?>">
                                                        <option value=""></option>
                                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "youtube") { echo "selected='selected'"; } ?>  value="youtube"><?php esc_html_e('Youtube', 'cozy'); ?></option>
                                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "vimeo") { echo "selected='selected'"; } ?>  value="vimeo"><?php esc_html_e('Vimeo', 'cozy'); ?></option>
                                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "self") { echo "selected='selected'"; } ?>  value="self"><?php esc_html_e('Self hosted', 'cozy'); ?></option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 edgtf-video-id-holder">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Video ID', 'cozy'); ?></em>
                                                    <input type="text"
                                                           class="form-control edgtf-input edgtf-form-element"
                                                           id="portfoliovideoid_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoid'])) : ""; ?>"
                                                           placeholder=""/>
                                                </div>
                                            </div>

                                            <div class="row next-row edgtf-video-self-hosted-path-holder">
                                                <div class="col-lg-4">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Video webm', 'cozy'); ?></em>
                                                    <input type="text"
                                                           class="form-control edgtf-input edgtf-form-element"
                                                           id="portfoliovideowebm_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm'])? esc_attr(stripslashes($portfolio_image['portfoliovideowebm'])) : ""; ?>"
                                                           placeholder=""/></div>
                                                <div class="col-lg-4">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Video mp4', 'cozy'); ?></em>
                                                    <input type="text"
                                                           class="form-control edgtf-input edgtf-form-element"
                                                           id="portfoliovideomp4_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4']) ? esc_attr(stripslashes($portfolio_image['portfoliovideomp4'])) : ""; ?>"
                                                           placeholder=""/></div>
                                                <div class="col-lg-4">
                                                    <em class="edgtf-field-description"><?php esc_html_e('Video ogv', 'cozy'); ?></em>
                                                    <input type="text"
                                                           class="form-control edgtf-input edgtf-form-element"
                                                           id="portfoliovideoogv_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv']) ? esc_attr(stripslashes($portfolio_image['portfoliovideoogv'])) : ""; ?>"
                                                           placeholder=""/></div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" id="portfolioimg_<?php echo esc_attr($no); ?>" name="portfolioimg[]">
                                    <input type="hidden" id="portfolioimgtype_<?php echo esc_attr($no); ?>" name="portfolioimgtype[]" value="video">
                                </div><!-- close div.container-fluid -->
                            </div><!-- close div.edgtf-section-content -->
                        </div>
                    </div>
                </div>
                <?php
            }
            $no++;
        }
        ?>

        <div class="edgtf-portfolio-add">
            <a class="edgtf-add-image btn btn-sm btn-primary" href="#"><i class="fa fa-camera"></i> <?php esc_html_e('Add Image', 'cozy'); ?></a>
            <a class="edgtf-add-video btn btn-sm btn-primary" href="#"><i class="fa fa-video-camera"></i><?php esc_html_e('Add Video', 'cozy'); ?> </a>

            <a class="edgtf-toggle-all-media btn btn-sm btn-default pull-right" href="#"><?php esc_html_e('Expand All', 'cozy'); ?></a>
            <?php /* <a class="edgtf-remove-last-row-media btn btn-sm btn-default pull-right" href="#"> Remove last row</a> */ ?>
        </div>
        <?php

    }
}
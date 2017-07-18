<?php
$cozy_edge_variable_sidebar = cozy_edge_get_sidebar();
?>
<div class="edgtf-column-inner">
    <aside class="edgtf-sidebar">
        <?php
            if (is_active_sidebar($cozy_edge_variable_sidebar)) {
                dynamic_sidebar($cozy_edge_variable_sidebar);
            }
        ?>
    </aside>
</div>

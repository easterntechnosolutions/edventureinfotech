<?php
global $parent_title;
$menu = itomic_submenu( array('theme_location' => 'main-menu', 'echo' => FALSE, 'title' => '', 'showtitle' => true) );
if($menu != "" && isset($parent_title)){
    echo "<div class='sub-menu'><h2>". $parent_title ."</h2>". $menu . "</div>";
}
?>
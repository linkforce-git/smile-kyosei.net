<?php
    $search = ( !empty( get_search_query() ) ) ? get_search_query() : '' ;
?>

<form id="searchForm" action="<?php echo esc_url(home_url()); ?>" method="get">
    <input id="searchBox" name="s" type="text" value="<?= $search; ?>" placeholder="キーワードを入力"/>
    <button type="submit" id="searchBtnArea"><svg><use xlink:href='#icon_search'></use></svg></button>
</form>

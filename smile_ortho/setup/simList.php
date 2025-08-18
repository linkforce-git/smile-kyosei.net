<?php
    if (!isset($setup_ref_id)) return;

    $setup_fileList = array_map('basename', glob(__DIR__.'/../../assets/img/orthodontics/setup/'.$setup_ref_id.'/[0-9]*.jpg'));
    usort($setup_fileList, 'strnatcmp');
?>
<ol class="setupList">
<?php foreach ($setup_fileList as $setup_file): ?>
    <li class="item">
        <picture>
            <source type="image/webp" srcset="/assets/img/orthodontics/setup/<?= $setup_ref_id ?>/<?= $setup_file ?>.webp">
            <img src="/assets/img/orthodontics/setup/<?= $setup_ref_id ?>/<?= $setup_file ?>" alt="">
        </picture>
    </li>
<?php endforeach; ?>
</ol>

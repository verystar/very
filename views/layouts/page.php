<?php
$page_url = url()->make(request()->uri())->remove(['page'])->url();
?>
<?php if (is_object($pager)) { ?>
    <ul class="pagination pagination-sm nomargin">
        <li><a href="javascript:void(0)">总数:<?php echo $pager->getTotalCount() ?></a></li>
        <li<?php echo $pager->getCurrPage() <= 1 ? ' class=disabled' : ''; ?>>
            <a title="第一页" href="<?php echo $pager->getCurrPage() <= 1 ? 'javascript:void(0)' : $page_url . '1' ?>">&lt;&lt;</a></li>
        <?php if ($pager->hasPrePage()) { ?>
            <li><a href="<?php echo $page_url . ($pager->getCurrPage() - 1); ?>" title="上一页">&lt;</a></li>
        <?php } else { ?>
            <li class="disabled"><a href="javascript:void(0)">&lt;</a></li>
        <?php } ?>
        <?php $near_pages = $pager->getNearerPages();
        foreach ($near_pages as $near_page) { ?>
            <?php if ($pager->getCurrPage() == $near_page) { ?>
                <li class="active"><a href="javascript:void(0)"><?php echo $near_page ?></a></li>
            <?php } else { ?>
                <li>
                    <a href="<?php echo $page_url . $near_page; ?>"><?php echo $near_page; ?></a>
                </li>
            <?php } ?>
        <?php } ?>
        <?php if ($pager->hasNextPage()) { ?>
            <li>
                <a title="下一页" href="<?php echo $page_url . ($pager->getCurrPage() + 1); ?>">&gt;</a>
            </li>
        <?php } else { ?>
            <li class="disabled"><a href="javascript:void(0)">&gt;</a></li>
        <?php } ?>
        <li<?php echo $pager->getCurrPage() >= $pager->getTotalPage() ? ' class="disabled"' : '' ?>>
            <a title="最后一页" href="<?php echo $pager->getCurrPage() >= $pager->getTotalPage() ? 'javascript:void(0)' : $page_url . $pager->getTotalPage() ?>">
                &gt;&gt;</a>
        </li>
    </ul>
<?php } ?>
<nav class='' aria-label="Page navigation">
    <ul class=" m-0 p-2 justify-content-center pagination pg-blue pagination-lg">
        <?php if ($page > 0):?>
        <li class='page-item'>
            <a class='page-link' href='<?php echo "/valuar/product-list/" . ($page - 1)?>'>
                <i class="fas fa-angle-left"></i>
            </a>
        </li>
        <?php endif;?>

        <li class="page-item">
            <a class="page-link" ><?=$page?></a>
        </li>
        
        <?php if($page < $pages): ?>
        <li class='page-item'>
            <a class='page-link' href='<?php echo "/valuar/product-list/" . ($page + 1)?>'>
                <i class="fas fa-angle-right"></i>
            </a>
        </li>
        <?php endif;?>
    </ul>
</nav>
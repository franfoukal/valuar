<nav class='' aria-label="Page navigation">
            <ul class="justify-content-center pagination pg-blue pagination-lg">
                <li class='page-item'>
                    <a class='page-link'href="">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </li>

                <?php for($i = 0 ; $i <= $pages ; $i++): ?>
                    
                <li class="page-item">
                    <a class="page-link" href="<?='/valuar/product-list/' .$i?>"><?=$i?></a>
                </li>
                <?php endfor;?>
                
                <li class='page-item'>
                    <a class='page-link' href="">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
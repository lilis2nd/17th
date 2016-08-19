<nav>
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="snapshots.php" class="breadcrumb" style="margin-left: 2em;">Snapshots</a>
            <a href="#" class="breadcrumb"><?php echo $title; ?>
                <small><?php
                    if ($date_s == $date_e) {
                    echo $date_s;
                    } elseif ($date_s < $date_e) {
                        echo $date_s."&mdash;".$date_e;
                    }
                    ?></small>
            </a>
        </div>
    </div>
</nav>
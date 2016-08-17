<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
// Talks 메뉴 page 설정
$menu_talk_files = glob('talks/*.php');
arsort($menu_talk_files);
$menu_talk_count = count($menu_talk_files);
$menu_talk_recent_full = $menu_talk_files[$menu_talk_count-1];
$menu_talk_recent_exp = explode('/',$menu_talk_recent_full);
$menu_talk_recent_name = basename($menu_talk_recent_exp[1],'.php');
?>
<header>
    <div class="">
        <ul id="dropPhotos" class="dropdown-content">
            <li><a href="#!">Snapshots</a></li>
            <li><a href="#!">Projects</a></li>
        </ul>
        <nav class="blue-grey darken-2">
            <div class="nav-wrapper">
                <a href="index.real.php" class="brand-logo">Skyremix Studio</a> <a href="index.real.php" data-activates="mobile"
                    class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class="active"><a href="index.real.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="talks.php?page=<?php echo $menu_talk_recent_name; ?>">Talks</a></li>
                    <li><a class="dropdown-button" href="#" data-activates="dropPhotos">Photos<i
                                class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Etc.</a></li>
                    <li><a href="http://lilis.tistory.com/">Blog <span class="new badge"
                                data-badge-caption="old"></span></a></li>
                </ul>
                <ul class="side-nav" id="mobile">
                    <li class="active"><a href="index.real.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="talks.php?page=<?php echo $menu_talk_recent_name; ?>">Talks</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Snapshots</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Videos</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Etc.</a></li>
                    <li><a href="http://lilis.tistory.com/">Blog <span class="new badge"
                                data-badge-caption="old"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

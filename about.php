<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
?>
    <main class="container">
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <img src="img/profile.jpg" class="responsive-img" />
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l8">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <span class="card-title">LILIS</span>
                        <dl>
                            <dt>Birth</dt>
                            <dd>1982. 4. 12 (<?php age(); ?>)</dd>
                            <dt>Lives</dt>
                            <dd>Seoul, Republic of Korea (<a class="modal-trigger" href="#modal_map">Map</a>)</dd>
                            <dt>Job</dt>
                            <dd>Technical Writer / Project Manager / Quality Manager</dd>
                            <dt>Hobby</dt>
                            <dd>Reading / Watching / Eating / Drinking / Playing / Enjoying / Shooting</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal-->
    <div id="modal_map" class="modal bottom-sheet modal-fixed-footer">
        <div class="modal-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d25319.244108242652!2d127.0099057!3d37.5101466!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sko!2skr!4v1471082142070" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">닫기</a>
        </div>
    </div>

<?php include('inc.footer.php'); ?>
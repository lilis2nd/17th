<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
login('talks_create');
?>
    <script>
        tinymce.init({
            selector: 'textarea#input',
            theme: 'modern',
            height: '200px',
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor codesample'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons code codesample',
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>
    <main class="container">
        <div class="row">
            <form class="s12" method="POST" action="talks_done.php">
                <div class="row">
                    <div class="input-field col s3">
                        <select name="Dir" id="Dir">
                            <option value="talks">Talks</option>
                            <option value="etc">Etc</option>
                        </select>
                        <label>디렉토리 선택</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="title" name="title" type="text" class="validate"/>
                        <label for="title">Title</label>
                    </div>
                    <div class="input-field col s3">
                        <input class="datepicker" type="date" id="date" name="date"/>
                        <label for="date">Date</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="input" name="input" class="materialize-textarea"></textarea>
                    </div>
                </div>
                <div class="row center-align">
                    <button type="submit" class="btn waves-effect waves-light" name="action">Submit<i class="material-icons right">send</i></button>
                </div>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'yyyy-mm-dd',
            labelMonthNext: '다음 달',
            labelMonthPrev: '이전 달',
            labelMonthSelect: '월 선택',
            labelYearSelect: '연 선택',
            monthsFull: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            monthsShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            weekdaysFull: ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'],
            weekdaysShort: ['일', '월', '화', '수', '목', '금', '토'],
            weekdaysLetter: ['일', '월', '화', '수', '목', '금', '토'],
            today: '오늘',
            clear: '초기화',
            close: '닫기'
        });
    </script>

<?php include('inc.footer.php'); ?>
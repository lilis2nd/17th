<?php
/**
 * Created by PhpStorm.
 * User: lilis
 */
include('inc.header.php');
login('media_upload');
?>
    <main class="container">
        <div class="row">
            <form class="s12" method="POST" action="media_upload_done.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s2">
                        <select name="Dir" id="Dir">
                            <option value="snapshots">Snapshots</option>
                        </select>
                    </div>
                    <div class="input-field col s2">
                        <input class="datepicker" type="date" id="date_s" name="date_s" />
                        <label for="date_s">시작일</label>
                    </div>
                    <div class="input-field col s2">
                        <input class="datepicker" type="date" id="date_e" name="date_e" />
                        <label for="date_e">종료일</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" id="title" name="title" class="validate"/>
                        <label for="title">사진 제목</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>파일</span>
                                <input type="file" name="upload[]" id="upload" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="하나 이상의 파일을 선택하세요.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button type="submit" class="btn waves-effect waves-light" name="action">Submit<i class="material-icons right">send</i></button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 100, // Creates a dropdown of 15 years to control year
            format: 'yyyy/mm/dd',
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
            close: '닫기',
        });
    </script>

<?php include('inc.footer.php'); ?>
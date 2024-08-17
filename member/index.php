<?php

$g_title = '사과 장터';
$js_array = ['js/home.js'];

$menu_code = 'home';

include 'inc/common.php';
include 'inc/dbconfig.php';

include 'inc/boardmanage.php';
$boardm = new BoardManage($db);
$boardArr = $boardm->list();

include 'inc_header.php';
?>

<main class="border rounded-2 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
  <img src="images/소매가.svg" style="max-width: 67%; height: auto;" alt="사과 소매 가격 그래프">
  
  <div class="table-responsive" style="flex: 1;">
    <table class="table table-bordered table-striped" style="width: 100%; font-size: 1.2rem; text-align: center;">
      <thead>
        <tr>
          <th style="padding: 12px;">날짜</th>
          <th style="padding: 12px;">가격</th>
          <th style="padding: 12px;">등락률</th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <td style="padding: 12px;">24.08.08</td>
          <td style="padding: 12px;">28,869</td>
          <td style="padding: 12px;">-1.39</td>
        </tr>
      <tr>
          <td style="padding: 12px;">24.08.08</td>
          <td style="padding: 12px;">29,276</td>
          <td style="padding: 12px;">-2.49</td>
        </tr>
      <tr>
          <td style="padding: 12px;">24.08.07</td>
          <td style="padding: 12px;">30,174</td>
          <td style="padding: 12px;">-0.5</td>
        </tr>
      <tr>
          <td style="padding: 12px;">24.08.06</td>
          <td style="padding: 12px;">30,024</td>
          <td style="padding: 12px;">-1.18</td>
        </tr>
      <tr>
          <td style="padding: 12px;">24.08.05</td>
          <td style="padding: 12px;">30,174</td>
          <td style="padding: 12px;">-1.18</td>
        </tr>
        <tr>
          <td style="padding: 12px;">24.08.02</td>
          <td style="padding: 12px;">30,535</td>
          <td style="padding: 12px;">1.33%</td>
        </tr>
        <tr>
          <td style="padding: 12px;">24.08.01</td>
          <td style="padding: 12px;">30,133</td>
          <td style="padding: 12px;">0.82%</td>
        </tr>
        <tr>
          <td style="padding: 12px;">24.07.31</td>
          <td style="padding: 12px;">29,888</td>
          <td style="padding: 12px;">-0.26%</td>
        </tr>
      </tbody>
    </table>
  </div>
</main>

<?php
include 'inc_footer.php';
?>

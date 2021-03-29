<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{border-collapse:collapse}
th,td{padding:10px}
.popup{display:none;position:absolute;background:#ccc;border-radius:6px;padding:8px;}
  </style>
</head>
<body>
<table border="1">
<tr>
  <th>Name</th>
  <th>Age</th>
</tr>
<tr>
  <td>Aryan</td>
  <td>26</td>
</tr>
<tr>
  <td>Dia</td>
  <td>22</td>
</tr>
</table>
<script>
  $(document).ready(function () {
    $(document).on('mouseover', 'th,td', function () {
        var offset = $(this).offset();
        var html = '<div class="popup">' + $(this).text() + '</div>';
        $('.popup').remove();
        $(html).insertBefore('table');
        $('.popup').css({ 'top': offset.top, 'left': offset.left }).fadeIn();
    });
});
</script>
</body>
</html>
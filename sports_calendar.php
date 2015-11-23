<!doctype html>
<html>
<head>
  <style>
    .ui-datepicker td.ui-state-disabled>span{background: #c30;}
    .ui-datepicker td.ui-state-disabled{opacity:100;}
  </style>

    <link href="sports_calendar.css" rel="stylesheet" type="text/css" />
    <link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
    <link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
    <link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
    <title>sports-calendar</title>
  <script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
</head>
<body>
<div id="Holder">
  <div id="Datepicker1"></div>
</div>
<script type="text/javascript">
  var unavailableDates = ["22-11-2015", "23-11-2015"];
  function unavailable(date) {
    dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
    if ($.inArray(dmy, unavailableDates) == -1) {
      return [true, ""];
    } else {
      return [false, "", "Unavailable"];
    }
  }
  $(function() {
    $( "#Datepicker1" ).datepicker({
      numberOfMonths:3,
      beforeShowDay:unavailable
    }); 
  });
  </script>
  </body>
</html>
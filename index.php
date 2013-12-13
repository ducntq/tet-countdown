<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đếm ngược đến Tết</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section id="overlay"></section>
<section id="countdown">
    <section id="days">
        <section class="value">*</section>
        <section class="label">Ngày</section>
    </section>
    <section id="hours">
        <section class="value">*</section>
        <section class="label">Giờ</section>
    </section>
    <section id="minutes">
        <section class="value">*</section>
        <section class="label">Phút</section>
    </section>
    <section id="seconds">
        <section class="value">*</section>
        <section class="label">Giây</section>
    </section>
</section>
<!-- Begin: Scripts declaration -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
var secondsTillTet = <?php echo strtotime('31 January 2014')?>;
</script>
<script type="text/javascript" src="js/script.js"></script>
<!-- End: Scripts declaration -->
</body>
</html>
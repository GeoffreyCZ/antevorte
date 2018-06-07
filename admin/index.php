<html>
<head>
    <title>Admin Antevorte</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
</head>
<body>

<?php
$stats=simplexml_load_file("stats.xml") or die("Error: Cannot create object");

if (!empty($_POST)) {
    $stats->employees = $_POST['employees'];
    $stats->managers = $_POST['managers'];
    $stats->kilometers = $_POST['kilometers'];
    $stats->money = $_POST['money'];
	$stats->financePercent = $_POST['financePercent'];
	$stats->adviseryPercent = $_POST['adviseryPercent'];
	$stats->peoplePercent = $_POST['peoplePercent'];
    $stats->asXML('stats.xml');
    echo "<script type='text/javascript'>alert('Uloženo')</script>";
}

?>
<form class="form-horizontal" action="index.php" method="post">
    <fieldset>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="employees">Počet proškolených zaměstnanců</label>
            <div class="col-md-2">
                <input id="employees" name="employees" type="text" placeholder="" value="<?php echo $stats->employees; ?>" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="managers">Počet koučovaných manažerů</label>
            <div class="col-md-2">
                <input id="managers" name="managers" type="text" placeholder="" value="<?php echo $stats->managers; ?>" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Appended Input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="kilometers">Počet najetých kilometrů</label>
            <div class="col-md-2">
                <div class="input-group">
                    <input id="kilometers" name="kilometers" class="form-control" placeholder="" value="<?php echo $stats->kilometers; ?>" type="text" required="">
                    <span class="input-group-addon">km</span>
                </div>

            </div>
        </div>
        <!-- Appended Input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="money">Množství získanách peněz</label>
            <div class="col-md-2">
                <div class="input-group">
                    <input id="money" name="money" class="form-control" placeholder="" value="<?php echo $stats->money; ?>" type="text" required="">
                    <span class="input-group-addon">Kč</span>
                </div>

            </div>
        </div>

		<!-- Appended Input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="financePercent">Věnujeme se financím</label>
			<div class="col-md-2">
				<div class="input-group">
					<input id="financePercent" name="financePercent" class="form-control" placeholder="" value="<?php echo $stats->financePercent; ?>" type="text" required="">
					<span class="input-group-addon">%</span>
				</div>

			</div>
		</div>

		<!-- Appended Input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="adviseryPercent">Věnujeme se procesnímu a projektovému poradentství</label>
			<div class="col-md-2">
				<div class="input-group">
					<input id="adviseryPercent" name="adviseryPercent" class="form-control" placeholder="" value="<?php echo $stats->adviseryPercent; ?>" type="text" required="">
					<span class="input-group-addon">%</span>
				</div>

			</div>
		</div>

		<!-- Appended Input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="peoplePercent">Věnujeme se udržitelnému rozvoji lidí</label>
			<div class="col-md-2">
				<div class="input-group">
					<input id="peoplePercent" name="peoplePercent" class="form-control" placeholder="" value="<?php echo $stats->peoplePercent; ?>" type="text" required="">
					<span class="input-group-addon">%</span>
				</div>

			</div>
		</div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Uložit</button>
            </div>
        </div>

    </fieldset>
</form>
<?php
if (!empty($_POST)) {

}
?>

</body>
</html>

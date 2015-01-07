<?= $this->extendView(); ?>
<style>
.demo-title{
	display: block;
	font-family: fantasy;
	font-size: 30px;
	text-align: center;
	padding: 10px;
	
	background: #F9CE89 ;
	color: #000;
	margin: 20px 0;
}

.layout-cell{
		background-color: rgba(187, 187, 187, 0.5);
		text-align: center;
		box-shadow: 0 0 5px -2px #000 inset;
}
.com-layout-columns{
	background:  rgba(205, 251, 239, 0.63);
}
</style>

<?php
$this->assign('desc','دموی فریم ورک اینترفیس ریتا');
$this->assign('contentPadding','10%');
$this->Html->addCrumb('یو ای');
$this->Html->addCrumb('فهرست');

?>

<?= $this->partialRender('grid'); ?>

<?= $this->partialRender('btn'); ?>



<?= $this->partialRender('toolbar'); ?>


<?= $this->partialRender('panels'); ?>

<?= $this->partialRender('tabs'); ?>
<?= $this->partialRender('tableGrid'); ?>
<?= $this->partialRender('layoutGrid'); ?>


<?= $this->partialRender('type'); ?>


<?= $this->partialRender('forms'); ?>

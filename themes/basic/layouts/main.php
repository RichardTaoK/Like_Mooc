<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html>
<head>
<!--    --><?php //$this->registerCsrfMetaTags() ?>
<!--    添加<mate>-->
    <?php $this->head() ?>
<!--    添加.js/.jquery-->
</head>
<body>
<?php $this->beginBody() ?>
<!--显示路径-->
<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<!--添加脚本-->
<?php $this->endPage() ?>

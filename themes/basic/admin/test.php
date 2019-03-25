<?php

?>
<form action="/index.php?r=admin/test" method="post">
    <input type="hidden" name="_csrf">
    <div>
        <?= $o->getAttributeLabel('name') ?>
        <input type="text" name="name">
    </div>
    <div>
        <?= $o->getAttributeLabel('password1') ?>
        <input type="password" name="password1">
    </div>
    <div>
        <?= $o->getAttributeLabel('password2') ?>
        <input type="password" name="password2">
    </div>
    <div>
        <?= $o->getAttributeLabel('address') ?>
        <input type="text" name="address">
    </div>

    <div>
        <?= $o->getAttributeLabel('email') ?>
        <input type="text" name="email">
    </div>
    <div>
        <?= $o->getAttributeLabel('phone') ?>
        <input type="text" name="phone">
    </div>
    <div>
        <?= $o->getAttributeLabel('pic') ?>
        <input type="file" name="pic">
    </div>
    <div>
        <?= $o->getAttributeLabel('file') ?>
        <input type="file" name="file">
    </div>
    <div class="row" name="verifyCode">
        <div class="col-lg-3">{image}</div>
        <input type="text" class="col-lg-6" name="verifyCode">
    </div>

    <div>
        <input type="submit" value="提交">
    </div>
</form>

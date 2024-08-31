<?php
/** @var yii\web\View $this */

$this->title = 'Dashboard';
?>

<div id="root"></div>

<?php
// Register the CSS file generated by Vite
$this->registerCssFile('@web/js/assets/index-DnaK9d0Z.css');

// Register the main JavaScript file generated by Vite
$this->registerJsFile('@web/js/assets/index-CExuJH3d.js', ['type' => 'module']);
?>
<div class="dashboard-background">
    <div class="contailner">
        <div class="container">
            <h1><?= $this->title ?></h1>
            <p>Welcome to <?php echo Yii::$app->user->isGuest?"your dashboard!":Yii::$app->user->identity->user_name ?> </p>
            <!-- Dashboard content goes here -->
        </div>

    </div>
</div>

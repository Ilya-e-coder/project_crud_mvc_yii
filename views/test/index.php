<?php

/**
 * @var $testData Test[]
 */

use app\models\Test;

?>

<h1>This is Test page!</h1>

<?php foreach ($testData as $test): ?>
    <h2> <?php echo $test->name ?></h2>
<?php endforeach; ?>

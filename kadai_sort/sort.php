<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
            if ($order === true) {
                echo '昇順にソートします。<br>';
                sort ($array);
                foreach ($array as $index) {
                    echo $index . '<br>';                    
                }
            } elseif ($order === false) {
                echo '降順にソートします。<br>';
                rsort ($array);
                foreach ($array as $index) {
                    echo $index . '<br>';
                }
            }
        };

        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step2. クラスを作成する（Food）
        class Food {
            private $name;
            private $price;

            // コンストラクタ
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッド
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // Step2. クラスを作成する（Animal）
        class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // Step3. インスタンスを作成する
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // インスタンスをprint_rで出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // Step4. メソッドへアクセスする
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>
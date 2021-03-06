<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car 
{
    public $name;
    public $number;
    public $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

        public function infomation()
    {
        echo '車の種類:' . $this->name . '、車体番号:' . $this->number . '、カラー:' . $this->color . 'です。';
    }
}


// 以下にCarクラスを継承したTaxiクラスを記述して下さい
class Taxi extends Car
{
    public $passenger;

    public function pickUp($picup)
    {
        return $this->passenger = $picup;
    }

    public function lower($lower)
    {
        if ($this->passenger - $lower > 0) {
            echo $lower . '人降車しました';
        } else {
            echo '降車人数に誤りがあります';
        }
        return $this->passenger = $this->passenger - $lower;
    }
    
    public function infomation()
    {
        echo '車の種類:' . $this->name . '、車体番号:' . $this->number . '、カラー:' . $this->color . '乗車人数は' . 
            $this->passenger . 'です。';
    }

}

// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);
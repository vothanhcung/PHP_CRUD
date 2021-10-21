<?php 

//  var
$key = 5;

// func
$ham = function($tham_so){
    echo $tham_so;
 };
 $ham(1);

function ham_co_tham_so($tham_so){
    echo $tham_so;
}
ham_co_tham_so(12);

// vong lap for
for($i = 1; $i < 11; $i++){
    echo "demo ".$i;
}


 // vong lap foreach
$mang = array('phần tử 1', 'phần tử 2', 3); 
foreach($mang as $value){
   echo $value;
}


// static: bien tinh, goi ham thong qua ten lop
class demo_static {
    public static $mes = 'Đây là demo static';
    public static function mes(){
        echo self::$mes;
    }
}
demo_static::mes();


// self: su dung cho lop hien tai
class demo_self {
    public static $mes = 'Lời nhắn';
    public function mes(){
        echo self::$mes;
    }
}
$b6 = new demo_self();
$b6->mes();



// Trait: da ke thua
trait Trait_1 {
    function say_1(){
        echo 'Hi One';
    }
    function say_2(){
        echo 'Hi Two';
    }
}
trait Trait_2 {
    function say_1(){
        echo 'Hi Protected';
    }
    function say_2(){
        echo 'Hi Private';
    }
}

// insteadof: thay vi
class Trait_Example2 {
    use Trait_1, Trait_2 {
        Trait_1::say_1 insteadof Trait_2;
        Trait_2::say_2 insteadof Trait_1;
    }
}

// class
class Table {
    public $mau_sac;
    public $so_chan_ban;
    function __construct($mau_sac, $so_chan_ban){
        $this->mau_sac = $mau_sac;
        $this->so_chan_ban = $so_chan_ban;
    }
    function intro(){
        echo 'Bàn màu '.$this->mau_sac.' có '.$this->so_chan_ban.' chân bàn';
    }
    function display(){
        echo 'Hello World';
    }

}
class Table_Child extends Table{
    public $chat_lieu;
    function __construct($mau_sac, $so_chan_ban, $chat_lieu){
        $this->mau_sac = $mau_sac;
        $this->so_chan_ban = $so_chan_ban;
        $this->chat_lieu = $chat_lieu;
    } 
    function intro(){
        echo "Đây là chiếc bàn có màu {$this->mau_sac},có {$this->so_chan_ban} chân, và làm bằng {$this->chat_lieu}";
        parent::intro();
        parent::display();
    }
}
$child = new Table_Child('nâu', 4, 'gỗ');
$child->display();
$child->intro();


// abstract: chi khai bao phuong thuc
abstract class Abs_Table{
    public $so_chan;
    public $mau_sac;
    public function intro(){
        echo 'haha';
    }
}

// interface: ko duoc co thuoc tinh
interface In_Table{
    public function xep_chong();
    public function don_ban();
}


?>
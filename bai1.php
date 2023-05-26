//cau1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
<?php
$number=10;
if($number % 2 == 0){
    echo "Số".$number."là số chẵn";
}
else{
    echo "Số".$number."là số lẻ";
}
?>
//cau2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
<!DOCTYPE html>
<html>
<head>
<title>Welcom to learn PHP</title>
<meta charset="utf-8">
</head>
<body>
<h1>Tính Tổng Số Nguyên</h1>
<?php
$n = rand(1,100);
echo "$n";

$sum = 0;

echo "</br>Tổng các số từ 1 đến $n là ";

for($i=1; $i < $n; $i++) {
$sum += $i;
}
echo "$sum";
?>
</body>
</html>

//cau3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
<table border="1px">
<tr>
<?php
for($i = 1; $i <= 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>

//cau4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
<?php
$word = "fox";
$mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
?>

//cau5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
<html>
   
   <head>
      <title>Tìm giá trị lớn nhất nhỏ nhất trong PHP</title>
   </head>
   <body>
   
       <?php
        $mang1 = array(360,310,310,330,313,375,456,111,256);   
		$mang2 = array(350,340,356,330,321);   
		$mang3 = array(630,340,570,635,434,255,298);   
		$gia_tri_lon_nhat = max(max($mang1),max($mang2),max($mang3));   
		$gia_tri_nho_nhat = min(min($mang1),min($mang2),min($mang3));   
		echo "Giá trị lớn nhất: ".$gia_tri_lon_nhat."<br>";  
		echo "Giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>";
       ?>
       
   </body>
</html>

//cau6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
  
foreach( $numbers as $n) {
    echo "$n <br>";
}
?>

//cau7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
<?php
$a = 5;
$b = 0;
$c = 10;
function tinhGiaithua($n) {
    if ($n > 0) {
        return $n * tinhGiaithua ( $n - 1 );
    } else {
        return 1;
    }
}
 
// tính giai thừa
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
?>

//cau8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
<?php
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
show_prime(25, 60);

//cau9.Viết chương trình PHP để tính tổng của các số trong một mảng.
$array1 = array(1, 2, 4.5, 8, 15);
$array2 = array("a" => 1.5, "b" => 2.5, "c" => 4.6, "d" => 10.4);
 
echo array_sum($array1); 
echo "<br>";
echo array_sum($array2); 


//cau10.Viết chương trình để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}

//cau11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
// Hàm kiểm tra số Armstrong
function isArmstrong($number) {
    $sum = 0;
    $numDigits = strlen((string)$number);
    $temp = $number;
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    return $sum == $number;
}

// Số cần kiểm tra
$number = 153;

// Kiểm tra xem số đó có phải số Armstrong hay không
if (isArmstrong($number)) {
    echo $number . " là số Armstrong";
} else {
    echo $number . " không phải là số Armstrong";
}

//cau12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
        $mang_ban_dau = array( '1','2','3','4','5' );  
		echo 'Mảng ban đầu: '."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
		$phan_tu_can_chen = '$';  
		array_splice( $mang_ban_dau, 3, 0, $phan_tu_can_chen );   
		echo "Sau khi chèn phần tử '$' thì mảng sẽ như sau: "."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";

//cau13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
function arrayUnique($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    print_r (array_unique($arr));
}
echo "cau13: ";
echo arrayUnique("1", "2", "2", "4");
echo "<br>";

//cau14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
// khởi tạo mảng
$my_array = array('apple', 'banana', 'orange', 'grape');

// tìm vị trí của 'orange' trong mảng
$position = array_search('orange', $my_array);

// kiểm tra nếu phần tử có tồn tại trong mảng
if ($position !== false) {
    echo "'orange' nằm ở vị trí $position trong mảng.";
} else {
    echo "'orange' không tồn tại trong mảng.";
}


//cau15.Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    return strrev($string);
}
$string = "Hello, World!";
$result = reverseString($string);
echo "cau15 ";
echo $result;
echo "<br>";
       
//cau16.Viết chương trình PHP để tính số lượng phần tử trong một mảng
function countArr($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    return count($arr);
}
echo "cau16: ";
echo countArr("1", "3", "15", "20");
echo "<br>";

//cau17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo kiem_tra_chuoi_palindrome('madam')."<br>";


//cau18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
function countElementOccurrences($array, $element) {
    return array_count_values($array)[$element] ?? 0;
}
$array = [1,2,3,5,7,2,3];
$element = 2;
$result = countElementOccurrences($array, $element);
echo "cau 18 ";
echo $result;
echo "<br>";


//cau19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
  
foreach( $numbers as $n) {
    echo "$n <br>";
}

//cau20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToArray($array, $element, $position) {
    if ($position === 'start') {
        array_unshift($array, $element);
    } elseif ($position === 'end') {
        $array[] = $element;
    }
    return $array;
}
$array = [1,2,3,4,5];
$element = 6;
$position = 'end';
$result = addElementToArray($array, $element, $position);
echo "cau20 ";
print_r($result);
echo "<br>";

//cau21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findArrNum2($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($i == 1)
        return $arr[1];
    }
}
echo "cau21: ";
echo findArrNum2("1", "2", "3", "4");
echo "<br>";

//cau22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
// hàm tìm GCD
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

// hàm tìm LCM
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

// khai báo hai số nguyên dương
$num1 = 12;
$num2 = 18;

// tìm GCD và LCM của hai số
$gcd = gcd($num1, $num2);
$lcm = lcm($num1, $num2);

// in kết quả ra màn hình
echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd";
echo "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm";


//cau23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
// Hàm kiểm tra số hoàn hảo
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}

// Số cần kiểm tra
$number = 6;
// Kiểm tra xem số đó có phải số hoàn hảo hay không
if (isPerfectNumber($number)) {
    echo $number . " là số hoàn hảo";
} else {
    echo $number . " không phải là số hoàn hảo";
}

//cau24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function maxOddNum($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($arr[$i] % 2 != 0)
        return $arr[$i];
    }
}
echo "cau24: ";
echo maxOddNum("5", "6", "7", "8");
echo "<br>";

//cau25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không
// hàm kiểm tra số nguyên tố
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// kiểm tra số 7
if (is_prime(7)) {
    echo "7 là số nguyên tố.";
} else {
    echo "7 không phải là số nguyên tố.";
}

//cau26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
function findLargestPositiveNumber($array) {
    $positiveNumbers = array_filter($array, function ($value) {
        return $value > 0;
    });
    return max($positiveNumbers);
}
$array = [-3, -2, 1, 7, 4];
$result = findLargestPositiveNumber($array);
echo "cau26 ";
echo $result;
echo "<br>";

//cau27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng
function findLargestNegativeNumber($array) {
    $negativeNumbers = array_filter($array, function ($value) {
        return $value < 0;
    });
    return max($negativeNumbers);
}
$array = [-5, -3, 1, -7, 4];
$result = findLargestNegativeNumber($array);
echo "cau27 ";
echo $result;
echo "<br>";

//cau28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
// Số n cần tính tổng các số lẻ
$n = 10;

// Khởi tạo giá trị tổng
$sum = 0;

// Duyệt từ 1 đến n để tính tổng các số lẻ
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $sum += $i;
    }
}

// In ra tổng các số lẻ từ 1 đến n
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;

//cau29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
function perfSqureNums($word){
    $i = 0;
  while($i*$i <= $word){
        if($i*$i == $word){
            return true;
        }
        $i++;
    }
    return false;
}
function showPSN($a, $b){
    echo "Perfect square numbers are: ";
    for ($i = $a; $i <= $b; $i++){
        if(perfSqureNums($i))
            echo $i, "; ";
    } 
}
echo "cau29: ";
echo showPSN(1, 20);
echo "<br>";

//cau30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
// Hàm kiểm tra xem chuỗi $subString có phải là chuỗi con của chuỗi $string hay không
function isSubstring($string, $subString) {
    $stringLength = strlen($string);
    $subStringLength = strlen($subString);
    for ($i = 0; $i <= $stringLength - $subStringLength; $i++) {
        if (substr($string, $i, $subStringLength) == $subString) {
            return true;
        }
    }
    return false;
}

// Chuỗi ban đầu
$string = "Hello, world!";

// Chuỗi cần kiểm tra
$subString = "wor";

// Kiểm tra xem chuỗi cần kiểm tra có phải là chuỗi con của chuỗi ban đầu hay không
if (isSubstring($string, $subString)) {
    echo "\"" . $subString . "\" là chuỗi con của \"" . $string . "\"";
} else {
    echo "\"" . $subString . "\" không phải là chuỗi con của \"" . $string . "\"";
}

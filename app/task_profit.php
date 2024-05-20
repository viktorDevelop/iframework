<?

function maxPro($prices, $k) {
    $n = count($prices);
    $maxProfit = 0;

    for ($i = 0; $i < $n; $i++) {
        // echo "<br> i= ".$i;
        for ($j = $i + 1; $j < min($i + $k + 1, $n); $j++) {
           echo $profit = $prices[$j] - $prices[$i].'<br>';
            if ($profit > $maxProfit) {
                $maxProfit = $profit;
            }
        }
    }

    return $maxProfit;
}


$prices = [7000, 8000, 5000, 3000, 6000, 4000,2000,12000,9000];
sort($prices,SORT_NUMERIC);

// var_dump($ar);
$k = 2;
echo '<br>'.maxPro($prices, $k);

//  алгоритм перебирает все возможные комбинации покупки и продажи 
// товара с учетом ограничения на разницу между днями.

<?php 
// №1 

$i = 0;
while($i <= 100) {
    if($i % 3 == 0) {
        echo $i;
    }
    $i++;
}

// №2

$i = 0;
do {
	if($i == 0) {
		echo "$i - ноль.<br>";
	} else if($i % 2 == 0) {
		echo "$i - четное число.<br>";
	} else {
		echo "$i - нечетное число.<br>";
	}
	$i++;
} while($i <= 10);

// №3

$regions = ['Краснодарский край' => ['Краснодар', 'Новороссийск', 'Анапа'],
		'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
		'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт']];
	foreach($regions as $region => $cities) {
		echo "$region:<br/>".implode(', ', $cities).".<br/>";
	}

// №4

function translit($str) {
    $ruEnLetters = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'yi',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '"',  'ы' => 'y',   'ъ' => '"',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'];
    return strtr(mb_strtolower($str), $ruEnLetters);	//Переход к нижнему регистру
}

echo translit("Текст");

// №5

function symbolReplacer($str) {
    return str_replace(" ", "_", $str);
}

echo symbolReplacer("Меняю знаки");

// №6

$menu = ['Главная' => ['Отзывы', 'Новости' => ['Новые','Старые'], 'Товары'],
		'Обзор' => ['Видео' => [1,2,3], 'Статьи'],
		'Форум' => ['Общие темы', 'Мои темы']
		];

	echo "<ul>";
foreach ($menu as $item => $subItem) {
        echo "<li>$item</li>";   
        echo "<ul>";
        foreach($subItem as $value ){
            if(is_array($value)){
				foreach($value as $val){
						echo "<li>$val</li>";
					}
				}
				else{
					echo "<li>$value</li>";
				}
            }
            echo "</ul>";
		}
echo "</ul>";	

// №7

for($i = 0; $i < 10; print $i++) {}

// № 9

function transliterAndReplacer($str) {
	return symbolReplacer(translit($str));
}

echo transliterAndReplacer("Текст для теста");
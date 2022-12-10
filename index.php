<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="UTF-8">
    <title>Таблицы PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <h2>Таблица истинности PHP</h2>
    <table>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $a=0 ?></td>
                <td><?php echo $b=0 ?></td>
                <td><?php echo (int)(!$a) ?></td>
                <td><?php echo (int)($a || $b) ?></td>
                <td><?php echo (int)($a && $b) ?></td>
                <td><?php echo (int)($a xor $b) ?></td>
            </tr>
            <tr>
                <td><?php echo $a=0 ?></td>
                <td><?php echo $b=1 ?></td>
                <td><?php echo (int)(!$a) ?></td>
                <td><?php echo (int)($a || $b) ?></td>
                <td><?php echo (int)($a && $b) ?></td>
                <td><?php echo (int)($a xor $b) ?></td>
            </tr>
            <tr>
                <td><?php echo $a=1 ?></td>
                <td><?php echo $b=0 ?></td>
                <td><?php echo (int)(!$a) ?></td>
                <td><?php echo (int)($a || $b) ?></td>
                <td><?php echo (int)($a && $b) ?></td>
                <td><?php echo (int)($a xor $b) ?></td>
            </tr>
            <tr>
                <td><?php echo $a=1 ?></td>
                <td><?php echo $b=1 ?></td>
                <td><?php echo (int)(!$a) ?></td>
                <td><?php echo (int)($a || $b) ?></td>
                <td><?php echo (int)($a && $b) ?></td>
                <td><?php echo (int)($a xor $b) ?></td>
            </tr>
        </tbody>
    </table>
    <h2>Гибкое сравнение в PHP</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>"null"</th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $str1 = true;
                $str2 = false;
                $str3 = 1;
                $str4 = 0;
                $str5 = -1;
                $str6 = "1";
                $str7 = null;
                $str8 = "php";
                $column1 = true;
                $column2 = false;
                $column3 = 1;
                $column4 = 0;
                $column5 = -1;
                $column6 = "1";
                $column7 = null;
                $column8 = "php";
            ?>
            <tr>
                <th>true</th>
                <td><?php echo (int)($str1 == $column1) ?></td>
                <td><?php echo (int)($str2 == $column1) ?></td>
                <td><?php echo (int)($str3 == $column1) ?></td>
                <td><?php echo (int)($str4 == $column1) ?></td>
                <td><?php echo (int)($str5 == $column1) ?></td>
                <td><?php echo (int)($str6 == $column1) ?></td>
                <td><?php echo (int)($str7 == $column1) ?></td>
                <td><?php echo (int)($str8 == $column1) ?></td>
            </tr>
            <tr>
                <th>false</th>
                <td><?php echo (int)($str1 == $column2) ?></td>
                <td><?php echo (int)($str2 == $column2) ?></td>
                <td><?php echo (int)($str3 == $column2) ?></td>
                <td><?php echo (int)($str4 == $column2) ?></td>
                <td><?php echo (int)($str5 == $column2) ?></td>
                <td><?php echo (int)($str6 == $column2) ?></td>
                <td><?php echo (int)($str7 == $column2) ?></td>
                <td><?php echo (int)($str8 == $column2) ?></td>
            </tr>
            <tr>
                <th>1</th>
                <td><?php echo (int)($str1 == $column3) ?></td>
                <td><?php echo (int)($str2 == $column3) ?></td>
                <td><?php echo (int)($str3 == $column3) ?></td>
                <td><?php echo (int)($str4 == $column3) ?></td>
                <td><?php echo (int)($str5 == $column3) ?></td>
                <td><?php echo (int)($str6 == $column3) ?></td>
                <td><?php echo (int)($str7 == $column3) ?></td>
                <td><?php echo (int)($str8 == $column3) ?></td>
            </tr>
            <tr>
                <th>0</th>
                <td><?php echo (int)($str1 == $column4) ?></td>
                <td><?php echo (int)($str2 == $column4) ?></td>
                <td><?php echo (int)($str3 == $column4) ?></td>
                <td><?php echo (int)($str4 == $column4) ?></td>
                <td><?php echo (int)($str5 == $column4) ?></td>
                <td><?php echo (int)($str6 == $column4) ?></td>
                <td><?php echo (int)($str7 == $column4) ?></td>
                <td><?php echo (int)($str8 == $column4) ?></td>
            </tr>
            <tr>
                <th>-1</th>
                <td><?php echo (int)($str1 == $column5) ?></td>
                <td><?php echo (int)($str2 == $column5) ?></td>
                <td><?php echo (int)($str3 == $column5) ?></td>
                <td><?php echo (int)($str4 == $column5) ?></td>
                <td><?php echo (int)($str5 == $column5) ?></td>
                <td><?php echo (int)($str6 == $column5) ?></td>
                <td><?php echo (int)($str7 == $column5) ?></td>
                <td><?php echo (int)($str8 == $column5) ?></td>
            </tr>
            <tr>
                <th>"1"</th>
                <td><?php echo (int)($str1 == $column6) ?></td>
                <td><?php echo (int)($str2 == $column6) ?></td>
                <td><?php echo (int)($str3 == $column6) ?></td>
                <td><?php echo (int)($str4 == $column6) ?></td>
                <td><?php echo (int)($str5 == $column6) ?></td>
                <td><?php echo (int)($str6 == $column6) ?></td>
                <td><?php echo (int)($str7 == $column6) ?></td>
                <td><?php echo (int)($str8 == $column6) ?></td>
            </tr>
            <tr>
                <th>"null"</th>
                <td><?php echo (int)($str1 == $column7) ?></td>
                <td><?php echo (int)($str2 == $column7) ?></td>
                <td><?php echo (int)($str3 == $column7) ?></td>
                <td><?php echo (int)($str4 == $column7) ?></td>
                <td><?php echo (int)($str5 == $column7) ?></td>
                <td><?php echo (int)($str6 == $column7) ?></td>
                <td><?php echo (int)($str7 == $column7) ?></td>
                <td><?php echo (int)($str8 == $column7) ?></td>
            </tr>
            <tr>
                <th>"php"</th>
                <td><?php echo (int)($str1 == $column8) ?></td>
                <td><?php echo (int)($str2 == $column8) ?></td>
                <td><?php echo (int)($str3 == $column8) ?></td>
                <td><?php echo (int)($str4 == $column8) ?></td>
                <td><?php echo (int)($str5 == $column8) ?></td>
                <td><?php echo (int)($str6 == $column8) ?></td>
                <td><?php echo (int)($str7 == $column8) ?></td>
                <td><?php echo (int)($str8 == $column8) ?></td>
            </tr>
        </tbody>
    </table>
    <h2>Жёсткое сравнение в PHP</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>"null"</th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $str1 = true;
                $str2 = false;
                $str3 = 1;
                $str4 = 0;
                $str5 = -1;
                $str6 = "1";
                $str7 = null;
                $str8 = "php";
                $column1 = true;
                $column2 = false;
                $column3 = 1;
                $column4 = 0;
                $column5 = -1;
                $column6 = "1";
                $column7 = null;
                $column8 = "php";
            ?>
            <tr>
                <th>true</th>
                <td><?php echo (int)($str1 === $column1) ?></td>
                <td><?php echo (int)($str2 === $column1) ?></td>
                <td><?php echo (int)($str3 === $column1) ?></td>
                <td><?php echo (int)($str4 === $column1) ?></td>
                <td><?php echo (int)($str5 === $column1) ?></td>
                <td><?php echo (int)($str6 === $column1) ?></td>
                <td><?php echo (int)($str7 === $column1) ?></td>
                <td><?php echo (int)($str8 === $column1) ?></td>
            </tr>
            <tr>
                <th>false</th>
                <td><?php echo (int)($str1 === $column2) ?></td>
                <td><?php echo (int)($str2 === $column2) ?></td>
                <td><?php echo (int)($str3 === $column2) ?></td>
                <td><?php echo (int)($str4 === $column2) ?></td>
                <td><?php echo (int)($str5 === $column2) ?></td>
                <td><?php echo (int)($str6 === $column2) ?></td>
                <td><?php echo (int)($str7 === $column2) ?></td>
                <td><?php echo (int)($str8 === $column2) ?></td>
            </tr>
            <tr>
                <th>1</th>
                <td><?php echo (int)($str1 === $column3) ?></td>
                <td><?php echo (int)($str2 === $column3) ?></td>
                <td><?php echo (int)($str3 === $column3) ?></td>
                <td><?php echo (int)($str4 === $column3) ?></td>
                <td><?php echo (int)($str5 === $column3) ?></td>
                <td><?php echo (int)($str6 === $column3) ?></td>
                <td><?php echo (int)($str7 === $column3) ?></td>
                <td><?php echo (int)($str8 === $column3) ?></td>
            </tr>
            <tr>
                <th>0</th>
                <td><?php echo (int)($str1 === $column4) ?></td>
                <td><?php echo (int)($str2 === $column4) ?></td>
                <td><?php echo (int)($str3 === $column4) ?></td>
                <td><?php echo (int)($str4 === $column4) ?></td>
                <td><?php echo (int)($str5 === $column4) ?></td>
                <td><?php echo (int)($str6 === $column4) ?></td>
                <td><?php echo (int)($str7 === $column4) ?></td>
                <td><?php echo (int)($str8 === $column4) ?></td>
            </tr>
            <tr>
                <th>-1</th>
                <td><?php echo (int)($str1 === $column5) ?></td>
                <td><?php echo (int)($str2 === $column5) ?></td>
                <td><?php echo (int)($str3 === $column5) ?></td>
                <td><?php echo (int)($str4 === $column5) ?></td>
                <td><?php echo (int)($str5 === $column5) ?></td>
                <td><?php echo (int)($str6 === $column5) ?></td>
                <td><?php echo (int)($str7 === $column5) ?></td>
                <td><?php echo (int)($str8 === $column5) ?></td>
            </tr>
            <tr>
                <th>"1"</th>
                <td><?php echo (int)($str1 === $column6) ?></td>
                <td><?php echo (int)($str2 === $column6) ?></td>
                <td><?php echo (int)($str3 === $column6) ?></td>
                <td><?php echo (int)($str4 === $column6) ?></td>
                <td><?php echo (int)($str5 === $column6) ?></td>
                <td><?php echo (int)($str6 === $column6) ?></td>
                <td><?php echo (int)($str7 === $column6) ?></td>
                <td><?php echo (int)($str8 === $column6) ?></td>
            </tr>
            <tr>
                <th>"null"</th>
                <td><?php echo (int)($str1 === $column7) ?></td>
                <td><?php echo (int)($str2 === $column7) ?></td>
                <td><?php echo (int)($str3 === $column7) ?></td>
                <td><?php echo (int)($str4 === $column7) ?></td>
                <td><?php echo (int)($str5 === $column7) ?></td>
                <td><?php echo (int)($str6 === $column7) ?></td>
                <td><?php echo (int)($str7 === $column7) ?></td>
                <td><?php echo (int)($str8 === $column7) ?></td>
            </tr>
            <tr>
                <th>"php"</th>
                <td><?php echo (int)($str1 === $column8) ?></td>
                <td><?php echo (int)($str2 === $column8) ?></td>
                <td><?php echo (int)($str3 === $column8) ?></td>
                <td><?php echo (int)($str4 === $column8) ?></td>
                <td><?php echo (int)($str5 === $column8) ?></td>
                <td><?php echo (int)($str6 === $column8) ?></td>
                <td><?php echo (int)($str7 === $column8) ?></td>
                <td><?php echo (int)($str8 === $column8) ?></td>
            </tr>
        </tbody>
    </table>
    <div>
        <h2 id='i'>Выводы о сравнении в PHP</h2>
        <p>В PHP существуют гибкое и жёсткое сравнение. При гибком оператор сравнивает значения, после преобразования типов. При жёстком сравнении оператор сравнивает как значение, так и тип операндов</p>
    </div>
</body>
<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

function getPartsFromFullname($fullname) {
    $partsnamevalue = explode(' ', $fullname);
    $partsnamekey = ['surname','name','patronomyc'];
    $partsname = array_combine($partsnamekey, $partsnamevalue);
    return $partsname;
};

function getFullnameFromParts($surname, $name, $patronomyc) {
    return $surname . ' '. $name . ' ' . $patronomyc;
};

function getShortName($fullname) {
    $parts = getPartsFromFullname($fullname);
    $shortname = $parts['name'] . ' ' . mb_substr($parts['surname'], 0, 1) . '.';
    return $shortname;
};

function getGenderFromName($fullname) {
    $parts = getPartsFromFullname($fullname);
    $gendercounter = 0;

    if (mb_substr($parts['surname'], -1) === 'в') {
        $gendercounter++;
    } elseif (mb_substr($parts['surname'], -2) === 'ва') {
        $gendercounter--;
    };
    
    if (mb_substr($parts['name'], -1, 1) === 'й' || mb_substr($parts['name'], -1, 1) === 'н') {
        $gendercounter++;
    } elseif (mb_substr($parts['name'], -1, 1) === 'а') {
        $gendercounter--;
    };

    if (mb_substr($parts['patronomyc'], -2) === 'ич') {
        $gendercounter++;
    } elseif (mb_substr($parts['patronomyc'], -3) === 'вна') {
        $gendercounter--;
    };

    switch ($gendercounter <=> 0) {
        case -1:
            return 'Женский пол';
        case 0:
            return 'Неопределенный пол';
        case 1:
            return 'Мужской пол';
        
    };
};

function getGenderDescription($array) {
        for ($i=0; $i < count($array); $i++) {
            $person = $array[$i]['fullname'];
            $gendercomposition[$i] = getGenderFromName($person);
        };

        $female = array_filter($gendercomposition, function($gendercomposition) {
            return $gendercomposition == 'Женский пол';
        });
        $resultf = 100 * count($female) / count($gendercomposition);

        $undef = array_filter($gendercomposition, function($gendercomposition) {
            return $gendercomposition == 'Неопределенный пол';
        });
        $resultu = 100 * count($undef) / count($gendercomposition);

        $male = array_filter($gendercomposition, function($gendercomposition) {
            return $gendercomposition == 'Мужской пол';
        });
        $resultm = 100 * count($male) / count($gendercomposition);

        return 'Гендерный состав аудитории: <br>'
         . 'Мужчины - ' . round($resultm, 1). '%<br>' 
         . 'Женщины - ' . round($resultf, 1) . '%<br>'
         . 'Не удалось определить - ' . round($resultu, 1) . '%<br>';
};

function getPerfectPartner($surname, $name, $patronomyc, $array) {
    $personsurname = mb_convert_case($surname, MB_CASE_TITLE);
    $personname = mb_convert_case($name, MB_CASE_TITLE);
    $personpatronomyc = mb_convert_case($patronomyc, MB_CASE_TITLE);
    $person1 = getFullnameFromParts($personsurname, $personname, $personpatronomyc);
    $gender1 = getGenderFromName($person1);
    do {
        $randomi = random_int(0, count($array)-1);
        $person2 = $array[$randomi]['fullname'];
        $gender2 = getGenderFromName($person2);
    } while ($gender1 === $gender2 || $gender2 === 'Неопределенный пол');
    $partner1 = getShortName($person1);
    $partner2 = getShortName($person2);
    $randomcomp = random_int(50, 100);
    return $partner1 . ' + ' . $partner2 . ' = ♡ Идеально на ' . $randomcomp . '% ♡';
 };

echo 'Разъединение ФИО:' . '<br>';
print_r(getPartsFromFullname('Иванов Иван Иванович'));
echo '<hr>' . 'Объединение ФИО:' . '<br>';
print_r(getFullnameFromParts('Иванов', 'Иван', 'Иванович'));
echo '<hr>' . 'Сокращение ФИО:' . '<br>';
print_r(getShortName('Иванов Иван Иванович'));
echo '<hr>' . 'Определение пола по ФИО:' . '<br>';
print_r(getGenderFromName('Иванов Иван Иванович'));
echo '<hr>' . 'Определение гендерного состава:' . '<br>';
print_r(getGenderDescription($example_persons_array));
echo '<hr>' . 'Идеальный подбор пары:' . '<br>';
print_r(getPerfectPartner('Иванов', 'Иван', 'Иванович', $example_persons_array));
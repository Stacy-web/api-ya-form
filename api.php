<?php
add_action('wp_ajax_ya_api_generate_rtf', 'ajax_ya_api_generate_rtf');
add_action('wp_ajax_nopriv_ya_api_generate_rtf', 'ajax_ya_api_generate_rtf');

function ajax_ya_api_generate_rtf()
{
    $content = '{\rtf1\ansi\ansicpg1251\deff0\deflang1049\deflangfe1049\deftab708';
    $content .= '{\fonttbl';
    $content .= '{\f0 Times New Roman;}';
    $content .= '{\f1 Arial;}';
    $content .= '}';
    $content .= '\f1\fs30 Личные данные:\par\line';
    $content .= '\f0\fs24';

    $content .= "{\b ФИО специалиста: }" . addslashes($_POST["surname"]) . " ";
    $content .= addslashes($_POST["name"]) . " ";
    $content .= addslashes($_POST["patronymic"]) . "\par";
    $content .= "{\b Телефон:} " . addslashes($_POST["phone"]) . "\par";
    $content .= "{\b Электронная почта:} " . addslashes($_POST["email"]) . "\line\line\line";

    $content .= '\f1\fs30 Профессиональные сведения:\par\line';
    $content .= '\f0\fs24';

    $content .= "{\b Общий стаж работы в строительной отрасли: }" . addslashes($_POST["work_experience1"]) . "\par";
    $content .= "{\b Стаж на инженерных/руководящих должностях: }" . addslashes($_POST["work_experience2"]) . "\par";
    $content .= "{\b Перечень ПО, применяемого в работе: }" . addslashes($_POST["po"]) . "\line\line\line";

    $content .= '\f1\fs30 Объекты:\par\line';
    $content .= '\f0\fs24';

    $content .= "{\b\i Объект 1:}\par";
    $content .= "{\b Наименование: }" . addslashes($_POST["object1_name"]) . "\par";
    $content .= "{\b Дата подготовки документации: }" . addslashes($_POST["object1_date1"]) . "\par";
    $content .= "{\b Дата реализации: }" . addslashes($_POST["object1_date2"]) . "\par\par";

    $content .= "{\b\i Объект 2:}\par";
    $content .= "{\b Наименование: }" . addslashes($_POST["object2_name"]) . "\par";
    $content .= "{\b Дата подготовки документации: }" . addslashes($_POST["object2_date1"]) . "\par";
    $content .= "{\b Дата реализации: }" . addslashes($_POST["object2_date2"]) . "\par\par";

    $content .= "{\b\i Объект 3:}\par";
    $content .= "{\b Наименование: }" . addslashes($_POST["object3_name"]) . "\par";
    $content .= "{\b Дата подготовки документации: }" . addslashes($_POST["object3_date1"]) . "\par";
    $content .= "{\b Дата реализации: }" . addslashes($_POST["object3_date2"]);

    $content .= '}';

    $file = dirname(__FILE__) . '/upload/' . $_POST['surname'] . '_' . $_POST['name'] . '.rtf';

    $content = mb_convert_encoding($content, 'Windows-1251', 'utf8');

    if (file_put_contents($file, $content)) {
        echo json_encode([
            'status' => true
        ]);
    }

    wp_die();
}


add_action('wp_ajax_ya_api_get_token', 'ajax_ya_api_get_token');
add_action('wp_ajax_nopriv_ya_api_get_token', 'ajax_ya_api_get_token');

function ajax_ya_api_get_token() {
    echo json_encode([
        'status' => true,
        'token'  => get_option('ya_api_token')
    ]);

    wp_die();
}
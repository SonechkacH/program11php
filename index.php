<?php
header('Content-type: text/html; charset=utf-8');
//проверяем, являетс ли метод запроса POST и тип содержимого application/json
if($_SERVER['REQUEST_METHOD']=='POST'&& $_SERVER["CONTENT-TYPE"]=='application/json'){
    //считываем данные запроса из потока ввода с помощью функции file_get_contents()
    $postData = file_get_contents('php://input');
    //преобразуем полученные данные из формата JSON в ассоциативный массив PHP с помощью функции json_decode()
    $data = json_decode($postData, true);
    //преобразуем массив $data обратно в формат json с помощью функции json_encode()
    //и выводим его в качестве ответа на запрос
    echo json_encode($data);
}
?>

<?php

class View
{
    //public $template_view; //общий вид по умолчанию

    /*
    $content_file - виды отображающие контент страний
    $template_file - общий для всех страниц шаблон
    $data - массив, содержащий элементы контента страницы. Обычно заполняется в модели
    */

    function generate($content_view, $template_view, $data=null)
    {
        /*динамически подключаем общий шаблон,
        внутри которого будет встраиватся вид 
        для отображения контента конкретной страницы
        */
        include 'application/views/'.$template_view;
    }
}
<?php


namespace App\Core;


class BaseController
{
    public $layout = 'base';
    // Метод который отображает страницу. Принимает 2 параметра: $template -(указывает папку и имя файла через точку) отображает страницу(верстку), $args - отображает параметры (сам товар)
    public function render($template, $args = [])
    {
        foreach ($args as $key => $value){
            $$key = $value;
        }

        $template = str_replace('.' , DS, $template);
        $template .= '.php';
        $templatePath = base_path . DS . 'app'. DS . 'views' . DS . $template;
        // записывает в буфер
        ob_start();
        if (file_exists($templatePath)){
            include $templatePath;
        } else {
            include base_path.DS.'app'.DS.'views'.DS.'home'.DS.'404.php';
        }
        $content = ob_get_clean();
        if ($this ->layout){
            include base_path.DS.'app'.DS.'views'.DS.'layouts'.DS.$this ->layout.'.php';
        }else {
            echo $content;
        }

    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}
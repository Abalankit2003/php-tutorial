<?php

declare(strict_types = 1);

require 'Exceptions/ViewNotFoundException.php';

class View
{
    public function __construct(protected string $view, protected array $params = []) 
    {

    }

    public static function make(string $view, array $params = []) : static
    {
        return new static($view, $params);
    }

    public function render() : string
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if(! file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        foreach($this->params as $key => $value) {
            $$key = $value;
        }

        ob_start(); // This initiates the output buffer and will store what script is in $viewPath file and later return it.

        include $viewPath;

        return (string) ob_get_clean();
    }

    public function __toString() : string
    {
        return $this->render();
    }
}

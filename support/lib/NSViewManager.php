<?php
/**
 * View Manager to control views
 * 
 */

class NSViewManager
{
    public $variables = [];
    public $currentPath = "/";
    public $pageTitle = "";

    public function runContent($filePath,$viewModel){
        global $ServiceProvider;

        $functionString = 'return function($Model,$ServiceProvider){
                ob_start();
                include ( "' . $filePath . '" );
                return ob_get_clean();
            };';

        $ff = eval(
        $functionString
        );

        return $ff($viewModel,$ServiceProvider);
    }

    public function RenderView($viewName,$viewModel){
        $p = __DIR__ . "/../views/$viewName.php";
        echo $this->runContent($p,$viewModel);
    }

    public function RenderPartial($partialName,$viewModel){
        $p = __DIR__ . "/../partials/$partialName.php";
        echo $this->runContent($p,$viewModel);
    }

}
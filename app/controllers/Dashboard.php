<?php 


class Dashboard
{
    use \Controller;

    private $dashboardModel;

    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
    }
    
    public function index()
    {
        $content = 'Nothing here yet';
        $this->buildView('dashboard', [
            'content' => $content
        ]);

    }

    protected function loadView($view)
    {
        ob_start();
        require "../app/views/{$view}.php";
        return ob_get_clean();
    }
}
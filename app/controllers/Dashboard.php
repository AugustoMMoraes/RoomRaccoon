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
        $this->buildView('dashboard');

    }

    protected function loadView($view)
    {
        ob_start();
        require "../app/views/{$view}.php";
        return ob_get_clean();
    }
}
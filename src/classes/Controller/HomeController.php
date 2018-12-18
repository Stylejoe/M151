<?php
namespace Controller;

use View\HomeView;
use App\TemplateEngine;
use Repo\UserRepository;
use Model\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->view = new HomeView();
        //$this->repository = UserRepository::getInstance();
    }
}
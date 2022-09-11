<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel'],
                'title' => 'Restfull api app using laravel it is like trello',
                'image' => url('/img/smallerpieces.png'),
                'github' => 'https://github.com/Mohamed-Shhata/trello.git'
            ],
            [
                'category' => ['Nodejs'],
                'title' => 'Simple Ecomerce app Using NodeJS using mvc ',
                'image' => url('/img/simpleEcomerce.png'),
                'github' => 'https://github.com/Mohamed-Shhata/simpleEcomerceUsingNodeJS.git'
            ],
            [
                'category' => ['PHP', 'Laravel', 'Bootstrap'],
                'title' => 'Simple contct app help companys to storo employee data usiing laravel mvc',
                'image' => url('/img/contact.png'),
                'github' => 'https://github.com/Mohamed-Shhata/cotact_app.git'
            ],
            [
                'category' => ['Nodejs'],
                'title' => 'Chat app using Node js and socketio',
                'image' => url('/img/chat.png'),
                'github' => 'https://github.com/Mohamed-Shhata/chat-App-using-nodejs.git'
            ],
            [
                'category' => ['Laravel', 'Bootstrap', 'PHP'],
                'title' => 'Gym app using laravel and mvc and restfull to add end users',
                'image' => url('/img/Gym.png'),
                'github' => 'https://github.com/Mohamed-Shhata/Gym_System_Laravel.git'
            ],
            [
                'category' => ['Django', 'Bootstrap'],
                'title' => 'Blog app using Django mvc',
                'image' => url('/img/blog.jpeg'),
                'github' => 'https://github.com/Mohamed-Shhata/Django_Blog_-Project.git'
            ],
            [
                'category' => ['PHP', 'Bootstrap'],
                'title' => 'Cafee app using PHP',
                'image' => url('/img/cafe.jpeg'),
                'github' => 'https://github.com/Mohamed-Shhata/cafeteria-project-iti.git'
            ],
            [
                'category' => ['Nodejs', 'Reactjs'],
                'title' => 'Full Stack ecomerce app using mern',
                'image' => url('/img/ecomerce.jpeg'),
                'github' => 'https://github.com/Mohamed-Shhata/MernFullStackEcommerce.git'
            ],
            [
                'category' => ['Java'],
                'title' => 'tic tac toe game using java',
                'image' => url('/img/playing.png'),
                'github' => 'https://github.com/Mohamed-Shhata/TicTacToeJavaProject.git'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}

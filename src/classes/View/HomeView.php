<?php

namespace View;
use Model\Comment;
use Repo\CommentRepository;

class HomeView extends View
{
    public function __construct($controller)
    {
        parent::__construct($controller);
        $this->html = 'home.html';
        $this->needsLogin = true;
    }

    public function DisplayPage()
    {   
        if(isset($_GET['mediaId']) && !empty($_GET['mediaId'])){
            $this->html = 'detail.html';
            $mediaId = $_GET['mediaId'];

            //insert comment
            if(isset($_GET['action']) && !empty($_GET['action']))
            {
                $content = htmlspecialchars($_POST['comment']);
                $comment = new Comment($mediaId, $content);
                CommentRepository::getInstance()->Insert($comment);
            }

            $upload = $this->controller->allUploads[$mediaId];
            $content = array(
                'uploads' => array($upload),
                'comments' => $upload->getComments()
            );
            $this->SetContent($content);
        }
        parent::DisplayPage();
    }
}
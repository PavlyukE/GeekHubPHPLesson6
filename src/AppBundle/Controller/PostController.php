<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Post;

class PostController extends Controller
{
    /**
     * @Route("/")
     */
    public function allAction()
    {
        $post1 = new Post(1, 'News live', 'Hello from initial post in blog', '20.11.2016');
        $post2 = new Post(2, 'Sport news', 'Real Madrid won Atletico Madrid with the score 3-0', '20.11.2016');
        $post3 = new Post(3, 'Weather', 'The weather is fine today', '20.11.2016');

        $posts = array($post1, $post2, $post3);

        return $this->render('AppBundle:post:all.html.twig', array(
            'posts' => $posts,
        ));
    }
}

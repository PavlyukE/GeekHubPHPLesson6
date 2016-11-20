<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController
{
    /**
     * @Route("/blog/posts")
     */
    public function postsAction()
    {
        return new Response(
            '<html><body>test</body></html>'
        );
    }
}

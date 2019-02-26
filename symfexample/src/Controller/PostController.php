<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use App\Entity\Post;

    class PostController extends AbstractController {

        /**
         * @Route("/blog", name="blog_list")
         * @Method({"GET"})
         */
        public function index() {
            // $posts = ['Post One', 'Post Two'];

            $posts = $this->getDoctrine()
                ->getRepository(Post::class)
                ->findAll();

            return $this->render('blog/index.html.twig', [
                'posts' => $posts
            ]);
        }

        /**
         * @Route("/blog/{id}", name="blog_single")
         * @Method({"GET"})
         */
        public function show($id) {
            $post = $this->getDoctrine()
                ->getRepository(Post::class)
                ->find($id);

            return $this->render('blog/show.html.twig', [
                'post' => $post
            ]);
        }

        /**
         * @Route("/blog/new", name="new_blog")
         * @Method({"GET", "POST"})
         */
        public function new(Request $request) {
            $entityManager = $this->getDoctrine()->getManager();

            $post = new Post();
            $post->setTitle("New Post");
            $post->setBody("This is a new post");
            $post->setAuthor("Kevin Cho");

            $entityManager->persist($post);

            $entityManager->flush();

            return $this->redirectToRoute()

        }
    }

?>
<?php
	namespace App\Controller;

	//use App\Entity\Intro;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Knp\Component\Pager\PaginatorInterface;

	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use FOS\CKEditorBundle\Form\Type\CKEditorType;
	use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
	use Symfony\Component\HttpKernel\Profiler\Profiler;

	class HomeController extends AbstractController {
		/**
		* @Route("/", name="home_page")
		* @Method({"GET"})
		*/
	    public function intro(): Response
	    {
	        //$intro = $this->getDoctrine()->getRepository(Intro::class)->findAll();

	        return $this->render('home/intro.html.twig');
	    }
	}
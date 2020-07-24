<?php
	namespace App\Controller;

	use App\Entity\Intro;
	use App\Entity\ProductBlock;
	use App\Entity\Category;
	use App\Entity\Product;
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
	    public function home(): Response
	    {
		    $em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

 			$intro = $qb->select('i')
				->from(Intro::class,'i')
				->setFirstResult(0)
   				->setMaxResults(1)
				->getQuery()
				->getOneOrNullResult();

			$product = $qb->select('pb')
				->from(ProductBlock::class,'pb')
				->setFirstResult(0)
   				->setMaxResults(1)
				->getQuery()
				->getOneOrNullResult();

			$categories = $qb->select('c')
				->from(Category::class,'c')
				->setFirstResult(0)
   				->setMaxResults(3)
				->getQuery()
				->getResult();

	        return $this->render('home/home.html.twig', [
	        	'intro' => $intro, 
	        	'product' => $product,
	        	'categories' => $categories
	        ]);
	    }

	    public function productByCategory(Request $req) {
			$categoryId = $req->get('categoryId');
			$em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();
			$products = $qb->select('p')
				->from(Product::class,'p')
				->andWhere('p.category = :category')
            	->setParameter('category', $categoryId)
				->setFirstResult(0)
   				->setMaxResults(3)
				->getQuery()
				->getResult();
			return $this->render('home/product.html.twig', ['products' => $products]);
		}

	    /**
		* @Route("/gioi-thieu", name="intro_page")
		* @Method({"GET"})
		*/
	    public function intro(): Response
	    {
		    $em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

 			$intro = $qb->select('i')
				->from(Intro::class,'i')
				->setFirstResult(0)
   				->setMaxResults(1)
				->getQuery()
				->getOneOrNullResult();

	        return $this->render('home/intro.html.twig', ['intro' => $intro]);
	    }
	}
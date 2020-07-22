<?php
	namespace App\Controller;

	use App\Entity\MenuFooter;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;
	
	class MenuFooterController extends AbstractController {
		public function menuFooter(Request $req) {
			$em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

 			$menus = $qb->select('m')
				->from(MenuFooter::class,'m')
				->where($qb->expr()->isNull('m.parent'))
				->orderBy('m.sort', 'ASC')
				->getQuery()
				->getResult();

			return $this->render('inc/menu_footer.html.twig', ['menus' => $menus]);
		}

		public function menuFooterSub(Request $req) {
			$parentId = $req->get('parentId');
			$em = $this->getDoctrine()->getManager();
			$subMenus = $em->getRepository(MenuFooter::class)->getSubMenu($parentId);
			return $this->render('inc/menu_footer_sub.html.twig', ['subMenus' => $subMenus]);
		}
	}
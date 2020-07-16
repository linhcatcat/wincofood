<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/san-pham", name="product")
     */
    public function index()
    {
    	$products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/san-pham/{id}", name="product_show")
     */
    public function show($id) {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if (!$product) {
            //return $this->redirectToRoute('_preview_error', ['code'=>404]);
            //throw $this->createNotFoundException('Sản phẩm không tồn tại');
            throw new NotFoundHttpException('Sorry not existing!');
        }
        return $this->render('product/show.html.twig', array('product' => $product));
    }
}

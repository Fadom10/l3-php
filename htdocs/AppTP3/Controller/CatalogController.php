<?php

namespace AppTP3\Controller;

class CatalogController extends AbstractController
{

    public function view()
    {
        $list_product = ['johnny', 'hallyday'];
        echo $this->render('view.phtml', ['products' => $list_product]);
    }

    public function viewProduct()
    {
        $product = ['johnny'];
        echo $this->render('viewProduct.phtml', ['product' => $product]);
    }

}
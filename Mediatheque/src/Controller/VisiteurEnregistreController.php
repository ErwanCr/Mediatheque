<?php

namespace App\Controller;

// use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
// use App\Entity\User\ShopUser;


class VisiteurEnregistreController //extends ResourceController
{
	/** @var EngineInterface */
    private $templatingEngine;
	
    public function __construct(EngineInterface $templatingEngine)
    {
        $this->templatingEngine = $templatingEngine;
    }

	public function subscribe(Request $request): Response
	{
		return $this->templatingEngine->renderResponse('subscribe.html.twig',['test' => "C'est un test"]);
	}

	public function payement(Request $request): Response
	{
		if ($_POST['abonnement'] == 'classique') {
			$prix = 80;
		} else {
			if ($_POST['abonnement'] == 'premium') {
				$prix = 150;
			} else {
				$prix = 45;
			}
		}
		return $this->templatingEngine->renderResponse('subscribe_payement.html.twig',['prix' => $prix]);
	}

}
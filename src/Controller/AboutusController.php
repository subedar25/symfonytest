<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutusController extends Controller
{
	/**
	* Function for get user information
	* vars: no aiable passing into it
	*/
    public function getinfo()
    {
		//variable holds user information
        $userinfo = array(
							array("fname"=>"Vinay","lname"=>"Kumar"),
							array("fname"=>"Suresh","lname"=>"Kumar")
						);
						
			
		
		return $this->render('aboutus/getinfo.html.twig', [
            'userDetail' => $userinfo,
        ]);

    }

	
}
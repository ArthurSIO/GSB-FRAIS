<?php

namespace App\Controller;

use App\Entity\Comptable;
use App\Entity\LigneFraisForfait;
use App\Entity\Lignefraishorsforfait;
use App\Entity\Fraisforfait;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ComptableController extends AbstractController
{
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('nom_utilisateur', TextType::class)
                ->add('mdp_utilisateur', PasswordType::class)
                ->add('valider', SubmitType::class)
                ->add('annuler', ResetType::class)
                ->getForm();
        $form->handleRequest( $request );                                           
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $doctrine = $this -> getDoctrine();
            $repositoryObjet = $doctrine -> getRepository(Comptable::class);
            $com = $repositoryObjet -> findByLoginAndMdp($data['nom_utilisateur'], $data['mdp_utilisateur']);
            if (count($com) == 0){
                return $this->render('comptable/connexionComptable.html.twig',['formulaire' => $form->createView(),'erreur' => $erreur = 1]        
                );
            }
            else{
                $session = $request -> getSession();
                $session -> set('login',$data['nom_utilisateur']);
                $session -> set('id',$com[0]->getId());
                return $this->render('comptable/menuComptable.html.twig',['login' => $login = $data['nom_utilisateur']]
                

                );
            }       
        }
        return $this->render('comptable/connexionComptable.html.twig',
                ['formulaire' => $form->createView(),
                    'erreur' => $erreur = 0]        
        );
    }
    
}
?>
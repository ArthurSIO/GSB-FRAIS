<?php

namespace App\Controller;

use App\Entity\Visiteur;
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


class VisiteurController extends AbstractController
{
    public function index(Request $request)
    {      
        //$request = Request::createFromGlobals();
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
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $vi = $repositoryObjet -> findByLoginAndMdp($data['nom_utilisateur'], $data['mdp_utilisateur']);
            if (count($vi) == 0){
                return $this->render('visiteur/connexionVisiteur.html.twig',['formulaire' => $form->createView(),'erreur' => $erreur = 1]        
                );
            }
            else{
                $session = $request -> getSession();
                $session -> set('login',$data['nom_utilisateur']);
                $session -> set('id',$vi[0]->getId());
                return $this->render('visiteur/menuVisiteur.html.twig',['login' => $login = $data['nom_utilisateur']]
                );
            }       
        }
        return $this->render('visiteur/connexionVisiteur.html.twig',
                ['formulaire' => $form->createView(),
                    'erreur' => $erreur = 0]        
        );
    }
    
    public function donnerDate(Request $request)
    {
        $session = $request -> getSession();
        $moisA = array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        $login = $session -> get('login');
        $id = $session -> get('id');
        $dateCm = date("m");
        $dateCm= (int)$dateCm;
        $dateCa = date("y");
        $dateCa = (int)$dateCa;
        $form = $this->createFormBuilder()
                ->add('mois')
                ->add('annee')
                ->add('valider', SubmitType::class)
                ->getForm();
        $form->handleRequest( $request );
        $m = null;
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            for ($i = 1; $i <= 12; $i ++){
                if($data['mois'] == $moisA[$i - 1]){
                    $m = $i;
                }
            }
            $fiches = array();
            $date = sprintf("%02d%04d",$m,$data['annee']);
            $data = $form->getData();
            //récupération LigneFraisHorsForfait
            $doctrine = $this -> getDoctrine();
            $repositoryObjet = $doctrine -> getRepository(Lignefraishorsforfait::class);
            $vi = $repositoryObjet -> findByFicheFrais($date);
            $tab = array();      
            foreach($vi as $element)
            {
                $tab2 =  array("date" => $element->getDate()->format('Y-m-d'), "libelle" => $element->getLibelle(), "montant" => $element->getMontant());
                array_push ($tab, $tab2);
            }
            //récupération LigneFraisForfait
            $doctrine = $this -> getDoctrine();
            $repositoryObjet = $doctrine -> getRepository(LigneFraisForfait::class);
            $vi = $repositoryObjet -> findByLFicheFrais($date);
            $tab1 = array(); 
            /*foreach($vi as $element)
            {
                $tab3 =  array("quantite" => $element->getQuantite(), "libelle" => $element->getLibelle(), "montant" => $element->getMontant());
                array_push ($tab, $tab2);
            }*/
            return $this->render('visiteur/consulterFiches.html.twig',['mois' => $data['mois'],
                'annee' => $data['annee'],
                'login' => $login,   
                'tab' => $tab,
                'taille' => count($tab),
                'tab1' => $tab1,
                'taille1' => count($tab1)
                ]
            
        );       
        }        
        return $this->render('visiteur/donnerDate.html.twig', [
            'moisA' => $moisA,
            'dateC' => $dateCm,
            'dateA' => $dateCa,
            'login' => $login,
            'formulaire' => $form->createView()           
        ]);
    }
    public function renseigner(Request $request){
        $session = $request -> getSession();
        $login = $session -> get('login');
        return $this->render('visiteur/renseignerFiche.html.twig',['login' => $login ]
        );
    }
    public function suivreFiche(Request $request){
        $session = $request -> getSession();
        $login = $session -> get('login');
        return $this->render('visiteur/suivreFiche.html.twig',['login' => $login ]
        );
    }
}
?>


<?php

namespace CompetenceBundle\Controller;
// Ce use permet d'hériter du contrôleur de base
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Console\Helper\ProgressBar;

class MainController extends Controller
{
    public function loginAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:login.html.twig');
        return new Response($content);
    }
    public function indexAction()
    {
        $content = $this->get('templating')
                        ->render('CompetenceBundle:Pages:index.html.twig');
        return new Response($content);
    }
    public function bilanAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:bilan.html.twig');
        return new Response($content);
    }
    public function bilan_eleveAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:bilan_eleve.html.twig');
        return new Response($content);
    }
    public function evaluerAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:evaluer.html.twig');
        return new Response($content);
    }
    public function creer_epreuveAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:creer_epreuve.html.twig');
        return new Response($content);
    }
    public function ajouter_competenceAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:ajouter_competence.html.twig');
        return new Response($content);
    }
    public function auto_evaluationAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:autoevaluer.html.twig');
        return new Response($content);
    }
    public function evaluer_simplementAction()
    {
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:evaluer_simplement.html.twig');
        return new Response($content);
    }
    /*
    public function menuAction()
    {
        $listMenu = array(
            array('id' => 1, 'title' => 'Titre A'),
            array('id' => 2, 'title' => 'Titre B')
        );

        return $this->render('CompetenceBundle:Pages:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listMenu' => $listMenu
        ));
    }
    */
}

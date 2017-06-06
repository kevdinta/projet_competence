<?php

namespace CompetenceBundle\Controller;
// Ce use permet d'hériter du contrôleur de base
use CompetenceBundle\CompetenceBundle;
use CompetenceBundle\Entity\Competence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Console\Helper\ProgressBar;
use \PDO;


class MainController extends Controller
{
    public function dbConnect(){
        return $dbh = new PDO('mysql:host=localhost;dbname=projet_competence', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }

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

        //Liste des matières
        $matieres =  $this->getListeMatiere();
        var_dump($matieres);
        //J'utilise var_dump pour afficher les valeur de la variable sur le template



        //Si j'arrive a passer la variable contenant tout les nom au template
        //On boucle dans le twig (Comme dans l'exemple menu.html.twig)

        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:bilan.html.twig', array( 'matieres' => $matieres));
        return new Response($content);
    }



    public function getListeMatiere()
    {
        $dbh = $this->dbConnect();
        $liste ="";


        $sth = $dbh->prepare("SELECT nom_matiere FROM matiere");
        $sth->execute();

        /* Récupération de toutes les lignes d'un jeu de résultats */
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
        /*foreach( $result as $matiere) {

            $liste .= "<option> $matiere </option>";

        }

        return $liste;*/

        return $result;


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

}

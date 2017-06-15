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

        $etudiants = $this->getListeEtudiant();
        //Il faudra passer en parametre l'ID user du prof






        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:bilan.html.twig', array( 'matieres' => $matieres, 'etudiants' => $etudiants));
        return new Response($content);
    }



    public function getListeMatiere()
    {
        $dbh = $this->dbConnect();

        $res = $dbh->query("SELECT nom_matiere, id_matiere FROM matiere");
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

            $liste[] = array( "nom"   => $row['nom_matiere'],
                              "id"    => $row['id_matiere']);
        }

        return $liste;


    }

    public function getListeEtudiant(){
        $dbh = $this->dbConnect();
        //Recupere les matiere dans lesquelle intervient le prof

        $res1 = $dbh->query("   SELECT id_matiere
                                          FROM intervient
                                          WHERE id_intervenant = 0 "); // = $idProf;
        while ($row1 = $res1->fetch(PDO::FETCH_ASSOC)){
            $matiere = $row1['id_matiere'];

            //Recup les groupes qui suivent la matiere du prof

            $res2 = $dbh->query(" SELECT id_groupe
                                            FROM suivre
                                            WHERE id_matiere = $matiere ");

            //Recup les id des eleves des groupes

            $res3 = $dbh->query( "SELECT DISTINCT users.id, nom, prenom
                                            FROM users
                                            INNER JOIN appartenir WHERE users.id = appartenir.users_id ");
            while($row3 = $res3->fetch(PDO::FETCH_ASSOC)){
                $eleves[] = array('id'       => $row3['id'],
                                  'nom'      => $row3['nom'],
                                  'prenom'   => $row3['prenom']);
            }

        }

        return $eleves;

    }






    public function bilan_eleveAction()
    {
        $matieres =  $this->getListeMatiere();

        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:bilan_eleve.html.twig', array('matieres' => $matieres));


        return new Response($content);
    }







    public function evaluerAction()
    {
        $epreuves = $this->getListeEpreuve();

        $etudiants = $this->getListeEtudiant();

        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:evaluer.html.twig', array('epreuves'=> $epreuves, 'etudiants' => $etudiants));
        return new Response($content);
    }

    public function getListeEpreuve(){
        $dbh = $this->dbConnect();
        $res = $dbh->query('  SELECT id_epreuve, date_epreuve 
                                        FROM epreuve');
        while($row = $res->fetch(PDO::FETCH_ASSOC)){


            $date =  date('d-m-Y', strtotime($row['date_epreuve']));

            $epreuves[] = array(
                'id'      => $row['id_epreuve'],
                'date'   => $date);
        }

        return $epreuves;



    }

    public function testAction(){
        var_dump('aaaaaaaaaaaaaaaaaa');

        /*
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:test.html.twig');
        return new Response($content);
        */
    }




    public function creer_epreuveAction()
    {
        $competences = $this->getCompetences();

        $classes = $this->getAllClasses();

        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:creer_epreuve.html.twig', array('competences' => $competences, 'classes' => $classes));
        return new Response($content);
    }

    public function getAllClasses(){
        $dbh = $this->dbConnect();
        $res = $dbh->query("SELECT nom_groupe, id_groupe
                                      FROM groupe");

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

            $liste[] = array(   "nom"   => $row['nom_groupe'],
                "id"    => $row['id_groupe']);
        }
        return $liste;
    }









    public function ajouter_competenceAction()
    {
        $matieres = $this->getListeMatiere();
        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:ajouter_competence.html.twig',array( 'matieres' => $matieres));
        return new Response($content);
    }

    public function getGroupesCompetence($idMatiere){
        $dbh = $this->dbConnect();
        $res = $dbh->query("SELECT nom_groupe, id_groupeCompetence 
                                      FROM groupe_competence
                                      WHERE id_matiere = $idMatiere");

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

            $liste[] = array(   "nom"   => $row['nom_groupe'],
                                "id"    => $row['id_groupeCompetence']);
        }

        return $liste;


    }







    public function auto_evaluationAction()
    {
        $matieres =  $this->getListeMatiere();

        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:autoevaluer.html.twig', array('matieres' => $matieres));
        return new Response($content);
    }



    public function evaluer_simplementAction()
    {

        $matieres =  $this->getListeMatiere();

        $etudiants = $this->getListeEtudiant();

        $competences = $this->getCompetences();

        $content = $this->get('templating')
            ->render('CompetenceBundle:Pages:evaluer_simplement.html.twig', array('matieres' => $matieres, 'etudiants' => $etudiants, 'competences' => $competences));
        return new Response($content);
    }


    public function getCompetences(){
        $dbh = $this->dbConnect();

        $res = $dbh->query("SELECT id_competence, nom_competence 
                                      FROM competence");

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

            $liste[] = array(   "nom"   => $row['nom_competence'],
                "id"    => $row['id_competence']);
        }
        return $liste;
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

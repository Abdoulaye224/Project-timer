<?php

namespace App\Controller;

use App\Entity\Timer;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProjectRepository;
use App\Repository\TimerRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;

class TimerController extends AbstractController
{
    private $timerRepository;
    private $userRepository;
    private $teamRepository;
    private $projectRepository;

    public function __construct(TimerRepository $timerRepository, UserRepository $userRepository, TeamRepository $teamRepository, ProjectRepository $projectRepository)
    {
        $this->timerRepository = $timerRepository;
        $this->userRepository = $userRepository;
        $this->teamRepository = $teamRepository;
        $this->projectRepository = $projectRepository;
    }

    /**
     * @Route("/timer/{idTeam}/{idProject}", name="timer")
     * @IsGranted("ROLE_USER")
     */
    public function index($idTeam,$idProject)
    {
        $checkTeam = 0;
        $currentUser = $this->getUser();
        $currentTeam = $this->teamRepository->find(['id' => $idTeam]);
        //check si la team selectionné dans l'URL existe
        if($currentTeam != null){
            $users = $currentTeam->getUsers();
        }else{
            //dans le cas ou le groupe selectionné n'existe pas
            $this->addFlash('danger', "groupe inexistant");

            return $this->redirectToRoute('timer-team');
        }
        
        //check si l'utilisateur actuelle est bien dans la team selectionné dans l'URL
        foreach ($users as $user){
            if($currentUser->getId() == $user->getId()){
                $checkTeam = true;
            }
        }

        $checkProject = 0;
        $currentProject= $this->projectRepository->find(['id' => $idProject]);
        //check si le projet selectionné dans l'URL existe
        if($currentProject != null){
            $groups = $currentProject->getTeam();
        }else{
            $this->addFlash('alert', "projet inexistant");
            return $this->redirectToRoute('timer-group', [
                'idTeam' => $idTeam,
            ]);
        }
        
        //check si la team selectionné dans l'URL est bien associé au groupe dans l'URL
        foreach ($groups as $group){
            if($idTeam == $group->getId()){
                $checkProject = true;
            }
        }

        //si l'utilisateur le groupe et le projet sont bon 
        if($checkProject == true &&  $checkTeam == true && $currentUser != null){
            // calcule du temps globale
            $projectList = $this->timerRepository->findBy(['project' => $idProject]);
            $timeProject = $this->calcTime($projectList);

            // calcule du temps passé par un groupe
            $projectTeamList = $this->timerRepository->findBy(['team' => $idTeam,'project' => $idProject]);
            $timeTeamProject = $this->calcTime($projectTeamList);
            // calcule du temps passé par un utilisateur
            $curentUser = $this->getUser();
            $curentUserId = $curentUser->getId();
            $projectUserList = $this->timerRepository->findBy(['user' => $curentUserId,'project' => $idProject]);
            $timeUserProject = $this->calcTime($projectUserList);

            $curentProject =  $this->projectRepository->find($idProject);
            $curentTeam = $this->teamRepository->find($idTeam);

            return $this->render('timer/index.html.twig', [
                'controller_name' => 'TimerController',
                'projectList' => $projectList,
                'projectTime' => $timeProject,
                'projectTeamTime' => $timeTeamProject,
                'projectUserTime' => $timeUserProject,
                'project' => $curentProject,
                'team' => $curentTeam,
                'user' => $curentUser,
            ]);
        }

        
        $this->addFlash('alert', "problème dans la selection");
        return $this->redirectToRoute('timer-team');
    }

    // fonction de calcule de temp
    // prend en entré : une liste de date de début et de fin
    // retourne : la différence de tout les temps aditionnés sous la forme d'un tableau [Jour,Heur,Minute,Seconde]
    public function calcTime($projectList)
    {
        $date = new \DateTime();
        $dateTimeFormat = 'd:H:i:s';
        $timeList = [];
        $fullInterval = 0;
        // calcule de la différence
        foreach ($projectList as $project){
            if (($project->getDateStart() != null) && ($project->getDateEnd() != null)){

                $dateStartTimestamp = $project->getDateStart()->getTimestamp();
                $dateEndTimestamp = $project->getDateEnd()->getTimestamp();
                $fullInterval += $dateEndTimestamp - $dateStartTimestamp;
            }
        }

        $jour = 0;
        $heur = 0;
        $minute = 0;
        $seconde = 0;

        //calcule du nombre de jour
        if($fullInterval > 86399){
            $jour = intval($fullInterval / 86400);
            $fullInterval = ($fullInterval-(86400*$jour));
        }
        //calcule du nombre d'heur
        if($fullInterval > 3599){
            $heur = intval($fullInterval / 3600);
            $fullInterval = ($fullInterval-(3600*$heur));
        }
        //calcule du nombre de minutes
        if($fullInterval > 59){
            $minute = intval($fullInterval / 60);
            $fullInterval = ($fullInterval-(60*$minute));
        }
        $seconde = $fullInterval;

        $timeDHMS = ['jour'=>$jour,'heur'=>$heur,'minute'=>$minute,'seconde'=>$seconde];

        return $timeDHMS;
    }

    /**
     * @Route("/timer_start/{idTeam}/{idProject}", name="timer-start")
     * @IsGranted("ROLE_USER")
     */
    public function startTimer(
        EntityManagerInterface $entityManager,
        $idTeam,
        $idProject)
    {
        $checkTeam = 0;
        $currentUser = $this->getUser();
        $currentTeam = $this->teamRepository->find(['id' => $idTeam]);
        //check si la team selectionné dans l'URL existe
        if($currentTeam != null){
            $users = $currentTeam->getUsers();
        }else{
            //dans le cas ou le groupe selectionné n'existe pas
            $this->addFlash('alert', "groupe inexistant");
            return $this->redirectToRoute('timer-team');
        }
        
        //check si l'utilisateur actuelle est bien dans la team selectionné dans l'URL existe
        foreach ($users as $user){
            if($currentUser->getId() == $user->getId()){
                $checkTeam = true;
            }
        }

        //check si le projet selectionné dans l'URL existe
        $checkProject = 0;
        $currentProject= $this->projectRepository->find(['id' => $idProject]);
        if($currentProject != null){
            $groups = $currentProject->getTeam();
        }else{
            $this->addFlash('alert', "projet inexistant");
            return $this->redirectToRoute('timer-group', [
                'idTeam' => $idTeam,
            ]);
        }
        //check si la team selectionné dans l'URL est bien associé au groupe dans l'URL
        foreach ($groups as $group){
            if($idTeam == $group->getId()){
                $checkProject = true;
            }
        }

        //si l'utilisateur le groupe et le projet sont bon 
        if($checkProject == true &&  $checkTeam == true && $currentUser != null){
            //démarage du timer
            $timer = new Timer();
            $curentUser = $this->getUser();
            $curentUserId = $curentUser->getId();
            $timer->setUser($curentUserId);
            $timer->setTeam($idTeam);
            $timer->setProject($idProject);
            $datetimeNow = new \DateTime();
            $datetimeNow->modify('+2 hour');
            $timer->setDateStart($datetimeNow);
            //création d'un token de férification 
            $token = uniqid();
            $timer->setToken($token);

            $session = new Session();
            $session->set('tokenTimer', $token);

            $entityManager->persist($timer);
            $entityManager->flush();
            $this->addFlash('success', "L'enregristrement du temps de travail a débuté");

            return $this->render('timer/startAndStop.html.twig');
        }
    }

    /**
     * @Route("/timer_stop", name="timer_stop")
     * @IsGranted("ROLE_USER")
     */
    public function stopTimer(
        EntityManagerInterface $entityManager)
    {
        //stop le timer et effectue la modification en BDD
        $session = new Session();
        //utilisation du token pour retrouver la bonne ligne en BDD
        $tokenTimer = $session->get('tokenTimer');
        $timerArray = $this->timerRepository->findBy(['token' => $tokenTimer]);
        $timer = $timerArray[0];
        $datetimeNow = new \DateTime();
        $datetimeNow->modify('+2 hour');
        $timer->setDateEnd($datetimeNow);
        $idTeam = $timer->getTeam();
        $idProject = $timer->getProject();

        $entityManager->persist($timer);
        $entityManager->flush();
        $session->remove('tokenTimer');
        $this->addFlash('success', "Votre temps de travail a été enregistrer !");

        return $this->redirectToRoute('timer', [
            'idTeam' => $idTeam,
            'idProject' => $idProject,
        ]);
    }

    /**
     * @Route("/timer_team", name="timer-team")
     * @IsGranted("ROLE_USER")
     */
    public function listTeam()
    {
        //retourne tout les groupes sur le site
        $currentUser = $this->getUser();
        $currentUserId = $currentUser->getId();
        $teams = $this->teamRepository->findAll();
        $tArray = [];
        foreach ($teams as $team) {
            $users = $team->getUsers();
            foreach ($users as $user){
                if ($user->getId() == $currentUserId){
                    $tArray[] = $team;
                }
            }
        }

        return $this->render('timer/listTeam.html.twig', [
            'tArray' => $tArray
        ]);
    }

    /**
     * @Route("/timer_group/{idTeam}", name="timer-group")
     * @IsGranted("ROLE_USER")
     */
    public function listGroup($idTeam)
    {
        //check si la team selectionné dans l'URL existe
        $checkTeam = 0;
        $currentUser = $this->getUser();
        $currentTeam = $this->teamRepository->find(['id' => $idTeam]);
        if($currentTeam !=null){
            $users = $currentTeam->getUsers();
        }else{
            $this->addFlash('alert', "groupe inexistant");

            return $this->redirectToRoute('timer-team');
        }
        
        //check si l'utilisateur actuelle est bien dans la team selectionné dans l'URL existe
        foreach ($users as $user){
            if($currentUser->getId() == $user->getId()){
                $checkTeam = true;
            }
        }

        if($currentUser != null && $checkTeam == true){
            //retourne tout les projet asocié a cette team 
            $currentUserId = $currentUser->getId();
            $projects = $this->projectRepository->findAll();
            $gArray = [];
            foreach ($projects as $project) {
                $team = $project->getTeam();
                foreach ($team as $t){
                    if ($t->getId() == $idTeam){
                        $gArray[] = $project;
                    }
                }
            }

            return $this->render('timer/listGroup.html.twig', [
                'gArray' => $gArray,
                'idTeam' => $idTeam
            ]);
        }else{
            $this->addFlash('alert', "mauvais compte");

            return $this->redirectToRoute('timer-team');
        }
        
    }
}

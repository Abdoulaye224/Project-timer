<?php

namespace App\Controller;

use App\Entity\Timer;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     */
    public function index($idTeam,$idProject)
    {
        $checkTeam = 0;
        $currentUser = $this->getUser();
        $currentTeam = $this->teamRepository->find(['id' => $idTeam]);
        if($currentTeam != null){
            $users = $currentTeam->getUsers();
        }else{
            $this->addFlash('alert', "groupe inexistant");
            return $this->redirectToRoute('timer-team');
        }
        
        foreach ($users as $user){
            if($currentUser->getId() == $user->getId()){
                $checkTeam = true;
            }
        }

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
        
        foreach ($groups as $group){
            if($currentProject->getId() == $group->getId()){
                $checkProject = true;
            }
        }

        if($checkProject == true &&  $checkTeam == true && $currentUser != null){
            $projectList = $this->timerRepository->findBy(['project' => $idProject]);
            $timeProject = $this->calcTime($projectList);

            $projectTeamList = $this->timerRepository->findBy(['team' => $idTeam,'project' => $idProject]);
            $timeTeamProject = $this->calcTime($projectTeamList);
            
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
    }

    public function calcTime($projectList)
    {
        $date = new \DateTime();
        $dateTimeFormat = 'd:H:i:s';
        $timeList = [];
        $fullInterval = 0;
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

        if($fullInterval > 86399){
            $jour = intval($fullInterval / 86400);
            $fullInterval = ($fullInterval-(86400*$jour));
        }

        if($fullInterval > 3599){
            $heur = intval($fullInterval / 3600);
            $fullInterval = ($fullInterval-(3600*$heur));
        }

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
     */
    public function startTimer(
        EntityManagerInterface $entityManager,
        $idTeam,
        $idProject)
    {
        $checkTeam = 0;
        $currentUser = $this->getUser();
        $currentTeam = $this->teamRepository->find(['id' => $idTeam]);
        if($currentTeam != null){
            $users = $currentTeam->getUsers();
        }else{
            $this->addFlash('alert', "groupe inexistant");
            return $this->redirectToRoute('timer-team');
        }
        
        foreach ($users as $user){
            if($currentUser->getId() == $user->getId()){
                $checkTeam = true;
            }
        }

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
        
        foreach ($groups as $group){
            if($currentProject->getId() == $group->getId()){
                $checkProject = true;
            }
        }

        if($checkProject == true &&  $checkTeam == true && $currentUser != null){
            $timer = new Timer();
            $curentUser = $this->getUser();
            $curentUserId = $curentUser->getId();
            $timer->setUser($curentUserId);
            $timer->setTeam($idTeam);
            $timer->setProject($idProject);
            $datetimeNow = new \DateTime();
            $datetimeNow->modify('+2 hour');
            $timer->setDateStart($datetimeNow);

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
     */
    public function stopTimer(
        EntityManagerInterface $entityManager)
    {
        $session = new Session();
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
        $this->addFlash('success', "Votre temps de travail a été enregistrer");

        return $this->redirectToRoute('timer', [
            'idTeam' => $idTeam,
            'idProject' => $idProject,
        ]);
    }

    /**
     * @Route("/timer_team", name="timer-team")
     */
    public function listTeam()
    {
        if ($this->getUser() != null){
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

        }else{
            $this->addFlash('alert', "Votre devez vous connecter");
            return $this->redirectToRoute('home');
        }
    }

    /**
     * @Route("/timer_group/{idTeam}", name="timer-group")
     */
    public function listGroup($idTeam)
    {
        
        $checkTeam = 0;
        $currentUser = $this->getUser();
        $currentTeam = $this->teamRepository->find(['id' => $idTeam]);
        if($currentTeam != null){
            $users = $currentTeam->getUsers();
        }else{
            $this->addFlash('alert', "groupe inexistant");
            return $this->redirectToRoute('timer-team');
        }
        
        foreach ($users as $user){
            if($currentUser->getId() == $user->getId()){
                $checkTeam = true;
            }
        }

        if($currentUser != null && $checkTeam == true){
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

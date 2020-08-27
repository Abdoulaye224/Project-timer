<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Team;
use App\Entity\User;
use App\Form\TeamType;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;


class TeamController extends AbstractController
{
    private $entityManager;
    private $teamRepository;

    public function __construct(TeamRepository $teamRepository,EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->teamRepository = $teamRepository;
    }

    /**
     * @Route("/team", name="team")
     */
    public function index()
    {
        $teamList = $this->teamRepository->findAll();
        $currentUser = $this->getUser();
        if($currentUser == null){
            return $this->redirectToRoute('home');
        }
        else{
            return $this->render('team/index.html.twig', [
                'controller_name' => 'Team Controller',
                'team_list' => $teamList
            ]);
        }
    }

    /**
     * @Route("/team_create", name="team-create")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function newAction(
        Request $request,
        EntityManagerInterface $entityManager)
    {
        $currentUser = $this->getUser();
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $team->setTeamAdmin($this->getUser()->getId());
            $team->addUser($this->getUser());
            $entityManager->persist($team);
            $entityManager->flush();
            $this->addFlash('success', "L'équipe a bien été créer !");

            return $this->redirectToRoute('team');
        }

        return $this->render('team/new.html.twig', [
            'form' => $form->createView(),
        ]);    
    }

    /**
     * @Route("/team_edit/{idTeam}", name="team_edit")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function editAction(
        Request $request,
        EntityManagerInterface $entityManager,
        $idTeam)
    {
        $currentUser = $this->getUser();
        $group =  $this->entityManager->getRepository(Team::class)->findBy(['id'=>$idTeam]);

        if($group == []){
            //si le groupe n'existe pas
            return $this->redirectToRoute('team');
        }
        else{
            //vérification de l'administrateur du group pour la modifiation
            if ($currentUser->getId() != $group[0]->getTeamAdmin() ) {

                return $this->redirectToRoute('team');
            }
        }
                     
        $team = $this->teamRepository->find(['id' => $idTeam]);
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //modification du group
            $curentUser = $this->getUser(); 
            $curentUserId = $curentUser->getId();
            $team->setTeamAdmin($curentUserId);
            $team->addUser($curentUser);
            $entityManager->persist($team);
            $entityManager->flush();
            $this->addFlash('success', "L'équipe a bien été modifier !");

            return $this->redirectToRoute('team');
        }

        return $this->render('team/edit.html.twig', [
            'form' => $form->createView(),
        ]);  
    }

    /**
     * @Route("/team_delete/{idTeam}", name="team_delete")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function deleteTeam(EntityManagerInterface $entityManager,
    $idTeam)
    {
        $currentUser = $this->getUser();
        $group =  $this->entityManager->getRepository(Team::class)->findBy(['id'=>$idTeam]);

        if($group == []){
            //si le groupe n'existe pas
            return $this->redirectToRoute('team');
        }
        else{
            //vérification de l'administrateur du group pour la supression
            if ($currentUser->getId() != $group[0]->getTeamAdmin() ) {

                return $this->redirectToRoute('team');
            }
        }
        //supression du group
        $team = $this->teamRepository->find(['id' => $idTeam]);
        $entityManager->remove($team);
        $entityManager->flush();
        $this->addFlash('danger', "Cette équipe a bien été supprimé");
    
        return $this->redirectToRoute('team');       
    }
}

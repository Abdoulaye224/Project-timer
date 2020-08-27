<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Team;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class UserController extends AbstractController
{
    private $userRepository;
    private $eventDispatcher;
    private $entityManager;

    public function __construct(UserRepository $userRepository, EventDispatcherInterface $eventDispatcher, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->eventDispatcher = $eventDispatcher;
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/user_list", name="user_list")
     */
    public function index()
    {
        $userList = $this->userRepository->findAll();
        $currentUser = $this->getUser();
        if($currentUser == null){
            return $this->redirectToRoute('home');
        }
        else{
            return $this->render('user/index.html.twig', [
                'user_list' => $userList,
            ]);
        }

        
    }

    /**
     * @Route("/user_create", name="user_create")
     */
    public function newAction(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $entityManager->persist($user);
            $entityManager->flush();
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete-bis/{id}", name="user_delete_bis")
     */
    public function deleteBis(string $id, EntityManagerInterface $entityManager)
    {
        $user = $this->userRepository->find($id);
        $entityManager->remove($user);
        $entityManager->flush();
        $this->addFlash('danger', "Votre compte a bien été supprimer !");

        return $this->redirectToRoute('user_list');
    }

    /**
     * @Route("/deleteUser/{id}", name="user_delete")
     * @ParamConverter("user", options={"mapping"={"id"="id"}})
     */
    public function delete(user $user, EntityManagerInterface $entityManager)
    {

        $currentUser = $this->getUser();
        if($currentUser == null){

            return $this->redirectToRoute('home');
        }else{
            $groups =  $this->entityManager->getRepository(Team::class)->findAll();
            $projects =  $this->entityManager->getRepository(Project::class)->findAll();

            foreach($projects as $project){
                foreach($groups as $group){
                    if($user->getId() == $group->getTeamAdmin() && count($group->getUsers()) <= 1 ) {
                        $entityManager->remove($group);
                    }
                }
                if($user->getId() == $project->getProjectAdmin() && count($project->getTeam()) > 1 ){
                    foreach($groups as $group){
                        if($user->getId() == $group->getTeamAdmin() && count($group->getUsers()) > 1 ){
                            $group->removeUser($user);
                            if ($group->getUsers()[1] != null)
                                $group->setTeamAdmin($group->getUsers()[1]->getId());
                            else
                                $group->setTeamAdmin($group->getUsers()[0]->getId());
                            $entityManager->persist($group);
                        }
                    }
                    foreach($project->getTeam() as $projectTeam){
                        if ($projectTeam->getUsers()[1] != null){
                            $project->setProjectAdmin($projectTeam->getUsers()[1]->getId());
                        } else {
                            $project->setProjectAdmin($projectTeam->getUsers()[0]->getId());
                        }
                    }

                }
                if($user->getId() == $project->getProjectAdmin() && count($project->getTeam()) == 1 ){
                    if ($project->getTeam()[0]->getUsers()[1] != null){
                        $project->setProjectAdmin($project->getTeam()[0]->getUsers()[1]->getId());
                    } else {
                        $project->setProjectAdmin($project->getTeam()[0]->getUsers()[0]->getId());
                    }
                }
                $entityManager->persist($project);
            }

            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('danger', "Votre compte a bien été supprimer !");

            return $this->redirectToRoute('home');
        }
    }

}

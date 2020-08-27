<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Team;
use App\Entity\Project;
use App\Form\ProjectType;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;

class ProjectController extends AbstractController
{
    private $entityManager;
    private $ProjectRepository;

    public function __construct(ProjectRepository $ProjectRepository,EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->ProjectRepository = $ProjectRepository;
    }
    /**
     * @Route("/project", name="project")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function index()
    {
        $projectList = $this->ProjectRepository->findAll();
        $currentUser = $this->getUser();
        
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
            'projet_list' => $projectList
        ]);
    }

    /**
     * @Route("/project_create", name="project-create")
     * @IsGranted("ROLE_USER")
     */
    public function newAction(
        Request $request,
        EntityManagerInterface $entityManager)
    {
        $currentUser = $this->getUser();
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $curentUser = $this->getUser(); 
            $curentUserId = $curentUser->getId();
            $project->setProjectAdmin($curentUserId);
            $entityManager->persist($project);
            $entityManager->flush();
            $this->addFlash('success', "Le projet a bien été créer !");

            return $this->redirectToRoute('project');
        }

        return $this->render('project/new.html.twig', [
            'form' => $form->createView(),
        ]);   
    }

    /**
     * @Route("/project_edit/{idProject}", name="project_edit")
     * @IsGranted("ROLE_USER")
     */
    public function editAction(
        Request $request,
        EntityManagerInterface $entityManager,
        $idProject)
    {
        $currentUser = $this->getUser();
        $proj =  $this->entityManager->getRepository(Project::class)->findBy(['id'=>$idProject]);
        
        if($proj == []){
            //si le projet n'existe pas

            return $this->redirectToRoute('project');
        }
        else{
            //si l'utilisateur n'est pas l'administrateur
            if ($currentUser->getId() != $proj[0]->getProjectAdmin() ) {

                return $this->redirectToRoute('project');
            }
        }

        $project = $this->ProjectRepository->find(['id' => $idProject]);
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $curentUser = $this->getUser(); 
            $curentUserId = $curentUser->getId();
            $project->setProjectAdmin($curentUserId);
            $entityManager->persist($project);
            $entityManager->flush();
            $this->addFlash('success', "Le projet a bien été modifier !");

            return $this->redirectToRoute('project');

        }

        return $this->render('project/edit.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/project_delete/{idProject}", name="project_delete")
     * @IsGranted("ROLE_USER")
     */
    public function deleteTeam(EntityManagerInterface $entityManager,
    $idProject)
    {
        $currentUser = $this->getUser();
        $proj =  $this->entityManager->getRepository(Project::class)->findBy(['id'=>$idProject]);
        
        if($proj == []){
            //si le projet n'existe pas

            return $this->redirectToRoute('project');
        }
        else{
            //si l'utilisateur n'est pas l'administrateur
            if ($currentUser->getId() != $proj[0]->getProjectAdmin() ) {

                return $this->redirectToRoute('project');
            }
        }

        $project = $this->ProjectRepository->find(['id' => $idProject]);
        $entityManager->remove($project);
        $entityManager->flush();
    
        return $this->redirectToRoute('project');
              
    }
}

<?php

namespace App\Controller;

use App\DTO\TelephoneDTO;
use App\Entity\Controle;
use App\Entity\Employees;

use App\Entity\Contracts;
use App\Entity\Customers;
use App\Entity\Telephone;
use App\Entity\History;
use App\Form\ContactLinkingFormType;
use App\Form\TelephoneDTOType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {


    
        $ListeContracts = $entityManager->getRepository(Contracts::class)->findAll();

        /*Gestion total tel*/
        $TelRepository = $entityManager->getRepository(Telephone::class);
        $TelQueryBuilder = $TelRepository->createQueryBuilder('t');
        $TelQueryBuilder->select('COUNT(DISTINCT t.name) AS num');
        $TotalNums = $TelQueryBuilder->getQuery()->getResult(); 

       /*Gestion total contrats*/
        $ContractRepository = $entityManager->getRepository(Contracts::class);
        $ContractsQueryBuilder =  $ContractRepository->createQueryBuilder('c');
        $ContractsQueryBuilder->select('COUNT (DISTINCT c.reference) AS ref');
        $resultContractsNumber = $ContractsQueryBuilder->getQuery()->getResult();
      

        /*Gestion total customers */
$CustomerRepository = $entityManager->getRepository(Customers::class);
$CustomerQB = $CustomerRepository->createQueryBuilder('cm');
$CustomerQB->select('COUNT (DISTINCT cm.dolid) AS customer');
$resultCustomers = $CustomerQB->getQuery()->getResult();

        // Le bouton dans votre template appelle getData lorsque cliqué
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'ListeContracts' => $ListeContracts,
            'TotalContracts' => $resultContractsNumber[0]['ref'],
            'totalNum'=> $TotalNums[0]['num'],
            'TotalCustomers' => $resultCustomers[0]['customer'],
        ]);
    }

    #[Route('/liaison', name: 'app_liaison')]
    public function liaison(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): Response
    {
       
        $controls = $entityManager->getRepository(Controle::class)->findBy([], ['id' => 'DESC']);
        return $this->render('home/liaison.html.twig', [
            'controller_name' => 'HomeController',
            // 'form' => $form->createView(),
            'controls' => $controls,
        ]);
    }


    #[Route('/associate', name: 'app_associate')]
    public function associate(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): Response
    {
 


        $telephones = $entityManager->getRepository(Telephone::class)->findAll();
        $controlTab = $entityManager->getRepository(Controle::class);

        $forms = [];
        foreach ($telephones as $telephone) {
            //Pour chaque telephone je crée un objet dto avec un numéro de telephone initialisé, pour crée le formulaire.
            $dto = (new TelephoneDTO())->setTelephone($telephone);         //les telephone sont mis a jour, les contrats seront bouclés depuis TelephoneDTOType
            $form = $this->createForm(TelephoneDTOType::class, $dto);     //Creation des formulaire a partir de l'objet dto
            $form->handleRequest($request); 

            if ($form->isSubmitted() && $form->isValid()) {
                $existingLink =  $controlTab->findOneBy(['telephoneid'=>$dto->getTelephone()],['startserviceat' => 'DESC']);
                
                 
                 if ($existingLink !== null) {
                    $existingLink->setOutserviceat(new \DateTime('now'));}
      

                if ($request->isXmlHttpRequest()) { // si traitement ajax success


                    $controle = (new Controle())
                        ->setTelephoneid($dto->getTelephone())
                        ->setContratid($dto->getContrat());
                    $entityManager->persist($controle);
                    $entityManager->flush();
                    $data = $serializer->serialize($controle, 'json');

                    $history = (new History())
                    ->setTitle("assocation")
                    ->setDescription("nouvelle association"." " .$dto->getTelephone());
                    $entityManager->persist($history);
                    $entityManager->flush();

                    return new JsonResponse(['success' => true, 'data' => json_decode($data)]);

                }
            }else {
                if ($request->isXmlHttpRequest()) { // si erreur traitement ajax
                    $errors = [];
                    foreach ($form->getErrors(true) as $error) {
                        $errors[] = $error->getMessage();
                    }
                    return new JsonResponse(['success' => false, 'errors' => $errors], Response::HTTP_BAD_REQUEST);
                }
            }

            $forms[$telephone->getId()] = $form->createView(); //creation de la vue pour chaque tel

        }

        return $this->render('home/associate.html.twig', [
            'forms' => $forms,
            
        ]);
    }


}
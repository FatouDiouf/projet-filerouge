<?php

namespace App\Controller;
use App\Entity\Partenaire;

use App\Form\PartenaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

    /**
     * @Route("/api")
     */
class ApiController extends AbstractController
{
    public function index()
    {
        $repo =$this ->getDoctrine()->getRepository(Partenaires::class);
        $partenaire = $repo->findAll();

        return $this->handleView($this->view($partenaire));
    }
   
     /**
     * @Route("/partenaire", name="add_partenaire", methods={"POST"})
     */
    public function ajout(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager)

    {
        $partenaire = $serializer->deserialize($request->getContent(), Partenaire::class, 'json');
        $entityManager->persist($partenaire);
        $entityManager->flush();
        $data = [
            'status' => 201,
            'message' => 'Le partenaire a bien été ajouté'
        ];
        return new JsonResponse($data, 201);
    }
    
    /**
     * @Route("/superadmin", name="superadmin", methods={"POST"})
     */

    public function superadmin(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)

    {
        $values = json_decode($request->getContent());
        if(isset($values->nom,$values->adresse ,$values->email)) {
            $user = new Superadmin();
            $user->setNom($values->nom);
            $user->setAdresse($values->adresse);
            $user->setEmail($values->email);
            $entityManager->persist($user);
            $entityManager->flush();

            $data = [
                'vue' => 201,
                'ecrir' => 'L\'utilisateur a été créé'
            ];


            return new JsonResponse($data, 201);
        }
        $data = [
            'status' => 500,
            'message' => 'Vous devez renseigner les clés username et password'
        ];
        return new JsonResponse($data, 500);
    }
}

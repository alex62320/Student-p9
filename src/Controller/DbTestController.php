<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Schoolyear;
use App\Entity\Student;
use App\Entity\Tag;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DbTestController extends AbstractController
{
    #[Route('/db/test', name: 'app_db_test')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // récupération du repository des student
        $repository = $doctrine->getRepository(Student::class);
        // récupération de la liste complète de tous les students
        $students = $repository->findAll();
        // inspection de la liste
        dump($students);

        exit();
    }
}

<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class EmployeeController
 * @package App\Controller
 * @Route("/employee")
 */
class EmployeeController extends AbstractController
{
    /**
     * @Route("/list", methods={"GET"}, name="employee_list")
     *
     * @param UserRepository $uRepo
     *
     * @return Response
     */
    public function list(UserRepository $uRepo)
    {

        return $this->render('employee/list.html.twig', [
            'employees' => $uRepo->getAllEmployees(),
        ]);
    }


    public function add()
    {
        return $this->render('employee/add.html.twig', []);
    }


    public function edit()
    {
        return $this->render('employee/edit.html.twig', []);
    }


    public function delete()
    {
        return $this->render('employee/delete.html.twig', []);
    }
}

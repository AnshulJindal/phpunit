<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/index")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/form")
     */
    public function form(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            return $this->render('form.html.twig',[
                'form' => $form->createView()
            ]);
        }
        return $this->render('form.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
<?php

namespace App\Controller;

use App\Entity\JsonInputForm;
use App\Form\JsonInputFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class JsonFormController extends AbstractController
{
    /**
     * @Route("/", name="app_json_form")
     */
    public function index(Request $request): Response
    {   
        $jsonForm = new JsonInputForm();

        $form = $this->createForm( JsonInputFormType::class, $jsonForm);

        return $this->renderForm('json.input.form.html.twig', [
            'form' => $form,
        ]);

    }

}

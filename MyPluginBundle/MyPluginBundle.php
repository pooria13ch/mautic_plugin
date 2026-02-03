<?php

declare(strict_types=1);

namespace MauticPlugin\MyPluginBundle\Controller;

use Mautic\CoreBundle\Controller\AbstractController;
use MauticPlugin\MyPluginBundle\Entity\MyPluginSettings;
use MauticPlugin\MyPluginBundle\Form\Type\ConfigType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConfigController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(MyPluginSettings::class);

        /** @var MyPluginSettings $settings */
        $settings = $repo->getSettings();

        $form = $this->createForm(ConfigType::class ,$settings);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($settings);
            $em->flush();

            $this->addFlash('notice' ,'Settings saved successfully');
        }

        return $this->render('MyPluginBundle:Config:index.html.twig' ,[
            'form' => $form->createView()
        ]);
    }
}

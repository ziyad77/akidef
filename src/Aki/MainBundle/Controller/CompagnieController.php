<?php

namespace Aki\MainBundle\Controller;
use Aki\MainBundle\Entity\Contact;
use Aki\MainBundle\Form\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompagnieController extends Controller
{    
    public function aproposAction()
    {
        return $this->render('MainBundle:Compagnie:APropos.html.twig');
    }
    
    public function suggestionAction()
    {
        return $this->render('MainBundle:Compagnie:Suggestion.html.twig');
    }
    
    public function contactAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $Contact = new Contact();

        $form = $this->createForm(new ContactType(), $Contact);
        $request = $this->getRequest();
        
        if($request->isMethod('POST'))
        {
            $form->bindRequest($request);
            $Contact = $form->getData();
            
            if ($form->isValid()){
                
                $message = \Swift_Message::newInstance()
                    ->setSubject($Contact->getObjet())
                    ->setFrom($Contact->getEmail())
                    ->setTo('urbanenetwork@gmail.com')
                    ->setBody('Nom complet : '.$Contact->getNom().' '.$Contact->getPrenom().'
'.'Email : '.$Contact->getEmail().'
'.'Message : '.$Contact->getMessage().'
')
                ;
                $this->get('mailer')->send($message);
            }
            
        }

        return $this->render('MainBundle:Compagnie:Contact.html.twig',array(
            'form' => $form->createView()
        ));
    }
}

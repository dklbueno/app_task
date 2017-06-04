<?php

namespace Duo\AtividadeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Duo\ModelBundle\DuoModelBundle;
use Duo\ModelBundle\Entity\Atividade;
use Duo\ModelBundle\Entity\Status;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="atividade_index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $id = '';
        $em = $this->getDoctrine()->getManager();
        $lista_status = $em->getRepository('DuoModelBundle:Status')->findAll();

        foreach($lista_status as $key=>$val){
            $status[$val['status_id']] = $val;
        }

        if($request->get('find')){
            $id = $request->get('id');
            $em = $this->getDoctrine()->getManager();
            $atividade = $em->getRepository('DuoModelBundle:Atividade')->findFilter($id);
        }else{
            $em = $this->getDoctrine()->getManager();
            $atividade = $em->getRepository('DuoModelBundle:Atividade')->findAll();
        }
        
        /** @var  $paginator */
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($atividade, $request->query->get('page', 1), 5);
        return $this->render('atividade/index.html.twig',[
            'pagination' => $pagination,
            'id' => $id,
            'status' => $status
        ]);
    }

    /**
     * @Route("/cadastro",name="cadastro_index")
     * @Template()
     * @Method({"GET", "POST"})
     */
    public function cadastroAction(Request $request)
    {
        $atividade = new Atividade();
        $em = $this->getDoctrine()->getManager();
        $status = $em->getRepository('DuoModelBundle:Status')->findAll();

        $erro = [];
        $success = [];

        if($request->get('Submit')){   
            $title = $request->get('title');
            $description = $request->get('description');
            $start_date = new \DateTime($request->get('start_date')); 
            $end_date = new \DateTime($request->get('end_date')); 
            $situation = $request->get('situation'); 
            $status_id = $request->get('status_id');

            $atividade->setTitle($title);
            $atividade->setDescription($description); 
            $atividade->setStartDate($start_date);  
            $atividade->setEndDate($end_date);
            $atividade->setSituation($situation); 
            $atividade->setStatusId($status_id); 

            //dump($atividade); exit;
            $em = $this->getDoctrine()->getManager();
            $em->persist($atividade);
            $em->flush($atividade);    

            $success['msg'] = "Atividade criado com sucesso!";
            

        }

        return $this->render('atividade/cadastro.html.twig',[
            'error' => $erro,
            'success' => $success,
            'status' => $status
        ]);
    }

    /**
     * @Route("/show/{id}",name="show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
 
        $pedido = $em->getRepository('DuoModelBundle:Atividade')->find($id);
 
        if (!$pedido) {
            throw $this->createNotFoundException('O pedido não existe! Volte para home!');
        }
 
        return [
            'pedido' => $pedido,
        ];
    }
}

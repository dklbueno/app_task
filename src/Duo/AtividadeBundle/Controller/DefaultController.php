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

        $filtro = ['status_id'=>'','situation'=>''];

        $em = $this->getDoctrine()->getManager();
        $atividade = $em->getRepository('DuoModelBundle:Atividade')->findAll();
        if($request->get('find')){
            $em = $this->getDoctrine()->getManager();
            $status_id = ($request->get('status_id')?$request->get('status_id'):null);
            $situation = ($request->get('situation')?$request->get('situation'):null);
            //exit('status '.$status_id);
            $atividade = $em->getRepository('DuoModelBundle:Atividade')->findFilter(null,$status_id,$situation);
            $filtro = ['status_id'=>$status_id,'situation'=>$situation];
        }
        
        /** @var  $paginator */
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($atividade, $request->query->get('page', 1), 5);
        return $this->render('atividade/index.html.twig',[
            'pagination' => $pagination,
            'id' => $id,
            'status' => $status,
            'filtro' => $filtro
        ]);
    }

    /**
     * @Route("/cadastro/{id}",defaults={"id" = null},name="cadastro_index")
     * @Template()
     * @Method({"GET", "POST"})
     */
    public function cadastroAction(Request $request)
    {
        $atividade = new Atividade();
        $em = $this->getDoctrine()->getManager();
        $status = $em->getRepository('DuoModelBundle:Status')->findAll();
        $id = '';
		$title = '';
 		$description = '';
 		$start_date = '';
 		$end_date = '';
 		$situation = '';
 		$status_id = '';

        $erro = [];
        $success = [];

        if($request->get('Submit')){   
            $title = $request->get('title');
            $description = $request->get('description');
            $start_date = new \DateTime($request->get('start_date')); 
            $end_date = ($request->get('end_date'))
                            ?new \DateTime($request->get('end_date'))
                            :null; 
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
            'status' => $status,
            'id' => $id,
			'title' => $title,
	 		'description' => $description,
	 		'start_date' => $start_date,
	 		'end_date' => $end_date,
	 		'situation' => $situation,
	 		'status_id' => $status_id
        ]);

    }

    /**
     * @Route("/editar/{id}",name="edit_index")
     * @Template()
     */
    public function editarAction($id, Request $request)
    {
        $atividade = new Atividade();
        $em = $this->getDoctrine()->getManager();
        $status = $em->getRepository('DuoModelBundle:Status')->findAll();  
        $atv = $em->getRepository('DuoModelBundle:Atividade')->findFilter($id); 

		$title = $atv[0]['title'];
 		$description = $atv[0]['description'];
 		$start_date = $atv[0]['startDate'];
 		$end_date = $atv[0]['endDate'];
 		$situation = $atv[0]['situation'];
 		$status_id = $atv[0]['status_id'];

        //echo "<pre>"; var_dump($situation); exit;
        $erro = [];
        $success = [];

        if($request->get('Submit')){   
            $title = $request->get('title');
            $description = $request->get('description');
            $start_date = new \DateTime($request->get('start_date')); 
            $end_date = new \DateTime($request->get('end_date')); 
            $situation = $request->get('situation'); 

            $status_id = $request->get('status_id');

            $atividade = $em->getRepository('DuoModelBundle:Atividade')
                                        ->find($id);

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

        //exit('situation '. $situation);

        return $this->render('atividade/cadastro.html.twig',[
            'error' => $erro,
            'success' => $success,
            'status' => $status,
            'editar' => true,
            'id' => $id,
			'title' => $title,
	 		'description' => $description,
	 		'start_date' => $start_date,
	 		'end_date' => $end_date,
	 		'situation' => $situation,
	 		'status_id' => $status_id
        ]);
    }
}

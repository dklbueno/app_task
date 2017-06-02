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
        $status = new Status();

        $erro = [];
        $success = [];

        if($request->get('Submit')){   
            $name = $request->get('name');
            $email = $request->get('email');
            $id_pedido = $request->get('pedido'); 
            $title = $request->get('title');
            $description = $request->get('description'); 
            $novo_cliente = false;

            $cliente->setName($name);
            $cliente->setEmail($email);
            //Busca cliente por email e caso nao encontre cadastra
            $em = $this->getDoctrine()->getManager();
            $find_cliente = $em->getRepository('LongevoModelBundle:Cliente')
                                    ->findByEmail($email);
            if(!$find_cliente){
                $em = $this->getDoctrine()->getManager();                
                $em->persist($cliente);
                $em->flush($cliente);  
                $id_cliente = $cliente->getId();
                $novo_cliente = true; 
                $success['msg'] = "Cliente cadastrado com sucesso!";             
            }else{
                $id_cliente = $find_cliente[0]->getId();
            }

            if(!$novo_cliente){
                //Busca pedido
                $find_pedido = $em->getRepository('LongevoModelBundle:Pedido')
                                        ->find($id_pedido);
                if(!$find_pedido){
                    $erro['msg'] = "Pedido não encontrado!";
                }else{
                    $em = $this->getDoctrine()->getManager();
                    $find_pedido_cliente = $em->getRepository('LongevoModelBundle:Pedido')
                                        ->findByCliente($id_cliente,$id_pedido);
                    if(!$find_pedido_cliente){
                        $erro['msg'] = "Não existe relação entre este pedido e cliente!";
                    }else{
                        $chamado->setTitle($title);
                        $chamado->setDescription($description);
                        $chamado->setIdPedido($id_pedido);
                        //dump($chamado); exit;
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($chamado);
                        $em->flush($chamado);

                        //return $this->redirectToRoute('sac_show', array('id' => $cliente->getId()));
                        $success['msg'] = "Chamado criado com sucesso!";
                    }
                }
            }            

        }

        return $this->render('atividade/cadastro.html.twig',[
            'error' => $erro,
            'success' => $success
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

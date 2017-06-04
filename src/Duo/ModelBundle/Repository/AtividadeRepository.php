<?php

namespace Duo\ModelBundle\Repository;

/**
 * AtividadeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AtividadeRepository extends \Doctrine\ORM\EntityRepository
{
	private function getQueryBuilder()
	{
	    $em = $this->getEntityManager();
	 
	    $queryBuilder = $em->getRepository('DuoModelBundle:Atividade')
	    ->createQueryBuilder('ch');
	 
	    return $queryBuilder;
	}

	public function findAllInOrder()
	{
	    $qb = $this->getQueryBuilder()
	    ->orderBy('ch.createdAt', 'desc');
	 
	    return $qb->getQuery()->getResult();
	}

	public function findAll()
	{
	    $qb = $this->getEntityManager()
        ->createQueryBuilder()
        ->select('atv.id,atv.title,atv.description,atv.status_id,atv.startDate,atv.endDate,atv.situation')
        ->from('DuoModelBundle:Atividade','atv')
        ->orderBy('atv.id', 'desc'); 
	    return $qb->getQuery()->getResult();
	    // $qb = $this->getEntityManager()
     //    ->createQueryBuilder()
     //    ->select('atv.id,atv.title,atv.description,atv.status_id,sta.title')
     //    ->from('DuoModelBundle:Atividade','atv')
     //    ->join('DuoModelBundle:Status','sta', \Doctrine\ORM\Query\Expr\Join::WITH, 'sta.status_id = atv.status')
     //    ->orderBy('atv.id', 'desc'); 
	    // return $qb->getQuery()->getResult();
	    /*$em = $this->getEntityManager();
		$connection = $em->getConnection();
		$statement = $connection->prepare("
			SELECT DISTINCT ON(atv.id) atv.id, atv.title, cli.name, cli.email, sta.id AS status_id
			FROM atvmado atv
			INNER JOIN cliente cli ON cli.id_cliente = atv.id_cliente
			INNER JOIN staido sta ON sta.id_cliente = cli.id_cliente
			");
		$statement->execute();
		return $statement->fetchAll();*/
	}

	public function findFilter($id=null)
	{
		/*$where = null;
		if($email) $where[] = " cli.email = '".$email."'";
		if($status_id) $where[] = " sta.id = ".$status_id." ";
		$sql = "
			SELECT DISTINCT ON(atv.id) atv.id, atv.title, cli.name, cli.email, sta.id AS status_id
			FROM atvmado atv
			INNER JOIN cliente cli ON cli.id_cliente = atv.id_cliente
			INNER JOIN staido sta ON sta.id_cliente = cli.id_cliente
			";
		if(count($where)){
			$sql.= " WHERE ".implode(" AND ",$where);
		}

	    $em = $this->getEntityManager();
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->execute();
		return $statement->fetchAll();*/

		$qb = $this->getEntityManager()
        ->createQueryBuilder()
        ->select('atv.id,atv.title,cli.name,cli.email, sta.id AS status_id')
        ->from('DuoModelBundle:Atividade','atv')
        ->join('DuoModelBundle:Status','sta', \Doctrine\ORM\Query\Expr\Join::WITH, 'sta.id = atv.status_id')
        ->leftJoin('sta.cliente','cli')
        ->orderBy('atv.createdAt', 'desc'); 
        if($email){
        	$qb->where("cli.email = '".$email."'");
        }
        if($status_id){
        	$qb->where("sta.id = ".$status_id);
        }
	    return $qb->getQuery()->getResult();
	}
}

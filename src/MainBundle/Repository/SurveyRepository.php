<?php

namespace MainBundle\Repository;

/**
 * SurveyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SurveyRepository extends \Doctrine\ORM\EntityRepository
{
	
	public function findAllVisibleAndActiveSurveys($max = null, $offset = null)
	{	
						
		$qb = $this->_em->createQueryBuilder('p');
		
		$qb->select('p')
		->from('MainBundle:Survey', 'p')
		->where('p.visibility = :visibility')
		->orderBy('p.addedDate', 'DESC')
		->innerJoin('p.activity', 'c')
		->andWhere(
			$qb->expr()->orX()
			->add('c.is_alwaysActive is NULL')
			->add('c.is_alwaysActive = :is_alwaysActive')
			)
			->andWhere(
			$qb->expr()->orX()
			->add('c.endDate is NULL')
			->add('c.endDate >= :now')
			)
			->andWhere(
			$qb->expr()->orX()
			->add('c.answerLimit is NULL')
			->add('c.answerLimit > p.responesNumber')
			)
		->setParameter('visibility', true)
		->setParameter('is_alwaysActive', true)
		
		->setParameter('now', new \DateTime())
		->setFirstResult($offset)
		->setMaxResults($max);
			
		return $qb->getQuery()->getResult();
				
	}
	
	public function numberAllVisibleAndActiveSurveys()
	{									
		return count($this->findAllVisibleAndActiveSurveys());	
	}
	
	
}

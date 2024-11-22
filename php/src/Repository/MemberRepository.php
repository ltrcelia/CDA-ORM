<?php

namespace php\Repository;

use Doctrine\ORM\EntityRepository;

class MemberRepository extends EntityRepository
{
    public function findCommentByCount($minComments = 0)
    {
        return $this->createQueryBuilder('m')
            ->select('m as member', 'c as comment_count')
            ->leftjoin('m.comment', 'c')
            ->where('c.comment_count >= :min_comment')
            ->setParameter('min_comments', $minComments)
            ->groupBy('m.id')
            ->orderBy('comment_count', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }
}

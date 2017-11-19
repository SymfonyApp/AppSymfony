<?php

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle;
use AppBundle\Entity\Post;
use AppBundle\Entity\User;

class PostFixtures extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
        foreach ($this->getData() as $data) {
            $user = $this->getPost($data);
 
            $this->addReference($data['reference'], $user);
 
            $manager->persist($user);
        }
 
        $manager->flush();
	}
	public function getPost( array $data)
	{
		return (new Post())
			->setTitle($data['title'])
			->setContent($data['content'])
			->setUserId($this->getReference($data['user']));
	}
	public function getData()
	{
		return
		[
			[
				'reference'=>'NguyenMinhThuong',
				'title'=>'nguyenminhthuong',
				'content'=>'suphamtinB',
				'user'=>'thuonghtml',

			],
			[
				'reference'=>'NguyenMinhThuong1',
				'title'=>'nguyenminhthuong1',
				'content'=>'suphamtinB1',
				'user'=>'thuonghtml1',

				
			]
		];
	}
	public function getOrder()
    {
        return 2;
    }
}
<?php

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle;
use AppBundle\Entity\User;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
        foreach ($this->getData() as $data) {
            $user = $this->getUser($data);
 
            $this->addReference($data['reference'], $user);
 
            $manager->persist($user);
        }
 
        $manager->flush();
	}
	public function getUser( array $data)
	{
		return (new User())
			->setUsername($data['username'])
			->setPassword($data['password']);
	}
	public function getData()
	{
		return
		[
			[
				'reference'=>'thuonghtml',
				'username'=>'thuonghtml',
				'password'=>password_hash('12345',PASSWORD_DEFAULT,['cost'=>12]),

			],
			[
				'reference'=>'thuonghtml1',
				'username'=>'thuonghtml1',
				'password'=>password_hash('12345',PASSWORD_DEFAULT,['cost'=>12]),
				
			]
		];
	}
	public function getOrder()
    {
        return 1;
    }
}
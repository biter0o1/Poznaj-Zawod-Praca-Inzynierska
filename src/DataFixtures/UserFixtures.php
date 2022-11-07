<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;

    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('user@user.pl');
        $user->setUsername('user');
        $user->setRoles(['ROLE_USER']);
        $user->isVerified(1);
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'user'
        ));
        $manager->persist($user);

        $admin = new User();
        $admin->setEmail('admin@admin.pl');
        $admin->setUsername('admin');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword(
            $admin,
            'admin'
        ));
        $manager->persist($admin);

        $manager->flush();
    }
}

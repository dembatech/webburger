<?php


namespace App\DataPersister;


use App\Entity\User;

use Doctrine\ORM\EntityManagerInterface;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserPersister implements DataPersisterInterface
{

    private UserPasswordHasherInterface $hashedPass;

    private EntityManagerInterface $manager;

    public function __construct( UserPasswordHasherInterface $hashedPass, EntityManagerInterface $manager)
    {

        $this->manager = $manager;

        $this->hashedPass = $hashedPass;
    }
    
    public function supports($data): bool
    {
        
        return $data instanceof User;
    }

    public function persist($data)
    {

        //dd($data->getPassword());

       // dd($hashedPass->hashPassword($data,$data->getPassword()));

       //dd(password_hash($data->getPassword(), PASSWORD_DEFAULT));

        $data->setPassword(password_hash($data->getPassword(), PASSWORD_DEFAULT));

        //$data->eraseCredentials();

        //$myPass=$this->hashedPass->hashPassword($data,$data->getPassword());

        $this->manager->persist($data);

        $this->manager->flush();

        

       
    
    }

    public function remove($data, array $context = [])
    {
        // call your persistence layer to delete $data
    }
}

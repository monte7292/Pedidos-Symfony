<?php

namespace App\Controller\Admin;

use App\Entity\Usuario;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;

#[IsGranted('ROLE_ADMIN')]
class UsuarioCrudController extends AbstractCrudController
{
    
    /**
     * @var UserPasswordHasherInterface
     */
    private $userPasswordHasher;

    /**
     * Inicializamos el PasswordHasher
     * @param UserPasswordHasherInterface $userPasswordHasher
     */
    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }
    
    
    public static function getEntityFqcn(): string
    {
        return Usuario::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    public function updateEntity(EntityManagerInterface $entityManager, $entity): void
    {
        $event = new BeforeEntityPersistedEvent($entity);
        $this->hasPassWord($event);
        parent::updateEntity($entityManager, $entity);
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entity): void
    {
        $event = new BeforeEntityPersistedEvent($entity);
        $this->hasPassWord($event);
        parent::persistEntity($entityManager, $entity);
    }


    /**
     * Función que posibilita el poder encryptar las password de los usuarios.
     * @param BeforeEntityPersistedEvent $event
     * @return void
     */
    public function hasPassWord(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if(!$entity instanceof Usuario){
            return;
        }
        $entity->setPassword($this->userPasswordHasher->hashPassword($entity,$entity->getPlainPassword()));
    }

}

<?php
declare(strict_types=1);
namespace App\Provider;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\UserRepository;
use Sylius\Component\Resource\Model\ResourceInterface;
final class VisiteurEnregistreProvider
{
    /** @var UserRepository */
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getAbonnement(ResourceInterface $email): object
    {
        return $this->userRepository->findOneByEmail($email);
    }
}
<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\ShopUser as BaseShopUser;

/**
 * @MappedSuperclass
 * @Table(name="sylius_shop_user")
 */
class ShopUser extends BaseShopUser
{

		/** @ORM\Column(type="string", columnDefinition="ENUM('Classique', 'Jeune', 'Premium')", nullable=true) */
		private $abonnement;

		public function getAbonnement(): ?string
		{
			return $this->abonnement;
		}
	
		public function setAbonnement(string $abonnement): void
		{
			$this->abonnement = $abonnement;
		}
}

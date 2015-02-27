<?php

namespace Application\Entity;

use Doctrine\ORM\EntityRepository;

class CategoriaRepository extends EntityRepository
{
	//respository se guarda somente consulta.
	
	public function buscaPorNome()
	{
		//exemplo;
	}
	
}
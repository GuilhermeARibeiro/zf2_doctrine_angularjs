<?php

namespace Application\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Entity\Produto;

class LoadProduto extends AbstractFixture implements OrderedFixtureInterface
{

	/**
	 * Load data fixtures with the passed EntityManager
	 *
	 * @param  ObjectManager $manager
	 */
	public function load(ObjectManager $manager)
	{
		$categoriaLivros = $this->getReference('categoria-livros');
		$categoriaComputadores = $this->getReference('categoria-computadores');

		$produto = new Produto();
		$produto->setNome('Orientacao a objetos')
				->setCategoria($categoriaLivros)
				->setDescricao('Descricao do livro');

		$manager->persist($produto);

		$produto = new Produto();
		$produto->setNome('Macbook Pro')
				->setCategoria($categoriaComputadores)
				->setDescricao('Descricao do computadores');

		$manager->persist($produto);


		$manager->flush();

	}

	/**
	 * [getOrder description]
	 * @return integer
	 */
	function getOrder()
	{
		return 2;
	}
}
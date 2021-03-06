<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="produtos")
 */
class Produto
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Application\Entity\Categoria")
	 * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
	 */
	private $categoria;

	/**
	 * @ORM\Column(type="string")
	 */
	private $nome;

	/**
	 * @ORM\Column(type="string")
	 */
	private $descricao;

	/**
	 *@param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 *@param mixed $categoria
	 */
	public function setCategoria(Categoria $categoria)
	{
		$this->categoria = $categoria;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCategoria()
	{
		return $this->categoria;
	}

	/**
	 *@param mixed $nome
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 *@param mixed $descricao
	 */
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDescricao()
	{
		return $this->descricao;
	}
}
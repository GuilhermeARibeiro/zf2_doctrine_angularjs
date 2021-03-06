<?php

namespace Rest\Controller;

use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;

class CategoriaController extends AbstractRestfulController
{
	
	public function getList()
	{
		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

		$data = $em->getRepository('Application\Entity\Categoria')->findAll();
		
		return $data;
	}

	public function get($id)
	{

		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

		$data = $em->getRepository('Application\Entity\Categoria')->find($id);
		
		return $data;

	}

	public function create($data)
	{
		$serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');
		$nome = $data['nome'];

		$categoria = $serviceCategoria->insert($nome);

		if($categoria){
			return $categoria;
		} else {
			return array('success'=> false);
		}
	}

	//put
	public function update($id, $data)
	{

		$serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');
		$param['id'] = $id;
		$param['nome'] = $data['nome'];

		$categoria = $serviceCategoria->update($param);

		if($categoria){
			return $categoria;
		} else {
			return array('success'=> false);
		}

	}

	public function delete($id)
	{
		$serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');
		$result = $serviceCategoria->delete($id);
		if($result) return $result;
	}
}
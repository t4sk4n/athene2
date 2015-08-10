<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author      Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link        https://github.com/serlo-org/athene2 for the canonical source repository
 */
namespace Entity\Manager;

interface EntityManagerAwareInterface
{

    /**
     * @return EntityManagerInterface $entityManager
     */
    public function getEntityManager();

    /**
     * @param EntityManagerInterface $entityManager
     * @return self
     */
    public function setEntityManager(\Entity\Manager\EntityManagerInterface $entityManager);
}

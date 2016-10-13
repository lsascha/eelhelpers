<?php
namespace Lsascha\Eel\Helper;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Eel\ProtectedContextAwareInterface;

use TYPO3\Flow\Property\PropertyMapper;

class PropertyHelper implements ProtectedContextAwareInterface {


    /**
     * @Flow\Inject
     * @var PropertyMapper
     */
    protected $propertyMapper;


    /**
     * map identifier to object of class
     *
     * @param $identifier string
     * @param $className string
     * @return mixed
     */
    public function map($identifier, $className) {
        return $this->propertyMapper->convert($identifier, $className);
    }

    /**
     * All methods are considered safe, i.e. can be executed from within Eel
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName) {
            return TRUE;
    }

}
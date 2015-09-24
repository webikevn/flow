<?php
namespace TYPO3\Flow\Tests\Functional\Object\Fixtures;

/*                                                                        *
 * This script belongs to the Flow framework.                             *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the MIT license.                                          *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * A class of scope singleton
 *
 * @Flow\Scope("singleton")
 */
class SingletonClassC
{
    /**
     * @var string
     */
    public $requiredArgument;

    /**
     * @var \TYPO3\Flow\Tests\Functional\Object\Fixtures\InterfaceA
     */
    public $interfaceAImplementation;

    /**
     * @var string
     */
    public $settingsArgument;

    /**
     * @var string
     */
    protected $protectedStringPropertySetViaObjectsYaml = '';

    /**
     * @var float
     */
    protected $protectedFloatPropertySetViaObjectsYaml = 0.5;

    /**
     * @var array
     */
    protected $protectedArrayPropertySetViaObjectsYaml = array();

    /**
     * @var boolean
     */
    protected $protectedBooleanTruePropertySetViaObjectsYaml;

    /**
     * @var boolean
     */
    protected $protectedBooleanFalsePropertySetViaObjectsYaml;

    /**
     * @var array
     */
    protected $protectedArrayPropertyWithSetterSetViaObjectsYaml = array('has' => 'some default value');

    /**
     * @param string $requiredArgument
     * @param \TYPO3\Flow\Tests\Functional\Object\Fixtures\InterfaceA $interfaceAImplementation
     * @param string $settingsArgument
     * @param boolean $optionalArgument
     * @param integer $alsoOptionalArgument
     * @param array $thirdOptionalArgument
     * @param string $fourthOptionalArgument
     */
    public function __construct($requiredArgument, InterfaceA $interfaceAImplementation, $settingsArgument, $optionalArgument = false, $alsoOptionalArgument = null, $thirdOptionalArgument = array(), $fourthOptionalArgument = '')
    {
        $this->requiredArgument = $requiredArgument;
        $this->interfaceAImplementation = $interfaceAImplementation;
        $this->settingsArgument = $settingsArgument;
        $this->optionalArgument = $optionalArgument;
        $this->thirdOptionalArgument = $thirdOptionalArgument;
    }

    /**
     * @return string
     */
    public function getProtectedStringPropertySetViaObjectsYaml()
    {
        return $this->protectedStringPropertySetViaObjectsYaml;
    }

    /**
     * @return array
     */
    public function getProtectedArrayPropertySetViaObjectsYaml()
    {
        return $this->protectedArrayPropertySetViaObjectsYaml;
    }

    /**
     * @return float
     */
    public function getProtectedFloatPropertySetViaObjectsYaml()
    {
        return $this->protectedFloatPropertySetViaObjectsYaml;
    }

    /**
     * @return boolean
     */
    public function getProtectedBooleanTruePropertySetViaObjectsYaml()
    {
        return $this->protectedBooleanTruePropertySetViaObjectsYaml;
    }

    /**
     * @return boolean
     */
    public function getProtectedBooleanFalsePropertySetViaObjectsYaml()
    {
        return $this->protectedBooleanFalsePropertySetViaObjectsYaml;
    }

    /**
     * @return array
     */
    public function getProtectedArrayPropertyWithSetterSetViaObjectsYaml()
    {
        return $this->protectedArrayPropertyWithSetterSetViaObjectsYaml;
    }

    /**
     * @param array $protectedArrayPropertyWithSetterSetViaObjectsYaml
     */
    public function setProtectedArrayPropertyWithSetterSetViaObjectsYaml($protectedArrayPropertyWithSetterSetViaObjectsYaml)
    {
        $this->protectedArrayPropertyWithSetterSetViaObjectsYaml = array_merge($this->protectedArrayPropertyWithSetterSetViaObjectsYaml, $protectedArrayPropertyWithSetterSetViaObjectsYaml);
    }
}

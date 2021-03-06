<?php

/**
 * This example shows how to force a certain class as substitution of an interface.
 * The class must implement that interface.
 */

require dirname(__FILE__) .'/../../vendor/autoload.php';

$rule = array('substitutions' => array('Saft\Rdf\Node' => array('instance' => 'Saft\Rdf\NamedNodeImpl')));

$dice = new \Dice\Dice();
$dice->addRule('Saft\Rdf\NamedNodeImpl', $rule);

$namedNode = $dice->create('Saft\Rdf\NamedNodeImpl', array('http://uri'));

echo $namedNode->getUri() . PHP_EOL;

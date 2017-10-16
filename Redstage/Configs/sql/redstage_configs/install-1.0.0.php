<?php
$installer = $this;

$installer->startSetup();

// Example: Changing value of a field "Yes" or "No"
$installer->setConfigData('section/group/field','0');

$installer->endSetup();
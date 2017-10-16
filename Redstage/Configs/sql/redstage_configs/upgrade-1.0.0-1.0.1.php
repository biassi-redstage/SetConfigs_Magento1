<?php
$installer = $this;

$installer->startSetup();

$html = 'Code HTML';

$installer->updateExistingCmsBlock('block_id', 'Title of Block', $html);

$installer->endSetup();
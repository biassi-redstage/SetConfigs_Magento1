<?php
$installer = $this;

$installer->startSetup();

$htmlHomePage = 'code HTML';

$installer->updateCmsPage('page_id', $htmlHomePage);

$installer->endSetup();
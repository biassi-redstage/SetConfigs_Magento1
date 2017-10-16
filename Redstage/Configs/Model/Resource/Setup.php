<?php
Class Redstage_Config_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    public function updateCmsPage($identifier, $html) 
    {
        $page = Mage::getModel('cms/page')->getCollection()
            ->addFieldToFilter('identifier', $identifier)
            ->load();

        if(count($page) === 1) {
            $_page = array_shift($page->getData());
            $loadedPage = Mage::getModel('cms/page')->load($_page['page_id']);

            $loadedPage->setContent($html);
            $loadedPage->save();
        }
    }

    public function updateExistingCmsBlock($identifier, $title, $html, $disable = false)
    {
        $block = Mage::getModel('cms/block')->getCollection()
            ->addFieldToFilter('identifier', $identifier)
            ->addFieldToFilter('title', $title)
            ->load();

        if(count($block) === 1) {
            $_block         = array_shift($block->getData());
            $loadedBlock    = Mage::getModel('cms/block')->load($_block['block_id']);

            if($disable) {
                $loadedBlock->setIsActive(0);
            } else {
                $loadedBlock->setContent($html);
            }
            $loadedBlock->save();
        }
        return $this;
    }
}
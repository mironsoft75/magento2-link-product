<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagePal\LinkProduct\Model\Product;

/**
 * Class Link
 * @package MagePal\LinkProduct\Model\Product
 */
class Link extends \Magento\Catalog\Model\Product\Link
{
    const LINK_TYPE_ACCESSORY = 7;

    /**
     * @return $this
     */
    public function useAccessoryLinks()
    {
        $this->setLinkTypeId(self::LINK_TYPE_ACCESSORY);
        return $this;
    }
}

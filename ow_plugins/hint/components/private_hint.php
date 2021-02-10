<?php

/**
 * Copyright (c) 2012, Sergey Kambalin
 * All rights reserved.

 * ATTENTION: This commercial software is intended for use with Oxwall Free Community Software http://www.oxwall.org/
 * and is licensed under Oxwall Store Commercial License.
 * Full text of this license can be found at http://www.oxwall.org/store/oscl
 */

/**
 *
 * @author Sergey Kambalin <greyexpert@gmail.com>
 * @package hint.components
 */
class HINT_CMP_PrivateHint extends HINT_CMP_HintBase
{
    public function __construct($entityType, $entityId, array $avatar, $content )
    {
        parent::__construct($entityType, $entityId);
        
        $this->assign("avatar", $avatar);
        $this->assign("content", $content);
    }
}
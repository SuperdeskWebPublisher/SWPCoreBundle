<?php

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2016 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2016 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\CoreBundle\Model;

use SWP\Bundle\ContentBundle\Model\Article as BaseArticle;
use SWP\Component\ContentList\Model\ListContentInterface;
use SWP\Component\MultiTenancy\Model\TenantAwareInterface;
use SWP\Component\MultiTenancy\Model\TenantAwareTrait;
use SWP\Component\Rule\Model\RuleSubjectInterface;
use SWP\Component\Storage\Model\PersistableInterface;

class Article extends BaseArticle implements PersistableInterface , TenantAwareInterface, RuleSubjectInterface, ListContentInterface
{
    use TenantAwareTrait;
}

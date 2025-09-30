<?php

namespace Evence\Bundle\SoftDeleteableExtensionBundle\Mapping\Attribute;

use Attribute;

/**
 * onSoftDeleteSuccessor annotation for onSoftDelete behavioral extension.
 *
 * @author Ruben Harms <info@rubenharms.nl>
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class onSoftDeleteSuccessor // extends Annotation
{
}

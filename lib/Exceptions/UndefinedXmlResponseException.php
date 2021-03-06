<?php

namespace Heidelpay\PhpApi\Exceptions;

use Exception;

/**
 * UndefinedXmlResponseException
 *
 * Indicates that a XML response is not present, but asked to be parsed.
 *
 * @license    Use of this software requires acceptance of the License Agreement. See LICENSE file.
 * @copyright  Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link       https://dev.heidelpay.de/php-api
 *
 * @author     Stephano Vogel
 *
 * @package    heidelpay
 * @subpackage php-api
 * @category   php-api
 */
class UndefinedXmlResponseException extends Exception
{
}

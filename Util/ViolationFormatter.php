<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Util;

use FOS\RestBundle\Controller\Annotations\Param;
use FOS\RestBundle\Validator\ViolationFormatter as BaseViolationFormatter;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * @deprecated since 1.7, to be removed in 2.0. Use {@link \FOS\RestBundle\Validator\ViolationFormatter} instead.
 */
class ViolationFormatter implements ViolationFormatterInterface
{
    private $formatter;

    public function __construct()
    {
        @trigger_error('FOS\RestBundle\Util\ViolationFormatter is deprecated since version 1.7. Use FOS\RestBundle\Validator\ViolationFormatter instead.', E_USER_DEPRECATED);
        $this->formatter = new BaseViolationFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function format(Param $param, ConstraintViolationInterface $violation)
    {
        return $this->formatter->format($param, $violation);
    }

    /**
     * {@inheritdoc}
     */
    public function formatList(Param $param, ConstraintViolationListInterface $violationList)
    {
        return $this->formatter->formatList($param, $violationList);
    }
}

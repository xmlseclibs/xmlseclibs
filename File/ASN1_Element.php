<?php

/**
 * ASN.1 Element
 *
 * Bypass normal encoding rules in ASN1::encodeDER()
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 * @version 0.3.0
 * @access  public
 * @package ASN1
 */

class ASN1_Element
{

    /**
     * Raw element value
     *
     * @var String
     * @access private
     */
    var $element;

    /**
     * Constructor
     *
     * @param String $encoded
     * @return ASN1_Element
     * @access public
     */
    function __construct($encoded)
    {
        $this->element = $encoded;
    }

}
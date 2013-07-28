<?php
namespace Hamcrest\Core;

/*
 Copyright (c) 2009 hamcrest.org
 */

/**
 * Is the value equal to another value, as tested by the use of the "=="
 * comparison operator?
 */
class IsEqual extends \Hamcrest\BaseMatcher
{

  private $_item;

  public function __construct($item)
  {
    $this->_item = $item;
  }

  public function matches($arg)
  {
    return (($arg == $this->_item) && ($this->_item == $arg));
  }

  public function describeTo(\Hamcrest\Description $description)
  {
    $description->appendValue($this->_item);
  }

  /**
   * Is the value equal to another value, as tested by the use of the "=="
   * comparison operator?
   *
   * @factory
   */
  public static function equalTo($item)
  {
    return new self($item);
  }

}

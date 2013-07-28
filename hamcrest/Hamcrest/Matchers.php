<?php

/*
 Copyright (c) 2009-2010 hamcrest.org
 */

// This file is generated from the static method @factory doctags.

namespace Hamcrest;

/**
 * A series of static factories for all hamcrest matchers.
 */
class Matchers
{

  /**
   * Evaluates to true only if each $matcher[$i] is satisfied by $array[$i].
   */
  public static function anArray(/* args... */)
  {
    require_once 'Hamcrest/Arrays/IsArray.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Arrays\IsArray', 'anArray'), $args);
  }

  /**
   * Evaluates to true if any item in an array satisfies the given matcher.
   *
   * @param mixed $item as a {@link Hamcrest\Matcher} or a value.
   *
   * @return \Hamcrest\Array\IsArrayContaining
   */
  public static function hasItemInArray($item)
  {
    require_once 'Hamcrest/Arrays/IsArrayContaining.php';

    return Hamcrest\Arrays\IsArrayContaining::hasItemInArray($item);
  }

  /**
   * Evaluates to true if any item in an array satisfies the given matcher.
   *
   * @param mixed $item as a {@link Hamcrest\Matcher} or a value.
   *
   * @return \Hamcrest\Array\IsArrayContaining
   */
  public static function hasValue($item)
  {
    require_once 'Hamcrest/Arrays/IsArrayContaining.php';

    return Hamcrest\Arrays\IsArrayContaining::hasItemInArray($item);
  }

  /**
   * An array with elements that match the given matchers.
   */
  public static function arrayContainingInAnyOrder(/* args... */)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingInAnyOrder.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Arrays\IsArrayContainingInAnyOrder', 'arrayContainingInAnyOrder'), $args);
  }

  /**
   * An array with elements that match the given matchers.
   */
  public static function containsInAnyOrder(/* args... */)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingInAnyOrder.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Arrays\IsArrayContainingInAnyOrder', 'arrayContainingInAnyOrder'), $args);
  }

  /**
   * An array with elements that match the given matchers in the same order.
   */
  public static function arrayContaining(/* args... */)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingInOrder.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Arrays\IsArrayContainingInOrder', 'arrayContaining'), $args);
  }

  /**
   * An array with elements that match the given matchers in the same order.
   */
  public static function contains(/* args... */)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingInOrder.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Arrays\IsArrayContainingInOrder', 'arrayContaining'), $args);
  }

  /**
   * Evaluates to true if any key in an array matches the given matcher.
   *
   * @param mixed $key as a {@link Hamcrest\Matcher} or a value.
   */
  public static function hasKeyInArray($key)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingKey.php';

    return Hamcrest\Arrays\IsArrayContainingKey::hasKeyInArray($key);
  }

  /**
   * Evaluates to true if any key in an array matches the given matcher.
   *
   * @param mixed $key as a {@link Hamcrest\Matcher} or a value.
   */
  public static function hasKey($key)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingKey.php';

    return Hamcrest\Arrays\IsArrayContainingKey::hasKeyInArray($key);
  }

  /**
   * Test if an array has both an key and value in parity with each other.
   */
  public static function hasKeyValuePair($key, $value)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingKeyValuePair.php';

    return Hamcrest\Arrays\IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
  }

  /**
   * Test if an array has both an key and value in parity with each other.
   */
  public static function hasEntry($key, $value)
  {
    require_once 'Hamcrest/Arrays/IsArrayContainingKeyValuePair.php';

    return Hamcrest\Arrays\IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
  }

  /**
   * Does array size satisfy a given matcher?
   *
   * @param int $size as a {@link Hamcrest\Matcher} or a value.
   */
  public static function arrayWithSize($size)
  {
    require_once 'Hamcrest/Arrays/IsArrayWithSize.php';

    return Hamcrest\Arrays\IsArrayWithSize::arrayWithSize($size);
  }

  /**
   * Matches an empty array.
   */
  public static function emptyArray()
  {
    require_once 'Hamcrest/Arrays/IsArrayWithSize.php';

    return Hamcrest\Arrays\IsArrayWithSize::emptyArray();
  }

  /**
   * Matches an empty array.
   */
  public static function nonEmptyArray()
  {
    require_once 'Hamcrest/Arrays/IsArrayWithSize.php';

    return Hamcrest\Arrays\IsArrayWithSize::nonEmptyArray();
  }

  /**
   * Returns true if traversable is empty.
   */
  public static function emptyTraversable()
  {
    require_once 'Hamcrest/Collection/IsEmptyTraversable.php';

    return Hamcrest\Collection\IsEmptyTraversable::emptyTraversable();
  }

  /**
   * Returns true if traversable is not empty.
   */
  public static function nonEmptyTraversable()
  {
    require_once 'Hamcrest/Collection/IsEmptyTraversable.php';

    return Hamcrest\Collection\IsEmptyTraversable::nonEmptyTraversable();
  }

  /**
   * Does traversable size satisfy a given matcher?
   */
  public static function traversableWithSize($size)
  {
    require_once 'Hamcrest/Collection/IsTraversableWithSize.php';

    return Hamcrest\Collection\IsTraversableWithSize::traversableWithSize($size);
  }

  /**
   * Evaluates to true only if ALL of the passed in matchers evaluate to true.
   */
  public static function allOf(/* args... */)
  {
    require_once 'Hamcrest/Core/AllOf.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Core\AllOf', 'allOf'), $args);
  }

  /**
   * Evaluates to true if ANY of the passed in matchers evaluate to true.
   */
  public static function anyOf(/* args... */)
  {
    require_once 'Hamcrest/Core/AnyOf.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Core\AnyOf', 'anyOf'), $args);
  }

  /**
   * Evaluates to false if ANY of the passed in matchers evaluate to true.
   */
  public static function noneOf(/* args... */)
  {
    require_once 'Hamcrest/Core/AnyOf.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Core\AnyOf', 'noneOf'), $args);
  }

  /**
   * This is useful for fluently combining matchers that must both pass.
   * For example:
   * <pre>
   *   assertThat($string, both(containsString("a"))->andAlso(containsString("b")));
   * </pre>
   */
  public static function both(Hamcrest\Matcher $matcher)
  {
    require_once 'Hamcrest/Core/CombinableMatcher.php';

    return Hamcrest\Core\CombinableMatcher::both($matcher);
  }

  /**
   * This is useful for fluently combining matchers where either may pass,
   * for example:
   * <pre>
   *   assertThat($string, either(containsString("a"))->orElse(containsString("b")));
   * </pre>
   */
  public static function either(Hamcrest\Matcher $matcher)
  {
    require_once 'Hamcrest/Core/CombinableMatcher.php';

    return Hamcrest\Core\CombinableMatcher::either($matcher);
  }

  /**
   * Wraps an existing matcher and overrides the description when it fails.
   */
  public static function describedAs(/* args... */)
  {
    require_once 'Hamcrest/Core/DescribedAs.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Core\DescribedAs', 'describedAs'), $args);
  }

  /**
   * @param Hamcrest\Matcher $itemMatcher
   *   A matcher to apply to every element in an array.
   *
   * @return Hamcrest\Core\Every
   *   Evaluates to TRUE for a collection in which every item matches $itemMatcher
   */
  public static function everyItem(Hamcrest\Matcher $itemMatcher)
  {
    require_once 'Hamcrest/Core/Every.php';

    return Hamcrest\Core\Every::everyItem($itemMatcher);
  }

  /**
   * Does array size satisfy a given matcher?
   */
  public static function hasToString($matcher)
  {
    require_once 'Hamcrest/Core/HasToString.php';

    return Hamcrest\Core\HasToString::hasToString($matcher);
  }

  /**
   * Decorates another Matcher, retaining the behavior but allowing tests
   * to be slightly more expressive.
   *
   * For example:  assertThat($cheese, equalTo($smelly))
   *          vs.  assertThat($cheese, is(equalTo($smelly)))
   */
  public static function is($value)
  {
    require_once 'Hamcrest/Core/Is.php';

    return Hamcrest\Core\Is::is($value);
  }

  /**
   * This matcher always evaluates to true.
   *
   * @param string $description A meaningful string used when describing itself.
   */
  public static function anything($description = 'ANYTHING')
  {
    require_once 'Hamcrest/Core/IsAnything.php';

    return Hamcrest\Core\IsAnything::anything($description);
  }

  /**
   * Test if the value is an array containing this matcher.
   *
   * Example:
   * <pre>
   * assertThat(array('a', 'b'), hasItem(equalTo('b')));
   * //Convenience defaults to equalTo()
   * assertThat(array('a', 'b'), hasItem('b'));
   * </pre>
   */
  public static function hasItem(/* args... */)
  {
    require_once 'Hamcrest/Core/IsCollectionContaining.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Core\IsCollectionContaining', 'hasItem'), $args);
  }

  /**
   * Test if the value is an array containing elements that match all of these
   * matchers.
   *
   * Example:
   * <pre>
   * assertThat(array('a', 'b', 'c'), hasItems(equalTo('a'), equalTo('b')));
   * </pre>
   */
  public static function hasItems(/* args... */)
  {
    require_once 'Hamcrest/Core/IsCollectionContaining.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Core\IsCollectionContaining', 'hasItems'), $args);
  }

  /**
   * Is the value equal to another value, as tested by the use of the "=="
   * comparison operator?
   */
  public static function equalTo($item)
  {
    require_once 'Hamcrest/Core/IsEqual.php';

    return Hamcrest\Core\IsEqual::equalTo($item);
  }

  /**
   * Tests of the value is identical to $value as tested by the "===" operator.
   */
  public static function identicalTo($value)
  {
    require_once 'Hamcrest/Core/IsIdentical.php';

    return Hamcrest\Core\IsIdentical::identicalTo($value);
  }

  /**
   * Is the value an instance of a particular type?
   * This version assumes no relationship between the required type and
   * the signature of the method that sets it up, for example in
   * <code>assertThat($anObject, anInstanceOf('Thing'));</code>
   */
  public static function anInstanceOf($theClass)
  {
    require_once 'Hamcrest/Core/IsInstanceOf.php';

    return Hamcrest\Core\IsInstanceOf::anInstanceOf($theClass);
  }

  /**
   * Is the value an instance of a particular type?
   * This version assumes no relationship between the required type and
   * the signature of the method that sets it up, for example in
   * <code>assertThat($anObject, anInstanceOf('Thing'));</code>
   */
  public static function any($theClass)
  {
    require_once 'Hamcrest/Core/IsInstanceOf.php';

    return Hamcrest\Core\IsInstanceOf::anInstanceOf($theClass);
  }

  /**
   * Matches if value does not match $value.
   */
  public static function not($value)
  {
    require_once 'Hamcrest/Core/IsNot.php';

    return Hamcrest\Core\IsNot::not($value);
  }

  /**
   * Matches if value is null.
   */
  public static function nullValue()
  {
    require_once 'Hamcrest/Core/IsNull.php';

    return Hamcrest\Core\IsNull::nullValue();
  }

  /**
   * Matches if value is not null.
   */
  public static function notNullValue()
  {
    require_once 'Hamcrest/Core/IsNull.php';

    return Hamcrest\Core\IsNull::notNullValue();
  }

  /**
   * Creates a new instance of IsSame.
   *
   * @param mixed $object
   *   The predicate evaluates to true only when the argument is
   *   this object.
   */
  public static function sameInstance($object)
  {
    require_once 'Hamcrest/Core/IsSame.php';

    return Hamcrest\Core\IsSame::sameInstance($object);
  }

  /**
   * Is the value a particular built-in type?
   */
  public static function typeOf($theType)
  {
    require_once 'Hamcrest/Core/IsTypeOf.php';

    return Hamcrest\Core\IsTypeOf::typeOf($theType);
  }

  /**
   * Matches if value (class, object, or array) has named $property.
   */
  public static function set($property)
  {
    require_once 'Hamcrest/Core/Set.php';

    return Hamcrest\Core\Set::set($property);
  }

  /**
   * Matches if value (class, object, or array) does not have named $property.
   */
  public static function notSet($property)
  {
    require_once 'Hamcrest/Core/Set.php';

    return Hamcrest\Core\Set::notSet($property);
  }

  /**
   * Matches if value is a number equal to $value within some range of
   * acceptable error $delta.
   */
  public static function closeTo($value, $delta)
  {
    require_once 'Hamcrest/Number/IsCloseTo.php';

    return Hamcrest\Number\IsCloseTo::closeTo($value, $delta);
  }

  /**
   * The value is not > $value, nor < $value.
   */
  public static function comparesEqualTo($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::comparesEqualTo($value);
  }

  /**
   * The value is > $value.
   */
  public static function greaterThan($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::greaterThan($value);
  }

  /**
   * The value is >= $value.
   */
  public static function greaterThanOrEqualTo($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::greaterThanOrEqualTo($value);
  }

  /**
   * The value is >= $value.
   */
  public static function atLeast($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::greaterThanOrEqualTo($value);
  }

  /**
   * The value is < $value.
   */
  public static function lessThan($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::lessThan($value);
  }

  /**
   * The value is <= $value.
   */
  public static function lessThanOrEqualTo($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::lessThanOrEqualTo($value);
  }

  /**
   * The value is <= $value.
   */
  public static function atMost($value)
  {
    require_once 'Hamcrest/Number/OrderingComparison.php';

    return Hamcrest\Number\OrderingComparison::lessThanOrEqualTo($value);
  }

  /**
   * Matches if value is a zero-length string.
   */
  public static function isEmptyString()
  {
    require_once 'Hamcrest/Text/IsEmptyString.php';

    return Hamcrest\Text\IsEmptyString::isEmptyString();
  }

  /**
   * Matches if value is a zero-length string.
   */
  public static function emptyString()
  {
    require_once 'Hamcrest/Text/IsEmptyString.php';

    return Hamcrest\Text\IsEmptyString::isEmptyString();
  }

  /**
   * Matches if value is null or a zero-length string.
   */
  public static function isEmptyOrNullString()
  {
    require_once 'Hamcrest/Text/IsEmptyString.php';

    return Hamcrest\Text\IsEmptyString::isEmptyOrNullString();
  }

  /**
   * Matches if value is null or a zero-length string.
   */
  public static function nullOrEmptyString()
  {
    require_once 'Hamcrest/Text/IsEmptyString.php';

    return Hamcrest\Text\IsEmptyString::isEmptyOrNullString();
  }

  /**
   * Matches if value is a non-zero-length string.
   */
  public static function isNonEmptyString()
  {
    require_once 'Hamcrest/Text/IsEmptyString.php';

    return Hamcrest\Text\IsEmptyString::isNonEmptyString();
  }

  /**
   * Matches if value is a non-zero-length string.
   */
  public static function nonEmptyString()
  {
    require_once 'Hamcrest/Text/IsEmptyString.php';

    return Hamcrest\Text\IsEmptyString::isNonEmptyString();
  }

  /**
   * Matches if value is a string equal to $string, regardless of the case.
   */
  public static function equalToIgnoringCase($string)
  {
    require_once 'Hamcrest/Text/IsEqualIgnoringCase.php';

    return Hamcrest\Text\IsEqualIgnoringCase::equalToIgnoringCase($string);
  }

  /**
   * Matches if value is a string equal to $string, regardless of whitespace.
   */
  public static function equalToIgnoringWhiteSpace($string)
  {
    require_once 'Hamcrest/Text/IsEqualIgnoringWhiteSpace.php';

    return Hamcrest\Text\IsEqualIgnoringWhiteSpace::equalToIgnoringWhiteSpace($string);
  }

  /**
   * Matches if value is a string that matches regular expression $pattern.
   */
  public static function matchesPattern($pattern)
  {
    require_once 'Hamcrest/Text/MatchesPattern.php';

    return Hamcrest\Text\MatchesPattern::matchesPattern($pattern);
  }

  /**
   * Matches if value is a string that contains $substring.
   */
  public static function containsString($substring)
  {
    require_once 'Hamcrest/Text/StringContains.php';

    return Hamcrest\Text\StringContains::containsString($substring);
  }

  /**
   * Matches if value is a string that contains $substring regardless of the case.
   */
  public static function containsStringIgnoringCase($substring)
  {
    require_once 'Hamcrest/Text/StringContainsIgnoringCase.php';

    return Hamcrest\Text\StringContainsIgnoringCase::containsStringIgnoringCase($substring);
  }

  /**
   * Matches if value contains $substrings in a constrained order.
   */
  public static function stringContainsInOrder(/* args... */)
  {
    require_once 'Hamcrest/Text/StringContainsInOrder.php';
    $args = func_get_args();

    return call_user_func_array(array('Hamcrest\Text\StringContainsInOrder', 'stringContainsInOrder'), $args);
  }

  /**
   * Matches if value is a string that ends with $substring.
   */
  public static function endsWith($substring)
  {
    require_once 'Hamcrest/Text/StringEndsWith.php';

    return Hamcrest\Text\StringEndsWith::endsWith($substring);
  }

  /**
   * Matches if value is a string that starts with $substring.
   */
  public static function startsWith($substring)
  {
    require_once 'Hamcrest/Text/StringStartsWith.php';

    return Hamcrest\Text\StringStartsWith::startsWith($substring);
  }

  /**
   * Is the value an array?
   */
  public static function arrayValue()
  {
    require_once 'Hamcrest/Type/IsArray.php';

    return Hamcrest\Type\IsArray::arrayValue();
  }

  /**
   * Is the value a boolean?
   */
  public static function booleanValue()
  {
    require_once 'Hamcrest/Type/IsBoolean.php';

    return Hamcrest\Type\IsBoolean::booleanValue();
  }

  /**
   * Is the value a boolean?
   */
  public static function boolValue()
  {
    require_once 'Hamcrest/Type/IsBoolean.php';

    return Hamcrest\Type\IsBoolean::booleanValue();
  }

  /**
   * Is the value callable?
   */
  public static function callableValue()
  {
    require_once 'Hamcrest/Type/IsCallable.php';

    return Hamcrest\Type\IsCallable::callableValue();
  }

  /**
   * Is the value a float/double?
   */
  public static function doubleValue()
  {
    require_once 'Hamcrest/Type/IsDouble.php';

    return Hamcrest\Type\IsDouble::doubleValue();
  }

  /**
   * Is the value a float/double?
   */
  public static function floatValue()
  {
    require_once 'Hamcrest/Type/IsDouble.php';

    return Hamcrest\Type\IsDouble::doubleValue();
  }

  /**
   * Is the value an integer?
   */
  public static function integerValue()
  {
    require_once 'Hamcrest/Type/IsInteger.php';

    return Hamcrest\Type\IsInteger::integerValue();
  }

  /**
   * Is the value an integer?
   */
  public static function intValue()
  {
    require_once 'Hamcrest/Type/IsInteger.php';

    return Hamcrest\Type\IsInteger::integerValue();
  }

  /**
   * Is the value a numeric?
   */
  public static function numericValue()
  {
    require_once 'Hamcrest/Type/IsNumeric.php';

    return Hamcrest\Type\IsNumeric::numericValue();
  }

  /**
   * Is the value an object?
   */
  public static function objectValue()
  {
    require_once 'Hamcrest/Type/IsObject.php';

    return Hamcrest\Type\IsObject::objectValue();
  }

  /**
   * Is the value an object?
   */
  public static function anObject()
  {
    require_once 'Hamcrest/Type/IsObject.php';

    return Hamcrest\Type\IsObject::objectValue();
  }

  /**
   * Is the value a resource?
   */
  public static function resourceValue()
  {
    require_once 'Hamcrest/Type/IsResource.php';

    return Hamcrest\Type\IsResource::resourceValue();
  }

  /**
   * Is the value a scalar (boolean, integer, double, or string)?
   */
  public static function scalarValue()
  {
    require_once 'Hamcrest/Type/IsScalar.php';

    return Hamcrest\Type\IsScalar::scalarValue();
  }

  /**
   * Is the value a string?
   */
  public static function stringValue()
  {
    require_once 'Hamcrest/Type/IsString.php';

    return Hamcrest\Type\IsString::stringValue();
  }

  /**
   * Wraps <code>$matcher</code> with {@link Hamcrest\Core\IsEqual)
   * if it's not a matcher and the XPath in <code>count()</code>
   * if it's an integer.
   */
  public static function hasXPath($xpath, $matcher = null)
  {
    require_once 'Hamcrest/Xml/HasXPath.php';

    return Hamcrest\Xml\HasXPath::hasXPath($xpath, $matcher);
  }

}

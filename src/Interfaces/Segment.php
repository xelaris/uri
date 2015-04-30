<?php
/**
* This file is part of the League.url library
*
* @license http://opensource.org/licenses/MIT
* @link https://github.com/thephpleague/url/
* @version 4.0.0
* @package League.url
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace League\Url\Interfaces;

use Countable;
use IteratorAggregate;

/**
 * An interface for URL Query component
 *
 * @package  League.url
 * @since  4.0.0
 */
interface Segment extends Component, Countable, IteratorAggregate
{
    /**
     * Return an array representation of the Segment
     *
     * @return array
     */
    public function toArray();

    /**
     * Return the component keys. If a value is specified
     * only the key for that value are returned
     *
     * @param null|string $data
     *
     * @return array
     */
    public function offsets($data = null);

    /**
     * Tell whether the given offset exists in the Segment object
     *
     * @param int $offset
     *
     * @return bool
     */
    public function hasOffset($offset);

    /**
     * Append new data at the end of the component
     *
     * @param string $value
     *
     * @return static
     */
    public function appendWith($value);

    /**
     * Prepend new data at the beginning of the component
     *
     * @param string $value
     *
     * @return static
     */
    public function prependWith($value);

    /**
     * Replace data from the segment and return a new segment
     *
     * @param string $value
     * @param int    $offset
     *
     * @return static
     */
    public function replaceWith($value, $offset);

    /**
     * Remove the data corresponding to the offset
     * from the object and return a new segment
     *
     * @param  array $value
     *
     * @return static
     */
    public function without(array $offsets = []);
}

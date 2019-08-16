<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 21:37
 */

declare(strict_types = 1);

namespace Patterns\StaticFactory;

/**
 * Note1: Remember, static means global state which is evil because it can't be mocked for tests
 * Note2: Cannot be subclassed or mock-upped or have multiple different instances.
 */
final class StaticFactory
{
    public static $mapping
        = [
            'number' => 'FormatNumber',
            'string' => 'FormatString',
        ];

    /**
     * @param string $type
     *
     * @return FormatterInterface
     */
    public static function factory(string $type) : FormatterInterface
    {
        if(!isset(self::$mapping[$type])) {
            throw new \InvalidArgumentException('Unknown format: '.$type);
        }

        $className = __NAMESPACE__.'\\'.self::$mapping[$type];

        return new $className();
    }
}
<?php

namespace Symbiote\DataChange\Tests;

use SilverStripe\ORM\DataObject;
use Symbiote\DataChange\Extension\ChangeRecordable;
use SilverStripe\Dev\TestOnly;

/**
 *
 *
 * @author marcus
 */
class TestTrackedObject extends DataObject implements TestOnly
{
    private static $table_name = 'TestTrackedObject';

    private static $db = [
        'Title'     => 'Varchar',
    ];

    private static $many_many = [
        'Kids'      => TestTrackedChild::class,
    ];

    private static $extensions = [
        ChangeRecordable::class,
    ];
}

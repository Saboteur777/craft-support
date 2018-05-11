<?php
/**
 * Support plugin for Craft CMS 3.x
 *
 * Simple support system for tracking, prioritising and solving customer support tickets.
 *
 * @link      https://github.com/lukeyouell
 * @copyright Copyright (c) 2018 Luke Youell
 */

namespace lukeyouell\support\services;

use lukeyouell\support\Support;

use Craft;
use craft\base\Component;

class TicketStatusService extends Component
{
    // Static Methods
    // =========================================================================

    public static function getStatuses()
    {
        return [
            [
                'handle' => 'new',
                'name'   => 'New',
                'colour' => 'blue',
            ],
            [
                'handle' => 'in-progress',
                'name'   => 'In Progress',
                'colour' => 'orange',
            ],
            [
                'handle' => 'solved',
                'name'   => 'Solved',
                'colour' => 'green',
            ],
            [
                'handle' => 'closed',
                'name'   => 'Closed',
                'colour' => 'red',
            ],
            [
                'handle' => 'archived',
                'name'   => 'Archived',
                'colour' => 'grey',
            ],
        ];
    }

    public static function getStatusByHandle($handle = null)
    {
        if ($handle) {
            $statuses = self::getStatuses();

            foreach ($statuses as $status) {
                if ($status['handle'] === $handle) {
                    return $status;
                }
            }
        }

        return null;
    }
}
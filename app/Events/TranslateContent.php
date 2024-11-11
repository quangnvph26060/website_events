<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TranslateContent
{
    use Dispatchable, SerializesModels;

    public $table;
    public $recordId;
    public $fields;
    public $targetLocale;

    /**
     * Create a new event instance.
     *
     * @param string $table
     * @param int $recordId
     * @param array $fields
     * @param string $targetLocale
     */
    public function __construct($table, $recordId, array $fields, $targetLocale = 'en')
    {
        $this->table = $table;
        $this->recordId = $recordId;
        $this->fields = $fields;
        $this->targetLocale = $targetLocale;
    }
}

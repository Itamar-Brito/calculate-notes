<?php

namespace Dojo;

class CalculateNotesByWithdrawValueService
{
    private $withdrawValue;
    private $remantValue;

    private $notes = [
        'notes100' => 0, 'notes50' => 0, 'notes20' => 0,
        'notes10' => 0,
    ];

    public function setWithdrawValue($value)
    {
        $this->withdrawValue = $this->remantValue = $value;

        return $this;
    }

    public function calculateNotes(): array
    {
        $noteTypes = NoteTypes::all();
        foreach ($noteTypes as $noteType) {
            $this->calculateByNoteType($noteType);
        }

        return $this->notes;
    }

    public function calculateByNoteType($noteType)
    {
        if (!$this->remantValue) return;

        $notes = $this->remantValue / $noteType;

        $notes = floor($notes);

        $this->remantValue -= ($notes * $noteType);

        $this->notes["notes" . $noteType] = $notes;
    }
}

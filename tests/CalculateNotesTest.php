<?php

namespace Dojo\Tests;

use Dojo\CalculateNotesByWithdrawValueService;
use PHPUnit\Framework\TestCase;

class CalculateNotesTest extends TestCase
{
    public function testCalculateNotesFixedValue()
    {
       $withdraw = 280;

       $calculateService = new CalculateNotesByWithdrawValueService;
        
       $notes = $calculateService
            ->setWithdrawValue($withdraw)
            ->calculateNotes();

        $this->assertEquals(2, $notes['notes100']);
        $this->assertEquals(1, $notes['notes50']);
        $this->assertEquals(1, $notes['notes20']);
        $this->assertEquals(1, $notes['notes10']);
    }

    /**
     * @dataProvider withdrawValuesProvider
     */
    public function testCalculateWithSettedValues($withdrawValue, $notas100, $notas50, $notas20, $notas10)
    {
        $calculateService = new CalculateNotesByWithdrawValueService;

        $notes = $calculateService
             ->setWithdrawValue($withdrawValue)
             ->calculateNotes();
 
        $this->assertEquals($notas100, $notes['notes100']);
        $this->assertEquals($notas50, $notes['notes50']);
        $this->assertEquals($notas20, $notes['notes20']);
        $this->assertEquals($notas10, $notes['notes10']);

    }


    public function withdrawValuesProvider()
    {
        return [
            [280, 2,1,1,1],    
            [180, 1,1,1,1],    
            [10, 0,0,0,1],    
            [430, 4,0,1,1],    
            [660, 6,1,0,1],    
            [1340, 13,0,2,0],    
            [7720, 77,0,1,0],    
        ];
    }



}

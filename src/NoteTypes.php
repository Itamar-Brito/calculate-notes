<?php

namespace Dojo;

class NoteTypes
{
 const NOTE100 = 100;
 const NOTE50 = 50;
 const NOTE20 = 20;
 const NOTE10 = 10;

 public static function all() {
    return [
       self::NOTE100,
       self::NOTE50,
       self::NOTE20,
       self::NOTE10
    ];
}
}

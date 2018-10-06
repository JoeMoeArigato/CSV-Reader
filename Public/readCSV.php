<?php


    class record {
        public function __construct(Array $fieldNames = null, $values = null )
        {
            $record = array_combine($fieldNames, $values);
            foreach ($record as $property => $value) {
                $this->createProperty($property, $value);
            }
        }
        public function returnArray() {
            $array = (array) $this;
            return $array;
        }
        public function createProperty($name = 'first', $value = 'keith') {
            $this->{$name} = $value;
        }
    }

    class recordFactory
    {
        public static function create(Array $fieldNames = null, Array $values = null)
        {
            $record = new record($fieldNames, $values);
            return $record;
        }
    }



?>
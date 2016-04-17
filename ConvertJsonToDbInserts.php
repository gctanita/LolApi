<?php

class ConvertJsonToDbInserts
{
    private $decodedJson;
    private $tableNames;

    public function displayHierarchy()
    {
        $this->displayCountsOfChildren($this->decodedJson);
    }

    public function doInserts()
    {
        $this->prepareApiJsonForInsert($this->decodedJson, $this->tableNames);
    }

    private function displayCountsOfChildren($array, $niceDisplay="\t", $deph = 0, $entityID = 0)
    {
        $deph++;
        $numberOfChildren = count($array);
        echo "\n" . $niceDisplay . " length: " . $numberOfChildren;
        if (is_array($array)) {
            foreach ($array as $key => $element) {
                $aux = $entityID + 1;
                echo "\n" . $niceDisplay . "$deph with entityID $entityID => key: " . $key;
                if (is_array($element)) {
                    displayCountsOfChildren($element, $niceDisplay . "\t", $deph, $aux++);
                }
            }
        } else {
            echo "\n$deph with entityID $entityID =>" . $niceDisplay . $array;
        }
    }

    private function prepareApiJsonForInsert($array, $tableNames, $id = 0)
    {
        $parsedArray = [];
        $furtherArrays = [];

        foreach ($array as $key => $element) {
            if (is_array($element)) {
                $furtherArrays[$key] = $element;
            } else {
                $parsedArray[$key] = $element;
            }
        }

        if (count($parsedArray) > 0) {
            createInsert($tableNames[$id], $parsedArray);
        } else {
            echo "\n\t\t\t Did not insert";
        }


        foreach ($furtherArrays as $key => $element) {
            $aux = $id + 1;
            prepareApiJsonForInsert($element, $tableNames, $aux++);
        }
    }

    public function createInsert($tableName, $array)
    {
        $sqlStringBegin = "Insert into " . $tableName . " (";
        $sqlStringEnd = ") VALUES (";
        foreach ($array as $key => $element) {
            $sqlStringBegin = $sqlStringBegin . "`" . $key . "`, ";
            $sqlStringEnd = $sqlStringEnd . "'" . $element . "', ";
        }

        $result = str_replace(", )", ")", ($sqlStringBegin . $sqlStringEnd . ');'));
        echo "\n\t" . $result;
        return $result;
    }
}
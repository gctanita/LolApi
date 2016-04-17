<?php
require_once "singletonDB.php";

class ConvertJsonToDbInserts
{
    private $decodedJson;
    private $tableNames;

    function __construct($rawJson, $tableNames)
    {
        $this->decodedJson = json_decode($rawJson, true);
        $this->tableNames = $tableNames;
    }

    public function displayHierarchy()
    {
        $this->displayCountsOfChildren($this->decodedJson);
    }

    protected function displayCountsOfChildren($array, $niceDisplay = "\t", $deph = 0, $entityID = 0)
    {
        $deph++;
        $numberOfChildren = count($array);
        echo "\n" . $niceDisplay . " length: " . $numberOfChildren;
        if (is_array($array)) {
            foreach ($array as $key => $element) {
                $aux = $entityID + 1;
                echo "\n" . $niceDisplay . "$deph with entityID $entityID => key: " . $key;
                if (is_array($element)) {
                    $this->displayCountsOfChildren($element, $niceDisplay . "\t", $deph, $aux++);
                }
            }
        } else {
            echo "\n$deph with entityID $entityID =>" . $niceDisplay . $array;
        }
    }

    public function doInserts()
    {
        $this->prepareApiJsonForInsert(
            $this->decodedJson,
            $this->tableNames
       );
    }

    protected function prepareApiJsonForInsert($array, $tableNames, $id = 0)
    {
        $parsedArray = [];
        $furtherArrays = [];

        foreach ($array as $key => $element) {
            if (is_array($element)) {
                $furtherArrays[$key] = $element;
            } else {
                if (is_bool($element)) {
                    if ($element) {
                        $parsedArray[$key] = 1;
                    } else {
                        $parsedArray[$key] = 0;
                    }
                } else {
                    $parsedArray[$key] = $element;
                }
            }
        }
        if (array_key_exists("pointer", $tableNames[$id])){
            $pointer = $tableNames[$id]['pointer'];
            $parsedArray[$tableNames[$pointer]["column"]] = $tableNames[$pointer]["value"];
        }

        if (count($parsedArray) > 0) {
            $queryId = $this->createInsert($tableNames[$id]['tablename'], $parsedArray);
            if (array_key_exists("value", $tableNames[$id])){
                if ($tableNames[$id]['value'] == -1) {
                    $tableNames[$id]['value'] = $queryId;
                }
            }
        } else {
            echo "\n\t\t\t Did not insert";
        }


        foreach ($furtherArrays as $key => $element) {
            $aux = $id + 1;
            $this->prepareApiJsonForInsert($element, $tableNames, $aux++);
        }
    }

    public function createInsert($tableName, $array)
    {
        $db = DataBase::getInstance()->getConnection();

        $sqlStringBegin = "Insert into " . $tableName . " (";
        $sqlStringEnd = ") VALUES (";
        $id = 0;
        $values = [];
        foreach ($array as $key => $element) {
            $sqlStringBegin = $sqlStringBegin . "`" . $key . "`, ";
            $sqlStringEnd = $sqlStringEnd . "" . ":fieldValue" . $id . ", ";

            $values[":fieldValue" . $id] = $element;
            $id++;
        }

        $sql = str_replace(", )", ")", ($sqlStringBegin . $sqlStringEnd . ');'));
        $stmt = $db->prepare($sql);
        $stmt->execute($values);
        $lastInsertedID = $db->lastInsertId();

        echo "\n\t Insert done in table $tableName and the id was $lastInsertedID";
        return $lastInsertedID;
    }
}
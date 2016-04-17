<?php
function displayCountsOfChildren($array, $niceDisplay, $deph = 0, $entityID = 0)
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

function prepareApiJsonForInsert($array, $tableNames, $id = 0)
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

function createInsert($tableName, $array)
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

$json = '{
	"games": [{
		"fellowPlayers": [{
			"championId": 157,
			"teamId": 200,
			"summonerId": 55614658
		}, {
			"championId": 236,
			"teamId": 200,
			"summonerId": 42383620
		}],
		"gameType": "MATCHED_GAME",
		"stats": {
			"totalDamageDealtToChampions": 11528,
			"goldEarned": 11708,
			"item2": 3027,
			"item1": 3040,
			"wardPlaced": 10
		},
		"gameId": 1392716455,
		"ipEarned": 68,
		"spell1": 7,
		"teamId": 100,
		"spell2": 14,
		"gameMode": "CLASSIC",
		"mapId": 11,
		"level": 30,
		"invalid": false,
		"subType": "NORMAL",
		"createDate": 1460749964498,
		"championId": 16
	},
	{
		"fellowPlayers": [{
			"championId": 157,
			"teamId": 200,
			"summonerId": 55614658
		}, {
			"championId": 236,
			"teamId": 200,
			"summonerId": 42383620
		}],
		"gameType": "MATCHED_GAME",
		"stats": {
			"totalDamageDealtToChampions": 11528,
			"goldEarned": 11708,
			"item2": 3027,
			"item1": 3040,
			"wardPlaced": 10
		},
		"gameId": 1392716455,
		"ipEarned": 68,
		"spell1": 7,
		"teamId": 100,
		"spell2": 14,
		"gameMode": "CLASSIC",
		"mapId": 11,
		"level": 30,
		"invalid": false,
		"subType": "NORMAL",
		"createDate": 1460749964498,
		"championId": 16
	}]
}';


$decoded = json_decode($json, true);
displayCountsOfChildren($decoded, "\t");
//echo "\n\t" . $decoded["games"][0]["fellowPlayers"][0]["championId"];
//var_dump($decoded);

$tableNames = [ "x", "games", "stats", "fellowPlayers", "stats"];
$tableNames = ["0", "1", "games", "stats", "fellowPlayers", "5", "6", "7"];
prepareApiJsonForInsert($decoded, $tableNames);
	
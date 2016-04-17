<?php
require_once "ConvertJsonToDbInserts.php";

$json = '{
   "games": [
      {
         "fellowPlayers": [
            {
               "championId": 157,
               "teamId": 200,
               "summonerId": 55614658
            },
            {
               "championId": 236,
               "teamId": 200,
               "summonerId": 42383620
            },
            {
               "championId": 24,
               "teamId": 100,
               "summonerId": 48857103
            },
            {
               "championId": 99,
               "teamId": 200,
               "summonerId": 41081581
            },
            {
               "championId": 75,
               "teamId": 200,
               "summonerId": 57952397
            },
            {
               "championId": 25,
               "teamId": 200,
               "summonerId": 44527116
            },
            {
               "championId": 64,
               "teamId": 100,
               "summonerId": 25374313
            },
            {
               "championId": 157,
               "teamId": 100,
               "summonerId": 55226777
            },
            {
               "championId": 26,
               "teamId": 100,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 11528,
            "goldEarned": 11708,
            "item2": 3027,
            "item1": 3040,
            "wardPlaced": 10,
            "totalDamageTaken": 27956,
            "item0": 3116,
            "trueDamageDealtPlayer": 222,
            "physicalDamageDealtPlayer": 18009,
            "trueDamageDealtToChampions": 222,
            "playerRole": 1,
            "totalUnitsHealed": 5,
            "playerPosition": 4,
            "level": 16,
            "magicDamageDealtToChampions": 10047,
            "turretsKilled": 1,
            "magicDamageDealtPlayer": 60293,
            "assists": 11,
            "magicDamageTaken": 12038,
            "numDeaths": 9,
            "totalTimeCrowdControlDealt": 702,
            "largestMultiKill": 1,
            "physicalDamageTaken": 15693,
            "win": false,
            "team": 100,
            "totalDamageDealt": 78524,
            "totalHeal": 22480,
            "item4": 3801,
            "item3": 1011,
            "item6": 3340,
            "item5": 1028,
            "minionsKilled": 93,
            "timePlayed": 2233,
            "physicalDamageDealtToChampions": 1258,
            "championsKilled": 2,
            "trueDamageTaken": 224,
            "goldSpent": 11850
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
         "fellowPlayers": [
            {
               "championId": 25,
               "teamId": 100,
               "summonerId": 55136040
            },
            {
               "championId": 22,
               "teamId": 100,
               "summonerId": 51227087
            },
            {
               "championId": 3,
               "teamId": 200,
               "summonerId": 47848273
            },
            {
               "championId": 41,
               "teamId": 100,
               "summonerId": 47326231
            },
            {
               "championId": 238,
               "teamId": 100,
               "summonerId": 42398124
            },
            {
               "championId": 51,
               "teamId": 200,
               "summonerId": 25374313
            },
            {
               "championId": 10,
               "teamId": 100,
               "summonerId": 57135371
            },
            {
               "championId": 75,
               "teamId": 200,
               "summonerId": 57556705
            },
            {
               "championId": 136,
               "teamId": 200,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 17187,
            "goldEarned": 16863,
            "item2": 3748,
            "item1": 1038,
            "totalDamageTaken": 54430,
            "item0": 3071,
            "trueDamageDealtPlayer": 1410,
            "physicalDamageDealtPlayer": 63090,
            "trueDamageDealtToChampions": 1200,
            "killingSprees": 1,
            "totalUnitsHealed": 1,
            "level": 18,
            "assists": 20,
            "magicDamageTaken": 27993,
            "numDeaths": 16,
            "totalTimeCrowdControlDealt": 20,
            "largestMultiKill": 1,
            "physicalDamageTaken": 24177,
            "win": true,
            "team": 200,
            "totalDamageDealt": 64500,
            "largestKillingSpree": 2,
            "totalHeal": 5184,
            "item4": 1053,
            "item3": 3153,
            "item5": 3065,
            "minionsKilled": 50,
            "timePlayed": 1829,
            "physicalDamageDealtToChampions": 15987,
            "championsKilled": 3,
            "trueDamageTaken": 2259,
            "goldSpent": 16050
         },
         "gameId": 1392695889,
         "ipEarned": 84,
         "spell1": 31,
         "teamId": 200,
         "spell2": 30,
         "gameMode": "KINGPORO",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "KING_PORO",
         "createDate": 1460746726871,
         "championId": 420
      },
      {
         "fellowPlayers": [
            {
               "championId": 12,
               "teamId": 100,
               "summonerId": 32514543
            },
            {
               "championId": 143,
               "teamId": 100,
               "summonerId": 52718394
            },
            {
               "championId": 245,
               "teamId": 100,
               "summonerId": 45205789
            },
            {
               "championId": 55,
               "teamId": 200,
               "summonerId": 42944011
            },
            {
               "championId": 59,
               "teamId": 100,
               "summonerId": 47297783
            },
            {
               "championId": 74,
               "teamId": 100,
               "summonerId": 42203303
            },
            {
               "championId": 161,
               "teamId": 200,
               "summonerId": 25374313
            },
            {
               "championId": 5,
               "teamId": 200,
               "summonerId": 57556705
            },
            {
               "championId": 110,
               "teamId": 200,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 20878,
            "goldEarned": 15580,
            "item2": 3072,
            "item1": 3508,
            "totalDamageTaken": 32577,
            "item0": 3031,
            "trueDamageDealtPlayer": 950,
            "physicalDamageDealtPlayer": 64240,
            "trueDamageDealtToChampions": 850,
            "totalUnitsHealed": 1,
            "largestCriticalStrike": 1151,
            "level": 18,
            "magicDamageDealtToChampions": 2045,
            "turretsKilled": 2,
            "magicDamageDealtPlayer": 7721,
            "assists": 19,
            "magicDamageTaken": 24376,
            "numDeaths": 18,
            "totalTimeCrowdControlDealt": 782,
            "largestMultiKill": 1,
            "physicalDamageTaken": 6206,
            "win": false,
            "team": 200,
            "totalDamageDealt": 72911,
            "totalHeal": 1002,
            "item4": 1043,
            "item3": 3153,
            "minionsKilled": 50,
            "timePlayed": 1704,
            "physicalDamageDealtToChampions": 17982,
            "championsKilled": 3,
            "trueDamageTaken": 1995,
            "goldSpent": 15400
         },
         "gameId": 1392679011,
         "ipEarned": 53,
         "spell1": 31,
         "teamId": 200,
         "spell2": 30,
         "gameMode": "KINGPORO",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "KING_PORO",
         "createDate": 1460744617171,
         "championId": 202
      },
      {
         "fellowPlayers": [
            {
               "championId": 45,
               "teamId": 200,
               "summonerId": 56797783
            },
            {
               "championId": 107,
               "teamId": 100,
               "summonerId": 52155694
            },
            {
               "championId": 420,
               "teamId": 200,
               "summonerId": 34557637
            },
            {
               "championId": 53,
               "teamId": 200,
               "summonerId": 42017867
            },
            {
               "championId": 33,
               "teamId": 200,
               "summonerId": 55636053
            },
            {
               "championId": 157,
               "teamId": 100,
               "summonerId": 38503957
            },
            {
               "championId": 76,
               "teamId": 200,
               "summonerId": 32959135
            },
            {
               "championId": 136,
               "teamId": 100,
               "summonerId": 49679435
            },
            {
               "championId": 121,
               "teamId": 100,
               "summonerId": 52175639
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 36907,
            "goldEarned": 16501,
            "item2": 3072,
            "item1": 3748,
            "totalDamageTaken": 47137,
            "item0": 3071,
            "trueDamageDealtPlayer": 1946,
            "physicalDamageDealtPlayer": 78225,
            "trueDamageDealtToChampions": 1266,
            "killingSprees": 2,
            "totalUnitsHealed": 1,
            "level": 18,
            "doubleKills": 1,
            "assists": 33,
            "magicDamageTaken": 25787,
            "numDeaths": 15,
            "totalTimeCrowdControlDealt": 10,
            "largestMultiKill": 2,
            "physicalDamageTaken": 18483,
            "team": 100,
            "win": true,
            "totalDamageDealt": 80171,
            "largestKillingSpree": 4,
            "totalHeal": 5823,
            "item4": 3052,
            "item3": 3812,
            "item5": 1036,
            "minionsKilled": 58,
            "timePlayed": 1580,
            "wardKilled": 8,
            "physicalDamageDealtToChampions": 35641,
            "championsKilled": 9,
            "trueDamageTaken": 2865,
            "goldSpent": 16000
         },
         "gameId": 1392630198,
         "ipEarned": 225,
         "spell1": 31,
         "teamId": 100,
         "spell2": 30,
         "gameMode": "KINGPORO",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "KING_PORO",
         "createDate": 1460741926453,
         "championId": 420
      },
      {
         "fellowPlayers": [
            {
               "championId": 25,
               "teamId": 200,
               "summonerId": 41780879
            },
            {
               "championId": 12,
               "teamId": 100,
               "summonerId": 58513990
            },
            {
               "championId": 89,
               "teamId": 200,
               "summonerId": 26962740
            },
            {
               "championId": 22,
               "teamId": 200,
               "summonerId": 35286397
            },
            {
               "championId": 45,
               "teamId": 200,
               "summonerId": 41810742
            },
            {
               "championId": 1,
               "teamId": 100,
               "summonerId": 57234622
            },
            {
               "championId": 136,
               "teamId": 200,
               "summonerId": 25507586
            },
            {
               "championId": 201,
               "teamId": 100,
               "summonerId": 52397691
            },
            {
               "championId": 51,
               "teamId": 100,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 3671,
            "goldEarned": 6875,
            "item2": 1028,
            "item1": 3065,
            "totalDamageTaken": 18474,
            "item0": 3068,
            "trueDamageDealtPlayer": 254,
            "physicalDamageDealtPlayer": 3849,
            "trueDamageDealtToChampions": 254,
            "totalUnitsHealed": 2,
            "level": 12,
            "magicDamageDealtPlayer": 9193,
            "magicDamageDealtToChampions": 2718,
            "assists": 2,
            "magicDamageTaken": 12275,
            "numDeaths": 7,
            "totalTimeCrowdControlDealt": 39,
            "physicalDamageTaken": 6198,
            "win": false,
            "team": 100,
            "totalDamageDealt": 13296,
            "totalHeal": 2977,
            "item3": 1027,
            "item6": 2052,
            "minionsKilled": 27,
            "timePlayed": 956,
            "physicalDamageDealtToChampions": 698,
            "goldSpent": 6400
         },
         "gameId": 1392072434,
         "ipEarned": 35,
         "spell1": 7,
         "teamId": 100,
         "spell2": 14,
         "gameMode": "ARAM",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "ARAM_UNRANKED_5x5",
         "createDate": 1460667237670,
         "championId": 223
      },
      {
         "fellowPlayers": [
            {
               "championId": 86,
               "teamId": 100,
               "summonerId": 44183452
            },
            {
               "championId": 122,
               "teamId": 200,
               "summonerId": 41405960
            },
            {
               "championId": 40,
               "teamId": 100,
               "summonerId": 43429331
            },
            {
               "championId": 5,
               "teamId": 200,
               "summonerId": 49506849
            },
            {
               "championId": 63,
               "teamId": 100,
               "summonerId": 57676939
            },
            {
               "championId": 126,
               "teamId": 200,
               "summonerId": 20497121
            },
            {
               "championId": 9,
               "teamId": 100,
               "summonerId": 57215335
            },
            {
               "championId": 82,
               "teamId": 200,
               "summonerId": 49679435
            },
            {
               "championId": 10,
               "teamId": 100,
               "summonerId": 30466228
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 7744,
            "goldEarned": 7570,
            "item1": 3285,
            "totalDamageTaken": 16828,
            "item0": 3027,
            "trueDamageDealtPlayer": 500,
            "physicalDamageDealtPlayer": 3804,
            "trueDamageDealtToChampions": 500,
            "killingSprees": 1,
            "totalUnitsHealed": 3,
            "level": 13,
            "doubleKills": 1,
            "magicDamageDealtToChampions": 6357,
            "magicDamageDealtPlayer": 13962,
            "assists": 5,
            "magicDamageTaken": 14265,
            "numDeaths": 9,
            "totalTimeCrowdControlDealt": 16,
            "largestMultiKill": 2,
            "physicalDamageTaken": 2547,
            "team": 200,
            "win": false,
            "totalDamageDealt": 18267,
            "largestKillingSpree": 2,
            "totalHeal": 1696,
            "minionsKilled": 15,
            "timePlayed": 1011,
            "physicalDamageDealtToChampions": 886,
            "championsKilled": 3,
            "trueDamageTaken": 14,
            "goldSpent": 6400
         },
         "gameId": 1392015786,
         "ipEarned": 36,
         "spell1": 7,
         "teamId": 200,
         "spell2": 14,
         "gameMode": "ARAM",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "ARAM_UNRANKED_5x5",
         "createDate": 1460663683894,
         "championId": 1
      },
      {
         "fellowPlayers": [
            {
               "championId": 121,
               "teamId": 200,
               "summonerId": 53081029
            },
            {
               "championId": 81,
               "teamId": 200,
               "summonerId": 43860920
            },
            {
               "championId": 101,
               "teamId": 100,
               "summonerId": 53768553
            },
            {
               "championId": 99,
               "teamId": 200,
               "summonerId": 41676371
            },
            {
               "championId": 21,
               "teamId": 100,
               "summonerId": 27761145
            },
            {
               "championId": 58,
               "teamId": 200,
               "summonerId": 33683506
            },
            {
               "championId": 23,
               "teamId": 100,
               "summonerId": 33911586
            },
            {
               "championId": 36,
               "teamId": 200,
               "summonerId": 45626645
            },
            {
               "championId": 26,
               "teamId": 100,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 16661,
            "item2": 3085,
            "goldEarned": 10169,
            "item1": 3072,
            "totalDamageTaken": 23168,
            "item0": 3508,
            "trueDamageDealtPlayer": 226,
            "physicalDamageDealtPlayer": 32014,
            "trueDamageDealtToChampions": 226,
            "killingSprees": 1,
            "totalUnitsHealed": 2,
            "largestCriticalStrike": 458,
            "level": 16,
            "magicDamageDealtToChampions": 1684,
            "magicDamageDealtPlayer": 2319,
            "assists": 18,
            "magicDamageTaken": 15236,
            "numDeaths": 13,
            "totalTimeCrowdControlDealt": 83,
            "largestMultiKill": 1,
            "physicalDamageTaken": 7932,
            "win": false,
            "team": 100,
            "totalDamageDealt": 34560,
            "largestKillingSpree": 2,
            "totalHeal": 3166,
            "item6": 2052,
            "minionsKilled": 24,
            "timePlayed": 1207,
            "physicalDamageDealtToChampions": 14750,
            "championsKilled": 6,
            "goldSpent": 10000
         },
         "gameId": 1392012232,
         "ipEarned": 42,
         "spell1": 7,
         "teamId": 100,
         "spell2": 14,
         "gameMode": "ARAM",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "ARAM_UNRANKED_5x5",
         "createDate": 1460662374735,
         "championId": 110
      },
      {
         "fellowPlayers": [
            {
               "championId": 110,
               "teamId": 200,
               "summonerId": 41454880
            },
            {
               "championId": 136,
               "teamId": 200,
               "summonerId": 57924954
            },
            {
               "championId": 63,
               "teamId": 200,
               "summonerId": 20425695
            },
            {
               "championId": 32,
               "teamId": 200,
               "summonerId": 43166352
            },
            {
               "championId": 11,
               "teamId": 100,
               "summonerId": 38365304
            },
            {
               "championId": 161,
               "teamId": 100,
               "summonerId": 25374313
            },
            {
               "championId": 75,
               "teamId": 100,
               "summonerId": 57556705
            },
            {
               "championId": 98,
               "teamId": 200,
               "summonerId": 28457458
            },
            {
               "championId": 53,
               "teamId": 100,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 46168,
            "item2": 3147,
            "goldEarned": 18581,
            "item1": 3031,
            "totalDamageTaken": 39609,
            "item0": 3508,
            "trueDamageDealtPlayer": 826,
            "physicalDamageDealtPlayer": 125557,
            "trueDamageDealtToChampions": 826,
            "killingSprees": 5,
            "totalUnitsHealed": 4,
            "largestCriticalStrike": 1900,
            "level": 18,
            "magicDamageDealtToChampions": 5246,
            "magicDamageDealtPlayer": 14459,
            "assists": 32,
            "magicDamageTaken": 28755,
            "numDeaths": 17,
            "totalTimeCrowdControlDealt": 284,
            "largestMultiKill": 1,
            "physicalDamageTaken": 10573,
            "win": false,
            "team": 100,
            "totalDamageDealt": 140842,
            "largestKillingSpree": 4,
            "totalHeal": 4708,
            "item4": 3085,
            "item3": 3072,
            "item6": 2052,
            "item5": 1043,
            "minionsKilled": 73,
            "timePlayed": 2062,
            "physicalDamageDealtToChampions": 40095,
            "championsKilled": 19,
            "trueDamageTaken": 280,
            "goldSpent": 17850
         },
         "gameId": 1391380467,
         "ipEarned": 62,
         "spell1": 7,
         "teamId": 100,
         "spell2": 14,
         "gameMode": "ARAM",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "ARAM_UNRANKED_5x5",
         "createDate": 1460579923555,
         "championId": 202
      },
      {
         "fellowPlayers": [
            {
               "championId": 60,
               "teamId": 200,
               "summonerId": 42654696
            },
            {
               "championId": 99,
               "teamId": 100,
               "summonerId": 47145385
            },
            {
               "championId": 3,
               "teamId": 200,
               "summonerId": 22313476
            },
            {
               "championId": 121,
               "teamId": 200,
               "summonerId": 47074420
            },
            {
               "championId": 5,
               "teamId": 100,
               "summonerId": 33083659
            },
            {
               "championId": 33,
               "teamId": 100,
               "summonerId": 21818856
            },
            {
               "championId": 19,
               "teamId": 200,
               "summonerId": 37693759
            },
            {
               "championId": 69,
               "teamId": 200,
               "summonerId": 36617173
            },
            {
               "championId": 51,
               "teamId": 100,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 13022,
            "item2": 1058,
            "barracksKilled": 1,
            "goldEarned": 8738,
            "item1": 3027,
            "item0": 3003,
            "totalDamageTaken": 15053,
            "trueDamageDealtPlayer": 416,
            "physicalDamageDealtPlayer": 8767,
            "trueDamageDealtToChampions": 416,
            "killingSprees": 1,
            "totalUnitsHealed": 3,
            "level": 14,
            "doubleKills": 1,
            "magicDamageDealtToChampions": 11129,
            "turretsKilled": 2,
            "magicDamageDealtPlayer": 22635,
            "assists": 20,
            "magicDamageTaken": 12424,
            "numDeaths": 6,
            "totalTimeCrowdControlDealt": 109,
            "largestMultiKill": 2,
            "physicalDamageTaken": 2629,
            "team": 100,
            "win": true,
            "totalDamageDealt": 31819,
            "largestKillingSpree": 2,
            "totalHeal": 2952,
            "item3": 1026,
            "item6": 2052,
            "minionsKilled": 27,
            "timePlayed": 962,
            "physicalDamageDealtToChampions": 1477,
            "championsKilled": 5,
            "goldSpent": 8450
         },
         "gameId": 1391356585,
         "ipEarned": 202,
         "spell1": 7,
         "teamId": 100,
         "spell2": 14,
         "gameMode": "ARAM",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "ARAM_UNRANKED_5x5",
         "createDate": 1460576855444,
         "championId": 45
      },
      {
         "fellowPlayers": [
            {
               "championId": 29,
               "teamId": 100,
               "summonerId": 51853091
            },
            {
               "championId": 80,
               "teamId": 200,
               "summonerId": 50243194
            },
            {
               "championId": 114,
               "teamId": 200,
               "summonerId": 38946399
            },
            {
               "championId": 236,
               "teamId": 200,
               "summonerId": 57205281
            },
            {
               "championId": 267,
               "teamId": 200,
               "summonerId": 56663148
            },
            {
               "championId": 25,
               "teamId": 100,
               "summonerId": 27273250
            },
            {
               "championId": 86,
               "teamId": 200,
               "summonerId": 54893430
            },
            {
               "championId": 34,
               "teamId": 100,
               "summonerId": 26823642
            },
            {
               "championId": 26,
               "teamId": 100,
               "summonerId": 49679435
            }
         ],
         "gameType": "MATCHED_GAME",
         "stats": {
            "totalDamageDealtToChampions": 44546,
            "item2": 3151,
            "goldEarned": 13925,
            "item1": 3020,
            "totalDamageTaken": 42946,
            "item0": 3157,
            "trueDamageDealtPlayer": 1026,
            "physicalDamageDealtPlayer": 4573,
            "trueDamageDealtToChampions": 1026,
            "killingSprees": 1,
            "totalUnitsHealed": 5,
            "level": 18,
            "doubleKills": 2,
            "magicDamageDealtToChampions": 41714,
            "magicDamageDealtPlayer": 69094,
            "assists": 26,
            "magicDamageTaken": 9050,
            "numDeaths": 14,
            "totalTimeCrowdControlDealt": 927,
            "largestMultiKill": 2,
            "physicalDamageTaken": 30957,
            "team": 100,
            "win": true,
            "totalDamageDealt": 74694,
            "largestKillingSpree": 4,
            "totalHeal": 12798,
            "item4": 1052,
            "item3": 3116,
            "item5": 1058,
            "minionsKilled": 41,
            "timePlayed": 1676,
            "physicalDamageDealtToChampions": 1805,
            "championsKilled": 11,
            "trueDamageTaken": 2938,
            "goldSpent": 13035
         },
         "gameId": 1390665027,
         "ipEarned": 227,
         "spell1": 7,
         "teamId": 100,
         "spell2": 14,
         "gameMode": "ARAM",
         "mapId": 12,
         "level": 30,
         "invalid": false,
         "subType": "ARAM_UNRANKED_5x5",
         "createDate": 1460488826187,
         "championId": 55
      }
   ],
   "summonerId": 24118947
}';


$decoded = json_decode($json, true);
$tableNames = [
    [
        "tablename" => "recentgamesdto",
    ], [
        "tablename" => "recentgamesdto",
    ], [
        "tablename" => "games",
        "column" => "idGame",
        "value" => "-1",
    ], [
        "tablename" => "stats",
        "pointer" => "2",
    ], [
        "tablename" => "fellowPlayers",
        "pointer" => "2",
    ]
];

$test = new ConvertJsonToDbInserts($json, $tableNames);
//$test->displayHierarchy();
$test->doInserts();

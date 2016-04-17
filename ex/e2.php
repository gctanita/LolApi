<?php
		class DoomExecute extends RecursiveIteratorIterator {
		protected $stmt;
		function setStmt($stmt) {
			$this->stmt = $stmt;
		}
		function endChildren() {
			if ($this->getDepth() == 2) {
			    $this->stmt->execute();
			}
		}
	}
	$file = "f21.json";
	$handle = fopen( $file , 'r');
	$response = file_get_contents($file);
	
	//$ceva = json_decode($response, true);
	$ceva = json_decode($response);
	var_dump ($ceva->champions[0]->id);
	//echo $ceva['champions'][0]['id'];
	//var_dump($ceva);

	$url = "https://global.api.pvp.net/api/lol/static-data/eune/v1.2/champion?api_key=5ce41c0a-ea78-4e87-9213-ea2aa6a1cc23";
	$cham = file_get_contents($url);
	$cham = json_decode($cham, true);
	//var_dump($cham);

	$champ = new DoomExecute(new RecursiveArrayIterator($cham));
	
	
	
		$dsn = 'mysql:host=localhost;dbname=test';
	try {
		$dbh = new PDO($dsn, 'root', '');
		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,
						PDO::ERRMODE_EXCEPTION);
		$sql = 'INSERT INTO `champions` (`id`, `title`, `name`)
				VALUES (:id , :title , :name)';
		$stmt = $dbh->prepare($sql);
		$champ->setStmt($stmt);
		/*$name = 'Anie';
		$id = 1;
		
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':title', $name);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		*/
		$row = array();
		foreach($champ as $key => $value) {
			switch ($champ->getDepth()) {
				case 2: 
					echo $key . '=>' ;
					switch ($key) {
						case 'id': 
							$row['id'] = $value;
							$stmt->bindParam(':id', $row['id']);
							echo  $value . "\n";
							break;
						case 'title';
							$row['title'] = $value;
							$stmt->bindParam(':title', $row['title']);
							echo  $value . "\n";
							break;
						case 'name': 
							$row['name'] = $value;
							$stmt->bindParam(':name', $row['name']);
							echo  $value . "\n";
							break;
					}
					break;
				//case 3: $stmt->execute();
					//break;
			}
		}
		$dbh = null;
	}
	catch (PDOException $e) {
		echo 'Failed: ' . $e->getMessage();
	}
	fclose($handle);
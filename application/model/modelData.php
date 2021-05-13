<?php
        include '../../debug/ChromePhp.php';
        ChromePhp::log('controller.php:Hello World');
        ChromePhp::log($_SERVER);

        ChromePhp::warn('modelDrinkDetails.php: Get Brand details');
   
        ChromePhp::warn('modelDrinkDetails.php: Make a connection to test1.db');

        try{
                $dbhandle = new PDO('sqlite:../../db/test1.db','user','password',array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ));

                ChromePhp::log('modelDrinkDetails.php: connected to test1');
                ChromePhp::warn('modelDrinkDetails.php: Prepare PDO SQL statement');

                $sql = 'SELECT * FROM Model_3D';
                ChromePhp::log($sql);
                ChromePhp::warn('modelDrinkDetails.php: PDO query() SQL statement');
                $stmt = $dbhandle->query($sql);
                ChromePhp::log($stmt);

                $result = null;
                
                $i=0;

                while($data = $stmt->fetch()) {
                    ChromePhp::warn('try select data: PDO SQL fetch data from test1.db');
                    ChromePhp::log($data);
                    $result[$i]['title'] = $data['title'];
                    $result[$i]['subTitle'] = $data['subtitle'];
                    $result[$i]['description'] = $data['descrip'];
                    $result[$i]['model1'] = $data['imglink1'];
                    $result[$i]['model2'] = $data['imglink2'];
                    $result[$i]['model3'] = $data['imglink3'];
                    $result[$i]['model4'] = $data['imglink4'];
                    $result[$i]['model5'] = $data['x3dlink'];
                    $i++;

                    ChromePhp::warn('modelDrinkDetails.php:here is the test1.db data');
                    ChromePhp::warn($result);
                }

        }

        catch(PDOException $e){
            ChromePhp::warn('modelDrinksDetails.php: Code error on server?');
            print new Exception($e->getMessage());
        }

        $dbhandle = NULL;
        ChromePhp::warn('modelDrinksDetails.php: echo result to frontend in JSON packet');
        
        echo json_encode($result);


?>
<?php
    class Model{
        
        public $dbhandle;

        function __construct($pageURI = null){
            $dsn = 'sqlite:./db/test1.db';
            $sign = 0;
            try{
                $this->dbhandle = new PDO($dsn, 'user','password',array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ));
            }
            catch (PDOException $e) {
                echo "I am sorry, Martin. I can not find your database";
                print new Exception($e->getMessage());
            }
   
                $this->dbCreateTable();
                $this->dbInsertData();
               
            
            
           
        }

        public function dbCreateTable(){
            try{
                
                $this->dbhandle->exec("CREATE TABLE IF NOT EXISTS Model_3D (title TEXT,
                subtitle TEXT, descrip TEXT, imglink1 TEXT,imglink2 TEXT,imglink3 TEXT,imglink4 TEXT, x3dlink TEXT)");
                return "Model_3D table is successfully created inside test1.db file";    
        } 
            catch(PDOException $e){
                print new Exception($e->getMessage());
            }
            $this->dbhandle = NULL;
        }

        
        public function dbInsertData(){
            try{
                $this->dbhandle->exec(
                    "INSERT INTO Model_3D(title,subtitle, descrip, imglink1,imglink2,imglink3,imglink4,x3dlink)
                        VALUES ('Pepsi','string_2','Pepsi is a carbonated soft drind manufactured by PepsiCo. Originally crated ande developed in 1983 by Caleb Bardham, it was renamed as Pepsi-Cola in 1898','pesiFront','pesiBot','pesiBack','pesiTop','pesi');".
                    
                    "INSERT INTO Model_3D(title,subtitle, descrip, imglink1,imglink2,imglink3,imglink4,x3dlink)
                        VALUES ('Cola Glass','string_2','Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company. Originally marketed as a temperance drink and intended as a patent medicine, it was invented in the late 19th century by John Stith Pemberton.','colaPlateFront','colaPlateBot','colaPlateBack','colaPlateTop','plate');".
                    
                    "INSERT INTO Model_3D(title,subtitle, descrip, imglink1,imglink2,imglink3,imglink4,x3dlink)
                        VALUES ('Cola Bottle','string_2','The Coca-Cola Company produces concentrate, which is then sold to licensed Coca-Cola bottlers throughout the world. The bottlers, who hold exclusive territory contracts with the company, produce the finished product in cans and bottles from the concentrate.','colaFront','colaBot','colaBack','colaother','bottle');"
                                          
                 
                    
                   
                    
                    );
                
                return "X3D model data inserted successfully inside test1.db";
            }
            catch(PDOException $e){              
                print new Exception($e->getMessage());
            }
        }

       
     
    }
?>
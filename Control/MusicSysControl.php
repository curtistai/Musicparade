<?php
    class MusicSysControl
    {
        // @var attribute used to store the musicList from Session
        private static $MusicList = array();
        private $test;
        
        /*
         @return Return list of music for displaying the main page
        */
        public static function displayMainPage()
        {
            #$musicEntity = new Music();
            #$musicList = $musicEntity::query();
            
            return $musicList;
        }
        
        /*
         @uses Return the music added into the list
         @return Return the music out if is removed, else return false if facing error
        */
        public static function addMusicIntoList($musicSerial)
        {
            #$musicEntity = new Music();
            #$music = $musicEntity::query($musicSerial);
            
             /*
             if ($music == NULL)
             {
                self::systemErrorFound("Add Music Into List, Music Not Found ".date("Y-m-d"));
                return false;
             }
            */
             
             
            self::print_test("System Control Run AddMusicIntoList");
            if(sizeof(self::$MusicList) == 0){
                self::$MusicList['mus00'] ='play what';
                print_r(self::$MusicList);
                
                #self::$MusicList = array($musicSerial=>$music);
            }else{
                self::$MusicList['mus01'] = 'play together';
                print_r(self::$MusicList);
                
                #self::$MusicList = array($musicSerial=>$music);
            }
            
            return $music;
        }
        
        /*
         @uses Return the music removed from the list
         @return Return the music out if is removed, else return false if facing error
        */
        public static function removeMusicFromList($musicSerial)
        {
            #$musicEntity = new Music();
            #$music = $musicEntity::query($musicSerial);
            
            /*
             if ($music == NULL)
             {
                self::systemErrorFound("Remove Music From List, Music Not Found ".date("Y-m-d"));
                return false;
             }
            */
            
            self::print_test("System Control Run removeMusicFromList key: $musicSerial");
            if(sizeof(self::$MusicList) == 0){
                return NULL;
            }else{
                foreach (self::$MusicList as $key => $Music)
                {
                    self::print_test($key);
                    
                    #Delete the relative music from key
                    if ($key == $musicSerial)
                    {
                        unset(self::$MusicList[$key]);
                        print_r(self::$MusicList);
                    }
                }
            }
            
            return $music;
        }
        
        /*
         @uses Use to store the music list into database
         @return Return if the storing process is successful or not.
        */
        public static function storeMusicList()
        {
            $MusicList = self::$MusicList;
            
            #try{
            #$musicPlayList = new MusicPlayList();
            #$musicPlayListDetail = new MusicPlayListDetail();
            
            #$musicPlayListSerial = $musicPlayList::insert($memSerial, $musListName, date("Y-m-d"));
            
            /*
             $musicEntity = new Music();
            foreach ($MusicList as $key => $music)
            {
                $music = $musicEntity::query($key);
                $musicPlayListDetail::insert($music::getSerial(), $musicPlayListSerial) ;
            }
            */
            
            #}catch (Exception ex){ return false; }
            
            return true;
        }
        
        /*
         @return Return the array of the searched music from database
        */
        public static function searchMusic()
        {
            $Musics = array();
            
            return $Musics;
        }
        
        /*
         @uses Add the favorite music into the database from user
        */
        public static function addFavoriteMusic()
        {
            $MusicSerial;
        }
        
        /*
         @uses Remove the favorite music from the database from user
        */
        public static function removeFavoriteMusic()
        {
            $MusicSerial;    
        }
        
        /*
         @return Return the music list request from user
        */
        public static function getMusicList()
        {
            return self::$MusicList;
        }
        
        /*
         @uses Insert the error found into database
        */
        public static function systemErrorFound($error)
        {
            #$errorEntity = new ErrorReport();
            #$errorResult = $errorEntity::insert($error, date("Y-m-d"));
            
        }
        
        protected static function print_test($var)
        {
            echo "<div>$var</div>";
        }
    }
?>
<?php
    require_once ('../Entity/Member.php');
    require_once ('../Entity/Music.php');
    require_once ('../Entity/FavouriteMusic.php');
    require_once ('../Entity/MusicPlayList.php');
    require_once ('../Entity/MusicPlaylistDetail.php');
    require_once ('../Entity/FavouriteMusic.php');
    
    class MusicSysControl
    {
        // @var attribute used to store the musicList from Session
        private static $MusicList = array();
        private $test;
        
        public static function loginSystem($fbLName, $fbFName, $fbEMail, $facebookUserId)
        {
            $memberEntity = new Member();
            $memberArray = $memberEntity->findByFacebook($facebookUserId);
            $member = $memberArray[key($memberArray)];
            
            if (sizeof($member) == 0)
            {
                $memberEntity->insert($fbLName, $fbFName, $fbEMail, $facebookUserId);
                $memberArray = $memberEntity->findByFacebook($facebookUserId);
                $member = $memberArray[key($memberArray)];
                $_SESSION['MemberLoginIn'] = $member;

                return $_SESSION['MemberLoginIn'];
            }else{
                $_SESSION['MemberLoginIn'] = $member;
                return 1;
            }
            
        }

        public static function registerUser($facebookUserId)
        {
            $memberEntity = new Member();
            $memberSerial = $memberEntity->insert($facebookUserId);
            
            $musicListEntity = new MusicPlayList();
            $musicListEntity->insert($memberSerial, "Music List");

            return 1;
        }

        
        /*
         @uses Return the music added into the list
         @return Return the music out if is removed, else return false if facing error
        */
        public static function addMusicIntoList($memSerial, $musicSerial)
        {
            $musicEntity = new Music();
            $music = $musicEntity::findMusicBySerial($musicSerial);
            print_r($music);
             /*
             if ($music == NULL)
             {
                self::systemErrorFound("Add Music Into List, Music Not Found ".date("Y-m-d"));
                return 0;
             }
            */
             
            self::print_test("System Control Run AddMusicIntoList");
            if(sizeof($music) == 0){
                self::systemErrorFound("Add Music Into List, Music Not Found ".date("Y-m-d"));
                return 0;
            }else{
                
                $musicListEntity = new MusicPlayList();
                
                $musListArray = $musicListEntity::findMusPlayListByMemSerial($memSerial);
                $musList = $musListArray[key($musListArray)];
                $musListSerial = $musList->getMusListSerial();
                
                $musicListDetailEntity = new MusicPlayListDetail();
                $musicListDetailEntity->insert($musicSerial, $musListSerial);
                
                self::$MusicList['mus01'] = 'play together';
                print_r(self::$MusicList);
                
                #self::$MusicList = array($musicSerial=>$music);
            }
            
            return 1;
        }
        
        /*
         @uses Return the music removed from the list
         @return Return the music out if is removed, else return false if facing error
        */
        public static function removeMusicFromList($memSerial, $musicSerial)
        {
            $musicEntity = new Music();
            $music = $musicEntity::findMusicBySerial($musicSerial);
            
            /*
             if ($music == NULL)
             {
                self::systemErrorFound("Remove Music From List, Music Not Found ".date("Y-m-d"));
                return 0;
             }
            */
            
            self::print_test("System Control Run AddMusicIntoList");
            if(sizeof($music) == 0){
                self::systemErrorFound("Remove Music From List, Music Not Found ".date("Y-m-d"));
                return 0;
            }else{
                
                $musicListEntity = new MusicPlayList();
                
                $musListArray = $musicListEntity::findMusPlayListByMemSerial($memSerial);
                $musList = $musListArray[key(musListArray)];
                $musListSerial = $musList->getMusListSerial();
                
                $musicListDetailEntity = new MusicPlayListDetail();
                $musicListDetailEntity->delete($musicSerial, $musListSerial);
                
                self::$MusicList['mus01'] = 'play together';
                print_r(self::$MusicList);
                
                #self::$MusicList = array($musicSerial=>$music);
            }
            
            return 1;
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
        public static function searchMusic($musicName)
        {
            $musicEntity = new Music();
            $musics = $musicEntity->findMusicLikeName($musicName);
            
            return $musics;
        }
        
        /*
         @uses Add the favorite music into the database from user
        */
        public static function addFavoriteMusic($musicSerial)
        {
            $favouriteMusicEntity = new FavouriteMusic();
            $currentMember = $_SESSION['MemberLoginIn'];
            $memberSerial = $currentMember->getMemSerial();
            $favouriteMusicEntity->insert($musicSerial, $memberSerial);

            return $musicSerial;
        }
        
        /*
         @uses Remove the favorite music from the database from user
        */
        public static function removeFavoriteMusic($musicSerial)
        {
            $favouriteMusicEntity = new FavouriteMusic();
            $currentMember = $_SESSION['MemberLoginIn'];
            $memberSerial = $currentMember->getMemSerial();
            $favouriteMusicEntity->deleteFavoriteMusicRecord($musicSerial, $memberSerial);

            return $musicSerial; 
        }
        
        /*
         @return Return the music list request from user
        */
        public static function getMusicPlayList()
        {
            $currentMember = $_SESSION['MemberLoginIn'];
            $memberSerial = $currentMember->getMemSerial();
            
            $musicListEntity = new MusicPlayList();
                
            $musList = $musicListEntity::findMusPlayListByMemSerial($memberSerial);
            $musListSerial = $musList->getMusListSerial();
                
            $musicListDetailEntity = new MusicPlayListDetail();
            $musInPlayListDetail = $musicListDetailEntity->findByMusListSerial($musListSerial);
                
            $musicEntity = new Music();
            $musList = array();
            foreach($musInPlayListDetail as $musicDetail)
            {
                $musSerial = $musicDetail->getMusSerial();
                $music = $musicEntity->findMusicBySerial($musSerial);
                $musList[$music->getSerial()] = $music;
            }
            
            return $musList;
        }
        
        /*
         @return Return the music list request from user
        */
        public static function getFavoriteMusicList()
        {
            $currentMember = $_SESSION['MemberLoginIn'];
            $memberSerial = $currentMember->getMemSerial();
            
            $favoriteMusicEntity = new FavouriteMusic();
            
            $fmusList = $favoriteMusicEntity->findFavouriteMusicByMemSerial($memberSerial);;
                
            $musicEntity = new Music();
            $musList = array();
            foreach($fmusList as $favoriteMusic)
            {
                $musSerial = $favoriteMusic->getMusSerial();
                $music = $musicEntity->findMusicBySerial($musSerial);
                $musList[$music->getSerial()] = $music;
            }
            
            return $musList;
        }
                
        /*
         @return Return list of music for displaying the main page
        */
        public static function getMusicList()
        {
            $musicEntity = new Music();                         
            $musList = $musicEntity::findMusic();                
                        
            return $musicList;
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
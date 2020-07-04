<?php


namespace World_two_apple {

    class Apple{
        public function RamInfo(){
            echo "This is the Apple Ram information and 
        it is big enough it is about 6GB ";
        }

    }

    class Amer{
        public function sayAmer(){
            echo "This is Amer property not for anyone ";
        }
    }

}//end of first nameSpace


namespace World_two_apple\Hardware {
    //some classes and Methods
    class Amer{
        public function sayAmer()
        {
            echo "This is Amer property not for anyone ";
        }
    }
}


namespace World_two_apple\Hardware\tablets {
    //some classes and methods
    class Amer{
        public function sayAmer(){
            echo "This is Amer property not for anyone ";
        }
    }
}


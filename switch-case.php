<?php 

// $weekday=9;

// switch ($weekday) {
//     case 1:
//         echo "Today is Monday";
//         break;
    
//         case 2:
//             echo "Today is Tuesday";
//             break;

//             case 3:
//                 echo "Today is Wednesday";
//                 break;

//                 case 4:
//                     echo "Today is Thursday";
//                     break;

//                     case 5:
//                         echo "Today is Friday";
//                         break;

//                         case 6:
//                             echo "Today is Saterday";
//                             break;

//                             case 7:
//                                 echo "Today is Sunday";
//                                 break;
//     default:
//         echo " Please Enter the velid weekday";
//         break;
// }

$age=18;

switch (true) {
    case ($age >=17 && $age <=20):
        echo "You are elegable";
        break;
    
        
    case ($age >=21 && $age <=30):
        echo "You are not elegable";
        break;


    default:
        echo "Please Enter the valid age";
        break;
}
?>
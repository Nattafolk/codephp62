Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@Nattafolk 
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


Jatumongkon62101233
/
codephp62
1
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
codephp62/hw1/switch.php /
@Jatumongkon62101233
Jatumongkon62101233 func
Latest commit a227aab 18 minutes ago
 History
 1 contributor
29 lines (28 sloc)  458 Bytes
  
<?php
$a = 49;
switch ($a) {
    case ($a < 50):
        echo "F";
       break;
    case ($a <55):
        echo "D";
        break;
    case ($a <60):
        echo "D+";
        break;
    case ($a <65):
        echo "C";
        break;
    case ($a <70):
        echo "C+";
        break; 
    case ($a <75):
        echo "B";
        break;   
        
    case ($a < 80):
        echo "B+";
        break;
    default:
        echo "A";
        break;
}


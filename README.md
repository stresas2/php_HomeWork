# PHP namų darbas

Panaudotas vienas "dependency" - "jakub-onderka/php-console-color", kuris išspausdina consolėja gauta rezultatą paryškintai.<br />
Konsolei spalvų palaikymui reikalingas [ANSINCON](http://www.testautomation.info/Install_ANSICON_for_coloured_output) - pridedu nuorada su intrukcija jo įrašymui.
<br />
Namų darbas susideda 4 funcijų tuo pačiu pavadinimu (calculateHomeWorkSum()), kurios visos panaudojamos "index.php" faile.
* 1 Funkcija - "calculateHomeWorkSum(…$numbers)" <br />
Funkcija sudedata kiekviena "Array" elementą ir išpausdiną rezultatą į konsolę kartu su funkcijos vardu;
* 2 Funkcija - "calculateHomeWorkSum(…$numbers): int" <br />
Atlieka tapatį veiksmą kaip ir pirmoji funkcija, tiesiog gražinamas rezultatas turi būti "integer" tipo, priešingu atveju išmeta pranešima, kad rezultatas yra ne integer tipo.
* 3 Funkcija - "calculateHomeWorkSum(int…$numbers): int;" <br />
Atlieka tapatį veiksmą kaip ir antroji funkcija, bet argumentai šiuo atveju apibrėžti, kaip "integer" tipo, jeigu, bet vienas nėra "integer" tipo ir nėra galimybės jo paversti į tokį tipą išmetą error.
* 3 Funkcija - "calculateHomeWorkSum(int…$numbers): int;" su declare(strict_types=1)
direktyva <br />
Atlieka tapatį veiksmą kaip ir trečioji funkcija, bet turi strict derektyva. Su Strict derektyva nebeįmanoma paversti "String" tipo į "integer" tipą, jeigu prieštai string "1" galėjo atitikti integer 1 tai su Strict derektyva tai nebeleidžiame, bet kadangi Strict derektyva yra tik funkcijos aprašymo faile, kur argumentę patikrinama ar tai gali būtų argumentai integer tipo, kuomet jai jie gali būti paverčiami tuomet gražinimas rezultatas be klaidos, priešingu atveju jeigu Strict direktyva butū index.php faila kuomet funkcija yra iškviečiama ir jos argumentuose nusiunčiami String tipo duomenys o aprašoma, kad reikia integer, išmestų klaidą.



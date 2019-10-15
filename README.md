# PHP namų darbas

Panaudotas vienas "dependency" - "jakub-onderka/php-console-color", kuris išspausdina consolėja gauta rezultatą paryškintai.<br />
Konsolei spalvų palaikymui reikalingas [ANSINCON](http://www.testautomation.info/Install_ANSICON_for_coloured_output) - pridedu nuorada su intrukcija jo įrašymui.
<br />
Namų darbas susideda 4 funcijų tuo pačiu pavadinimu (calculateHomeWorkSum()), kurios visos panaudojamos "index.php" faile.
* <b>1 Funkcija - "calculateHomeWorkSum(…$numbers)"</b> <br />
Funkcija sudedata kiekviena "Array" elementą ir išpausdiną rezultatą į konsolę kartu su funkcijos vardu;
* <b>2 Funkcija - "calculateHomeWorkSum(…$numbers): int"</b> <br />
Atlieka tapatį veiksmą kaip ir pirmoji funkcija, tiesiog gražinamas rezultatas return turi būti integer, jeigu rezultato neįmanoma pakeisti į interger'ą tuomet išmetama klaida. Kaip pavyzdys string'są '2' ar float'ą 2,5 įmanoma gražinti, kaip integer'ą 2 ir nebutų klaidą, bet jei ties return gražintų strigs'ą žodinį tarkim "test" funkciją išmestų klaidą ir sustotų priešingu atveju gražintų integer tipo kintamajį.
* <b>3 Funkcija - "calculateHomeWorkSum(int…$numbers): int;"</b> <br />
Atlieka tapatį veiksmą kaip ir antroji funkcija, tik dar papildomai tikrinami funkcijoje atsiusti argumentai ar jie yra integer tipo ir ar yra galimybė juos paversti į integer tipą, kaip ir su gražinimu taip ir čia jeigu yra String'sas '2' ar float'as "2.5" juos įmanoma paversti į integer'ą 2 tokiu atveju klaidos neišmes, bet jei argumente bus žodis string "test" tuomet išmes klaidą ir funkcija sustos. Gražinimas indentiškas kaip ir 2 funkcijoje gražina, ne float bet intgeter kitamajį.
* <b>4 Funkcija - "calculateHomeWorkSum(int…$numbers): int;" su declare(strict_types=1)
direktyva</b> <br />
Atlieka tapatį veiksmą kaip ir trečioji funkcija, bet turi Strict derektyva. Su Strict derektyva nebeįmanoma paversti "String" tipo į "integer" tipą, jeigu prieštai string "1" galėjo atitikti integer 1 tai su Strict derektyva tai nebeleidžiama, bet kadangi Strict derektyva yra tik funkcijos aprašymo faile, kur argumente patikrinama ar tai gali būtų argumentai integer tipo, jai jie gali būti paverčiami tuomet jie paverčiami ir funkcija tęsiama be klaidos. Jeigu Strict direktyva būtų index.php faile, kuomet funkcija yra iškviečiama ir jos argumentuose nusiunčiami String ar Float tipo duomenys, o aprašoma, kad reikia integer, išmestų klaidą.
<br />
Visos Funkcijos patikrinamos su try{}catch(){} metodu, ar jos praeina be klaidos.<br />
Programa įrašoma komanda:

`composer install`
<br />Kodas paleidžiamas komandas:

`php index.php`


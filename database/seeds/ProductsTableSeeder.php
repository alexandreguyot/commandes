<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['id' => '1', 'ref' => 'BIOMATBABBIO60','nom' => 'Matelas Baby Bio - 60x120', 'prix' => '379.00']);
        DB::table('products')->insert(['id' => '2', 'ref' => 'BIOMATBABBIO70','nom' => 'Matelas Baby Bio - 70x140', 'prix' => '444.00']);
        DB::table('products')->insert(['id' => '3', 'ref' => 'BIOMATBABBIO70x160','nom' => 'Matelas Baby Bio - 70x160', 'prix' => '459.00']);
        DB::table('products')->insert(['id' => '4', 'ref' => 'BIOMATBABBIO90','nom' => 'Matelas Baby Bio - 90x140', 'prix' => '498.00']);
        DB::table('products')->insert(['id' => '5', 'ref' => 'BIOMATBABBIO90x190','nom'=> 'Baby Bio - 90x190', 'prix' => '741.00']);
        DB::table('products')->insert(['id' => '6', 'ref' => 'BIOMATBABBIO90x200','nom'=> 'Baby Bio - 90x200', 'prix' => '759.00']);
        DB::table('products')->insert(['id' => '7', 'ref' => 'BIOMATBABBIO90EVO','nom'=> 'Baby Bio Evolutif - 90x190', 'prix' => '766.00']);
        DB::table('products')->insert(['id' => '8', 'ref' => 'BIOMATBABBIO90x200EVO','nom'=> 'Baby Bio Evolutif - 90x200', 'prix' => '788.00']);
        DB::table('products')->insert(['id' => '9', 'ref' => 'BIOMATBICBIO160','nom'=> 'Bi-Confort Premium-Summum Bio - 160x200', 'prix' => '1763.00']);
        DB::table('products')->insert(['id' => '10', 'ref' => 'BIOMATBICBIO140', 'nom' => 'Matelas Bi-Confort Premium-Summum Bio - 140x190', 'prix' => '1559.00']);
        DB::table('products')->insert(['id' => '11', 'ref' => 'BIOMATBICBIO140x200', 'nom' => 'Matelas Bi-Confort Premium-Summum Bio - 140x200', 'prix' => '1641.00']);
        DB::table('products')->insert(['id' => '12', 'ref' => 'BIOMATBICBIO180', 'nom' => 'Matelas Bi-Confort Premium-Summum Bio - 180x200', 'prix' => '1942.00']);
        DB::table('products')->insert(['id' => '13', 'ref' => 'BIOMATCLA90', 'nom' => 'Matelas Classic Nature - 90x190', 'prix' => '850.00']);
        DB::table('products')->insert(['id' => '14', 'ref' => 'BIOMATCLA140', 'nom' => 'Matelas Classic Nature - 140x190', 'prix' => '997.00']);
        DB::table('products')->insert(['id' => '15', 'ref' => 'BIOMATCLA160', 'nom' => 'Matelas Classic Nature - 160x200', 'prix' => '1179.00']);
        DB::table('products')->insert(['id' => '16', 'ref' => 'BIOMATCLA80', 'nom' => 'Matelas Classic Nature - 80x200', 'prix' => '840.00']);
        DB::table('products')->insert(['id' => '17', 'ref' => 'BIOMATCLA70', 'nom' => 'Matelas Classic Nature - 70x190', 'prix' => '778.00']);
        DB::table('products')->insert(['id' => '18', 'ref' => 'BIOMATCLA2x70', 'nom' => 'Matelas Classic Nature - 2x70x190', 'prix' => '1332.00']);
        DB::table('products')->insert(['id' => '19', 'ref' => 'BIOMATCLA2x80', 'nom' => 'Matelas Classic Nature - 2x80x200', 'prix' => '1478.00']);
        DB::table('products')->insert(['id' => '20', 'ref' => 'BIOMATCLA100', 'nom' => 'Matelas Classic Nature - 100x200', 'prix' => '937.00']);
        DB::table('products')->insert(['id' => '21', 'ref' => 'BIOMATCLA120', 'nom' => 'Matelas Classic Nature - 120x190', 'prix' => '967.00']);
        DB::table('products')->insert(['id' => '22', 'ref' => 'BIOMATCLA2x100', 'nom' => 'Matelas Classic Nature - 2x100x200', 'prix' => '1636.00']);
        DB::table('products')->insert(['id' => '23', 'ref' => 'BIOMATCLA140x200', 'nom' => 'Matelas Classic Nature - 140x200', 'prix' => '1137.00']);
        DB::table('products')->insert(['id' => '24', 'ref' => 'BIOMATCLA2x90', 'nom' => 'Matelas Classic Nature - 2x90x200', 'prix' => '1595.00']);
        DB::table('products')->insert(['id' => '25', 'ref' => 'BIOMATCLA180', 'nom' => 'Matelas Classic Nature - 180x200', 'prix' => '1358.00']);
        DB::table('products')->insert(['id' => '26', 'ref' => 'BIOMATCLA90x200', 'nom' => 'Matelas Classic Nature - 90x200', 'prix' => '906.00']);
        DB::table('products')->insert(['id' => '27', 'ref' => 'BIOMATCLA2x70x200', 'nom' => 'Matelas Classic Nature - 2x70x200', 'prix' => '1389.00']);
        DB::table('products')->insert(['id' => '28', 'ref' => 'BIOMATCOCOBIO90', 'nom' => 'Matelas Coco Bio - 90x190', 'prix' => '925.00']);
        DB::table('products')->insert(['id' => '29', 'ref' => 'BIOMATCOCOBIO120', 'nom' => 'Matelas Coco Bio - 120x190', 'prix' => '1157.00']);
        DB::table('products')->insert(['id' => '30', 'ref' => 'BIOMATCOCOBIO140', 'nom' => 'Matelas Coco Bio - 140x190', 'prix' => '1209.00']);
        DB::table('products')->insert(['id' => '31', 'ref' => 'BIOMATCOCOBIO140x200', 'nom' => 'Matelas Coco Bio - 140x200', 'prix' => '1282.00']);
        DB::table('products')->insert(['id' => '32', 'ref' => 'BIOMATCOCOBIO160', 'nom' => 'Matelas Coco Bio - 160x200', 'prix' => '1335.00']);
        DB::table('products')->insert(['id' => '33', 'ref' => 'BIOMATBABBIO50', 'nom' => 'Matelas Extension Baby Bio - 90x50', 'prix' => '285.00']);
        DB::table('products')->insert(['id' => '34', 'ref' => 'BIOMATBABBIO60x90', 'nom' => 'Matelas Extension Baby Bio - 90x60', 'prix' => '305.00']);
        DB::table('products')->insert(['id' => '35', 'ref' => 'BIOMATFONT160', 'nom' => 'Matelas Fontevraud Bio - 160x200', 'prix' => '2158.00']);
        DB::table('products')->insert(['id' => '36', 'ref' => 'BIOMATFONT2x80x200', 'nom' => 'Matelas Fontevraud Bio - 2x80x200', 'prix' => '2369.00']);
        DB::table('products')->insert(['id' => '37', 'ref' => 'BIOMATFONT140x200', 'nom' => 'Matelas Fontevraud Bio - 140x200', 'prix' => '2017.00']);
        DB::table('products')->insert(['id' => '38', 'ref' => 'BIOMATFONT140', 'nom' => 'Matelas Fontevraud Bio - 140x190', 'prix' => '1889.00']);
        DB::table('products')->insert(['id' => '39', 'ref' => 'BIOMATFONT90x200', 'nom' => 'Matelas Fontevraud Bio - 90x200', 'prix' => '1459.00']);
        DB::table('products')->insert(['id' => '40', 'ref' => 'BIOMATFONT180', 'nom' => 'Matelas Fontevraud Bio - 180x200', 'prix' => '2339.00']);
        DB::table('products')->insert(['id' => '41', 'ref' => 'BIOMATFONT2x90x200', 'nom' => 'Matelas Fontevraud Bio - 2x90x200', 'prix' => '2553.00']);
        DB::table('products')->insert(['id' => '42', 'ref' => 'BIOMATFONT2x100', 'nom' => 'Matelas Fontevraud Bio - 2x100x200', 'prix' => '2674.00']);
        DB::table('products')->insert(['id' => '43', 'ref' => 'BIOMATFONT80x200', 'nom' => 'Matelas Fontevraud Bio - 80x200', 'prix' => '1348.00']);
        DB::table('products')->insert(['id' => '44', 'ref' => 'BIOMATPBIO90', 'nom' => 'Matelas Premium Bio - 90x190', 'prix' => '1021.00']);
        DB::table('products')->insert(['id' => '45', 'ref' => 'BIOMATPBIO140', 'nom' => 'Matelas Premium Bio - 140x190', 'prix' => '1399.00']);
        DB::table('products')->insert(['id' => '46', 'ref' => 'BIOMATPBIO160', 'nom' => 'Matelas Premium Bio - 160x200', 'prix' => '1568.00']);
        DB::table('products')->insert(['id' => '47', 'ref' => 'BIOMATPBIO70', 'nom' => 'Matelas Premium Bio - 70x190', 'prix' => '949.00']);
        DB::table('products')->insert(['id' => '48', 'ref' => 'BIOMATPBIO80', 'nom' => 'Matelas Premium Bio - 80x200', 'prix' => '987.00']);
        DB::table('products')->insert(['id' => '49', 'ref' => 'BIOMATPBIO90x200', 'nom' => 'Matelas Premium Bio - 90x200', 'prix' => '1062.00']);
        DB::table('products')->insert(['id' => '50', 'ref' => 'BIOMATPBIO2x80', 'nom' => 'Matelas Premium Bio - 2x80x200', 'prix' => '1758.00']);
        DB::table('products')->insert(['id' => '51', 'ref' => 'BIOMATPBIO2x90', 'nom' => 'Matelas Premium Bio - 2x90x200', 'prix' => '1945.00']);
        DB::table('products')->insert(['id' => '52', 'ref' => 'BIOMATPBIO100', 'nom' => 'Matelas Premium Bio - 100x200', 'prix' => '1183.00']);
        DB::table('products')->insert(['id' => '53', 'ref' => 'BIOMATPBIO120', 'nom' => 'Matelas Premium Bio - 120x190', 'prix' => '1295.00']);
        DB::table('products')->insert(['id' => '54', 'ref' => 'BIOMATPBIO140x200', 'nom' => 'Matelas Premium Bio - 140x200', 'prix' => '1483.00']);
        DB::table('products')->insert(['id' => '55', 'ref' => 'BIOMATPBIO180', 'nom' => 'Matelas Premium Bio - 180x200', 'prix' => '1749.00']);
        DB::table('products')->insert(['id' => '56', 'ref' => 'BIOMATPBIO2x100', 'nom' => 'Matelas Premium Bio - 2x100x200', 'prix' => '2188.00']);
        DB::table('products')->insert(['id' => '57', 'ref' => 'BIOMATPBIO2x70', 'nom' => 'Matelas Premium Bio - 2x70x190', 'prix' => '1627.00']);
        DB::table('products')->insert(['id' => '58', 'ref' => 'BIOMATPBIO160x190', 'nom' => 'Matelas Premium Bio - 160x190', 'prix' => '1568.00']);
        DB::table('products')->insert(['id' => '59', 'ref' => 'BIOMATPBIO200', 'nom' => 'Matelas Premium Bio - 200x200', 'prix' => '1857.00']);
        DB::table('products')->insert(['id' => '60', 'ref' => 'BIOMATSBIO90', 'nom' => 'Matelas Summum Bio - 90x190', 'prix' => '1215.00']);
        DB::table('products')->insert(['id' => '61', 'ref' => 'BIOMATSBIO140', 'nom' => 'Matelas Summum Bio - 140x190', 'prix' => '1719.00']);
        DB::table('products')->insert(['id' => '62', 'ref' => 'BIOMATSBIO160', 'nom' => 'Matelas Summum Bio - 160x200', 'prix' => '1959.00']);
        DB::table('products')->insert(['id' => '63', 'ref' => 'BIOMATSBIO2x80', 'nom' => 'Matelas Summum Bio - 2x80x200', 'prix' => '2269.00']);
        DB::table('products')->insert(['id' => '64', 'ref' => 'BIOMATSBIO100', 'nom' => 'Matelas Summum Bio - 100x200', 'prix' => '1419.00']);
        DB::table('products')->insert(['id' => '65', 'ref' => 'BIOMATSBIO70', 'nom' => 'Matelas Summum Bio - 70x190', 'prix' => '1179.00']);
        DB::table('products')->insert(['id' => '66', 'ref' => 'BIOMATSBIO2x70', 'nom' => 'Matelas Summum Bio - 2x70x190', 'prix' => '2065.00']);
        DB::table('products')->insert(['id' => '67', 'ref' => 'BIOMATSBIO80', 'nom' => 'Matelas Summum Bio - 80x200', 'prix' => '1199.00']);
        DB::table('products')->insert(['id' => '68', 'ref' => 'BIOMATSBIO90x200', 'nom' => 'Matelas Summum Bio - 90x200', 'prix' => '1307.00']);
        DB::table('products')->insert(['id' => '69', 'ref' => 'BIOMATSBIO2x90', 'nom' => 'Matelas Summum Bio - 2x90x200', 'prix' => '2485.00']);
        DB::table('products')->insert(['id' => '70', 'ref' => 'BIOMATSBIO2x100', 'nom' => 'Matelas Summum Bio - 2x100x200', 'prix' => '2695.00']);
        DB::table('products')->insert(['id' => '71', 'ref' => 'BIOMATSBIO120', 'nom' => 'Matelas Summum Bio - 120x190', 'prix' => '1559.00']);
        DB::table('products')->insert(['id' => '72', 'ref' => 'BIOMATSBIO140x200', 'nom' => 'Matelas Summum Bio - 140x200', 'prix' => '1799.00']);
        DB::table('products')->insert(['id' => '73', 'ref' => 'BIOMATSBIO180', 'nom' => 'Matelas Summum Bio - 180x200', 'prix' => '2135.00']);
        DB::table('products')->insert(['id' => '74', 'ref' => 'BIOMATSBIO160x210', 'nom' => 'Matelas Summum Bio - 160x210', 'prix' => '2025.00']);
        DB::table('products')->insert(['id' => '75', 'ref' => 'BIOMATSBIO180x210', 'nom' => 'Matelas Summum Bio - 180x210', 'prix' => '2196.00']);
        DB::table('products')->insert(['id' => '76', 'ref' => 'BIOMATSBIO160x190', 'nom' => 'Matelas Summum Bio - 160x190', 'prix' => '1959.00']);
        DB::table('products')->insert(['id' => '77', 'ref' => 'BIOMATSBIO200', 'nom' => 'Matelas Summum Bio - 200x200', 'prix' => '2337.00']);
        DB::table('products')->insert(['id' => '78', 'ref' => 'BIOMATSBIO90_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 90x190', 'prix' => '1329.00']);
        DB::table('products')->insert(['id' => '79', 'ref' => 'BIOMATSBIO140_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 140x190', 'prix' => '1845.00']);
        DB::table('products')->insert(['id' => '80', 'ref' => 'BIOMATSBIO160_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 160x200', 'prix' => '2089.00']);
        DB::table('products')->insert(['id' => '81', 'ref' => 'BIOMATSBIO90x200_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 90x200', 'prix' => '1409.00']);
        DB::table('products')->insert(['id' => '82', 'ref' => 'BIOMATSBIO80_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 80x200', 'prix' => '1299.00']);
        DB::table('products')->insert(['id' => '83', 'ref' => 'BIOMATSBIO120_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 120x190', 'prix' => '1735.00']);
        DB::table('products')->insert(['id' => '84', 'ref' => 'BIOMATSBIO140x200_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 140x200', 'prix' => '1958.00']);
        DB::table('products')->insert(['id' => '85', 'ref' => 'BIOMATSBIO180_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 180x200', 'prix' => '2264.00']);
        DB::table('products')->insert(['id' => '86', 'ref' => 'BIOMATSBIO2x90_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 2x90x200', 'prix' => '2608.00']);
        DB::table('products')->insert(['id' => '87', 'ref' => 'BIOMATSBIO2x80_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 2x80x200', 'prix' => '2409.00']);
        DB::table('products')->insert(['id' => '88', 'ref' => 'BIOMATSBIO100_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 100x200', 'prix' => '1499.00']);
        DB::table('products')->insert(['id' => '89', 'ref' => 'BIOMATSBIO2x70_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 2x70x190', 'prix' => '2159.00']);
        DB::table('products')->insert(['id' => '90', 'ref' => 'BIOMATSBIO200_85k', 'nom' => 'Matelas Summum Bio Haute Densité - 200x200', 'prix' => '2409.00']);
        DB::table('products')->insert(['id' => '91', 'ref' => 'BIOMATULTIBIO140', 'nom' => 'Matelas Ultimate Bio - 140x190', 'prix' => '2339.00']);
        DB::table('products')->insert(['id' => '92', 'ref' => 'BIOMATULTIBIO160', 'nom' => 'Matelas Ultimate Bio - 160x200', 'prix' => '2589.00']);
        DB::table('products')->insert(['id' => '93', 'ref' => 'BIOMATULTIBIO180', 'nom' => 'Matelas Ultimate Bio - 180x200', 'prix' => '2773.00']);
        DB::table('products')->insert(['id' => '94', 'ref' => 'BIOMATULTIBIO80', 'nom' => 'Matelas Ultimate Bio - 80x200', 'prix' => '1699.00']);
        DB::table('products')->insert(['id' => '95', 'ref' => 'BIOMATULTIBIO2x80', 'nom' => 'Matelas Ultimate Bio - 2x80x200', 'prix' => '2964.00']);
        DB::table('products')->insert(['id' => '96', 'ref' => 'BIOMATULTIBIO90', 'nom' => 'Matelas Ultimate Bio - 90x190', 'prix' => '1735.00']);
        DB::table('products')->insert(['id' => '97', 'ref' => 'BIOMATULTIBIO90x200', 'nom' => 'Matelas Ultimate Bio - 90x200', 'prix' => '1788.00']);
        DB::table('products')->insert(['id' => '98', 'ref' => 'BIOMATULTIBIO2x90', 'nom' => 'Matelas Ultimate Bio - 2x90x200', 'prix' => '3129.00']);
        DB::table('products')->insert(['id' => '99', 'ref' => 'BIOMATULTIBIO140x200', 'nom' => 'Matelas Ultimate Bio - 140x200', 'prix' => '2413.00']);
        DB::table('products')->insert(['id' => '100', 'ref' => 'BIOMATULTIBIO2x100', 'nom' => 'Matelas Ultimate Bio - 2x100x200', 'prix' => '3389.00']);
        DB::table('products')->insert(['id' => '101', 'ref' => 'BIOSOMVINBEI2x70', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 2x70x190', 'prix' => '799.00']);
        DB::table('products')->insert(['id' => '102', 'ref' => 'BIOSOMVINBEI120', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 120x190', 'prix' => '629.00']);
        DB::table('products')->insert(['id' => '103', 'ref' => 'BIOSOMVINBEI90', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 90x190', 'prix' => '549.00']);
        DB::table('products')->insert(['id' => '104', 'ref' => 'BIOSOMFONT2x100', 'nom' => 'Sommier Fontevraud Bio - 2x100x200', 'prix' => '1059.00']);
        DB::table('products')->insert(['id' => '105', 'ref' => 'BIOSOMVINBEI80', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 80x200', 'prix' => '535.00']);
        DB::table('products')->insert(['id' => '106', 'ref' => 'BIOSOMFONT2x90', 'nom' => 'Sommier Fontevraud Bio - 2x90x200', 'prix' => '1009.00']);
        DB::table('products')->insert(['id' => '107', 'ref' => 'BIOSOMFONT2x80', 'nom' => 'Sommier Fontevraud Bio - 2x80x200', 'prix' => '975.00']);
        DB::table('products')->insert(['id' => '108', 'ref' => 'BIOSOMFONT160', 'nom' => 'Sommier Fontevraud Bio - 160x200', 'prix' => '799.00']);
        DB::table('products')->insert(['id' => '109', 'ref' => 'BIOSOMFONT140x200', 'nom' => 'Sommier Fontevraud Bio - 140x200', 'prix' => '745.00']);
        DB::table('products')->insert(['id' => '110', 'ref' => 'BIOSOMFONT140', 'nom' => 'Sommier Fontevraud Bio - 140x190', 'prix' => '719.00']);
        DB::table('products')->insert(['id' => '111', 'ref' => 'BIOSOMVINBEI90x200', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 90x200', 'prix' => '568.00']);
        DB::table('products')->insert(['id' => '112', 'ref' => 'BIOSOMVINBEI2x90', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 2x90x200', 'prix' => '965.00']);
        DB::table('products')->insert(['id' => '113', 'ref' => 'BIOSOMVINBEI2x80', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 2x80x200', 'prix' => '895.00']);
        DB::table('products')->insert(['id' => '114', 'ref' => 'BIOSOMVINBEI160', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 160x200', 'prix' => '699.00']);
        DB::table('products')->insert(['id' => '115', 'ref' => 'BIOSOMVINBEI140x200', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 140x200', 'prix' => '675.00']);
        DB::table('products')->insert(['id' => '116', 'ref' => 'BIOSOMVINBEI140', 'nom' => 'Sommier Vintage Bio Beige Cachemire - 140x190', 'prix' => '649.00']);
        DB::table('products')->insert(['id' => '117', 'ref' => 'BIOSOMSBIO2x90x210', 'nom' => 'Sommier Summum Bio - 2x90x210', 'prix' => '945.00']);
        DB::table('products')->insert(['id' => '118', 'ref' => 'BIOSOMREL2x100x200', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 2x100x200', 'prix' => '2710.00']);
        DB::table('products')->insert(['id' => '119', 'ref' => 'BIOSOMREL100', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 100x200', 'prix' => '1355.00']);
        DB::table('products')->insert(['id' => '120', 'ref' => 'BIOSOMREL2x90x200', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 2x90x200', 'prix' => '2642.00']);
        DB::table('products')->insert(['id' => '121', 'ref' => 'BIOSOMREL90x200', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 90x200', 'prix' => '1321.00']);
        DB::table('products')->insert(['id' => '122', 'ref' => 'BIOSOMREL90', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 90x190', 'prix' => '1296.00']);
        DB::table('products')->insert(['id' => '123', 'ref' => 'BIOSOMREL2x80', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 2x80x200', 'prix' => '2540.00']);
        DB::table('products')->insert(['id' => '124', 'ref' => 'BIOSOMREL80', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 80x200', 'prix' => '1270.00']);
        DB::table('products')->insert(['id' => '125', 'ref' => 'BIOSOMREL2x70', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 2x70x190', 'prix' => '2370.00']);
        DB::table('products')->insert(['id' => '126', 'ref' => 'BIOSOMREL70', 'nom' => 'Sommier Relaxation- TPR Électrique Grand Summum Bio - 70x190', 'prix' => '1185.00']);
        DB::table('products')->insert(['id' => '127', 'ref' => 'BIOSOMSBIO2X100', 'nom' => 'Sommier Summum Bio - 2x100x200', 'prix' => '925.00']);
        DB::table('products')->insert(['id' => '128', 'ref' => 'BIOSOMSBIO140x200', 'nom' => 'Sommier Summum Bio - 140x200', 'prix' => '621.00']);
        DB::table('products')->insert(['id' => '129', 'ref' => 'BIOSOMSBIO120', 'nom' => 'Sommier Summum Bio - 120x190', 'prix' => '585.00']);
        DB::table('products')->insert(['id' => '130', 'ref' => 'BIOSOMSBIO2x90', 'nom' => 'Sommier Summum Bio - 2x90x200', 'prix' => '899.00']);
        DB::table('products')->insert(['id' => '131', 'ref' => 'BIOSOMSBIO90x200', 'nom' => 'Sommier Summum Bio - 90x200', 'prix' => '543.00']);
        DB::table('products')->insert(['id' => '132', 'ref' => 'BIOSOMSBIO2x80', 'nom' => 'Sommier Summum Bio - 2x80x200', 'prix' => '873.00']);
        DB::table('products')->insert(['id' => '133', 'ref' => 'BIOSOMSBIO80', 'nom' => 'Sommier Summum Bio - 80x200', 'prix' => '512.00']);
        DB::table('products')->insert(['id' => '134', 'ref' => 'BIOSOMSBIO70', 'nom' => 'Sommier Summum Bio - 70x190', 'prix' => '487.00']);
        DB::table('products')->insert(['id' => '135', 'ref' => 'BIOSOMSBIO2x70', 'nom' => 'Sommier Summum Bio - 2x70x190', 'prix' => '829.00']);
        DB::table('products')->insert(['id' => '136', 'ref' => 'BIOSOMSBIO100', 'nom' => 'Sommier Summum Bio - 100x200', 'prix' => '574.00']);
        DB::table('products')->insert(['id' => '137', 'ref' => 'BIOSOMSBIO160', 'nom' => 'Sommier Summum Bio - 160x200', 'prix' => '641.00']);
        DB::table('products')->insert(['id' => '138', 'ref' => 'BIOSOMSBIO140', 'nom' => 'Sommier Summum Bio - 140x190', 'prix' => '600.00']);
        DB::table('products')->insert(['id' => '139', 'ref' => 'BIOSOMSBIO90', 'nom' => 'Sommier Summum Bio - 90x190', 'prix' => '528.00']);
        DB::table('products')->insert(['id' => '140', 'ref' => 'BIOSOMSUM2X100', 'nom' => 'Sommier Summum Nature - 2x100x200', 'prix' => '925.00']);
        DB::table('products')->insert(['id' => '141', 'ref' => 'BIOSOMSUM2x90', 'nom' => 'Sommier Summum Nature - 2x90x200', 'prix' => '899.00']);
        DB::table('products')->insert(['id' => '142', 'ref' => 'BIOSOMSUM2x80', 'nom' => 'Sommier Summum Nature - 2x80x200', 'prix' => '873.00']);
        DB::table('products')->insert(['id' => '143', 'ref' => 'BIOSOMSUM2x70', 'nom' => 'Sommier Summum Nature - 2x70x190', 'prix' => '829.00']);
        DB::table('products')->insert(['id' => '144', 'ref' => 'BIOSOMCLA2X100', 'nom' => 'Sommier Classic Nature - 2x100x200', 'prix' => '654.00']);
        DB::table('products')->insert(['id' => '145', 'ref' => 'BIOSOMCLA2x90', 'nom' => 'Sommier Classic Nature - 2x90x200', 'prix' => '624.00']);
        DB::table('products')->insert(['id' => '146', 'ref' => 'BIOSOMCLA2x80', 'nom' => 'Sommier Classic Nature - 2x80x200', 'prix' => '608.00']);
        DB::table('products')->insert(['id' => '147', 'ref' => 'BIOSOMCLA2x70', 'nom' => 'Sommier Classic Nature - 2x70x190', 'prix' => '581.00']);
        DB::table('products')->insert(['id' => '148', 'ref' => 'BIOSOMCLA140x200', 'nom' => 'Sommier Classic Nature - 140x200', 'prix' => '476.00']);
        DB::table('products')->insert(['id' => '149', 'ref' => 'BIOSOMSUM70', 'nom' => 'Sommier Summum Nature - 70x190', 'prix' => '487.00']);
        DB::table('products')->insert(['id' => '150', 'ref' => 'BIOSOMSUM80', 'nom' => 'Sommier Summum Nature - 80x200', 'prix' => '512.00']);
        DB::table('products')->insert(['id' => '151', 'ref' => 'BIOSOMSUM90', 'nom' => 'Sommier Summum Nature - 90x190', 'prix' => '528.00']);
        DB::table('products')->insert(['id' => '152', 'ref' => 'BIOSOMSUM90x200', 'nom' => 'Sommier Summum Nature - 90x200', 'prix' => '543.00']);
        DB::table('products')->insert(['id' => '153', 'ref' => 'BIOSOMSUM100', 'nom' => 'Sommier Summum Nature - 100x200', 'prix' => '574.00']);
        DB::table('products')->insert(['id' => '154', 'ref' => 'BIOSOMSUM120', 'nom' => 'Sommier Summum Nature - 120x190', 'prix' => '585.00']);
        DB::table('products')->insert(['id' => '155', 'ref' => 'BIOSOMSUM140', 'nom' => 'Sommier Summum Nature - 140x190', 'prix' => '600.00']);
        DB::table('products')->insert(['id' => '156', 'ref' => 'BIOSOMSUM140x200', 'nom' => 'Sommier Summum Nature - 140x200', 'prix' => '621.00']);
        DB::table('products')->insert(['id' => '157', 'ref' => 'BIOSOMSUM160', 'nom' => 'Sommier Summum Nature - 160x200', 'prix' => '641.00']);
        DB::table('products')->insert(['id' => '158', 'ref' => 'BIOSOMCLA70', 'nom' => 'Sommier Classic Nature - 70x190', 'prix' => '332.00']);
        DB::table('products')->insert(['id' => '159', 'ref' => 'BIOSOMCLA80', 'nom' => 'Sommier Classic Nature - 80x200', 'prix' => '348.00']);
        DB::table('products')->insert(['id' => '160', 'ref' => 'BIOSOMCLA90', 'nom' => 'Sommier Classic Nature - 90x190', 'prix' => '358.00']);
        DB::table('products')->insert(['id' => '161', 'ref' => 'BIOSOMCLA90x200', 'nom' => 'Sommier Classic Nature - 90x200', 'prix' => '368.00']);
        DB::table('products')->insert(['id' => '162', 'ref' => 'BIOSOMCLA100', 'nom' => 'Sommier Classic Nature - 100x200', 'prix' => '414.00']);
        DB::table('products')->insert(['id' => '163', 'ref' => 'BIOSOMCLA120', 'nom' => 'Sommier Classic Nature - 120x190', 'prix' => '424.00']);
        DB::table('products')->insert(['id' => '164', 'ref' => 'BIOSOMCLA140', 'nom' => 'Sommier Classic Nature - 140x190', 'prix' => '445.00']);
        DB::table('products')->insert(['id' => '165', 'ref' => 'BIOSOMCLA160', 'nom' => 'Sommier Classic Nature - 160x200', 'prix' => '523.00']);
        DB::table('products')->insert(['id' => '166', 'ref' => 'BIOTDLFONT200', 'nom' => 'Tête de Lit - Fontevraud Bio Capitonnée et Surpiqûres - L200,H120,P10', 'prix' => '657.00']);
        DB::table('products')->insert(['id' => '167', 'ref' => 'BIOTDLFONT140', 'nom' => 'Tête de Lit - Fontevraud Bio Capitonnée et Surpiqûres - L140,H120,P10', 'prix' => '499.00']);
        DB::table('products')->insert(['id' => '168', 'ref' => 'BIOTDLFONT90', 'nom' => 'Tête de Lit - Fontevraud Bio Capitonnée et Surpiqûres - L90,H120,P10', 'prix' => '405.00']);
        DB::table('products')->insert(['id' => '169', 'ref' => 'BIOTDLFONT180', 'nom' => 'Tête de Lit - Fontevraud Bio Capitonnée et Surpiqûres - L180,H120,P10', 'prix' => '615.00']);
        DB::table('products')->insert(['id' => '170', 'ref' => 'BIOTDLFONT160', 'nom' => 'Tête de Lit - Fontevraud Bio Capitonnée et Surpiqûres - L160,H120,P10', 'prix' => '562.00']);
        DB::table('products')->insert(['id' => '171', 'ref' => 'BIOTDLHOTFONT160', 'nom' => 'Tête de Lit - Fontrevraud - Lit 160', 'prix' => '3759.00']);
        DB::table('products')->insert(['id' => '172', 'ref' => 'BIOTDLVINBEI90', 'nom' => 'Tête de Lit - Vintage Bio Capitonnée Beige Cachemire - L90,H105,P10', 'prix' => '353.00']);
        DB::table('products')->insert(['id' => '173', 'ref' => 'BIOTDLVINBEI180', 'nom' => 'Tête de Lit - Vintage Bio Capitonnée Beige Cachemire - L180,H105,P10', 'prix' => '535.00']);
        DB::table('products')->insert(['id' => '174', 'ref' => 'BIOTDLVINBEI160', 'nom' => 'Tête de Lit - Vintage Bio Capitonnée Beige Cachemire - L160,H105,P10', 'prix' => '489.00']);
        DB::table('products')->insert(['id' => '175', 'ref' => 'BIOTDLVINBEI140', 'nom' => 'Tête de Lit - Vintage Bio Capitonnée Beige Cachemire - L140,H105,P10', 'prix' => '437.00']);
        DB::table('products')->insert(['id' => '176', 'ref' => 'BIOTDLVINBEI200', 'nom' => 'Tête de Lit - Vintage Bio Capitonnée Beige Cachemire - L200,H105,P10', 'prix' => '579.00']);
        DB::table('products')->insert(['id' => '177', 'ref' => 'BIOPIEMATBRU', 'nom' => 'Jeu de 4 pieds Matale - 17.0 Brut', 'prix' => '47.00']);
        DB::table('products')->insert(['id' => '178', 'ref' => 'BIOPIEMATVER', 'nom' => 'Jeu de 4 pieds Matale - 17.0 Verni', 'prix' => '47.00']);
        DB::table('products')->insert(['id' => '179', 'ref' => 'BIOPIEKANBRU', 'nom' => 'Jeu de 4 pieds Kandy - 17.0 Brut', 'prix' => '43.00']);
        DB::table('products')->insert(['id' => '180', 'ref' => 'BIOPIEKANVER', 'nom' => 'Jeu de 4 pieds Kandy - 17.0 Verni', 'prix' => '43.00']);
        DB::table('products')->insert(['id' => '181', 'ref' => 'BIOPIECOLBRU', 'nom' => 'Jeu de 4 pieds Colombo - 15.0 Brut', 'prix' => '39.00']);
        DB::table('products')->insert(['id' => '182', 'ref' => 'BIOPIEWAT20BRU', 'nom' => 'Jeu de 4 pieds Watta - 20.0 Brut', 'prix' => '44.00']);
        DB::table('products')->insert(['id' => '183', 'ref' => 'BIOPIESOU15', 'nom' => 'Pied de soutien - 15.0 Brut', 'prix' => '10.00']);
        DB::table('products')->insert(['id' => '184', 'ref' => 'BIOPIESOU17', 'nom' => 'Pied de soutien - 17.0 Brut', 'prix' => '12.00']);
        DB::table('products')->insert(['id' => '185', 'ref' => 'BIOPIETALCHEBRU', 'nom' => 'Jeu de 4 pieds Talawa Chêne - 13.5 Brut', 'prix' => '73.00']);
        DB::table('products')->insert(['id' => '186', 'ref' => 'BIOPIESOU20', 'nom' => 'Pied de soutien - 20.0 Brut', 'prix' => '14.00']);
        DB::table('products')->insert(['id' => '187', 'ref' => 'BIOPIEMATCHEBRU', 'nom' => 'Jeu de 4 pieds Matale Chêne - 17.0 Brut', 'prix' => '80.00']);
        DB::table('products')->insert(['id' => '188', 'ref' => 'BIOPIESOU13.5','nom' => 'Pied de soutien Talawa chêne - 13.5 Brut', 'prix' => '20.00']);
        DB::table('products')->insert(['id' => '189', 'ref' => 'BIOPIEMATNOI', 'nom' => 'Jeu de 4 pieds Matale - 17.0 Noir', 'prix' => '47.00']);
        DB::table('products')->insert(['id' => '190', 'ref' => 'BIOPIEMATBLA', 'nom' => 'Jeu de 4 pieds Matale - 17.0 Blanc', 'prix' => '47.00']);
        DB::table('products')->insert(['id' => '191', 'ref' => 'PMOREFER', 'nom' => 'Oreiller Petit Meunier - Plume de Canard - Le Ferme - 60x60', 'prix' => '29.90']);
        DB::table('products')->insert(['id' => '192', 'ref' => 'PMOREMOE', 'nom' => 'Oreiller Petit Meunier - Plume de Canard - Le Moelleux - 60x60', 'prix' => '29.90']);
        DB::table('products')->insert(['id' => '193', 'ref' => 'PMORESOU', 'nom' => 'Oreiller Petit Meunier - Plume de Canard - Le Souple - 60x60', 'prix' => '29.90']);
        DB::table('products')->insert(['id' => '194', 'ref' => 'DUMOREPDC60', 'nom' => 'Oreiller La Compagnie Dumas - Oreiller Hôtel 70% Duvet de Canard - 60x60', 'prix' => '89.00']);
        DB::table('products')->insert(['id' => '195', 'ref' => 'DUMOREPDC50', 'nom' => 'Oreiller La Compagnie Dumas - Oreiller Hôtel 70% Duvet de Canard - 50x70', 'prix' => '89.00']);
        DB::table('products')->insert(['id' => '196', 'ref' => 'BIOOREEPE60', 'nom' => 'Oreiller Biosense Végétal en balles d’épeautre Bio - 60x60', 'prix' => '59.00']);
        DB::table('products')->insert(['id' => '197', 'ref' => 'BIOOREMIL60', 'nom' => 'Oreiller Biosense Végétal en balles de millet Bio - 60x60', 'prix' => '69.00']);
        DB::table('products')->insert(['id' => '198', 'ref' => 'BIOOREMIL40', 'nom' => 'Oreiller Biosense Végétal en balles de millet Bio - 60x40', 'prix' => '59.00']);
        DB::table('products')->insert(['id' => '199', 'ref' => 'BIOOREEPE40', 'nom' => 'Oreiller Biosense Végétal en balles d’épeautre Bio - 60x40', 'prix' => '49.00']);
        DB::table('products')->insert(['id' => '200', 'ref' => 'NIMORDOH', 'nom' => 'Oreiller Nimbus 90% Duvet d\'Oie de Hongrie - 50x70', 'prix' => '145.00']);
        DB::table('products')->insert(['id' => '201', 'ref' => 'BIOOREMATREC6', 'nom' => 'Oreiller Biosense - Latex Moulé & Flocons Matara - 60x40x6', 'prix' => '43.00']);
        DB::table('products')->insert(['id' => '202', 'ref' => 'FINOREBOUSI65', 'nom' => 'Oreiller Fine Bedding - Boutique Silk - 65x65', 'prix' => '53.00']);
        DB::table('products')->insert(['id' => '203', 'ref' => 'FINORESPN50_M', 'nom' => 'Oreiller Fine Bedding - Spundown médium - 50x70', 'prix' => '45.00']);
        DB::table('products')->insert(['id' => '204', 'ref' => 'FINORESPN50_F', 'nom' => 'Oreiller Fine Bedding - Spundown ferme - 50x70', 'prix' => '47.00']);
        DB::table('products')->insert(['id' => '205', 'ref' => 'FINORESPUN65', 'nom' => 'Oreiller Fine Bedding - Spundown medium - 65x65', 'prix' => '49.00']);
        DB::table('products')->insert(['id' => '206', 'ref' => 'BIOOREMATTRAV160', 'nom' => 'Traversin Biosense - Latex Moulé & Flocons Matara - 35x160', 'prix' => '150.00']);
        DB::table('products')->insert(['id' => '207', 'ref' => 'BIOOREMATTRAV140', 'nom' => 'Traversin Biosense - Latex Moulé & Flocons Matara - 35x140', 'prix' => '120.00']);
        DB::table('products')->insert(['id' => '208', 'ref' => 'FINOREDOS', 'nom' => 'Oreiller Fine Bedding - Duvet d\'oie Surround - 50x70', 'prix' => '68.00']);
        DB::table('products')->insert(['id' => '209', 'ref' => 'FINOREBOUSI', 'nom' => 'Oreiller Fine Bedding - Boutique Silk - 50x70', 'prix' => '49.00']);
        DB::table('products')->insert(['id' => '210', 'ref' => 'BIOORELATERGO', 'nom' => 'Oreiller Biosense - Latex Moulé Jaffna Ergonomique - 60x40', 'prix' => '66.00']);
        DB::table('products')->insert(['id' => '211', 'ref' => 'BIOOREJAF60', 'nom' => 'Oreiller Biosense - Latex Moulé Jaffna 2 zones - 60x40x15', 'prix' => '57.00']);
        DB::table('products')->insert(['id' => '212', 'ref' => 'BIOOREMATBABY', 'nom' => 'Oreiller Biosense - Latex Moulé Jaffna Baby -35x45x5', 'prix' => '33.00']);
        DB::table('products')->insert(['id' => '213', 'ref' => 'BIOOREMATCAR12', 'nom' => 'Oreiller Biosense - Latex Moulé & Flocons Matara -60x60x12', 'prix' => '72.00']);
        DB::table('products')->insert(['id' => '214', 'ref' => 'BIOOREMATREC12', 'nom' => 'Oreiller Biosense - Latex Moulé & Flocons Matara -50x70x12', 'prix' => '69.00']);
        DB::table('products')->insert(['id' => '215', 'ref' => 'BIOOREMATCAR8', 'nom' => 'Oreiller Biosense - Latex Moulé & Flocons Matara -60x60x8', 'prix' => '59.00']);
        DB::table('products')->insert(['id' => '216', 'ref' => 'BIOOREMATREC8', 'nom' => 'Oreiller Biosense - Latex Moulé & Flocons Matara -50x70x8', 'prix' => '55.00']);
        DB::table('products')->insert(['id' => '217', 'ref' => 'FINORE004002', 'nom' => 'Oreiller Fine Bedding - Plumes et Duvet de canard -65x65', 'prix' => '42.00']);
        DB::table('products')->insert(['id' => '218', 'ref' => 'FINORE004001', 'nom' => 'Oreiller Fine Bedding - Plumes et Duvet de canard -50x70', 'prix' => '39.00']);
        DB::table('products')->insert(['id' => '219', 'ref' => 'BIOCOUORI140', 'nom' => 'Couette Origins Biolaine® antiacariens - 140x200', 'prix' => '240.00']);
        DB::table('products')->insert(['id' => '220', 'ref' => 'BIOCOUORI200', 'nom' => 'Couette Origins Biolaine® antiacariens - 200x200', 'prix' => '305.00']);
        DB::table('products')->insert(['id' => '221', 'ref' => 'BIOCOUORI240', 'nom' => 'Couette Origins Biolaine® antiacariens - 240x220', 'prix' => '355.00']);
        DB::table('products')->insert(['id' => '222', 'ref' => 'BIOCOUORI260', 'nom' => 'Couette Origins Biolaine® antiacariens - 260x240', 'prix' => '406.00']);
        DB::table('products')->insert(['id' => '223', 'ref' => 'BIOSURLAT90', 'nom' => 'Surmatelas Latex Bio - 90x190', 'prix' => '289.00']);
        DB::table('products')->insert(['id' => '224', 'ref' => 'BIOSURLAT140', 'nom' => 'Surmatelas Latex Bio - 140x190', 'prix' => '376.00']);
        DB::table('products')->insert(['id' => '225', 'ref' => 'BIOSURLAT160', 'nom' => 'Surmatelas Latex Bio - 160x200', 'prix' => '460.00']);
        DB::table('products')->insert(['id' => '226', 'ref' => 'BIOSURLAT140x200', 'nom' => 'Surmatelas Latex Bio - 140x200', 'prix' => '397.00']);
        DB::table('products')->insert(['id' => '227', 'ref' => 'BIOSURLAT180', 'nom' => 'Surmatelas Latex Bio - 180x200', 'prix' => '515.00']);
        DB::table('products')->insert(['id' => '228', 'ref' => 'BIOSURLAT90x200', 'nom' => 'Surmatelas Latex Bio - 90x200', 'prix' => '309.00']);
        DB::table('products')->insert(['id' => '229', 'ref' => 'BIOSURLATGRE160', 'nom' => 'Surmatelas Fontevraud Latex Bio - 160x200', 'prix' => '483.00']);
        DB::table('products')->insert(['id' => '230', 'ref' => 'BIOSURLATGRE140x200', 'nom' => 'Surmatelas Fontevraud Latex Bio - 140x200', 'prix' => '447.00']);
        DB::table('products')->insert(['id' => '231', 'ref' => 'BIOSURLATGRE140', 'nom' => 'Surmatelas Fontevraud Latex Bio - 140x190', 'prix' => '409.00']);
        DB::table('products')->insert(['id' => '232', 'ref' => 'BIOSURLATGRE90x200', 'nom' => 'Surmatelas Fontevraud Latex Bio - 90x200', 'prix' => '274.00']);
        DB::table('products')->insert(['id' => '233', 'ref' => 'BIOSURLATGRE180', 'nom' => 'Surmatelas Fontevraud Latex Bio - 180x200', 'prix' => '557.00']);
        DB::table('products')->insert(['id' => '234', 'ref' => 'BIOSURLATGRE90', 'nom' => 'Surmatelas Fontevraud Latex Bio - 90x190', 'prix' => '313.90']);
    }
}

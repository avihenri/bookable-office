<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = array (
            0 =>
            array (
              'iso_code' => 'AF',
              'name' => 'AFGHANISTAN',
              'nicename' => 'Afghanistan',
              'iso3_code' => 'AFG',
              'm49_code' => 4,
              'phone_code' => 93,
            ),
            1 =>
            array (
              'iso_code' => 'AL',
              'name' => 'ALBANIA',
              'nicename' => 'Albania',
              'iso3_code' => 'ALB',
              'm49_code' => 8,
              'phone_code' => 355,
            ),
            2 =>
            array (
              'iso_code' => 'DZ',
              'name' => 'ALGERIA',
              'nicename' => 'Algeria',
              'iso3_code' => 'DZA',
              'm49_code' => 12,
              'phone_code' => 213,
            ),
            3 =>
            array (
              'iso_code' => 'AS',
              'name' => 'AMERICAN SAMOA',
              'nicename' => 'American Samoa',
              'iso3_code' => 'ASM',
              'm49_code' => 16,
              'phone_code' => 1684,
            ),
            4 =>
            array (
              'iso_code' => 'AD',
              'name' => 'ANDORRA',
              'nicename' => 'Andorra',
              'iso3_code' => 'AND',
              'm49_code' => 20,
              'phone_code' => 376,
            ),
            5 =>
            array (
              'iso_code' => 'AO',
              'name' => 'ANGOLA',
              'nicename' => 'Angola',
              'iso3_code' => 'AGO',
              'm49_code' => 24,
              'phone_code' => 244,
            ),
            6 =>
            array (
              'iso_code' => 'AI',
              'name' => 'ANGUILLA',
              'nicename' => 'Anguilla',
              'iso3_code' => 'AIA',
              'm49_code' => 660,
              'phone_code' => 1264,
            ),
            7 =>
            array (
              'iso_code' => 'AQ',
              'name' => 'ANTARCTICA',
              'nicename' => 'Antarctica',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 0,
            ),
            8 =>
            array (
              'iso_code' => 'AG',
              'name' => 'ANTIGUA AND BARBUDA',
              'nicename' => 'Antigua and Barbuda',
              'iso3_code' => 'ATG',
              'm49_code' => 28,
              'phone_code' => 1268,
            ),
            9 =>
            array (
              'iso_code' => 'AR',
              'name' => 'ARGENTINA',
              'nicename' => 'Argentina',
              'iso3_code' => 'ARG',
              'm49_code' => 32,
              'phone_code' => 54,
            ),
            10 =>
            array (
              'iso_code' => 'AM',
              'name' => 'ARMENIA',
              'nicename' => 'Armenia',
              'iso3_code' => 'ARM',
              'm49_code' => 51,
              'phone_code' => 374,
            ),
            11 =>
            array (
              'iso_code' => 'AW',
              'name' => 'ARUBA',
              'nicename' => 'Aruba',
              'iso3_code' => 'ABW',
              'm49_code' => 533,
              'phone_code' => 297,
            ),
            12 =>
            array (
              'iso_code' => 'AU',
              'name' => 'AUSTRALIA',
              'nicename' => 'Australia',
              'iso3_code' => 'AUS',
              'm49_code' => 36,
              'phone_code' => 61,
            ),
            13 =>
            array (
              'iso_code' => 'AT',
              'name' => 'AUSTRIA',
              'nicename' => 'Austria',
              'iso3_code' => 'AUT',
              'm49_code' => 40,
              'phone_code' => 43,
            ),
            14 =>
            array (
              'iso_code' => 'AZ',
              'name' => 'AZERBAIJAN',
              'nicename' => 'Azerbaijan',
              'iso3_code' => 'AZE',
              'm49_code' => 31,
              'phone_code' => 994,
            ),
            15 =>
            array (
              'iso_code' => 'BS',
              'name' => 'BAHAMAS',
              'nicename' => 'Bahamas',
              'iso3_code' => 'BHS',
              'm49_code' => 44,
              'phone_code' => 1242,
            ),
            16 =>
            array (
              'iso_code' => 'BH',
              'name' => 'BAHRAIN',
              'nicename' => 'Bahrain',
              'iso3_code' => 'BHR',
              'm49_code' => 48,
              'phone_code' => 973,
            ),
            17 =>
            array (
              'iso_code' => 'BD',
              'name' => 'BANGLADESH',
              'nicename' => 'Bangladesh',
              'iso3_code' => 'BGD',
              'm49_code' => 50,
              'phone_code' => 880,
            ),
            18 =>
            array (
              'iso_code' => 'BB',
              'name' => 'BARBADOS',
              'nicename' => 'Barbados',
              'iso3_code' => 'BRB',
              'm49_code' => 52,
              'phone_code' => 1246,
            ),
            19 =>
            array (
              'iso_code' => 'BY',
              'name' => 'BELARUS',
              'nicename' => 'Belarus',
              'iso3_code' => 'BLR',
              'm49_code' => 112,
              'phone_code' => 375,
            ),
            20 =>
            array (
              'iso_code' => 'BE',
              'name' => 'BELGIUM',
              'nicename' => 'Belgium',
              'iso3_code' => 'BEL',
              'm49_code' => 56,
              'phone_code' => 32,
            ),
            21 =>
            array (
              'iso_code' => 'BZ',
              'name' => 'BELIZE',
              'nicename' => 'Belize',
              'iso3_code' => 'BLZ',
              'm49_code' => 84,
              'phone_code' => 501,
            ),
            22 =>
            array (
              'iso_code' => 'BJ',
              'name' => 'BENIN',
              'nicename' => 'Benin',
              'iso3_code' => 'BEN',
              'm49_code' => 204,
              'phone_code' => 229,
            ),
            23 =>
            array (
              'iso_code' => 'BM',
              'name' => 'BERMUDA',
              'nicename' => 'Bermuda',
              'iso3_code' => 'BMU',
              'm49_code' => 60,
              'phone_code' => 1441,
            ),
            24 =>
            array (
              'iso_code' => 'BT',
              'name' => 'BHUTAN',
              'nicename' => 'Bhutan',
              'iso3_code' => 'BTN',
              'm49_code' => 64,
              'phone_code' => 975,
            ),
            25 =>
            array (
              'iso_code' => 'BO',
              'name' => 'BOLIVIA',
              'nicename' => 'Bolivia',
              'iso3_code' => 'BOL',
              'm49_code' => 68,
              'phone_code' => 591,
            ),
            26 =>
            array (
              'iso_code' => 'BA',
              'name' => 'BOSNIA AND HERZEGOVINA',
              'nicename' => 'Bosnia and Herzegovina',
              'iso3_code' => 'BIH',
              'm49_code' => 70,
              'phone_code' => 387,
            ),
            27 =>
            array (
              'iso_code' => 'BW',
              'name' => 'BOTSWANA',
              'nicename' => 'Botswana',
              'iso3_code' => 'BWA',
              'm49_code' => 72,
              'phone_code' => 267,
            ),
            28 =>
            array (
              'iso_code' => 'BV',
              'name' => 'BOUVET ISLAND',
              'nicename' => 'Bouvet Island',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 0,
            ),
            29 =>
            array (
              'iso_code' => 'BR',
              'name' => 'BRAZIL',
              'nicename' => 'Brazil',
              'iso3_code' => 'BRA',
              'm49_code' => 76,
              'phone_code' => 55,
            ),
            30 =>
            array (
              'iso_code' => 'IO',
              'name' => 'BRITISH INDIAN OCEAN TERRITORY',
              'nicename' => 'British Indian Ocean Territory',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 246,
            ),
            31 =>
            array (
              'iso_code' => 'BN',
              'name' => 'BRUNEI DARUSSALAM',
              'nicename' => 'Brunei Darussalam',
              'iso3_code' => 'BRN',
              'm49_code' => 96,
              'phone_code' => 673,
            ),
            32 =>
            array (
              'iso_code' => 'BG',
              'name' => 'BULGARIA',
              'nicename' => 'Bulgaria',
              'iso3_code' => 'BGR',
              'm49_code' => 100,
              'phone_code' => 359,
            ),
            33 =>
            array (
              'iso_code' => 'BF',
              'name' => 'BURKINA FASO',
              'nicename' => 'Burkina Faso',
              'iso3_code' => 'BFA',
              'm49_code' => 854,
              'phone_code' => 226,
            ),
            34 =>
            array (
              'iso_code' => 'BI',
              'name' => 'BURUNDI',
              'nicename' => 'Burundi',
              'iso3_code' => 'BDI',
              'm49_code' => 108,
              'phone_code' => 257,
            ),
            35 =>
            array (
              'iso_code' => 'KH',
              'name' => 'CAMBODIA',
              'nicename' => 'Cambodia',
              'iso3_code' => 'KHM',
              'm49_code' => 116,
              'phone_code' => 855,
            ),
            36 =>
            array (
              'iso_code' => 'CM',
              'name' => 'CAMEROON',
              'nicename' => 'Cameroon',
              'iso3_code' => 'CMR',
              'm49_code' => 120,
              'phone_code' => 237,
            ),
            37 =>
            array (
              'iso_code' => 'CA',
              'name' => 'CANADA',
              'nicename' => 'Canada',
              'iso3_code' => 'CAN',
              'm49_code' => 124,
              'phone_code' => 1,
            ),
            38 =>
            array (
              'iso_code' => 'CV',
              'name' => 'CAPE VERDE',
              'nicename' => 'Cape Verde',
              'iso3_code' => 'CPV',
              'm49_code' => 132,
              'phone_code' => 238,
            ),
            39 =>
            array (
              'iso_code' => 'KY',
              'name' => 'CAYMAN ISLANDS',
              'nicename' => 'Cayman Islands',
              'iso3_code' => 'CYM',
              'm49_code' => 136,
              'phone_code' => 1345,
            ),
            40 =>
            array (
              'iso_code' => 'CF',
              'name' => 'CENTRAL AFRICAN REPUBLIC',
              'nicename' => 'Central African Republic',
              'iso3_code' => 'CAF',
              'm49_code' => 140,
              'phone_code' => 236,
            ),
            41 =>
            array (
              'iso_code' => 'TD',
              'name' => 'CHAD',
              'nicename' => 'Chad',
              'iso3_code' => 'TCD',
              'm49_code' => 148,
              'phone_code' => 235,
            ),
            42 =>
            array (
              'iso_code' => 'CL',
              'name' => 'CHILE',
              'nicename' => 'Chile',
              'iso3_code' => 'CHL',
              'm49_code' => 152,
              'phone_code' => 56,
            ),
            43 =>
            array (
              'iso_code' => 'CN',
              'name' => 'CHINA',
              'nicename' => 'China',
              'iso3_code' => 'CHN',
              'm49_code' => 156,
              'phone_code' => 86,
            ),
            44 =>
            array (
              'iso_code' => 'CX',
              'name' => 'CHRISTMAS ISLAND',
              'nicename' => 'Christmas Island',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 61,
            ),
            45 =>
            array (
              'iso_code' => 'CC',
              'name' => 'COCOS [KEELING] ISLANDS',
              'nicename' => 'Cocos [Keeling] Islands',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 672,
            ),
            46 =>
            array (
              'iso_code' => 'CO',
              'name' => 'COLOMBIA',
              'nicename' => 'Colombia',
              'iso3_code' => 'COL',
              'm49_code' => 170,
              'phone_code' => 57,
            ),
            47 =>
            array (
              'iso_code' => 'KM',
              'name' => 'COMOROS',
              'nicename' => 'Comoros',
              'iso3_code' => 'COM',
              'm49_code' => 174,
              'phone_code' => 269,
            ),
            48 =>
            array (
              'iso_code' => 'CG',
              'name' => 'CONGO',
              'nicename' => 'Congo',
              'iso3_code' => 'COG',
              'm49_code' => 178,
              'phone_code' => 242,
            ),
            49 =>
            array (
              'iso_code' => 'CD',
              'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
              'nicename' => 'Congo, the Democratic Republic of the',
              'iso3_code' => 'COD',
              'm49_code' => 180,
              'phone_code' => 242,
            ),
            50 =>
            array (
              'iso_code' => 'CK',
              'name' => 'COOK ISLANDS',
              'nicename' => 'Cook Islands',
              'iso3_code' => 'COK',
              'm49_code' => 184,
              'phone_code' => 682,
            ),
            51 =>
            array (
              'iso_code' => 'CR',
              'name' => 'COSTA RICA',
              'nicename' => 'Costa Rica',
              'iso3_code' => 'CRI',
              'm49_code' => 188,
              'phone_code' => 506,
            ),
            52 =>
            array (
              'iso_code' => 'CI',
              'name' => 'COTE DIVOIRE',
              'nicename' => 'Cote DIvoire',
              'iso3_code' => 'CIV',
              'm49_code' => 384,
              'phone_code' => 225,
            ),
            53 =>
            array (
              'iso_code' => 'HR',
              'name' => 'CROATIA',
              'nicename' => 'Croatia',
              'iso3_code' => 'HRV',
              'm49_code' => 191,
              'phone_code' => 385,
            ),
            54 =>
            array (
              'iso_code' => 'CU',
              'name' => 'CUBA',
              'nicename' => 'Cuba',
              'iso3_code' => 'CUB',
              'm49_code' => 192,
              'phone_code' => 53,
            ),
            55 =>
            array (
              'iso_code' => 'CY',
              'name' => 'CYPRUS',
              'nicename' => 'Cyprus',
              'iso3_code' => 'CYP',
              'm49_code' => 196,
              'phone_code' => 357,
            ),
            56 =>
            array (
              'iso_code' => 'CZ',
              'name' => 'CZECH REPUBLIC',
              'nicename' => 'Czech Republic',
              'iso3_code' => 'CZE',
              'm49_code' => 203,
              'phone_code' => 420,
            ),
            57 =>
            array (
              'iso_code' => 'DK',
              'name' => 'DENMARK',
              'nicename' => 'Denmark',
              'iso3_code' => 'DNK',
              'm49_code' => 208,
              'phone_code' => 45,
            ),
            58 =>
            array (
              'iso_code' => 'DJ',
              'name' => 'DJIBOUTI',
              'nicename' => 'Djibouti',
              'iso3_code' => 'DJI',
              'm49_code' => 262,
              'phone_code' => 253,
            ),
            59 =>
            array (
              'iso_code' => 'DM',
              'name' => 'DOMINICA',
              'nicename' => 'Dominica',
              'iso3_code' => 'DMA',
              'm49_code' => 212,
              'phone_code' => 1767,
            ),
            60 =>
            array (
              'iso_code' => 'DO',
              'name' => 'DOMINICAN REPUBLIC',
              'nicename' => 'Dominican Republic',
              'iso3_code' => 'DOM',
              'm49_code' => 214,
              'phone_code' => 1809,
            ),
            61 =>
            array (
              'iso_code' => 'EC',
              'name' => 'ECUADOR',
              'nicename' => 'Ecuador',
              'iso3_code' => 'ECU',
              'm49_code' => 218,
              'phone_code' => 593,
            ),
            62 =>
            array (
              'iso_code' => 'EG',
              'name' => 'EGYPT',
              'nicename' => 'Egypt',
              'iso3_code' => 'EGY',
              'm49_code' => 818,
              'phone_code' => 20,
            ),
            63 =>
            array (
              'iso_code' => 'SV',
              'name' => 'EL SALVADOR',
              'nicename' => 'El Salvador',
              'iso3_code' => 'SLV',
              'm49_code' => 222,
              'phone_code' => 503,
            ),
            64 =>
            array (
              'iso_code' => 'GQ',
              'name' => 'EQUATORIAL GUINEA',
              'nicename' => 'Equatorial Guinea',
              'iso3_code' => 'GNQ',
              'm49_code' => 226,
              'phone_code' => 240,
            ),
            65 =>
            array (
              'iso_code' => 'ER',
              'name' => 'ERITREA',
              'nicename' => 'Eritrea',
              'iso3_code' => 'ERI',
              'm49_code' => 232,
              'phone_code' => 291,
            ),
            66 =>
            array (
              'iso_code' => 'EE',
              'name' => 'ESTONIA',
              'nicename' => 'Estonia',
              'iso3_code' => 'EST',
              'm49_code' => 233,
              'phone_code' => 372,
            ),
            67 =>
            array (
              'iso_code' => 'ET',
              'name' => 'ETHIOPIA',
              'nicename' => 'Ethiopia',
              'iso3_code' => 'ETH',
              'm49_code' => 231,
              'phone_code' => 251,
            ),
            68 =>
            array (
              'iso_code' => 'FK',
              'name' => 'FALKLAND ISLANDS [MALVINAS]',
              'nicename' => 'Falkland Islands [Malvinas]',
              'iso3_code' => 'FLK',
              'm49_code' => 238,
              'phone_code' => 500,
            ),
            69 =>
            array (
              'iso_code' => 'FO',
              'name' => 'FAROE ISLANDS',
              'nicename' => 'Faroe Islands',
              'iso3_code' => 'FRO',
              'm49_code' => 234,
              'phone_code' => 298,
            ),
            70 =>
            array (
              'iso_code' => 'FJ',
              'name' => 'FIJI',
              'nicename' => 'Fiji',
              'iso3_code' => 'FJI',
              'm49_code' => 242,
              'phone_code' => 679,
            ),
            71 =>
            array (
              'iso_code' => 'FI',
              'name' => 'FINLAND',
              'nicename' => 'Finland',
              'iso3_code' => 'FIN',
              'm49_code' => 246,
              'phone_code' => 358,
            ),
            72 =>
            array (
              'iso_code' => 'FR',
              'name' => 'FRANCE',
              'nicename' => 'France',
              'iso3_code' => 'FRA',
              'm49_code' => 250,
              'phone_code' => 33,
            ),
            73 =>
            array (
              'iso_code' => 'GF',
              'name' => 'FRENCH GUIANA',
              'nicename' => 'French Guiana',
              'iso3_code' => 'GUF',
              'm49_code' => 254,
              'phone_code' => 594,
            ),
            74 =>
            array (
              'iso_code' => 'PF',
              'name' => 'FRENCH POLYNESIA',
              'nicename' => 'French Polynesia',
              'iso3_code' => 'PYF',
              'm49_code' => 258,
              'phone_code' => 689,
            ),
            75 =>
            array (
              'iso_code' => 'TF',
              'name' => 'FRENCH SOUTHERN TERRITORIES',
              'nicename' => 'French Southern Territories',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 0,
            ),
            76 =>
            array (
              'iso_code' => 'GA',
              'name' => 'GABON',
              'nicename' => 'Gabon',
              'iso3_code' => 'GAB',
              'm49_code' => 266,
              'phone_code' => 241,
            ),
            77 =>
            array (
              'iso_code' => 'GM',
              'name' => 'GAMBIA',
              'nicename' => 'Gambia',
              'iso3_code' => 'GMB',
              'm49_code' => 270,
              'phone_code' => 220,
            ),
            78 =>
            array (
              'iso_code' => 'GE',
              'name' => 'GEORGIA',
              'nicename' => 'Georgia',
              'iso3_code' => 'GEO',
              'm49_code' => 268,
              'phone_code' => 995,
            ),
            79 =>
            array (
              'iso_code' => 'DE',
              'name' => 'GERMANY',
              'nicename' => 'Germany',
              'iso3_code' => 'DEU',
              'm49_code' => 276,
              'phone_code' => 49,
            ),
            80 =>
            array (
              'iso_code' => 'GH',
              'name' => 'GHANA',
              'nicename' => 'Ghana',
              'iso3_code' => 'GHA',
              'm49_code' => 288,
              'phone_code' => 233,
            ),
            81 =>
            array (
              'iso_code' => 'GI',
              'name' => 'GIBRALTAR',
              'nicename' => 'Gibraltar',
              'iso3_code' => 'GIB',
              'm49_code' => 292,
              'phone_code' => 350,
            ),
            82 =>
            array (
              'iso_code' => 'GR',
              'name' => 'GREECE',
              'nicename' => 'Greece',
              'iso3_code' => 'GRC',
              'm49_code' => 300,
              'phone_code' => 30,
            ),
            83 =>
            array (
              'iso_code' => 'GL',
              'name' => 'GREENLAND',
              'nicename' => 'Greenland',
              'iso3_code' => 'GRL',
              'm49_code' => 304,
              'phone_code' => 299,
            ),
            84 =>
            array (
              'iso_code' => 'GD',
              'name' => 'GRENADA',
              'nicename' => 'Grenada',
              'iso3_code' => 'GRD',
              'm49_code' => 308,
              'phone_code' => 1473,
            ),
            85 =>
            array (
              'iso_code' => 'GP',
              'name' => 'GUADELOUPE',
              'nicename' => 'Guadeloupe',
              'iso3_code' => 'GLP',
              'm49_code' => 312,
              'phone_code' => 590,
            ),
            86 =>
            array (
              'iso_code' => 'GU',
              'name' => 'GUAM',
              'nicename' => 'Guam',
              'iso3_code' => 'GUM',
              'm49_code' => 316,
              'phone_code' => 1671,
            ),
            87 =>
            array (
              'iso_code' => 'GT',
              'name' => 'GUATEMALA',
              'nicename' => 'Guatemala',
              'iso3_code' => 'GTM',
              'm49_code' => 320,
              'phone_code' => 502,
            ),
            88 =>
            array (
              'iso_code' => 'GN',
              'name' => 'GUINEA',
              'nicename' => 'Guinea',
              'iso3_code' => 'GIN',
              'm49_code' => 324,
              'phone_code' => 224,
            ),
            89 =>
            array (
              'iso_code' => 'GW',
              'name' => 'GUINEA-BISSAU',
              'nicename' => 'Guinea-Bissau',
              'iso3_code' => 'GNB',
              'm49_code' => 624,
              'phone_code' => 245,
            ),
            90 =>
            array (
              'iso_code' => 'GY',
              'name' => 'GUYANA',
              'nicename' => 'Guyana',
              'iso3_code' => 'GUY',
              'm49_code' => 328,
              'phone_code' => 592,
            ),
            91 =>
            array (
              'iso_code' => 'HT',
              'name' => 'HAITI',
              'nicename' => 'Haiti',
              'iso3_code' => 'HTI',
              'm49_code' => 332,
              'phone_code' => 509,
            ),
            92 =>
            array (
              'iso_code' => 'HM',
              'name' => 'HEARD ISLAND AND MCDONALD ISLANDS',
              'nicename' => 'Heard Island and Mcdonald Islands',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 0,
            ),
            93 =>
            array (
              'iso_code' => 'VA',
              'name' => 'HOLY SEE [VATICAN CITY STATE]',
              'nicename' => 'Holy See [Vatican City State]',
              'iso3_code' => 'VAT',
              'm49_code' => 336,
              'phone_code' => 39,
            ),
            94 =>
            array (
              'iso_code' => 'HN',
              'name' => 'HONDURAS',
              'nicename' => 'Honduras',
              'iso3_code' => 'HND',
              'm49_code' => 340,
              'phone_code' => 504,
            ),
            95 =>
            array (
              'iso_code' => 'HK',
              'name' => 'HONG KONG',
              'nicename' => 'Hong Kong',
              'iso3_code' => 'HKG',
              'm49_code' => 344,
              'phone_code' => 852,
            ),
            96 =>
            array (
              'iso_code' => 'HU',
              'name' => 'HUNGARY',
              'nicename' => 'Hungary',
              'iso3_code' => 'HUN',
              'm49_code' => 348,
              'phone_code' => 36,
            ),
            97 =>
            array (
              'iso_code' => 'IS',
              'name' => 'ICELAND',
              'nicename' => 'Iceland',
              'iso3_code' => 'ISL',
              'm49_code' => 352,
              'phone_code' => 354,
            ),
            98 =>
            array (
              'iso_code' => 'IN',
              'name' => 'INDIA',
              'nicename' => 'India',
              'iso3_code' => 'IND',
              'm49_code' => 356,
              'phone_code' => 91,
            ),
            99 =>
            array (
              'iso_code' => 'ID',
              'name' => 'INDONESIA',
              'nicename' => 'Indonesia',
              'iso3_code' => 'IDN',
              'm49_code' => 360,
              'phone_code' => 62,
            ),
            100 =>
            array (
              'iso_code' => 'IR',
              'name' => 'IRAN, ISLAMIC REPUBLIC OF',
              'nicename' => 'Iran, Islamic Republic of',
              'iso3_code' => 'IRN',
              'm49_code' => 364,
              'phone_code' => 98,
            ),
            101 =>
            array (
              'iso_code' => 'IQ',
              'name' => 'IRAQ',
              'nicename' => 'Iraq',
              'iso3_code' => 'IRQ',
              'm49_code' => 368,
              'phone_code' => 964,
            ),
            102 =>
            array (
              'iso_code' => 'IE',
              'name' => 'IRELAND',
              'nicename' => 'Ireland',
              'iso3_code' => 'IRL',
              'm49_code' => 372,
              'phone_code' => 353,
            ),
            103 =>
            array (
              'iso_code' => 'IL',
              'name' => 'ISRAEL',
              'nicename' => 'Israel',
              'iso3_code' => 'ISR',
              'm49_code' => 376,
              'phone_code' => 972,
            ),
            104 =>
            array (
              'iso_code' => 'IT',
              'name' => 'ITALY',
              'nicename' => 'Italy',
              'iso3_code' => 'ITA',
              'm49_code' => 380,
              'phone_code' => 39,
            ),
            105 =>
            array (
              'iso_code' => 'JM',
              'name' => 'JAMAICA',
              'nicename' => 'Jamaica',
              'iso3_code' => 'JAM',
              'm49_code' => 388,
              'phone_code' => 1876,
            ),
            106 =>
            array (
              'iso_code' => 'JP',
              'name' => 'JAPAN',
              'nicename' => 'Japan',
              'iso3_code' => 'JPN',
              'm49_code' => 392,
              'phone_code' => 81,
            ),
            107 =>
            array (
              'iso_code' => 'JO',
              'name' => 'JORDAN',
              'nicename' => 'Jordan',
              'iso3_code' => 'JOR',
              'm49_code' => 400,
              'phone_code' => 962,
            ),
            108 =>
            array (
              'iso_code' => 'KZ',
              'name' => 'KAZAKHSTAN',
              'nicename' => 'Kazakhstan',
              'iso3_code' => 'KAZ',
              'm49_code' => 398,
              'phone_code' => 7,
            ),
            109 =>
            array (
              'iso_code' => 'KE',
              'name' => 'KENYA',
              'nicename' => 'Kenya',
              'iso3_code' => 'KEN',
              'm49_code' => 404,
              'phone_code' => 254,
            ),
            110 =>
            array (
              'iso_code' => 'KI',
              'name' => 'KIRIBATI',
              'nicename' => 'Kiribati',
              'iso3_code' => 'KIR',
              'm49_code' => 296,
              'phone_code' => 686,
            ),
            111 =>
            array (
              'iso_code' => 'KP',
              'name' => 'KOREA, DEMOCRATIC PEOPLES REPUBLIC OF',
              'nicename' => 'Korea, Democratic Peoples Republic of',
              'iso3_code' => 'PRK',
              'm49_code' => 408,
              'phone_code' => 850,
            ),
            112 =>
            array (
              'iso_code' => 'KR',
              'name' => 'KOREA, REPUBLIC OF',
              'nicename' => 'Korea, Republic of',
              'iso3_code' => 'KOR',
              'm49_code' => 410,
              'phone_code' => 82,
            ),
            113 =>
            array (
              'iso_code' => 'KW',
              'name' => 'KUWAIT',
              'nicename' => 'Kuwait',
              'iso3_code' => 'KWT',
              'm49_code' => 414,
              'phone_code' => 965,
            ),
            114 =>
            array (
              'iso_code' => 'KG',
              'name' => 'KYRGYZSTAN',
              'nicename' => 'Kyrgyzstan',
              'iso3_code' => 'KGZ',
              'm49_code' => 417,
              'phone_code' => 996,
            ),
            115 =>
            array (
              'iso_code' => 'LA',
              'name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC',
              'nicename' => 'Lao Peoples Democratic Republic',
              'iso3_code' => 'LAO',
              'm49_code' => 418,
              'phone_code' => 856,
            ),
            116 =>
            array (
              'iso_code' => 'LV',
              'name' => 'LATVIA',
              'nicename' => 'Latvia',
              'iso3_code' => 'LVA',
              'm49_code' => 428,
              'phone_code' => 371,
            ),
            117 =>
            array (
              'iso_code' => 'LB',
              'name' => 'LEBANON',
              'nicename' => 'Lebanon',
              'iso3_code' => 'LBN',
              'm49_code' => 422,
              'phone_code' => 961,
            ),
            118 =>
            array (
              'iso_code' => 'LS',
              'name' => 'LESOTHO',
              'nicename' => 'Lesotho',
              'iso3_code' => 'LSO',
              'm49_code' => 426,
              'phone_code' => 266,
            ),
            119 =>
            array (
              'iso_code' => 'LR',
              'name' => 'LIBERIA',
              'nicename' => 'Liberia',
              'iso3_code' => 'LBR',
              'm49_code' => 430,
              'phone_code' => 231,
            ),
            120 =>
            array (
              'iso_code' => 'LY',
              'name' => 'LIBYAN ARAB JAMAHIRIYA',
              'nicename' => 'Libyan Arab Jamahiriya',
              'iso3_code' => 'LBY',
              'm49_code' => 434,
              'phone_code' => 218,
            ),
            121 =>
            array (
              'iso_code' => 'LI',
              'name' => 'LIECHTENSTEIN',
              'nicename' => 'Liechtenstein',
              'iso3_code' => 'LIE',
              'm49_code' => 438,
              'phone_code' => 423,
            ),
            122 =>
            array (
              'iso_code' => 'LT',
              'name' => 'LITHUANIA',
              'nicename' => 'Lithuania',
              'iso3_code' => 'LTU',
              'm49_code' => 440,
              'phone_code' => 370,
            ),
            123 =>
            array (
              'iso_code' => 'LU',
              'name' => 'LUXEMBOURG',
              'nicename' => 'Luxembourg',
              'iso3_code' => 'LUX',
              'm49_code' => 442,
              'phone_code' => 352,
            ),
            124 =>
            array (
              'iso_code' => 'MO',
              'name' => 'MACAO',
              'nicename' => 'Macao',
              'iso3_code' => 'MAC',
              'm49_code' => 446,
              'phone_code' => 853,
            ),
            125 =>
            array (
              'iso_code' => 'MK',
              'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
              'nicename' => 'Macedonia, the Former Yugoslav Republic of',
              'iso3_code' => 'MKD',
              'm49_code' => 807,
              'phone_code' => 389,
            ),
            126 =>
            array (
              'iso_code' => 'MG',
              'name' => 'MADAGASCAR',
              'nicename' => 'Madagascar',
              'iso3_code' => 'MDG',
              'm49_code' => 450,
              'phone_code' => 261,
            ),
            127 =>
            array (
              'iso_code' => 'MW',
              'name' => 'MALAWI',
              'nicename' => 'Malawi',
              'iso3_code' => 'MWI',
              'm49_code' => 454,
              'phone_code' => 265,
            ),
            128 =>
            array (
              'iso_code' => 'MY',
              'name' => 'MALAYSIA',
              'nicename' => 'Malaysia',
              'iso3_code' => 'MYS',
              'm49_code' => 458,
              'phone_code' => 60,
            ),
            129 =>
            array (
              'iso_code' => 'MV',
              'name' => 'MALDIVES',
              'nicename' => 'Maldives',
              'iso3_code' => 'MDV',
              'm49_code' => 462,
              'phone_code' => 960,
            ),
            130 =>
            array (
              'iso_code' => 'ML',
              'name' => 'MALI',
              'nicename' => 'Mali',
              'iso3_code' => 'MLI',
              'm49_code' => 466,
              'phone_code' => 223,
            ),
            131 =>
            array (
              'iso_code' => 'MT',
              'name' => 'MALTA',
              'nicename' => 'Malta',
              'iso3_code' => 'MLT',
              'm49_code' => 470,
              'phone_code' => 356,
            ),
            132 =>
            array (
              'iso_code' => 'MH',
              'name' => 'MARSHALL ISLANDS',
              'nicename' => 'Marshall Islands',
              'iso3_code' => 'MHL',
              'm49_code' => 584,
              'phone_code' => 692,
            ),
            133 =>
            array (
              'iso_code' => 'MQ',
              'name' => 'MARTINIQUE',
              'nicename' => 'Martinique',
              'iso3_code' => 'MTQ',
              'm49_code' => 474,
              'phone_code' => 596,
            ),
            134 =>
            array (
              'iso_code' => 'MR',
              'name' => 'MAURITANIA',
              'nicename' => 'Mauritania',
              'iso3_code' => 'MRT',
              'm49_code' => 478,
              'phone_code' => 222,
            ),
            135 =>
            array (
              'iso_code' => 'MU',
              'name' => 'MAURITIUS',
              'nicename' => 'Mauritius',
              'iso3_code' => 'MUS',
              'm49_code' => 480,
              'phone_code' => 230,
            ),
            136 =>
            array (
              'iso_code' => 'YT',
              'name' => 'MAYOTTE',
              'nicename' => 'Mayotte',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 269,
            ),
            137 =>
            array (
              'iso_code' => 'MX',
              'name' => 'MEXICO',
              'nicename' => 'Mexico',
              'iso3_code' => 'MEX',
              'm49_code' => 484,
              'phone_code' => 52,
            ),
            138 =>
            array (
              'iso_code' => 'FM',
              'name' => 'MICRONESIA, FEDERATED STATES OF',
              'nicename' => 'Micronesia, Federated States of',
              'iso3_code' => 'FSM',
              'm49_code' => 583,
              'phone_code' => 691,
            ),
            139 =>
            array (
              'iso_code' => 'MD',
              'name' => 'MOLDOVA, REPUBLIC OF',
              'nicename' => 'Moldova, Republic of',
              'iso3_code' => 'MDA',
              'm49_code' => 498,
              'phone_code' => 373,
            ),
            140 =>
            array (
              'iso_code' => 'MC',
              'name' => 'MONACO',
              'nicename' => 'Monaco',
              'iso3_code' => 'MCO',
              'm49_code' => 492,
              'phone_code' => 377,
            ),
            141 =>
            array (
              'iso_code' => 'MN',
              'name' => 'MONGOLIA',
              'nicename' => 'Mongolia',
              'iso3_code' => 'MNG',
              'm49_code' => 496,
              'phone_code' => 976,
            ),
            142 =>
            array (
              'iso_code' => 'MS',
              'name' => 'MONTSERRAT',
              'nicename' => 'Montserrat',
              'iso3_code' => 'MSR',
              'm49_code' => 500,
              'phone_code' => 1664,
            ),
            143 =>
            array (
              'iso_code' => 'MA',
              'name' => 'MOROCCO',
              'nicename' => 'Morocco',
              'iso3_code' => 'MAR',
              'm49_code' => 504,
              'phone_code' => 212,
            ),
            144 =>
            array (
              'iso_code' => 'MZ',
              'name' => 'MOZAMBIQUE',
              'nicename' => 'Mozambique',
              'iso3_code' => 'MOZ',
              'm49_code' => 508,
              'phone_code' => 258,
            ),
            145 =>
            array (
              'iso_code' => 'MM',
              'name' => 'MYANMAR',
              'nicename' => 'Myanmar',
              'iso3_code' => 'MMR',
              'm49_code' => 104,
              'phone_code' => 95,
            ),
            146 =>
            array (
              'iso_code' => 'NA',
              'name' => 'NAMIBIA',
              'nicename' => 'Namibia',
              'iso3_code' => 'NAM',
              'm49_code' => 516,
              'phone_code' => 264,
            ),
            147 =>
            array (
              'iso_code' => 'NR',
              'name' => 'NAURU',
              'nicename' => 'Nauru',
              'iso3_code' => 'NRU',
              'm49_code' => 520,
              'phone_code' => 674,
            ),
            148 =>
            array (
              'iso_code' => 'NP',
              'name' => 'NEPAL',
              'nicename' => 'Nepal',
              'iso3_code' => 'NPL',
              'm49_code' => 524,
              'phone_code' => 977,
            ),
            149 =>
            array (
              'iso_code' => 'NL',
              'name' => 'NETHERLANDS',
              'nicename' => 'Netherlands',
              'iso3_code' => 'NLD',
              'm49_code' => 528,
              'phone_code' => 31,
            ),
            150 =>
            array (
              'iso_code' => 'AN',
              'name' => 'NETHERLANDS ANTILLES',
              'nicename' => 'Netherlands Antilles',
              'iso3_code' => 'ANT',
              'm49_code' => 530,
              'phone_code' => 599,
            ),
            151 =>
            array (
              'iso_code' => 'NC',
              'name' => 'NEW CALEDONIA',
              'nicename' => 'New Caledonia',
              'iso3_code' => 'NCL',
              'm49_code' => 540,
              'phone_code' => 687,
            ),
            152 =>
            array (
              'iso_code' => 'NZ',
              'name' => 'NEW ZEALAND',
              'nicename' => 'New Zealand',
              'iso3_code' => 'NZL',
              'm49_code' => 554,
              'phone_code' => 64,
            ),
            153 =>
            array (
              'iso_code' => 'NI',
              'name' => 'NICARAGUA',
              'nicename' => 'Nicaragua',
              'iso3_code' => 'NIC',
              'm49_code' => 558,
              'phone_code' => 505,
            ),
            154 =>
            array (
              'iso_code' => 'NE',
              'name' => 'NIGER',
              'nicename' => 'Niger',
              'iso3_code' => 'NER',
              'm49_code' => 562,
              'phone_code' => 227,
            ),
            155 =>
            array (
              'iso_code' => 'NG',
              'name' => 'NIGERIA',
              'nicename' => 'Nigeria',
              'iso3_code' => 'NGA',
              'm49_code' => 566,
              'phone_code' => 234,
            ),
            156 =>
            array (
              'iso_code' => 'NU',
              'name' => 'NIUE',
              'nicename' => 'Niue',
              'iso3_code' => 'NIU',
              'm49_code' => 570,
              'phone_code' => 683,
            ),
            157 =>
            array (
              'iso_code' => 'NF',
              'name' => 'NORFOLK ISLAND',
              'nicename' => 'Norfolk Island',
              'iso3_code' => 'NFK',
              'm49_code' => 574,
              'phone_code' => 672,
            ),
            158 =>
            array (
              'iso_code' => 'MP',
              'name' => 'NORTHERN MARIANA ISLANDS',
              'nicename' => 'Northern Mariana Islands',
              'iso3_code' => 'MNP',
              'm49_code' => 580,
              'phone_code' => 1670,
            ),
            159 =>
            array (
              'iso_code' => 'NO',
              'name' => 'NORWAY',
              'nicename' => 'Norway',
              'iso3_code' => 'NOR',
              'm49_code' => 578,
              'phone_code' => 47,
            ),
            160 =>
            array (
              'iso_code' => 'OM',
              'name' => 'OMAN',
              'nicename' => 'Oman',
              'iso3_code' => 'OMN',
              'm49_code' => 512,
              'phone_code' => 968,
            ),
            161 =>
            array (
              'iso_code' => 'PK',
              'name' => 'PAKISTAN',
              'nicename' => 'Pakistan',
              'iso3_code' => 'PAK',
              'm49_code' => 586,
              'phone_code' => 92,
            ),
            162 =>
            array (
              'iso_code' => 'PW',
              'name' => 'PALAU',
              'nicename' => 'Palau',
              'iso3_code' => 'PLW',
              'm49_code' => 585,
              'phone_code' => 680,
            ),
            163 =>
            array (
              'iso_code' => 'PS',
              'name' => 'PALESTINIAN TERRITORY, OCCUPIED',
              'nicename' => 'Palestinian Territory, Occupied',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 970,
            ),
            164 =>
            array (
              'iso_code' => 'PA',
              'name' => 'PANAMA',
              'nicename' => 'Panama',
              'iso3_code' => 'PAN',
              'm49_code' => 591,
              'phone_code' => 507,
            ),
            165 =>
            array (
              'iso_code' => 'PG',
              'name' => 'PAPUA NEW GUINEA',
              'nicename' => 'Papua New Guinea',
              'iso3_code' => 'PNG',
              'm49_code' => 598,
              'phone_code' => 675,
            ),
            166 =>
            array (
              'iso_code' => 'PY',
              'name' => 'PARAGUAY',
              'nicename' => 'Paraguay',
              'iso3_code' => 'PRY',
              'm49_code' => 600,
              'phone_code' => 595,
            ),
            167 =>
            array (
              'iso_code' => 'PE',
              'name' => 'PERU',
              'nicename' => 'Peru',
              'iso3_code' => 'PER',
              'm49_code' => 604,
              'phone_code' => 51,
            ),
            168 =>
            array (
              'iso_code' => 'PH',
              'name' => 'PHILIPPINES',
              'nicename' => 'Philippines',
              'iso3_code' => 'PHL',
              'm49_code' => 608,
              'phone_code' => 63,
            ),
            169 =>
            array (
              'iso_code' => 'PN',
              'name' => 'PITCAIRN',
              'nicename' => 'Pitcairn',
              'iso3_code' => 'PCN',
              'm49_code' => 612,
              'phone_code' => 0,
            ),
            170 =>
            array (
              'iso_code' => 'PL',
              'name' => 'POLAND',
              'nicename' => 'Poland',
              'iso3_code' => 'POL',
              'm49_code' => 616,
              'phone_code' => 48,
            ),
            171 =>
            array (
              'iso_code' => 'PT',
              'name' => 'PORTUGAL',
              'nicename' => 'Portugal',
              'iso3_code' => 'PRT',
              'm49_code' => 620,
              'phone_code' => 351,
            ),
            172 =>
            array (
              'iso_code' => 'PR',
              'name' => 'PUERTO RICO',
              'nicename' => 'Puerto Rico',
              'iso3_code' => 'PRI',
              'm49_code' => 630,
              'phone_code' => 1787,
            ),
            173 =>
            array (
              'iso_code' => 'QA',
              'name' => 'QATAR',
              'nicename' => 'Qatar',
              'iso3_code' => 'QAT',
              'm49_code' => 634,
              'phone_code' => 974,
            ),
            174 =>
            array (
              'iso_code' => 'RE',
              'name' => 'REUNION',
              'nicename' => 'Reunion',
              'iso3_code' => 'REU',
              'm49_code' => 638,
              'phone_code' => 262,
            ),
            175 =>
            array (
              'iso_code' => 'RO',
              'name' => 'ROMANIA',
              'nicename' => 'Romania',
              'iso3_code' => 'ROM',
              'm49_code' => 642,
              'phone_code' => 40,
            ),
            176 =>
            array (
              'iso_code' => 'RU',
              'name' => 'RUSSIAN FEDERATION',
              'nicename' => 'Russian Federation',
              'iso3_code' => 'RUS',
              'm49_code' => 643,
              'phone_code' => 70,
            ),
            177 =>
            array (
              'iso_code' => 'RW',
              'name' => 'RWANDA',
              'nicename' => 'Rwanda',
              'iso3_code' => 'RWA',
              'm49_code' => 646,
              'phone_code' => 250,
            ),
            178 =>
            array (
              'iso_code' => 'SH',
              'name' => 'SAINT HELENA',
              'nicename' => 'Saint Helena',
              'iso3_code' => 'SHN',
              'm49_code' => 654,
              'phone_code' => 290,
            ),
            179 =>
            array (
              'iso_code' => 'KN',
              'name' => 'SAINT KITTS AND NEVIS',
              'nicename' => 'Saint Kitts and Nevis',
              'iso3_code' => 'KNA',
              'm49_code' => 659,
              'phone_code' => 1869,
            ),
            180 =>
            array (
              'iso_code' => 'LC',
              'name' => 'SAINT LUCIA',
              'nicename' => 'Saint Lucia',
              'iso3_code' => 'LCA',
              'm49_code' => 662,
              'phone_code' => 1758,
            ),
            181 =>
            array (
              'iso_code' => 'PM',
              'name' => 'SAINT PIERRE AND MIQUELON',
              'nicename' => 'Saint Pierre and Miquelon',
              'iso3_code' => 'SPM',
              'm49_code' => 666,
              'phone_code' => 508,
            ),
            182 =>
            array (
              'iso_code' => 'VC',
              'name' => 'SAINT VINCENT AND THE GRENADINES',
              'nicename' => 'Saint Vincent and the Grenadines',
              'iso3_code' => 'VCT',
              'm49_code' => 670,
              'phone_code' => 1784,
            ),
            183 =>
            array (
              'iso_code' => 'WS',
              'name' => 'SAMOA',
              'nicename' => 'Samoa',
              'iso3_code' => 'WSM',
              'm49_code' => 882,
              'phone_code' => 684,
            ),
            184 =>
            array (
              'iso_code' => 'SM',
              'name' => 'SAN MARINO',
              'nicename' => 'San Marino',
              'iso3_code' => 'SMR',
              'm49_code' => 674,
              'phone_code' => 378,
            ),
            185 =>
            array (
              'iso_code' => 'ST',
              'name' => 'SAO TOME AND PRINCIPE',
              'nicename' => 'Sao Tome and Principe',
              'iso3_code' => 'STP',
              'm49_code' => 678,
              'phone_code' => 239,
            ),
            186 =>
            array (
              'iso_code' => 'SA',
              'name' => 'SAUDI ARABIA',
              'nicename' => 'Saudi Arabia',
              'iso3_code' => 'SAU',
              'm49_code' => 682,
              'phone_code' => 966,
            ),
            187 =>
            array (
              'iso_code' => 'SN',
              'name' => 'SENEGAL',
              'nicename' => 'Senegal',
              'iso3_code' => 'SEN',
              'm49_code' => 686,
              'phone_code' => 221,
            ),
            188 =>
            array (
              'iso_code' => 'CS',
              'name' => 'SERBIA AND MONTENEGRO',
              'nicename' => 'Serbia and Montenegro',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 381,
            ),
            189 =>
            array (
              'iso_code' => 'SC',
              'name' => 'SEYCHELLES',
              'nicename' => 'Seychelles',
              'iso3_code' => 'SYC',
              'm49_code' => 690,
              'phone_code' => 248,
            ),
            190 =>
            array (
              'iso_code' => 'SL',
              'name' => 'SIERRA LEONE',
              'nicename' => 'Sierra Leone',
              'iso3_code' => 'SLE',
              'm49_code' => 694,
              'phone_code' => 232,
            ),
            191 =>
            array (
              'iso_code' => 'SG',
              'name' => 'SINGAPORE',
              'nicename' => 'Singapore',
              'iso3_code' => 'SGP',
              'm49_code' => 702,
              'phone_code' => 65,
            ),
            192 =>
            array (
              'iso_code' => 'SK',
              'name' => 'SLOVAKIA',
              'nicename' => 'Slovakia',
              'iso3_code' => 'SVK',
              'm49_code' => 703,
              'phone_code' => 421,
            ),
            193 =>
            array (
              'iso_code' => 'SI',
              'name' => 'SLOVENIA',
              'nicename' => 'Slovenia',
              'iso3_code' => 'SVN',
              'm49_code' => 705,
              'phone_code' => 386,
            ),
            194 =>
            array (
              'iso_code' => 'SB',
              'name' => 'SOLOMON ISLANDS',
              'nicename' => 'Solomon Islands',
              'iso3_code' => 'SLB',
              'm49_code' => 90,
              'phone_code' => 677,
            ),
            195 =>
            array (
              'iso_code' => 'SO',
              'name' => 'SOMALIA',
              'nicename' => 'Somalia',
              'iso3_code' => 'SOM',
              'm49_code' => 706,
              'phone_code' => 252,
            ),
            196 =>
            array (
              'iso_code' => 'ZA',
              'name' => 'SOUTH AFRICA',
              'nicename' => 'South Africa',
              'iso3_code' => 'ZAF',
              'm49_code' => 710,
              'phone_code' => 27,
            ),
            197 =>
            array (
              'iso_code' => 'GS',
              'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
              'nicename' => 'South Georgia and the South Sandwich Islands',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 0,
            ),
            198 =>
            array (
              'iso_code' => 'ES',
              'name' => 'SPAIN',
              'nicename' => 'Spain',
              'iso3_code' => 'ESP',
              'm49_code' => 724,
              'phone_code' => 34,
            ),
            199 =>
            array (
              'iso_code' => 'LK',
              'name' => 'SRI LANKA',
              'nicename' => 'Sri Lanka',
              'iso3_code' => 'LKA',
              'm49_code' => 144,
              'phone_code' => 94,
            ),
            200 =>
            array (
              'iso_code' => 'SD',
              'name' => 'SUDAN',
              'nicename' => 'Sudan',
              'iso3_code' => 'SDN',
              'm49_code' => 736,
              'phone_code' => 249,
            ),
            201 =>
            array (
              'iso_code' => 'SR',
              'name' => 'SURINAME',
              'nicename' => 'Suriname',
              'iso3_code' => 'SUR',
              'm49_code' => 740,
              'phone_code' => 597,
            ),
            202 =>
            array (
              'iso_code' => 'SJ',
              'name' => 'SVALBARD AND JAN MAYEN',
              'nicename' => 'Svalbard and Jan Mayen',
              'iso3_code' => 'SJM',
              'm49_code' => 744,
              'phone_code' => 47,
            ),
            203 =>
            array (
              'iso_code' => 'SZ',
              'name' => 'SWAZILAND',
              'nicename' => 'Swaziland',
              'iso3_code' => 'SWZ',
              'm49_code' => 748,
              'phone_code' => 268,
            ),
            204 =>
            array (
              'iso_code' => 'SE',
              'name' => 'SWEDEN',
              'nicename' => 'Sweden',
              'iso3_code' => 'SWE',
              'm49_code' => 752,
              'phone_code' => 46,
            ),
            205 =>
            array (
              'iso_code' => 'CH',
              'name' => 'SWITZERLAND',
              'nicename' => 'Switzerland',
              'iso3_code' => 'CHE',
              'm49_code' => 756,
              'phone_code' => 41,
            ),
            206 =>
            array (
              'iso_code' => 'SY',
              'name' => 'SYRIAN ARAB REPUBLIC',
              'nicename' => 'Syrian Arab Republic',
              'iso3_code' => 'SYR',
              'm49_code' => 760,
              'phone_code' => 963,
            ),
            207 =>
            array (
              'iso_code' => 'TW',
              'name' => 'TAIWAN, PROVINCE OF CHINA',
              'nicename' => 'Taiwan, Province of China',
              'iso3_code' => 'TWN',
              'm49_code' => 158,
              'phone_code' => 886,
            ),
            208 =>
            array (
              'iso_code' => 'TJ',
              'name' => 'TAJIKISTAN',
              'nicename' => 'Tajikistan',
              'iso3_code' => 'TJK',
              'm49_code' => 762,
              'phone_code' => 992,
            ),
            209 =>
            array (
              'iso_code' => 'TZ',
              'name' => 'TANZANIA, UNITED REPUBLIC OF',
              'nicename' => 'Tanzania, United Republic of',
              'iso3_code' => 'TZA',
              'm49_code' => 834,
              'phone_code' => 255,
            ),
            210 =>
            array (
              'iso_code' => 'TH',
              'name' => 'THAILAND',
              'nicename' => 'Thailand',
              'iso3_code' => 'THA',
              'm49_code' => 764,
              'phone_code' => 66,
            ),
            211 =>
            array (
              'iso_code' => 'TL',
              'name' => 'TIMOR-LESTE',
              'nicename' => 'Timor-Leste',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 670,
            ),
            212 =>
            array (
              'iso_code' => 'TG',
              'name' => 'TOGO',
              'nicename' => 'Togo',
              'iso3_code' => 'TGO',
              'm49_code' => 768,
              'phone_code' => 228,
            ),
            213 =>
            array (
              'iso_code' => 'TK',
              'name' => 'TOKELAU',
              'nicename' => 'Tokelau',
              'iso3_code' => 'TKL',
              'm49_code' => 772,
              'phone_code' => 690,
            ),
            214 =>
            array (
              'iso_code' => 'TO',
              'name' => 'TONGA',
              'nicename' => 'Tonga',
              'iso3_code' => 'TON',
              'm49_code' => 776,
              'phone_code' => 676,
            ),
            215 =>
            array (
              'iso_code' => 'TT',
              'name' => 'TRINIDAD AND TOBAGO',
              'nicename' => 'Trinidad and Tobago',
              'iso3_code' => 'TTO',
              'm49_code' => 780,
              'phone_code' => 1868,
            ),
            216 =>
            array (
              'iso_code' => 'TN',
              'name' => 'TUNISIA',
              'nicename' => 'Tunisia',
              'iso3_code' => 'TUN',
              'm49_code' => 788,
              'phone_code' => 216,
            ),
            217 =>
            array (
              'iso_code' => 'TR',
              'name' => 'TURKEY',
              'nicename' => 'Turkey',
              'iso3_code' => 'TUR',
              'm49_code' => 792,
              'phone_code' => 90,
            ),
            218 =>
            array (
              'iso_code' => 'TM',
              'name' => 'TURKMENISTAN',
              'nicename' => 'Turkmenistan',
              'iso3_code' => 'TKM',
              'm49_code' => 795,
              'phone_code' => 7370,
            ),
            219 =>
            array (
              'iso_code' => 'TC',
              'name' => 'TURKS AND CAICOS ISLANDS',
              'nicename' => 'Turks and Caicos Islands',
              'iso3_code' => 'TCA',
              'm49_code' => 796,
              'phone_code' => 1649,
            ),
            220 =>
            array (
              'iso_code' => 'TV',
              'name' => 'TUVALU',
              'nicename' => 'Tuvalu',
              'iso3_code' => 'TUV',
              'm49_code' => 798,
              'phone_code' => 688,
            ),
            221 =>
            array (
              'iso_code' => 'UG',
              'name' => 'UGANDA',
              'nicename' => 'Uganda',
              'iso3_code' => 'UGA',
              'm49_code' => 800,
              'phone_code' => 256,
            ),
            222 =>
            array (
              'iso_code' => 'UA',
              'name' => 'UKRAINE',
              'nicename' => 'Ukraine',
              'iso3_code' => 'UKR',
              'm49_code' => 804,
              'phone_code' => 380,
            ),
            223 =>
            array (
              'iso_code' => 'AE',
              'name' => 'UNITED ARAB EMIRATES',
              'nicename' => 'United Arab Emirates',
              'iso3_code' => 'ARE',
              'm49_code' => 784,
              'phone_code' => 971,
            ),
            224 =>
            array (
              'iso_code' => 'GB',
              'name' => 'UNITED KINGDOM',
              'nicename' => 'United Kingdom',
              'iso3_code' => 'GBR',
              'm49_code' => 826,
              'phone_code' => 44,
            ),
            225 =>
            array (
              'iso_code' => 'US',
              'name' => 'UNITED STATES',
              'nicename' => 'United States',
              'iso3_code' => 'USA',
              'm49_code' => 840,
              'phone_code' => 1,
            ),
            226 =>
            array (
              'iso_code' => 'UM',
              'name' => 'UNITED STATES MINOR OUTLYING ISLANDS',
              'nicename' => 'United States Minor Outlying Islands',
              'iso3_code' => NULL,
              'm49_code' => NULL,
              'phone_code' => 1,
            ),
            227 =>
            array (
              'iso_code' => 'UY',
              'name' => 'URUGUAY',
              'nicename' => 'Uruguay',
              'iso3_code' => 'URY',
              'm49_code' => 858,
              'phone_code' => 598,
            ),
            228 =>
            array (
              'iso_code' => 'UZ',
              'name' => 'UZBEKISTAN',
              'nicename' => 'Uzbekistan',
              'iso3_code' => 'UZB',
              'm49_code' => 860,
              'phone_code' => 998,
            ),
            229 =>
            array (
              'iso_code' => 'VU',
              'name' => 'VANUATU',
              'nicename' => 'Vanuatu',
              'iso3_code' => 'VUT',
              'm49_code' => 548,
              'phone_code' => 678,
            ),
            230 =>
            array (
              'iso_code' => 'VE',
              'name' => 'VENEZUELA',
              'nicename' => 'Venezuela',
              'iso3_code' => 'VEN',
              'm49_code' => 862,
              'phone_code' => 58,
            ),
            231 =>
            array (
              'iso_code' => 'VN',
              'name' => 'VIET NAM',
              'nicename' => 'Viet Nam',
              'iso3_code' => 'VNM',
              'm49_code' => 704,
              'phone_code' => 84,
            ),
            232 =>
            array (
              'iso_code' => 'VG',
              'name' => 'VIRGIN ISLANDS, BRITISH',
              'nicename' => 'Virgin Islands, British',
              'iso3_code' => 'VGB',
              'm49_code' => 92,
              'phone_code' => 1284,
            ),
            233 =>
            array (
              'iso_code' => 'VI',
              'name' => 'VIRGIN ISLANDS, U.S.',
              'nicename' => 'Virgin Islands, U.s.',
              'iso3_code' => 'VIR',
              'm49_code' => 850,
              'phone_code' => 1340,
            ),
            234 =>
            array (
              'iso_code' => 'WF',
              'name' => 'WALLIS AND FUTUNA',
              'nicename' => 'Wallis and Futuna',
              'iso3_code' => 'WLF',
              'm49_code' => 876,
              'phone_code' => 681,
            ),
            235 =>
            array (
              'iso_code' => 'EH',
              'name' => 'WESTERN SAHARA',
              'nicename' => 'Western Sahara',
              'iso3_code' => 'ESH',
              'm49_code' => 732,
              'phone_code' => 212,
            ),
            236 =>
            array (
              'iso_code' => 'YE',
              'name' => 'YEMEN',
              'nicename' => 'Yemen',
              'iso3_code' => 'YEM',
              'm49_code' => 887,
              'phone_code' => 967,
            ),
            237 =>
            array (
              'iso_code' => 'ZM',
              'name' => 'ZAMBIA',
              'nicename' => 'Zambia',
              'iso3_code' => 'ZMB',
              'm49_code' => 894,
              'phone_code' => 260,
            ),
            238 =>
            array (
              'iso_code' => 'ZW',
              'name' => 'ZIMBABWE',
              'nicename' => 'Zimbabwe',
              'iso3_code' => 'ZWE',
              'm49_code' => 716,
              'phone_code' => 263,
            ),
        );

        foreach ($countries as $country) {
            $newCountry = new Country();
            $newCountry->fill($country);
            $newCountry->save();
        }
    }
}

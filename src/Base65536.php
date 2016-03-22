<?php

namespace Hevertonfreitas\Base65536;

use Exception;

class Base65536
{
    private static $blockStart = [
        0   => 13312,
        1   => 13568,
        2   => 13824,
        3   => 14080,
        4   => 14336,
        5   => 14592,
        6   => 14848,
        7   => 15104,
        8   => 15360,
        9   => 15616,
        10  => 15872,
        11  => 16128,
        12  => 16384,
        13  => 16640,
        14  => 16896,
        15  => 17152,
        16  => 17408,
        17  => 17664,
        18  => 17920,
        19  => 18176,
        20  => 18432,
        21  => 18688,
        22  => 18944,
        23  => 19200,
        24  => 19456,
        25  => 19968,
        26  => 20224,
        27  => 20480,
        28  => 20736,
        29  => 20992,
        30  => 21248,
        31  => 21504,
        32  => 21760,
        33  => 22016,
        34  => 22272,
        35  => 22528,
        36  => 22784,
        37  => 23040,
        38  => 23296,
        39  => 23552,
        40  => 23808,
        41  => 24064,
        42  => 24320,
        43  => 24576,
        44  => 24832,
        45  => 25088,
        46  => 25344,
        47  => 25600,
        48  => 25856,
        49  => 26112,
        50  => 26368,
        51  => 26624,
        52  => 26880,
        53  => 27136,
        54  => 27392,
        55  => 27648,
        56  => 27904,
        57  => 28160,
        58  => 28416,
        59  => 28672,
        60  => 28928,
        61  => 29184,
        62  => 29440,
        63  => 29696,
        64  => 29952,
        65  => 30208,
        66  => 30464,
        67  => 30720,
        68  => 30976,
        69  => 31232,
        70  => 31488,
        71  => 31744,
        72  => 32000,
        73  => 32256,
        74  => 32512,
        75  => 32768,
        76  => 33024,
        77  => 33280,
        78  => 33536,
        79  => 33792,
        80  => 34048,
        81  => 34304,
        82  => 34560,
        83  => 34816,
        84  => 35072,
        85  => 35328,
        86  => 35584,
        87  => 35840,
        88  => 36096,
        89  => 36352,
        90  => 36608,
        91  => 36864,
        92  => 37120,
        93  => 37376,
        94  => 37632,
        95  => 37888,
        96  => 38144,
        97  => 38400,
        98  => 38656,
        99  => 38912,
        100 => 39168,
        101 => 39424,
        102 => 39680,
        103 => 39936,
        104 => 40192,
        105 => 40448,
        106 => 41216,
        107 => 41472,
        108 => 41728,
        109 => 42240,
        110 => 67072,
        111 => 73728,
        112 => 73984,
        113 => 74240,
        114 => 77824,
        115 => 78080,
        116 => 78336,
        117 => 78592,
        118 => 82944,
        119 => 83200,
        120 => 92160,
        121 => 92416,
        122 => 131072,
        123 => 131328,
        124 => 131584,
        125 => 131840,
        126 => 132096,
        127 => 132352,
        128 => 132608,
        129 => 132864,
        130 => 133120,
        131 => 133376,
        132 => 133632,
        133 => 133888,
        134 => 134144,
        135 => 134400,
        136 => 134656,
        137 => 134912,
        138 => 135168,
        139 => 135424,
        140 => 135680,
        141 => 135936,
        142 => 136192,
        143 => 136448,
        144 => 136704,
        145 => 136960,
        146 => 137216,
        147 => 137472,
        148 => 137728,
        149 => 137984,
        150 => 138240,
        151 => 138496,
        152 => 138752,
        153 => 139008,
        154 => 139264,
        155 => 139520,
        156 => 139776,
        157 => 140032,
        158 => 140288,
        159 => 140544,
        160 => 140800,
        161 => 141056,
        162 => 141312,
        163 => 141568,
        164 => 141824,
        165 => 142080,
        166 => 142336,
        167 => 142592,
        168 => 142848,
        169 => 143104,
        170 => 143360,
        171 => 143616,
        172 => 143872,
        173 => 144128,
        174 => 144384,
        175 => 144640,
        176 => 144896,
        177 => 145152,
        178 => 145408,
        179 => 145664,
        180 => 145920,
        181 => 146176,
        182 => 146432,
        183 => 146688,
        184 => 146944,
        185 => 147200,
        186 => 147456,
        187 => 147712,
        188 => 147968,
        189 => 148224,
        190 => 148480,
        191 => 148736,
        192 => 148992,
        193 => 149248,
        194 => 149504,
        195 => 149760,
        196 => 150016,
        197 => 150272,
        198 => 150528,
        199 => 150784,
        200 => 151040,
        201 => 151296,
        202 => 151552,
        203 => 151808,
        204 => 152064,
        205 => 152320,
        206 => 152576,
        207 => 152832,
        208 => 153088,
        209 => 153344,
        210 => 153600,
        211 => 153856,
        212 => 154112,
        213 => 154368,
        214 => 154624,
        215 => 154880,
        216 => 155136,
        217 => 155392,
        218 => 155648,
        219 => 155904,
        220 => 156160,
        221 => 156416,
        222 => 156672,
        223 => 156928,
        224 => 157184,
        225 => 157440,
        226 => 157696,
        227 => 157952,
        228 => 158208,
        229 => 158464,
        230 => 158720,
        231 => 158976,
        232 => 159232,
        233 => 159488,
        234 => 159744,
        235 => 160000,
        236 => 160256,
        237 => 160512,
        238 => 160768,
        239 => 161024,
        240 => 161280,
        241 => 161536,
        242 => 161792,
        243 => 162048,
        244 => 162304,
        245 => 162560,
        246 => 162816,
        247 => 163072,
        248 => 163328,
        249 => 163584,
        250 => 163840,
        251 => 164096,
        252 => 164352,
        253 => 164608,
        254 => 164864,
        255 => 165120,
        -1  => 5376,
    ];

    private static $getB2 = [
        5376   => -1,
        13312  => 0,
        13568  => 1,
        13824  => 2,
        14080  => 3,
        14336  => 4,
        14592  => 5,
        14848  => 6,
        15104  => 7,
        15360  => 8,
        15616  => 9,
        15872  => 10,
        16128  => 11,
        16384  => 12,
        16640  => 13,
        16896  => 14,
        17152  => 15,
        17408  => 16,
        17664  => 17,
        17920  => 18,
        18176  => 19,
        18432  => 20,
        18688  => 21,
        18944  => 22,
        19200  => 23,
        19456  => 24,
        19968  => 25,
        20224  => 26,
        20480  => 27,
        20736  => 28,
        20992  => 29,
        21248  => 30,
        21504  => 31,
        21760  => 32,
        22016  => 33,
        22272  => 34,
        22528  => 35,
        22784  => 36,
        23040  => 37,
        23296  => 38,
        23552  => 39,
        23808  => 40,
        24064  => 41,
        24320  => 42,
        24576  => 43,
        24832  => 44,
        25088  => 45,
        25344  => 46,
        25600  => 47,
        25856  => 48,
        26112  => 49,
        26368  => 50,
        26624  => 51,
        26880  => 52,
        27136  => 53,
        27392  => 54,
        27648  => 55,
        27904  => 56,
        28160  => 57,
        28416  => 58,
        28672  => 59,
        28928  => 60,
        29184  => 61,
        29440  => 62,
        29696  => 63,
        29952  => 64,
        30208  => 65,
        30464  => 66,
        30720  => 67,
        30976  => 68,
        31232  => 69,
        31488  => 70,
        31744  => 71,
        32000  => 72,
        32256  => 73,
        32512  => 74,
        32768  => 75,
        33024  => 76,
        33280  => 77,
        33536  => 78,
        33792  => 79,
        34048  => 80,
        34304  => 81,
        34560  => 82,
        34816  => 83,
        35072  => 84,
        35328  => 85,
        35584  => 86,
        35840  => 87,
        36096  => 88,
        36352  => 89,
        36608  => 90,
        36864  => 91,
        37120  => 92,
        37376  => 93,
        37632  => 94,
        37888  => 95,
        38144  => 96,
        38400  => 97,
        38656  => 98,
        38912  => 99,
        39168  => 100,
        39424  => 101,
        39680  => 102,
        39936  => 103,
        40192  => 104,
        40448  => 105,
        41216  => 106,
        41472  => 107,
        41728  => 108,
        42240  => 109,
        67072  => 110,
        73728  => 111,
        73984  => 112,
        74240  => 113,
        77824  => 114,
        78080  => 115,
        78336  => 116,
        78592  => 117,
        82944  => 118,
        83200  => 119,
        92160  => 120,
        92416  => 121,
        131072 => 122,
        131328 => 123,
        131584 => 124,
        131840 => 125,
        132096 => 126,
        132352 => 127,
        132608 => 128,
        132864 => 129,
        133120 => 130,
        133376 => 131,
        133632 => 132,
        133888 => 133,
        134144 => 134,
        134400 => 135,
        134656 => 136,
        134912 => 137,
        135168 => 138,
        135424 => 139,
        135680 => 140,
        135936 => 141,
        136192 => 142,
        136448 => 143,
        136704 => 144,
        136960 => 145,
        137216 => 146,
        137472 => 147,
        137728 => 148,
        137984 => 149,
        138240 => 150,
        138496 => 151,
        138752 => 152,
        139008 => 153,
        139264 => 154,
        139520 => 155,
        139776 => 156,
        140032 => 157,
        140288 => 158,
        140544 => 159,
        140800 => 160,
        141056 => 161,
        141312 => 162,
        141568 => 163,
        141824 => 164,
        142080 => 165,
        142336 => 166,
        142592 => 167,
        142848 => 168,
        143104 => 169,
        143360 => 170,
        143616 => 171,
        143872 => 172,
        144128 => 173,
        144384 => 174,
        144640 => 175,
        144896 => 176,
        145152 => 177,
        145408 => 178,
        145664 => 179,
        145920 => 180,
        146176 => 181,
        146432 => 182,
        146688 => 183,
        146944 => 184,
        147200 => 185,
        147456 => 186,
        147712 => 187,
        147968 => 188,
        148224 => 189,
        148480 => 190,
        148736 => 191,
        148992 => 192,
        149248 => 193,
        149504 => 194,
        149760 => 195,
        150016 => 196,
        150272 => 197,
        150528 => 198,
        150784 => 199,
        151040 => 200,
        151296 => 201,
        151552 => 202,
        151808 => 203,
        152064 => 204,
        152320 => 205,
        152576 => 206,
        152832 => 207,
        153088 => 208,
        153344 => 209,
        153600 => 210,
        153856 => 211,
        154112 => 212,
        154368 => 213,
        154624 => 214,
        154880 => 215,
        155136 => 216,
        155392 => 217,
        155648 => 218,
        155904 => 219,
        156160 => 220,
        156416 => 221,
        156672 => 222,
        156928 => 223,
        157184 => 224,
        157440 => 225,
        157696 => 226,
        157952 => 227,
        158208 => 228,
        158464 => 229,
        158720 => 230,
        158976 => 231,
        159232 => 232,
        159488 => 233,
        159744 => 234,
        160000 => 235,
        160256 => 236,
        160512 => 237,
        160768 => 238,
        161024 => 239,
        161280 => 240,
        161536 => 241,
        161792 => 242,
        162048 => 243,
        162304 => 244,
        162560 => 245,
        162816 => 246,
        163072 => 247,
        163328 => 248,
        163584 => 249,
        163840 => 250,
        164096 => 251,
        164352 => 252,
        164608 => 253,
        164864 => 254,
        165120 => 255,
    ];

    /**
     * Unicode chr().
     *
     * @link http://php.net/manual/en/function.chr.php#88611
     *
     * @param $val int
     *
     * @return string
     */
    private static function unichr($val)
    {
        return mb_convert_encoding('&#'.intval($val).';', 'UTF-8', 'HTML-ENTITIES');
    }

    /**
     * Unicode ord().
     *
     * @link http://stackoverflow.com/a/9361531
     *
     * @param $string
     *
     * @return bool|int
     */
    private static function uniord($string)
    {
        if (ord($string{0}) >= 0 && ord($string{0}) <= 127) {
            return ord($string{0});
        }
        if (ord($string{0}) >= 192 && ord($string{0}) <= 223) {
            return (ord($string{0}) - 192) * 64 + (ord($string{1}) - 128);
        }
        if (ord($string{0}) >= 224 && ord($string{0}) <= 239) {
            return (ord($string{0}) - 224) * 4096 + (ord($string{1}) - 128) * 64 + (ord($string{2}) - 128);
        }
        if (ord($string{0}) >= 240 && ord($string{0}) <= 247) {
            return (ord($string{0}) - 240) * 262144 + (ord($string{1}) - 128) * 4096 + (ord($string{2}) - 128) * 64 + (ord($string{3}) - 128);
        }
        if (ord($string{0}) >= 248 && ord($string{0}) <= 251) {
            return (ord($string{0}) - 248) * 16777216 + (ord($string{1}) - 128) * 262144 + (ord($string{2}) - 128) * 4096 + (ord($string{3}) - 128) * 64 + (ord($string{4}) - 128);
        }
        if (ord($string{0}) >= 252 && ord($string{0}) <= 253) {
            return (ord($string{0}) - 252) * 1073741824 + (ord($string{1}) - 128) * 16777216 + (ord($string{2}) - 128) * 262144 + (ord($string{3}) - 128) * 4096 + (ord($string{4}) - 128) * 64 + (ord($string{5}) - 128);
        }
        if (ord($string{0}) >= 254 && ord($string{0}) <= 255) { //  error
            return false;
        }

        return 0;
    }

    /**
     * Encodes a string into base65536.
     *
     * @param $string
     *
     * @return string
     */
    public static function encode($string)
    {
        $string = utf8_encode($string);
        $result = [];
        for ($i = 0; $i < mb_strlen($string); $i += 2) {
            $b1 = self::uniord(mb_substr($string, $i, 1));
            $b2 = $i + 1 < mb_strlen($string) ? self::uniord(mb_substr($string, $i + 1, 1)) : -1;
            $codePoint = self::$blockStart[$b2] + $b1;
            $str = self::unichr($codePoint);
            $result[] = $str;
        }

        return implode('', $result);
    }

    /**
     * Decodes a base65536 string.
     *
     * @param $string
     *
     * @throws Exception
     *
     * @return string
     */
    public static function decode($string)
    {
        $result = [];
        $done = false;
        for ($i = 0; $i < mb_strlen($string); $i++) {
            if ($done) {
                throw new Exception('Base65536 sequence continued after final byte');
            }

            $codePoint = self::uniord(mb_substr($string, $i, 1));
            $b1 = $codePoint & ((1 << 8) - 1);
            if (array_key_exists($codePoint - $b1, self::$getB2)) {
                $b2 = self::$getB2[$codePoint - $b1];
            } else {
                throw new Exception('Not a valid Base65536 code point: ' + unichr($codePoint));
            }
            if ($b2 == -1) {
                $result[] = self::unichr($b1);
                $done = true;
            } else {
                $result[] = self::unichr($b1).self::unichr($b2);
            }
            //@TODO verify if the if statement bellow is really needed. It is present in the original algorithm, but it doesn't work here.
            if ($codePoint >= (1 << 16)) {
                //$i++;
            }
        }

        return utf8_decode(implode('', $result));
    }
}

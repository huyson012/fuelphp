<?php
namespace Jalang;

class ConvertJa {
    static $_instance = null;

    public function __construct() {
        
    }
    public static function getInstance() {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function getNumberic() {
        $returnValue = array(
            '０' => '0',
            '１' => '1',
            '２' => '2',
            '３' => '3',
            '４' => '4',
            '５' => '5',
            '６' => '6',
            '７' => '7',
            '８' => '8',
            '９' => '9');

        return $returnValue;
    }

    /**
     * return mapping array of Kana characters
     *
     * @access public
     * @author sonhh@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public static function getKana() {
        $returnValue = array(
            'ガ' => 'ｶﾞ',
            'ギ' => 'ｷﾞ',
            'グ' => 'ｸﾞ',
            'ゲ' => 'ｹﾞ',
            'ゴ' => 'ｺﾞ',
            'ザ' => 'ｻﾞ',
            'ジ' => 'ｼﾞ',
            'ズ' => 'ｽﾞ',
            'ゼ' => 'ｾﾞ',
            'ゾ' => 'ｿﾞ',
            'ダ' => 'ﾀﾞ',
            'ヂ' => 'ﾁﾞ',
            'ヅ' => 'ﾂﾞ',
            'デ' => 'ﾃﾞ',
            'ド' => 'ﾄﾞ',
            'バ' => 'ﾊﾞ',
            'ビ' => 'ﾋﾞ',
            'ブ' => 'ﾌﾞ',
            'ベ' => 'ﾍﾞ',
            'ボ' => 'ﾎﾞ',
            'パ' => 'ﾊﾟ',
            'ピ' => 'ﾋﾟ',
            'プ' => 'ﾌﾟ',
            'ペ' => 'ﾍﾟ',
            'ポ' => 'ﾎﾟ',
            'ヴ' => 'ｳﾞ',
            'ア' => 'ｱ',
            'イ' => 'ｲ',
            'ウ' => 'ｳ',
            'エ' => 'ｴ',
            'オ' => 'ｵ',
            'カ' => 'ｶ',
            'キ' => 'ｷ',
            'ク' => 'ｸ',
            'ケ' => 'ｹ',
            'コ' => 'ｺ',
            'サ' => 'ｻ',
            'シ' => 'ｼ',
            'ス' => 'ｽ',
            'セ' => 'ｾ',
            'ソ' => 'ｿ',
            'タ' => 'ﾀ',
            'チ' => 'ﾁ',
            'ツ' => 'ﾂ',
            'テ' => 'ﾃ',
            'ト' => 'ﾄ',
            'ナ' => 'ﾅ',
            'ニ' => 'ﾆ',
            'ヌ' => 'ﾇ',
            'ネ' => 'ﾈ',
            'ノ' => 'ﾉ',
            'ハ' => 'ﾊ',
            'ヒ' => 'ﾋ',
            'フ' => 'ﾌ',
            'ヘ' => 'ﾍ',
            'ホ' => 'ﾎ',
            'マ' => 'ﾏ',
            'ミ' => 'ﾐ',
            'ム' => 'ﾑ',
            'メ' => 'ﾒ',
            'モ' => 'ﾓ',
            'ヤ' => 'ﾔ',
            'ユ' => 'ﾕ',
            'ヨ' => 'ﾖ',
            'ラ' => 'ﾗ',
            'リ' => 'ﾘ',
            'ル' => 'ﾙ',
            'レ' => 'ﾚ',
            'ロ' => 'ﾛ',
            'ワ' => 'ﾜ',
            'ヲ' => 'ｦ',
            'ン' => 'ﾝ',
            'ァ' => 'ｱ',
            'ィ' => 'ｲ',
            'ゥ' => 'ｳ',
            'ェ' => 'ｴ',
            'ォ' => 'ｵ',
            'ャ' => 'ﾔ',
            'ュ' => 'ﾕ',
            'ョ' => 'ﾖ',
            'ッ' => 'ﾂ',
            'ー' => 'ｰ');

        return $returnValue;
    }
    /**
     * return array with key=katakana 2btyte,value=katakana 1byte
     *
     * @access public
     * @author sonhh@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public function getKanaConvertTo2Byte(){
        $returnValue = array(
            'ガ' => 'ｶﾞ',
            'ギ' => 'ｷﾞ',
            'グ' => 'ｸﾞ',
            'ゲ' => 'ｹﾞ',
            'ゴ' => 'ｺﾞ',
            'ザ' => 'ｻﾞ',
            'ジ' => 'ｼﾞ',
            'ズ' => 'ｽﾞ',
            'ゼ' => 'ｾﾞ',
            'ゾ' => 'ｿﾞ',
            'ダ' => 'ﾀﾞ',
            'ヂ' => 'ﾁﾞ',
            'ヅ' => 'ﾂﾞ',
            'デ' => 'ﾃﾞ',
            'ド' => 'ﾄﾞ',
            'バ' => 'ﾊﾞ',
            'ビ' => 'ﾋﾞ',
            'ブ' => 'ﾌﾞ',
            'ベ' => 'ﾍﾞ',
            'ボ' => 'ﾎﾞ',
            'パ' => 'ﾊﾟ',
            'ピ' => 'ﾋﾟ',
            'プ' => 'ﾌﾟ',
            'ペ' => 'ﾍﾟ',
            'ポ' => 'ﾎﾟ',
            'ヴ' => 'ｳﾞ',
            'ア' => 'ｱ',
            'イ' => 'ｲ',
            'ウ' => 'ｳ',
            'エ' => 'ｴ',
            'オ' => 'ｵ',
            'カ' => 'ｶ',
            'キ' => 'ｷ',
            'ク' => 'ｸ',
            'ケ' => 'ｹ',
            'コ' => 'ｺ',
            'サ' => 'ｻ',
            'シ' => 'ｼ',
            'ス' => 'ｽ',
            'セ' => 'ｾ',
            'ソ' => 'ｿ',
            'タ' => 'ﾀ',
            'チ' => 'ﾁ',
            'ツ' => 'ﾂ',
            'テ' => 'ﾃ',
            'ト' => 'ﾄ',
            'ナ' => 'ﾅ',
            'ニ' => 'ﾆ',
            'ヌ' => 'ﾇ',
            'ネ' => 'ﾈ',
            'ノ' => 'ﾉ',
            'ハ' => 'ﾊ',
            'ヒ' => 'ﾋ',
            'フ' => 'ﾌ',
            'ヘ' => 'ﾍ',
            'ホ' => 'ﾎ',
            'マ' => 'ﾏ',
            'ミ' => 'ﾐ',
            'ム' => 'ﾑ',
            'メ' => 'ﾒ',
            'モ' => 'ﾓ',
            'ヤ' => 'ﾔ',
            'ユ' => 'ﾕ',
            'ヨ' => 'ﾖ',
            'ラ' => 'ﾗ',
            'リ' => 'ﾘ',
            'ル' => 'ﾙ',
            'レ' => 'ﾚ',
            'ロ' => 'ﾛ',
            'ワ' => 'ﾜ',
            'ヲ' => 'ｦ',
            'ン' => 'ﾝ',            
            'ー' => 'ｰ');

        return $returnValue;
    }

    /**
     * return mapping array of Hiragana characters to halfsize (Katakana)
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public static function getHiragana() {
        $returnValue = array(
            'あ' => 'ｱ', 'い' => 'ｲ', 'う' => 'ｳ', 'え' => 'ｴ', 'お' => 'ｵ',
            'か' => 'ｶ', 'き' => 'ｷ', 'く' => 'ｸ', 'け' => 'ｹ', 'こ' => 'ｺ',
            'さ' => 'ｻ', 'し' => 'ｼ', 'す' => 'ｽ', 'せ' => 'ｾ', 'そ' => 'ｿ',
            'た' => 'ﾀ', 'ち' => 'ﾁ', 'つ' => 'ﾂ', 'て' => 'ﾃ', 'と' => 'ﾄ',
            'な' => 'ﾅ', 'に' => 'ﾆ', 'ぬ' => 'ﾇ', 'ね' => 'ﾈ', 'の' => 'ﾉ',
            'は' => 'ﾊ', 'ひ' => 'ﾋ', 'ふ' => 'ﾌ', 'へ' => 'ﾍ', 'ほ' => 'ﾎ',
            'ま' => 'ﾏ', 'み' => 'ﾐ', 'む' => 'ﾑ', 'め' => 'ﾒ', 'も' => 'ﾓ',
            'や' => 'ﾔ', 'ゆ' => 'ﾕ', 'よ' => 'ﾖ', 'ら' => 'ﾗ', 'り' => 'ﾘ',
            'る' => 'ﾙ', 'れ' => 'ﾚ', 'ろ' => 'ﾛ', 'わ' => 'ﾜ', 'を' => 'ｦ',
            'ん' => 'ﾝ', 'ぁ' => 'ｱ', 'ぃ' => 'ｲ', 'ぅ' => 'ｳ', 'ぇ' => 'ｴ',
            'ぉ' => 'ｵ', 'ゃ' => 'ﾔ', 'ゅ' => 'ﾕ', 'ょ' => 'ﾖ', 'っ' => 'ﾂ',
            'が' => 'ｶ', 'ぎ' => 'ｷ', 'ぐ' => 'ｸ', 'げ' => 'ｹ', 'ご' => 'ｺ',
            'ざ' => 'ｻ', 'じ' => 'ｼ', 'ず' => 'ｽ', 'ぜ' => 'ｾ', 'ぞ' => 'ｿ',
            'だ' => 'ﾀ', 'ぢ' => 'ﾁ', 'づ' => 'ﾂ', 'で' => 'ﾃ', 'ど' => 'ﾄ',
            'ば' => 'ﾊ', 'び' => 'ﾋ', 'ぶ' => 'ﾌ', 'べ' => 'ﾍ', 'ぼ' => 'ﾎ',
            'ぱ' => 'ﾊ', 'ぴ' => 'ﾋ', 'ぷ' => 'ﾌ', 'ぺ' => 'ﾍ', 'ぽ' => 'ﾎ'
        );

        return $returnValue;
    }
     /**
     * return mapping array of Hiragana characters to fullsize (Katakana)
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2013/03/07
     * @version 0.1
     */
    public static function getHiraganaAndKata2byte(){
        $returnValue = array(
            'あ' => 'ア', 'い' => 'イ', 'う' => 'ウ', 'え' => 'エ', 'お' => 'オ',
            'か' => 'カ', 'き' => 'キ', 'く' => 'ク', 'け' => 'ケ', 'こ' => 'コ',
            'さ' => 'サ', 'し' => 'シ', 'す' => 'ス', 'せ' => 'セ', 'そ' => 'ソ',
            'た' => 'タ', 'ち' => 'チ', 'つ' => 'ツ', 'て' => 'テ', 'と' => 'ト',
            'な' => 'ナ', 'に' => 'ニ', 'ぬ' => 'ヌ', 'ね' => 'ネ', 'の' => 'ノ',
            'は' => 'ハ', 'ひ' => 'ヒ', 'ふ' => 'フ', 'へ' => 'ヘ', 'ほ' => 'ホ',
            'ま' => 'マ', 'み' => 'ミ', 'む' => 'ム', 'め' => 'メ', 'も' => 'モ',
            'や' => 'ヤ', 'ゆ' => 'ユ', 'よ' => 'ヨ', 'ら' => 'ラ', 'り' => 'リ',
            'る' => 'ル', 'れ' => 'レ', 'ろ' => 'ロ', 'わ' => 'ワ', 'を' => 'ヲ',
            'ん' => 'ン', 'が' => 'ガ', 'ぎ' => 'ギ', 'ぐ' => 'グ', 'げ' => 'ゲ', 
            'ご' => 'ゴ','ざ' => 'ザ', 'じ' => 'ジ', 'ず' => 'ズ', 'ぜ' => 'ゼ', 
            'ぞ' => 'ゾ','だ' => 'ダ', 'ぢ' => 'ヂ', 'づ' => 'ヅ', 'で' => 'デ', 
            'ど' => 'ド','ば' => 'バ', 'び' => 'ビ', 'ぶ' => 'ブ', 'べ' => 'ベ', 
            'ぼ' => 'ボ','ぱ' => 'パ', 'ぴ' => 'ピ', 'ぷ' => 'プ', 'ぺ' => 'ペ', 
            'ぽ' => 'ポ',
            // sound pair(am ghep)
            'ぁ' => 'ァ', 'ぃ' => 'ィ', 'ぅ' => 'ゥ', 'ぇ' => 'ェ',
            'ぉ' => 'ォ', 'ゃ' => 'ャ', 'ゅ' => 'ュ', 'ょ' => 'ョ', 'っ' => 'ッ',
        );
        return $returnValue;
    }
            

    /**
     * return mapping array of Kana characters in approximate searching case
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2009/11/09
     * @version 0.1
     */
    public static function getApproximateKana() {
        $returnValue = array(
            'ｶ' => 'ガ',
            'ｷ' => 'ギ',
            'ｸ' => 'グ',
            'ｹ' => 'ゲ',
            'ｺ' => 'ゴ',
            'ｻ' => 'ザ',
            'ｼ' => 'ジ',
            'ｽ' => 'ズ',
            'ｾ' => 'ゼ',
            'ｿ' => 'ゾ',
            'ﾀ' => 'ダ',
            'ﾁ' => 'ヂ',
            'ﾂ' => 'ヅ',
            'ﾃ' => 'デ',
            'ﾄ' => 'ド',
            'ﾊ' => 'バ',
            'ﾋ' => 'ビ',
            'ﾌ' => 'ブ',
            'ﾍ' => 'ベ',
            'ﾎ' => 'ボ',
            'ﾊ' => 'パ',
            'ﾋ' => 'ピ',
            'ﾌ' => 'プ',
            'ﾍ' => 'ペ',
            'ﾎ' => 'ポ',
            'ｳ' => 'ヴ',
            'ｱ' => 'ア',
            'ｲ' => 'イ',
            'ｳ' => 'ウ',
            'ｴ' => 'エ',
            'ｵ' => 'オ',
            'ｶ' => 'カ',
            'ｷ' => 'キ',
            'ｸ' => 'ク',
            'ｹ' => 'ケ',
            'ｺ' => 'コ',
            'ｻ' => 'サ',
            'ｼ' => 'シ',
            'ｽ' => 'ス',
            'ｾ' => 'セ',
            'ｿ' => 'ソ',
            'ﾀ' => 'タ',
            'ﾁ' => 'チ',
            'ﾂ' => 'ツ',
            'ﾃ' => 'テ',
            'ﾄ' => 'ト',
            'ﾅ' => 'ナ',
            'ﾆ' => 'ニ',
            'ﾇ' => 'ヌ',
            'ﾈ' => 'ネ',
            'ﾉ' => 'ノ',
            'ﾊ' => 'ハ',
            'ﾋ' => 'ヒ',
            'ﾌ' => 'フ',
            'ﾍ' => 'ヘ',
            'ﾎ' => 'ホ',
            'ﾏ' => 'マ',
            'ﾐ' => 'ミ',
            'ﾑ' => 'ム',
            'ﾒ' => 'メ',
            'ﾓ' => 'モ',
            'ﾔ' => 'ヤ',
            'ﾕ' => 'ユ',
            'ﾖ' => 'ヨ',
            'ﾗ' => 'ラ',
            'ﾘ' => 'リ',
            'ﾙ' => 'ル',
            'ﾚ' => 'レ',
            'ﾛ' => 'ロ',
            'ﾜ' => 'ワ',
            'ｦ' => 'ヲ',
            'ﾝ' => 'ン',
            'ｧ' => 'ァ',
            'ｨ' => 'ィ',
            'ｩ' => 'ゥ',
            'ｪ' => 'ェ',
            'ｫ' => 'ォ',
            'ｬ' => 'ャ',
            'ｭ' => 'ュ',
            'ｮ' => 'ョ',
            'ｯ' => 'ッ',
            'ｰ' => 'ー');

        return $returnValue;
    }

    /**
     * return mapping array of Alphabet characters
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public static function getAlphabet() {
        $returnValue = array(
            'Ａ' => 'A',
            'Ｂ' => 'B',
            'Ｃ' => 'C',
            'Ｄ' => 'D',
            'Ｅ' => 'E',
            'Ｆ' => 'F',
            'Ｇ' => 'G',
            'Ｈ' => 'H',
            'Ｉ' => 'I',
            'Ｊ' => 'J',
            'Ｋ' => 'K',
            'Ｌ' => 'L',
            'Ｍ' => 'M',
            'Ｎ' => 'N',
            'Ｏ' => 'O',
            'Ｐ' => 'P',
            'Ｑ' => 'Q',
            'Ｒ' => 'R',
            'Ｓ' => 'S',
            'Ｔ' => 'T',
            'Ｕ' => 'U',
            'Ｖ' => 'V',
            'Ｗ' => 'W',
            'Ｘ' => 'X',
            'Ｙ' => 'Y',
            'Ｚ' => 'Z',
            'ａ' => 'a',
            'ｂ' => 'b',
            'ｃ' => 'c',
            'ｄ' => 'd',
            'ｅ' => 'e',
            'ｆ' => 'f',
            'ｇ' => 'g',
            'ｈ' => 'h',
            'ｉ' => 'i',
            'ｊ' => 'j',
            'ｋ' => 'k',
            'ｌ' => 'l',
            'ｍ' => 'm',
            'ｎ' => 'n',
            'ｏ' => 'o',
            'ｐ' => 'p',
            'ｑ' => 'q',
            'ｒ' => 'r',
            'ｓ' => 's',
            'ｔ' => 't',
            'ｕ' => 'u',
            'ｖ' => 'v',
            'ｗ' => 'w',
            'ｘ' => 'x',
            'ｙ' => 'y',
            'ｚ' => 'z');

        return $returnValue;
    }

    /**
     * return mapping array of Hyphen characters
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public static function getHyphen() {
        $returnValue = array(
            '。' => '。',
            '、' => '、',
            '・' => '・',
            '「' => '「',
            '」' => '」');

        return $returnValue;
    }
    /**
     * return mapping array of SoundPair characters
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public static function getSoundPair() {
        $returnValue = array(
            'ｧ' => 'ｱ',
            'ｨ' => 'ｲ',
            'ｩ' => 'ｳ',
            'ｪ' => 'ｴ',
            'ｫ' => 'ｵ',
            'ｬ' => 'ﾔ',
            'ｭ' => 'ﾕ',
            'ｮ' => 'ﾖ',
            'ｯ' => 'ﾂ'
        );

        return $returnValue;
    }
    public static function getSoundPair2Byte() {
        $returnValue = array(
            'ｧ' => 'ア',
            'ｨ' => 'イ',
            'ｩ' => 'ウ',
            'ｪ' => 'エ',
            'ｫ' => 'オ',
            'ｬ' => 'ヤ',
            'ｭ' => 'ユ',
            'ｮ' => 'ヨ',
            'ｯ' => 'ン'
        );

        return $returnValue;
    }
    public static function covertSoudPair1byteTo2Byte(){
        $returnValue = array(
            'ｧ' => 'ァ',
            'ｨ' => 'ィ',
            'ｩ' => 'ゥ',
            'ｪ' => 'ェ',
            'ｫ' => 'ォ',
            'ｬ' => 'ャ',
            'ｭ' => 'ュ',
            'ｮ' => 'ョ',
            'ｯ' => 'ッ'
        );

        return $returnValue;
    }

    /**
     * return mapping array of Sign characters
     *
     * @access public
     * @author hahuyson@luvina.net
     * @return array
     * @since 2016/01/20
     * @version 0.1
     */
    public static function getSign() {
        $array = array(
            '　' => ' ',
            '！' => '!',
            '”' => '"',
            '＃' => '#',
            '＄' => '$',
            '％' => '%',
            '＆' => '&',
            '’' => "'",
            '（' => '(',
            '）' => ')',
            '＊' => '*',
            '＋' => '+',
            '、' => ',',
            'ー' => 'ｰ',
            'ー' => '-',
            '．' => '.',
            '／' => '/',
            '：' => ':',
            '；' => ';',
            '＜' => '<',
            '＝' => '=',
            '＞' => '>',
            '？' => '?',
            '＠' => '@',
            '［' => '[',
            '￥' => "\\",
            '］' => ']',
            '＾' => '^',
            '＿' => '_',
            '‘' => '`',
            '｛' => '{',
            '｜' => '|',
            '｝' => '}'
        );
        return $array;
    }

    /**
     * generate a string that wrap input field in replace sql string
     *
     * @access public
     * @author hahuyson@luvina.net
     * @param  String sFieldname
     * @return String
     * @since 2016/01/16
     * @version 0.1
     */
    public static function wrapFields($sFieldname, $iApproximate = 1) {

        $array = array_merge(
                        self::getKana(),
                        self::getAlphabet(),
                        self::getNumberic(),
                        self::getSign(),
                        self::getHyphen(),
            			self::getSoundPair()
        );

        $prev = '';
        $next = '';

        foreach ($array as $k => $v) {
            $prev.='replace(';
            $next.=",'" . trim($v) . "','" . trim($k) . "')";
        }
        return $prev . $sFieldname . $next;
    }

    /**

      /**
     * method convert string 1byte to string 2byte
     *
     * @author hahuyson@luvina.net
     * @param unknown_type $str
     * @return unknown_type
     */
    public static function convert2byte($str) {
        $array = array_merge(
                        self::getKana(),
                        self::getAlphabet(),
                        self::getNumberic(),
                        self::getSign(),
                        self::getHyphen()
        );
        foreach ($array as $k => $v) {
            $str = str_replace($k, $v, $str);
        }
        return $str;
    }

    /**
     * method convert string 1byte to string 2byte
     *
     * @author hahuyson@luvina.net
     * @param unknown_type $str
     * @return unknown_type
     */
    public static function convertTo2byte($str) {
        $array = array_merge(
                        self::getKana(),
                        self::getAlphabet(),
                        self::getNumberic(),
                        self::getSign(),
                        self::getHyphen()
        );
        foreach ($array as $k => $v) {
            $str = str_replace($v, $k, $str);
        }
        // Plus case "-" Sign 
        $arrayP = array( 'ー' => 'ｰ', );
        foreach ($arrayP as $k => $v) {
            $str = str_replace($v, $k, $str);
        }
        
        return $str;
    }

    /*
     * convert a string from 2 byte to 1 byte
     *
     * @author hahuyson@luvina.net
     * @param  String str
     * @return String
     * @since 2016/01/16
     * @version 0.1 
     */

    public static function conver1byte($str, $iApproximate = false) {
        $array = array_merge(
                        self::getKana(),
                        self::getAlphabet(),
                        self::getNumberic(),
                        self::getSign(),
                        self::getHyphen(),
            			self::getSoundPair()
        );

        foreach ($array as $k => $v) {
            $str = str_replace($k, $v, $str);
        }

        foreach (self::getHiragana() as $k => $v) {
            $str = str_replace($k, $v, $str);
        }
        // remove space
        //$str = str_replace(' ', '', $str);

        if (true === $iApproximate) {
            $str = str_replace('ﾞ', '', $str);
            $str = str_replace('ﾟ', '', $str);
        }

        return $str;
    }
    /*
     * convert from kiragana and katakana 1 byte to kata 2byte
     *
     * @author hahuyson@luvina.net
     * @param  String str
     * @return String
     * @since 2009/11/09
     * @version 0.1 
     */
    public static function convertKana2Byte($str, $iApproximate = false){
        // convert from hiragana=>kata 2 byte
        foreach (self::getHiraganaAndKata2byte() as $k => $v) {
            $str = str_replace($k, $v, $str);
        }
        
        // convert 1byte=>2byte
        $kana2byte = array_flip(self::getKanaConvertTo2Byte()) ; 
        $numberRic = self::getNumberic();
        $alphabet =  self::getAlphabet();
        $sign = self::getSign();
        $hephen = self::getHyphen();
        $soundPair2byte = self::covertSoudPair1byteTo2Byte();
        $array = array_merge(
                        $kana2byte,
                        $alphabet,
                        $numberRic,
                        $sign,
                        $hephen,
            		$soundPair2byte
        );
        
        foreach ($array as $k => $v) {
            $str = str_replace($k, $v, $str);
        }                        
        // remove space
        //$str = str_replace(' ', '', $str);

        if (true === $iApproximate) {
            $str = str_replace('ﾞ', '', $str);
            $str = str_replace('ﾟ', '', $str);
        }
        return $str;
    }

    /**
     * escape risk character in sql string
     *
     * @access public
     * @author hahuyson@luvina.net
     * @param  String sFieldname
     * @return String
     * @since 2009/11/09
     * @version 0.1
     */
    public static function escapeSearch($string) {
        $string = mysql_escape_string($string);

        $aryChar = array('%', '?', '&');
        $aryEscapeChar = array('\%', '\?', '\&');

        return str_replace($aryChar, $aryEscapeChar, $string);
    }

    /**
     * generate a string that wrap input value in replace sql string
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String sValue
     * @param  boolean isApproximate = false
     * @param  String beginWith = '%"
     * @param  String endWith = '%'
     * @return String
     */
    public static function wrapValue($sValue, $iApproximate = 1, $beginWith = '%', $endWith = '%') {

        $aryKana = $iApproximate ? self::getApproximateKana() : self::getKana();

        $array = array_merge(
                        $aryKana,
                        self::getAlphabet(),
                        self::getNumberic(),
                        self::getSign(),
                        self::getHyphen(),
            			self::getSoundPair()
        );

        $prev = '';
        $next = '';

        $sValue = self::escapeSearch($sValue);
//		echo $sValue;

        foreach ($array as $k => $v) {
            $prev.='replace(';
            $next.=",'" . trim($v) . "','" . trim($k) . "')";
        }

        switch ($iApproximate) {
            case 0:
                return $prev . "'" . $sValue . "'" . $next;
                break;
            case 1:
                return "CONCAT('" . $beginWith . "', " . $prev . "'" . $sValue . "'" . $next . ", '" . $endWith . "')";
                break;
            case 2:
                return "'" . $sValue . "'";
                break;
            default:
                break;
        }
    }
    
    /**
     * @desc removeIleCharacter
     * 
     * @author 
     * @copyright hahuyson@luvina.net
     * @since 2016/01/20
    */
    public static function removeIleCharacter($data) {
        if (!$data) return null;
        $arySearch = array(' ', '','　','ー','-','―','－', '‐','ｰ');
        $aryReplace = array('');
        // remove space 1 byte
        $data = str_replace($arySearch, $aryReplace, $data);
        return $data;
    }
}

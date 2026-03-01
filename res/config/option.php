<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu <www.facebok.com/wusthanhdieu>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Hoàng Minh Nhật  | ANONYMOUS";
    public $description = "Hi my name is MinhNhat / A freelance / web developer / vexer";
    public $keywords = "minhnhatvtv,minh nhat,hoang minh nhat,minhnhatvtv,wsteam,wusteam,minhnhat home,profile minhnhat";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "MINHNHAT | HOME";
    public $avatar = "./res/v5/img/logo.jpg";
    public $userName = ["Hello Everybody","Hello Baby🤫", "My name is MinhNhat."];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đâm mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/HBM1209",
        "instagram" => "https://www.instagram.com/hbm12209?igsh=b2d6NGVnbTkzcGVj", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/@hbm1209?_r=1&_t=ZS-94JVPnLsbTj", // Thay link tiktok
        "telegram" => "https://t.me/thanhdieuchannel" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "MinhNhat", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "???", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "12/02/2026" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/j5f2sy.mp4",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Vegas 2016 remix",
            "author" => "Thái Hoàng"
        ],
        [
            "url" => "https://files.catbox.moe/5nrrlk.mp3",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Bà Tôi remix",
            "author" => "Minh Nhật"
        ],
        [
            "url" => "https://files.catbox.moe/mjg8xt.mp4",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Boom Cha La Ka",
            "author" => "Minh Nhật"
        ],
        [
            "url" => "https://files.catbox.moe/8alh6g.mp4",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Nếu Ví Anh Như",
            "author" => "Minh Nhật"
        ],
        [
            "url" => "https://files.catbox.moe/iwbqek.mp4",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "My Love Remix",
            "author" => "Minh Nhật"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "./res/v5/img/logo.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}


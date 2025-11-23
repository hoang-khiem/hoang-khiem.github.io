<?php
session_start();
$now = time();
$showCheck = !isset($_SESSION['last_show']) || ($now - $_SESSION['last_show']) > 180;
if ($showCheck) $_SESSION['last_show'] = $now;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GIỚI THIỆU BẢN THÂN - HOÀNG KHIÊM</title>
<style>
body{margin:0;font-family:'Segoe UI',sans-serif;background:white;overflow-x:hidden}
#check-screen{position:fixed;inset:0;background:white;display:flex;justify-content:center;align-items:center;flex-direction:column;z-index:999999;transition:.9s cubic-bezier(.4,0,.2,1);opacity:1}
.avatar-wraps{width:160px;height:160px;position:relative}
.avatar-wraps img{width:100%;height:100%;border-radius:50%;box-shadow:0 0 15px rgba(0,150,255,.35)}
.ring{position:absolute;top:-10px;left:-10px;right:-10px;bottom:-10px;border-radius:50%;border:5px solid rgba(0,140,255,.25);border-top-color:rgba(0,160,255,1);animation:spin 1.8s linear infinite,glow 2.5s ease-in-out infinite}
@keyframes spin{to{transform:rotate(360deg)}}
@keyframes glow{0%{box-shadow:0 0 8px rgba(0,150,255,.35)}50%{box-shadow:0 0 16px rgba(0,180,255,.6)}100%{box-shadow:0 0 8px rgba(0,150,255,.35)}}
.loading-text{margin-top:25px;font-size:22px;font-weight:700;background:linear-gradient(90deg,#0077ff,#00cfff,#0066ff);-webkit-background-clip:text;color:transparent;animation:fade 1.2s ease-in-out infinite}
@keyframes fade{0%,100%{opacity:1}50%{opacity:.55}}
#real-content{opacity:0;transition:.8s ease;padding:20px}
</style>
</head>
<body>

<?php if($showCheck): ?>
<div id="check-screen">
    <div class="avatar-wraps">
        <div class="ring"></div>
        <img src="/a3eeb6c0-b8f0-4922-8927-40a7b251c510.jpeg">
    </div>
    <div class="loading-text" id="loadingText">Đang kiểm tra bảo mật.</div>
</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIỚI THIỆU BẢN THÂN - HOÀNG KHIÊM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <style> 
    /* Nền mờ phủ toàn màn hình */
#musicOverlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.35);
    backdrop-filter: blur(8px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9998;
    animation: overlayFadeIn .5s ease forwards;
}

/* Popup chính */
#musicPopup {
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(12px);
    padding: 25px 30px;
    border-radius: 20px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.25);
    text-align: center;
    color: #fff;
    width: 90%;
    max-width: 380px;
    animation: popupScale .5s ease forwards;
    border: 1px solid rgba(255,255,255,0.35);
}

/* Tiêu đề */
#musicPopup p {
    font-size: 1.2em;
    margin-bottom: 20px;
    line-height: 1.4;
}

/* Nút */
#musicPopup button {
    width: 100%;
    padding: 12px 0;
    margin: 8px 0;
    border: none;
    border-radius: 14px;
    font-size: 1.15em;
    cursor: pointer;
    transition: 0.25s;
}

/* Nút CÓ – gradient đẹp */
#yesMusic {
    background: linear-gradient(135deg, #007bff, #00c6ff);
    color: white;
    box-shadow: 0 5px 15px rgba(0,123,255,0.4);
}
#yesMusic:hover {
    transform: translateY(-3px) scale(1.03);
}

/* Nút KHÔNG */
#noMusic {
    background: rgba(255,255,255,0.25);
    border: 1px solid rgba(255,255,255,0.4);
    color: white;
}
#noMusic:hover {
    background: rgba(255,255,255,0.4);
}

/* GIF anime */
#musicGif {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 15px;
    margin: 0 auto 18px auto;
    display: block;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    animation: floatGif 3s ease-in-out infinite;
}

@keyframes floatGif {
    0%   { transform: translateY(0); }
    50%  { transform: translateY(-6px); }
    100% { transform: translateY(0); }
}

/* Animation */
@keyframes popupScale {
    from { transform: scale(0.7); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

@keyframes popupFadeOut {
    from { opacity: 1; transform: scale(1); }
    to { opacity: 0; transform: scale(0.8); }
}

@keyframes overlayFadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes overlayFadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

</style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #e3f2fd 100%); 
            color: #007bff; 
            line-height: 1.6;
            overflow-x: hidden;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            text-align: center;
            padding: 50px 0;
            animation: fadeIn 2s ease-in-out;
        }
        header h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #007bff;
        }
        header p {
            font-size: 1.2em;
            color: #0056b3;
        }
        .profile-img {
            width: 150px;
            height: 160px;
            border-radius: 50%;
            border: 5px solid #007bff;
            margin: 20px auto;
            display: block;
            animation: bounceIn 1.5s ease-out;
            box-shadow: 0 8px 16px rgba(0, 123, 255, 0.2);
        } 
        .avatar-wrap {
            position: relative;
            width: 150px;
            margin: 0 auto;
        }

        .crown-icon {
            position: absolute;
            top: -22px;
            right: -8px;
            font-size: 42px;
            color: #f4c542; /* vàng đẹp */
            transform: rotate(18deg); /* nghiêng sang phải */
            text-shadow: 0 0 5px rgba(0,0,0,0.25);
        }

        section {
            margin: 50px 0;
            padding: 40px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e3f2fd 100%); 
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.15); 
            animation: slideUp 2s ease-in-out;
        } 
        
        section h2 {
            font-size: 2.2em;
            margin-bottom: 10px;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        section h2 i {
            margin-right: 10px;
            color: #0056b3;
        }
        section .subtitle {
            font-size: 1em;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
            font-style: italic;
        }
        section p, section ul {
            font-size: 1.1em;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
        }
        section ul {
            list-style: none;
            padding: 0;
        }
        section ul li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        section ul li i {
            margin-right: 10px;
            color: #007bff;
        }
        .intro .typed-text {
            font-size: 1.1em;
            color: #333;
            border-right: 2px solid #007bff;
            white-space: pre-wrap; 
            overflow: hidden;
        }
        .skills ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .skills ul li {
            background-color: #e9ecef;
            padding: 10px 20px;
            border-radius: 20px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .skills ul li:hover {
            transform: scale(1.1);
            background-color: #007bff;
            color: white;
        }
        .experience ul li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .experience ul li:last-child {
            border-bottom: none;
        }
        .hobbies ul {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .hobbies ul li {
            text-align: center;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .hobbies ul li:hover {
            background-color: #007bff;
            color: white;
            transform: translateY(-5px);
        }
        .achievements ul {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        } 
        .name-wrap {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .verify-gif {
            width: 32px;      /* to hơn tên một chút */
            height: 32px;
            object-fit: contain;
            transform: translateY(3px); /* căn cho đẹp với dòng chữ */
        }

        @media (max-width: 768px) {
        .verify-gif {
        width: 34px;   /* mobile hơi to hơn cho rõ */
        height: 34px;
        }
        }

        .achievements ul li {
            background-color: #e9ecef;
            padding: 15px 30px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .achievements ul li:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }
        .social-links h2 {
            margin-bottom: 30px;
        }
        .social-links .social-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }
        .social-links .social-buttons a {
            display: inline-flex;
            align-items: center;
            padding: 15px 30px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 25px;
            font-size: 1.1em;
            transition: all 0.3s ease;
            animation: fadeInUp 2.5s ease-in-out;
            min-width: 150px;
            justify-content: center;
        }
        .social-links .social-buttons a i {
            margin-right: 10px;
        }
        .social-links .social-buttons a:hover {
            background-color: #0056b3;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 123, 255, 0.3);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 768px) {
            header h1 { font-size: 2em; }
            .social-links .social-buttons { flex-direction: column; align-items: center; }
            .skills ul, .hobbies ul { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body> 
   <div id="musicOverlay">
    <div id="musicPopup">

        <!-- GIF Anime -->
        <img id="musicGif" src="https://r1.community.samsung.com/t5/image/serverpage/image-id/6756527iB24369B84B055076/image-size/large?v=v2&px=999/MDJ9IbxxvDUQM/giphy.gif">

        <p>Bạn có muốn nghe nhạc thư giãn không?</p>
        <button id="yesMusic">Có</button>
        <button id="noMusic">Không</button>
    </div>
</div>

<script>
    const overlay = document.getElementById("musicOverlay");
    const popup = document.getElementById("musicPopup");

    const songs = [
        "/emchithay.mp3", 
        "/viyeucudamdau.mp3", 
    "/emthuacota.mp3", 
    
        "/yeutudaumara.mp3"
    ];

    let currentSong = 0;
    const audio = new Audio();

    function closePopup() {
        popup.style.animation = "popupFadeOut .6s forwards";
        overlay.style.animation = "overlayFadeOut .6s forwards";
        setTimeout(() => overlay.remove(), 600);
    }

    document.getElementById("noMusic").onclick = () => {
        closePopup();
    };

    document.getElementById("yesMusic").onclick = () => {
        closePopup();

        currentSong = Math.floor(Math.random() * songs.length);
        audio.src = songs[currentSong];
        audio.play();

        audio.onended = function () {
            currentSong = (currentSong + 1) % songs.length;
            audio.src = songs[currentSong];
            audio.play();
        };
    };
</script>
<!-- Container cho bông tuyết -->
<div id="snowContainer"></div>

<style>
#snowContainer {
    position: fixed;
    inset: 0;
    pointer-events: none; /* không chặn click */
    overflow: hidden;
    z-index: 9999;
}

.snowflake {
    position: absolute;
    top: -50px;
    color: #00c6ff; /* màu xanh nhạt, thay đổi tuỳ ý */
    user-select: none;
    font-size: 12px; /* kích thước bông tuyết */
    opacity: 0.8;
    animation-name: fallSnow;
    animation-timing-function: linear;
}

/* Animation rơi xuống + xoay nhẹ */
@keyframes fallSnow {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
    }
    100% {
        transform: translateY(100vh) rotate(360deg);
        opacity: 0;
    }
}
</style>

<script>
// Số lượng bông tuyết tối đa trên màn hình
const maxSnowflakes = 50;
const container = document.getElementById("snowContainer");

function createSnowflake() {
    const snow = document.createElement("div");
    snow.classList.add("snowflake");
    snow.textContent = "❄"; // bông tuyết emoji

    // Vị trí trái phải ngẫu nhiên
    snow.style.left = Math.random() * 100 + "vw";

    // Kích thước ngẫu nhiên
    snow.style.fontSize = (10 + Math.random() * 20) + "px";

    // Tốc độ rơi ngẫu nhiên
    const duration = 5 + Math.random() * 5; // 5s -> 10s
    snow.style.animationDuration = duration + "s";

    // Xoay nhẹ mỗi bông
    snow.style.animationName = "fallSnow";
    snow.style.animationTimingFunction = "linear";

    container.appendChild(snow);

    // Xóa bông tuyết khi rơi xong
    setTimeout(() => {
        snow.remove();
    }, duration * 1000);
}

// Tạo bông tuyết liên tục, nhưng không vượt quá max
setInterval(() => {
    if (container.children.length < maxSnowflakes) {
        createSnowflake();
    }
}, 300);
</script>

    <div class="container">
        <header>
            <div class="avatar-wrap">
    <img src="/a3eeb6c0-b8f0-4922-8927-40a7b251c510.jpeg" class="profile-img">
    <i class="fas fa-crown crown-icon"></i>
</div>

            <h1 class="name-wrap">
    Trương Hoàng Khiêm
    <img class="verify-gif" src="https://media2.giphy.com/media/xmOMPI63SsyZyKz2Tx/giphy-preview.gif">
</h1>

            <p>Chào mừng đến với trang cá nhân của tôi!</p>
        </header>
        
        <section class="intro">
            <h2><i class="fas fa-user"></i> Giới thiệu sơ lượt</h2>
            <p class="subtitle">Một cái nhìn tổng quan về con người và đam mê của tôi.</p>
            <p class="typed-text" id="typedText">Xin chào! Tôi là Trương Hoàng Khiêm, một người đam mê công nghệ và điện tử. Tôi không thích thể thao lắm, nhưng lại mê mẩn với việc khám phá các thiết bị điện tử và lập trình. Trang web này là nơi tôi chia sẻ về bản thân và kết nối với mọi người qua các mạng xã hội. Hãy khám phá và liên hệ nếu bạn muốn biết thêm!</p>
        </section>
        
        <section class="skills">
            <h2><i class="fas fa-star"></i> Kỹ năng</h2>
            <p class="subtitle">Những kỹ năng tôi đã học và áp dụng trong công việc.</p>
            <ul>
                <li><i class="fas fa-code"></i> Biết ít về HTML</li>
                <li><i class="fas fa-palette"></i> Biết ít về CSS</li>
                <li><i class="fab fa-python"></i> Biết ít về Python</li>
            </ul>
        </section>
        
        <section class="experience">
            <h2><i class="fas fa-briefcase"></i> Kinh nghiệm</h2>
            <p class="subtitle">Hành trình học tập và phát triển của tôi qua các năm.</p>
            <ul>
                <li><i class="fas fa-calendar-alt"></i> Đã tiếp xúc với ngôn ngữ lập trình vào năm lớp 7 đến giờ thì có thể tạo các website từ code có sẵn hoặc tạo các giao diện website đơn giản.</li>
            </ul>
        </section>
        
        <section class="hobbies">
            <h2><i class="fas fa-heart"></i> Sở thích</h2>
            <p class="subtitle">Những điều tôi yêu thích và dành thời gian cho.</p>
            <ul>
                <li><i class="fas fa-utensils"></i> Thích ăn vặt</li>
                <li><i class="fab fa-telegram"></i> Tạo các bot Telegram</li>
                <li><i class="fas fa-globe"></i> Tạo các website</li>
                <li><i class="fas fa-shield-alt"></i> Anti DDoS website</li>
                <li><i class="fas fa-bolt"></i> DDoS website</li>
            </ul>
        </section>
        
        <section class="achievements">
            <h2><i class="fas fa-trophy"></i> Thành tựu</h2>
            <p class="subtitle">Những thành công tôi đã đạt được trong lĩnh vực của mình.</p>
            <ul>
                <li><i class="fas fa-medal"></i> Đã tạo nhiều website và bot Telegram nhiều thể loại và được đánh giá cao</li>
            </ul>
        </section>
        
        <section class="social-links">
            <h2><i class="fas fa-share-alt"></i> Các trang mạng xã hội</h2>
            <p class="subtitle">Kết nối với tôi qua các nền tảng này.</p>
            <div class="social-buttons">
                <a href="https://tiktok.com/@ky.ro_210" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a> 
                <a href="https://www.facebook.com/hoangkhiem.1507" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="https://www.instagram.com/hoangkhiem.1507" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://locket.cam/hoang_khiem_truong" target="_blank"><i class="fas fa-lock"></i> Locket</a> 
                <a href="https://t.me/HoangKhiemTruong" target="_blank"><i class="fab fa-telegram"></i> Telegram</a>
                <a href="mailto:hoangkhiemtruong988@gmail.com"><i class="fas fa-envelope"></i> Email</a>
            </div>
        </section>
        
    </div>

    <script>
        const typedTextElement = document.getElementById('typedText');
        const text = typedTextElement.textContent;
        typedTextElement.textContent = '';
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                typedTextElement.textContent += text.charAt(index);
                index++;
                setTimeout(typeWriter, 50); 
            } else {
            }
        }

        window.onload = function() {
            typeWriter();
        };
    </script>
</body>
</html>

<script>
<?php if($showCheck): ?>
let t=document.getElementById("loadingText"),d=1;
setInterval(()=>{d=(d%3)+1;t.textContent="Đang kiểm tra bảo mật"+'.'.repeat(d)},400);
setTimeout(()=>{
    let s=document.getElementById("check-screen");
    s.style.transform="translateY(-120%)";
    s.style.opacity="0";
    document.getElementById("real-content").style.opacity="1";
},2600);
<?php else: ?>
document.getElementById("real-content").style.opacity="1";
<?php endif; ?>
</script>

</body>
</html>

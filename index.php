
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社Jecコンサルティング | 未来を創造する戦略パートナー</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- 基本設定 --- */
        :root {
            --primary-color: #0a2463; /* 深いネイビー */
            --accent-color: #3e92cc;  /* 明るいブルー */
            --text-color: #333;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Noto Sans JP', sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
        }

        /* --- ナビゲーション --- */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
        }
        .nav-link {
            color: var(--primary-color) !important;
            font-weight: 500;
            margin-left: 15px;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent-color);
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }

        /* --- ヒーローセクション --- */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, rgba(10, 36, 99, 0.9), rgba(62, 146, 204, 0.8)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.5s;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.8s;
        }
        .btn-custom {
            background-color: var(--accent-color);
            color: white;
            padding: 12px 35px;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s;
            opacity: 0;
            animation: fadeIn 1s forwards 1.2s;
            border: none;
        }
        .btn-custom:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* --- セクション共通 --- */
        section {
            padding: 80px 0;
        }
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            display: inline-block;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            margin: 15px auto 0;
        }

        /* --- サービス --- */
        .service-card {
            border: none;
            border-radius: 15px;
            padding: 40px 20px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            text-align: center;
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .service-icon {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 20px;
        }

        /* --- アバウト --- */
        .about-section {
            background-color: var(--bg-light);
        }
        .about-img {
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        /* --- お問い合わせ --- */
        .contact-section {
            background: linear-gradient(rgba(10, 36, 99, 0.9), rgba(10, 36, 99, 0.9)), url('https://images.unsplash.com/photo-1486406147582-8bd12257d995?auto=format&fit=crop&q=80');
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }
        .contact-section .section-title h2 {
            color: white;
        }
        .form-control {
            border-radius: 10px;
            padding: 15px;
            border: none;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.9);
        }
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(62, 146, 204, 0.5);
            background: white;
        }

        /* --- フッター --- */
        footer {
            background-color: #051438;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        /* --- アニメーション --- */
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeIn {
            to { opacity: 1; }
        }

        /* スクロール時のフェードイン用クラス */
        .reveal {
            position: relative;
            transform: translateY(50px);
            opacity: 0;
            transition: 1s all ease;
        }
        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }

        /* スマホ対応調整 */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2rem; }
            .hero-content p { font-size: 1rem; }
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 0 0 15px 15px;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-chart-line me-2"></i>Jec Consulting</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">ホーム</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">サービス</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">会社概要</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="home" class="hero">
        <div class="container hero-content">
            <h1>ビジネスの限界を突破する</h1>
            <p>Jecコンサルティングは、テクノロジーと戦略で<br>貴社の未来を再定義するプロフェッショナル集団です。</p>
            <a href="#contact" class="btn btn-custom">無料相談を申し込む</a>
        </div>
    </header>

    <section id="services" class="container">
        <div class="section-title reveal">
            <h2>Our Services</h2>
            <p>私たちが提供する価値</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="service-card">
                    <i class="fas fa-chess-knight service-icon"></i>
                    <h3>経営戦略コンサルティング</h3>
                    <p>現状の課題を分析し、持続可能な成長を実現するためのロードマップを策定します。</p>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="service-card">
                    <i class="fas fa-laptop-code service-icon"></i>
                    <h3>DXソリューション</h3>
                    <p>最新のAI・クラウド技術を活用し、業務プロセスの効率化とデジタル化を推進します。</p>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="service-card">
                    <i class="fas fa-users service-icon"></i>
                    <h3>組織開発・人材育成</h3>
                    <p>企業の核となる「人」にフォーカスし、自走する強い組織づくりを支援します。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 reveal">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80" alt="会議の様子" class="img-fluid about-img mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6 reveal">
                    <div class="ps-lg-5">
                        <div class="section-title text-start">
                            <h2>About Us</h2>
                            <p>Jecコンサルティングについて</p>
                        </div>
                        <p>私たちは、単なる助言者ではありません。クライアントと共に汗をかき、共に成功を喜ぶ「伴走者」です。</p>
                        <p>変化の激しい現代ビジネスにおいて、確かなデータと革新的なアイデアで、お客様のビジョンを現実のものにします。</p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>創業: 2023年</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>拠点: 東京都港区</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>実績: 上場企業からスタートアップまで200社以上</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title reveal">
                <h2>Contact</h2>
                <p>お問い合わせ</p>
            </div>
            <div class="row justify-content-center reveal">
                <div class="col-lg-8">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="お名前" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="メールアドレス" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="件名">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="お問い合わせ内容" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-custom w-50">送信する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Jec Consulting, Inc. All Rights Reserved.</p>
            <div class="social-icons mt-3">
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // スクロール時のフェードインアニメーション
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');

            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }

        // フォーム送信時の挙動（デモ用）
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('お問い合わせありがとうございます。\n送信が完了しました。（デモ画面のため実際には送信されません）');
            this.reset();
        });

        // ナビゲーションリンクのスムーズスクロール
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>

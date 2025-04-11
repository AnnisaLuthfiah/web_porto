<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Website Portfolio</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Bootstrap Icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom Style -->
  <style>
    :root {
      --light-bg: linear-gradient(to right, #f5c6d6, #fff);
      --dark-bg: #ffffff;
      --primary-pink: #d94f84;
      --text-dark: #1a1a1a;
      --text-light: #ffffff;
    }

    [data-bs-theme="light"] body {
      background: var(--light-bg);
      color: var(--text-dark);
    }

    [data-bs-theme="dark"] body {
      background: var(--dark-bg);
      color: var(--text-dark);
    }

    .sidebar {
      width: 80px;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 20px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1030;
      transition: background-color 0.3s ease;
    }

    [data-bs-theme="light"] .sidebar {
      background-color: #c74375;
    }

    [data-bs-theme="dark"] .sidebar {
      background-color: #000000;
    }

    .sidebar a {
      font-size: 1.5rem;
      margin: 20px 0;
      text-align: center;
      transition: 0.3s;
      opacity: 0.85;
    }

    .sidebar a:hover {
      opacity: 1;
    }

    .sidebar a i {
      color: #ffe0ed;
      transition: 0.3s ease;
    }

    .sidebar a:hover i {
      color: #ffffff;
      transform: scale(1.15);
    }

    .main-content {
      margin-left: 80px;
      padding: 20px;
    }

    .navbar {
      background-color: #c74375 !important;
      color: white;
      padding-left: 80px;
    }

    .navbar a {
      color: white;
      margin-right: 10px;
      text-decoration: none;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    .navbar-brand {
      color: #ffffff !important;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .card {
      background-color: rgba(255, 255, 255, 0.85);
      border: 1px solid #d47d9d;
      color: var(--text-dark);
      backdrop-filter: blur(3px);
    }

    .btn-outline-light {
      border-color: #ffffff;
      color: #ffffff;
      font-weight: 500;
      transition: 0.3s;
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    }

    .btn-outline-light:hover {
      background-color: #ffffff;
      color: #c74375;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    }

    [data-bs-theme="dark"] .card {
      background-color: #f8f9fa;
    }

    [data-bs-theme="dark"] a {
      color: var(--primary-pink);
    }

    [data-bs-theme="dark"] a:hover {
      color: #ff6ea1;
    }

    @keyframes flyUp {
      0% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
      100% {
        opacity: 0;
        transform: translateY(-80px) scale(1.5);
      }
    }
  </style>

  <!-- Auto Theme Script -->
  <script>
    document.documentElement.setAttribute('data-bs-theme',
      window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  </script>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="{{ route('home') }}" title="Home"><i class="bi bi-house-door-fill"></i></a>
    <a href="{{ route('about') }}" title="About"><i class="bi bi-person-fill"></i></a>
    <a href="{{ route('contact') }}" title="Contact"><i class="bi bi-envelope-fill"></i></a>
    <a href="{{ route('games') }}" title="Games"><i class="bi bi-controller"></i></a>
    <a href="{{ route('blog') }}" title="Blog"><i class="bi bi-journal-text"></i></a>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold fs-4 px-2" href="{{ route('home') }}">My Portfolio</a>
      <div class="d-flex align-items-center">
        <a class="nav-link" href="{{ route('admin.home') }}"><i class="bi bi-person-circle fs-4"></i></a>
        <button class="btn btn-sm btn-outline-light ms-2" onclick="toggleTheme()">Toggle Mode</button>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content" data-aos="fade-up">
    @yield('content')
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>

  <!-- Toggle Theme Script -->
  <script>
    function toggleTheme() {
      const html = document.documentElement;
      const currentTheme = html.getAttribute('data-bs-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      html.setAttribute('data-bs-theme', newTheme);
    }
  </script>

  <!-- Heart Animation Script -->
  <script>
    document.addEventListener('click', function (e) {
      const heart = document.createElement('div');
      heart.innerHTML = '❤️';
      heart.style.position = 'absolute';
      heart.style.left = (e.pageX - 10) + 'px';
      heart.style.top = (e.pageY - 10) + 'px';
      heart.style.fontSize = '24px';
      heart.style.animation = 'flyUp 1s ease-out forwards';
      heart.style.pointerEvents = 'none';
      document.body.appendChild(heart);
      setTimeout(() => heart.remove(), 1000);
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayla Artalita | Web Developer & UI/UX Enthusiast</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            dark: '#0a0d14',
                            surface: '#111622',
                            card: '#161d2d',
                            cardHover: '#1d263b',
                            pink: '#f43f5e',
                            rose: '#fb7185',
                            softPink: '#fda4af',
                            neonOrange: '#ff5c35',
                            emerald: '#10b981',
                            accentBlue: '#3b82f6',
                            border: '#222c3f',
                            muted: '#94a3b8'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glow-card {
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glow-card:hover {
            box-shadow: 0 16px 35px -10px rgba(244, 63, 94, 0.18);
            border-color: rgba(251, 113, 133, 0.45);
            transform: translateY(-5px);
        }
        .gradient-text {
            background: linear-gradient(135deg, #ffffff 20%, #fda4af 65%, #ff5c35 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-pill {
            background: linear-gradient(135deg, #f43f5e, #fb7185);
        }
        .bg-mesh {
            background-color: #0a0d14;
            background-image: 
                radial-gradient(at 0% 0%, rgba(244, 63, 94, 0.14) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(255, 92, 53, 0.12) 0px, transparent 50%),
                radial-gradient(at 50% 60%, rgba(16, 185, 129, 0.06) 0px, transparent 60%),
                radial-gradient(at 80% 100%, rgba(59, 130, 246, 0.08) 0px, transparent 50%);
        }
    </style>
</head>
<body class="bg-brand-dark text-slate-100 min-h-screen font-sans selection:bg-rose-500 selection:text-white bg-mesh antialiased">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-[#0a0d14]/85 backdrop-blur-md border-b border-brand-border">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2.5 group">
                <div class="w-9 h-9 rounded-xl gradient-pill flex items-center justify-center font-bold text-white shadow-lg shadow-rose-500/30 group-hover:scale-105 transition">
                    K
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base tracking-tight text-white group-hover:text-rose-300 transition leading-tight">Kayla Artalita<span class="text-rose-500">.</span></span>
                    <span class="text-[10px] text-brand-muted font-medium">SMK Informatika Pesat</span>
                </div>
            </a>
            
            <div class="hidden md:flex items-center gap-7 text-sm font-medium text-slate-300">
                <a href="#about" class="hover:text-white transition">Tentang Saya</a>
                <a href="#journey" class="hover:text-white transition">Pendidikan & Fokus</a>
                <a href="#skills" class="hover:text-white transition">Keahlian</a>
                <a href="#projects" class="hover:text-white transition">Portofolio</a>
                <a href="#workflow" class="hover:text-white transition">Cara Kerja</a>
                <a href="#contact" class="hover:text-white transition">Kontak</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                   class="flex items-center gap-2 px-3.5 py-1.5 rounded-xl bg-brand-surface hover:bg-brand-card border border-brand-border text-xs sm:text-sm font-medium transition hover:border-rose-500/50 shadow-sm">
                    <i data-lucide="github" class="w-4 h-4 text-rose-400"></i>
                    <span>GitHub</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO / TENTANG SAYA -->
    <section id="about" class="pt-32 pb-20 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Bio -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-300 text-xs font-semibold tracking-wide">
                    <span class="w-2 h-2 rounded-full bg-rose-400 animate-pulse"></span>
                    Web Developer & UI/UX Designer
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                    Halo, Saya <span class="gradient-text">Kayla Artalita</span> 👋
                </h1>
                
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl">
                    Siswa & Pengembang Web dari <strong class="text-white font-semibold">SMK Informatika Pesat</strong> yang antusias dalam merancang antarmuka pengguna digital yang modern, rapih, dan interaktif. Berpengalaman mengembangkan sistem berbasis <strong class="text-rose-300">Laravel</strong>, styling responsif modern, serta integrasi API.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#projects" class="px-6 py-3 rounded-xl gradient-pill font-semibold text-white shadow-lg shadow-rose-500/25 hover:opacity-95 hover:shadow-rose-500/40 hover:-translate-y-0.5 transition flex items-center gap-2">
                        <span>Eksplorasi Portofolio</span>
                        <i data-lucide="arrow-down" class="w-4 h-4"></i>
                    </a>
                    <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                       class="px-6 py-3 rounded-xl bg-brand-surface hover:bg-brand-card border border-brand-border font-medium text-slate-200 hover:border-slate-500 transition flex items-center gap-2">
                        <i data-lucide="github" class="w-4 h-4 text-slate-400"></i>
                        <span>kaylaartalita15-cloud</span>
                    </a>
                </div>

                <!-- Stats / Highlights -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-brand-border max-w-lg mx-auto lg:mx-0">
                    <div class="p-3 rounded-2xl bg-brand-surface/60 border border-brand-border/60">
                        <p class="text-2xl sm:text-3xl font-extrabold text-white">25+</p>
                        <p class="text-xs text-brand-muted mt-1 font-medium">Project Live</p>
                    </div>
                    <div class="p-3 rounded-2xl bg-brand-surface/60 border border-brand-border/60">
                        <p class="text-2xl sm:text-3xl font-extrabold text-rose-400">UI/UX</p>
                        <p class="text-xs text-brand-muted mt-1 font-medium">Dark & Aesthetic</p>
                    </div>
                    <div class="p-3 rounded-2xl bg-brand-surface/60 border border-brand-border/60">
                        <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">Laravel</p>
                        <p class="text-xs text-brand-muted mt-1 font-medium">& Web Dev</p>
                    </div>
                </div>
            </div>

            <!-- Right Profile Image -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative group">
                    <div class="absolute -inset-2 rounded-[2.5rem] bg-gradient-to-r from-rose-500 via-amber-500 to-rose-600 opacity-50 blur-2xl group-hover:opacity-75 transition duration-500"></div>
                    
                    <div class="relative w-72 sm:w-80 h-72 sm:h-80 rounded-[2.5rem] overflow-hidden border-2 border-brand-border/90 bg-[#5d636b] p-1.5 shadow-2xl flex items-center justify-center">
                        <img src="/images/profile.jpg" alt="Kayla Artalita" class="w-full h-full object-contain rounded-[2.2rem] brightness-110 contrast-105 saturate-105">
                    </div>
                    
                    <!-- Floating Badge 1: SMK -->
                    <div class="absolute -bottom-3 -left-3 bg-brand-surface/95 backdrop-blur-md border border-brand-border px-4 py-2.5 rounded-2xl shadow-xl flex items-center gap-2.5">
                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>
                        <div>
                            <p class="text-[10px] text-brand-muted leading-none">Pendidikan</p>
                            <p class="text-xs font-bold text-slate-100">SMK Informatika Pesat</p>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Open for project -->
                    <div class="absolute top-4 -right-3 bg-brand-surface/95 backdrop-blur-md border border-brand-border px-3.5 py-2 rounded-2xl shadow-xl flex items-center gap-2">
                        <i data-lucide="code-2" class="w-4 h-4 text-rose-400"></i>
                        <span class="text-xs font-semibold text-rose-300">Junior Developer</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION: PENDIDIKAN & VALUE -->
    <section id="journey" class="py-16 px-6 max-w-6xl mx-auto border-t border-brand-border/60">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border space-y-3">
                <div class="w-10 h-10 rounded-xl bg-rose-500/10 text-rose-400 flex items-center justify-center">
                    <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-bold text-white">SMK Informatika Pesat</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Fokus mendalami bidang Rekayasa Perangkat Lunak, logika pemrograman web, database relational, dan pengembangan aplikasi berbasis industri.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border space-y-3">
                <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center">
                    <i data-lucide="palette" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-bold text-white">Desain Berorientasi Pengguna</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Menyukai palet warna modern, layout terstruktur rapi, konsistensi tipografi, dan pengalaman pengguna (UX) yang intuitif serta nyaman di mata.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border space-y-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center">
                    <i data-lucide="rocket" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-bold text-white">Praktik Proyek Nyata</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Berhasil menyelesaikan dashboard produktivitas, sistem inventaris analitik, platform e-ticketing Kebun Raya, hingga web edukasi Al-Qur'an digital.
                </p>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="py-16 px-6 max-w-6xl mx-auto border-t border-brand-border/60">
        <div class="text-center max-w-xl mx-auto mb-12">
            <div class="inline-flex items-center gap-1.5 text-rose-400 text-xs font-semibold tracking-wider uppercase mb-2">
                <i data-lucide="cpu" class="w-3.5 h-3.5"></i>
                Competencies & Stack
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Keahlian & Teknologi</h2>
            <p class="text-sm text-brand-muted mt-2">Tools dan teknologi yang saya gunakan sehari-hari dalam membangun aplikasi web.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
            <div class="p-4 rounded-2xl bg-brand-surface border border-brand-border text-center glow-card">
                <div class="w-10 h-10 mx-auto rounded-xl bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                    <i data-lucide="layers" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-sm text-white">Laravel</h3>
                <p class="text-xs text-brand-muted mt-1">PHP Framework</p>
            </div>

            <div class="p-4 rounded-2xl bg-brand-surface border border-brand-border text-center glow-card">
                <div class="w-10 h-10 mx-auto rounded-xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-3">
                    <i data-lucide="layout-template" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-sm text-white">Tailwind / CSS</h3>
                <p class="text-xs text-brand-muted mt-1">Modern Styling</p>
            </div>

            <div class="p-4 rounded-2xl bg-brand-surface border border-brand-border text-center glow-card">
                <div class="w-10 h-10 mx-auto rounded-xl bg-amber-500/10 flex items-center justify-center text-amber-400 mb-3">
                    <i data-lucide="code" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-sm text-white">JavaScript</h3>
                <p class="text-xs text-brand-muted mt-1">Interactive UI</p>
            </div>

            <div class="p-4 rounded-2xl bg-brand-surface border border-brand-border text-center glow-card">
                <div class="w-10 h-10 mx-auto rounded-xl bg-rose-500/10 flex items-center justify-center text-rose-400 mb-3">
                    <i data-lucide="figma" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-sm text-white">UI/UX Design</h3>
                <p class="text-xs text-brand-muted mt-1">Modern Aesthetic</p>
            </div>

            <div class="p-4 rounded-2xl bg-brand-surface border border-brand-border text-center glow-card">
                <div class="w-10 h-10 mx-auto rounded-xl bg-emerald-500/10 flex items-center justify-center text-emerald-400 mb-3">
                    <i data-lucide="database" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-sm text-white">REST API</h3>
                <p class="text-xs text-brand-muted mt-1">Backend & Data</p>
            </div>

            <div class="p-4 rounded-2xl bg-brand-surface border border-brand-border text-center glow-card">
                <div class="w-10 h-10 mx-auto rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 mb-3">
                    <i data-lucide="git-branch" class="w-5 h-5"></i>
                </div>
                <h3 class="font-semibold text-sm text-white">Git / GitHub</h3>
                <p class="text-xs text-brand-muted mt-1">Version Control</p>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION -->
    <section id="projects" class="py-20 px-6 max-w-6xl mx-auto border-t border-brand-border/60">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <div class="inline-flex items-center gap-2 text-rose-400 text-xs font-semibold tracking-wider uppercase mb-2">
                    <i data-lucide="sparkles" class="w-4 h-4"></i>
                    Selected Works
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Koleksi Portofolio</h2>
            </div>
            <p class="text-sm text-brand-muted max-w-md">
                Menampilkan 4 proyek aplikasi web dan dashboard yang telah saya rancang dan bangun dengan fokus pada kerapian visual dan fungsionalitas nyata.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Project 1: Taskly -->
            <div class="rounded-3xl bg-brand-surface border border-brand-border overflow-hidden glow-card group flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[16/10] bg-[#1a1d26]">
                        <img src="/images/taskly.jpg" alt="Taskly - Task Management Dashboard" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-rose-500/90 text-white backdrop-blur-md shadow-md">
                                Productivity App
                            </span>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-bold text-white group-hover:text-rose-300 transition">Taskly</h3>
                            <span class="text-xs text-brand-muted flex items-center gap-1 font-mono">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> 2025/2026
                            </span>
                        </div>

                        <p class="text-slate-300 text-sm leading-relaxed">
                            Aplikasi manajemen tugas harian yang dirancang dengan dark mode elegan, aksen pastel pink, serta dilengkapi ringkasan status tugas, kalender mini, dan tracking progress harian.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-rose-300 border border-rose-500/20">Laravel</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">REST API</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Tailwind CSS</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">UI/UX</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:p-8 pt-0 flex items-center justify-between border-t border-brand-border/40 mt-4">
                    <span class="text-xs text-brand-muted">Featured Dashboard</span>
                    <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center gap-2 text-sm font-semibold text-rose-400 hover:text-rose-300 transition">
                        <span>Lihat Source Code</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2: Inventory -->
            <div class="rounded-3xl bg-brand-surface border border-brand-border overflow-hidden glow-card group flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[16/10] bg-[#1a1d26]">
                        <img src="/images/inventory.jpg" alt="Inventory Management System" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-orange-500/90 text-white backdrop-blur-md shadow-md">
                                Analytics & Logistics
                            </span>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-bold text-white group-hover:text-amber-300 transition">Inventory & Logistics</h3>
                            <span class="text-xs text-brand-muted flex items-center gap-1 font-mono">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> 2025/2026
                            </span>
                        </div>

                        <p class="text-slate-300 text-sm leading-relaxed">
                            Dashboard manajemen inventaris barang dan logistik dengan perpaduan neon orange, visualisasi data stok, peta pengiriman global, tabel produk, serta tracking pesanan secara real-time.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-amber-300 border border-amber-500/20">Dashboard System</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Data Visualization</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Tailwind CSS</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Dark Theme</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:p-8 pt-0 flex items-center justify-between border-t border-brand-border/40 mt-4">
                    <span class="text-xs text-brand-muted">Featured Dashboard</span>
                    <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center gap-2 text-sm font-semibold text-amber-400 hover:text-amber-300 transition">
                        <span>Lihat Source Code</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Project 3: Kebun Raya Ticket System -->
            <div class="rounded-3xl bg-brand-surface border border-brand-border overflow-hidden glow-card group flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[16/10] bg-[#1a1d26]">
                        <img src="/images/kebun-raya.jpg" alt="Kebun Raya Ticket & Admin System" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-600/90 text-white backdrop-blur-md shadow-md">
                                E-Ticketing & Admin
                            </span>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-bold text-white group-hover:text-emerald-300 transition">Kebun Raya Ticketing</h3>
                            <span class="text-xs text-brand-muted flex items-center gap-1 font-mono">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> 2026
                            </span>
                        </div>

                        <p class="text-slate-300 text-sm leading-relaxed">
                            Sistem reservasi dan dashboard konfirmasi admin e-ticketing Kebun Raya Indonesia. Dilengkapi verifikasi bukti transfer, cetak e-ticket instan, dan laporan pendapatan otomatis.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-emerald-300 border border-emerald-500/20">Laravel 12</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Admin Panel</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Payment Verification</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Botanical UI</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:p-8 pt-0 flex items-center justify-between border-t border-brand-border/40 mt-4">
                    <span class="text-xs text-brand-muted">Ticket Management</span>
                    <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-400 hover:text-emerald-300 transition">
                        <span>Lihat Source Code</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Project 4: Al-Qur'an Digital 30 Juz -->
            <div class="rounded-3xl bg-brand-surface border border-brand-border overflow-hidden glow-card group flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[16/10] bg-[#1a1d26]">
                        <img src="/images/quran-digital.jpg" alt="Al-Qur'an Digital 30 Juz" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/90 text-white backdrop-blur-md shadow-md">
                                Islamic Web App
                            </span>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-bold text-white group-hover:text-teal-300 transition">Al-Qur'an Digital 30 Juz</h3>
                            <span class="text-xs text-brand-muted flex items-center gap-1 font-mono">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> 2026
                            </span>
                        </div>

                        <p class="text-slate-300 text-sm leading-relaxed">
                            Platform Al-Qur'an Digital berbasis web dengan desain islami modern bernuansa hijau toska. Menampilkan 114 surah lengkap dengan teks Arab, transliterasi Latin, terjemahan Indonesia, fitur pencarian surah cepat, dan audio murottal merdu.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-teal-300 border border-teal-500/20">Web Application</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Qur'an API</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Audio Player</span>
                            <span class="px-2.5 py-1 rounded-lg bg-brand-card text-xs font-medium text-slate-300 border border-brand-border">Responsive UI</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:p-8 pt-0 flex items-center justify-between border-t border-brand-border/40 mt-4">
                    <span class="text-xs text-brand-muted">Digital Scripture</span>
                    <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center gap-2 text-sm font-semibold text-teal-400 hover:text-teal-300 transition">
                        <span>Lihat Source Code</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION: WORKFLOW / CARA SAYA BERKARYA -->
    <section id="workflow" class="py-16 px-6 max-w-6xl mx-auto border-t border-brand-border/60">
        <div class="text-center max-w-xl mx-auto mb-12">
            <div class="inline-flex items-center gap-1.5 text-rose-400 text-xs font-semibold tracking-wider uppercase mb-2">
                <i data-lucide="workflow" class="w-3.5 h-3.5"></i>
                Development Process
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Bagaimana Saya Membangun Website</h2>
            <p class="text-sm text-brand-muted mt-2">Langkah demi langkah dari konsep hingga web siap digunakan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border relative">
                <span class="text-4xl font-extrabold text-rose-500/20 absolute top-4 right-4">01</span>
                <div class="w-10 h-10 rounded-xl bg-rose-500/10 text-rose-400 flex items-center justify-center mb-4">
                    <i data-lucide="search" class="w-5 h-5"></i>
                </div>
                <h4 class="font-bold text-white text-base">Riset & Kebutuhan</h4>
                <p class="text-xs text-slate-300 mt-2 leading-relaxed">Menentukan tujuan sistem, audiens pengguna, dan alur fitur utama yang dibutuhkan.</p>
            </div>

            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border relative">
                <span class="text-4xl font-extrabold text-rose-500/20 absolute top-4 right-4">02</span>
                <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center mb-4">
                    <i data-lucide="pen-tool" class="w-5 h-5"></i>
                </div>
                <h4 class="font-bold text-white text-base">Wireframe & UI Design</h4>
                <p class="text-xs text-slate-300 mt-2 leading-relaxed">Membuat layout estetis, pemilihan warna modern, dan memastikan kemudahan navigasi.</p>
            </div>

            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border relative">
                <span class="text-4xl font-extrabold text-rose-500/20 absolute top-4 right-4">03</span>
                <div class="w-10 h-10 rounded-xl bg-sky-500/10 text-sky-400 flex items-center justify-center mb-4">
                    <i data-lucide="code" class="w-5 h-5"></i>
                </div>
                <h4 class="font-bold text-white text-base">Coding & Integrasi</h4>
                <p class="text-xs text-slate-300 mt-2 leading-relaxed">Membangun frontend responsif dan menghubungkannya dengan Laravel, database, serta API.</p>
            </div>

            <div class="p-6 rounded-3xl bg-brand-surface border border-brand-border relative">
                <span class="text-4xl font-extrabold text-rose-500/20 absolute top-4 right-4">04</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-4">
                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                </div>
                <h4 class="font-bold text-white text-base">Testing & Deployment</h4>
                <p class="text-xs text-slate-300 mt-2 leading-relaxed">Uji coba responsivitas di berbagai perangkat, validasi form, dan upload ke GitHub.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT / FOOTER -->
    <footer id="contact" class="py-16 px-6 max-w-6xl mx-auto border-t border-brand-border">
        <div class="rounded-3xl bg-gradient-to-b from-brand-surface to-[#080a10] border border-brand-border p-8 sm:p-14 text-center relative overflow-hidden">
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-rose-500/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-300 text-xs font-semibold tracking-wide mb-4">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                Let's Build Something Great Together
            </div>

            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Mari Terhubung & Berkolaborasi</h2>
            <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto mt-3">
                Saya selalu terbuka untuk diskusi project web, peluang kolaborasi, magang (internship), atau sekadar bertukar pengalaman seputar dunia development.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
                <a href="https://github.com/kaylaartalita15-cloud" target="_blank" rel="noopener noreferrer" 
                   class="px-7 py-3.5 rounded-xl gradient-pill font-semibold text-white shadow-lg shadow-rose-500/25 hover:opacity-95 hover:shadow-rose-500/40 hover:-translate-y-0.5 transition flex items-center gap-2.5">
                    <i data-lucide="github" class="w-5 h-5"></i>
                    <span>Kunjungi GitHub: kaylaartalita15-cloud</span>
                </a>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-12 text-xs text-brand-muted">
            <p>© 2026 Kayla Artalita • SMK Informatika Pesat. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#about" class="hover:text-slate-200 transition">Kembali ke atas</a>
                <a href="https://github.com/kaylaartalita15-cloud" target="_blank" class="hover:text-slate-200 transition">GitHub Profile</a>
            </div>
        </div>
    </footer>

    <script>
        // Inisialisasi ikon Lucide
        lucide.createIcons();
    </script>
</body>
</html>

@php
    $wa = preg_replace('/\D+/', '', config('site.whatsapp'));
    $waText = rawurlencode('Halo Topan Barber, saya ingin booking potong rambut home service.');
    $waUrl = "https://wa.me/{$wa}?text={$waText}";
    $ig = ltrim((string) config('site.instagram'), '@');
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Topan Barber — mobile barbershop di Uluwatu & Jimbaran, Bali. Potong rambut home service ke villa, hotel, atau rumah Anda.">
    <title>Topan Barber · Mobile Barbershop Uluwatu & Jimbaran</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect fill='%23080808' width='32' height='32'/%3E%3Ctext x='16' y='22' text-anchor='middle' font-size='16' fill='%23c9a227'%3ET%3C/text%3E%3C/svg%3E">
</head>
<body class="overflow-x-hidden">
    <div class="grain" aria-hidden="true"></div>

    <header class="site-nav" id="site-nav">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-5 sm:py-4 lg:px-8">
            <a href="#top" class="flex min-w-0 items-center gap-2.5 sm:gap-3">
                <span class="pole h-9! w-2! sm:h-10! sm:w-2.5!">
                    <span class="pole-stripes block h-24"></span>
                </span>
                <span>
                    <span class="font-display block text-base tracking-[0.22em] text-gold sm:text-lg sm:tracking-[0.28em]">TOPAN</span>
                    <span class="block text-[9px] tracking-[0.32em] text-cream/70 sm:text-[10px] sm:tracking-[0.42em]">BARBER</span>
                </span>
            </a>

            <nav class="hidden items-center gap-8 lg:flex" aria-label="Utama">
                <a class="nav-link" href="#story">Story</a>
                <a class="nav-link" href="#services">Services</a>
                <a class="nav-link" href="#gallery">Gallery</a>
                <a class="nav-link" href="#reviews">Reviews</a>
                <a class="nav-link" href="#contact">Contact</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn-gold hidden sm:inline-flex">Book now</a>
                <button type="button" class="menu-btn relative z-80 grid h-11 w-11 place-items-center border border-gold/40 text-gold lg:hidden" id="menu-btn" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu">
                    <span class="flex flex-col items-end gap-1.5">
                        <span class="menu-btn-bar w-5"></span>
                        <span class="menu-btn-bar w-5"></span>
                        <span class="menu-btn-bar w-3"></span>
                    </span>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu fixed inset-0 z-60 bg-ink lg:hidden" id="mobile-menu">
        <div class="flex h-full flex-col justify-between px-6 pb-10 pt-24 sm:px-8">
            <nav class="flex flex-col gap-5 font-display text-3xl leading-none text-gold sm:text-4xl">
                <a href="#story" data-close-menu>Story</a>
                <a href="#services" data-close-menu>Services</a>
                <a href="#gallery" data-close-menu>Gallery</a>
                <a href="#reviews" data-close-menu>Reviews</a>
                <a href="#contact" data-close-menu>Contact</a>
            </nav>
            <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn-gold w-full">WhatsApp booking</a>
        </div>
    </div>

    <main id="top">
        <section class="hero-bg relative flex items-end pb-20 pt-28 sm:pb-16 md:min-h-screen md:items-center md:pb-0">
            <div class="mx-auto grid w-full max-w-7xl gap-8 px-4 sm:gap-12 sm:px-5 lg:grid-cols-[1.2fr_0.8fr] lg:px-8">
                <div class="reveal">
                    <p class="kicker mb-4 sm:mb-5">Mobile barbershop · Bali</p>
                    <h1 class="font-display max-w-3xl text-[2.15rem] leading-[1.08] text-cream sm:text-6xl lg:text-7xl">
                        The chair <span class="text-gold">comes to you</span>.
                    </h1>
                    <p class="mt-5 max-w-xl text-[0.95rem] leading-relaxed text-cream/75 sm:mt-6 sm:text-lg">
                        Potongan rambut home service ke villa, hotel, atau rumah di Uluwatu & Jimbaran.
                        Full kit, on time, satu kursi — full attention.
                    </p>
                    <div class="hero-actions mt-7 flex flex-col gap-3 sm:mt-9 sm:flex-row sm:flex-wrap">
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn-gold">Book on WhatsApp</a>
                        <a href="#services" class="btn-outline">See services</a>
                    </div>
                    <p class="mt-6 text-[10px] tracking-[0.16em] uppercase text-gold/80 sm:mt-8 sm:text-xs sm:tracking-[0.22em]">Uluwatu · Jimbaran · Bukit</p>
                    <div class="mt-6 border border-gold/25 bg-ink/60 p-4 backdrop-blur-sm md:hidden">
                        <p class="font-display text-gold">By appointment</p>
                        <p class="mt-1 text-sm text-cream/70">Setiap hari {{ config('site.hours') }} WITA · Travel included</p>
                    </div>
                </div>

                <div class="reveal hidden items-end justify-end md:flex" style="transition-delay: 180ms">
                    <div class="border border-gold/30 bg-ink/55 p-6 backdrop-blur-sm">
                        <div class="flex items-center gap-4">
                            <div class="pole"><span class="pole-stripes block"></span></div>
                            <div>
                                <p class="font-display text-xl text-gold">By appointment</p>
                                <p class="mt-1 text-sm text-cream/70">Setiap hari {{ config('site.hours') }} WITA</p>
                                <p class="mt-3 text-sm text-cream/80">Travel included around the Bukit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#story" class="absolute bottom-4 left-1/2 hidden -translate-x-1/2 text-[10px] tracking-[0.4em] uppercase text-gold sm:block">Scroll</a>
        </section>

        <section id="story" class="relative py-16 sm:py-24 md:py-32">
            <div class="mx-auto grid max-w-7xl gap-8 px-4 sm:gap-14 sm:px-5 lg:grid-cols-2 lg:items-center lg:px-8">
                <div class="reveal overflow-hidden border border-gold/20">
                    <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1400&q=80" alt="Suasana barbershop klasik" class="aspect-[4/5] h-full w-full object-cover grayscale-[20%] sm:aspect-[5/4] lg:aspect-auto lg:min-h-[520px]">
                </div>
                <div class="reveal">
                    <p class="kicker mb-4">Story</p>
                    <h2 class="font-display text-[1.75rem] leading-tight text-cream sm:text-5xl">Craft on the road, not in a queue.</h2>
                    <div class="gold-line my-6"></div>
                    <p class="text-cream/75 leading-relaxed">
                        Topan Barber lahir dari ide sederhana: potongan yang rapi tidak harus dibayar dengan macet atau ruang tunggu.
                        Kursinya kami bawa. Kit lengkap, blade baru, dan barber yang datang ke pintu villa Anda — on schedule.
                    </p>
                    <p class="mt-4 text-cream/75 leading-relaxed">
                        Dari tebing Uluwatu sampai pantai Jimbaran, pengalamannya sama: unhurried, presisi, dan personal.
                        Musik Anda. Waktu Anda. Satu klien dalam satu waktu.
                    </p>
                    <ul class="mt-8 grid grid-cols-3 gap-2 sm:gap-4">
                        <li class="border border-gold/20 p-3 sm:p-4">
                            <p class="font-display text-2xl text-gold">01</p>
                            <p class="mt-1 text-[11px] leading-snug text-cream/70 sm:text-sm">Message to book</p>
                        </li>
                        <li class="border border-gold/20 p-3 sm:p-4">
                            <p class="font-display text-2xl text-gold">02</p>
                            <p class="mt-1 text-[11px] leading-snug text-cream/70 sm:text-sm">We come to you</p>
                        </li>
                        <li class="border border-gold/20 p-3 sm:p-4">
                            <p class="font-display text-2xl text-gold">03</p>
                            <p class="mt-1 text-[11px] leading-snug text-cream/70 sm:text-sm">Sit. Cut. Done.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="services" class="bg-ink-soft py-16 sm:py-24 md:py-32">
            <div class="mx-auto max-w-7xl px-4 sm:px-5 lg:px-8">
                <div class="reveal mb-8 max-w-2xl sm:mb-14">
                    <p class="kicker mb-4">Services</p>
                    <h2 class="font-display text-[1.75rem] leading-tight sm:text-5xl">Every cut, dialed in.</h2>
                    <p class="mt-4 text-cream/70">Barbering lengkap ke pintu Anda. Travel di area layanan sudah termasuk.</p>
                </div>

                <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                    @php
                        $services = [
                            ['num' => '01', 'name' => 'Classic Haircut', 'price' => 'Rp 350K', 'desc' => 'Konsultasi, potongan gunting atau clipper, styling, dan neck shave. Travel included.'],
                            ['num' => '02', 'name' => 'Skin Fade', 'price' => 'Rp 400K', 'desc' => 'Fade yang blend, line-up tajam, dan finishing yang tahan sampai golden hour berikutnya.'],
                            ['num' => '03', 'name' => 'Beard Sculpt', 'price' => 'Rp 150K', 'desc' => 'Shape-up dan edging razor, disesuaikan dengan bentuk wajah, selesai dengan oil atau balm.'],
                            ['num' => '04', 'name' => 'Hot Towel Shave', 'price' => 'Rp 250K', 'desc' => 'Straight-razor klasik dengan pre-shave oil hangat. Close, smooth, ritual.'],
                            ['num' => '05', 'name' => 'Cut + Beard', 'price' => 'Rp 450K', 'desc' => 'Paket lengkap: rambut dan jenggot dalam satu sesi private di tempat Anda.'],
                            ['num' => '06', 'name' => 'Colour / Grey Blend', 'price' => 'From Rp 900K', 'desc' => 'Warna custom atau grey blending natural. Harga final setelah lihat kondisi rambut.'],
                        ];
                    @endphp
                    @foreach ($services as $service)
                        <article class="service-card reveal p-5 sm:p-6">
                            <div class="flex items-start justify-between gap-4">
                                <p class="font-display text-gold">{{ $service['num'] }}</p>
                                <p class="text-sm tracking-widest text-gold">{{ $service['price'] }}</p>
                            </div>
                            <h3 class="font-display mt-5 text-xl sm:mt-6 sm:text-2xl">{{ $service['name'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-cream/70">{{ $service['desc'] }}</p>
                            <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="mt-6 inline-block text-xs tracking-[0.2em] uppercase text-gold">Book this →</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="gallery" class="py-16 sm:py-24 md:py-32">
            <div class="mx-auto max-w-7xl px-4 sm:px-5 lg:px-8">
                <div class="reveal mb-8 flex flex-wrap items-end justify-between gap-4 sm:mb-12 sm:gap-6">
                    <div>
                        <p class="kicker mb-4">Gallery</p>
                        <h2 class="font-display text-[1.75rem] leading-tight sm:text-5xl">The proof is in the fade.</h2>
                    </div>
                    <p class="max-w-sm text-sm text-cream/60">Foto kerja terbaru. Tap untuk lihat lebih besar — ganti dengan hasil potongan Topan kapan saja.</p>
                </div>

                <div class="grid grid-cols-2 gap-2 sm:gap-3 md:grid-cols-3 md:gap-4">
                    @php
                        $shots = [
                            ['src' => 'https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=900&q=80', 'alt' => 'Skin fade close-up', 'tag' => 'Skin Fade'],
                            ['src' => 'https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=900&q=80', 'alt' => 'Barber at work', 'tag' => 'Chair'],
                            ['src' => 'https://images.unsplash.com/photo-1622286342621-4bd786c2447c?auto=format&fit=crop&w=900&q=80', 'alt' => 'Clipper work', 'tag' => 'Clipper'],
                            ['src' => 'https://images.unsplash.com/photo-1634449571010-02389ed0f9b0?auto=format&fit=crop&w=900&q=80', 'alt' => 'Beard trim', 'tag' => 'Beard'],
                            ['src' => 'https://images.unsplash.com/photo-1493256338651-d82f7acb2b38?auto=format&fit=crop&w=900&q=80', 'alt' => 'Classic cut', 'tag' => 'Classic'],
                            ['src' => 'https://images.unsplash.com/photo-1517832606299-7ae9b414b4ac?auto=format&fit=crop&w=900&q=80', 'alt' => 'Barbershop tools', 'tag' => 'Tools'],
                        ];
                    @endphp
                    @foreach ($shots as $shot)
                        <button type="button" class="gallery-item reveal group relative overflow-hidden" data-src="{{ $shot['src'] }}" data-alt="{{ $shot['alt'] }}">
                            <img src="{{ $shot['src'] }}" alt="{{ $shot['alt'] }}" class="aspect-[4/5] w-full object-cover">
                            <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 to-transparent p-2 text-left text-[10px] tracking-[0.16em] uppercase text-gold sm:p-4 sm:text-xs sm:tracking-[0.2em] sm:opacity-0 sm:transition sm:group-hover:opacity-100">{{ $shot['tag'] }}</span>
                        </button>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="reviews" class="bg-ink-soft py-16 sm:py-24 md:py-32">
            <div class="mx-auto max-w-7xl px-4 sm:px-5 lg:px-8">
                <div class="reveal mb-8 flex flex-wrap items-end justify-between gap-4 sm:mb-10">
                    <div>
                        <p class="kicker mb-4">Reviews</p>
                        <h2 class="font-display text-[1.75rem] leading-tight sm:text-5xl">Fresh cuts, happy chairs.</h2>
                    </div>
                    <p class="font-display text-gold">★★★★★ 5.0</p>
                </div>

                <div class="review-track" id="review-track">
                    @php
                        $reviews = [
                            ['name' => 'Marco D.', 'place' => 'Uluwatu · Skin Fade', 'text' => 'Datang tepat waktu ke villa, kit lengkap, no fuss. Fade paling rapi yang pernah saya dapat di Bali — dan saya tidak perlu keluar dari balcony.'],
                            ['name' => 'Tom R.', 'place' => 'Jimbaran · Haircut', 'text' => 'Line-up-nya surgical. Straight-razor finish-nya sendiri sudah worth the booking. Ini barber yang saya cari sejak pindah ke Bukit.'],
                            ['name' => 'Aldi P.', 'place' => 'Pecatu · Haircut', 'text' => 'Tidak macet, tidak ruang tunggu. Potong di teras sambil musik sendiri. Topan benar-benar dengar mau seperti apa. Sudah booking tiga sesi berikutnya.'],
                            ['name' => 'Kadek S.', 'place' => 'Ungasan · Beard Trim', 'text' => 'Punctual, profesional, dan terampil. Jenggot belum pernah se-tajam ini. Rasanya sesi private, bukan appointment yang dikejar waktu.'],
                            ['name' => 'James W.', 'place' => 'Nusa Dua · Full Shave', 'text' => 'Datang seminggu, butuh rapi sebelum meeting. Diurus langsung di hotel. Begini seharusnya barbering bekerja.'],
                        ];
                    @endphp
                    @foreach ($reviews as $review)
                        <article class="review-card border border-gold/20 bg-ink p-5 sm:p-6">
                            <p class="text-gold">★★★★★</p>
                            <p class="mt-4 text-sm leading-relaxed text-cream/80">“{{ $review['text'] }}”</p>
                            <div class="mt-6 flex items-center gap-3">
                                <span class="grid h-10 w-10 place-items-center border border-gold/40 font-display text-gold">{{ substr($review['name'], 0, 1) }}</span>
                                <div>
                                    <p class="text-sm text-cream">{{ $review['name'] }}</p>
                                    <p class="text-xs text-cream/50">{{ $review['place'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <p class="mt-4 text-right text-xs tracking-widest uppercase text-gold/70">Swipe for more →</p>
            </div>
        </section>

        <section id="contact" class="py-16 sm:py-24 md:py-32">
            <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-5 lg:grid-cols-2 lg:gap-12 lg:px-8">
                <div class="reveal">
                    <p class="kicker mb-4">Contact</p>
                    <h2 class="font-display text-[1.75rem] leading-tight sm:text-5xl">Book the chair.</h2>
                    <p class="mt-4 max-w-md text-cream/70">Kirim pesan, sebutkan layanan, lokasi, dan jam yang diinginkan. Same-day sering masih available.</p>

                    <dl class="mt-10 space-y-6">
                        <div>
                            <dt class="kicker">Area</dt>
                            <dd class="mt-2 text-cream">{{ implode(' · ', config('site.areas')) }}</dd>
                        </div>
                        <div>
                            <dt class="kicker">Hours</dt>
                            <dd class="mt-2 text-cream">Setiap hari {{ config('site.hours') }} WITA</dd>
                        </div>
                        <div>
                            <dt class="kicker">Instagram</dt>
                            <dd class="mt-2"><a class="text-gold hover:underline" href="https://instagram.com/{{ $ig }}" target="_blank" rel="noopener">@{{ $ig }}</a></dd>
                        </div>
                    </dl>
                </div>

                <form class="reveal border border-gold/20 p-5 sm:p-6 md:p-8" id="booking-form">
                    <label class="mb-4 block text-xs tracking-[0.2em] uppercase text-gold">WhatsApp booking</label>
                    <div class="grid gap-4">
                        <input class="input-field" type="text" name="name" placeholder="Nama" required>
                        <input class="input-field" type="text" name="area" placeholder="Lokasi (villa / hotel / rumah)" required>
                        <select class="input-field" name="service" required>
                            <option value="" disabled selected>Pilih layanan</option>
                            <option>Classic Haircut</option>
                            <option>Skin Fade</option>
                            <option>Beard Sculpt</option>
                            <option>Hot Towel Shave</option>
                            <option>Cut + Beard</option>
                            <option>Colour / Grey Blend</option>
                        </select>
                        <textarea class="input-field min-h-28" name="note" placeholder="Jam yang diinginkan / catatan"></textarea>
                        <button type="submit" class="btn-gold w-full sm:w-auto">Send via WhatsApp</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="border-t border-gold/15 px-4 py-10 pb-28 sm:px-5 sm:pb-10 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 text-center sm:flex-row sm:text-left">
            <p class="font-display tracking-[0.25em] text-gold">TOPAN BARBER</p>
            <p class="text-xs text-cream/45">© {{ date('Y') }} Uluwatu · Jimbaran · Mobile barbershop Bali</p>
        </div>
    </footer>

    <div class="lightbox fixed inset-0 z-100 grid place-items-center bg-black/90 p-4 sm:p-6" id="lightbox" role="dialog" aria-modal="true">
        <button type="button" class="absolute right-4 top-4 grid h-11 w-11 place-items-center text-xl text-gold sm:right-5 sm:top-5" id="lightbox-close" aria-label="Tutup">✕</button>
        <img id="lightbox-img" src="" alt="" class="max-h-[80svh] max-w-full object-contain">
    </div>

    <a class="wa-fab" href="{{ $waUrl }}" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
        <svg viewBox="0 0 32 32" class="h-7 w-7 fill-current" aria-hidden="true">
            <path d="M19.11 17.47c-.28-.14-1.64-.81-1.9-.9s-.44-.14-.63.14-.72.9-.89 1.09-.33.21-.61.07a7.4 7.4 0 0 1-2.18-1.35 8.16 8.16 0 0 1-1.5-1.87c-.16-.27 0-.42.12-.56s.28-.33.42-.5.14-.28.21-.47.03-.35-.04-.49-.63-1.52-.86-2.08c-.23-.55-.46-.47-.63-.48h-.54c-.19 0-.49.07-.74.35s-.98.96-.98 2.34.98 2.71 1.12 2.9 1.93 2.95 4.68 4.14a16 16 0 0 0 1.56.58 3.74 3.74 0 0 0 1.72.11c.52-.08 1.64-.67 1.87-1.32s.23-1.2.16-1.32-.25-.21-.53-.35z"/>
            <path d="M16.03 3C9.39 3 4 8.3 4 14.84a11.7 11.7 0 0 0 1.57 5.86L4 29l8.52-1.54A12.1 12.1 0 0 0 16.03 28C22.67 28 28 22.7 28 16.16 28 9.62 22.67 3 16.03 3zm0 22.8a10 10 0 0 1-5.1-1.4l-.37-.22-5.06.92.93-4.86-.24-.39a9.7 9.7 0 0 1-1.5-5.21c0-5.4 4.48-9.8 10-9.8s10 4.4 10 9.8-4.48 10.16-10 10.16z"/>
        </svg>
    </a>
</body>
</html>

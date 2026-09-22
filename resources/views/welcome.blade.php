<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f6efe8">
        <title>Para Darly</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <span class="cursor-heart" id="cursor-heart" aria-hidden="true">♡</span>
        <div class="touch-sparkles" id="touch-sparkles" aria-hidden="true"></div>
        <div class="scroll-progress" id="scroll-progress" aria-hidden="true"></div>
        <div class="site-shell">
            <section class="welcome-screen" id="welcome-screen" aria-labelledby="welcome-title">
                <div class="grain"></div>
                <div class="orbit orbit-one"></div>
                <div class="orbit orbit-two"></div>
                <div class="welcome-copy">
                    <p class="eyebrow">hecho con cariño · para Darly</p>
                    <h1 id="welcome-title">Darly<br><em>esto es para ti.</em></h1>
                    <p class="welcome-subtitle">Hay personas que merecen un detalle bonito<br class="desktop-only"> simplemente por ser como son.</p>
                    <div class="intro-envelope" aria-hidden="true"><span class="intro-flap"></span><span class="intro-heart">♥</span><span class="intro-letter">para Darly</span></div>
                    <button class="start-button" id="start-button" type="button"><span>Empezar el viaje</span><span class="button-arrow" aria-hidden="true">↗</span></button>
                    <p class="scroll-note">sube el volumen · baja la prisa</p>
                </div>
                <div class="welcome-object" aria-hidden="true">
                    <div class="polaroid polaroid-back"><div class="photo photo-cafe"></div></div>
                    <div class="polaroid polaroid-front"><div class="photo photo-sun"></div><span>para alguien especial</span></div>
                    <div class="floating-heart">♥</div>
                </div>
                <div class="welcome-footer"><span>para una amiga increíble</span><span>scroll para descubrir ↓</span></div>
            </section>

            <main class="memory-page" id="memory-page">
                <header class="topbar">
                    <a class="brand" href="#top">a<span>·</span>m</a>
                    <nav aria-label="Navegación principal"><a href="#historia">Un mensaje</a><a href="#galeria">Detalles</a><a href="#video">Un video</a></nav>
                    <span class="topbar-date">para Darly <span>♡</span></span>
                </header>

                <section class="hero-section reveal" id="top">
                    <div class="hero-copy" id="historia"><p class="eyebrow">capítulo uno / un detalle</p><h2>Qué bonito<br>encontrar a <em>alguien como tú.</em></h2><p class="hero-text">No hace falta una gran ocasión para decirle a alguien que ilumina los espacios, que su forma de ser se nota y que merece cosas bonitas.</p><div class="darly-words" aria-label="Palabras para Darly"><span>auténtica</span><span>valiente</span><span>luminosa</span><span>soñadora</span><span>especial</span></div></div>
                    <div class="hero-visual tilt-card" data-tilt><div class="hero-image"></div><div class="image-label"><span>01</span><span>una energía bonita</span></div><div class="stamp">para<br>ti</div></div>
                    <div class="hero-aside"><span class="vertical-note">un pequeño homenaje</span><span class="hero-line"></span></div>
                </section>

                <section class="quote-section reveal"><p class="section-kicker">las cosas que importan</p><blockquote>“A veces alguien llega a tu vida y, sin hacer demasiado ruido, la vuelve un poquito más bonita.”</blockquote><p class="quote-signature">— este detalle es para ti</p></section>

                <section class="letter-section reveal" id="carta">
                    <div class="letter-intro"><p class="eyebrow">una carta para ti</p><h2>Ábrela cuando<br>quieras <em>sonreír.</em></h2><p>Hay palabras que merecen decirse despacio. Esta pequeña carta guarda un mensaje pensado especialmente para ti.</p></div>
                    <button class="envelope" id="envelope" type="button" aria-expanded="false" aria-controls="letter-message"><span class="envelope-flap"></span><span class="envelope-paper" id="letter-message"><strong>Querida Darly:</strong><br>Solo quería recordarte que eres una persona muy especial. Tu forma de ser tiene una luz bonita, de esas que se notan sin pedir permiso. Que nunca dudes de todo lo bueno que mereces.<br><br>Con cariño,<br>alguien que quiso hacerte sonreír.</span><span class="envelope-front"></span><span class="envelope-label">toca para abrir</span></button>
                </section>

                <section class="music-section reveal" aria-label="Música de fondo"><div><p class="eyebrow">un poco de música</p><h2>Que este momento<br>tenga <em>su propia melodía.</em></h2></div><div class="music-player"><audio id="page-music" loop preload="none"><source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg"></audio><button id="music-toggle" class="music-toggle" type="button" aria-pressed="false"><span class="music-icon">♫</span><span id="music-label">Reproducir música</span><span class="music-bars" aria-hidden="true"><i></i><i></i><i></i></span></button><p>La música comenzará solo cuando tú lo decidas.</p></div></section>

                <section class="typed-section reveal"><p class="eyebrow">un mensaje escrito despacio</p><h2 id="typed-message" aria-live="polite"></h2><span class="typing-cursor" aria-hidden="true">|</span></section>

                <section class="gift-section reveal"><div class="gift-copy"><p class="eyebrow">una pequeña sorpresa</p><h2>Hay algo<br><em>para ti.</em></h2><p>Toca la caja y descubre el mensaje que estaba esperando dentro.</p></div><button class="gift-box" id="gift-box" type="button" aria-expanded="false" aria-controls="gift-message"><span class="gift-lid"></span><span class="gift-ribbon vertical"></span><span class="gift-ribbon horizontal"></span><span class="gift-message" id="gift-message">Darly, que nunca te falten motivos para sonreír.</span><span class="gift-bow">✦</span></button></section>

                <section class="garden-section reveal"><div class="garden-copy"><p class="eyebrow">cosas bonitas para ti</p><h2>Que florezca<br><em>todo lo bueno.</em></h2><p>Cada flor guarda un deseo: calma, alegría, sueños cumplidos y días llenos de luz.</p></div><div class="garden" aria-label="Jardín de buenos deseos"><span class="flower flower-one">✿<small>calma</small></span><span class="flower flower-two">✽<small>alegría</small></span><span class="flower flower-three">✾<small>sueños</small></span><span class="flower flower-four">❀<small>luz</small></span><span class="garden-ground"></span></div></section>

                <section class="constellation-section reveal"><p class="eyebrow">tu propia constelación</p><h2>Hay personas que<br><em>parecen estrellas.</em></h2><div class="constellation" aria-label="Constelación de Darly"><span class="star star-a" data-star="Tu forma de ser ilumina más de lo que imaginas.">✦</span><span class="star star-b" data-star="Mereces que la vida te sorprenda bonito.">✦</span><span class="star star-c" data-star="Tu alegría tiene una luz muy especial.">✦</span><span class="star star-d" data-star="Nunca olvides todo lo valiosa que eres.">✦</span><span class="star star-e" data-star="Lo mejor todavía puede estar por comenzar.">✦</span><span class="constellation-name">Darly<br><em>Vanesa Usuga</em></span><p class="star-message" id="star-message">Toca una estrella</p></div></section>

                <section class="reasons-section reveal"><p class="eyebrow">siete pequeños recordatorios</p><h2>7 razones por las que<br><em>eres especial.</em></h2><div class="reasons-grid"><article><b>01</b><p>Tu manera de tratar a los demás.</p></article><article><b>02</b><p>La energía bonita que transmites.</p></article><article><b>03</b><p>Tu forma única de ver el mundo.</p></article><article><b>04</b><p>La fuerza que llevas incluso en silencio.</p></article><article><b>05</b><p>Las sonrisas que provocas sin darte cuenta.</p></article><article><b>06</b><p>Todo lo que todavía estás por lograr.</p></article><article><b>07</b><p>Simplemente, porque eres tú.</p></article></div></section>

                <section class="surprise-section reveal"><p class="eyebrow">última sorpresa</p><h2>¿Quieres ver<br><em>algo bonito?</em></h2><button class="surprise-button" id="surprise-button" type="button">Abrir sorpresa <span>✦</span></button><div class="surprise-burst" id="surprise-burst" aria-live="polite">Darly, el mundo es un poquito más bonito porque existes.</div></section>

                <section class="wishes-section reveal"><div><p class="eyebrow">un calendario de deseos</p><h2>Que cada mes<br>te encuentre <em>sonriendo.</em></h2></div><div class="wish-grid"><button type="button" data-wish="Que enero te traiga comienzos tranquilos.">01<br><small>ene</small></button><button type="button" data-wish="Que febrero te regale mucho cariño.">02<br><small>feb</small></button><button type="button" data-wish="Que marzo te recuerde lo fuerte que eres.">03<br><small>mar</small></button><button type="button" data-wish="Que abril llegue lleno de luz.">04<br><small>abr</small></button><button type="button" data-wish="Que mayo te sorprenda bonito.">05<br><small>may</small></button><button type="button" data-wish="Que junio te encuentre cumpliendo sueños.">06<br><small>jun</small></button><button type="button" data-wish="Que julio te regale días inolvidables.">07<br><small>jul</small></button><button type="button" data-wish="Que agosto traiga calma a tu corazón.">08<br><small>ago</small></button><button type="button" data-wish="Que septiembre celebre todo lo que lograste.">09<br><small>sep</small></button><button type="button" data-wish="Que octubre tenga magia inesperada.">10<br><small>oct</small></button><button type="button" data-wish="Que noviembre te encuentre rodeada de amor.">11<br><small>nov</small></button><button type="button" data-wish="Que diciembre cierre el año con una sonrisa.">12<br><small>dic</small></button><p class="wish-message" id="wish-message">Elige un mes</p></div></section>

                <section class="strengths-section reveal"><p class="eyebrow">lo que te hace única</p><h2>Tus fortalezas<br><em>también brillan.</em></h2><div class="strength-list"><span>auténtica</span><span>valiente</span><span>luminosa</span><span>increíble</span><span>soñadora</span></div></section>

                <section class="scratch-section reveal"><div class="scratch-copy"><p class="eyebrow">un mensaje escondido</p><h2>Descubre lo que<br>hay <em>debajo.</em></h2><p>Desliza o toca la tarjeta para revelar una frase solo para ti.</p></div><div class="scratch-card" id="scratch-card"><div class="scratch-cover">raspa aquí ✦</div><p>Tu forma de ser es un regalo que no se encuentra todos los días.</p></div></section>

                <section class="random-section reveal"><p class="eyebrow">elige una al azar</p><h2>Una frase para<br>este <em>momento.</em></h2><button class="random-button" id="random-button" type="button">Sorpréndeme <span>✧</span></button><p class="random-message" id="random-message">Haz clic para recibir una frase.</p></section>

                <section class="gallery-section reveal" id="galeria">
                    <div class="section-heading"><div><p class="eyebrow">capítulo dos / cosas bonitas</p><h2>Una colección de<br><em>buenas vibras.</em></h2></div><p class="section-intro">Imágenes para celebrar esa energía tuya que hace que cualquier lugar se sienta más alegre.</p></div>
                    <div class="gallery-grid">
                        <figure class="gallery-item gallery-tall"><button class="gallery-image image-two" type="button" data-gallery-image="https://images.unsplash.com/photo-1506869640319-fe1a24fd76dc?auto=format&fit=crop&w=1400&q=90" data-gallery-title="luz propia"></button><figcaption><span>01 / luz propia</span><span>☼</span></figcaption></figure>
                        <figure class="gallery-item gallery-wide"><button class="gallery-image image-three" type="button" data-gallery-image="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1400&q=90" data-gallery-title="todo lo bonito que viene"></button><figcaption><span>02 / todo lo bonito que viene</span><span>♡</span></figcaption></figure>
                        <figure class="gallery-item gallery-small"><button class="gallery-image image-four" type="button" data-gallery-image="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1200&q=90" data-gallery-title="motivos para sonreír"></button><figcaption><span>03 / motivos para sonreír</span><span>✦</span></figcaption></figure>
                    </div>
                </section>

                @php($videoUrl = 'https://www.youtube.com/watch?v=SHEGijhWbTw')
                <section class="phrases-section reveal"><p class="eyebrow">pequeños recordatorios</p><h2>Porque mereces<br><em>escuchar cosas bonitas.</em></h2><div class="phrase-grid"><article><span>01</span><p>Tu manera de ser deja algo bonito en los demás.</p></article><article><span>02</span><p>No necesitas ser perfecta para ser extraordinaria.</p></article><article><span>03</span><p>Ojalá la vida te devuelva toda tu luz.</p></article></div></section>
                <section class="video-section reveal" id="video"><div class="video-heading"><p class="eyebrow">capítulo tres / dale play</p><h2>Un mensaje<br>en <em>movimiento.</em></h2></div><div class="video-frame"><iframe id="message-video" src="{{ $videoUrl }}" title="Un mensaje especial" data-video-url="{{ $videoUrl }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><div class="video-caption"><span>para repetir cuando necesites sonreír</span><span>▶</span></div></div></section>
                <section class="night-section reveal"><div class="night-sky"><span>✦</span><span>✧</span><span>·</span><span>✦</span><span>✧</span><span>·</span><span>✦</span><span>✧</span><span>·</span><h2>Darly, nunca olvides<br><em>lo especial que eres.</em></h2></div><p class="night-typed" id="night-typed"></p></section>
                <section class="smile-section reveal"><p class="eyebrow">un último detalle</p><h2>¿Sonreíste?</h2><button class="smile-button" id="smile-button" type="button">Sí, sonreí <span>♡</span></button><p class="smile-count"><strong id="smile-count">0</strong> sonrisas guardadas</p></section>
                <footer class="site-footer final-section"><p class="footer-mark">a<span>·</span>m</p><p class="final-name">Darly</p><p>Que nunca te falten razones para sonreír.</p><p class="footer-small">hecho especialmente para ti</p><div class="petals" aria-hidden="true"><span>✦</span><span>✿</span><span>♥</span><span>✧</span><span>✽</span></div></footer>
            </main>
        </div>
        <div class="gallery-modal" id="gallery-modal" role="dialog" aria-modal="true" aria-label="Imagen ampliada"><button type="button" id="gallery-close" aria-label="Cerrar imagen">×</button><img id="gallery-modal-image" src="" alt=""><p id="gallery-modal-title"></p></div>
    </body>
</html>

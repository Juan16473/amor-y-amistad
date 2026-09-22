import './bootstrap';

const startButton = document.querySelector('#start-button');
const welcomeScreen = document.querySelector('#welcome-screen');
const memoryPage = document.querySelector('#memory-page');

startButton?.addEventListener('click', () => {
	welcomeScreen?.classList.add('is-opening');
	memoryPage?.classList.add('is-visible');
	window.setTimeout(() => document.querySelector('#historia')?.scrollIntoView({ behavior: 'smooth' }), 450);
});

document.querySelectorAll('[data-tilt]').forEach((card) => {
	card.addEventListener('pointermove', (event) => {
		const bounds = card.getBoundingClientRect();
		const x = (event.clientX - bounds.left) / bounds.width - 0.5;
		const y = (event.clientY - bounds.top) / bounds.height - 0.5;
		card.style.transform = `perspective(900px) rotateY(${x * 5}deg) rotateX(${y * -5}deg)`;
	});
	card.addEventListener('pointerleave', () => { card.style.transform = ''; });
});

const messageVideo = document.querySelector('#message-video');

if (messageVideo) {
	const videoUrl = messageVideo.dataset.videoUrl;
	const videoId = videoUrl.match(/(?:youtu\.be\/|[?&]v=|embed\/)([\w-]{11})/)?.[1];

	if (videoId) {
		messageVideo.src = `https://www.youtube.com/embed/${videoId}?rel=0`;
	}
}

const envelope = document.querySelector('#envelope');
envelope?.addEventListener('click', () => {
	const isOpen = envelope.classList.toggle('is-open');
	envelope.setAttribute('aria-expanded', String(isOpen));
});

const music = document.querySelector('#page-music');
const musicToggle = document.querySelector('#music-toggle');
const musicLabel = document.querySelector('#music-label');

const stopPageMusic = () => {
	if (!music || music.paused) return;
	music.pause();
	musicToggle?.classList.remove('is-playing');
	musicToggle?.setAttribute('aria-pressed', 'false');
	if (musicLabel) musicLabel.textContent = 'Reproducir música';
};

musicToggle?.addEventListener('click', async () => {
	if (!music) return;

	if (music.paused) {
		await music.play();
		musicToggle.classList.add('is-playing');
		musicToggle.setAttribute('aria-pressed', 'true');
		if (musicLabel) musicLabel.textContent = 'Pausar música';
	} else {
		music.pause();
		musicToggle.classList.remove('is-playing');
		musicToggle.setAttribute('aria-pressed', 'false');
		if (musicLabel) musicLabel.textContent = 'Reproducir música';
	}
});

const revealObserver = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add('is-revealed');
			revealObserver.unobserve(entry.target);
		}
	});
}, { threshold: 0.14 });

document.querySelectorAll('.reveal').forEach((section) => revealObserver.observe(section));

const videoSection = document.querySelector('#video');
if (videoSection) {
	new IntersectionObserver((entries, observer) => {
		if (entries[0].isIntersecting) {
			stopPageMusic();
			observer.disconnect();
		}
	}, { threshold: 0.25 }).observe(videoSection);
}

const typedMessage = document.querySelector('#typed-message');
const typedText = 'Darly, hay personas que hacen especial cualquier lugar simplemente con su forma de ser. Este pequeño espacio nació para recordarte lo valiosa que eres.';
let typedStarted = false;

const typeMessage = () => {
	if (!typedMessage || typedStarted) return;
	typedStarted = true;
	let character = 0;
	const typeNext = () => {
		typedMessage.textContent = typedText.slice(0, character);
		character += 1;
		if (character <= typedText.length) window.setTimeout(typeNext, 42);
	};
	typeNext();
};

const typedSection = document.querySelector('.typed-section');
if (typedSection) {
	new IntersectionObserver((entries, observer) => {
		if (entries[0].isIntersecting) {
			typeMessage();
			observer.disconnect();
		}
	}, { threshold: 0.4 }).observe(typedSection);
}

const giftBox = document.querySelector('#gift-box');
giftBox?.addEventListener('click', () => {
	const isOpen = giftBox.classList.toggle('is-open');
	giftBox.setAttribute('aria-expanded', String(isOpen));
});

document.querySelectorAll('.star').forEach((star) => {
	star.addEventListener('click', () => {
		document.querySelectorAll('.star').forEach((item) => item.classList.remove('is-active'));
		star.classList.add('is-active');
		const starMessage = document.querySelector('#star-message');
		if (starMessage) starMessage.textContent = star.dataset.star;
	});
});

const surpriseButton = document.querySelector('#surprise-button');
surpriseButton?.addEventListener('click', () => {
	document.querySelector('#surprise-burst')?.classList.add('is-visible');
	surpriseButton.textContent = 'Sorpresa descubierta ✦';
});

document.querySelectorAll('[data-wish]').forEach((month) => {
	month.addEventListener('click', () => {
		document.querySelectorAll('[data-wish]').forEach((item) => item.classList.remove('is-selected'));
		month.classList.add('is-selected');
		const wishMessage = document.querySelector('#wish-message');
		if (wishMessage) wishMessage.textContent = month.dataset.wish;
	});
});

const scratchCard = document.querySelector('#scratch-card');
scratchCard?.addEventListener('pointerdown', () => scratchCard.classList.add('is-revealed'));

const randomButton = document.querySelector('#random-button');
const randomMessage = document.querySelector('#random-message');
const randomPhrases = [
	'Que hoy te pase algo tan bonito como tú.',
	'Nunca subestimes la luz que llevas contigo.',
	'Todo lo bueno también está buscando llegar a ti.',
	'Tu sonrisa merece aparecer muchas veces hoy.',
	'Hay magia en la forma en que eres tú misma.',
];
randomButton?.addEventListener('click', () => {
	const phrase = randomPhrases[Math.floor(Math.random() * randomPhrases.length)];
	if (randomMessage) randomMessage.textContent = phrase;
});

const nightTyped = document.querySelector('#night-typed');
const nightText = 'Y este pequeño rincón siempre tendrá una luz encendida para ti.';
if (nightTyped) {
	new IntersectionObserver((entries, observer) => {
		if (!entries[0].isIntersecting) return;
		let character = 0;
		const typeNext = () => {
			nightTyped.textContent = nightText.slice(0, character);
			character += 1;
			if (character <= nightText.length) window.setTimeout(typeNext, 55);
		};
		typeNext();
		observer.disconnect();
	}, { threshold: 0.4 }).observe(nightTyped);
}

const smileButton = document.querySelector('#smile-button');
const smileCount = document.querySelector('#smile-count');
let smiles = 0;
smileButton?.addEventListener('click', () => {
	smiles += 1;
	if (smileCount) smileCount.textContent = String(smiles);
	smileButton.innerHTML = 'Sonrisa guardada <span>♥</span>';
});

const cursorHeart = document.querySelector('#cursor-heart');
window.addEventListener('pointermove', (event) => {
	if (cursorHeart) {
		cursorHeart.style.left = `${event.clientX}px`;
		cursorHeart.style.top = `${event.clientY}px`;
	}
});

const scrollProgress = document.querySelector('#scroll-progress');
const welcomeObject = document.querySelector('.welcome-object');
window.addEventListener('scroll', () => {
	const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
	const progress = scrollableHeight > 0 ? (window.scrollY / scrollableHeight) * 100 : 0;
	if (scrollProgress) scrollProgress.style.width = `${progress}%`;
	if (welcomeObject && window.scrollY < window.innerHeight) {
		welcomeObject.style.transform = `translateY(${window.scrollY * 0.08}px) rotate(6deg)`;
	}
}, { passive: true });

const galleryModal = document.querySelector('#gallery-modal');
const galleryModalImage = document.querySelector('#gallery-modal-image');
const galleryModalTitle = document.querySelector('#gallery-modal-title');
const closeGallery = () => galleryModal?.classList.remove('is-open');

document.querySelectorAll('[data-gallery-image]').forEach((image) => {
	image.addEventListener('click', () => {
		if (!galleryModal || !galleryModalImage) return;
		galleryModalImage.src = image.dataset.galleryImage;
		galleryModalImage.alt = image.dataset.galleryTitle || 'Imagen ampliada';
		if (galleryModalTitle) galleryModalTitle.textContent = image.dataset.galleryTitle || '';
		galleryModal.classList.add('is-open');
	});
});

document.querySelector('#gallery-close')?.addEventListener('click', closeGallery);
galleryModal?.addEventListener('click', (event) => {
	if (event.target === galleryModal) closeGallery();
});
window.addEventListener('keydown', (event) => {
	if (event.key === 'Escape') closeGallery();
});

const touchSparkles = document.querySelector('#touch-sparkles');
window.addEventListener('pointerdown', (event) => {
	if (!touchSparkles || event.target.closest('button, a, iframe')) return;
	const sparkle = document.createElement('span');
	sparkle.className = 'touch-sparkle';
	sparkle.textContent = Math.random() > 0.5 ? '✦' : '♥';
	sparkle.style.left = `${event.clientX}px`;
	sparkle.style.top = `${event.clientY}px`;
	touchSparkles.appendChild(sparkle);
	window.setTimeout(() => sparkle.remove(), 800);
});

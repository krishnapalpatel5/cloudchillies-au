<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />


 <!-- Google tag (gtag.js) -->
<script>
gtag('event', 'conversion', {
  'send_to': 'AW-17533579353/CONVERSION_LABEL'
});
</script>

<!-- Event snippet for Submit lead form conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-17533579353/BBxTCO2T6JQbENng1KhB',
      'value': 1.0,
      'currency': 'INR',
      'event_callback': callback
  });
  return false;
}
</script>

  <style>
    :root {
      --blue:    #00458c;
      --green:   #7bc534;
      --bg:      #f2f7ff;
      --card-bg: #ffffff;
      --ink:     #1a2333;
      --muted:   #6b7a90;
      --shadow:  0 24px 64px rgba(0,69,140,.12);
    }

    *, *::before, *::after { box-sizing: border-box; }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: 'DM Sans', sans-serif;
      background-color: var(--bg);
      background-image:
        radial-gradient(ellipse 70% 55% at 15% 0%,  rgba(0,69,140,.10) 0%, transparent 60%),
        radial-gradient(ellipse 55% 50% at 88% 100%, rgba(123,197,52,.10) 0%, transparent 58%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
    }

    /* ── Particles ── */
    .bg-particles { position: fixed; inset: 0; overflow: hidden; pointer-events: none; z-index: 0; }
    .particle {
      position: absolute;
      border-radius: 50%;
      opacity: 0;
      animation: float-up var(--dur, 9s) var(--delay, 0s) infinite ease-in-out;
    }
    @keyframes float-up {
      0%   { opacity: 0; transform: translateY(0) scale(1); }
      20%  { opacity: .5; }
      80%  { opacity: .25; }
      100% { opacity: 0; transform: translateY(-110vh) scale(.4); }
    }

    /* ── Card ── */
    .thankyou-card {
      position: relative;
      z-index: 1;
      background: var(--card-bg);
      border-radius: 28px;
      box-shadow: var(--shadow);
      max-width: 520px;
      width: 100%;
      overflow: hidden;
      animation: card-enter .9s cubic-bezier(.22,.68,0,1.2) both;
    }
    @keyframes card-enter {
      from { opacity: 0; transform: translateY(48px) scale(.96); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    /* ── Accent bar ── */
    .accent-bar {
      height: 6px;
      background: linear-gradient(90deg, var(--blue) 0%, var(--green) 100%);
    }

    /* ── Icon ── */
    .icon-wrap {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--blue) 0%, #0062c9 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      box-shadow: 0 12px 32px rgba(0,69,140,.28);
      animation: pop-in 1s .4s cubic-bezier(.34,1.56,.64,1) both;
    }
    @keyframes pop-in {
      from { opacity: 0; transform: scale(0); }
      to   { opacity: 1; transform: scale(1); }
    }
    .icon-wrap svg {
      width: 44px; height: 44px;
      animation: draw-check .8s .9s ease both;
    }
    @keyframes draw-check {
      from { stroke-dashoffset: 60; opacity: 0; }
      to   { stroke-dashoffset: 0;  opacity: 1; }
    }
    .icon-wrap svg path {
      stroke-dasharray: 60;
      stroke-dashoffset: 60;
    }

    /* ── Typography ── */
    .card-body { padding: 2.8rem 3rem 3rem; }

    h1.headline {
      font-weight: 900;
      font-size: clamp(2rem, 5vw, 2.8rem);
      color: var(--blue);
      line-height: 1.1;
      margin: 1.4rem 0 .6rem;
      animation: fade-up .7s .6s ease both;
    }
    h1.headline span { color: var(--green); }

    .subline {
      font-size: 1rem;
      font-weight: 400;
      color: var(--muted);
      line-height: 1.65;
      animation: fade-up .7s .75s ease both;
    }

    @keyframes fade-up {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Divider ── */
    .brand-divider {
      height: 3px;
      width: 64px;
      background: linear-gradient(90deg, var(--blue), var(--green));
      border-radius: 3px;
      margin: 1.6rem auto;
      animation: expand .8s .9s ease both;
    }
    @keyframes expand {
      from { width: 0; opacity: 0; }
      to   { width: 64px; opacity: 1; }
    }

    /* ── Countdown ring ── */
    .countdown-wrap {
      margin: 1.8rem auto 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: .6rem;
      animation: fade-up .7s 1s ease both;
    }
    .ring-container {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 72px;
      height: 72px;
    }
    .ring-svg { transform: rotate(-90deg); }
    .ring-track    { fill: none; stroke: #dce8f5; stroke-width: 5; }
    .ring-progress {
      fill: none;
      stroke: var(--green);
      stroke-width: 5;
      stroke-linecap: round;
      stroke-dasharray: 163.36;
      stroke-dashoffset: 0;
      transition: stroke-dashoffset .95s linear;
    }
    .ring-number {
      position: absolute;
      font-size: 1.65rem;
      font-weight: 700;
      color: var(--blue);
      line-height: 1;
    }
    .countdown-label {
      font-size: .82rem;
      color: var(--muted);
      letter-spacing: .03em;
    }

    /* ── Confetti ── */
    .confetti-container { position: fixed; inset: 0; pointer-events: none; z-index: 999; }
    .confetti-dot { position: absolute; width: 8px; height: 8px; border-radius: 2px; opacity: 0; }

    /* ── Responsive ── */
    @media (max-width: 576px) {
      .card-body { padding: 2rem 1.5rem 2.5rem; }
    }
  </style>
</head>
<body>

<div class="bg-particles" id="particles"></div>
<div class="confetti-container" id="confetti"></div>

<div class="thankyou-card">
  <div class="accent-bar"></div>

  <div class="card-body text-center">

    <div class="">
          <img src="https://cloudchillies.com.au/img/logo.svg" alt="logo" width="240">
    </div>

    <h1 class="headline">Thank You <br/><span>So Much!</span></h1>

    <p class="subline">
      Your submission has been received.<br>
      Our team will get back to you within <strong>24 hours</strong>.
    </p>

    <div class="brand-divider"></div>

    <div class="countdown-wrap">
      <div class="ring-container">
        <svg class="ring-svg" width="72" height="72" viewBox="0 0 72 72">
          <circle class="ring-track"    cx="36" cy="36" r="26"/>
          <circle class="ring-progress" cx="36" cy="36" r="26" id="ringProgress"/>
        </svg>
        <span class="ring-number" id="countNum">3</span>
      </div>
      <span class="countdown-label">Redirecting you to formSubmit page…</span>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  /* ── Particles ── */
  (function () {
    const colors = ['#00458c','#7bc534','#0062c9','#a8e063','#ccdff5'];
    const container = document.getElementById('particles');
    for (let i = 0; i < 22; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      const size = Math.random() * 10 + 4;
      p.style.cssText = `
        width:${size}px; height:${size}px;
        left:${Math.random()*100}%;
        top:${Math.random()*100}%;
        background:${colors[Math.floor(Math.random()*colors.length)]};
        --dur:${7 + Math.random()*8}s;
        --delay:${Math.random()*6}s;
      `;
      container.appendChild(p);
    }
  })();

  /* ── Confetti burst ── */
  (function () {
    const colors = ['#00458c','#7bc534','#0062c9','#a8e063','#ccdff5','#ffffff'];
    const container = document.getElementById('confetti');
    setTimeout(() => {
      for (let i = 0; i < 70; i++) {
        const dot = document.createElement('div');
        dot.className = 'confetti-dot';
        dot.style.cssText = `
          left:${30 + Math.random()*40}%;
          top:50%;
          background:${colors[Math.floor(Math.random()*colors.length)]};
          transform:rotate(${Math.random()*360}deg);
        `;
        container.appendChild(dot);
        const tx  = (Math.random()-.5) * window.innerWidth * 1.2;
        const ty  = -(Math.random() * window.innerHeight * 1.1 + 100);
        const rot = (Math.random()-.5) * 720;
        dot.animate([
          { opacity:1,   transform:`translate(0,0) rotate(0deg)` },
          { opacity:.8,  transform:`translate(${tx*.4}px,${ty*.4}px) rotate(${rot*.4}deg)` },
          { opacity:0,   transform:`translate(${tx}px,${ty}px) rotate(${rot}deg)` }
        ], { duration:1400+Math.random()*800, delay:Math.random()*400,
             easing:'cubic-bezier(.25,.46,.45,.94)', fill:'forwards' });
      }
      setTimeout(() => container.innerHTML = '', 3000);
    }, 600);
  })();

  /* ── Countdown (configurable) ── */
  (function () {
    const CIRCUMFERENCE = 163.36; // 2π × 26
    const REDIRECT_SECONDS = <?php echo isset($thank_you_redirect_seconds) ? intval($thank_you_redirect_seconds) : 10; ?>;
    let REDIRECT_URL = '<?php echo isset($thank_you_redirect_url) ? htmlspecialchars($thank_you_redirect_url, ENT_QUOTES) : (isset($base_url) ? htmlspecialchars($base_url, ENT_QUOTES) : '/'); ?>';
    // Prefer the previous page (document.referrer) when available and not the same page
    (function () {
      console.log('Referrer:', document.referrer);
      const referrer = document.referrer || '';
      if (referrer && referrer !== window.location.href) {
        REDIRECT_URL = referrer;
      }
    })();

    const ring  = document.getElementById('ringProgress');
    const numEl = document.getElementById('countNum');
    let remaining = REDIRECT_SECONDS;

    // Fire conversion event on page load (no redirect)
    gtag_report_conversion();

    function tick() {
      remaining--;
      numEl.textContent = remaining;
      ring.style.strokeDashoffset = CIRCUMFERENCE * (1 - remaining / REDIRECT_SECONDS);

      if (remaining <= 0) {
        // Uncomment the next line to enable automatic redirect:
        window.location.href = REDIRECT_URL;
      } else {
        setTimeout(tick, 1000);
      }
    }

    ring.style.strokeDashoffset = 0;
    setTimeout(tick, 1000);
  })();
</script>

</body>
</html>
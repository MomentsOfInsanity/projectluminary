<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>To my only</title>
  <style>
    :root{
      --bg1:#0b1020;
      --bg2:#130a1b;
      --card: rgba(255,255,255,.08);
      --text: rgba(255,255,255,.92);
      --muted: rgba(255,255,255,.72);
      --border: rgba(255,255,255,.14);
    }
    *{box-sizing:border-box}
    html, body { height: 100%; }
    body{
      margin:0;
      font-family: ui-serif, Georgia, "Times New Roman", serif;
      color:var(--text);
      background:
        radial-gradient(900px 600px at 20% 20%, rgba(255,153,204,.16), transparent 60%),
        radial-gradient(900px 600px at 80% 30%, rgba(170,132,255,.16), transparent 60%),
        radial-gradient(900px 700px at 50% 90%, rgba(255,215,160,.10), transparent 60%),
        linear-gradient(160deg, var(--bg1), var(--bg2));
      /* ✅ allow scrolling */
      overflow-x: hidden;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }

    /* page wrapper so the card can sit centered but still scroll */
    .wrap{
      min-height: 100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding: 22px 14px 34px;
    }

    /* soft floating hearts */
    .floaters{position:fixed; inset:0; pointer-events:none; opacity:.45; filter:blur(.2px)}
    .heart{
      position:absolute;
      width:10px; height:10px;
      transform: rotate(45deg);
      background: rgba(255,120,180,.22);
      animation: rise 9s linear infinite;
    }
    .heart::before, .heart::after{
      content:"";
      position:absolute;
      width:10px; height:10px;
      border-radius:50%;
      background: inherit;
    }
    .heart::before{left:-5px; top:0}
    .heart::after{left:0; top:-5px}
    @keyframes rise{
      from{ transform: translateY(30px) rotate(45deg); opacity:0; }
      10%{opacity:.8}
      to{ transform: translateY(-110vh) rotate(45deg); opacity:0; }
    }

    .card{
      width:min(720px, 100%);
      background: var(--card);
      border:1px solid var(--border);
      border-radius: 22px;
      padding: 22px 18px;
      backdrop-filter: blur(10px);
      box-shadow: 0 22px 60px rgba(0,0,0,.35);
      position:relative;
    }

    .top{
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
      gap:12px;
      margin-bottom:10px;
      flex-wrap: wrap;
    }
    h1{
      margin:0;
      font-size: clamp(20px, 5.2vw, 32px);
      letter-spacing:.2px;
      line-height:1.15;
      flex: 1 1 260px;
    }
    .tag{
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      font-size: 12px;
      padding: 7px 10px;
      border-radius: 999px;
      border: 1px solid var(--border);
      color: var(--muted);
      background: rgba(0,0,0,.12);
      white-space:nowrap;
    }

    .poem{
      margin: 14px 0 0;
      padding: 16px 14px;
      border-radius: 16px;
      border: 1px solid rgba(255,255,255,.10);
      background: rgba(0,0,0,.10);
      line-height: 1.65;
      font-size: 16px;
      word-wrap: break-word;
    }
    .poem p{ margin: 0 0 14px; }
    .poem p:last-child{ margin-bottom:0; }

    .footer{
      margin-top: 14px;
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
      gap:12px;
      flex-wrap: wrap;
      color: var(--muted);
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      font-size: 13px;
    }

    .actions{
      display:flex;
      gap:10px;
      align-items:center;
      flex-wrap: wrap;
      justify-content:flex-end;
    }

    button{
      border:1px solid var(--border);
      background: rgba(255,255,255,.08);
      color: var(--text);
      padding: 10px 12px;
      border-radius: 14px;
      cursor:pointer;
      transition: transform .12s ease, background .12s ease;
      font-family: inherit;
    }
    button:hover{ transform: translateY(-1px); background: rgba(255,255,255,.12); }
    button:active{ transform: translateY(0px); }

    .note{
      margin-top: 10px;
      font-size: 14px;
      color: rgba(255,255,255,.78);
      font-style: italic;
      opacity:0;
      transform: translateY(6px);
      transition: opacity .25s ease, transform .25s ease;
    }
    .note.show{
      opacity:1;
      transform: translateY(0px);
    }
  </style>
</head>
<body>
  <div class="floaters" aria-hidden="true" id="floaters"></div>

  <div class="wrap">
    <main class="card">
      <div class="top">
        <h1>To my only, to my everything.</h1>
        <!-- <div class="tag">i miss you too much</div> -->
      </div>

      <section class="poem" id="poem">
        <p>
          To be loved by you is like the warmth of the sun.<br/>
          To be thought of by you is like a dream come true.<br/>
          To hear you laugh is the sweetest melody,<br/>
          your smile a moment I replay endlessly.
        </p>

        <p>
          For the moon, for all the stars, no matter the distance,<br/>
          how lucky am I to be under the same sky as you.
        </p>

        <p>
          To me, you aren’t one in a million,<br/>
          but my dearest one of one.<br/><br/>
          Thank you for all these years,<br/>
          for your patience, your kindness, your steady heart.<br/>
          For teaching me what love feels like.<br/>
          For the luxury of these moments,<br/>
          for the happiest memories woven together.<br/>
          A love like no other.
        </p>

        <p>
          No matter where life takes us,<br/>
          across every horizon,<br/>
          I’ll always hope life is kind to you.<br/>
          Thank you for being part of my story.<br/>
          Just know I’ll forever be wishing for your happiest days.
        </p>
      </section>

      <div class="footer">
        <div>Happy Valentine’s Day 🧡</div>
        <div class="actions">
          <!-- <button id="copyBtn" type="button">Copy poem</button> -->
          <button id="sparkBtn" type="button">A little sparkle</button>
        </div>
      </div>

      <div class="note" id="note">Copied. If you send it… send it gently.</div>
    </main>
  </div>

  <script>
    // floating hearts
    const floaters = document.getElementById("floaters");
    const hearts = 18;
    for (let i = 0; i < hearts; i++) {
      const h = document.createElement("div");
      h.className = "heart";
      const left = Math.random() * 100;
      const delay = Math.random() * 9;
      const dur = 7 + Math.random() * 6;
      const size = 8 + Math.random() * 10;
      h.style.left = left + "vw";
      h.style.bottom = (-10 - Math.random()*30) + "px";
      h.style.animationDelay = delay + "s";
      h.style.animationDuration = dur + "s";
      h.style.width = size + "px";
      h.style.height = size + "px";
      h.style.background = `rgba(255, ${120 + Math.floor(Math.random()*80)}, ${170 + Math.floor(Math.random()*70)}, .22)`;
      floaters.appendChild(h);
    }

    // copy button
    const copyBtn = document.getElementById("copyBtn");
    const note = document.getElementById("note");
    const poemText = `To my only, to my everything.
To be loved by you is like the warmth of the sun.
To be thought of by you is like a dream come true.
To hear you laugh is the sweetest melody,
your smile a moment I replay endlessly.

For the moon, for all the stars, no matter the distance,
how lucky am I to be under the same sky as you.

To me, you aren’t one in a million,
but my dearest one of one.

Thank you for all these years,
for your patience, your kindness, your steady heart.
For teaching me what love feels like.
For the luxury of these moments,
for the happiest memories woven together.
A love like no other.

No matter where life takes us,
across every horizon,
I’ll always hope life is kind to you.
Thank you for being part of my story.
Just know I’ll forever be wishing for your happiest days.`;

    // sparkle button (tiny dots)
    const sparkBtn = document.getElementById("sparkBtn");
    sparkBtn.addEventListener("click", () => {
      for (let i = 0; i < 22; i++) {
        const s = document.createElement("div");
        s.style.position = "fixed";
        s.style.left = (45 + (Math.random()*10)) + "vw";
        s.style.top = (45 + (Math.random()*10)) + "vh";
        s.style.width = (3 + Math.random()*4) + "px";
        s.style.height = s.style.width;
        s.style.borderRadius = "999px";
        s.style.background = `rgba(255,255,255,${0.35 + Math.random()*0.4})`;
        s.style.boxShadow = "0 0 14px rgba(255,255,255,.35)";
        s.style.pointerEvents = "none";
        s.style.transition = "transform .9s ease, opacity .9s ease";
        document.body.appendChild(s);

        const dx = (Math.random() - 0.5) * 220;
        const dy = (Math.random() - 0.5) * 220;
        requestAnimationFrame(() => {
          s.style.transform = `translate(${dx}px, ${dy}px)`;
          s.style.opacity = "0";
        });

        setTimeout(() => s.remove(), 950);
      }
    });
  </script>
</body>
</html>

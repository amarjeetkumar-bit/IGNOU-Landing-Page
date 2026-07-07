<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNOU — Indira Gandhi National Open University | Admissions 2026</title>
    <link rel="icon" type="image/png" href="/Images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --blue: #123c6e;
            --blue-2: #1a5299;
            --blue-deep: #0d2c52;
            --sky: #2b8fd6;
            --amber: #f4a825;
            --amber-deep: #d68b0c;
            --link: #1a73c7;
            --ink: #1e2430;
            --muted: #5a6272;
            --paper: #f4f7fb;
            --card: #ffffff;
            --line: #e2e8f1;
            --ok: #1f8a5b;
            --radius: 14px;
            --shadow: 0 12px 34px rgba(18, 60, 110, .10);
            font-size: 16px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0 }
        html { scroll-behavior: smooth }
        body { font-family: "Inter", system-ui, sans-serif; color: var(--ink); background: var(--paper); line-height: 1.6 }
        h1, h2, h3, h4, .brand-txt { font-family: "Poppins", sans-serif; line-height: 1.15 }
        a { color: inherit }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 22px }
        .btn { display: inline-block; font-weight: 600; font-size: .95rem; padding: 13px 26px; border-radius: 8px; text-decoration: none; border: none; cursor: pointer; transition: .18s; text-align: center }
        .btn-amber { background: var(--amber); color: #3a2a00 }
        .btn-amber:hover { background: var(--amber-deep) }
        .btn-ghost { background: transparent; color: #fff; border: 2px solid rgba(255, 255, 255, .45) }
        .btn-ghost:hover { background: rgba(255, 255, 255, .12) }
        .eyebrow { font-size: .76rem; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: var(--blue-2) }
        .section { padding-top: 66px; padding-bottom: 66px }
        .section h2 { font-size: clamp(1.5rem, 3.5vw, 2.1rem); margin: 8px 0 10px; color: var(--ink) }
        .lead { color: var(--muted); max-width: 64ch }

        /* ---------- HEADER ---------- */
        header { position: sticky; top: 0; z-index: 60; background: #fff; border-bottom: 1px solid var(--line) }
        .navbar { display: flex; align-items: center; justify-content: space-between; gap: 18px; padding: 12px 0 }
        .brand { display: flex; align-items: center; gap: 13px; text-decoration: none }
        .crest { width: 50px; height: 50px; flex-shrink: 0; border-radius: 50%; background: linear-gradient(135deg, var(--blue), var(--sky)); display: grid; place-items: center; color: #fff; font-family: "Poppins"; font-weight: 800; font-size: 1rem }
        .brand-txt { line-height: 1.12 }
        .brand-txt .hi { font-weight: 800; font-size: 1.05rem; color: var(--blue) }
        .brand-txt small { display: block; font-family: "Inter"; font-weight: 400; font-size: .74rem; color: var(--muted) }
        .menu { display: flex; align-items: center; gap: 2px; list-style: none }
        .menu>li { position: relative }
        .menu>li>a { display: block; padding: 10px 13px; text-decoration: none; color: var(--ink); font-weight: 600; font-size: .92rem; border-radius: 8px }
        .menu>li>a:hover { color: var(--blue-2) }
        .menu .has-sub>a::after { content: "▾"; margin-left: 5px; font-size: .7rem; opacity: .7 }
        .submenu { position: absolute; top: 100%; left: 0; min-width: 220px; background: #fff; border-radius: 10px; box-shadow: var(--shadow); padding: 8px; list-style: none; opacity: 0; visibility: hidden; transform: translateY(6px); transition: .15s }
        .menu>li:hover .submenu, .menu>li:focus-within .submenu { opacity: 1; visibility: visible; transform: translateY(0) }
        .submenu a { display: block; padding: 9px 12px; text-decoration: none; font-size: .88rem; border-radius: 7px; color: var(--ink) }
        .submenu a:hover { background: var(--paper); color: var(--blue-2) }
        .nav-cta { display: flex; align-items: center; gap: 10px }
        .hamburger { display: none; background: none; border: none; color: var(--blue); font-size: 1.7rem; cursor: pointer; padding: 2px 8px }

        /* ---------- HERO ---------- */
        .hero { background: linear-gradient(150deg, var(--blue) 0%, var(--blue-2) 65%, #2166b3 100%); color: #fff; padding: 58px 0 66px; position: relative; overflow: hidden }
        .hero::after { content: ""; position: absolute; right: -120px; top: -120px; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(244, 168, 37, .22), transparent 70%) }
        .hero-grid { display: grid; grid-template-columns: 1.1fr .9fr; gap: 44px; align-items: center; position: relative; z-index: 1 }
        .hero h1 { font-size: clamp(1.9rem, 4.6vw, 3rem); font-weight: 800; margin: 12px 0 16px }
        .hero h1 span { color: var(--amber) }
        .hero p { color: #d5e2f2; max-width: 54ch; font-size: 1.04rem }
        .hero p b { color: #fff }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 26px }
        .badges { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 30px }
        .badge { display: flex; align-items: center; gap: 9px; background: rgba(255, 255, 255, .09); border: 1px solid rgba(255, 255, 255, .18); padding: 9px 14px; border-radius: 10px; font-size: .82rem; font-weight: 600 }

        /* lead card */
        .lead-card { background: #fff; color: var(--ink); border-radius: 16px; padding: 26px; box-shadow: var(--shadow) }
        .lead-card h3 { font-size: 1.2rem; margin-bottom: 4px; color: var(--blue) }
        .lead-card p { font-size: .86rem; color: var(--muted); margin-bottom: 16px }
        .form-note { font-size: .74rem; color: var(--muted); text-align: center; margin-top: 10px }

        /* accreditation badges inside the hero card */
        .accred-card { text-align: left }
        .accred-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin: 18px 0 20px }
        .accred-item { background: #fff; border: 1px solid var(--line); border-radius: 12px; padding: 10px; aspect-ratio: 1 / 1; display: grid; place-items: center; box-shadow: 0 4px 12px rgba(18, 60, 110, .06) }
        .accred-item img { max-width: 100%; max-height: 100%; width: auto; height: auto; object-fit: contain; display: block }

        /* ---------- STATS ---------- */
        .stats { background: #fff; border-bottom: 1px solid var(--line) }
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; padding: 32px 0 }
        .stat { text-align: center }
        .stat b { font-family: "Poppins"; font-size: 1.85rem; font-weight: 800; color: var(--blue); display: block }
        .stat span { font-size: .85rem; color: var(--muted) }

        /* ---------- ABOUT + NEWS ---------- */
        .about-section { padding: 60px 0; background: #fff }
        .about-grid { display: grid; grid-template-columns: 1.75fr 1fr; gap: 34px; align-items: stretch }
        .about-text h2 { font-size: clamp(1.5rem, 3.2vw, 2.2rem); font-weight: 800; color: var(--blue); margin-bottom: 20px }
        .about-text p { color: var(--muted); margin-bottom: 18px; font-size: 1.02rem }
        .about-text b { color: var(--ink); font-weight: 700 }
        .about-text .lnk { color: var(--link); font-weight: 700; text-decoration: none }
        .about-text .lnk:hover { text-decoration: underline }
        .guidance-btn { display: inline-block; margin-top: 12px; background: var(--amber); color: #3a2a00; font-weight: 700; font-size: 1rem; padding: 16px 34px; border-radius: 8px; text-decoration: none; transition: .18s }
        .guidance-btn:hover { background: var(--amber-deep) }
        .news-panel { background: var(--blue); color: #fff; border-radius: 10px; padding: 30px 30px 34px }
        .news-panel h2 { font-size: 1.5rem; font-weight: 800; margin-bottom: 24px; color: #fff }
        .news-list { list-style: none; display: flex; flex-direction: column }
        .news-item { padding: 14px 0; border-bottom: 1px solid rgba(255, 255, 255, .16); font-size: .96rem; font-weight: 500; line-height: 1.45 }
        .news-item:last-child { border-bottom: none }
        .news-item a { text-decoration: none; color: #fff }
        .news-item a:hover { color: var(--amber) }
        .tag-new { display: inline-block; background: var(--amber); color: #4a2b00; font-size: .66rem; font-weight: 800; padding: 2px 7px; border-radius: 3px; margin-left: 6px; vertical-align: middle }
        @media (min-width:901px) {
            .news-scroll { max-height: 560px; overflow: auto }
            .news-scroll::-webkit-scrollbar { width: 6px }
            .news-scroll::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, .35); border-radius: 6px }
        }

        /* ---------- COURSES ---------- */
        .tabs { display: inline-flex; background: #e7eef7; border-radius: 40px; padding: 5px; margin: 18px 0 30px; gap: 4px }
        .tab { border: none; background: none; font: inherit; font-weight: 600; font-size: .92rem; padding: 10px 26px; border-radius: 40px; cursor: pointer; color: var(--muted) }
        .tab.active { background: var(--blue); color: #fff }
        .course-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px }
        .course { background: var(--card); border: 1px solid var(--line); border-radius: var(--radius); padding: 26px; transition: .2s; display: flex; flex-direction: column }
        .course:hover { transform: translateY(-4px); box-shadow: var(--shadow); border-color: transparent }
        .course .abbr { font-family: "Poppins"; font-weight: 800; font-size: 1.4rem; color: var(--blue) }
        .course .full { font-size: .82rem; font-weight: 600; color: var(--amber-deep); margin: 2px 0 12px }
        .course p { font-size: .9rem; color: var(--muted); flex: 1 }
        .course .row { display: flex; align-items: center; justify-content: space-between; margin-top: 18px }
        .dur { font-size: .76rem; font-weight: 600; background: #eaf1fa; color: var(--blue); padding: 4px 12px; border-radius: 20px }
        .course .more { font-size: .86rem; font-weight: 600; color: var(--blue); text-decoration: none }
        .hidden { display: none }

        /* ---------- CERTIFICATE SECTION ---------- */
        .certificate-section { background: var(--blue-deep); color: #fff; padding: 66px 0 }
        .cert-grid { display: grid; grid-template-columns: 1.15fr .85fr; gap: 46px; align-items: center }
        .cert-text h2 { font-size: clamp(1.4rem, 3vw, 2rem); font-weight: 800; color: #fff; margin-bottom: 20px; line-height: 1.28 }
        .cert-text p { color: #c6d4e8; margin-bottom: 16px; font-size: 1rem; line-height: 1.75 }
        .cert-text b { color: #fff; font-weight: 700 }
        .cert-text .btn { margin-top: 8px }
        .cert-frame { background: #fff; padding: 10px; border-radius: 6px; outline: 5px solid var(--sky); outline-offset: 6px; box-shadow: 0 18px 44px rgba(0, 0, 0, .35); max-width: 430px; margin: 0 auto }
        .cert-frame img { display: block; width: 100%; border-radius: 3px }

        /* ---------- APPLICATION PROCESS ---------- */
        .process-section { background: var(--paper); padding-top: 66px; padding-bottom: 70px }
        .process-head { text-align: center; margin-bottom: 44px }
        .process-head h2 { font-size: clamp(1.6rem, 4vw, 2.5rem); font-weight: 800; color: var(--ink) }
        .process-head h2 span { color: var(--blue) }
        .process-head p { color: var(--muted); margin-top: 8px; max-width: 60ch; margin-left: auto; margin-right: auto }
        .proc-grid { display: grid; grid-template-columns: repeat(7, 1fr); gap: 16px; align-items: start }
        .proc-step { background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 20px 16px 18px; position: relative; box-shadow: var(--shadow) }
        .proc-step:nth-child(even) { margin-top: 58px }
        .proc-num { font-family: "Poppins"; font-size: 2.6rem; font-weight: 800; line-height: 1; color: var(--c); opacity: .92 }
        .proc-icon { width: 46px; height: 46px; border-radius: 12px; background: var(--c); display: grid; place-items: center; margin: 6px 0 12px; box-shadow: 0 6px 16px rgba(0, 0, 0, .12) }
        .proc-step h3 { font-size: 1rem; margin-bottom: 6px; color: var(--ink) }
        .proc-step p { font-size: .84rem; color: var(--muted); line-height: 1.5 }
        /* per-step accent colours */
        .c1 { --c: #e6197d } .c2 { --c: #3f57d6 } .c3 { --c: #f4a825 }
        .c4 { --c: #9b34c4 } .c5 { --c: #229a3f } .c6 { --c: #ff6a1a } .c7 { --c: #1a3a8f }

        /* ---------- FEATURES ---------- */
        .features { background: var(--blue-deep); color: #fff }
        .features .eyebrow { color: var(--amber) }
        .features .lead { color: #c8d6e8 }
        .feat-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; margin-top: 36px }
        .feat { background: rgba(255, 255, 255, .07); border: 1px solid rgba(255, 255, 255, .12); border-radius: var(--radius); padding: 24px }
        .feat .ic { width: 46px; height: 46px; border-radius: 11px; background: var(--amber); display: grid; place-items: center; margin-bottom: 14px }
        .feat h3 { font-size: 1rem; margin-bottom: 6px }
        .feat p { font-size: .86rem; color: #c8d6e8 }

        /* ---------- FAQ ---------- */
        .faq-item { background: var(--card); border: 1px solid var(--line); border-radius: 12px; margin-bottom: 12px; overflow: hidden }
        .faq-q { width: 100%; text-align: left; background: none; border: none; font: inherit; font-weight: 600; font-size: .98rem; padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; gap: 16px; color: var(--ink) }
        .faq-q .plus { font-size: 1.4rem; color: var(--blue-2); transition: .2s; flex-shrink: 0 }
        .faq-item.open .plus { transform: rotate(45deg) }
        .faq-a { max-height: 0; overflow: hidden; transition: max-height .25s ease; color: var(--muted); font-size: .92rem }
        .faq-a p { padding: 0 20px 18px }

        /* ---------- CTA + FOOTER ---------- */
        .cta-banner { background: linear-gradient(120deg, var(--amber), #ffc659); color: #3a2a00; text-align: center; border-radius: 18px; padding: 44px 24px; margin: 0 22px }
        .cta-banner h2 { font-size: clamp(1.4rem, 3vw, 2rem) }
        .cta-banner p { margin: 8px 0 22px; font-weight: 500 }
        .cta-banner .btn { background: var(--blue); color: #fff }
        .cta-banner .btn:hover { background: var(--blue-deep) }
        footer { background: var(--blue-deep); color: #b9c8dc; padding: 54px 0 22px; margin-top: 66px }
        .foot-grid { display: grid; grid-template-columns: 1.6fr 1fr 1fr 1fr; gap: 32px }
        footer h4 { color: #fff; font-family: "Poppins"; font-size: 1rem; margin-bottom: 14px }
        footer ul { list-style: none }
        footer li { margin-bottom: 8px }
        footer a { color: #b9c8dc; text-decoration: none; font-size: .9rem }
        footer a:hover { color: var(--amber) }
        .foot-bottom { border-top: 1px solid rgba(255, 255, 255, .14); margin-top: 34px; padding-top: 20px; text-align: center; font-size: .82rem }
        .disclaimer { font-size: .75rem; color: #8ea3bd; max-width: 74ch; margin: 10px auto 0; line-height: 1.5 }

        .mobile-panel { display: none }

        /* ---------- POPUP / MODAL LEAD FORM ---------- */
        .modal-overlay { position: fixed; inset: 0; z-index: 200; background: rgba(13, 44, 82, .55); backdrop-filter: blur(2px); display: none; align-items: flex-start; justify-content: center; padding: 40px 16px; overflow-y: auto; }
        .modal-overlay.open { display: flex }
        .modal { background: #fff; border-radius: 16px; width: 100%; max-width: 820px; box-shadow: 0 24px 60px rgba(0, 0, 0, .35); animation: pop .2s ease; position: relative; overflow: hidden; }
        @keyframes pop { from { opacity: 0; transform: translateY(14px) } to { opacity: 1; transform: translateY(0) } }
        .modal-head { background: linear-gradient(135deg, var(--blue), var(--blue-2)); color: #fff; padding: 22px 26px; }
        .modal-head h3 { font-size: 1.3rem; font-weight: 800 }
        .modal-head p { font-size: .86rem; color: #d5e2f2; margin-top: 2px }
        .modal-close { position: absolute; top: 16px; right: 18px; background: rgba(255, 255, 255, .18); border: none; color: #fff; width: 34px; height: 34px; border-radius: 50%; font-size: 1.1rem; cursor: pointer; line-height: 1; display: grid; place-items: center; }
        .modal-close:hover { background: rgba(255, 255, 255, .3) }
        .modal-body { padding: 24px 26px 28px }
        .form-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px }
        .form-grid .full { grid-column: 1 / -1 }
        .form-grid .half { grid-column: span 1 }
        .form-grid label { display: block; font-size: .72rem; font-weight: 700; letter-spacing: .03em; text-transform: uppercase; color: var(--muted); margin-bottom: 5px }
        .form-grid input, .form-grid select, .form-grid textarea { width: 100%; padding: 12px 13px; border: 1.5px solid var(--line); border-radius: 9px; font: inherit; font-size: .92rem; background: #fff; }
        .form-grid input:focus, .form-grid select:focus, .form-grid textarea:focus { outline: none; border-color: var(--sky) }
        .form-grid textarea { resize: vertical; min-height: 48px }
        .phone-group { display: flex }
        .phone-prefix { display: flex; align-items: center; gap: 5px; flex-shrink: 0; border: 1.5px solid var(--line); border-right: none; border-radius: 9px 0 0 9px; padding: 0 11px; background: #f6f8fb; font-size: .92rem; font-weight: 600; color: var(--ink); }
        .phone-group input { border-radius: 0 9px 9px 0 }
        .modal-submit { text-align: center; margin-top: 20px }
        .modal-submit .btn { background: var(--blue); color: #fff; padding: 13px 44px; font-size: 1rem }
        .modal-submit .btn:hover { background: var(--blue-deep) }
        @media (max-width:640px) {
            .form-grid { grid-template-columns: 1fr }
            .modal-body { padding: 20px 18px 24px }
        }

        /* ---------- TOAST ---------- */
        .toast { position: fixed; top: 20px; right: 20px; z-index: 300; min-width: 280px; max-width: calc(100vw - 40px); padding: 14px 18px; border-radius: 10px; color: #fff; font-weight: 600; font-size: .95rem; box-shadow: 0 12px 30px rgba(0, 0, 0, .25); display: flex; align-items: center; gap: 10px; transform: translateX(120%); transition: transform .35s ease; }
        .toast.show { transform: translateX(0) }
        .toast.success { background: #1f8a5b }
        .toast.error { background: #c0392b }
        @media (max-width:560px) { .toast { left: 20px; right: 20px; top: 14px } }

        /* responsive logo image */
        .brand img { height: 46px; width: auto; display: block; max-width: 100% }

        /* ================= BREAKPOINTS ================= */
        @media (max-width:1100px) {
            .proc-grid { grid-template-columns: repeat(4, 1fr) }
            .proc-step:nth-child(even) { margin-top: 0 }
        }
        @media (max-width:1000px) {
            .hero-grid { grid-template-columns: 1fr; gap: 32px }
            .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 26px }
            .course-grid { grid-template-columns: repeat(2, 1fr) }
            .feat-grid { grid-template-columns: repeat(2, 1fr) }
            .foot-grid { grid-template-columns: 1fr 1fr }
        }
        @media (max-width:900px) {
            .about-grid { grid-template-columns: 1fr; gap: 28px }
            .guidance-btn { display: block; text-align: center }
            .cert-grid { grid-template-columns: 1fr; gap: 34px }
            .cert-frame { order: -1 }
        }
        @media (max-width:840px) {
            .menu, .nav-cta .btn { display: none }
            .hamburger { display: block }
            .brand img { height: 42px }
            .mobile-panel { display: block; max-height: 0; overflow: hidden; background: #fff; border-bottom: 1px solid var(--line); transition: max-height .3s ease }
            .mobile-panel.open { max-height: 640px }
            .mobile-panel ul { list-style: none; padding: 6px 0 }
            .mobile-panel a, .mobile-panel summary { display: block; padding: 12px 22px; text-decoration: none; color: var(--ink); font-weight: 600; font-size: .95rem; cursor: pointer }
            .mobile-panel a:hover { background: var(--paper); color: var(--blue-2) }
            .mobile-panel details ul a { padding-left: 40px; font-size: .88rem; font-weight: 500; color: var(--muted) }
            .mobile-panel details summary { list-style: none }
            .mobile-panel details summary::-webkit-details-marker { display: none }
            .mobile-panel details summary::after { content: "▾"; float: right; opacity: .6 }
        }
        @media (max-width:760px) {
            .proc-grid { grid-template-columns: repeat(2, 1fr) }
        }
        @media (max-width:560px) {
            .section { padding-top: 48px; padding-bottom: 48px }
            .about-section { padding: 44px 0 }
            .certificate-section { padding: 48px 0 }
            .process-section { padding-top: 48px; padding-bottom: 50px }
            .stats-grid { grid-template-columns: 1fr 1fr }
            .course-grid { grid-template-columns: 1fr }
            .feat-grid { grid-template-columns: 1fr }
            .foot-grid { grid-template-columns: 1fr; gap: 26px }
            .hero-actions .btn { flex: 1 }
            .tabs { width: 100% }
            .tab { flex: 1; padding: 10px 8px }
            .brand-txt small { display: none }
            .brand img { height: 34px }
            .news-panel { padding: 24px 22px 28px }
            .cert-text .btn { display: block; text-align: center }
            .accred-grid { grid-template-columns: repeat(2, 1fr); gap: 10px }
        }
        @media (max-width:460px) {
            .proc-grid { grid-template-columns: 1fr }
        }
        @media (max-width:400px) {
            .container { padding: 0 16px }
            .section h2 { font-size: 1.35rem }
            .lead { font-size: .92rem }
            .course { padding: 20px }
            .course .abbr { font-size: 1.25rem }
            .tab { padding: 9px 6px; font-size: .86rem }
            .faq-q { padding: 15px 14px; font-size: .9rem; gap: 10px; align-items: flex-start }
            .faq-a p { padding: 0 14px 15px }
        }
    </style>
</head>

<body>
    <!-- ============ TOAST ============ -->
    <div id="toast" class="toast"><span id="toastMsg"></span></div>

    <!-- ============ HEADER ============ -->
    <header>
        <div class="container navbar">
            <a href="javascript:void(0);" class="brand" aria-label="IGNOU home">
                <img src="images/ignou-des-logo.webp" alt="IGNOU — Indira Gandhi National Open University">
            </a>

            <nav aria-label="Primary">
                <ul class="menu">
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li class="has-sub"><a href="#courses">Bachelor's</a>
                        <ul class="submenu">
                            <li><a href="javascript:void(0);">BBA</a></li>
                            <li><a href="javascript:void(0);">BCA</a></li>
                            <li><a href="javascript:void(0);">BCom</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#courses">Master's</a>
                        <ul class="submenu">
                            <li><a href="javascript:void(0);">MBA</a></li>
                            <li><a href="javascript:void(0);">MCA</a></li>
                            <li><a href="javascript:void(0);">MA (English)</a></li>
                            <li><a href="javascript:void(0);">M.Sc (Mathematics)</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#courses">Diploma & Certificate</a>
                        <ul class="submenu">
                            <li><a href="javascript:void(0);">PG Diplomas</a></li>
                            <li><a href="javascript:void(0);">Diplomas</a></li>
                            <li><a href="javascript:void(0);">Certificates</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="javascript:void(0);">Student Zone</a>
                        <ul class="submenu">
                            <li><a href="javascript:void(0);">Admission</a></li>
                            <li><a href="javascript:void(0);">Assignments</a></li>
                            <li><a href="javascript:void(0);">Hall Ticket</a></li>
                            <li><a href="javascript:void(0);">Grade Card</a></li>
                            <li><a href="javascript:void(0);">Result</a></li>
                        </ul>
                    </li>
                    <li><a href="#faq">FAQs</a></li>
                </ul>
            </nav>

            <div class="nav-cta">
                <a href="#apply" class="btn btn-amber">Apply Now</a>
                <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">☰</button>
            </div>
        </div>

        <div class="mobile-panel" id="mobilePanel">
            <ul>
                <li><a href="javascript:void(0);">Home</a></li>
                <li>
                    <details>
                        <summary>Bachelor's</summary>
                        <ul>
                            <li><a href="javascript:void(0);">BBA</a></li>
                            <li><a href="javascript:void(0);">BCA</a></li>
                            <li><a href="javascript:void(0);">BCom</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Master's</summary>
                        <ul>
                            <li><a href="javascript:void(0);">MBA</a></li>
                            <li><a href="javascript:void(0);">MCA</a></li>
                            <li><a href="javascript:void(0);">MA (English)</a></li>
                            <li><a href="javascript:void(0);">M.Sc (Mathematics)</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Diploma & Certificate</summary>
                        <ul>
                            <li><a href="javascript:void(0);">PG Diplomas</a></li>
                            <li><a href="javascript:void(0);">Diplomas</a></li>
                            <li><a href="javascript:void(0);">Certificates</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Student Zone</summary>
                        <ul>
                            <li><a href="javascript:void(0);">Admission</a></li>
                            <li><a href="javascript:void(0);">Assignments</a></li>
                            <li><a href="javascript:void(0);">Hall Ticket</a></li>
                            <li><a href="javascript:void(0);">Grade Card</a></li>
                            <li><a href="javascript:void(0);">Result</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="#faq">FAQs</a></li>
            </ul>
        </div>
    </header>

    <!-- ============ HERO ============ -->
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow" style="color:var(--amber)">Admissions Open 2026</span>
                <h1>Study anywhere with <span>India's largest open university</span></h1>
                <p>IGNOU offers flexible, affordable distance and online degrees across Arts, Science, Commerce and Management. The last date to apply for the current session is <b>July 31st, 2026.</b></p>

                <div class="hero-actions">
                    <a href="#apply" class="btn btn-amber">Get Free Counselling</a>
                    <a href="#courses" class="btn btn-ghost">Explore Programmes</a>
                </div>

                <div class="badges">
                    <span class="badge">🎓 Established 1985</span>
                    <span class="badge">✔ UGC-DEB Recognised</span>
                    <span class="badge">🌍 40 Lakh+ learners</span>
                </div>
            </div>

            <div class="lead-card accred-card">
                <h3>Recognised &amp; Accredited</h3>
                <p>IGNOU is approved and accredited by India's top education bodies — your degree is valid nationwide and globally.</p>

                <div class="accred-grid">
                    <div class="accred-item"><img src="/Images/naac.webp" alt="NAAC A++"></div>
                    <div class="accred-item"><img src="/Images/UGC-logo-png.webp" alt="UGC"></div>
                    <div class="accred-item"><img src="/Images/wes.webp" alt="WES"></div>
                    <div class="accred-item"><img src="/Images/mhrd.webp" alt="MHRD"></div>
                </div>

                <a href="#apply" class="btn btn-amber" style="width:100%;margin-top:4px">Request a Callback</a>
                <div class="form-note">We respect your privacy. Used only for admission guidance.</div>
            </div>
        </div>
    </section>

    <!-- ============ STATS ============ -->
    <div class="stats">
        <div class="container stats-grid">
            <div class="stat"><b>40 Lakh+</b><span>Learners served</span></div>
            <div class="stat"><b>1985</b><span>Established</span></div>
            <div class="stat"><b>200+</b><span>Programmes</span></div>
            <div class="stat"><b>2000+</b><span>Study centres</span></div>
        </div>
    </div>

    <!-- ============ ABOUT + NEWS ============ -->
    <section class="about-section">
        <div class="container about-grid">
            <div class="about-text">
                <h2>Indira Gandhi National Open University (IGNOU)</h2>
                <p>IGNOU is a national <b>open university</b> established in <b>1985</b> by an Act of Parliament. It is
                    one of the largest universities in the world by enrolment, offering distance and online
                    <b>undergraduate, postgraduate, diploma and certificate programmes.</b>
                </p>
                <p>IGNOU is recognised by the University Grants Commission (<a class="lnk" href="javascript:void(0);">UGC</a>) and its
                    Distance Education Bureau (<a class="lnk" href="javascript:void(0);">DEB</a>). Its degrees are treated on par with
                    those of conventional universities across India and are widely accepted by employers and for higher
                    study.
                </p>
                <p>The university supports learners through a nationwide network of <b>regional and study centres,
                    printed and digital course material, and academic counselling.</b> This makes quality higher
                    education accessible to working professionals, homemakers and remote learners alike.
                </p>
                <p>If you are considering applying, you will need to meet the eligibility for your chosen programme,
                    complete the online application, and submit the required documents and fee. Once admitted, you can
                    study at your own pace with full academic support.
                </p>
                <a href="#apply" class="guidance-btn">Get FREE Guidance</a>
            </div>

            <aside class="news-panel">
                <h2>Latest News</h2>
                <ul class="news-list news-scroll">
                    <li class="news-item"><a href="javascript:void(0);">Fresh admission for July 2026 session now open for UG &amp; PG programmes<span class="tag-new">New</span></a></li>
                    <li class="news-item"><a href="javascript:void(0);">Last date extended for online re-registration 2026<span class="tag-new">New</span></a></li>
                    <li class="news-item"><a href="javascript:void(0);">June 2026 Term-End Examination date sheet released<span class="tag-new">New</span></a></li>
                    <li class="news-item"><a href="javascript:void(0);">Assignment submission deadline for current session<span class="tag-new">New</span></a></li>
                    <li class="news-item"><a href="javascript:void(0);">Grade card and results update for previous session</a></li>
                    <li class="news-item"><a href="javascript:void(0);">Revised schedule of academic counselling at study centres</a></li>
                    <li class="news-item"><a href="javascript:void(0);">Online admission portal for ODL &amp; online programmes</a></li>
                </ul>
            </aside>
        </div>
    </section>

    <!-- ============ COURSES ============ -->
    <section class="section container" id="courses">
        <span class="eyebrow">Programmes offered</span>
        <h2>Choose your programme</h2>
        <p class="lead">Recognised distance and online degrees across Arts, Science, Commerce and Management.</p>

        <div class="tabs">
            <button class="tab active" data-target="bachelor">Bachelor's</button>
            <button class="tab" data-target="master">Master's</button>
        </div>

        <div class="course-grid" id="bachelor">
            <div class="course">
                <div class="abbr">BBA</div>
                <div class="full">Bachelor of Business Administration</div>
                <p>Management, marketing and organisational skills.</p>
                <div class="row"><span class="dur">3 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
            <div class="course">
                <div class="abbr">BCA</div>
                <div class="full">Bachelor of Computer Applications</div>
                <p>Programming, software and IT foundations.</p>
                <div class="row"><span class="dur">3 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
            <div class="course">
                <div class="abbr">BCom</div>
                <div class="full">Bachelor of Commerce</div>
                <p>Accounting, finance and business fundamentals.</p>
                <div class="row"><span class="dur">3 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
        </div>

        <div class="course-grid hidden" id="master">
            <div class="course">
                <div class="abbr">MBA</div>
                <div class="full">Master Business Administration</div>
                <p>Management education with specialisations.</p>
                <div class="row"><span class="dur">2 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
            <div class="course">
                <div class="abbr">MCA</div>
                <div class="full">Master Computer Applications</div>
                <p>Advanced computing and software development.</p>
                <div class="row"><span class="dur">2 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
            <div class="course">
                <div class="abbr">M.Sc</div>
                <div class="full">Master of Science (Mathematics)</div>
                <p>Postgraduate study in pure and applied mathematics.</p>
                <div class="row"><span class="dur">2 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
            <div class="course">
                <div class="abbr">MA</div>
                <div class="full">Master of Arts (English)</div>
                <p>Advanced study of English literature and language.</p>
                <div class="row"><span class="dur">2 Years</span><a class="more" href="#apply">Know more →</a></div>
            </div>
        </div>
    </section>

    <!-- ============ CERTIFICATE ============ -->
    <section class="certificate-section">
        <div class="container cert-grid">
            <div class="cert-text">
                <h2>IGNOU Degree Certificate — UGC Recognized, NAAC A++ Accredited &amp; Globally Accepted</h2>
                <p>Earn a prestigious degree from Indira Gandhi National Open University (IGNOU) — India's largest and most
                    trusted Open University, approved by <b>UGC-DEB</b> and accredited with the highest <b>NAAC A++</b> grade.
                    IGNOU degrees are legally equivalent to regular full-time university degrees under the UGC Act and are
                    fully valid for higher studies, government jobs, PSU recruitment, competitive exams like UPSC, SSC and
                    Banking, private sector employment and career opportunities abroad.</p>
                <p>Every IGNOU certificate is issued with a unique enrolment number and is verifiable through the official
                    DigiLocker and IGNOU verification portal, making it <b>100% authentic and tamper-proof.</b> The degree is
                    signed by the Registrar and Vice Chancellor, embossed with the official IGNOU seal and printed on secure
                    watermarked paper. With flexible learning, affordable fees and worldwide recognition, an IGNOU degree
                    opens doors to lifelong career growth, promotions and higher education across India and internationally.</p>
                <a href="#apply" class="btn btn-amber">Get FREE Consultation →</a>
            </div>

            <div class="cert-frame">
                <img src="images/sample-degree.webp" alt="IGNOU Degree Certificate sample">
            </div>
        </div>
    </section>

    <!-- ============ APPLICATION PROCESS ============ -->
    <section class="process-section">
        <div class="container">
            <div class="process-head">
                <h2>IGNOU <span>Application Process</span></h2>
                <p>A simple, step-by-step guide to completing your IGNOU admission online.</p>
            </div>

            <div class="proc-grid">
                <div class="proc-step c1">
                    <div class="proc-num">1</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Official Website</h3>
                    <p>Visit the IGNOU official website and navigate to the "Admission" section.</p>
                </div>

                <div class="proc-step c2">
                    <div class="proc-num">2</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Register</h3>
                    <p>Register as a new user and you will receive login credentials.</p>
                </div>

                <div class="proc-step c3">
                    <div class="proc-num">3</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Form Fill up</h3>
                    <p>Fill out the online application form with accurate personal and academic information.</p>
                </div>

                <div class="proc-step c4">
                    <div class="proc-num">4</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Document Upload</h3>
                    <p>Upload required documents, such as scanned copies of certificates and photographs.</p>
                </div>

                <div class="proc-step c5">
                    <div class="proc-num">5</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Application Fee</h3>
                    <p>Pay the application fee through the provided payment options.</p>
                </div>

                <div class="proc-step c6">
                    <div class="proc-num">6</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Submit Form</h3>
                    <p>Submit your application, then you will receive a confirmation email.</p>
                </div>

                <div class="proc-step c7">
                    <div class="proc-num">7</div>
                    <div class="proc-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#fff" stroke-width="1.6"/><path d="M3 12h18" stroke="#fff" stroke-width="1.6"/><path d="M12 3c2.6 2.7 2.6 15.3 0 18M12 3c-2.6 2.7-2.6 15.3 0 18" stroke="#fff" stroke-width="1.6"/></svg>
                    </div>
                    <h3>Save &amp; Print</h3>
                    <p>For your future reference, save and print the application form.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ FEATURES ============ -->
    <section class="features section">
        <div class="container">
            <span class="eyebrow">Why IGNOU</span>
            <h2 style="color:#fff">Learning that fits your life</h2>
            <p class="lead">Affordable, flexible, recognised education you can pursue from anywhere.</p>
            <div class="feat-grid">
                <div class="feat">
                    <div class="ic">
                        <svg width="22" height="22" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h10" stroke="#3a2a00" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Huge reach</h3>
                    <p>Millions of learners across India and abroad.</p>
                </div>
                <div class="feat">
                    <div class="ic">
                        <svg width="22" height="22" viewBox="0 0 24 24">
                            <path d="M12 3l8 4-8 4-8-4 8-4zM6 10v4c0 2 3 3 6 3s6-1 6-3v-4" stroke="#3a2a00" stroke-width="2" fill="none" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Recognised degrees</h3>
                    <p>UGC-DEB recognised, valid nationwide.</p>
                </div>
                <div class="feat">
                    <div class="ic">
                        <svg width="22" height="22" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke="#3a2a00" stroke-width="2" fill="none" />
                            <path d="M12 7v5l3 2" stroke="#3a2a00" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Study at your pace</h3>
                    <p>Flexible schedules with printed & online material.</p>
                </div>
                <div class="feat">
                    <div class="ic">
                        <svg width="22" height="22" viewBox="0 0 24 24">
                            <path d="M3 21l9-16 9 16H3z" stroke="#3a2a00" stroke-width="2" fill="none" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Affordable fees</h3>
                    <p>Among the most cost-effective degrees in India.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ FAQ ============ -->
    <section class="section container" id="faq">
        <span class="eyebrow">Common questions</span>
        <h2>Frequently asked questions</h2>
        <div style="margin-top:26px">
            <div class="faq-item"><button class="faq-q">Are IGNOU degrees valid? <span class="plus">+</span></button>
                <div class="faq-a">
                    <p>Yes. IGNOU degrees are recognised by the UGC and are treated on par with degrees from conventional universities across India.</p>
                </div>
            </div>
            <div class="faq-item"><button class="faq-q">What is the last date to apply? <span class="plus">+</span></button>
                <div class="faq-a">
                    <p>Admission dates vary by session (January and July cycles). Always confirm the current deadline on the official IGNOU portal.</p>
                </div>
            </div>
            <div class="faq-item"><button class="faq-q">Is there an entrance exam? <span class="plus">+</span></button>
                <div class="faq-a">
                    <p>Most programmes have open eligibility with no entrance test, though a few professional programmes may require one.</p>
                </div>
            </div>
            <div class="faq-item"><button class="faq-q">Can I study while working? <span class="plus">+</span></button>
                <div class="faq-a">
                    <p>Yes — IGNOU's open and distance mode is designed for working professionals, with flexible, self-paced study.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ CTA ============ -->
    <div class="cta-banner">
        <h2>Ready to begin? Talk to an expert today.</h2>
        <p>Free admission counselling — get help choosing the right programme.</p>
        <a href="#apply" class="btn">Get Free Counselling</a>
    </div>

    <!-- ============ FOOTER ============ -->
    <footer>
        <div class="container">
            <div class="foot-grid">
                <div>
                    <a href="javascript:void(0);" class="brand" aria-label="IGNOU home" style="margin-bottom:12px">
                        <img src="images/Ignous-logo.webp" alt="IGNOU — Indira Gandhi National Open University">
                    </a>
                    <p style="font-size:.88rem;max-width:34ch">India's national open university — flexible, recognised, affordable higher education.</p>
                </div>
                <div>
                    <h4>Bachelor's</h4>
                    <ul>
                        <li><a href="javascript:void(0);">BBA</a></li>
                        <li><a href="javascript:void(0);">BCA</a></li>
                        <li><a href="javascript:void(0);">BCom</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Master's</h4>
                    <ul>
                        <li><a href="javascript:void(0);">MBA</a></li>
                        <li><a href="javascript:void(0);">MCA</a></li>
                        <li><a href="javascript:void(0);">M.SC (Mathematics)</a></li>
                        <li><a href="javascript:void(0);">MA (English)</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Student Zone</h4>
                    <ul>
                        <li><a href="javascript:void(0);">Admission</a></li>
                        <li><a href="javascript:void(0);">Assignments</a></li>
                        <li><a href="javascript:void(0);">Hall Ticket</a></li>
                        <li><a href="javascript:void(0);">Result</a></li>
                    </ul>
                </div>
            </div>
            <div class="foot-bottom">
                © 2026 IGNOU Admissions — Demo Template
                <p class="disclaimer">Demo/informational template, not affiliated with IGNOU. For official admissions,
                    programmes and fees, always refer to the official IGNOU website at ignou.ac.in.</p>
            </div>
        </div>
    </footer>

    <!-- ============ POPUP LEAD FORM ============ -->
    <div class="modal-overlay" id="leadModal">
        <div class="modal" role="dialog" aria-modal="true" aria-labelledby="leadTitle">
            <div class="modal-head">
                <button class="modal-close" id="leadClose" aria-label="Close">&times;</button>
                <h3 id="leadTitle">Get Free Admission Guidance</h3>
                <p>Fill in your details and our counsellor will call you back.</p>
            </div>

            <form class="modal-body" method="POST" action="submit.php">
                <div class="form-grid">
                    <div class="half">
                        <label for="f-name">Your Name</label>
                        <input id="f-name" name="name" type="text" placeholder="Your name" required>
                    </div>

                    <div class="half">
                        <label for="f-phone">Your Phone</label>
                        <div class="phone-group">
                            <span class="phone-prefix">🇮🇳 +91</span>
                            <input id="f-phone" name="contactno" type="tel" inputmode="numeric" maxlength="10"
                                pattern="[0-9]{10}" placeholder="Your phone" required>
                        </div>
                    </div>

                    <div class="half">
                        <label for="f-email">Your Email</label>
                        <input id="f-email" name="email" type="email" placeholder="Your email">
                    </div>

                    <div class="half">
                        <label for="f-course">Select Course</label>
                        <select id="f-course" name="selectcourse">
                            <option value="">Select course</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="M.Sc (Mathematics)">M.Sc (Mathematics)</option>
                            <option value="MA (English)">MA (English)</option>
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                            <option value="B.Com">B.Com</option>
                        </select>
                    </div>

                    <div class="half">
                        <label for="f-state">State</label>
                        <select id="f-state" name="state">
                            <option value="">Select State</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>

                    <div class="half">
                        <label for="f-mode">Preferred Study Mode</label>
                        <select id="f-mode" name="study_mode">
                            <option value="">Preferred study mode</option>                            
                            <option value="Online">Online</option>
                            <option value="Distance / ODL">Distance / ODL</option>
                        </select>
                    </div>

                    <div style="grid-column:1 / -1">
                        <label for="f-msg">Message</label>
                        <textarea id="f-msg" name="message" rows="1" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="modal-submit">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const burger = document.getElementById('hamburger'), panel = document.getElementById('mobilePanel');
        burger.addEventListener('click', () => { const o = panel.classList.toggle('open'); burger.setAttribute('aria-expanded', o); burger.textContent = o ? '✕' : '☰'; });
        panel.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { panel.classList.remove('open'); burger.textContent = '☰'; }));

        document.querySelectorAll('.tab').forEach(t => t.addEventListener('click', () => {
            document.querySelectorAll('.tab').forEach(x => x.classList.remove('active')); t.classList.add('active');
            document.getElementById('bachelor').classList.toggle('hidden', t.dataset.target !== 'bachelor');
            document.getElementById('master').classList.toggle('hidden', t.dataset.target !== 'master');
        }));

        document.querySelectorAll('.faq-q').forEach(q => q.addEventListener('click', () => {
            const i = q.parentElement, a = q.nextElementSibling, o = i.classList.toggle('open');
            a.style.maxHeight = o ? a.scrollHeight + 'px' : null;
        }));

        /* ---- popup lead form ---- */
        const leadModal = document.getElementById('leadModal');
        function openLead() { leadModal.classList.add('open'); document.body.style.overflow = 'hidden'; }
        function closeLead() { leadModal.classList.remove('open'); document.body.style.overflow = ''; }

        // open from any button/link that points at #apply
        document.querySelectorAll('a[href="#apply"]').forEach(el => {
            el.addEventListener('click', e => { e.preventDefault(); openLead(); });
        });
        document.getElementById('leadClose').addEventListener('click', closeLead);
        leadModal.addEventListener('click', e => { if (e.target === leadModal) closeLead(); }); // backdrop
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLead(); });     // Esc

        /* ---- toast on redirect (?success=1 / ?error=1 from submit.php) ---- */
        (function () {
            const params = new URLSearchParams(location.search);
            const toast = document.getElementById('toast');
            const msg = document.getElementById('toastMsg');
            let type, text;
            if (params.get('success')) { type = 'success'; text = '✔ Thank you! Our counsellor will call you back shortly.'; }
            else if (params.get('error')) { type = 'error'; text = '⚠ Something went wrong. Please try again.'; }
            if (type) {
                toast.classList.add(type);
                msg.textContent = text;
                requestAnimationFrame(() => toast.classList.add('show'));
                setTimeout(() => toast.classList.remove('show'), 5000);
                history.replaceState({}, '', location.pathname);
            }
        })();
    </script>
</body>

</html>
